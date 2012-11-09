<?php

/**
 * MailAlerta form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class MailAlertaForm extends BaseMailAlertaForm
{
  
  protected static $diasDeEnvio = array(
      '5'=>'5 dias',
      '10'=>'10 dias',
      '15'=>'15 dias',
      '20'=>'20 dias',
      '25'=>'25 dias',
      '30'=>'1 mes',
      '45'=>'1 mes y medio',
      '60'=>'2 meses');
    
  public function configure()
  {
    $this->setWidget('dias_para_aviso', new sfWidgetFormSelect(array('choices'=>self::$diasDeEnvio)));
            
    unset($this['tipo_alerta']);
      
  }
}
