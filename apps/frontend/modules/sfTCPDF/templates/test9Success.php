<?php
$MiPDF=new TCPDF(); 
// creamos una página en blanco
$MiPDF->Addpage();
// creamos una segunda página en blanco
$MiPDF->Addpage();
// visualizamos el documento
$MiPDF->Output();
?>