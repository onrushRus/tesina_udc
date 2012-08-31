<?php

/**
 * PersonaJuridica filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePersonaJuridicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_id'                   => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => true)),
      'ejercicio_economico_id'       => new sfWidgetFormPropelChoice(array('model' => 'EjercicioEconomico', 'add_empty' => true)),
      'situacion_id'                 => new sfWidgetFormPropelChoice(array('model' => 'SituacionPersonaJuridica', 'add_empty' => true)),
      'tipo_pers_juridica_id'        => new sfWidgetFormPropelChoice(array('model' => 'TipoPersonaJuridica', 'add_empty' => true)),
      'nombre_fantasia'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inicio_actividad'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'resenia'                      => new sfWidgetFormFilterInput(),
      'legajo'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'matricula'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actividad_pers_juridica_list' => new sfWidgetFormPropelChoice(array('model' => 'Actividad', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'persona_id'                   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Persona', 'column' => 'id_persona')),
      'ejercicio_economico_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EjercicioEconomico', 'column' => 'id_ejercicio_economico')),
      'situacion_id'                 => new sfValidatorPropelChoice(array('required' => false, 'model' => 'SituacionPersonaJuridica', 'column' => 'id_situacion_pers_juridica')),
      'tipo_pers_juridica_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoPersonaJuridica', 'column' => 'id_tipo_persona_juridica')),
      'nombre_fantasia'              => new sfValidatorPass(array('required' => false)),
      'fecha_inicio_actividad'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'resenia'                      => new sfValidatorPass(array('required' => false)),
      'legajo'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'matricula'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'actividad_pers_juridica_list' => new sfValidatorPropelChoice(array('model' => 'Actividad', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona_juridica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addActividadPersJuridicaListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, PersonaJuridicaPeer::ID_PERSONA_JURIDICA);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'PersonaJuridica';
  }

  public function getFields()
  {
    return array(
      'id_persona_juridica'          => 'Number',
      'persona_id'                   => 'ForeignKey',
      'ejercicio_economico_id'       => 'ForeignKey',
      'situacion_id'                 => 'ForeignKey',
      'tipo_pers_juridica_id'        => 'ForeignKey',
      'nombre_fantasia'              => 'Text',
      'fecha_inicio_actividad'       => 'Date',
      'resenia'                      => 'Text',
      'legajo'                       => 'Number',
      'matricula'                    => 'Number',
      'actividad_pers_juridica_list' => 'ManyKey',
    );
  }
}
