<?php

/**
 * Estatuto filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseEstatutoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_juridica_id'                => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'fecha_inicio_ejercicio_economico'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_fin_ejercicio_economico'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dias_para_asamblea'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'meses_para_fin_ejercicio_economico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'persona_juridica_id'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'fecha_inicio_ejercicio_economico'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_fin_ejercicio_economico'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'dias_para_asamblea'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'meses_para_fin_ejercicio_economico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('estatuto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estatuto';
  }

  public function getFields()
  {
    return array(
      'id_estatuto'                        => 'Number',
      'persona_juridica_id'                => 'ForeignKey',
      'fecha_inicio_ejercicio_economico'   => 'Date',
      'fecha_fin_ejercicio_economico'      => 'Date',
      'dias_para_asamblea'                 => 'Number',
      'meses_para_fin_ejercicio_economico' => 'Number',
    );
  }
}
