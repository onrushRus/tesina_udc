<?php

/**
 * puestoComisionDirectiva actions.
 *
 * @package    tesina_udc
 * @subpackage puestoComisionDirectiva
 * @author     Your name here
 */
class puestoComisionDirectivaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->PuestoComisionDirectivas = PuestoComisionDirectivaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PuestoComisionDirectivaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PuestoComisionDirectivaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $PuestoComisionDirectiva = PuestoComisionDirectivaQuery::create()->findPk($request->getParameter('id_puesto_comision_directiva'));
    $this->forward404Unless($PuestoComisionDirectiva, sprintf('Object PuestoComisionDirectiva does not exist (%s).', $request->getParameter('id_puesto_comision_directiva')));
    $this->form = new PuestoComisionDirectivaForm($PuestoComisionDirectiva);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $PuestoComisionDirectiva = PuestoComisionDirectivaQuery::create()->findPk($request->getParameter('id_puesto_comision_directiva'));
    $this->forward404Unless($PuestoComisionDirectiva, sprintf('Object PuestoComisionDirectiva does not exist (%s).', $request->getParameter('id_puesto_comision_directiva')));
    $this->form = new PuestoComisionDirectivaForm($PuestoComisionDirectiva);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $PuestoComisionDirectiva = PuestoComisionDirectivaQuery::create()->findPk($request->getParameter('id_puesto_comision_directiva'));
    $this->forward404Unless($PuestoComisionDirectiva, sprintf('Object PuestoComisionDirectiva does not exist (%s).', $request->getParameter('id_puesto_comision_directiva')));
    $PuestoComisionDirectiva->delete();

    $this->redirect('puestoComisionDirectiva/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $PuestoComisionDirectiva = $form->save();

      $this->redirect('puestoComisionDirectiva/edit?id_puesto_comision_directiva='.$PuestoComisionDirectiva->getIdPuestoComisionDirectiva());
    }
  }
}
