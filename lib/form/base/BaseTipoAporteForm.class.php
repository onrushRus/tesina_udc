<?php

/**
 * TipoAporte form base class.
 *
 * @method TipoAporte getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoAporteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_aporte' => new sfWidgetFormInputHidden(),
      'tipo_aporte'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_aporte' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoAporte()), 'empty_value' => $this->getObject()->getIdTipoAporte(), 'required' => false)),
      'tipo_aporte'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'TipoAporte', 'column' => array('tipo_aporte')))
    );

    $this->widgetSchema->setNameFormat('tipo_aporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoAporte';
  }


}
