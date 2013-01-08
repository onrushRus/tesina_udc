<?php

/**
 * Aporte form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class AporteForm extends BaseAporteForm
{
  public function configure(){
     //hago hidden el campo 'persona_juridica_id'
     $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
     $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden(); 
      
     //'fecha_aporte'
     $anios = range(date("Y"),1920);
     $this->widgetSchema['fecha_aporte']->setAttribute('class','span2');
     $this->widgetSchema['fecha_aporte']->setOption('years',
          array_combine($anios, $anios)
     );
     //seteamos el formato de la fecha
     $this->widgetSchema['fecha_aporte']->setOption('format', '%day%/%month%/%year%');
     
     //seteo las validaciones necesarias     
     $this->validatorSchema['fecha_aporte']->setMessage('required',"La Fecha del Aporte no puede estar vacía.");
     $this->validatorSchema['monto_aporte']->setMessage('required',"El Monto ($$) del Aporte no puede estar vacío.");
     $this->validatorSchema['monto_aporte']->setMessage('invalid','El Monto ($$) debe tener el formato $NN.nn .');
     $this->validatorSchema['numero_expediente']->setMessage('required',"El Numero de Expediente no puede estar vacío.");
     //$this->validatorSchema['actividad']->setOption("min_length",4);
     //$this->validatorSchema['actividad']->setMessage('min_length',"La Actividad '%value%' es muy corta (minimo %min_length% caracteres).");
     //$this->validatorSchema['actividad']->setOption("max_length",20);
     //$this->validatorSchema['actividad']->setMessage('max_length',"La Actividad '%value%' es muy larga (maximo %max_length% caracteres).");
     //$this->validatorSchema['actividad']->setMessage('required',"La Actividad no puede estar vacía.");
     //$this->validatorSchema['actividad']->setMessage('invalid',"Debe tener un Nombre Válido.");
  }
}
