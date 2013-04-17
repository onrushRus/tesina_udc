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
              ->filterByNumeroEjercicioEconomico($anio-1)
              ->orderByFechaFinEjercicioEconomico(Criteria::ASC)
              ->find();
  }
  
  public function executeVencimientoNuevoMandato(){
      
      $this->hoy = date("d-m-Y");      
      $anio = date("Y");

      $this->ejercicios = EjercicioEconomicoQuery::create()
              ->filterByNumeroEjercicioEconomico($anio-1)
              ->orderByFechaFinEjercicioEconomico(Criteria::ASC)
              ->find();
  }    
  
  public function executeEnviarAvisoCierreEjercicioEconomico(sfWebRequest $request){
      // obtengo el ente a quien le voy a enviar el mail
      $ente = $request->getParameter('ente');
      // busco el ente en la base de datos
      $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($ente)
                            ->findOne();      
      
      //busco el mail de origen, o sea, el del SSAYES
      $origen = $this->mail_ssayes;
      //$origen = "sayesch@gmail.com";
      
      //busco el destinatario
      $destinatario = $persona_juridica->getEmail();            

      //*********  CREO EL CUERPO DEL MENSAJE **************
      //busco el en la base los datos de este tipo de alerta (vencim. ej. ec.)
      $this->alerta = MailAlertaQuery::create()
              ->filterByIdTipoAlerta('1')
              ->findOne();
      //obtengo de la base el cuerpo del mensaje.
      $cuerpo_mensaje = $this->alerta->getCuerpoMensaje();                              
      //****************************************************                  
            
      // Envío el mail
      try{
          $this->getMailer()->composeAndSend($origen,
             $destinatario, 'Para: '.$persona_juridica->getNombreFantasia().' - Aviso de Cierre de Ejercicio Económico', $cuerpo_mensaje);
          $this->mensaje = "El mail se envío correctamente";          

          // todo esto va dentro del TRY-CATCH
          // guardo el envío del mail en la tabla de EnteAlerta
          $alerta = new EnteAlerta;
          //$alerta->setAlertaId(NULL);
          $alerta->setEnteId($persona_juridica->getIdPersonaJuridica());
          $alerta->setAlertaId('1');
          $alerta->setFechaEnvio(date('d-m-Y'));
          $alerta->setUsuario($this->getUser()->getAttribute('user'));
          $alerta->save();
          
      }  catch (Exception $e){
          $this->mensaje_error = "El mail no se envío, compruebe su conexion a internet.";
          $this->tipo_error = $e->getMessage();
      }
      //****************************************************
  }

  public function executeEnviarAvisoLlamarAsamblea(sfWebRequest $request){
      // obtengo el ente a quien le voy a enviar el mail
      $ente = $request->getParameter('ente');
      // busco el ente en la base de datos
      $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($ente)
                            ->findOne();
      
      //busco el mail de origen, o sea, el del SSAYES
      $origen = $this->mail_ssayes;
      //$origen = "sayesch@gmail.com";
      
      //busco el destinatario
      $destinatario = $persona_juridica->getEmail();

      //*********  CREO EL CUERPO DEL MENSAJE **************
      //busco el en la base los datos de este tipo de alerta (llamado a convoc. a asamblea)
      $this->alerta = MailAlertaQuery::create()
              ->filterByIdTipoAlerta('2')
              ->findOne();
      //obtengo de la base el cuerpo del mensaje.
      $cuerpo_mensaje = $this->alerta->getCuerpoMensaje();
      //****************************************************                                   
      
      // Envío el mail
      try{
          $this->getMailer()->composeAndSend($origen,
              $destinatario, 'Para: '.$persona_juridica->getNombreFantasia().' - Vencimiento de llamado a convocatoria a asamblea', $cuerpo_mensaje);
          $this->mensaje = "El mail se envío correctamente";
          
          // todo esto va dentro del TRY-CATCH
          // guardo el envío del mail en la tabla de EnteAlerta
          $alerta = new EnteAlerta;
          //$alerta->setAlertaId(NULL);
          $alerta->setEnteId($persona_juridica->getIdPersonaJuridica());
          $alerta->setAlertaId('2');
          $alerta->setFechaEnvio(date('d-m-Y'));
          $alerta->setUsuario($this->getUser()->getAttribute('user'));
          $alerta->save();
          
      }  catch (Exception $e){
          $this->mensaje_error = "El mail no se envío, compruebe su conexion a internet.";
          $this->tipo_error = $e->getMessage();
      }
      //****************************************************
  } 
 
  public function executeEnviarAvisoNuevoMandato(sfWebRequest $request){
      // obtengo el ente a quien le voy a enviar el mail
      $ente = $request->getParameter('ente');
      // busco el ente en la base de datos
      $persona_juridica = PersonaJuridicaQuery::create()
                            ->filterByIdPersonaJuridica($ente)
                            ->findOne();
      
      //busco el mail de origen, o sea, el del SSAYES
      $origen = $this->mail_ssayes;
      //$origen = "sayesch@gmail.com";
      
      //busco el destinatario
      $destinatario = $persona_juridica->getEmail();

      //*********  CREO EL CUERPO DEL MENSAJE **************
      //busco el en la base los datos de este tipo de alerta (llamado a convoc. a asamblea)
      $this->alerta = MailAlertaQuery::create()
              ->filterByIdTipoAlerta('3')
              ->findOne();
      //obtengo de la base el cuerpo del mensaje.
      $cuerpo_mensaje = $this->alerta->getCuerpoMensaje();
      //****************************************************                                
      
      // Envío el mail
      try{
          $this->getMailer()->composeAndSend($origen,
              $destinatario, 'Para: '.$persona_juridica->getNombreFantasia().' - Vencimiento de asunción de nuevo mandato.', $cuerpo_mensaje);
          $this->mensaje = "El mail se envío correctamente";
                
          // todo esto va dentro del TRY-CATCH
          // guardo el envío del mail en la tabla de EnteAlerta
          $alerta = new EnteAlerta;
          //$alerta->setAlertaId(NULL);
          $alerta->setEnteId($persona_juridica->getIdPersonaJuridica());
          $alerta->setAlertaId('3');
          $alerta->setFechaEnvio(date('d-m-Y'));
          $alerta->setUsuario($this->getUser()->getAttribute('user'));
          $alerta->save();
          
      }  catch (Exception $e){
          $this->mensaje_error = "El mail no se envío, compruebe su conexion a internet.";
          $this->tipo_error = $e->getMessage();
      }
      //****************************************************
  }
  
  public function executeMailsVencimientoEjercicioEconomico(sfWebRequest $request){
      // obtengo el id del ente por el request
      $enteId = $request->getParameter('eid');
      // obtengo el id de la alerta por el request
      $alertaId = $request->getParameter('aid');
      // busco en la base el Ente con el ID que vino
      $this->ente = PersonaJuridicaQuery::create()
              ->filterByIdPersonaJuridica($enteId)
              ->findOne();
      // busco en la base todas las alertas del tipo que vino del ente que vino
      $this->mails = EnteAlertaQuery::create()
              ->filterByEnteId($enteId)
              ->filterByAlertaId($alertaId)
              ->orderByFechaEnvio(Criteria::DESC)
              ->find();
  }
  
  public function executeMailsVencimientoLlamadoAsamblea(sfWebRequest $request){
      // obtengo el id del ente por el request
      $enteId = $request->getParameter('eid');
      // obtengo el id de la alerta por el request
      $alertaId = $request->getParameter('aid');
      // busco en la base el Ente con el ID que vino
      $this->ente = PersonaJuridicaQuery::create()
              ->filterByIdPersonaJuridica($enteId)
              ->findOne();
      // busco en la base todas las alertas del tipo que vino del ente que vino
      $this->mails = EnteAlertaQuery::create()
              ->filterByEnteId($enteId)
              ->filterByAlertaId($alertaId)
              ->orderByFechaEnvio(Criteria::DESC)
              ->find();      
  }
  
  public function executeMailsVencimientoNuevoMandato(sfWebRequest $request){
      // obtengo el id del ente por el request
      $enteId = $request->getParameter('eid');
      // obtengo el id de la alerta por el request
      $alertaId = $request->getParameter('aid');
      // busco en la base el Ente con el ID que vino
      $this->ente = PersonaJuridicaQuery::create()
              ->filterByIdPersonaJuridica($enteId)
              ->findOne();
      // busco en la base todas las alertas del tipo que vino del ente que vino
      $this->mails = EnteAlertaQuery::create()
              ->filterByEnteId($enteId)
              ->filterByAlertaId($alertaId)
              ->orderByFechaEnvio(Criteria::DESC)
              ->find();       
  }
  
}