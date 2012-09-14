<?php

/**
 * personaJuridica actions.
 *
 * @package    tesina_udc
 * @subpackage personaJuridica
 * @author     Your name here
 */
class personaJuridicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->PersonaJuridicas = PersonaJuridicaQuery::create()->find();
    $this->entes = PersonaJuridicaQuery::create()->find();    
    $this->PersonaJuridicas = array();
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){
        //guardo el nombre de fantasia del ente
        $ente = $request->getParameter('ente');
        //si no esta vacío el campo "nombre_fantasia", filtro por ese campo
        if((!empty($ente)) && ($ente != '*')){
            //creo otra consulta
            $consulta2 = PersonaJuridicaQuery::create();
            $consulta2->filterByNombreFantasia($ente);
            $enteAux = $consulta2->find();
            $this->PersonaJuridicas = $enteAux;
            $this->dirReal = DireccionQuery::create()
                    ->groupByPersonaJuridicaId($enteAux)
                    ->filterByTipoDireccionId('1') //segun la tabla de tipo_direccion_id, el 1 es "Real"
                    ->findOne();
            $this->dirPostal = DireccionQuery::create()
                    ->groupByPersonaJuridicaId($enteAux)
                    ->filterByTipoDireccionId('2') //segun la tabla de tipo_direccion_id, el 2 es "Postal"
                    ->findOne();
        }
    }
    
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaJuridicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonaJuridicaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $PersonaJuridica = PersonaJuridicaQuery::create()->findPk($request->getParameter('id_persona_juridica'));
    $this->forward404Unless($PersonaJuridica, sprintf('Object PersonaJuridica does not exist (%s).', $request->getParameter('id_persona_juridica')));
    $this->form = new PersonaJuridicaForm($PersonaJuridica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $PersonaJuridica = PersonaJuridicaQuery::create()->findPk($request->getParameter('id_persona_juridica'));
    $this->forward404Unless($PersonaJuridica, sprintf('Object PersonaJuridica does not exist (%s).', $request->getParameter('id_persona_juridica')));
    $this->form = new PersonaJuridicaForm($PersonaJuridica);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $PersonaJuridica = PersonaJuridicaQuery::create()->findPk($request->getParameter('id_persona_juridica'));
    $this->forward404Unless($PersonaJuridica, sprintf('Object PersonaJuridica does not exist (%s).', $request->getParameter('id_persona_juridica')));
    $PersonaJuridica->delete();

    $this->redirect('personaJuridica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $PersonaJuridica = $form->save();

      //$this->redirect('personaJuridica/index');
      $this->redirect('personaJuridica/index?ente='.$PersonaJuridica->getNombreFantasia());
    }
  }
}
