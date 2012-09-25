<?php

/**
 * imagenes actions.
 *
 * @package    tesina_udc
 * @subpackage imagenes
 * @author     Your name here
 */
class imagenesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //agrego que filtre por el id del ente
    $ente = $request->getParameter('ente');
    $this->Imageness = ImagenesQuery::create()
            ->filterByPersonaJuridicaIdPersonaJuridica($ente)
            ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    //$this->form = new ImagenesForm();     
    $ente = $request->getParameter('ente'); 
      
    $this->form = new ImagenesForm();
    
    $this->form->setDefaults(array
        ('persona_juridica_id_persona_juridica'=>$ente));
       
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ImagenesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Imagenes = ImagenesQuery::create()->findPk($request->getParameter('id_imagenes'));
    $this->forward404Unless($Imagenes, sprintf('Object Imagenes does not exist (%s).', $request->getParameter('id_imagenes')));
    $this->form = new ImagenesForm($Imagenes);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Imagenes = ImagenesQuery::create()->findPk($request->getParameter('id_imagenes'));
    $this->forward404Unless($Imagenes, sprintf('Object Imagenes does not exist (%s).', $request->getParameter('id_imagenes')));
    $this->form = new ImagenesForm($Imagenes);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Imagenes = ImagenesQuery::create()->findPk($request->getParameter('id_imagenes'));
    $this->forward404Unless($Imagenes, sprintf('Object Imagenes does not exist (%s).', $request->getParameter('id_imagenes')));
    $Imagenes->delete();
    
    $cantImagenes = ImagenesQuery::create()->find();
    $cantImagenes= sizeof($cantImagenes);
    
    /*Si no hago este control, cuando se elimina la ÚLTIMA imagen y se
     * redirecciona al index, se pierden los estilos.. hay que ver xq..
     * Es una solución por mientras.. cuando queda una sola imagen se 
     * redicciona al index de perona juridica
     */
    if ($cantImagenes > 1){
        $this->redirect('imagenes/index?ente='.$Imagenes->getPersonaJuridicaIdPersonaJuridica());
    }else{
        $this->redirect('personaJuridica/index?ente='.$Imagenes->getPersonaJuridica()->getNombreFantasia());
    }
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Imagenes = $form->save();

      $this->redirect('imagenes/index?ente='.$Imagenes->getPersonaJuridicaIdPersonaJuridica());
     // $this->redirect('personaJuridica/index?ente='.$Imagenes->getPersonaJuridica()->getNombreFantasia());

    }
  }  
}
