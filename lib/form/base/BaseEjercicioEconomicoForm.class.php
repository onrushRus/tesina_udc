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
      'id_ejercicio_economico' => new sfWidgetFormInputHidden(),
      'persona_juridica_id'    => new sfWidgetFormInputText(),
      'fecha_inicio'           => new sfWidgetFormDate(),
      'fecha_fin'              => new sfWidgetFormDate(),
      'presidente'             => new sfWidgetFormInputText(),
      'secretario'             => new sfWidgetFormInputText(),
      'tesorero'               => new sfWidgetFormInputText(),
      'sindico'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_ejercicio_economico' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEjercicioEconomico()), 'empty_value' => $this->getObject()->getIdEjercicioEconomico(), 'required' => false)),
      'persona_juridica_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'fecha_inicio'           => new sfValidatorDate(),
      'fecha_fin'              => new sfValidatorDate(),
      'presidente'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'secretario'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'tesorero'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sindico'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
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
