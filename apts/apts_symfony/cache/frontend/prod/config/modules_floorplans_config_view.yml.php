<?php
// auto-generated by sfViewConfigHandler
// date: 2017/03/08 13:34:47
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'acaciaSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'acaciadetailSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspdetailSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcdetailSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'cornerstoneSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'cornerstonedetailSuccess')
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
  $response->addMeta('viewport', 'width=device-width; initial-scale=1; maximum-scale=1', false, false);

  $response->addStylesheet('acacia.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'acaciadetailSuccess')
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
  $response->addMeta('viewport', 'width=device-width; initial-scale=1; maximum-scale=1', false, false);

  $response->addStylesheet('acacia.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
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

  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:300', '', array ());
  $response->addStylesheet('jsp.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('jsp.js', '', array ());
}
else if ($templateName.$this->viewName == 'jspdetailSuccess')
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

  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:300', '', array ());
  $response->addStylesheet('jsp.css', '', array ());
  $response->addStylesheet('jquery.lightbox.css', '', array ());
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('jquery.lightbox.min.js', '', array ());
  $response->addJavascript('jsp.js', '', array ());
}
else if ($templateName.$this->viewName == 'amcSuccess')
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

  $response->addStylesheet('//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css', '', array ());
  $response->addStylesheet('respmain.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addJavascript('//code.jquery.com/jquery-2.1.0.min.js', '', array ());
  $response->addJavascript('//code.jquery.com/ui/1.10.3/jquery-ui.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('jquery.gmap.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.0.6/jquery.mousewheel.min.js', '', array ());
  $response->addJavascript('respscripts.js', '', array ());
  $response->addJavascript('iframeresizer.min.js', '', array ());
  $response->addJavascript('iframeresizer.contentwindow.min.js', '', array ());
  $response->addJavascript('myiframe.js', '', array ());
}
else if ($templateName.$this->viewName == 'amcdetailSuccess')
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

  $response->addStylesheet('//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css', '', array ());
  $response->addStylesheet('respmain.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addJavascript('//code.jquery.com/jquery-2.1.0.min.js', '', array ());
  $response->addJavascript('//code.jquery.com/ui/1.10.3/jquery-ui.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('jquery.gmap.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.0.6/jquery.mousewheel.min.js', '', array ());
  $response->addJavascript('respscripts.js', '', array ());
  $response->addJavascript('iframeresizer.min.js', '', array ());
  $response->addJavascript('iframeresizer.contentwindow.min.js', '', array ());
  $response->addJavascript('myiframe.js', '', array ());
}
else if ($templateName.$this->viewName == 'cornerstoneSuccess')
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

  $response->addStylesheet('//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addStylesheet('cornerstone_apt.css', '', array ());
  $response->addJavascript('//code.jquery.com/jquery-1.11.3.min.js', '', array ());
  $response->addJavascript('//code.jquery.com/ui/1.11.3/jquery-ui.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.carousel.min.js', '', array ());
  $response->addJavascript('cornerstone_apt.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('3dtournav.js', '', array ());
}
else if ($templateName.$this->viewName == 'cornerstonedetailSuccess')
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

  $response->addStylesheet('//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css', '', array ());
  $response->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', '', array ());
  $response->addStylesheet('cornerstone_apt.css', '', array ());
  $response->addJavascript('//code.jquery.com/jquery-1.11.3.min.js', '', array ());
  $response->addJavascript('//code.jquery.com/ui/1.11.3/jquery-ui.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.carousel.min.js', '', array ());
  $response->addJavascript('cornerstone_apt.js', '', array ());
  $response->addJavascript('box.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', '', array ());
  $response->addJavascript('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', '', array ());
  $response->addJavascript('3dtournav.js', '', array ());
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
}

