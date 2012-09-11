<?php

/**
 * TipoAsamblea form base class.
 *
 * @method TipoAsamblea getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoAsambleaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_asamblea' => new sfWidgetFormInputHidden(),
      'tipo_asamblea'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_asamblea' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoAsamblea()), 'empty_value' => $this->getObject()->getIdTipoAsamblea(), 'required' => false)),
      'tipo_asamblea'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'TipoAsamblea', 'column' => array('tipo_asamblea')))
    );

    $this->widgetSchema->setNameFormat('tipo_asamblea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoAsamblea';
  }


}
