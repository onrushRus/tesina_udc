<?php

/**
 * Asamblea filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAsambleaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ejercicio_economico_id' => new sfWidgetFormPropelChoice(array('model' => 'EjercicioEconomico', 'add_empty' => true)),
      'tipo_asamblea_id'       => new sfWidgetFormPropelChoice(array('model' => 'TipoAsamblea', 'add_empty' => true)),
      'observaciones'          => new sfWidgetFormFilterInput(),
      'fecha_asamblea'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'ejercicio_economico_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EjercicioEconomico', 'column' => 'id_ejercicio_economico')),
      'tipo_asamblea_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoAsamblea', 'column' => 'id_tipo_asamblea')),
      'observaciones'          => new sfValidatorPass(array('required' => false)),
      'fecha_asamblea'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('asamblea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asamblea';
  }

  public function getFields()
  {
    return array(
      'id_asamblea'            => 'Number',
      'ejercicio_economico_id' => 'ForeignKey',
      'tipo_asamblea_id'       => 'ForeignKey',
      'observaciones'          => 'Text',
      'fecha_asamblea'         => 'Date',
    );
  }
}
