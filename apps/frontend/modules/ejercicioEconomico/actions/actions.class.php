<?php

/**
 * ejercicioEconomico actions.
 *
 * @package    tesina_udc
 * @subpackage ejercicioEconomico
 * @author     Your name here
 */
class ejercicioEconomicoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->EjercicioEconomicos = EjercicioEconomicoQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EjercicioEconomicoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EjercicioEconomicoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $EjercicioEconomico = EjercicioEconomicoQuery::create()->findPk($request->getParameter('id_ejercicio_economico'));
    $this->forward404Unless($EjercicioEconomico, sprintf('Object EjercicioEconomico does not exist (%s).', $request->getParameter('id_ejercicio_economico')));
    $this->form = new EjercicioEconomicoForm($EjercicioEconomico);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $EjercicioEconomico = EjercicioEconomicoQuery::create()->findPk($request->getParameter('id_ejercicio_economico'));
    $this->forward404Unless($EjercicioEconomico, sprintf('Object EjercicioEconomico does not exist (%s).', $request->getParameter('id_ejercicio_economico')));
    $this->form = new EjercicioEconomicoForm($EjercicioEconomico);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $EjercicioEconomico = EjercicioEconomicoQuery::create()->findPk($request->getParameter('id_ejercicio_economico'));
    $this->forward404Unless($EjercicioEconomico, sprintf('Object EjercicioEconomico does not exist (%s).', $request->getParameter('id_ejercicio_economico')));
    $EjercicioEconomico->delete();

    $this->redirect('ejercicioEconomico/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $EjercicioEconomico = $form->save();

      $this->redirect('ejercicioEconomico/index');      
      //$this->redirect('ejercicioEconomico/edit?id_ejercicio_economico='.$EjercicioEconomico->getIdEjercicioEconomico());
    }
  }
}
