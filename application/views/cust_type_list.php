<style>
.ui-state-default {
    background:#6c477d;
        color:#fff;
    border: 3px solid #fff !important;
    font-size: 12px;
   border-bottom:1px solid #000;
	}
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #dbd0e1;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
}
td {
    text-align: left;
	font-size: 12px; 
	padding: 0px;
}
th {
padding: 0px;
    text-align: center;
    font-size: 12px;
}
thead {
    border-bottom: 1px solid #d0d0d0;
    border: 1px solid #522276;
    background:#6c477d;
        color:#fff;
	font-weight:bold;
	font-size:12px;
}
/*thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:#fff;
	
}*/
.dataTables_wrapper .dataTables_filter {
    float: right;

}

#data-table-simple_length {
    display: block;
	
}


/* For info in correct position */

.select-wrapper {
    position: relative;
    margin: -5px 6px;
}

#data-table-simple_length > label {
    display: inline-flex;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    padding-right: 0px;
}

/* Ends Here */

input[type=text]{
    background-color: transparent;
    border:none;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
input[type=text]{
    background-color: transparent;
    border: 0px solid #522276;
    border-radius: 7;
    width: 55% !important;
    font-size: 12px;
    margin: 0 0 -2px 0;
    padding: 3px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
	height:17px;
}
input[type=search]{
	width:55%;
	border:1px solid #522276;
	padding:0px 8px;
}
a {
    color: #522276;
}
a:hover {
    color: #9678ab;
}
a:focus {
    color: #522276;
}
a:active {
    color: #522276;
}
.dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding-top: 0.755em;
    padding-left: 7em;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em;
    padding-right: 6em;
}


body{    background-color: #fff;}
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		acc_name = $("#acc_name_"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>accessories/update_accessories', 
         data: {'id' : id, 'acc_name' : acc_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Accessories updated");  
              }
          });

        });
}

function DelStatus(id){
	
		
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>customer/del_cust_type', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/cust_type_list";
							alert("Customer Type deleted");  
						}
                
              }
          });

        
}


</script>
<script>
function InactiveStatus(id){  //alert(id);
	
		//$(function()
        //{
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>customer/Inactive_cust_type', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
			  //alert(data);
				alert("customer Inactive"); 
				window.location = "<?php  echo base_url(); ?>pages/cust_type_list";	
              }
          });

       // });
}

function activeStatus(id){ //alert("hiii");
	//alert(id);
		//$(function()
       // {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>customer/active_cust_type', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
			  //alert(data);
				alert("Customer Active"); 
				window.location = "<?php  echo base_url(); ?>pages/cust_type_list";	
              }
          });

        //});
}


</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Customer Type List</h2> 
      <a href="<?php  echo base_url(); ?>pages/cust_type"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Customer Type" style="position: relative; bottom: 27px;left: 88%;"></i></a>
          <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple"  class="responsive-table display">
                    <thead>
                        <tr>
							<th>S.No.</td>
							  <th style="text-align:center;font-size:13px;color:##303f9f;"><b>Code</b></th>
                           <th style="text-align:center;font-size:13px;color:##303f9f;"><b>Customer Type</b></th>
                           <th style="text-align:center;font-size:13px;color:##303f9f;"><B>Action</b></th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1;foreach($cust_type_list as $key){ ?>
                        <tr>
							<td><?php echo $i;?></td>
							   <td><input type="text" value="<?php echo $key->id; ?>" ></td>
								
                            <td><?php echo $key->type; ?><input type="hidden" value="<?php echo $key->type; ?>" class="" name="customer_type" id="customer_type_<?php echo $key->id; ?>"></td>
                           
							<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>customer/update_cust_list/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
					<?php if($key->status!='1') { ?><a href="#" onclick="InactiveStatus('<?php echo $key->id; ?>')">Inactive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->id; ?>')">Active</a><?php } ?>
					</td>
                        </tr>
						<?php $i++;} ?>
                      
                    </tbody>
                  </table>
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> --> 
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>