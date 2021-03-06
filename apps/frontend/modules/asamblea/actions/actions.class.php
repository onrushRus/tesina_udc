<?php

/**
 * asamblea actions.
 *
 * @package    tesina_udc
 * @subpackage asamblea
 * @author     Your name here
 */
class asambleaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ente = $request->getParameter('ente');
    $ejerEcon = $request->getParameter('ejEcon');
    
    $this->Asambleas = AsambleaQuery::create()
            ->filterByEjercicioEconomicoId($ejerEcon)
            ->orderByFechaDeAsamblea(Criteria::DESC)
            ->find();
    $this->ente = PersonaJuridicaQuery::create()
            ->filterByIdPersonaJuridica($ente)
            ->findOne();
    $this->Ejercicio = EjercicioEconomicoQuery::create()
            ->filterByIdEjercicioEconomico($ejerEcon)
            ->findOne();
    
  }

  public function executeNew(sfWebRequest $request)
  {
    $enteId = $request->getParameter('ente');
    $idEjEcon = $request->getParameter('ejerEcon');
    $this->EjercicioEcon = EjercicioEconomicoQuery::create()
            ->filterByIdEjercicioEconomico($idEjEcon)
            ->findOne();
    $ejer = $this->EjercicioEcon->getFechaFinEjercicioEconomico('d-m-Y');
    $this->getUser()->setFlash('fecha_fin', $ejer);
    $this->ente = PersonaJuridicaQuery::create()
            ->filterByIdPersonaJuridica($enteId)
            ->findOne();    
    $this->form = new AsambleaForm();
    $this->form->setDefaults(array
        ('ejercicio_economico_id'=>$idEjEcon));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AsambleaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Asamblea = AsambleaQuery::create()->findPk($request->getParameter('id_asamblea'));
    $this->forward404Unless($Asamblea, sprintf('Object Asamblea does not exist (%s).', $request->getParameter('id_asamblea')));
    $this->form = new AsambleaForm($Asamblea);
  }

  /*
  public function executeEdit(sfWebRequest $request)
  {
    $Asamblea = AsambleaQuery::create()->findPk($request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id'));
    $this->forward404Unless($Asamblea, sprintf('Object Asamblea does not exist (%s).', $request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id')));
    $this->form = new AsambleaForm($Asamblea);
  }
   * 
   */
  
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Asamblea = AsambleaQuery::create()->findPk($request->getParameter('id_asamblea'));
    $this->forward404Unless($Asamblea, sprintf('Object Asamblea does not exist (%s).',$request->getParameter('id_asamblea')));
    $this->form = new AsambleaForm($Asamblea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }
  
  /*
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Asamblea = AsambleaQuery::create()->findPk($request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id'));
    $this->forward404Unless($Asamblea, sprintf('Object Asamblea does not exist (%s).', $request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id')));
    $this->form = new AsambleaForm($Asamblea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }
   * 
   */
  
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Asamblea = AsambleaQuery::create()->findPk($request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id'));
    $this->forward404Unless($Asamblea, sprintf('Object Asamblea does not exist (%s).', $request->getParameter('id_asamblea'),
                           $request->getParameter('ejercicio_economico_id')));
    $Asamblea->delete();

    $this->redirect('asamblea/index?ente='.$Asamblea->getEjercicioEconomico()->getPersonaJuridicaId().'&ejEcon='.$Asamblea->getEjercicioEconomicoId());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Asamblea = $form->save();  
      
      $this->redirect('asamblea/index?ente='.$Asamblea->getEjercicioEconomico()->getPersonaJuridicaId().'&ejEcon='.$Asamblea->getEjercicioEconomicoId());
      //$this->redirect('asamblea/edit?id_asamblea='.$Asamblea->getIdAsamblea().'&ejercicio_economico_id='.$Asamblea->getEjercicioEconomicoId());
    }
  }
}
