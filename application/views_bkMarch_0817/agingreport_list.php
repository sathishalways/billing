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
</style>
	
  
	
 
<?php //print_r($enggname_list);exit;?>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Aging Report</h2>
<hr>
			<form name="myForm" action="<?php echo base_url(); ?>report/get_agingreport" method="post" onsubmit="return validateForm()">
			
      <div class="col-md-12">
          <div class="col-md-3">
              <div><label>From Date:</label></div>
              <div><input type="text" name="from" class="date"></div>
          </div>
          <div class="col-md-3">
              <div><label>Date Range:</label></div>
              <div>
                <select name="range" >
                  <option value="">--select--</option>
                  <option value="0-7">0-7 days</option>
                  <option value="8-15">8-15 days</option>
                  <option value="16-30">16-30 days</option>
                  <option value="31-60">31-60 days</option>
                  <option value="61-90">61-90 days</option>
                  <option value="91-91">91 and above</option>
                </select>
              </div>
          </div>
          <div class="col-md-3">
              <div><label>Model Name:</label></div>
              <div>
                <select name="model">
                  <option value="">--select--</option>
                  <?php 
                  foreach($model as $spare)
                  {?>
                  <option value="<?php echo $spare->id;?>"><?php echo $spare->model;?></option><?php } ?>
                </select>
              </div>
          </div>
		  <div class="col-md-3">
              <div><label>Customer Name:</label></div>
              <div>
                <select name="customer">
                  <option value="">--select--</option>
                  <?php 
                  foreach($custom as $row)
                  {?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->customer_name;?></option><?php } ?>
                </select>
              </div>
          </div>
      </div>

      <div class="col-md-12">
          
          <div class="col-md-3">
              <div><label>Product Category:</label></div>
              <div>
                <select name="product">
                  <option value="">--select--</option>
                  <?php 
                  foreach($product as $row)
                  {?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->product_category;?></option><?php } ?>
                </select>
              </div>
          </div>
          <div class="col-md-3">
              <div><label>Engineer Name:</label></div>
              <div>
                <select name="employee">
                  <option value="">--select--</option>
                  <?php 
                  foreach($engineer as $row)
                  {?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->emp_name;?></option><?php } ?>
                </select>
              </div>
          </div>
          <div class="col-md-3">
              <div><label>Zone:</label></div>
              <div>
                <select name="zone">
                  <option value="">--select--</option>
                  <?php 
                  foreach($zone as $row)
                  {?>
                  <option value="<?php echo $row->id;?>"><?php echo $row->service_loc;?></option><?php } ?>

                </select>
              </div>
          </div>
      </div>


<!--<div><label>To Date:</label></div><div><input type="text" name="to"  class="date"></div>-->


<!--<div><label>Engineer Name:</label></div>

<div><select name="engineer" >
<option value="">---select---</option>
<?php 
foreach($enggname_list as $eng)
{?>
<option value="<?php echo $eng->id;?>"><?php echo $eng->emp_name;?></option><?php } ?></select></div><br><br><br>-->














<input type="submit" name="search" id="search" value="Search" class="submit_button btn btn-primary" >

			
			</form>
            
            <!--DataTables example-->       
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

<script>
function validateForm() {
    var x = document.forms["myForm"]["from"].value;
    var y = document.forms["myForm"]["range"].value;
   
    if (x == null || x == "" && y == null || y == "") {
        alert("Choose From Date & Select Date Range");
        return false;
    }
}
</script> 