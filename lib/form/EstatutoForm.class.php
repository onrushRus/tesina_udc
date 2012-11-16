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
  
  protected static $duracion_mandato = array('1'=>'1 Año','2'=>'2 Años','3'=>'3 Años');  
  protected static $duracion = array('365'=>'1 Año','730'=>'2 Años','1095'=>'3 Años');
  protected static $diasAsamblea = array('30'=>'1 mes','60'=>'2 meses','90'=>'3 meses','120'=>'4 meses',);
  protected static $diasConvocatoria = array('15'=>'15 dias','20'=>'20 dias','25'=>'25 dias','30'=>'1 mes');
  protected static $diasNuevoMandato = array('15'=>'15 dias','20'=>'20 dias','25'=>'25 dias','30'=>'1 mes');
  
  public function configure(){            
    
    $this->setWidgets(array(
        'duracion_de_mandato' => new sfWidgetFormSelect(array('choices'=>self::$duracion_mandato)),
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
    
    unset($this['duracion_ejercicio_economico']);
  }
}
