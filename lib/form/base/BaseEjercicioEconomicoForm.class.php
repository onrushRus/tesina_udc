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
      'persona_juridica_id'           => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'fecha_fin_ejercicio_economico' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_ejercicio_economico'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEjercicioEconomico()), 'empty_value' => $this->getObject()->getIdEjercicioEconomico(), 'required' => false)),
      'persona_juridica_id'           => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_fin_ejercicio_economico' => new sfValidatorDate(),
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
