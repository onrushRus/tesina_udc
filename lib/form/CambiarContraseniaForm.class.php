<?php

/**
 * CambiarContrasenia form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     NFernandez - JGosaine
 */
class CambiarContraseniaForm extends sfForm
{
  public function configure()
  {   
    //creo los widgets
    $this->setWidgets(array(
        'password_actual' => new sfWidgetFormInputPassword(),
        'password_nuevo1' => new sfWidgetFormInputPassword(),
        'password_nuevo2'    => new sfWidgetFormInputPassword(),
        ));
    //seteo los labels por algo más amigable al usuario
    $this->widgetSchema->setLabels(array(
        'password_actual' => 'Ingrese contraseña actual',
        'password_nuevo1' => 'Ingrese nueva contraseña',
        'password_nuevo2' => 'Repetir nueva contraseña'
    ));
    
    //Creamos el campo oculto con el $password_nuevo 
    /*$this->widgetSchema ['password_nuevo'] = new sfWidgetFormInputHidden(); 
    $this->setDefault('password_nuevo', $pass_real); */
    
    $this->widgetSchema->setNameFormat('CambiarContrasenia[%s]');

    //validaciones
    $this->setValidators(array(

        'password_actual' => new sfValidatorString(array('min_length' => 4),
                array('required' => 'Campo obligatorio',
                    'min_length' => 'Minimo %min_length% caracteres.',)),
        'password_nuevo1' => new sfValidatorString(array('min_length' => 4),
                array('required' => 'Campo obligatorio',
                    'min_length' => 'Minimo %min_length% caracteres.',)),
        'password_nuevo2' => new sfValidatorString(array('min_length' => 4),
                array('required' => 'Campo obligatorio',
                    'min_length' => 'Minimo %min_length% caracteres.',)),

    ));
    //post validator para controlar la modificación de una contraseña
    $this->validatorSchema->setPostValidator(
           new sfValidatorCallback(array(
               'callback' => array($this, 'validaContrasenias')//llama a la funcion validaContrsenias
     )));
    
  }// fin function configure
      
  public function validaContrasenias($validator, $values){          
     
     $pass_actual = sfContext::getInstance()->getUser()->getAttribute('pass');
     $pass_ingresada = $values['password_actual'];   
     
     // comparo pass actual del usuario con la pass ingresada      
     if($pass_actual != md5($pass_ingresada)){
         $error = new sfValidatorError($validator,'ERROR: La contraseña actual no es correcta');
         //lanzo el error asocociado al campo 'password_actual'
         throw new sfValidatorErrorSchema($validator, array('password_actual' => $error));
     }
     // comparo las dos contraseñas nuevas ingresadas      
     if($values['password_nuevo1'] != $values['password_nuevo2']){
         $error = new sfValidatorError($validator,'ERROR: Las contraseñas no son iguales');
         //lanzo el error asocociado al campo 'password_nuevo1'
         throw new sfValidatorErrorSchema($validator, array('password_nuevo1' => $error));
     }
     return $values;
  } //fin validaContrasenias   
}//fin CambiarContraseniasForm
