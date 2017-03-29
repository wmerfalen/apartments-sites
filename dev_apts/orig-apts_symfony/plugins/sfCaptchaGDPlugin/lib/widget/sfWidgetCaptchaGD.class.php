<?php
class sfWidgetCaptchaGD extends sfWidgetForm
{
  protected function configure($options = array(), $attributes = array())
  {
  }
  
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $context = sfContext::getInstance();
    $url = $context->getRouting()->generate("sf_captchagd");
    return "<a href='' onClick='return false' title='Reload image'><img src='$url?".time()."' onClick='this.src=\"$url?r=\" + Math.random() + \"&reload=1\"' border='0' class='captcha' /></a><br />
           <input type='text' name='$name' value='".$context->getRequest()->getPostParameter($name)."' class='captcha' />";
  }
}
