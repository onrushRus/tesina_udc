<?php

/**
 * Imagenes filter form base class.
 *
 * @package    tesina_udc
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseImagenesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'persona_juridica_id_persona_juridica' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => true)),
      'descripcion'                          => new sfWidgetFormFilterInput(),
      'nombre_archivo'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'persona_juridica_id_persona_juridica' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'descripcion'                          => new sfValidatorPass(array('required' => false)),
      'nombre_archivo'                       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('imagenes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Imagenes';
  }

  public function getFields()
  {
    return array(
      'id_imagenes'                          => 'Number',
      'persona_juridica_id_persona_juridica' => 'ForeignKey',
      'descripcion'                          => 'Text',
      'nombre_archivo'                       => 'Text',
    );
  }
}
