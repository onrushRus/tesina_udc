<?php

/**
 * Aporte form base class.
 *
 * @method Aporte getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAporteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_aporte'           => new sfWidgetFormInputHidden(),
      'persona_juridica_id' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'tipo_aporte_id'      => new sfWidgetFormPropelChoice(array('model' => 'TipoAporte', 'add_empty' => false)),
      'fecha_aporte'        => new sfWidgetFormDate(),
      'monto_aporte'        => new sfWidgetFormInputText(),
      'numero_expediente'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_aporte'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAporte()), 'empty_value' => $this->getObject()->getIdAporte(), 'required' => false)),
      'persona_juridica_id' => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'tipo_aporte_id'      => new sfValidatorPropelChoice(array('model' => 'TipoAporte', 'column' => 'id_tipo_aporte')),
      'fecha_aporte'        => new sfValidatorDate(),
      'monto_aporte'        => new sfValidatorNumber(),
      'numero_expediente'   => new sfValidatorString(array('max_length' => 10)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Aporte', 'column' => array('numero_expediente')))
    );

    $this->widgetSchema->setNameFormat('aporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aporte';
  }


}
