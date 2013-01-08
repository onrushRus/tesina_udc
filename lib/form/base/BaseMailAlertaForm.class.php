<?php

/**
 * MailAlerta form base class.
 *
 * @method MailAlerta getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMailAlertaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_alerta'  => new sfWidgetFormInputHidden(),
      'tipo_alerta'     => new sfWidgetFormInputText(),
      'dias_para_aviso' => new sfWidgetFormInputText(),
      'cuerpo_mensaje'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_tipo_alerta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTipoAlerta()), 'empty_value' => $this->getObject()->getIdTipoAlerta(), 'required' => false)),
      'tipo_alerta'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dias_para_aviso' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cuerpo_mensaje'  => new sfValidatorString(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'MailAlerta', 'column' => array('tipo_alerta')))
    );

    $this->widgetSchema->setNameFormat('mail_alerta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MailAlerta';
  }


}
