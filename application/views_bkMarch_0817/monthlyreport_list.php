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
	
	 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
 
<?php //print_r($report);exit;?>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Stamping Monthly Report List</h2>
<hr>
			<form action="<?php echo base_url(); ?>report/get_monthreport" method="post">
			<tr>
			
			
<td><label>From Date:</label></td><td><input type="text" name="from" value="" class="date" ></td>

<td><label>To Date:</label></td><td><input type="text" name="to" value="" class="date" ></td>


<br><br>

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