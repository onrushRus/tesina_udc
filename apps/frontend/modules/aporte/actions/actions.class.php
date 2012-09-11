<?php

/**
 * aporte actions.
 *
 * @package    tesina_udc
 * @subpackage aporte
 * @author     Your name here
 */
class aporteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Aportes = AporteQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AporteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AporteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $this->form = new AporteForm($Aporte);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $this->form = new AporteForm($Aporte);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $Aporte->delete();

    $this->redirect('aporte/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Aporte = $form->save();

      $this->redirect('aporte/edit?id_aporte='.$Aporte->getIdAporte());
    }
  }
}
