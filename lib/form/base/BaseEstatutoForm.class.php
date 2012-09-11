<?php

/**
 * Estatuto form base class.
 *
 * @method Estatuto getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstatutoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estatuto'                        => new sfWidgetFormInputHidden(),
      'persona_juridica_id'                => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'fecha_inicio_ejercicio_economico'   => new sfWidgetFormDate(),
      'fecha_fin_ejercicio_economico'      => new sfWidgetFormDate(),
      'dias_para_asamblea'                 => new sfWidgetFormInputText(),
      'meses_para_fin_ejercicio_economico' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estatuto'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEstatuto()), 'empty_value' => $this->getObject()->getIdEstatuto(), 'required' => false)),
      'persona_juridica_id'                => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_inicio_ejercicio_economico'   => new sfValidatorDate(),
      'fecha_fin_ejercicio_economico'      => new sfValidatorDate(),
      'dias_para_asamblea'                 => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'meses_para_fin_ejercicio_economico' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Estatuto', 'column' => array('persona_juridica_id')))
    );

    $this->widgetSchema->setNameFormat('estatuto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estatuto';
  }


}
