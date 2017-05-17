<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Property\Entity as PropertyEntity;
use App\Legacy\Property as LegacyProperty;
use App\Property\Site as Site;
use App\Util\Util;
use Redis;

class VirtualHostSwitch extends ServiceProvider
{
    public function register(){
        
    }
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $tempThis = $this;
        $this->app->bind(Site::class,function() use($tempThis) {
            if(Util::isCommandLine()){
                return Site::$instance = $this->newCommandLineSite();
            }
            $entity = null;
            if($entity === null){
                $entity = PropertyEntity::where('fk_legacy_property_id',$tempThis->_resolveSiteId())->get()->first();   
            }
            if($entity === null){
				$prop = new PropertyEntity;
				$legacy = LegacyProperty::where('url','like','%' . Util::serverName() . '%')->get()->first();
                if($legacy === null){
				    $legacy = LegacyProperty::where('devurl','like','%' . Util::serverName() . '%')->get()->first();
                }
				$cbCounter = 5;
				$fileSystemId = $prop->generateFilesystemId($legacy,function() use($cbCounter) {
					if($cbCounter-- <= 0){
						return null;
					}
					else{
						return 'retry';
					}
				});
				$entity = $prop->createNew([
					'_property_group_name' => [
						'name' => 'Dinali'
					],
					'property_group_id' => 0,
					'property_name' => $legacy->name,
					'filesystem_id' => $fileSystemId
				],$legacy);
            }
            return Site::$instance = new Site($entity);
        });
    }

==== BASE ====
==== BASE ====
    private function _resolveSiteId(){
        $serverName = preg_replace("|^staging\.|","",$_SERVER['SERVER_NAME']);
        $serverName = preg_replace("|^dev\.|","",$_SERVER['SERVER_NAME']);
        if(preg_match('|^www\.|',$_SERVER['SERVER_NAME'])){ 
==== BASE ====
            $site = LegacyProperty::where('url','like','http://' . $this->_dev($_SERVER['SERVER_NAME']) . '%')->get();
==== BASE ====
        }else{
==== BASE ====
            $site = LegacyProperty::where('url','like','http://www.' . $this->_dev($_SERVER['SERVER_NAME']) . '%')->get();
==== BASE ====
        }
        if(count($site)){
            Site::$site_id_set = true;
            \Debugbar::info($serverName);
            Site::$site_id = $site->first()->id;
            return Site::$site_id;
        }
    }

==== BASE ====
    //!devonly
    private function _dev(){
        return preg_replace("|^dev\.|","",$_SERVER['SERVER_NAME']);
    }


==== BASE ====
}
