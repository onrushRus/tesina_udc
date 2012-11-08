<?php

/**
 * Direccion form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class DireccionForm extends BaseDireccionForm
{
  public function configure()
  {    
  $this->widgetSchema['tipo_direccion_id'] = new sfWidgetFormInputHidden();
  $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();

  $this->validatorSchema['calle']->setOption('min_length',4);
  $this->validatorSchema['calle']->setMessage('min_length','La Calle debe tener como mínimo %min_length% caracteres.');
  $this->validatorSchema['calle']->setOption('max_length',25);
  $this->validatorSchema['calle']->setMessage('max_length','La Calle debe tener como máximo %max_length% caracteres.');
  $this->validatorSchema['calle']->setMessage('required','La Calle debe tener un nombre (ej: Calle Sin Nombre).');
  $this->validatorSchema['numero']->setMessage('required','La Dirección debe tener una altura catastral (ej: S/N).');          
  }
}
