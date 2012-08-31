<?php

/**
 * PersonaFisica filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonaFisicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_id'        => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => true)),
      'nombre'            => new sfWidgetFormFilterInput(),
      'apellido'          => new sfWidgetFormFilterInput(),
      'usuario'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'persona_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Persona', 'column' => 'id_persona')),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'apellido'          => new sfValidatorPass(array('required' => false)),
      'usuario'           => new sfValidatorPass(array('required' => false)),
      'password'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona_fisica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonaFisica';
  }

  public function getFields()
  {
    return array(
      'id_persona_fisica' => 'Number',
      'persona_id'        => 'ForeignKey',
      'nombre'            => 'Text',
      'apellido'          => 'Text',
      'usuario'           => 'Text',
      'password'          => 'Text',
    );
  }
}
