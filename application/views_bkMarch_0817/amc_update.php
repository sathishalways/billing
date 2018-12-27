


 <style>
 .link{
	 padding: 9px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
margin-right:20px;

 }
 .link:hover
 {
	 color:black;
	 text-decoration:none;
	 
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .tableadd tr td input {
    width: 210px !important;
 }
 
 .tableadd tr td select {
    border: 1px solid #093F88;
	width: 210px;
 }
 
 .chosen-container .chosen-drop .chosen-search input
 {
	width:200px !important;
 }
 #myTable tr td label{
	 width:150px !important;
	 
 }
 #myTable1 tr td label{
	 width:150px !important;
	 
 }
 .chosen-container {
    width: 210px !important;
}
#errorBox{
 color:#F00;
 }
 h5
{
	font-size: 22px;
 border-bottom: 1px solid #055E87 !important;
text-align: center;
width: 170px;
margin: auto auto 35px;
}
h6
{
	font-weight: bold;
font-size: 16px;
margin: 0px;
border-bottom: 1px solid gray;
width: 145px;
margin-top:2%;
}
.dropdown-content {
    display: none;
}
#rowadd
{
	border: 1px solid #055E87 !important;
background: #093F88 none repeat scroll 0% 0% !important;
padding: 6px;
border-radius: 5px;
color: #FFF;
font-weight: bold;
font-family: calibri;
font-size: 17px;
margin-left: 47%;

}
.tableadd tr td{
	height:40px;
}
.right p
{
	line-height:5px;
	font-size: 12px;
}
.right h1
{
	line-height:5px;
}
.toaddress h4
{
	line-height:5px;
}
.toaddress p
{
	line-height: 5px;

margin-left: 2%;
}
.toaddress
{
	margin-bottom: 25px;
	margin-top: 20px;
}
.subject
{
	/*margin-left:30px;*/
}
.box{
       
        display: none;
		box-shadow:none !important;
      
    }
	.comprehensive
		{
		display:block;
		}
		.message p
		{
				/*text-indent: 30px;*/
				text-align:justify;
		}
		.message p.dear
		{
				text-indent: 0px;
				
		}
		input
		{
			border: 1px solid #093F88;
border-radius: 3px;
		}
		table tr td
		{
			width:150px;
			height:30px;
		}
		table tr td.dot
		{
			width:50px;
		}
		table tr td.bank
		{
			width:350px;
		}
		table tr td.bank .address
		{
			margin-right:20px;
		}
		table
		{
			margin-left: 10%;
		}
		b
		{
			text-decoration:underline;
		}
		.service
		{
			width:400px;
		}
		.service b
		{
			font-weight:normal;
			text-decoration:none;
		}
		.nos
		{
			width:100px !important;
		}
 </style>
  <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
		
        if($(this).attr("value")=="comprehensive"){
            $(".box").not(".comprehensive").hide();
            $(".comprehensive").show();
        }
        if($(this).attr("value")=="service_only"){
            $(".box").not(".service_only").hide();
			
            $(".service_only").show();
        }
        
    });
});
</script>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$("#fromdate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#todate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#startdate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
		$("#enddate").datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });

}//]]>  

</script>
<section id="content">

     
        <div class="container">
          <div class="section">
		  
		 
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
                <form action="<?php echo base_url(); ?>order/edit_amc_update" method="post" name="frmServiceStatus">
                   
<div class="message">


<table class="tableadd" id="myTable">
<tr>
<td><label>AMC Start Date</label></td><td class="dot">:</td><td><input type="text" name="amc_start_date" class="" value="<?php echo $todaydate; ?>" id="amc_start_date"><input type="hidden" name="orderid" value="<?php echo $orderid; ?>" id="orderid"><input type="hidden" name="amc_type" value="<?php echo $amc_type; ?>" id="amc_type"></td>
</tr>
<tr>
<td><label>AMC End Date</label></td><td class="dot">:</td><td><input type="text" name="amc_end_date" class="" value="<?php echo $end_date; ?>" id="amc_end_date"></td>
</tr>
<tr>
	<td><label>No. of Preventive</label></td><td class="dot">:</td>
	<td><select id="amcprenos" name="amcprenos">
<option>---Select---</option>
<option value="1">1</option>
<option value="3">3</option>
<option value="6">6</option>
<option value="12">12</option>
</select></td>
</tr>

</table>
<table></table>

</div>

<button class="btn cyan waves-effect waves-light " type="submit" id="rowadd">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>




<table class="tableadd">

<tr>

<td style="padding-top: 25px;">
 
</td>
</tr>
</table>

					
                         
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
			  </div>
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  
  
  
    
  

  <!-- <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
   


   
 
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
     
	
	  
     
  
  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

	 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	 
	
	 
		
</body>

</html>