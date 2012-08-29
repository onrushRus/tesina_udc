<?php

/**
 * TipoEnte form base class.
 *
 * @method TipoEnte getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoEnteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_ente' => new sfWidgetFormInputText(),
      'id'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'tipo_ente' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_ente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoEnte';
  }


}
