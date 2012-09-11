<?php

/**
 * PuestoComisionDirectiva filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePuestoComisionDirectivaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'puesto'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'puesto'                       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('puesto_comision_directiva_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PuestoComisionDirectiva';
  }

  public function getFields()
  {
    return array(
      'id_puesto_comision_directiva' => 'Number',
      'puesto'                       => 'Text',
    );
  }
}
