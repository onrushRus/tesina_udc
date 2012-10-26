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
      
      $ente = $request->getParameter('ente');
    
      $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($ente)
                            ->findOne();
      
      
        //$email = $persona_juridica->getEmail();
            
        //$email = 'nicof05@gmail.com';
        $email = 'jgosaine@gmail.com';
        
        
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
       $this->getMailer()->composeAndSend('sayesch@gmail.com',
               'jgosaine@gmail.com', 'Prueba', 'Puto');
      
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