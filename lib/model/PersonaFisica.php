<?php



/**
 * Skeleton subclass for representing a row from the 'persona_fisica' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class PersonaFisica extends BasePersonaFisica {

  public function setPassword($v){
  //una vez ingresado el password, se guarda
  //en la base con la codificacion 'md5()'
      if($v)
         $v= md5($v);
           
      return parent::setPassword($v);
  }// setPassword()
        
} // PersonaFisica
