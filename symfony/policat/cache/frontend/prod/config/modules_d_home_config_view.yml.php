<?php
// auto-generated by sfViewConfigHandler
// date: 2016/06/07 17:23:36
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'dashboard' ? false : 'dashboard'.$this->getExtension());
  }
  $response->addMeta('title', '', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('charset', 'utf8', false, false);

  $response->addStylesheet('', '', NULL);
  $response->addJavascript('', '', NULL);
  $response->addJavascript('dist/frontend', '', array ());

