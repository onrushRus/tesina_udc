<?php

/**
 * alerta actions.
 *
 * @package    tesina_udc
 * @subpackage alerta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class alertaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {      
      
  }
  
  public function executeVencimientoEjercicioEconomico(sfWebRequest $request)
  {
      $this->hoy = date("d-m-Y");      
      $anio =  date("Y");
      
      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)
              ->orderByFechaFinEjercicioEconomico("ASC")
              ->find();           
  }
  
  public function executeVencimientoLlamadoAsamblea(sfWebRequest $request){
      
      $this->hoy = date("d-m-Y");      
      $anio =  date("Y");

      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)
              ->find();
  }    
  
  public function executeVencimientoNuevoMandato(sfWebRequest $request){
      
      $this->hoy = date("d-m-Y");      
      $anio =  date("Y");

      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)
              ->find();
  }    
  
  public function executeEnviarAvisoCierreEjercicioEconomico(sfWebRequest $request){
      
  }

  public function executeEnviarAvisoLlamarAsamblea(sfWebRequest $request){
      
  } 
 
  public function executeEnviarAvisoNuevoMadato(sfWebRequest $request){
      
  }
}