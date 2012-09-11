<?php

/**
 * TipoUsuario form base class.
 *
 * @method TipoUsuario getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoUsuarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_usuario' => new sfWidgetFormInputHidden(),
      'tipo_usuario'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_usuario' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoUsuario()), 'empty_value' => $this->getObject()->getIdTipoUsuario(), 'required' => false)),
      'tipo_usuario'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'TipoUsuario', 'column' => array('tipo_usuario')))
    );

    $this->widgetSchema->setNameFormat('tipo_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoUsuario';
  }


}
