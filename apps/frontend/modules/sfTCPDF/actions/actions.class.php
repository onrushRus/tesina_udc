<?php

/**
 * sfTCPDF actions.
 *
 * @package    tesina_udc
 * @subpackage sfTCPDF
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfTCPDFActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  /**
 * Hello world test.
 */
  public function executeTest() {
    $config = sfTCPDFPluginConfigHandler::loadConfig();

    // pdf object
    $pdf = new sfTCPDF();

    // settings
    $pdf->SetFont("FreeSerif", "", 12);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // init pdf doc
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Cell(80, 10, "Hello World SEEEEEEEEEEEEEEEE LPMQLRMPARIOOOOOOOO!!! & é € U û いろは");

    // output
    $pdf->Output();
    return sfView::NONE;
  }
}
