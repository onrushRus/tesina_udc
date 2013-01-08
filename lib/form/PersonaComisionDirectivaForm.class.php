<?php

/**
 * PersonaComisionDirectiva form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class PersonaComisionDirectivaForm extends BasePersonaComisionDirectivaForm
{
  public function configure()
 {        
   // cambio la validacion del campo Email de "String" a tipo "Email".
   $this->validatorSchema['email'] = 
           new sfValidatorAnd(array(
           $this->validatorSchema['email'],
           new sfValidatorEmail()
   ));
   $this->validatorSchema['ejercicio_economico_id']->setOption('required',FALSE);
   $this->widgetSchema['ejercicio_economico_id'] = new sfWidgetFormInputHidden();
   $this->validatorSchema['puesto_id']->setOption('required',FALSE);
   $this->widgetSchema['puesto_id'] = new sfWidgetFormInputHidden();      
   
   //'fecha_inicio_actividad'
   $anios = range(date("Y"),date("Y")-5);
   $this->widgetSchema['fecha_inicio_actividad']->setAttribute('class','span2');
   $this->widgetSchema['fecha_inicio_actividad']->setOption('years',
     array_combine($anios, $anios)
   );
   //seteamos el formato de la fecha
   $this->widgetSchema['fecha_inicio_actividad']->setOption('format', '%day%/%month%/%year%');
   
   //configuramos los mensajes de error
   $this->validatorSchema['nombre_y_apellido']->setOption("min_length",4);
   $this->validatorSchema['nombre_y_apellido']->setMessage('min_length',"El nombre y apellido es muy corto (minimo %min_length% caracteres).");
   $this->validatorSchema['nombre_y_apellido']->setOption("max_length",20);
   $this->validatorSchema['nombre_y_apellido']->setMessage('max_length',"El nombre y apellido es muy larga (maximo %max_length% caracteres).");
   $this->validatorSchema['nombre_y_apellido']->setMessage('required',"El nombre y apellido no puede quedar vacío.");
   $this->validatorSchema['nombre_y_apellido']->setMessage('invalid',"Debe tener un Nombre Válido.");
   $this->validatorSchema['email']->setMessage('required',"Debe ingresar un e-mail.");
   $this->validatorSchema['email']->setMessage('invalid',"Debe ingresar un e-mail válido.");
   $this->validatorSchema['fecha_inicio_actividad']->setMessage('required',"La Fecha de Inicio de Actividad no puede quedar vacía.");
   $this->validatorSchema['fecha_inicio_actividad']->setMessage('invalid',"Debe ingresar una fecha válida.");
   
  }
}
