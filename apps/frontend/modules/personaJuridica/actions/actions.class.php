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
            //echo $enteAux;
            $this->dirReal = DireccionQuery::create()                    
                    ->filterByPersonaJuridica($enteAux)
                    ->filterByTipoDireccionId('1') //segun la tabla de tipo_direccion_id, el 1 es "Real"
                    ->findOne();
            //echo "<br>".$this->dirReal;
            $this->dirPostal = DireccionQuery::create()                    
                    ->filterByPersonaJuridica($enteAux)
                    ->filterByTipoDireccionId('2') //segun la tabla de tipo_direccion_id, el 2 es "Postal"
                    ->findOne();
            //echo "<br>".$this->dirPostal;
            $this->estatuto = EstatutoQuery::create()
                    ->filterByPersonaJuridica($enteAux)
                    ->findOne();
            $this->ejerEconom = EjercicioEconomicoQuery::create()
                    ->filterByPersonaJuridica($enteAux)
                    ->orderByNumeroEjercicioEconomico(Criteria::ASC)
                    ->find();
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
                     
  public function executeBusquedaEnte(sfWebRequest $request){
    $this->entes = PersonaJuridicaQuery::create()->find();  
    $this->localidades = LocalidadQuery::create()->find();
    $this->var_post = false;
    $this->ListaEntes = array();
    if($request->isMethod(sfWebRequest::POST)){
      $this->var_post = true;
      $enteNombre = $request->getParameter('ente');
      $locali = $request->getParameter('localidad');
      $tipoEnte = $request->getParameter('tipoEnte');
      $localidad = LocalidadQuery::create()
              ->filterByNombreLocalidad($locali)
              ->findOne();
      
      //echo "--> ".$tipoEnte;
      
      //veo si vino algo en nombre completo
      if(!empty($enteNombre)&&($enteNombre!='*')){          
          if(!empty($locali)&&($locali!='*')){
              if($tipoEnte==0){
                  $aux = PersonaJuridicaQuery::create()
                       ->joinDireccion()
                        ->useDireccionQuery()                          
                          ->joinLocalidad()
                            ->useLocalidadQuery()
                              ->filterByIdLocalidad($localidad->getIdLocalidad())
                            ->endUse()
                        ->endUse()
                      ->filterByNombreFantasia($enteNombre)
                      ->find();
                  $this->ListaEntes = $aux;                  
              }
          }
          
      }   
      
      /*$this->ListaEntes = PersonaJuridicaQuery::create()
              ->filterByCantidadDeSocios('22')
              ->find();*/
    }  
  }
}
