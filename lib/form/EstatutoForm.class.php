<?php

/**
 * Estatuto form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class EstatutoForm extends BaseEstatutoForm
{
  public function configure(){
    
     if($this->isNew()){
        //seteo que el campo "persona_juridica_id" no sea requerido
        $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
        $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
     }else{
        unset($this['persona_juridica_id']); 
     } 
     
    /*Seteamos widgets: estatuto_pdf como un inputfile y le indicamos
     * el directorio donde se cargaran
     */

    $this->setWidget('estatuto_pdf', new sfWidgetFormInputFile());
    
    $this->setValidator('estatuto_pdf', new sfValidatorFile(array(
        //'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/estatutos_personas_juridicas/',
        'required' => false,
    )));
  }
}
