<?php 
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20 aaaa";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();

$content= '<style>
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
table,td{
height:30px;

}

 </style>


<html>
<body>
<section id="content">

     
        <div class="container">
       
<div class="col-md-12">
   
				
                <table  align="center" style="background: #fff; border-radius: 5px 5px 5px 5px; border: 1px solid #ccc;">
                    <tr>
                        <td>
<TABLE class="tp01" cellpadding="0" cellspacing="0" border="0">
<TR>
<TD colspan="1"><img src="<?php echo base_url(); ?>assets/images/stagologo.png" alt="materialize logo" ></td>
<TD colspan="1" style="text-align:center;"><h2>WARRANTY CLAIM</h2><p>Demande de Garantie</p></td>
<TD colspan="1"><p>SUBMIT TO / renvoyer a :</p>
<p ><b style="color:red;">DIAGNOSTICA STAGO - SAVE</b> - B.P.226</p> 
<p>92602 ASNIERES CEDEX - FRANCE</p>
<p>FAX : (33)(0) 1 46 88 22 400px</p>
<p>@: save@stago.fr</p>
</td>
</tr>


<TR>
<TD colspan="1"><p><b>TYPE OF INSTRUMENT:</b>'.$model.'</p>
<p>Type dinstrument</p>
</td>
<TD colspan="1"><p><b>SERIAL No:</b> '.$serial_no.'</p>
<p>&#8457;N de serie</p>
</td>
<TD colspan="1"><p><b>DATE OF INSTALLATION (YY MM DD):</b></p>
<p>Date dinstallation (AA MM JJ)'.$purchase_date.'</p></td>
</tr>



</table>


</table>	   

	</div>   
  </div>	   
</section>

	   
</body>

</html>'; 

ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
//$obj_pdf->Output('ssss.pdf', 'I');

$obj_pdf->Output('service/assets/'.$serial_no.'.pdf', 'F');


?>