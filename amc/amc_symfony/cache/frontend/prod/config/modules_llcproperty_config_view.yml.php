<?php
// auto-generated by sfViewConfigHandler
// date: 2017/01/19 10:13:47
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'llciframe' ? false : 'llciframe'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'AMCapartments.com | Find an Apartment Today | Find Apartments for Rent, Houses, Condos and Townhomes | Rental Listings', false, false);
  $response->addMeta('description', 'Find and rent apartments, condos and townhomes. View floor plans and photos.', false, false);
  $response->addMeta('keywords', 'rent, apartments, houses, condo, townhomes, townhouses, apartments for rent, apartment finder, for rent by owner', false, false);
  $response->addMeta('language', 'en', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('llciframe', '', array ());
  $response->addJavascript('common.js', '', array ());


