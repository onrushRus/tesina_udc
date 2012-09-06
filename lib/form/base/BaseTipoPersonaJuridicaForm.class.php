<?php

/**
 * TipoPersonaJuridica form base class.
 *
 * @method TipoPersonaJuridica getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoPersonaJuridicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_persona_juridica' => new sfWidgetFormInputHidden(),
      'tipo_persona_juridica'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_persona_juridica' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoPersonaJuridica()), 'empty_value' => $this->getObject()->getIdTipoPersonaJuridica(), 'required' => false)),
      'tipo_persona_juridica'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'TipoPersonaJuridica', 'column' => array('tipo_persona_juridica')))
    );

    $this->widgetSchema->setNameFormat('tipo_persona_juridica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoPersonaJuridica';
  }


}
