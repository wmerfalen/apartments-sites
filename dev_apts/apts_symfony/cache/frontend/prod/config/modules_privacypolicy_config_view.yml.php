<?php
// auto-generated by sfViewConfigHandler
// date: 2014/04/01 22:33:05
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'acaciaSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'acaciaSuccess')
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

  $response->addStylesheet('acacia.css', '', array ());
  $response->addStylesheet('http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('jquery.lightbox-0.5.min.js', '', array ());
  $response->addJavascript('http://maps.google.com/maps/api/js?sensor=false', '', array ());
  $response->addJavascript('http://code.jquery.com/ui/1.9.1/jquery-ui.js', '', array ());
  $response->addJavascript('jquery.gmap.min.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'jspSuccess')
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

  $response->addStylesheet('jsp.css', '', array ());
  $response->addStylesheet('jquery.lightbox-0.5.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('jquery.lightbox-0.5.min.js', '', array ());
  $response->addJavascript('jsp.js', '', array ());
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

  $response->addStylesheet('lightbox', '', array ());
  $response->addStylesheet('styles', '', array ());
  $response->addStylesheet('print', '', array (  'media' => 'print',));
  $response->addStylesheet('ie6-styles', '', array (  'condition' => 'lte IE 6',));
  $response->addJavascript('common', '', array ());
  $response->addJavascript('prototype', '', array ());
  $response->addJavascript('scriptaculous', '', array ());
  $response->addJavascript('builder', '', array ());
  $response->addJavascript('effects', '', array ());
  $response->addJavascript('lightbox', '', array ());
  $response->addJavascript('unitpngfix', '', array (  'condition' => 'lte IE 6',));
}

