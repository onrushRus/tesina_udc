<?php

/**
 * tipoUsuario actions.
 *
 * @package    tesina_udc
 * @subpackage tipoUsuario
 * @author     Your name here
 */
class tipoUsuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->TipoUsuarios = TipoUsuarioQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoUsuarioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoUsuarioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $TipoUsuario = TipoUsuarioQuery::create()->findPk($request->getParameter('id_tipo_usuario'));
    $this->forward404Unless($TipoUsuario, sprintf('Object TipoUsuario does not exist (%s).', $request->getParameter('id_tipo_usuario')));
    $this->form = new TipoUsuarioForm($TipoUsuario);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $TipoUsuario = TipoUsuarioQuery::create()->findPk($request->getParameter('id_tipo_usuario'));
    $this->forward404Unless($TipoUsuario, sprintf('Object TipoUsuario does not exist (%s).', $request->getParameter('id_tipo_usuario')));
    $this->form = new TipoUsuarioForm($TipoUsuario);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $TipoUsuario = TipoUsuarioQuery::create()->findPk($request->getParameter('id_tipo_usuario'));
    $this->forward404Unless($TipoUsuario, sprintf('Object TipoUsuario does not exist (%s).', $request->getParameter('id_tipo_usuario')));
    $TipoUsuario->delete();

    $this->redirect('tipoUsuario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $TipoUsuario = $form->save();

      $this->redirect('tipoUsuario/edit?id_tipo_usuario='.$TipoUsuario->getIdTipoUsuario());
    }
  }
}
