<?php

/**
 * Actividad form base class.
 *
 * @method Actividad getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseActividadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_actividad'                 => new sfWidgetFormInputHidden(),
      'actividad'                    => new sfWidgetFormInputText(),
      'actividad_pers_juridica_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'PersonaJuridica')),
    ));

    $this->setValidators(array(
      'id_actividad'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdActividad()), 'empty_value' => $this->getObject()->getIdActividad(), 'required' => false)),
      'actividad'                    => new sfValidatorString(array('max_length' => 50)),
      'actividad_pers_juridica_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'PersonaJuridica', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Actividad', 'column' => array('actividad')))
    );

    $this->widgetSchema->setNameFormat('actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Actividad';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['actividad_pers_juridica_list']))
    {
      $values = array();
      foreach ($this->object->getActividadPersJuridicas() as $obj)
      {
        $values[] = $obj->getPersonaJuridicaId();
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
    $c->add(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $this->object->getPrimaryKey());
    ActividadPersJuridicaPeer::doDelete($c, $con);

    $values = $this->getValue('actividad_pers_juridica_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ActividadPersJuridica();
        $obj->setActividadId($this->object->getPrimaryKey());
        $obj->setPersonaJuridicaId($value);
        $obj->save($con);
      }
    }
  }

}
