<?php

/**
 * EjercicioEconomico filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseEjercicioEconomicoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero_ejercicio_economico'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'persona_juridica_id'           => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'fecha_fin_ejercicio_economico' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observaciones'                 => new sfWidgetFormFilterInput(),
      'resultado_economico'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'numero_ejercicio_economico'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'persona_juridica_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_fin_ejercicio_economico' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'observaciones'                 => new sfValidatorPass(array('required' => false)),
      'resultado_economico'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ejercicio_economico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EjercicioEconomico';
  }

  public function getFields()
  {
    return array(
      'id_ejercicio_economico'        => 'Number',
      'numero_ejercicio_economico'    => 'Number',
      'persona_juridica_id'           => 'ForeignKey',
      'fecha_fin_ejercicio_economico' => 'Date',
      'observaciones'                 => 'Text',
      'resultado_economico'           => 'Number',
    );
  }
}
