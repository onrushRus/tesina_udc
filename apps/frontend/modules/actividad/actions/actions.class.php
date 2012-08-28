<?php

/**
 * actividad actions.
 *
 * @package    tesina_udc
 * @subpackage actividad
 * @author     Your name here
 */
class actividadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Actividads = ActividadQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ActividadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ActividadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Actividad = ActividadQuery::create()->findPk($request->getParameter('id_actividad'));
    $this->forward404Unless($Actividad, sprintf('Object Actividad does not exist (%s).', $request->getParameter('id_actividad')));
    $this->form = new ActividadForm($Actividad);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Actividad = ActividadQuery::create()->findPk($request->getParameter('id_actividad'));
    $this->forward404Unless($Actividad, sprintf('Object Actividad does not exist (%s).', $request->getParameter('id_actividad')));
    $this->form = new ActividadForm($Actividad);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Actividad = ActividadQuery::create()->findPk($request->getParameter('id_actividad'));
    $this->forward404Unless($Actividad, sprintf('Object Actividad does not exist (%s).', $request->getParameter('id_actividad')));
    $Actividad->delete();

    $this->redirect('actividad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Actividad = $form->save();

      $this->redirect('actividad/edit?id_actividad='.$Actividad->getIdActividad());
    }
  }
}
