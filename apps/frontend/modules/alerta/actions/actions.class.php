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
  
  public $mail_ssayes = "sayesch@gmail.com";
  
  /*
  public function getMailSayes()
  {      
      return $mail_ssayes;
  }
  
  public function setMailSayes( $nuevo_mail)
  {      
      $mail_ssayes = $nuevo_mail;
  }
    */
  public function executeIndex(sfWebRequest $request)
  {      
      
  }
  
  public function executeVencimientoEjercicioEconomico()
  {
      $this->hoy = date("d-m-Y");      
      $anio = date("Y");
      
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
      $origen = "sayesch@gmail.com";
      //busco el destinatario
      //$destinatario = $persona_juridica->getEmail();
      $destinatario = "nico_fernandez2003@hotmail.com";
      //creo el cuerpo del mensaje
      $cuerpo_mensaje = " Mail de Prueba";
      $this->cuerpo_mail = $cuerpo_mensaje;
      
      
      
        /*
        //Creamos el email
        $mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

        //Creamos el mensaje
        $message = Swift_Message::newInstance('Email de Prueba')
        ->setFrom(array('sayesch@gmail.com' => 'Nico'))
        ->setTo(array($email => 'Ruso'))
        ->setBody('Contenido del email')
        ;
        //Enviamos el email
        $mailer->send($message);
         * 
         */
      
        //****************************************************
        
       // Anduvooo!!
       $this->getMailer()->composeAndSend($origen,
               $destinatario, 'Aviso de Cierre de Ejercicio Económico', $cuerpo_mensaje);
      
       //****************************************************
        
      // send an email to the affiliate 
      /*$message = $this->getMailer()->compose(
      array($persona_juridica->getEmail() => 'Jobeet Bot'),
      $persona_juridica->getEmail(),
      'Jobeet affiliate token',
      'EOF
      Your Jobeet affiliate account has been activated.
      Your token is {$affiliate->getToken()}.
      The Jobeet Bot.
      EOF'
      );
      
      $this->getMailer()->send($message);
      
       * 
       */
       
  
  }

  public function executeEnviarAvisoLlamarAsamblea(sfWebRequest $request){
      
  } 
 
  public function executeEnviarAvisoNuevoMadato(sfWebRequest $request){
      
  }
}