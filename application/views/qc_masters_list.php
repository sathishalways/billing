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
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    background:#6c477d;
        color:#fff;
	
}
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
    background-color: transparent;
    border: 1px solid #522276;
    border-radius: 7;
    width: 55%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
.dataTables_wrapper .dataTables_info{
	clear: both;
	float: left;
	padding-top: 0.755em;
	padding-left: 7.5em;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em;
    padding-right: 6.5em;
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
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 0px;
}
hr{
    margin-top: 0px;
}
body{    background-color: #fff;}
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		service_loc_code = $("#service_loc_code_"+id).val();
		service_loc = $("#service_loc_name_"+id).val();
		concharge = $("#concharge_"+id).val();
		
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Servicelocation/update_ser_location', 
         data: {'id' : id, 'service_loc_code' : service_loc_code, 'service_location' : service_loc, 'concharge' : concharge},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Service Location updated");  
              }
          });

        });
}

function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Servicelocation/del_ser_location', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/service_loc_list";
						}
                alert("Service Location deleted");  
              }
          });

        });
}


</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>QC Parameter List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addzone.png" title="Add Service Location" style="width:24px;height:24px;">Add Service Location</button>-->
           <a href="<?php  echo base_url(); ?>pages/qc_masters"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Service Location" style="position: relative;
    bottom: 27px;left: 96%;"></i></a>
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" >
                    <thead>
                        <tr>
							<th>S.No.</th>
						   <th style="text-align:left;font-size:13px;color:##303f9f;"><b>Model</b></th>
                           <th style="text-align:left;font-size:13px;color:##303f9f;"><b>Action</b></th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1;foreach($qc_masters_list as $key){ ?>
                        <tr>
						<td><?php echo $i; ?></td>
							<td><?php echo $key->model; ?></td>
							<td class="options-width" style="text-align:center;">
								<a href="<?php echo base_url(); ?>QC_Master/update_qc_parameter/<?php echo $key->qc_master_model_id; ?>" style="padding-right:10px;"><i class="fa fa-floppy-o fa-2x"></i></a>
								<a id="<?php echo $key->qc_master_model_id; ?>" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
							</td>
                        </tr>
						<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
        <script>
		$(function(){
			//alert("TEstig");
			$("#<?php echo $key->qc_master_model_id; ?>").click(function(){
					//alert("inside click event");
								
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>QC_Master/view_models/<?php echo $key->qc_master_model_id;; ?>',
					type : 'iframe',
					padding : 5
				});
			});
		});
	 </script>
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
  
  <!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>-->
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
	
	 
</body>

</html>