<?php

/**
 * tipoAsamblea actions.
 *
 * @package    tesina_udc
 * @subpackage tipoAsamblea
 * @author     Your name here
 */
class tipoAsambleaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->TipoAsambleas = TipoAsambleaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoAsambleaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoAsambleaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $TipoAsamblea = TipoAsambleaQuery::create()->findPk($request->getParameter('id_tipo_asamblea'));
    $this->forward404Unless($TipoAsamblea, sprintf('Object TipoAsamblea does not exist (%s).', $request->getParameter('id_tipo_asamblea')));
    $this->form = new TipoAsambleaForm($TipoAsamblea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $TipoAsamblea = TipoAsambleaQuery::create()->findPk($request->getParameter('id_tipo_asamblea'));
    $this->forward404Unless($TipoAsamblea, sprintf('Object TipoAsamblea does not exist (%s).', $request->getParameter('id_tipo_asamblea')));
    $this->form = new TipoAsambleaForm($TipoAsamblea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $TipoAsamblea = TipoAsambleaQuery::create()->findPk($request->getParameter('id_tipo_asamblea'));
    $this->forward404Unless($TipoAsamblea, sprintf('Object TipoAsamblea does not exist (%s).', $request->getParameter('id_tipo_asamblea')));
    $TipoAsamblea->delete();

    $this->redirect('tipoAsamblea/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $TipoAsamblea = $form->save();

      $this->redirect('tipoAsamblea/edit?id_tipo_asamblea='.$TipoAsamblea->getIdTipoAsamblea());
    }
  }
}
