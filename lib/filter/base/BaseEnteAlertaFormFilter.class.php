<?php

/**
 * EnteAlerta filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseEnteAlertaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ente_id'        => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'alerta_id'      => new sfWidgetFormPropelChoice(array('model' => 'MailAlerta', 'add_empty' => true)),
      'fecha_envio'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ente_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'alerta_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'MailAlerta', 'column' => 'id_tipo_alerta')),
      'fecha_envio'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'usuario'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ente_alerta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EnteAlerta';
  }

  public function getFields()
  {
    return array(
      'id_ente_alerta' => 'Number',
      'ente_id'        => 'ForeignKey',
      'alerta_id'      => 'ForeignKey',
      'fecha_envio'    => 'Date',
      'usuario'        => 'Text',
    );
  }
}
