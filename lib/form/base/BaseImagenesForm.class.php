<?php

/**
 * Imagenes form base class.
 *
 * @method Imagenes getObject() Returns the current form's model object
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseImagenesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_imagenes'                          => new sfWidgetFormInputHidden(),
      'persona_juridica_id_persona_juridica' => new sfWidgetFormPropelChoice(array('model' => 'PersonaJuridica', 'add_empty' => false)),
      'descripcion'                          => new sfWidgetFormInputText(),
      'nombre_archivo'                       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_imagenes'                          => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdImagenes()), 'empty_value' => $this->getObject()->getIdImagenes(), 'required' => false)),
      'persona_juridica_id_persona_juridica' => new sfValidatorPropelChoice(array('model' => 'PersonaJuridica', 'column' => 'id_persona_juridica')),
      'descripcion'                          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre_archivo'                       => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Imagenes', 'column' => array('nombre_archivo')))
    );

    $this->widgetSchema->setNameFormat('imagenes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Imagenes';
  }


}
