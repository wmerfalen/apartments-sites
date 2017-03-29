<?php
// auto-generated by sfViewConfigHandler
// date: 2017/01/19 10:20:17
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'indexSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'indexSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '', false, false);
  $response->addMeta('description', '', false, false);
  $response->addMeta('keywords', '', false, false);


}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Apartments and Rentals | Apartments for Rent, Studio, Townhomes | Virtual Tours, Photos and Floor Plans', false, false);
  $response->addMeta('description', 'Find Apartments for Rent, Studio, Townhomes using Apartment Locator, Listings and Search - View Virtual Tours, Photos, Floor Plans and Rental Information.', false, false);
  $response->addMeta('keywords', 'Apartments, Rent, APTS, Apartment Finder, Rentals, Cheap Apartments, Apartment Search, Studio Apartment, Townhomes, Apartment Locator, Apartment Listings, Apartment Complexes', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('styles.css', '', array ());
  $response->addJavascript('common.js', '', array ());
}

