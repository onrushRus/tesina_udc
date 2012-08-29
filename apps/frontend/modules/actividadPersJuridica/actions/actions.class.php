<?php

/**
 * actividadPersJuridica actions.
 *
 * @package    tesina_udc
 * @subpackage actividadPersJuridica
 * @author     Your name here
 */
class actividadPersJuridicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ActividadPersJuridicas = ActividadPersJuridicaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ActividadPersJuridicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ActividadPersJuridicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $ActividadPersJuridica = ActividadPersJuridicaQuery::create()->findPk($request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id'));
    $this->forward404Unless($ActividadPersJuridica, sprintf('Object ActividadPersJuridica does not exist (%s).', $request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id')));
    $this->form = new ActividadPersJuridicaForm($ActividadPersJuridica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $ActividadPersJuridica = ActividadPersJuridicaQuery::create()->findPk($request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id'));
    $this->forward404Unless($ActividadPersJuridica, sprintf('Object ActividadPersJuridica does not exist (%s).', $request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id')));
    $this->form = new ActividadPersJuridicaForm($ActividadPersJuridica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $ActividadPersJuridica = ActividadPersJuridicaQuery::create()->findPk($request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id'));
    $this->forward404Unless($ActividadPersJuridica, sprintf('Object ActividadPersJuridica does not exist (%s).', $request->getParameter('actividad_id'),
 $request->getParameter('persona_juridica_id')));
    $ActividadPersJuridica->delete();

    $this->redirect('actividadPersJuridica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ActividadPersJuridica = $form->save();

      $this->redirect('actividadPersJuridica/edit?actividad_id='.$ActividadPersJuridica->getActividadId().'&persona_juridica_id='.$ActividadPersJuridica->getPersonaJuridicaId());
    }
  }
}
