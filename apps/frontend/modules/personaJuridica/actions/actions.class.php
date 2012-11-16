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
  
    public function executeVerFicha(sfWebRequest $request){
        // tomo el id del ente a buscar
        $idEnte = $request->getParameter('eid');
        // busco en la base de datos el ente
        $this->entidad = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($idEnte)
                            ->findOne();        
    }


    public function executeIndex(sfWebRequest $request)
  { 
    $ente = $request->getParameter('ente');
    
    $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByNombreFantasia($ente)
                            ->findOne();
    
    $this->cargos = EjercicioEconomicoQuery::create()
                      ->filterByPersonaJuridicaId($persona_juridica->getIdPersonaJuridica())
                      ->orderByNumeroEjercicioEconomico(Criteria::DESC)
                      ->findOne();   
     
    $this->entes = PersonaJuridicaQuery::create()->find();    
    $this->PersonaJuridicas = array();
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){
        //guardo el nombre de fantasia del ente
        $ente = $request->getParameter('ente');
        $this->ente = $ente;
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
            // inicio imagen
            $this->imagen = ImagenesQuery::create()                    
                    ->filterByPersonaJuridica($enteAux)
                    ->findOne();
            // fin imagen -- Traería la imagen actual del ente correspondiente
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

    $this->redirect('principal/index');
    //$this->redirect('personaJuridica/index');   
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {        
      //if (fechaInicioActividadValida($form->getObject()->getFechaInicioActividad('d-m-Y'))){
        $PersonaJuridica = $form->save();   
        $this->redirect('personaJuridica/index?ente='.$PersonaJuridica->getNombreFantasia());
      //}else{
        //$form->getObject()->setFechaInicioActividad(NULL);
      //}      
    }
  }      
  
  public function executeBusquedaEnte(sfWebRequest $request){
    $this->entes = PersonaJuridicaQuery::create()
            ->orderByNombreFantasia(Criteria::ASC)
            ->find();  
    $this->localidades = LocalidadQuery::create()->find();
    $this->var_post = false;
    $this->ListaEntes = array();
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){
      $this->var_post = true;
      $enteNombre = $request->getParameter('ente');
      $enteParteNomb = $request->getParameter('parteNombre');
      $locali = $request->getParameter('localidad');
      $tipoEnte = $request->getParameter('tipoEnte');
      $localidad = LocalidadQuery::create()
              ->filterByNombreLocalidad($locali)
              ->findOne();
      
      //echo "--> Tipo: ".$tipoEnte;
      //echo "<br>--> nomCompl: ".$enteNombre;
      //echo "<br>--> nomPar: ".$enteParteNomb;
      //echo "<br>--> loc: ".$locali;            
      
      
      //veo si vino algo en nombre completo
      if(!empty($enteNombre)&&($enteNombre!='*')){
          //veo si vino algo en la localidad
          if(!empty($locali)&&($locali!='*')){
              //me fijo si son TODOS los entes              
              if($tipoEnte==0){
                  $aux = PersonaJuridicaQuery::create()
                      ->joinDireccion()
                        ->useDireccionQuery()                          
                          ->joinLocalidad()
                            ->useLocalidadQuery()
                              ->filterByIdLocalidad($localidad->getIdLocalidad())
                            ->endUse()
                        ->endUse()
                      ->filterByNombreFantasia($enteNombre);
                      //->find(); 
              //sino, me fijo si solo busca cooperativas o solo mutuales                    
              }else{
                  $aux = PersonaJuridicaQuery::create()
                      ->joinDireccion()
                        ->useDireccionQuery()     
                          ->joinLocalidad()
                            ->useLocalidadQuery()
                              ->filterByIdLocalidad($localidad->getIdLocalidad())
                            ->endUse()
                        ->endUse()
                      ->filterByNombreFantasia($enteNombre)
                      ->filterByTipoPersJuridicaId($tipoEnte);
                      //->find();
              }              
          //si la busqueda por localidad vino vacia    
          }else{
              //me fijo si son TODOS los entes
              if($tipoEnte==0){
                  $aux = PersonaJuridicaQuery::create()
                      ->filterByNombreFantasia($enteNombre);
                      //->find(); 
              //sino, me fijo si solo busca cooperativas o solo mutuales                    
              }else{
                  $aux = PersonaJuridicaQuery::create()
                      ->filterByNombreFantasia($enteNombre)
                      ->filterByTipoPersJuridicaId($tipoEnte);
                      //->find();
              }              
          }
      //si el nombre completo vino vacio, me fijo si vino una parte del nombre    
      }elseif(!empty($enteParteNomb) && ($enteParteNomb!='*')){
          //veo si vino algo en la localidad
          if(!empty($locali)&&($locali!='*')){
                //me fijo si son TODOS los entes              
                if($tipoEnte==0){
                        $aux = PersonaJuridicaQuery::create()
                          ->joinDireccion()
                            ->useDireccionQuery()         
                             ->joinLocalidad()
                              ->useLocalidadQuery()
                               ->filterByIdLocalidad($localidad->getIdLocalidad())
                              ->endUse()
                            ->endUse()                                
                          ->filterByNombreFantasia('%'.$enteParteNomb.'%')
                          ->orderByNombreFantasia(Criteria::ASC);
                          //->find();
                //sino, me fijo si solo busca cooperativas o solo mutuales
                }else{
                    $aux = PersonaJuridicaQuery::create()
                          ->joinDireccion()
                            ->useDireccionQuery()        
                              ->joinLocalidad()
                                ->useLocalidadQuery()
                                  ->filterByIdLocalidad($localidad->getIdLocalidad())
                                ->endUse()
                            ->endUse()
                          ->filterByTipoPersJuridicaId($tipoEnte)
                          ->filterByNombreFantasia('%'.$enteParteNomb.'%')
                          ->orderByNombreFantasia(Criteria::ASC);
                          //->find();
                }
          //si la busqueda por localidad vino vacia      
          }else{
                //me fijo si son TODOS los entes
                if($tipoEnte==0){
                        $aux = PersonaJuridicaQuery::create()                            
                            ->orderByTipoPersJuridicaId(Criteria::ASC)
                            ->filterByNombreFantasia('%'.$enteParteNomb.'%')
                            ->orderByNombreFantasia(Criteria::ASC);
                            //->find();
                //sino, me fijo si solo busca cooperativas o solo mutuales
                }else{
                    $aux = PersonaJuridicaQuery::create()
                            ->filterByTipoPersJuridicaId($tipoEnte)
                            ->filterByNombreFantasia('%'.$enteParteNomb.'%')
                            ->orderByNombreFantasia(Criteria::ASC);
                            //->find();
                }
          }                  
      //si tampoco vino una parte del nombre, me fijo si viene una localidad
      }elseif(!empty($locali) && ($locali!='*')){
          //me fijo si son TODOS los entes
          if($tipoEnte==0){
                  $aux = PersonaJuridicaQuery::create()
                     ->joinDireccion()
                      ->useDireccionQuery()
                        ->joinLocalidad()
                         ->useLocalidadQuery()
                          ->filterByIdLocalidad($localidad->getIdLocalidad())
                        ->endUse()
                      ->endUse()
                    ->orderByNombreFantasia(Criteria::ASC)
                    ->orderByTipoPersJuridicaId(Criteria::ASC);
                    //->find();
         //sino, me fijo si solo busca cooperativas o solo mutuales
         }else{
              $aux = PersonaJuridicaQuery::create()
                    ->joinDireccion()
                      ->useDireccionQuery()
                       ->joinLocalidad()
                        ->useLocalidadQuery()
                          ->filterByIdLocalidad($localidad->getIdLocalidad())
                        ->endUse()
                      ->endUse()
                    ->filterByTipoPersJuridicaId($tipoEnte)                    
                    ->orderByNombreFantasia(Criteria::ASC);
                    //->find();
         }
      //si no viene nada, me fijo si por todas las coop. y mutuales o no
      }else{
          //echo "<br>-> Entre";
          //me fijo si son TODOS los entes              
          if($tipoEnte==0){              
              $aux = PersonaJuridicaQuery::create()
                  ->orderByTipoPersJuridicaId(Criteria::ASC)
                  ->orderByNombreFantasia(Criteria::ASC);
                  //->find();
           //sino, me fijo si solo busca cooperativas o solo mutuales
           }else{
               $aux = PersonaJuridicaQuery::create()
                  ->filterByTipoPersJuridicaId($tipoEnte)
                  ->orderByNombreFantasia(Criteria::ASC);
                  //->find();
           }
      }         
      //empiezo la opcion para la paginación, el 1 es la cantidad a mostrar
      $paginacion = new sfPropelPager('PersonaJuridica', 3);
      $paginacion->setCriteria($aux);
      $paginacion->setPage($this->getRequestParameter('pag', 1));
      $paginacion->init();
      $this->ListaEntes = $paginacion;
      //asigno lo encontrado al listado final para ver en la vista
      //$this->ListaEntes = $aux; 
      
    }      
  }    
}
