<?php

/**
 * PuestoComisionDirectiva form base class.
 *
 * @method PuestoComisionDirectiva getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePuestoComisionDirectivaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_puesto_comision_directiva' => new sfWidgetFormInputHidden(),
      'puesto'                       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_puesto_comision_directiva' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdPuestoComisionDirectiva()), 'empty_value' => $this->getObject()->getIdPuestoComisionDirectiva(), 'required' => false)),
      'puesto'                       => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'PuestoComisionDirectiva', 'column' => array('puesto')))
    );

    $this->widgetSchema->setNameFormat('puesto_comision_directiva[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PuestoComisionDirectiva';
  }


}
