<?php

/**
 * Aporte filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAporteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_juridica_id' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'tipo_aporte_id'      => new sfWidgetFormPropelChoice(array('model' => 'TipoAporte', 'add_empty' => true)),
      'fecha_aporte'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monto_aporte'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_expediente'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'persona_juridica_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'tipo_aporte_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoAporte', 'column' => 'id_tipo_aporte')),
      'fecha_aporte'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'monto_aporte'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numero_expediente'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aporte_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aporte';
  }

  public function getFields()
  {
    return array(
      'id_aporte'           => 'Number',
      'persona_juridica_id' => 'ForeignKey',
      'tipo_aporte_id'      => 'ForeignKey',
      'fecha_aporte'        => 'Date',
      'monto_aporte'        => 'Number',
      'numero_expediente'   => 'Text',
    );
  }
}
