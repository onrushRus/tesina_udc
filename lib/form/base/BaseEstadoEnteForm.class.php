<?php

/**
 * EstadoEnte form base class.
 *
 * @method EstadoEnte getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstadoEnteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado' => new sfWidgetFormInputText(),
      'id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'estado' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado_ente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstadoEnte';
  }


}
