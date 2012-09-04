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
   //Fecha_inicio no vacio
   $this->validatorSchema['fecha_inicio']->setMessage('required',"La Fecha de Inicio no puede estar vacío");
   //Fecha_fin no vacio
   $this->validatorSchema['fecha_fin']->setMessage('required',"La Fecha de Fin no puede estar vacío");
   
   //valores minimos de cada campo
   $this->validatorSchema['presidente']->setOption("min_length",10);
   $this->validatorSchema['presidente']->setMessage('min_length',"El nombre y apellido del presidente es muy corto!");
   $this->validatorSchema['secretario']->setOption("min_length",10);
   $this->validatorSchema['secretario']->setMessage('min_length',"El nombre y apellido del secretario es muy corto!");
   $this->validatorSchema['tesorero']->setOption("min_length",10);
   $this->validatorSchema['tesorero']->setMessage('min_length',"El nombre y apellido del tesorero es muy corto!");
   $this->validatorSchema['sindico']->setOption("min_length",10);
   $this->validatorSchema['sindico']->setMessage('min_length',"El nombre y apellido del sindico es muy corto!");
   
   // Mensajes de datos inválidos
   $this->validatorSchema['fecha_inicio']->setMessage('invalid',"La Fecha de Inicio colocada es Inválida!");
   $this->validatorSchema['fecha_fin']->setMessage('invalid',"La Fecha de Fin colocada es Inválida!");
   
   //especifico el rango de fechas posibles
   $anios = range(date('Y')+2,1920);
   
   //formateo el campo fecha_inicio
   $this->widgetSchema['fecha_inicio']->setAttribute('class','span2');   
   $this->widgetSchema['fecha_inicio']->setOption('years',
   array_combine($anios, $anios)
   );   
   // formateo el campo fecha_fin
   $this->widgetSchema['fecha_fin']->setAttribute('class','span2');   
   $this->widgetSchema['fecha_fin']->setOption('years',
   array_combine($anios, $anios)
   );   
  }
}
