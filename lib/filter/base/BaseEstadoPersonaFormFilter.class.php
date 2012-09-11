<?php

/**
 * EstadoPersona filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseEstadoPersonaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'estado' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado_persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadoPersona';
  }

  public function getFields()
  {
    return array(
      'estado' => 'Text',
      'id'     => 'Number',
    );
  }
}
