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
      'id_persona_fisica' => new sfWidgetFormInputHidden(),
      'tipo_usuario_id'   => new sfWidgetFormPropelChoice(array('model' => 'TipoUsuario', 'add_empty' => false)),
      'nombre'            => new sfWidgetFormInputText(),
      'apellido'          => new sfWidgetFormInputText(),
      'usuario'           => new sfWidgetFormInputText(),
      'password'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_persona_fisica' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPersonaFisica()), 'empty_value' => $this->getObject()->getIdPersonaFisica(), 'required' => false)),
      'tipo_usuario_id'   => new sfValidatorPropelChoice(array('model' => 'TipoUsuario', 'column' => 'id_tipo_usuario')),
      'nombre'            => new sfValidatorString(array('max_length' => 25)),
      'apellido'          => new sfValidatorString(array('max_length' => 30)),
      'usuario'           => new sfValidatorString(array('max_length' => 20)),
      'password'          => new sfValidatorString(array('max_length' => 15)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'PersonaFisica', 'column' => array('id_persona_fisica'))),
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
