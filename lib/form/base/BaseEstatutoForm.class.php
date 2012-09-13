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
      'duracion_ejercicio_economico'       => new sfWidgetFormInputText(),
      'dias_para_fecha_tope_asamblea'      => new sfWidgetFormInputText(),
      'dias_para_fecha_tope_convocatoria'  => new sfWidgetFormInputText(),
      'dias_para_fecha_tope_nuevo_mandato' => new sfWidgetFormInputText(),
      'estatuto_pdf'                       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estatuto'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEstatuto()), 'empty_value' => $this->getObject()->getIdEstatuto(), 'required' => false)),
      'persona_juridica_id'                => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'duracion_ejercicio_economico'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dias_para_fecha_tope_asamblea'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dias_para_fecha_tope_convocatoria'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dias_para_fecha_tope_nuevo_mandato' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'estatuto_pdf'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
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
