<?php

/**
 * Direccion filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDireccionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'calle'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'piso'                   => new sfWidgetFormFilterInput(),
      'departamento'           => new sfWidgetFormFilterInput(),
      'persona_id_persona'     => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => true)),
      'tipo_direccion_id_'     => new sfWidgetFormPropelChoice(array('model' => 'TipoDireccion', 'add_empty' => true)),
      'localidad_id_localidad' => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'calle'                  => new sfValidatorPass(array('required' => false)),
      'numero'                 => new sfValidatorPass(array('required' => false)),
      'piso'                   => new sfValidatorPass(array('required' => false)),
      'departamento'           => new sfValidatorPass(array('required' => false)),
      'persona_id_persona'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Persona', 'column' => 'id_persona')),
      'tipo_direccion_id_'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoDireccion', 'column' => 'id_')),
      'localidad_id_localidad' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Localidad', 'column' => 'id_localidad')),
    ));

    $this->widgetSchema->setNameFormat('direccion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Direccion';
  }

  public function getFields()
  {
    return array(
      'id_direccion'           => 'Number',
      'calle'                  => 'Text',
      'numero'                 => 'Text',
      'piso'                   => 'Text',
      'departamento'           => 'Text',
      'persona_id_persona'     => 'ForeignKey',
      'tipo_direccion_id_'     => 'ForeignKey',
      'localidad_id_localidad' => 'ForeignKey',
    );
  }
}
