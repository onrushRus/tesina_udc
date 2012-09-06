<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_persona' => new sfWidgetFormInputHidden(),
      'estado_id'  => new sfWidgetFormPropelChoice(array('model' => 'EstadoPersona', 'add_empty' => false)),
      'cuit_cuil'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_persona' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPersona()), 'empty_value' => $this->getObject()->getIdPersona(), 'required' => false)),
      'estado_id'  => new sfValidatorPropelChoice(array('model' => 'EstadoPersona', 'column' => 'id_estado_persona')),
      'cuit_cuil'  => new sfValidatorNumber(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Persona', 'column' => array('cuit_cuil')))
    );

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }


}
