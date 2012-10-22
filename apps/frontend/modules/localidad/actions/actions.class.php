<?php

/**
 * localidad actions.
 *
 * @package    tesina_udc
 * @subpackage localidad
 * @author     Your name here
 */
class localidadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Localidads = LocalidadQuery::create()
            ->orderByNombreLocalidad()
            ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LocalidadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LocalidadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Localidad = LocalidadQuery::create()->findPk($request->getParameter('id_localidad'));
    $this->forward404Unless($Localidad, sprintf('Object Localidad does not exist (%s).', $request->getParameter('id_localidad')));
    $this->form = new LocalidadForm($Localidad);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Localidad = LocalidadQuery::create()->findPk($request->getParameter('id_localidad'));
    $this->forward404Unless($Localidad, sprintf('Object Localidad does not exist (%s).', $request->getParameter('id_localidad')));
    $this->form = new LocalidadForm($Localidad);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Localidad = LocalidadQuery::create()->findPk($request->getParameter('id_localidad'));
    $this->forward404Unless($Localidad, sprintf('Object Localidad does not exist (%s).', $request->getParameter('id_localidad')));
    $Localidad->delete();

    $this->redirect('localidad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Localidad = $form->save();

      $this->redirect('localidad/index');      
      //$this->redirect('localidad/edit?id_localidad='.$Localidad->getIdLocalidad());
    }
  }
}
