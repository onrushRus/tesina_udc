<?php

/**
 * persona actions.
 *
 * @package    tesina_udc
 * @subpackage persona
 * @author     Your name here
 */
class personaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Personas = PersonaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Persona = PersonaQuery::create()->findPk($request->getParameter('id_persona'));
    $this->forward404Unless($Persona, sprintf('Object Persona does not exist (%s).', $request->getParameter('id_persona')));
    $this->form = new PersonaForm($Persona);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Persona = PersonaQuery::create()->findPk($request->getParameter('id_persona'));
    $this->forward404Unless($Persona, sprintf('Object Persona does not exist (%s).', $request->getParameter('id_persona')));
    $this->form = new PersonaForm($Persona);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Persona = PersonaQuery::create()->findPk($request->getParameter('id_persona'));
    $this->forward404Unless($Persona, sprintf('Object Persona does not exist (%s).', $request->getParameter('id_persona')));
    $Persona->delete();

    $this->redirect('persona/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Persona = $form->save();

      $this->redirect('persona/index');
      //$this->redirect('persona/edit?id_persona='.$Persona->getIdPersona());
    }
  }
}
