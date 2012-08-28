<?php

/**
 * ActividadPersJuridica form base class.
 *
 * @method ActividadPersJuridica getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseActividadPersJuridicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'actividad_id'        => new sfWidgetFormInputHidden(),
      'persona_juridica_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'actividad_id'        => new sfValidatorPropelChoice(array('model' => 'Actividad', 'column' => 'id_actividad', 'required' => false)),
      'persona_juridica_id' => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'persona_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actividad_pers_juridica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ActividadPersJuridica';
  }


}
