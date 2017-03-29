<?php

/**
 * features actions.
 *
 * @package    apts_symfony
 * @subpackage features
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class featuresActions extends sfActions
{
  public function preExecute(){
    $IntPropertyId = $this->getUser()->getAttribute('poperty');

    $c = new Criteria();
    $c->add(PropertyPeer::ID,$IntPropertyId,Criteria::IN);
    $this->property = PropertyPeer::doSelectOne($c);

    $c = new Criteria();
    $c->add(PropertyTemplatePeer::PROPERTY_ID,$IntPropertyId,Criteria::IN);
    $this->propertyTemplate = PropertyTemplatePeer::doSelectOne($c);

    $this->getResponse()->setTitle($this->getResponse()->getTitle()." - Features");

    $FaceBookUrl = $this->propertyTemplate->getFacebookUrl();
    $arrURLitemList = array();
    if(1 === preg_match('/\<\-multi\-\>/', $FaceBookUrl, $matches, PREG_OFFSET_CAPTURE)){
      $arrURLList = preg_split ('/$\R?^/m', $FaceBookUrl);
      array_shift($arrURLList);
      //print_r($arrURLList);
      foreach($arrURLList as $itemURL){
        //print_r($itemURL);
        $arrURLitem = explode('~',$itemURL);
        $arrURLitemList[$arrURLitem[0]] = $arrURLitem[1];
        //print_r($arrURLitem);
      }
    } else {
      $arrURLitemList['facebook'] = $FaceBookUrl;
    }
    //print_r($arrURLitemList);
    $this->arrSocialUrls = $arrURLitemList;

    $this->objCustomTemplate= new myCustomTemplate();
  }
  public function executeIndex(sfWebRequest $request)
  {

    $c = new Criteria();
    $c->addJoin(PhotoTypePeer::ID,PropertyPhotoPeer::PHOTO_TYPE_ID);
    $c->add(PhotoTypePeer::NAME,'feature');
    $this->featurePhotos =  $this->property->getPropertyPhotos($c);

    $this->arrFeaturePhoto = array();
    $photocnt = 0;
    foreach($this->featurePhotos as $featurePhoto){
			$photocnt++;
			if($photocnt == 1){
				$this->arrFeaturePhoto[0]['path'] ="/uploads/photos/".$featurePhoto->getImage();
				$this->arrFeaturePhoto[0]['name'] ="/uploads/photos/".$featurePhoto->getName();
			}
			if($photocnt == 2){
				$this->arrFeaturePhoto[1]['path'] ="/uploads/photos/".$featurePhoto->getImage();
				$this->arrFeaturePhoto[1]['name'] ="/uploads/photos/".$featurePhoto->getName();
			}
		}
    //$objAcacia = new myAcacia();

  	//if($objAcacia->isAcatia($this->property->getCode())){
  	if($this->objCustomTemplate->isAcatia($this->property->getCode())){
  		//$this->forward('default', 'acacia');
  		$this->setLayout('acacia_layout');
  		$this->setTemplate('acacia');
  	} elseif($this->objCustomTemplate->isJSP($this->property->getCode())){
  		$this->setLayout('jsp_layout');
			$this->setTemplate('jsp');
  	} elseif($this->objCustomTemplate->isAMC($this->property->getCode())){
  		$this->setLayout('amc_layout');
			$this->setTemplate('amc');
    } elseif($this->objCustomTemplate->isCornerstone($this->property->getCode())){
      $this->setLayout('cornerstone_layout');
      $this->setTemplate('cornerstone');
  	}
  }
}
