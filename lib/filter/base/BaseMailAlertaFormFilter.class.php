<?php

/**
 * MailAlerta filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseMailAlertaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_alerta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dias_para_aviso' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuerpo_mensaje'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_alerta'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dias_para_aviso' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cuerpo_mensaje'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mail_alerta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MailAlerta';
  }

  public function getFields()
  {
    return array(
      'id_tipo_alerta'  => 'Number',
      'tipo_alerta'     => 'Number',
      'dias_para_aviso' => 'Number',
      'cuerpo_mensaje'  => 'Text',
    );
  }
}
