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
    //si tiene el parametro del usuario, es xq se desea ver sus datos
    $this->tiene_parametro_usuario = $this->hasRequestParameter('usuario');
    $this->pass_modificada = $this->hasRequestParameter('pass_modificada');

    $this->elegido = array();
    $this->var_post = false;
    $this->PersonaFisicas = PersonaFisicaQuery::create()->find();
    // si viene algo por el POST
    if(($request->isMethod(sfWebRequest::POST))||($request->isMethod(sfWebRequest::GET))){
        $this->var_post = true;
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
    
    if(($this->getUser()->getAttribute('id')) == ($request->getParameter('id_persona_fisica'))){
      $this->forward404Unless($PersonaFisica, sprintf('Object PersonaFisica does not exist (%s).', $request->getParameter('id_persona_fisica')));
      $this->form = new PersonaFisicaForm($PersonaFisica);
    }else{
      $this->redirect('principal/index');
    }
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
       //obtengo todos los datos del form
        $datos_contrasenias = $request->getParameter('CambiarContrasenia');
        $this->formulario->bind($request->getParameter($this->formulario->getName()), $request->getFiles($this->formulario->getName()));
        //si el formulario es valido, obtengo la persona fisica correspondiente, seteo su pass y la guardo
        if ($this->formulario->isValid()) {
            $p = PersonaFisicaPeer::retrieveByPk($this->getUser()->getIdUsuario());
            $p->setPassword($datos_contrasenias['password_nuevo1']);     
            $p->save();   
            
            $this->redirect('personaFisica/index?pass_modificada=true&usuario='.$request->getParameter('usuario'));
        }
     }
  }
}
