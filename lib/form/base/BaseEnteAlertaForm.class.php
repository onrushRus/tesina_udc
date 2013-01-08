<?php

/**
 * EnteAlerta form base class.
 *
 * @method EnteAlerta getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEnteAlertaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_ente_alerta' => new sfWidgetFormInputHidden(),
      'ente_id'        => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'alerta_id'      => new sfWidgetFormPropelChoice(array('model' => 'MailAlerta', 'add_empty' => false)),
      'fecha_envio'    => new sfWidgetFormDate(),
      'usuario'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_ente_alerta' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdEnteAlerta()), 'empty_value' => $this->getObject()->getIdEnteAlerta(), 'required' => false)),
      'ente_id'        => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'alerta_id'      => new sfValidatorPropelChoice(array('model' => 'MailAlerta', 'column' => 'id_tipo_alerta')),
      'fecha_envio'    => new sfValidatorDate(),
      'usuario'        => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('ente_alerta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EnteAlerta';
  }


}
