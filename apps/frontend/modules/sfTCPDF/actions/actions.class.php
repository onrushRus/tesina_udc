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
  
  /**
 * Full test.
 */
  
  public function executeTest2(sfWebRequest $request) {
    //Información de los entes a manitupar
    $ente = $request->getParameter('ente');
    $this->PersonaJuridica = PersonaJuridicaQuery::create()
                ->filterByNombreFantasia($ente)
                ->find();  
    

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

    $matricula;
function datos(){ 
    foreach ($PersonaJuridica as $ente):
        global $matricula; $matricula = $ente->getMatricula();
           $legajo = $ente->getLegajo();     
           $cuit_cuil = $ente->getCuitcuil();
           $fecha_inicio_actividad = $ente->getFechaInicioActividad('d-m-Y');
           $telefono = $ente->getTelefono();
    endforeach;
}

    // init pdf doc
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    
    $html1 = <<<EOD
<h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
<i>This is the first example of TCPDF library.</i>
<p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
<p>Please check the source code documentation and other examples for further information.</p>
<p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
<p>HOLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
<p>HOLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA  22222222222222222222222222222222</p>
<p>HOLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA $ente sdfasdfsd</p>
EOD;
 

    /*
   $html1 = <<<EOD
<table border=1><th>Matricula</th><th>Legajo</th><th>Cuit/Cuil</th><th>F. Inicio Actividad</th><th>Telefono</th>
<tr><td></td><td></td><td></td><td></td><td></td></tr></table>" 
EOD;
        */
        
  //  function datosEnte(){
 /*   $html ="
         <table border=1>
            <th>Matricula</th>
            <th>Legajo</th>
            <th>Cuit/Cuil</th>
            <th>F. Inicio Actividad</th>
            <th>Telefono</th>
            <tr>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
            </tr>
         </table>";     */
  //}
  //  $html = $html1.$html2;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html1, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
    // output
    $pdf->Output();
    return sfView::NONE;
  }
    
 
    public function executeTest5() {
        // $config = sfTCPDFPluginConfigHandler::loadConfig();

        // create new PDF document
        $pdf = new sfTCPDF();

         // set document information
          $pdf->SetCreator(PDF_CREATOR);
          $pdf->SetAuthor('Gosaine Jaavier');
          $pdf->SetTitle('TCPDF Exaaample 007');
          $pdf->SetSubject('TCPDF Tutorial');
          $pdf->SetKeywords('TCPDF, PDF, example, test, guide'); 


        // settings
        $pdf->SetFont("FreeSerif", "", 12);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);



// ---------------------------------------------------------
// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


//set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------
// set font
        $pdf->SetFont('times', '', 12);

// add a page
        $pdf->AddPage();

// create columns content
        $left_column = '<b>LEFT COLUMN</b> left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column left column';

        $right_column = '<b>RIGHT COLUMN</b> right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column right column';

// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
// get current vertical position
        $y = $pdf->getY();

// set color for background
        $pdf->SetFillColor(255, 255, 200);

// set color for text
        $pdf->SetTextColor(0, 63, 127);

// write the first column
        $pdf->writeHTMLCell(80, '', '', $y, $left_column, 1, 0, 1, true, 'J', true);

// set color for background
        $pdf->SetFillColor(215, 235, 255);

// set color for text
        $pdf->SetTextColor(127, 31, 0);

// write the second column
        $pdf->writeHTMLCell(80, '', '', '', $right_column, 1, 1, 1, true, 'J', true);

// reset pointer to the last page
        $pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
        $pdf->Output();
    }
    
    public function executeTest6() {
        # incluimos todos los ficheros requeridos
# tal como lo hemos recogido en el fichero tcpdf.inc.php
# creado tal como se indica al margen

$MiPDF=new TCPDF();
# creamos una página en blanco
$MiPDF->Addpage();
# creamos una segunda página en blanco
$MiPDF->Addpage();
# visualizamos el documento
$MiPDF->Output();
    }
    
    public function executeTest7() {    
    # creamos un array con las dimensiones (ancho y alto);
$dimensiones=array (140,200);
# creamos  un nuevo objeto (MiPDF) utilizando la clase TCPDF
# incluyendo en este caso los valores a utilizar por el constructor
$MiPDF=new TCPDF('P','mm',$dimensiones);
#desactivamos encabezado y pie de página
$MiPDF->setPrintHeader(false);
$MiPDF->setPrintFooter(false);
# el método SetAuthor nos permite incluir el nombre del autor
$MiPDF->SetAuthor('Pepe Pérez');
# el método SetCreator nos permite incluir el nombre de la
# aplicacion que genera el pdf
$MiPDF->SetCreator('clase TCPDF');
# el método SetTitle nos permite incluir un título
$MiPDF->SetTitle('Pruebas del pdf');
# el método SetKeywords nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
$MiPDF->SetKeywords('palabra1 palabra2');
# el método SetDisplayMode nos permite incluir palabras claves
# separadas por espacios y dentro de una misma cadena
$MiPDF->SetDisplayMode('fullpage','two');
# creamos una página en blanco. Incluimos, para esta primera página
# un cambio de orientación respecto a la inicial
$MiPDF->Addpage('L');
# creamos una segunda página en blanco
# en la que, al no incluir el parámetro de orientación
# utilizará el valor usado en el último Addpage que ha sido L.
$MiPDF->Addpage();
/* insertamos unas nuevas dimensiones */
$dimension2=array(97,234);
/* las dimensiones anteriores pero invirtiendo el orden */
$dimension3=array(234,97);
/* insertamos páginas con la misma orientación pero utilizando
   cada uno de los dos arrays  anteriores. Veremos que las páginas
   que se visualizan tienen igual tamaño y orientación. Es decir,
   no importa el orden en que incluyamos las dimensiones ya que será la
   orientación establecida la situe esas medidas */
   $MiPDF->Addpage('L',$dimension2);
   $MiPDF->Addpage('L',$dimension3);
# visualizamos el documento
$MiPDF->Output('donpepito.pdf','I');
}


    public function executeTest8() {   
//   creamos un nuevo objeto y añadimos una página*/ 
$dimensiones=array (140,200); 
$MiPDF=new TCPDF('P','mm',$dimensiones,false,'ISO-8859-1'); 
/* ajustamos al 100% la visualización  y despactivamos 
 la impresión de cabeceras y pies de pagina */ 
$MiPDF->SetDisplayMode('real'); 
$MiPDF->setPrintHeader(false); 
$MiPDF->setPrintFooter(false); 
#insertamos una página en blanco 
$MiPDF->Addpage(); 
$MiPDF->Write(0,'Esto arrancará del margen superior izquierdo. La interlinea igual a cero equivale a utilizar el mínimo interlineado según el tamaño de la letra en uso.');
$MiPDF->Write(8,'Mi segundo Write se pone a continuación del texto anterior. Pero como he puesto interlinea igual a 8 se ve un cierto desplazamiento entre la línea base entre este texto y el anterior.');
$MiPDF->Write(0," Ocurre lo contrario. Se ha subido la línea porque he puesto interlinea cero."); 
$MiPDF->Write(0," \n\n Esto es un enlace. Te llevará al ITE","http://www.ite.educacion.es/"); 
$MiPDF->Write(0," Delante del enlace hemos puesto dos n precedidas de \ por eso se produjo un salto de dos líneas"); 
$MiPDF->Write(0," Tengo fondo",'',1); 
$MiPDF->Write(0," No se ve nada porque se han superpuesto fondo y texto negros (los colores por defecto para ambos).",'',0); 
$MiPDF->Write(0," \n Salto línea y me voy a la derecha.",'',0,'R',1); 
$MiPDF->Write(0,"  Han tenido que poner 1 para mandarme al centro",'',0,'C',1); 
$MiPDF->Write(0," Salto línea (sin Ln no soy nada) y me voy a la izquierda.",'',0,'L',1); 
$MiPDF->Write(0," \n Ahora incluiremos un fichero de texto externo",'',0,'L',1); 
$MiPDF->Output();
}

  public function executeTest9(sfWebRequest $request) {

  }
  
  public function executeTest10(sfWebRequest $request) {
  /* establecemos las dimensiones del documento 
   creamos un nuevo objeto y añadimos una página*/ 
$dimensiones=array (140,200); 
$MiPDF=new TCPDF(); 
# ajustamos al 100% la visualización 
$MiPDF->SetDisplayMode('real'); 
# desactivamos la impresion de cabeceras y pie de pagina 
$MiPDF->setPrintHeader(false); 
$MiPDF->setPrintFooter(false); 
$MiPDF->setFont('times','',10); 
$MiPDF->setFillColor(220); 
#insertamos una página en blanco 
$MiPDF->Addpage(); 
$html='<p style="color:#ff0000;font-weight:bold;font-size:14pt;text-align:center">Esto va en rojo<br><br>';
//<img src="image_demo.jpg" width="400"><br /><br />'; 
$html.='<table align="center" width="400" height="30" cellpadding="5" cellspacing="10" border="4" bordercolor="#FF0000"  bgcolor="#FFCCFF">
  <tr> 
    <td>a</td> 
    <td>b</td> 
    <td>c</td> 
  </tr> 
  <tr> 
    <td>d</td> 
    <td>e</td> 
    <td>f</td> 
  </tr> 
  <tr> 
    <td>g</td> 
    <td>h</td> 
    <td>i</td> 
  </tr> 
</table></p>'; 
//$MiPDF->WriteHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='') 

$MiPDF->WriteHTML($html,1,1,1,0,'C'); 
$MiPDF->Output(); 
}

}
