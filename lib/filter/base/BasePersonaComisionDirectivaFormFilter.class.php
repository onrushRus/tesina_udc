<?php

/**
 * PersonaComisionDirectiva filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonaComisionDirectivaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ejercicio_economico_id'        => new sfWidgetFormPropelChoice(array('model' => 'EjercicioEconomico', 'add_empty' => true)),
      'puesto_id'                     => new sfWidgetFormPropelChoice(array('model' => 'PuestoComisionDirectiva', 'add_empty' => true)),
      'nombre_y_apellido'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'                      => new sfWidgetFormFilterInput(),
      'email'                         => new sfWidgetFormFilterInput(),
      'fecha_inicio_actividad'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'ejercicio_economico_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EjercicioEconomico', 'column' => 'id_ejercicio_economico')),
      'puesto_id'                     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PuestoComisionDirectiva', 'column' => 'id_puesto_comision_directiva')),
      'nombre_y_apellido'             => new sfValidatorPass(array('required' => false)),
      'telefono'                      => new sfValidatorPass(array('required' => false)),
      'email'                         => new sfValidatorPass(array('required' => false)),
      'fecha_inicio_actividad'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('persona_comision_directiva_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonaComisionDirectiva';
  }

  public function getFields()
  {
    return array(
      'id_persona_comision_directiva' => 'Number',
      'ejercicio_economico_id'        => 'ForeignKey',
      'puesto_id'                     => 'ForeignKey',
      'nombre_y_apellido'             => 'Text',
      'telefono'                      => 'Text',
      'email'                         => 'Text',
      'fecha_inicio_actividad'        => 'Date',
    );
  }
}
