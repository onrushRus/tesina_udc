<?php

/**
 * aporte actions.
 *
 * @package    tesina_udc
 * @subpackage aporte
 * @author     Your name here
 */
class aporteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ente = $request->getParameter('ente');  
    $this->Aportes = AporteQuery::create()
            ->orderByFechaAporte(Criteria::DESC)
            ->find();
    $this->ente = PersonaJuridicaQuery::create()
            ->filterByIdPersonaJuridica($ente)            
            ->findOne();
  }

  public function executeNew(sfWebRequest $request){
    $enteId = $request->getParameter('enteId');
    $this->form = new AporteForm();
    $this->form->setDefaults(array(
        'persona_juridica_id'=>$enteId));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AporteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $this->form = new AporteForm($Aporte);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $this->form = new AporteForm($Aporte);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Aporte = AporteQuery::create()->findPk($request->getParameter('id_aporte'));
    $this->forward404Unless($Aporte, sprintf('Object Aporte does not exist (%s).', $request->getParameter('id_aporte')));
    $Aporte->delete();
    
    $this->redirect('aporte/index?ente='.$Aporte->getPersonaJuridicaId());
    //$this->redirect('aporte/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Aporte = $form->save();
       
      $this->redirect('aporte/index?ente='.$Aporte->getPersonaJuridicaId());
      //$this->redirect('aporte/edit?id_aporte='.$Aporte->getIdAporte());
    }
  }
}
