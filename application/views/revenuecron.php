
<p>Your file is ready. You can download it from <a href="<?php echo base_url();?>uploads/Revenue.xls">here!</a></p>
 
 <?php
 
 
 
  $path = base_url('uploads/Revenue.xls');  
  
 
 $to = "karthikeyanr@yoursefficiently.com,gaurav@samrat.co.in,ananthababu@infinit-e.in,girish@samrat.co.in,gajaleo.2@gmail.com";     
         
//$to = "vijaykumarv@yoursefficiently.com";

$filename = 

$subject = 'Hi';

$email = "karthikeyanr@yoursefficiently.com";

$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 $message = '<table width="100%" cellspacing="0" cellpadding="5" border="0" style="border: 1px solid black;">';           
 $message .= '<tr><th style="border: 1px solid black; background-color: #f2f2f2">Revenue Reports</th></tr>';               
 $message .= '<tr><td style="border: 1px solid black;"><a href="'.$path.'">On Click Download Excel File </a></td></tr>';  				
 $message .= '</table>';
 
 
echo $message;
// Send mail
mail($to, $subject, $message, $headers);  

?>