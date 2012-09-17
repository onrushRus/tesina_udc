<?php

/**
 * PersonaJuridica form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaJuridicaForm extends BasePersonaJuridicaForm
{
  public function configure(){
   //Agrego embebido el formulario de la direccion, ya sea postal o real
   //$this->embedRelation('Direccion');
   
   //para ver las opciones de la situcion del ente como "radios"
   $this->widgetSchema['situacion_id']->setOption('expanded',TRUE);
   $this->widgetSchema['situacion_id']->setOption('multiple',FALSE);
   //para ver las opciones del tipo de ente como "radios"
   $this->widgetSchema['tipo_pers_juridica_id']->setOption('expanded',TRUE);
   $this->widgetSchema['tipo_pers_juridica_id']->setOption('multiple',FALSE);
   
   // cambio la validacion del campo Email de "String" a tipo "Email".
   $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
   ));
   
   // 'fecha_inicio_actividad'
   $anios = range(date("Y"),1920);      
      $this->widgetSchema['fecha_inicio_actividad']->setAttribute('class','span2');
      $this->widgetSchema['fecha_inicio_actividad']->setOption('years',
        array_combine($anios, $anios)
   );
   
   // controlo las opciones que puede ver el usuario segun su tipo
   /*$user = sfContext::getInstance()->getUser();
   if ($user->hasCredential('2')){
      if(!($this->isNew())){
         unset($this['dni']);
         unset($this['usuario']);
         unset($this['password']);         
      }
      unset($this['tipo_socio_id']);
      unset($this['activo']);         
   } */ 
      
  }
}
