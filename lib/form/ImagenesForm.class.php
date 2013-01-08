<?php

/**
 * Imagenes form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class ImagenesForm extends BaseImagenesForm
{
  public function configure()
  {
    /*Seteamos widgets: la clave foranea oculta y nombre_archivo como un inputfile*/
      
    $this->setWidget('persona_juridica_id_persona_juridica', new sfWidgetFormInputHidden());
    $this->setWidget('nombre_archivo', new sfWidgetFormInputFile());

    //configuramos el campo "nombre"
    $this->validatorSchema['nombre_archivo']->setMessage('required',"El nombre del archivo no puede estar vacío.");
    $this->validatorSchema['nombre_archivo']->setMessage('invalid',"Debe tener un Nombre Válido.");    
    
    /*Le decimos que sean de tipo imagenes y le indicamos la ruta donde 
     * se almacenaran
     */
    $this->setValidator('nombre_archivo', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/imagenes_personas_juridicas/',
    )));
    
    /* Esto para que al momento de editar una imagen ver la imagen actual. NO ANDA POR AHORA!!
    $this->setWidget('nombre_archivo', new sfWidgetFormInputFileEditable(array(
    'file_src'    => '/uploads/personas_juridica/'.$this->getObject()->nombre_archivo,
    'edit_mode'   => !$this->isNew(),
    'is_image'    => true,
    'with_delete' => false,
    )));*/
  
  }
}
