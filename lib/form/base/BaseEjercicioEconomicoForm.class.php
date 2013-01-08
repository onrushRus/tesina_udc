<?php

/**
 * EjercicioEconomico form base class.
 *
 * @method EjercicioEconomico getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEjercicioEconomicoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ejercicio_economico'        => new sfWidgetFormInputHidden(),
      'numero_ejercicio_economico'    => new sfWidgetFormInputText(),
      'persona_juridica_id'           => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'fecha_fin_ejercicio_economico' => new sfWidgetFormDate(),
      'observaciones'                 => new sfWidgetFormTextarea(),
      'resultado_economico'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_ejercicio_economico'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEjercicioEconomico()), 'empty_value' => $this->getObject()->getIdEjercicioEconomico(), 'required' => false)),
      'numero_ejercicio_economico'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'persona_juridica_id'           => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_fin_ejercicio_economico' => new sfValidatorDate(),
      'observaciones'                 => new sfValidatorString(array('required' => false)),
      'resultado_economico'           => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ejercicio_economico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EjercicioEconomico';
  }


}
