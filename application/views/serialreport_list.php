



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
#errorBox{
 color:#F00;
 }
 #errorBox1{
 color:#F00;
 }
</style>
	
 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>////////////////////////////////field required validation///////////////////////////////////////////
   $(document).ready(function(){
   $( "#search" ).click(function( event ) {
   
  if ( $( ".frmdate" ).val() === "" ) {
	$( "#errorBox_type" ).text( " Choose the From Date " ).show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position':'relative',
					'bottom':'10px'
				});
    event.preventDefault();
  }
  if ( $( ".todate" ).val() === "" ) {
	$( "#errorBox_id" ).text( " Choose the End Date" ).show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position':'relative',
					'bottom':'10px'
				});
    event.preventDefault();
  }
  	/* if ( $( "#work_status" ).val() === "" ) {
	$( "#errorBox_address" ).text( " Enter the Work Status" ).show();
    event.preventDefault();
  } */
  }); 
});
</script>

<script>
     $(document).ready(function(){
		$(".frmdate").change(function(){
			if($(this).val()==""){
			    $("#errorBox_type").show();
			}
			else{
				$("#errorBox_type").hide();
			}
		});
		
		$(".todate").change(function(){
			if($(this).val()==""){
			    $("#errorBox_id").show();
			}
			else{
				$("#errorBox_id").hide();
			}
		});
		/* $("#work_status").change(function(){
			if($(this).val()==""){
			    $("#errorBox_address").show();
			}
			else{
				$("#errorBox_address").hide();
			}
		}); */
		
	 });
		</script>
	
 
<?php //print_r($enggname_list);exit;?>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Serialwise Report</h2>
<hr>
			
			<form name="myForm" action="<?php echo base_url(); ?>Report/get_serialreport" method="post" onsubmit="return validateForm()">
	
	<div class="col-md-12">
		<div class="col-md-3">
			<div class="form-group">
				<label>From Date: <span class="star" style="color:red;">*</span></label>
				<input type="text" name="from" class="date firstname frmdate" id="datepicker"><div id="errorBox_type" style="color:red;"></div>
			</div>
		</div>
		<div class="col-md-3">
			<label>To Date: <span class="star" style="color:red;">*</span></label>
			<input type="text" name="to"  class="date lastname todate" id="datepicker1">
			<div id="errorBox_id" style="color:red;"></div>
		</div>

		<div class="col-md-3">
		<div><label>Serial No:</label></div>
		<div>
			  <select name="serialname" id="cust_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
              <option value="">---Select---</option>
			   <?php 
			   foreach($serial_list as $row)
			   {
			   
			   ?>	
              <option value="<?php echo $row->serial_no;?>"><?php echo $row->serial_no;?></option>
			   <?php } ?>
            </select>
		</div>
	</div>
	
	
	<div class="col-md-3">
		<div><label>Customer Name:</label></div>
		<div>
			  <select name="customer_name"  data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
              <option value="">---Select---</option>
			   <?php 
			   foreach($customer as $row1)
			   {
			   
			   ?>	
              <option value="<?php echo $row1->id;?>"><?php echo $row1->company_name;?></option>
			   <?php } ?>
            </select>
		</div>
	</div>
	</div>
	<div class="col-md-12">
	<div class="col-md-3">
		<div class="form-group"><label>Model Name:</label>
			  <select name="model_name" data-placeholder="Choose a Name..." class="chosen-select" tabindex="2">
              <option value="">---Select---</option>
			   <?php 
			   foreach($model as $roww)
			   {
			   
			   ?>	
              <option value="<?php echo $roww->id;?>"><?php echo $roww->model;?></option>
			   <?php } ?>
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
				   //alert("To Date Should not be less than From date");
				   $( "#errorBox_id" ).text( " To Date Should not be less than From date" ).show().css({
					'font-size':'10px',
					'color':'#ff0000',
					'position':'relative',
					'bottom':'10px'
				});
				   
				   $("#datepicker1").datepicker().val('');
				   return false;
			   }
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

<!--<script>
function validateForm() {
//alert("sd");	
 var x = document.forms["myForm"]["from"].value;
    var y = document.forms["myForm"]["to"].value;
    if (x == null || x == "" && y == null || y == "") {
        alert("Choose From Date & To Date");
        return false;
    }else if(x == null || x == ""){
		alert("Choose From Date");
		return false;
	}else if(y == null || y == ""){
		alert("Choose To Date");
		return false;
	}
}
</script>--> 



   <link href="<?php echo base_url(); ?>assets/css/chosen.css" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js"></script>
  
  
  <script type="text/javascript">

    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
	  
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>