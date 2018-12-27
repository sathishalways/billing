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
#search {
    height: 3rem !important;
    margin-top: 10px;
    margin-left: 30px;
}
</style>

<?php //print_r($report);exit;?>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Customer Report List</h2>
<hr>
			<form name="myForm"  action="<?php echo base_url(); ?>report/get_customerreport" method="post" onsubmit="return validateForm()">
			

<div class="col-md-12">
	<div class="col-md-3">
        <div><label>From Date:</label></div>
        <div>
            <input type="text" name="from" class="date" id="datepicker">
        </div>
    </div>
	
	<div class="col-md-3">
        <div><label>To Date:</label></div>
        <div>
            <input type="text" name="to" class="date" id="datepicker1">
        </div>
    </div>
	
    <div class="col-md-3">
        <div><label>Type Of Customer::</label></div>
        <div>
            <select name="customer_type">
                <option value="">--Select customer--</option>
                <?php
                foreach($customer_type as $customer)
                {?>
                <option value="<?php echo $customer->id; ?>"><?php echo $customer->type; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div><label>Service Zone:</label></div>
        <div>
            <select name="zone">
                <option value="">--Select Zone--</option>
                <?php
                foreach($zone as $servicezone)
                {?>
                <option value="<?php echo $servicezone->id; ?>"><?php echo $servicezone->service_loc; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-3">
        <div><label>Call Reference:</label></div>
        <div>
			<select name="cal_ref" id="cal_ref">
				<option value="">---Select---</option>
				<option value="sr">S.R Scales</option>
				<option value="am">Arihant Marketing</option>
			</select>
		</div>
    </div>
</div>

<input type="submit" name="search" id="search" value="Search" class="submit_button btn btn-primary" >
			
</form>
            
            <!--DataTables example-->
      
            <br>
           
    

           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
  

 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  


	 
	



<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>//<![CDATA[ 
$(document).ready(function(){;
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
<script>
function validateForm() {
    var x = document.forms["myForm"]["from"].value;
    var y = document.forms["myForm"]["to"].value;
    if (x == null || x == "" && y == null || y == "") {
        alert("Choose From Date & To Date");
        return false;
    }
}
</script> 

</body>

</html> 