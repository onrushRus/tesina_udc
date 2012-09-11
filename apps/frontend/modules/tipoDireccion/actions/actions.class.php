<?php

/**
 * tipoDireccion actions.
 *
 * @package    tesina_udc
 * @subpackage tipoDireccion
 * @author     Your name here
 */
class tipoDireccionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->TipoDireccions = TipoDireccionQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoDireccionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoDireccionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $TipoDireccion = TipoDireccionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($TipoDireccion, sprintf('Object TipoDireccion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoDireccionForm($TipoDireccion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $TipoDireccion = TipoDireccionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($TipoDireccion, sprintf('Object TipoDireccion does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoDireccionForm($TipoDireccion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $TipoDireccion = TipoDireccionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($TipoDireccion, sprintf('Object TipoDireccion does not exist (%s).', $request->getParameter('id')));
    $TipoDireccion->delete();

    $this->redirect('tipoDireccion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $TipoDireccion = $form->save();

      $this->redirect('tipoDireccion/edit?id='.$TipoDireccion->getId());
    }
  }
}
