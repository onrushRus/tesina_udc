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
  
 private $mail_ssayes = "sayesch@gmail.com";
  
  
  public function getMailSayes()
  {      
      return $mail_ssayes;
  }
  
  public function setMailSayes( $nuevo_mail)
  {      
      $mail_ssayes = $nuevo_mail;
  }
    
  public function executeIndex(sfWebRequest $request)
  {      
      
  }
  
  public function executeVencimientoEjercicioEconomico()
  {
      $this->hoy = date("d-m-Y");      
      $anio = date("Y");
      
      //busco el en la base los datos de este tipo de alerta (vencim. ej. ec.)
      $this->alerta = MailAlertaQuery::create()
              ->filterByIdTipoAlerta('1')
              ->findOne();    
      //busco en la base de datos todos los ejer. que vencen en el año actual
      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)              
              ->orderByFechaFinEjercicioEconomico("ASC")
              ->find();      
  }
  
  public function executeVencimientoLlamadoAsamblea(){
      
      $this->hoy = date("d-m-Y");      
      $anio = date("Y");

      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)
              ->find();
      
      
      
  }    
  
  public function executeVencimientoNuevoMandato(){
      
      $this->hoy = date("d-m-Y");      
      $anio = date("Y");

      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio)
              ->find();
  }    
  
  public function executeEnviarAvisoCierreEjercicioEconomico(sfWebRequest $request){
      
      $ente = $request->getParameter('ente');
    
      $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($ente)
                            ->findOne();
      
      //busco el mail de origen, o sea, el del SSAYES
      $origen = $this->mail_ssayes;
      //$origen = "sayesch@gmail.com";
      
      //busco el destinatario
      $destinatario = $persona_juridica->getEmail();      
      
      //creo el cuerpo del mensaje
      //busco el en la base los datos de este tipo de alerta (vencim. ej. ec.)
      $this->alerta = MailAlertaQuery::create()
              ->filterByIdTipoAlerta('1')
              ->findOne();
      
      //obtengo de la base el cuerpo del mensaje.
      $cuerpo_mensaje = $this->alerta->getCuerpoMensaje();      
                              
      //****************************************************
        
      // Envío el mail
      $this->getMailer()->composeAndSend($origen,
          $destinatario, 'Para: '.$persona_juridica->getNombreFantasia().' - Aviso de Cierre de Ejercicio Económico', $cuerpo_mensaje);
      
      //****************************************************
  
  }

  public function executeEnviarAvisoLlamarAsamblea(sfWebRequest $request){
      
  } 
 
  public function executeEnviarAvisoNuevoMadato(sfWebRequest $request){
      
  }
}