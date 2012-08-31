<?php

/**
 * Localidad form base class.
 *
 * @method Localidad getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLocalidadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_localidad'     => new sfWidgetFormInputHidden(),
      'nombre_localidad' => new sfWidgetFormInputText(),
      'codigo_postal'    => new sfWidgetFormInputText(),
      'provincia_id'     => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_localidad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdLocalidad()), 'empty_value' => $this->getObject()->getIdLocalidad(), 'required' => false)),
      'nombre_localidad' => new sfValidatorString(array('max_length' => 45)),
      'codigo_postal'    => new sfValidatorString(array('max_length' => 15)),
      'provincia_id'     => new sfValidatorPropelChoice(array('model' => 'Provincia', 'column' => 'id_provincia')),
    ));

    $this->widgetSchema->setNameFormat('localidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Localidad';
  }


}
