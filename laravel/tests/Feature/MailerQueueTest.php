<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Mailer\Queue;
use App\Structures\Mail as StructMail;
use App\Traits\MemberValidator;
use App\Mailer as QueueMailer;
use App\Util\Util;

class MailerQueueTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInvalidMemberVariables()
    {
        $struct = new StructMail;
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_ERRORS_ENCOUNTERED);
    }

    public function testValidMemberVariables(){
        $struct = new StructMail;
        $struct->to = $struct->from = $struct->subject = $struct->htmlBody = "foobar";
        $this->assertTrue( $struct->validateMemberVariables() != StructMail::VALIDATE_ERRORS_ENCOUNTERED);
    }

    public function testCustomValidatorFunction(){
        $struct = new StructMail;
        $struct->setEmptyQualifierReturn(null);
        $struct->setEmptyQualifier(function($item){
            /* Purposefully fail */
            return null;
        });
        $struct->to = $struct->from = $struct->subject = $struct->htmlBody = "foobar";
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_ERRORS_ENCOUNTERED);

        $struct->setEmptyQualifier("is_null");
        $struct->to = $struct->from = $struct->subject = $struct->htmlBody = null; 
        $struct->setEmptyQualifierReturn(true);
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_ERRORS_ENCOUNTERED);

        /* Test easy qualifiers */
        $struct->easyQualifier("is_null");
        $struct->to = null;
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_ERRORS_ENCOUNTERED);

        /* Test valid data */
        //easyQualifier("is_null") is the same as setting setEmptyQulaifier('is_null'); setEmptyQualifierReturn(true)
        $struct->easyQualifier("is_null");
        $struct->to = 'wmerfalen@gmail.com';
        $struct->from = 'matt@marketapts.com';
        $struct->subject = 'test contact form';
        $struct->htmlBody = '<h1>test</h1>';
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_OKAY);


        /* test valid closure */
        $struct->to = 'wmerfalen@gmail.com';
        $struct->from = 'matt@marketapts.com';
        $struct->subject = 'test contact form';
        $struct->htmlBody = '<h1>test</h1>';
        $struct->setEmptyQualifier(function($item){
            if(strlen($item) == 0){
                return false;
            }
            return true;
        });
        $struct->setEmptyQualifierReturn(false);
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_OKAY);
    }

    public function testMailGetsQueued(){
        /* test valid closure */
        $struct = new StructMail;
        $struct->easyQualifier("is_null");
        $struct->to = 'wmerfalen@gmail.com';
        $struct->from = 'matt@marketapts.com';
        $struct->subject = 'test contact form';
        $struct->htmlBody = '<h1>test</h1>';
        $struct->cc = json_encode([]);
        $struct->setEmptyQualifier(function($item){
            if(strlen($item) == 0){
                return false;
            }
            return true;
        });
        $struct->setEmptyQualifierReturn(false);
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_OKAY);
        
        $queue = new Queue;
        $this->assertTrue($queue->queueItem($struct));
    }

/*
    public function testMailGetsSent(){
        $this->assertTrue(Util::isDev());
        $struct = new StructMail;
        $struct->easyQualifier("is_null");
        $struct->to = 'wmerfalen@gmail.com';
        $struct->from = 'matt@marketapts.com';
        $struct->subject = 'test contact form';
        $struct->htmlBody = '<h1>test</h1>';
        $struct->cc = json_encode([]);
        $struct->setEmptyQualifier(function($item){
            if(strlen($item) == 0){
                return false;
            }
            return true;
        });
        $struct->setEmptyQualifierReturn(false);
        $this->assertTrue( $struct->validateMemberVariables() == StructMail::VALIDATE_OKAY);
        
        $queue = new Queue;
        $this->assertTrue($queue->queueItem($struct));

        $this->assertTrue(QueueMailer::processQueue('contact',['environment' => Queue::ENVIRONMENT_DEV]) > 0);
        
    }

*/
    //TODO: exploit the "withSessioN" function to test cms users :)
    //TODO: exploit the "withSession" function to test resident portal 

    public function testPostControllerSubmitsToQueue(){
        /* Expected to redirect (302) */
        $response = $this->post(env('PHPUNIT_BASE_URL') . '/contact',['lol' => true]);
        $this->assertTrue($response->getStatusCode() == 302);

        $weirdEmail = "wmerfalenactisbecauseimcool@gmail.sulfur.net";
        Queue::where('to_address',$weirdEmail)->get()->each(function(&$item){
            $item->delete();
        });
        /* make a valid post */
        $response = $this->call('post',env('PHPUNIT_BASE_URL') . 'contact',$data = [
            'firstname' => 'William',
            'lastname' => 'Merfalen',
            'email' => $weirdEmail,
            'phone' => '(619) 379-2582',
            'date' => '01/01/1970'
        ],[]);
        $this->assertTrue($response->getStatusCode() == 200);
        $ctr = 0;
        foreach(Queue::where([
            ['to_address','=',$weirdEmail],
            ['environment','=','dev'],
            ['msg_sent','=','0']]
        )->get() as $i => $record){
            $ctr++;
        }
        $this->assertTrue($ctr > 0);

        /* Mark it as sent because lord knows what you gettin into */
        $record = Queue::where('to_address',$weirdEmail)->get()->first();
        $record->msg_sent = '1';
        $record->save();
    }
/**********************************************************************
 * 			pulled from PostController.php
 **********************************************************************
30     protected $_allowed = [
 31         /**********************************************************
 32         /* Routes that process non-authenticated form submissions *
 33         /**********************************************************
 34         'unit'          => 'handleUnit',                    //[covered]2017-05-09
 35         'contact'       => 'handleContact',					//[covered]2017-05-09
 36         'briefContact' => 'handleBriefContact',             //[covered]2017-05-09
 37         'schedule'      => 'handleSchedule',				//[covered]2017-05-09
 38         'apply-online'  => 'handleApplyOnline',             //[covered]2017-05-09
 39
 40         /* Administrative/CMS routes 
 41         'text-tag'      => 'handleTextTag',
 42         'text-tag-get'  => 'handleGetTextTag',
 43
 44         /*****************************
 45         /* Routes for resident portal 
 46         /*****************************
 47         'portal-center' => 'handleResident',
 48         'find-userid'   => 'handleFindUserId',
 49         'reset-password'=> 'handleResetPassword',
 50
 51         /*==========================================================
 52         /* Routes that require authentication (done via middleware) 
 53         /*==========================================================
 54         'resident-contact-mailer'   => 'handleResidentContact',
 55         'maintenance-request'       => 'handleMaintenance',
 56     ];
 5
*/

    public function testUnauthenticatedUserForms(){
        $baseEmail = "wmerfalenactisbecauseimcool@gmail.sulfur.net";
	    function transmutateEmail($em){
            return str_replace("becauseimcool",uniqid(),$em);
        }
        /* Expected to redirect (302) */
        
        $weirdEmail = transmutateEmail($baseEmail);
        Queue::where('to_address',$weirdEmail)->get()->each(function(&$item){
            $item->delete();
        });

  ####    ####   #    #   #####    ##     ####    #####
   #    #  #    #  ##   #     #     #  #   #    #     #
    #       #    #  # #  #     #    #    #  #          #
     #       #    #  #  # #     #    ######  #          #
      #    #  #    #  #   ##     #    #    #  #    #     #
        ####    ####   #    #     #    #    #   ####      #


         ######   ####   #####   #    #
          #       #    #  #    #  ##  ##
           #####   #    #  #    #  # ## #
            #       #    #  #####   #    #
             #       #    #  #   #   #    #
              #        ####   #    #  #    #

        /* make a valid post */
        $response = $this->call('post',env('PHPUNIT_BASE_URL') . 'contact',$data = [
            'firstname' => 'William',
            'lastname' => 'Merfalen',
            'email' => $weirdEmail,
            'phone' => '(619) 379-2582',
            'date' => '01/01/1970'
        ],[]);
        $this->assertTrue($response->getStatusCode() == 200);
        $ctr = 0;
        foreach(Queue::where([
            ['to_address','=',$weirdEmail],
            ['environment','=','dev'],
            ['msg_sent','=','0']]
        )->get() as $i => $record){
            $ctr++;
        }
        $this->assertTrue($ctr > 0);

        /* Mark it as sent because lord knows what you gettin into */
        $record = Queue::where('to_address',$weirdEmail)->get()->first();
        $record->msg_sent = '1';
        $record->save();



  ####    ####   #    #  ######  #####   #    #  #       ######
 #       #    #  #    #  #       #    #  #    #  #       #
  ####   #       ######  #####   #    #  #    #  #       #####
      #  #       #    #  #       #    #  #    #  #       #
 #    #  #    #  #    #  #       #    #  #    #  #       #
  ####    ####   #    #  ######  #####    ####   ######  ######


   ##
  #  #
 #    #
 ######
 #    #
 #    #


  #####   ####   #    #  #####
    #    #    #  #    #  #    #
    #    #    #  #    #  #    #
    #    #    #  #    #  #####
    #    #    #  #    #  #   #
    #     ####    ####   #    #

        /* make a valid post */
/*
$this->validate($req, [
  1             'firstname' => 'required|max:64',
  2             'lastname' => 'required|max:64',
  3             'email' => 'required|email',
  4             'phone' => 'required|max:14|regex:~\([0-9]{3}\) [0-9]{3}\-[0-9]{4}~',
  5             'moveindate' => 'required|max:32',
  6             'visitdate' => 'required|max:15',
  7             'visittime' => 'required|max:15',
  8         ]);
  9         //
 
*/
        $weirdEmail = transmutateEmail($baseEmail);
        Queue::where('to_address',$weirdEmail)->get()->each(function(&$item){
            $item->delete();
        });
        $response = $this->call('post',env('PHPUNIT_BASE_URL') . 'schedule',$data = [
            'firstname' => 'William',
            'lastname' => 'Merfalen',
            'email' => $weirdEmail,
            'phone' => '(619) 379-2582',
            'moveindate' => '01/01/1970',
            'visitdate' => '01/01/1970',
            'visittime' => '10:00:00 AM',
        ],[]);
        $this->assertTrue($response->getStatusCode() == 200);
        $ctr = 0;
        foreach(Queue::where([
            ['to_address','=',$weirdEmail],
            ['environment','=','dev'],
            ['msg_sent','=','0']]
        )->get() as $i => $record){
            $ctr++;
        }
        $this->assertTrue($ctr > 0);

        /* Mark it as sent because lord knows what you gettin into */
        $record = Queue::where('to_address',$weirdEmail)->get()->first();
        $record->msg_sent = '1';
        $record->save();

   ##    #####   #####   #        #   #
  #  #   #    #  #    #  #         # #
 #    #  #    #  #    #  #          #
 ######  #####   #####   #          #
 #    #  #       #       #          #
 #    #  #       #       ######     #


  ####   #    #  #          #    #    #  ######
 #    #  ##   #  #          #    ##   #  #
 #    #  # #  #  #          #    # #  #  #####
 #    #  #  # #  #          #    #  # #  #
 #    #  #   ##  #          #    #   ##  #
  ####   #    #  ######     #    #    #  ######



        $weirdEmail = transmutateEmail($baseEmail);
        Queue::where('to_address',$weirdEmail)->get()->each(function(&$item){
            $item->delete();
        });
        $response = $this->call('post',env('PHPUNIT_BASE_URL') . 'apply-online',$data = [
            'fname' => 'William',
            'lname' => 'Merfalen',
            'email' => $weirdEmail,
            'phone' => '(619) 379-2582',
        ],[]);
        $this->assertTrue($response->getStatusCode() == 200);
        $ctr = 0;
        foreach(Queue::where([
            ['to_address','=',$weirdEmail],
            ['environment','=','dev'],
            ['msg_sent','=','0']]
        )->get() as $i => $record){
            $ctr++;
        }
        $this->assertTrue($ctr > 0);

        /* Mark it as sent because lord knows what you gettin into */
        $record = Queue::where('to_address',$weirdEmail)->get()->first();
        $record->msg_sent = '1';
        $record->save();

		//TODO:!phpunit add detection of redirect javascript


 #    #  #    #     #     #####
  #    #  ##   #     #       #
   #    #  # #  #     #       #
    #    #  #  # #     #       #
     #    #  #   ##     #       #
       ####   #    #     #       #

		/*

  7         $cleaned = [
  6             'unittype' => Util::transformFloorplanName($data['unittype']),
  5             'bed' => intval($data['bed']),
  4             'bath' => floatval($data['bath']),
  3             'sqft' => intval($data['sqft']),
  2             'orig_unittype' => $data['unittype'],
  1         ];
369
		*/
        $response = $this->call('post',env('PHPUNIT_BASE_URL') . 'unit',$data = [
            'unittype' => 'William',
            'bed' => 'Merfalen',
            'bath' => $weirdEmail,
            'sqft' => '(619) 379-2582',
            'orig_unittype' => 'the studio',
        ],[]);
        $this->assertTrue($response->exception == null);
        $ctr = 0;
    }

    


}