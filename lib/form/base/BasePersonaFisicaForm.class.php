<?php

/**
 * PersonaFisica form base class.
 *
 * @method PersonaFisica getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonaFisicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_id' => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'usuario'    => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'persona_id' => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'apellido'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 20)),
      'password'   => new sfValidatorString(array('max_length' => 15)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'PersonaFisica', 'column' => array('persona_id'))),
        new sfValidatorPropelUnique(array('model' => 'PersonaFisica', 'column' => array('usuario'))),
      ))
    );

    $this->widgetSchema->setNameFormat('persona_fisica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonaFisica';
  }


}
