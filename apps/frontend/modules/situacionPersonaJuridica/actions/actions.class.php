<?php

/**
 * situacionPersonaJuridica actions.
 *
 * @package    tesina_udc
 * @subpackage situacionPersonaJuridica
 * @author     Your name here
 */
class situacionPersonaJuridicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->SituacionPersonaJuridicas = SituacionPersonaJuridicaQuery::create()
            ->orderByIdSituacionPersJuridica()
            ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SituacionPersonaJuridicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SituacionPersonaJuridicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $SituacionPersonaJuridica = SituacionPersonaJuridicaQuery::create()->findPk($request->getParameter('id_situacion_pers_juridica'));
    $this->forward404Unless($SituacionPersonaJuridica, sprintf('Object SituacionPersonaJuridica does not exist (%s).', $request->getParameter('id_situacion_pers_juridica')));
    $this->form = new SituacionPersonaJuridicaForm($SituacionPersonaJuridica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $SituacionPersonaJuridica = SituacionPersonaJuridicaQuery::create()->findPk($request->getParameter('id_situacion_pers_juridica'));
    $this->forward404Unless($SituacionPersonaJuridica, sprintf('Object SituacionPersonaJuridica does not exist (%s).', $request->getParameter('id_situacion_pers_juridica')));
    $this->form = new SituacionPersonaJuridicaForm($SituacionPersonaJuridica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $SituacionPersonaJuridica = SituacionPersonaJuridicaQuery::create()->findPk($request->getParameter('id_situacion_pers_juridica'));
    $this->forward404Unless($SituacionPersonaJuridica, sprintf('Object SituacionPersonaJuridica does not exist (%s).', $request->getParameter('id_situacion_pers_juridica')));
    $SituacionPersonaJuridica->delete();

    $this->redirect('situacionPersonaJuridica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $SituacionPersonaJuridica = $form->save();

      $this->redirect('situacionPersonaJuridica/index');
      //$this->redirect('situacionPersonaJuridica/edit?id_situacion_pers_juridica='.$SituacionPersonaJuridica->getIdSituacionPersJuridica());
    }
  }
}
