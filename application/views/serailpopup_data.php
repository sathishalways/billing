<?php error_reporting(0);?>
	  
	   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
   <script>
  $( function() {
    $( ".datepicker" ).datepicker({
	     dateFormat:"dd-mm-yy",
		 changeMonth:true,
		 changeYear:true,
		 yearRange:'1950:2016'
	});
  } );
  </script>
 
 <style>
 
#select_value {
    height: 33px;
    width: 210px;
   
   
	
	border:1px solid #055E87;
    border-image: none;
    background-color: transparent;
    background-image: linear-gradient(45deg, transparent 50%, #333 50%), linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #F6F8F9, #FBFBFB);
    background-attachment: scroll, scroll, scroll;
    background-clip: border-box, border-box, border-box;
    background-origin: padding-box, padding-box, padding-box;
    background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
    background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
    background-repeat: no-repeat;
    font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
    padding: 0.5em 3.5em 0.5em 1em;
    border-radius: 0px;
    margin: 0px;
    box-sizing: border-box;
    -moz-appearance: none;
	
}
.form-control
{
	border:none;
}
</style>
	  
<style>
.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.btn, .btn-large {
    text-decoration: none;
    color: #FFF;
    background-color: #ff4081;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: 0.2s ease-out;
    -moz-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    transition: 0.2s ease-out;
    cursor: pointer;
}
.btn, .btn-large, .btn-flat {
    border: none;
    border-radius: 2px;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    outline: 0;
    padding: 0 2rem;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}
.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.cyan {
    background-color: #00bcd4 !important;
    background-color: #25555C !important;
    background-color: #055E87 !important;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
html input[type="button"], button, input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}


table {
    
    border-color: grey;
}

.link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .icon
 {
	padding-right: 20px;
 }
 .fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		.tableadd1 tr td
		{
			
text-align: center;
    border: 1px solid #ccc;
}
		.tableadd1 thead tr th
		{
		
    border: 1px solid #ccc;
}
		.tableadd1 tr
		{
			height: 50px;
		}
		.tableadd1 tr td select {
    border: 1px solid #ebebeb;
    border-radius: 3px;
    width: 150px;
    height: 35px;
}
		.tableadd1 tr td textarea
		{
			width:200px;
			border: 1px solid #9A9A9B;
			height:70px;
			border-radius: 5px;
		}
		.tableadd1 tr td label {
 
    line-height: 0;
	color:white;
	
   
}
.tableadd1 tr td.plus
{
	padding-top: 0px;
}
.tableadd1 tr td.plus input {
    width: 115px;
    border: 1px solid gray;
}
.tableadd1 tr td input
{
	
	height: 33px;
border-radius: 3px;
padding-left: 0px;
}
.tableadd1 tr td.qty
{
	padding-top: 14px;
}
.tableadd1 tr td.qty input
{
	width:100px;
	border:1px solid gray;
	
	
}
.tableadd1 tr td.save .fa {
    font-size: 30px !important;
}
.rowadd
{
	 border: 1px solid #055E87 !important;
background: #055E87 none repeat scroll 0% 0% !important;
padding: 4px;
border-radius: 5px;
color: white;
font-weight: bold;
font-family: calibri;
font-size: 15px;
margin-top: 30px;
}
#addtable 
{
	width:51%;
	margin-top:20px;
}
#addtable tr td
{
border:1px solid #ccc;
text-align:left;

}
#addtable tr td label
{

color:black;
}
#errorBox{
 color:#F00;
 }
#errorBox1{
 color:#F00;
 }
 #errorBox2{
 color:#F00;
 }
 #errorBox3{
 color:#F00;
 }
 #errorBox4{
 color:#F00;
 }
  #errorBox5{
 color:#F00;
 }
  #errorBox6{
 color:#F00;
 }
 #errorBox7{
 color:#F00;
 }
 #errorBox8{
 color:#F00;
 }
  #errorBox9{
 color:#F00;
 }
 #errorBox10{
 color:#F00;
 }
 input[id=basicamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 5px;
  left: 29px;
 }
  input[id=cst]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 20px;
  left: 208px;
 }
  input[id=freight]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 35px;
  left: 364px;
 }
  input[id=totalamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 50px;
  left: 560px;
 }
 .purchasedetail{
  position: relative;
  top: -63px;
  left: 50px;
 }
 .pipurchasedetail{
  position: relative;
  top: -63px;
  left: 90px;
 }
 .cstpurchasedetail{
  position: relative;
  top: -63px;
  left: 95px;
 }
 
 
 
.tableadd tr td input {
  width:100%;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}
  .recvd_qty_cl{
 color:#F00;
 }

</style>


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
.tableadd1 thead tr th {
    border: 1px solid #522276;
}
.tableadd1 tr td {
    text-align: center;
    border: 1px solid #522276;
}

</style>


<script>
/* function frmValidate(){ 
 	var r=confirm("Are you sure you want to force close the PO?");
		if (r==true)
			{
				return true;
				location.reload();
			}
		else{
		       return false;
			}
   
}
 */
</script>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header" style="margin-top:8px; font-size: 22px; color: #6C217E;;">SerialWise Report</h4>
<hr style="border: 1px solid #522276; margin-top: -17px;">
          
          
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
			
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <form >
			    
                <table class="tableadd1" cellspacing="0" style="width:100%; margin-top:2%;">
                    <thead>
                        <tr style="background-color: #dbd0e1; color: #522276;">
							<th>Brand</th>
							<th>Zone</th>
                            <th>Machine Status</th>
                            <th>Problem</th>
                            <th>Service Type</th>
                            <th>Service Category</th>
					    </tr>
                    </thead>
                 
                
                    <tbody>
					<?php 
					foreach($serial as $key)
					{
					$sd = $key->problem;
					
					?>
                        <tr>
							<td><?php echo $key->brand_name;?></td>
							<td><?php echo $key->service_loc;?></td>
							<td><?php echo $key->machine_status;?></td>
							<td><?php if($sd)
							{
							$query=$this->db->query("SELECT group_concat(prob_category) as pc FROM problem_category WHERE id in ($sd)");
							extract($query->row_array()); echo $pc;}?></td>
							<td><?php echo $key->service_type;?></td>
							<td><?php echo $key->categoryname;?></td>
								
							
						</tr>
						
					<?php }	 ?>
						
						<tr style="height: 50px; background-color: white; border-bottom: 1px solid #ddd;">
                            
							
                        </tr>
					
                      
                        
                    </tbody>
                  </table>
				 
				  </form>
                </div>
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      


           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
    <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   
 
 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
 
 
     <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	 
  
	
	

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
   
	  


 
</body>

</html>