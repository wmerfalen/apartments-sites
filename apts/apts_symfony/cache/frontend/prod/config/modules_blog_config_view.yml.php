<?php
// auto-generated by sfViewConfigHandler
// date: 2017/03/09 09:00:10
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



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
  $response->addStylesheet('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/smoothness/jquery-ui.css', '', array ());
  $response->addJavascript('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', '', array ());
  $response->addJavascript('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js', '', array ());
  $response->addJavascript('common', '', array ());
  $response->addJavascript('prototype', '', array ());
  $response->addJavascript('scriptaculous', '', array ());
  $response->addJavascript('builder', '', array ());
  $response->addJavascript('effects', '', array ());
  $response->addJavascript('lightbox', '', array ());
  $response->addJavascript('unitpngfix', '', array (  'condition' => 'lte IE 6',));


