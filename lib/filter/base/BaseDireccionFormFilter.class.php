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
      'persona_juridica_id' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'tipo_direccion_id'   => new sfWidgetFormPropelChoice(array('model' => 'TipoDireccion', 'add_empty' => true)),
      'localidad_id'        => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => true)),
      'calle'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'piso'                => new sfWidgetFormFilterInput(),
      'departamento'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'persona_juridica_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'tipo_direccion_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoDireccion', 'column' => 'id_tipo_direccion')),
      'localidad_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Localidad', 'column' => 'id_localidad')),
      'calle'               => new sfValidatorPass(array('required' => false)),
      'numero'              => new sfValidatorPass(array('required' => false)),
      'piso'                => new sfValidatorPass(array('required' => false)),
      'departamento'        => new sfValidatorPass(array('required' => false)),
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
      'id_direccion'        => 'Number',
      'persona_juridica_id' => 'ForeignKey',
      'tipo_direccion_id'   => 'ForeignKey',
      'localidad_id'        => 'ForeignKey',
      'calle'               => 'Text',
      'numero'              => 'Text',
      'piso'                => 'Text',
      'departamento'        => 'Text',
    );
  }
}
