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
      'duracion_de_mandato'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'duracion_ejercicio_economico'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias_para_fecha_tope_asamblea'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias_para_fecha_tope_convocatoria'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias_para_fecha_tope_nuevo_mandato' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estatuto_pdf'                       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'persona_juridica_id'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'duracion_de_mandato'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'duracion_ejercicio_economico'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dias_para_fecha_tope_asamblea'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dias_para_fecha_tope_convocatoria'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dias_para_fecha_tope_nuevo_mandato' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estatuto_pdf'                       => new sfValidatorPass(array('required' => false)),
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
      'duracion_de_mandato'                => 'Number',
      'duracion_ejercicio_economico'       => 'Number',
      'dias_para_fecha_tope_asamblea'      => 'Number',
      'dias_para_fecha_tope_convocatoria'  => 'Number',
      'dias_para_fecha_tope_nuevo_mandato' => 'Number',
      'estatuto_pdf'                       => 'Text',
    );
  }
}
