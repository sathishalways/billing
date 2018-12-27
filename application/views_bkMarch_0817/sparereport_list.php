<script>
$(function()
{
//	alert("hi");
	$(".firstname").click(function(){
	//	alert("sdbsd");
			if($(this).val()==""){
				$("#errorBox").show();
			}
			else{
				$("#errorBox").fadeOut('slow');
			}
		});
		
		
		$(".lastname").click(function(){
	//	alert("sdbsd");
			if($(this).val()==""){
				$("#errorBox1").show();
			}
			else{
				$("#errorBox1").fadeOut('slow');
			}
		});
});


</script>
<style>
body{background-color:#fff;}
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:none;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}

/*input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: 1px solid #000;
    border-bottom: 1px solid #055E87;
    border-radius: 0;
    outline: none;
    height: 3.9rem;
    width: 100%;
    font-size: 1.5rem;
    margin: 0 0 0 0;
    padding: 0;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
    height: 3rem !important;
}*/
#search {
	height: 3rem !important;
	margin-top: 10px;
	margin-left: 30px;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: 1px solid #ccc;
    /* border-bottom: 1px solid #055E87; */
    border-radius: 2px;
    outline: none;
    height: 2.0rem;
    width: 100%;
    font-size: 12px;
    margin: 0 0 15px 0;
    padding: 4px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
select {
    border: 1px solid #ccc !important;
}

/*.ui-datepicker-calendar {
    display: none;
    }*/
#errorBox{
 color:#F00;
 }
 #errorBox1{
 color:#F00;
 }
</style>
	
  
	
 
<?php //print_r($enggname_list);exit;?>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Spare Report List</h2>
<hr>
			<form name="myForm" action="<?php echo base_url(); ?>report/get_engineer_name" method="post" onsubmit="return validateForm()">
			
			<div class="col-md-12">
			
			<!--	<div class="col-md-3">
				<label>From Date:</label>
				<input type="text" name="from" class="date-picker" id="datepicker">
				
				</div>-->
				<div class="col-md-3">
					<label>From Date:</label>
					<input type="text" name="from" class="date firstname" id="datepicker"><div id="errorBox"></div>
				</div>
				<div class="col-md-3">
					<label>To Date:</label>
					<input type="text" name="to"  class="date lastname" id="datepicker1"><div id="errorBox1"></div>
				</div>
				<div class="col-md-3">
					<div><label>Spare Name:</label></div>
					<div>
						<select name="spare">
							<option value="">--select--</option>
							<?php 
							foreach($sparename_list as $spare)
							{?>
							<option value="<?php echo $spare->id;?>"><?php echo $spare->spare_name;?></option><?php } ?>

						</select>
					</div>
				</div>
			</div>


<!--<td><label>Engineer Name:</label></td>

<td><select name="engineer" >
<option value="">---select---</option>
<?php 
foreach($enggname_list as $eng)
{?>
<option value="<?php echo $eng->id;?>"><?php echo $eng->emp_name;?></option><?php } ?></select></td><br><br><br>-->



<input type="submit" name="search" id="search" value="Search" class="submit_button btn btn-primary" >

			
			</form>
            
            <!--DataTables example-->
      
            <br>
           
    

           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
  
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
  
  
  


<script type='text/javascript'>//<![CDATA[ 
$(document).ready(function(){//alert("hfhh");
 $(".date").datepicker({
	
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        }); 
		
		
	 	$("#datepicker1").change(function(){
				   //alert("hi");
               var todate=$("#datepicker1").datepicker({ dateFormat: "yy-mm-dd" }).val();
			   
			  // alert(todate);
			   var stdate=$("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val();
			   //alert(stdate);
			   if(todate<stdate){
				   alert("To Date Should not be less than From date");
				   $("#datepicker1").datepicker().val('');
				   return false;
			   }
			}); 

});//]]>  

</script>
  
  
  
 <script type="text/javascript">
                        $(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});
                </script>
     
  
    <!--materialize js-->
     
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
     
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
      
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>  


	
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script> -->
	 


	 
	
</body>

</html> 

	 <script>
function validateForm() {
//alert("sd");	
   var fromm = document.myForm.from.value,
   to = document.myForm.to.value;
  
   
   if( fromm == "" )
   { 
     document.myForm.from.focus();
	 document.getElementById("errorBox").innerHTML = "Select the From Date";
     return false;
   }
    if( to == "" )
   { 
     document.myForm.to.focus() ;
	 document.getElementById("errorBox1").innerHTML = "Select the To Date";
     return false;
   }
}
</script> 