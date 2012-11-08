<?php

/**
 * EjercicioEconomico form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class EjercicioEconomicoForm extends BaseEjercicioEconomicoForm
{
  public function configure()
  {     
   //'fecha_fin_ejercicio_economico'
   $anios = range(date("Y"),1920);
      $this->widgetSchema['fecha_fin_ejercicio_economico']->setAttribute('class','span2');
      $this->widgetSchema['fecha_fin_ejercicio_economico']->setOption('years',
      array_combine($anios, $anios)
   );
   //seteamos el formato de la fecha
   $this->widgetSchema['fecha_fin_ejercicio_economico']->setOption('format', '%day%/%month%/%year%');
      
   if($this->isNew()){
     //seteo que el campo "persona_juridica_id" no sea requerido
     $this->validatorSchema['persona_juridica_id']->setOption('required',FALSE);
     $this->widgetSchema['persona_juridica_id'] = new sfWidgetFormInputHidden();
     //seteo que el campo "numero_ejercicio_economico" no sea requerido
     $this->validatorSchema['numero_ejercicio_economico']->setOption('required',FALSE);
     $this->widgetSchema['numero_ejercicio_economico'] = new sfWidgetFormInputHidden();
   }else{
     //quito que se vea el id_ente al que pertenece el ejercicio economico
     unset($this['persona_juridica_id']); 
     //quito que se vea el numero_ejercicio_economico, ya que se actualiza automaticamente
     unset($this['numero_ejercicio_economico']); 
   }
   //seteo la opcion de que el numero 
   //de ejercicio economico no se repita
   $this->validatorSchema['numero_ejercicio_economico']->setMessage('invalid','Ya existe un ejercicio económico de ese año.');
      
  }
  
  public function updateObject($values = null){
     $objeto = parent::updateObject($values);
     
     //if($this->getObject()->isNew()){
         $anio = $objeto->getFechaFinEjercicioEconomico('d-m-Y');
         $listaAnio = explode('-',$anio);
         $objeto->setNumeroEjercicioEconomico($listaAnio[2]);
     //}
         
         
     return $objeto;
  }
}
