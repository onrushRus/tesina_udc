<?php

/**
 * CambiarContrasenia form.
 *
 * @package    tesina_udc
 * @subpackage form
 * @author     Your name here
 */
class CambiarContraseniaForm extends sfForm
{
  public function configure()
  {   

    $this->setWidgets(array(
        'password_actual' => new sfWidgetFormInputPassword(),
        'password_nuevo1' => new sfWidgetFormInputPassword(),
        'password_nuevo2'    => new sfWidgetFormInputPassword(),
        ));

    $this->widgetSchema->setLabels(array(
        'password_actual' => 'Ingrese contraseña actual',
        'password_nuevo1' => 'Ingrese nueva contraseña',
        'password_nuevo2' => 'Repetir nueva contraseña'
    ));

    $this->widgetSchema->setNameFormat('CambiarContrasenia[%s]');

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
/*    
    $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('password_nuevo1', '==', 'password_nuevo2',
             array(),
             array('invalid' => 'Las contraseñas no son iguales')));
*/
    
    
            $this->validatorSchema->setPostValidator(
           new sfValidatorCallback(array(
               'callback' => array($this, 'validaContrasenias')
           )));
    
    
  }
      
    public function validaContrasenias($validator, $values){          
     
     $pass_actual = sfContext::getInstance()->getUser()->getAttribute('pass');
     $pass_ingresada = $values['password_actual'];   
     
     // comparo pass actual del usuario con la pass ingresada      
     if($pass_actual != md5($pass_ingresada)){
         $error = new sfValidatorError($validator,'La contraseña actual no es correcta');
         //lanzo el error asocociado al campo 'password_actual'
         throw new sfValidatorErrorSchema($validator, array('password_actual' => $error));
     }
     // comparo las dos contraseñas nuevas ingresadas      
     if($values['password_nuevo1'] != $values['password_nuevo2']){
         $error = new sfValidatorError($validator,'Las contraseñas no son iguales');
         //lanzo el error asocociado al campo 'fecha_de_nuevo_mandato'
         throw new sfValidatorErrorSchema($validator, array('password_nuevo1' => $error));
     }
     return $values;
    }
  

  
    
    
    
    
    
    
      /*
        //recuperamos el nombre de usuario de la sesion 
       $nombre_user = sfContext::getInstance()->getUser()->getAttribute('nombreUsuario'); 

       //Recuperamos el password con el $nombre_usuario
       $pass_actual = UsarioPeer::metodoRecuperaPass($nombre_user); 

       //Creamos el compo oculto con el $pass_actual por defecto 
       $this->widgetSchema ['pass_actual'] = new sfWidgetFormInputHidden(); 
       $this->setDefault('pass_actual', $pass_actual); 

       //Por ultimo validamos con el pass que ingreso el usuario 
       $this->validatorSchema->setPostValidator(new sfValidatorAnd(array( 
                           new sfValidatorSchemaCompare('pass_ingresado', 
                           sfValidatorSchemaCompare::EQUAL, 'pass_actual', array(), 
                                   array('invalid' => 'Este no el password actual')), 
       ))); 
       
       */
  
}
