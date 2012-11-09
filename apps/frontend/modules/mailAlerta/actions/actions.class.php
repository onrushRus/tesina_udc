<?php

/**
 * mailAlerta actions.
 *
 * @package    tesina_udc
 * @subpackage mailAlerta
 * @author     Your name here
 */
class mailAlertaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->MailAlertas = MailAlertaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MailAlertaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MailAlertaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $MailAlerta = MailAlertaQuery::create()->findPk($request->getParameter('id_tipo_alerta'));
    $this->forward404Unless($MailAlerta, sprintf('Object MailAlerta does not exist (%s).', $request->getParameter('id_tipo_alerta')));
    $this->form = new MailAlertaForm($MailAlerta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $MailAlerta = MailAlertaQuery::create()->findPk($request->getParameter('id_tipo_alerta'));
    $this->forward404Unless($MailAlerta, sprintf('Object MailAlerta does not exist (%s).', $request->getParameter('id_tipo_alerta')));
    $this->form = new MailAlertaForm($MailAlerta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $MailAlerta = MailAlertaQuery::create()->findPk($request->getParameter('id_tipo_alerta'));
    $this->forward404Unless($MailAlerta, sprintf('Object MailAlerta does not exist (%s).', $request->getParameter('id_tipo_alerta')));
    $MailAlerta->delete();

    $this->redirect('mailAlerta/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $MailAlerta = $form->save();

      $this->redirect('mailAlerta/index');
      //$this->redirect('mailAlerta/edit?id_tipo_alerta='.$MailAlerta->getIdTipoAlerta());
    }
  }
}
