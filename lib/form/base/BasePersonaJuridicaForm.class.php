<?php

/**
 * PersonaJuridica form base class.
 *
 * @method PersonaJuridica getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePersonaJuridicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_id'                   => new sfWidgetFormInputHidden(),
      'situacion_id'                 => new sfWidgetFormPropelChoice(array('model' => 'SituacionPersonaJuridica', 'add_empty' => false)),
      'tipo_pers_juridica_id'        => new sfWidgetFormPropelChoice(array('model' => 'TipoPersonaJuridica', 'add_empty' => false)),
      'nombre_fantasia'              => new sfWidgetFormInputText(),
      'fecha_inicio_actividad'       => new sfWidgetFormDateTime(),
      'resenia'                      => new sfWidgetFormInputText(),
      'legajo'                       => new sfWidgetFormInputText(),
      'matricula'                    => new sfWidgetFormInputText(),
      'actividad_pers_juridica_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Actividad')),
    ));

    $this->setValidators(array(
      'persona_id'                   => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id_persona', 'required' => false)),
      'situacion_id'                 => new sfValidatorPropelChoice(array('model' => 'SituacionPersonaJuridica', 'column' => 'id_situacion_pers_juridica')),
      'tipo_pers_juridica_id'        => new sfValidatorPropelChoice(array('model' => 'TipoPersonaJuridica', 'column' => 'id_tipo_persona_juridica')),
      'nombre_fantasia'              => new sfValidatorString(array('max_length' => 45)),
      'fecha_inicio_actividad'       => new sfValidatorDateTime(),
      'resenia'                      => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'legajo'                       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'matricula'                    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'actividad_pers_juridica_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Actividad', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'PersonaJuridica', 'column' => array('persona_id'))),
        new sfValidatorPropelUnique(array('model' => 'PersonaJuridica', 'column' => array('situacion_id'))),
        new sfValidatorPropelUnique(array('model' => 'PersonaJuridica', 'column' => array('legajo'))),
        new sfValidatorPropelUnique(array('model' => 'PersonaJuridica', 'column' => array('matricula'))),
      ))
    );

    $this->widgetSchema->setNameFormat('persona_juridica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonaJuridica';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['actividad_pers_juridica_list']))
    {
      $values = array();
      foreach ($this->object->getActividadPersJuridicas() as $obj)
      {
        $values[] = $obj->getActividadId();
      }

      $this->setDefault('actividad_pers_juridica_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveActividadPersJuridicaList($con);
  }

  public function saveActividadPersJuridicaList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['actividad_pers_juridica_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $this->object->getPrimaryKey());
    ActividadPersJuridicaPeer::doDelete($c, $con);

    $values = $this->getValue('actividad_pers_juridica_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ActividadPersJuridica();
        $obj->setPersonaJuridicaId($this->object->getPrimaryKey());
        $obj->setActividadId($value);
        $obj->save($con);
      }
    }
  }

}
