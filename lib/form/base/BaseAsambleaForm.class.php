<?php

/**
 * Asamblea form base class.
 *
 * @method Asamblea getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAsambleaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_asamblea'            => new sfWidgetFormInputHidden(),
      'ejercicio_economico_id' => new sfWidgetFormPropelChoice(array('model' => 'EjercicioEconomico', 'add_empty' => false)),
      'tipo_asamblea_id'       => new sfWidgetFormPropelChoice(array('model' => 'TipoAsamblea', 'add_empty' => false)),
      'observaciones'          => new sfWidgetFormInputText(),
      'fecha_asamblea'         => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id_asamblea'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAsamblea()), 'empty_value' => $this->getObject()->getIdAsamblea(), 'required' => false)),
      'ejercicio_economico_id' => new sfValidatorPropelChoice(array('model' => 'EjercicioEconomico', 'column' => 'id_ejercicio_economico')),
      'tipo_asamblea_id'       => new sfValidatorPropelChoice(array('model' => 'TipoAsamblea', 'column' => 'id_tipo_asamblea')),
      'observaciones'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'fecha_asamblea'         => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('asamblea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asamblea';
  }


}
