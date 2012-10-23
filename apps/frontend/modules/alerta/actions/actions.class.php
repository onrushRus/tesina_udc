<?php

/**
 * alerta actions.
 *
 * @package    tesina_udc
 * @subpackage alerta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class alertaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->hoy = date("d-m-Y");
      $this->anioActual = date("Y");      
      
      $this->entes = PersonaJuridicaQuery::create()
              ->useEjercicioEconomicoQuery()
                ->filterByNumeroEjercicioEconomico($this->anioActual)
                ->endUse()
              ->find();
      
  }
  
  
  
  private function restaHoras($horaIni, $horaFin){
    return (date("H:i:s",strtotime($horaFin) - strtotime($horaIni) ));
  }

  function hora_a_segundos($hora){
	/*
	 *	recibe: 	hora en formato hh:mm:ss
	 * 	devuelve: 	total de segundos de $hora 
	 */
		$arrayHora=explode(':',$hora);
		$segundos=($arrayHora[0]*3600)+($arrayHora[1]*60)+$arrayHora[2];
	return $segundos;
  }

  function segundos_a_hora($segundos){
	/*
	 *	recibe: 	x Segundos
	 * 	devuelve: 	en formato hora hh:mm:ss 
	 */
		$hora=intval($segundos/3600);
		if($hora<10)
			$hora="0$hora";		
		$minutos=intval(($segundos%3600)/60);
		if($minutos<10)
			$minutos="0$minutos";		
		$segundos=intval(($segundos%3600)%60);
		if($segundos<10)
			$segundos="0$segundos";	
		$format='%s:%s:%s';
		$hora=sprintf("$format",$hora,$minutos,$segundos);	
	return $hora;
  }
}
