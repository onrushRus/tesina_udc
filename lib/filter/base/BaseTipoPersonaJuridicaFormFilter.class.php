<?php

/**
 * TipoPersonaJuridica filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTipoPersonaJuridicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_persona_juridica'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_persona_juridica'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_persona_juridica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoPersonaJuridica';
  }

  public function getFields()
  {
    return array(
      'id_tipo_persona_juridica' => 'Number',
      'tipo_persona_juridica'    => 'Text',
    );
  }
}
