<?php
// auto-generated by sfViewConfigHandler
// date: 2017/03/08 13:36:49
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
else if ($this->actionName.$this->viewName == 'amcSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspLoginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspForgotUserIDSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspForgotPasswordSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcForgotPasswordSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcForgotUserIDSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'acaciaLoginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'acaciaForgotPasswordSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'acaciaForgotUserIDSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcLoginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'jspMaintenanceSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'acaciaMaintenanceSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'amcMaintenanceSuccess')
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
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
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
}
else if ($templateName.$this->viewName == 'jspLoginSuccess')
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
else if ($templateName.$this->viewName == 'jspForgotUserIDSuccess')
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
else if ($templateName.$this->viewName == 'jspForgotPasswordSuccess')
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
else if ($templateName.$this->viewName == 'amcForgotPasswordSuccess')
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
}
else if ($templateName.$this->viewName == 'amcForgotUserIDSuccess')
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
}
else if ($templateName.$this->viewName == 'acaciaLoginSuccess')
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
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'acaciaForgotPasswordSuccess')
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
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'acaciaForgotUserIDSuccess')
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
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'amcLoginSuccess')
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
}
else if ($templateName.$this->viewName == 'jspMaintenanceSuccess')
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
else if ($templateName.$this->viewName == 'acaciaMaintenanceSuccess')
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
  $response->addJavascript('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', array ());
  $response->addJavascript('acacia.js', '', array ());
}
else if ($templateName.$this->viewName == 'amcMaintenanceSuccess')
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

