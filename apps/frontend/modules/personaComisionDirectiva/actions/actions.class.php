<?php

/**
 * personaComisionDirectiva actions.
 *
 * @package    tesina_udc
 * @subpackage personaComisionDirectiva
 * @author     Your name here
 */
class personaComisionDirectivaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->PersonaComisionDirectivas = PersonaComisionDirectivaQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaComisionDirectivaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonaComisionDirectivaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $PersonaComisionDirectiva = PersonaComisionDirectivaQuery::create()->findPk($request->getParameter('id_persona_comision_directiva'));
    $this->forward404Unless($PersonaComisionDirectiva, sprintf('Object PersonaComisionDirectiva does not exist (%s).', $request->getParameter('id_persona_comision_directiva')));
    $this->form = new PersonaComisionDirectivaForm($PersonaComisionDirectiva);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $PersonaComisionDirectiva = PersonaComisionDirectivaQuery::create()->findPk($request->getParameter('id_persona_comision_directiva'));
    $this->forward404Unless($PersonaComisionDirectiva, sprintf('Object PersonaComisionDirectiva does not exist (%s).', $request->getParameter('id_persona_comision_directiva')));
    $this->form = new PersonaComisionDirectivaForm($PersonaComisionDirectiva);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $PersonaComisionDirectiva = PersonaComisionDirectivaQuery::create()->findPk($request->getParameter('id_persona_comision_directiva'));
    $this->forward404Unless($PersonaComisionDirectiva, sprintf('Object PersonaComisionDirectiva does not exist (%s).', $request->getParameter('id_persona_comision_directiva')));
    $PersonaComisionDirectiva->delete();

    $this->redirect('personaComisionDirectiva/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $PersonaComisionDirectiva = $form->save();

      $this->redirect('personaComisionDirectiva/edit?id_persona_comision_directiva='.$PersonaComisionDirectiva->getIdPersonaComisionDirectiva());
    }
  }
}
