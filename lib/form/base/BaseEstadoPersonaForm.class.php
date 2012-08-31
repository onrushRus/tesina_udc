<?php

/**
 * EstadoPersona form base class.
 *
 * @method EstadoPersona getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstadoPersonaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estado_persona' => new sfWidgetFormInputHidden(),
      'estado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estado_persona' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEstadoPersona()), 'empty_value' => $this->getObject()->getIdEstadoPersona(), 'required' => false)),
      'estado'            => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'EstadoPersona', 'column' => array('estado')))
    );

    $this->widgetSchema->setNameFormat('estado_persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadoPersona';
  }


}
