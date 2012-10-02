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
    
  protected static $duracion = array('365'=>'1 Año','730'=>'2 Años','1095'=>'3 Años','1460'=>'4 Años','1825'=>'5 Años');
  protected static $diasAsamblea = array('30'=>'30 dias','60'=>'60 dias','90'=>'90 dias','120'=>'120 dias',);
  protected static $diasConvocatoria = array('5'=>'5 dias','10'=>'10 dias','15'=>'15 dias','20'=>'20 dias','25'=>'25 dias','30'=>'30 dias');
  protected static $diasNuevoMandato = array('5'=>'5 dias','10'=>'10 dias','15'=>'15 dias','20'=>'20 dias','25'=>'25 dias','30'=>'30 dias');
  
  public function configure(){            
    
    $this->setWidgets(array(
        'duracion_ejercicio_economico' => new sfWidgetFormSelect(array('choices'=>self::$duracion)),
        'dias_para_fecha_tope_asamblea' => new sfWidgetFormSelect(array('choices'=>self::$diasAsamblea)),
        'dias_para_fecha_tope_convocatoria' => new sfWidgetFormSelect(array('choices'=>self::$diasConvocatoria)),
        'dias_para_fecha_tope_nuevo_mandato' => new sfWidgetFormSelect(array('choices'=>self::$diasNuevoMandato))
        ));
    
    $this->widgetSchema['duracion_ejercicio_economico']->setOption('label','Duración Ejercicio Económico');
    
    $this->widgetSchema->setNameFormat('estatuto[%s]');        
    
    if($this->isNew()){
       //seteo que el campo "persona_juridica_id" no sea requerido
       $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
       $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
    }else{
       unset($this['persona_juridica_id']); 
    } 
    
    $this->setWidget('estatuto_pdf', new sfWidgetFormInputFile());
    
    $this->setValidator('estatuto_pdf', new sfValidatorFile(array(
        //'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/estatutos_personas_juridicas/',
        'required' => false,
    )));            
  }
}
