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
      'fecha_inicio'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_fin'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'presidente'             => new sfWidgetFormFilterInput(),
      'secretario'             => new sfWidgetFormFilterInput(),
      'tesorero'               => new sfWidgetFormFilterInput(),
      'sindico'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecha_inicio'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_fin'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'presidente'             => new sfValidatorPass(array('required' => false)),
      'secretario'             => new sfValidatorPass(array('required' => false)),
      'tesorero'               => new sfValidatorPass(array('required' => false)),
      'sindico'                => new sfValidatorPass(array('required' => false)),
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
      'id_ejercicio_economico' => 'Number',
      'fecha_inicio'           => 'Date',
      'fecha_fin'              => 'Date',
      'presidente'             => 'Text',
      'secretario'             => 'Text',
      'tesorero'               => 'Text',
      'sindico'                => 'Text',
    );
  }
}
