<?php

/**
 * TipoEnte filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTipoEnteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_ente' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipo_ente' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_ente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoEnte';
  }

  public function getFields()
  {
    return array(
      'tipo_ente' => 'Text',
      'id'        => 'Number',
    );
  }
}
