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
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){  
        $enteId = $request->getParameter('ente');
        //echo "Ente recibido: ".$enteId;
        $ejerEconom = $request->getParameter('ejerEcon');
        //echo "EjerEconom recibido: ".$ejerEconom;
        $this->ejerEcon = $ejerEconom;
        $this->PersonaComisionDirectivas = PersonaComisionDirectivaQuery::create()
                ->filterByEjercicioEconomicoId($ejerEconom)                
                ->find();
        //echo "PersJur: ".$PerComDir;
        $this->ente = PersonaJuridicaQuery::create()
                ->filterByIdPersonaJuridica($enteId)
                ->findOne();
        $this->presidente = PersonaComisionDirectivaQuery::create()
                ->filterByEjercicioEconomicoId($ejerEconom)
                ->filterByPuestoId('1')
                ->findOne();
        $this->secretario = PersonaComisionDirectivaQuery::create()
                ->filterByEjercicioEconomicoId($ejerEconom)
                ->filterByPuestoId('2')
                ->findOne();
        $this->tesorero = PersonaComisionDirectivaQuery::create()
                ->filterByEjercicioEconomicoId($ejerEconom)
                ->filterByPuestoId('3')
                ->findOne();
        $this->sindico = PersonaComisionDirectivaQuery::create()
                ->filterByEjercicioEconomicoId($ejerEconom)
                ->filterByPuestoId('4')
                ->findOne();
    }
  
  }

  public function executeNew(sfWebRequest $request)
  {
    $ejEcoId = $request->getParameter('ejerEconomico');
    $idPuesto = $request->getParameter('puestoId');
    
    $this->form = new PersonaComisionDirectivaForm();
    $this->form->setDefaults(array
        ('ejercicio_economico_id'=>$ejEcoId,'puesto_id'=>$idPuesto));
    
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
      
      //$this->redirect('personaComisionDirectiva/edit?id_persona_comision_directiva='.$PersonaComisionDirectiva->getIdPersonaComisionDirectiva());
      $this->redirect('personaComisionDirectiva/index?ente='.$PersonaComisionDirectiva->getEjercicioEconomico()->getPersonaJuridicaId()
              .'&ejerEcon='.$PersonaComisionDirectiva->getEjercicioEconomicoId());
      
    }
  }
}
