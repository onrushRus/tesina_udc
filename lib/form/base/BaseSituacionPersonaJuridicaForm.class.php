<?php

/**
 * SituacionPersonaJuridica form base class.
 *
 * @method SituacionPersonaJuridica getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSituacionPersonaJuridicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_situacion_pers_juridica' => new sfWidgetFormInputHidden(),
      'situacion'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_situacion_pers_juridica' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdSituacionPersJuridica()), 'empty_value' => $this->getObject()->getIdSituacionPersJuridica(), 'required' => false)),
      'situacion'                  => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('situacion_persona_juridica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SituacionPersonaJuridica';
  }


}
