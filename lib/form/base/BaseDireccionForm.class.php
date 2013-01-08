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
      'id_direccion'        => new sfWidgetFormInputHidden(),
      'persona_juridica_id' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'tipo_direccion_id'   => new sfWidgetFormPropelChoice(array('model' => 'TipoDireccion', 'add_empty' => false)),
      'localidad_id'        => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'calle'               => new sfWidgetFormInputText(),
      'numero'              => new sfWidgetFormInputText(),
      'piso'                => new sfWidgetFormInputText(),
      'departamento'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_direccion'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdDireccion()), 'empty_value' => $this->getObject()->getIdDireccion(), 'required' => false)),
      'persona_juridica_id' => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'tipo_direccion_id'   => new sfValidatorPropelChoice(array('model' => 'TipoDireccion', 'column' => 'id_tipo_direccion')),
      'localidad_id'        => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id_localidad')),
      'calle'               => new sfValidatorString(array('max_length' => 45)),
      'numero'              => new sfValidatorString(array('max_length' => 10)),
      'piso'                => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'departamento'        => new sfValidatorString(array('max_length' => 5, 'required' => false)),
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
