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
      'persona_juridica_id'           => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'fecha_fin_ejercicio_economico' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'persona_juridica_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_fin_ejercicio_economico' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
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
      'persona_juridica_id'           => 'ForeignKey',
      'fecha_fin_ejercicio_economico' => 'Date',
    );
  }
}
