<?php

/**
 * personaFisica actions.
 *
 * @package    tesina_udc
 * @subpackage personaFisica
 * @author     Your name here
 */
class personaFisicaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {    
    $this->elegido = array();
    $this->PersonaFisicas = PersonaFisicaQuery::create()->find();
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){     
        //guardo el id de ese usuario
        $usuario = $request->getParameter('usuario');        
        //si no esta vacío el campo "usuario", filtro por esa campo
        if((!empty($usuario)) && ($usuario != '*')){
            //creo otra consulta
            $consulta2 = PersonaFisicaQuery::create();
            $consulta2->filterByUsuario($usuario);
            $this->elegido = $consulta2->find();              
        }        
    }
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaFisicaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonaFisicaForm();   
    
    $this->processForm($request, $this->form);
    
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->persona_edit = PersonaFisicaQuery::create()
                          ->filterByIdPersonaFisica($request->getParameter('id_persona_fisica'))
                          ->find();
            
    $PersonaFisica = PersonaFisicaQuery::create()->findPk($request->getParameter('id_persona_fisica'));
    $this->forward404Unless($PersonaFisica, sprintf('Object PersonaFisica does not exist (%s).', $request->getParameter('id_persona_fisica')));
    $this->form = new PersonaFisicaForm($PersonaFisica);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $PersonaFisica = PersonaFisicaQuery::create()->findPk($request->getParameter('id_persona_fisica'));
    $this->forward404Unless($PersonaFisica, sprintf('Object PersonaFisica does not exist (%s).', $request->getParameter('id_persona_fisica')));
    $this->form = new PersonaFisicaForm($PersonaFisica);
        
    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $PersonaFisica = PersonaFisicaQuery::create()->findPk($request->getParameter('id_persona_fisica'));
    $this->forward404Unless($PersonaFisica, sprintf('Object PersonaFisica does not exist (%s).', $request->getParameter('id_persona_fisica')));
    $PersonaFisica->delete();

    $this->redirect('personaFisica/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {  
      
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {                          
      $PersonaFisica = $form->save();     
      //$this->url_for('personaFisica/index?usuario='.$PersonaFisica->getUsuario());
      //$this->redirect('personaFisica/index');
      $this->redirect('personaFisica/index?usuario='.$PersonaFisica->getUsuario());
      
        //$this->redirect('personaFisica/edit?id_persona_fisica='.$PersonaFisica->getIdPersonaFisica());
    }
  }
  
    public function executePassword(sfWebRequest $request)
  {
     // Generamos el formulario 
     $this->formulario = new CambiarContraseniaForm(); 
     
     //si se envia el form (guardar)
     if ($request->isMethod(sfWebRequest::POST)) {
        $datos_contrasenias = $request->getParameter('cambio_contrasenia');
        $this->formulario->bind($request->getParameter($this->formulario->getName()), $request->getFiles($this->formulario->getName()));
        if ($this->formulario->isValid()) {
      //    $user_pass_actual = sfContext::getInstance()->getUser()->getAttribute('pass');
      //    $user_pass_ingresado = $datos_contrasenias['password_actual'];
          
     //     if ($user_pass_actual == md5($user_pass_ingresado)){
     throw new Exception ("form valido"); 
     //     }          
        }
     }
  }
    
}
