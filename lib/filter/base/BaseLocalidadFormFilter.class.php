<?php

/**
 * Localidad filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLocalidadFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_localidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_postal'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'provincia_id'     => new sfWidgetFormPropelChoice(array('model' => 'Provincia', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_localidad' => new sfValidatorPass(array('required' => false)),
      'codigo_postal'    => new sfValidatorPass(array('required' => false)),
      'provincia_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Provincia', 'column' => 'id_provincia')),
    ));

    $this->widgetSchema->setNameFormat('localidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Localidad';
  }

  public function getFields()
  {
    return array(
      'id_localidad'     => 'Number',
      'nombre_localidad' => 'Text',
      'codigo_postal'    => 'Text',
      'provincia_id'     => 'ForeignKey',
    );
  }
}
