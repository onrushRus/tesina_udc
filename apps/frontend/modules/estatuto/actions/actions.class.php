<?php

/**
 * estatuto actions.
 *
 * @package    tesina_udc
 * @subpackage estatuto
 * @author     Your name here
 */
class estatutoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //agrego que filtre por el id del ente
    $ente = $request->getParameter('ente');
    $this->Estatutos = EstatutoQuery::create()
            ->filterByPersonaJuridicaId($ente)
            ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $ente = $request->getParameter('ente');
    $this->form = new EstatutoForm();
    $this->form->setDefaults(array
        ('persona_juridica_id'=>$ente));    
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EstatutoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Estatuto = EstatutoQuery::create()->findPk($request->getParameter('id_estatuto'));
    $this->forward404Unless($Estatuto, sprintf('Object Estatuto does not exist (%s).', $request->getParameter('id_estatuto')));
    $this->form = new EstatutoForm($Estatuto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Estatuto = EstatutoQuery::create()->findPk($request->getParameter('id_estatuto'));
    $this->forward404Unless($Estatuto, sprintf('Object Estatuto does not exist (%s).', $request->getParameter('id_estatuto')));
    $this->form = new EstatutoForm($Estatuto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Estatuto = EstatutoQuery::create()->findPk($request->getParameter('id_estatuto'));
    $this->forward404Unless($Estatuto, sprintf('Object Estatuto does not exist (%s).', $request->getParameter('id_estatuto')));
    $Estatuto->delete();

    $this->redirect('estatuto/index?ente='.$Estatuto->getPersonaJuridicaId());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Estatuto = $form->save();
      
      $this->redirect('estatuto/index?ente='.$Estatuto->getPersonaJuridicaId());
      //$this->redirect('personaJuridica/index?ente='.$Estatuto->getPersonaJuridica()->getNombreFantasia());
      //$this->redirect('estatuto/edit?id_estatuto='.$Estatuto->getIdEstatuto());
    }
  }
  
  //funcion necesaria para redirigir la lectura del pdf a otro template
  public function executeEstatutoLectura(sfWebRequest $request)
  {
    //agrego que filtre por el id del ente
    $ente = $request->getParameter('ente');
    $this->EstatutoLectura = EstatutoQuery::create()
            ->filterByPersonaJuridicaId($ente)            
            ->find();
  }
}
