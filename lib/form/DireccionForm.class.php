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
  /*$this->widgetSchema['tipo_direccion_id'] = new sfWidgetFormChoice(array(
      'choices' => TipoDireccionPeer::getTiposDireccion(),
      'expanded' => TRUE
      )); */
  
  $this->widgetSchema['tipo_direccion_id'] = new sfWidgetFormInputHidden();
  $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
  
  
      
  //$this->widgetSchema['tipo_direccion_id']->setOption('expanded',TRUE);
  //$this->widgetSchema['tipo_direccion_id']->setOption('multiple',FALSE);
  }
}
