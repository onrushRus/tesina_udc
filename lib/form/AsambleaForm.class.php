<?php

/**
 * Asamblea form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class AsambleaForm extends BaseAsambleaForm
{
  public function configure(){
    
    //'fecha_de_asamblea'
    $anios = range(date("Y"),1920);
    $this->widgetSchema['fecha_de_asamblea']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_asamblea']->setOption('years',
         array_combine($anios, $anios)
    );  
    //'fecha_de_convocatoria'
    $anios = range(date("Y"),1920);
    $this->widgetSchema['fecha_de_convocatoria']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_convocatoria']->setOption('years',
         array_combine($anios, $anios)
    );
    //'fecha_de_nuevo_mandato'
    $anios = range(date("Y"),1920);
    $this->widgetSchema['fecha_de_nuevo_mandato']->setAttribute('class','span2');
    $this->widgetSchema['fecha_de_nuevo_mandato']->setOption('years',
         array_combine($anios, $anios)
    );  
    
    //hago hidden el campo 'ejercicio_economico_id'
    $this->validatorSchema['ejercicio_economico_id']->setOption('required',FALSE);
    $this->widgetSchema['ejercicio_economico_id'] = new sfWidgetFormInputHidden();
      
  }
}
