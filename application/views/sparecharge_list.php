<style>
body{background-color:#fff;}
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	border-style: none !important;
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
</style>
	
  
	
 
<?php //print_r($enggname_list);exit;?>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare Charge List</h2>
<hr>
			<form action="<?php echo base_url(); ?>report/getcharge_list" method="post">
			<tr>
<td><label>From Date:</label></td><td><input type="text" name="from" class="date"></td>
<td><label>To Date:</label></td><td><input type="text" name="to"  class="date"></td>


<!--<td><label>Engineer Name:</label></td>

<td><select name="engineer" >
<option value="">---select---</option>
<?php 
foreach($enggname_list as $eng)
{?>
<option value="<?php echo $eng->id;?>"><?php echo $eng->emp_name;?></option><?php } ?></select></td><br><br><br>-->


<td><label>Spare Name:</label></td>
<td><select name="spare">
<option value="">--select--</option>
<?php 
foreach($sparename_list as $spare)
{?>
<option value="<?php echo $spare->id;?>"><?php echo $spare->spare_name;?></option><?php } ?>

</select>
</td><br><br>


<td><label>Machine Status:</label></td>
<td><select name="sersite">
<option value="">--select--</option>
<option value="Chargeable">Chargeable</option>
<option value="Warranty">Warranty</option>
<option value="Preventive">Preventive</option>
<option value="Comprehensive">Comprehensive</option>
<option value="Serviceonly">Serviceonly</option>

</select>
</td><br>


<input type="submit" name="search" id="search" value="Search" class="submit_button" >
</tr>
			
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

});//]]>  

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