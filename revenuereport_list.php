<style>
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
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Revenue Report</h4>

            <div class="divider"></div>
			
			<form action="<?php echo base_url(); ?>report/get_revenuereport" method="post">
			<tr>
<td><label>From Date:</label></td><td><input type="text" name="from" class="date"></td>
<td><label>To Date:</label></td><td><input type="text" name="to"  class="date"></td>

<!--<td><label>Date Range:</label></td>
<td><select name="range">
<option value="">--select--</option>
<option value="7">7 days</option>
<option value="15">15 days</option>
<option value="30">30 days</option>
<option value="60">60 days</option>
<option value="90">90 days</option>
<option value="91">Above 90</option>
</select>
</td><br><br>
<!--<td><label>Engineer Name:</label></td>

<td><select name="engineer" >
<option value="">---select---</option>
<?php 
foreach($enggname_list as $eng)
{?>
<option value="<?php echo $eng->id;?>"><?php echo $eng->emp_name;?></option><?php } ?></select></td><br><br><br>-->

<td><label>Engineer Name:</label></td>
<td><select name="employee">
<option value="">--select--</option>
<?php 
foreach($engineer as $row)
{?>
<option value="<?php echo $row->id;?>"><?php echo $row->emp_name;?></option><?php } ?>

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



<td><label>Model Name:</label></td>
<td><select name="model">
<option value="">--select--</option>
<?php 
foreach($model as $spare)
{?>
<option value="<?php echo $spare->id;?>"><?php echo $spare->model;?></option><?php } ?>

</select>
</td><br><br>




<td><label>Product Category:</label></td>
<td><select name="product">
<option value="">--select--</option>
<?php 
foreach($product as $row)
{?>
<option value="<?php echo $row->id;?>"><?php echo $row->product_category;?></option><?php } ?>

</select>
</td><br><br>








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