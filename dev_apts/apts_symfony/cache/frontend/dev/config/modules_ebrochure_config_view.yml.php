<?php
// auto-generated by sfViewConfigHandler
// date: 2013/06/19 12:20:44
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
  $response->addStylesheet('jquery.lightbox-0.5.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('jquery.lightbox-0.5.min.js', '', array ());
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

  $response->addStylesheet('jsp-eb.css', '', array ());
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

