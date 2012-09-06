<?php

/**
 * Direccion form base class.
 *
 * @method Direccion getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDireccionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_direccion'           => new sfWidgetFormInputHidden(),
      'calle'                  => new sfWidgetFormInputText(),
      'numero'                 => new sfWidgetFormInputText(),
      'piso'                   => new sfWidgetFormInputText(),
      'departamento'           => new sfWidgetFormInputText(),
      'persona_id_persona'     => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
      'tipo_direccion_id_'     => new sfWidgetFormPropelChoice(array('model' => 'TipoDireccion', 'add_empty' => false)),
      'localidad_id_localidad' => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_direccion'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDireccion()), 'empty_value' => $this->getObject()->getIdDireccion(), 'required' => false)),
      'calle'                  => new sfValidatorString(array('max_length' => 45)),
      'numero'                 => new sfValidatorString(array('max_length' => 10)),
      'piso'                   => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'departamento'           => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'persona_id_persona'     => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona')),
      'tipo_direccion_id_'     => new sfValidatorPropelChoice(array('model' => 'TipoDireccion', 'column' => 'id_')),
      'localidad_id_localidad' => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id_localidad')),
    ));

    $this->widgetSchema->setNameFormat('direccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Direccion';
  }


}
