<?php

/**
 * tipoPersonaJuridica actions.
 *
 * @package    tesina_udc
 * @subpackage tipoPersonaJuridica
 * @author     Your name here
 */
class tipoPersonaJuridicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->TipoPersonaJuridicas = TipoPersonaJuridicaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoPersonaJuridicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoPersonaJuridicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $TipoPersonaJuridica = TipoPersonaJuridicaQuery::create()->findPk($request->getParameter('id_tipo_persona_juridica'));
    $this->forward404Unless($TipoPersonaJuridica, sprintf('Object TipoPersonaJuridica does not exist (%s).', $request->getParameter('id_tipo_persona_juridica')));
    $this->form = new TipoPersonaJuridicaForm($TipoPersonaJuridica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $TipoPersonaJuridica = TipoPersonaJuridicaQuery::create()->findPk($request->getParameter('id_tipo_persona_juridica'));
    $this->forward404Unless($TipoPersonaJuridica, sprintf('Object TipoPersonaJuridica does not exist (%s).', $request->getParameter('id_tipo_persona_juridica')));
    $this->form = new TipoPersonaJuridicaForm($TipoPersonaJuridica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $TipoPersonaJuridica = TipoPersonaJuridicaQuery::create()->findPk($request->getParameter('id_tipo_persona_juridica'));
    $this->forward404Unless($TipoPersonaJuridica, sprintf('Object TipoPersonaJuridica does not exist (%s).', $request->getParameter('id_tipo_persona_juridica')));
    $TipoPersonaJuridica->delete();

    $this->redirect('tipoPersonaJuridica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $TipoPersonaJuridica = $form->save();

      $this->redirect('tipoPersonaJuridica/edit?id_tipo_persona_juridica='.$TipoPersonaJuridica->getIdTipoPersonaJuridica());
    }
  }
}
