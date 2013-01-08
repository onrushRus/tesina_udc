<?php

/**
 * TipoDireccion form base class.
 *
 * @method TipoDireccion getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoDireccionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_direccion' => new sfWidgetFormInputHidden(),
      'descripcion'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_direccion' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoDireccion()), 'empty_value' => $this->getObject()->getIdTipoDireccion(), 'required' => false)),
      'descripcion'       => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'TipoDireccion', 'column' => array('descripcion')))
    );

    $this->widgetSchema->setNameFormat('tipo_direccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoDireccion';
  }


}
