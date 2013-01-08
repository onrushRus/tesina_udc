<?php

/**
 * Actividad filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseActividadFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'actividad'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'actividad_pers_juridica_list' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'actividad'                    => new sfValidatorPass(array('required' => false)),
      'actividad_pers_juridica_list' => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actividad_filters[%s]');

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

    $criteria->addJoin(ActividadPersJuridicaPeer::ACTIVIDAD_ID, ActividadPeer::ID_ACTIVIDAD);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Actividad';
  }

  public function getFields()
  {
    return array(
      'id_actividad'                 => 'Number',
      'actividad'                    => 'Text',
      'actividad_pers_juridica_list' => 'ManyKey',
    );
  }
}
