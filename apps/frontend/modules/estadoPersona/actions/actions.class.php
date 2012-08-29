<?php

/**
 * estadoPersona actions.
 *
 * @package    tesina_udc
 * @subpackage estadoPersona
 * @author     Your name here
 */
class estadoPersonaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->EstadoPersonas = EstadoPersonaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EstadoPersonaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EstadoPersonaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $EstadoPersona = EstadoPersonaQuery::create()->findPk($request->getParameter('id_estado_persona'));
    $this->forward404Unless($EstadoPersona, sprintf('Object EstadoPersona does not exist (%s).', $request->getParameter('id_estado_persona')));
    $this->form = new EstadoPersonaForm($EstadoPersona);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $EstadoPersona = EstadoPersonaQuery::create()->findPk($request->getParameter('id_estado_persona'));
    $this->forward404Unless($EstadoPersona, sprintf('Object EstadoPersona does not exist (%s).', $request->getParameter('id_estado_persona')));
    $this->form = new EstadoPersonaForm($EstadoPersona);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $EstadoPersona = EstadoPersonaQuery::create()->findPk($request->getParameter('id_estado_persona'));
    $this->forward404Unless($EstadoPersona, sprintf('Object EstadoPersona does not exist (%s).', $request->getParameter('id_estado_persona')));
    $EstadoPersona->delete();

    $this->redirect('estadoPersona/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $EstadoPersona = $form->save();

      $this->redirect('estadoPersona/edit?id_estado_persona='.$EstadoPersona->getIdEstadoPersona());
    }
  }
}
