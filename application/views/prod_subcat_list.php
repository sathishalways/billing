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
    padding: 0px 8px !important;
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
	font-weight:bold;
}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    background:#6c477d;
    color:#fff;
	
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
	margin-right: 55px;
}
#data-table-simple_length {
    display: block;
	margin-left: 108px;
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

.dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding-top: 0.755em;
    margin-left: 108px;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em;
    margin-right: 90px;
}

input[type=text]{
    background-color: transparent;
    border:none;
    border-radius: 7;
    width: 55% !important;
    font-size:12px;
    margin: 0 0 0px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
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
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 0px;
}
hr {
    margin-top: 0px;
}
a{
	color: #522276;
}
a:hover{
	color: #522276;
}
a:focus{
	color: #522276;
}
a:active{
	color: #522276;
}
body{    background-color: #fff;}
</style>

<script>



$(document).ready(function(){
   $('[id^="pro_cat_"]').change(function(){//alert("hii");
   var id = $(this).val();
   var arr = id.split(',');
   var procatid = arr['0'];
   var subid = arr['1'];
   var data_String;
    data_String = 'id='+subid+'&procatid='+procatid;
	
    $.post('<?php  echo base_url(); ?>subcategory/update_sub_category',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Category changed");
           //$('#actaddress').val(data.Address1),
       });
   });
 });

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		subcat_name = $("#subcat_name_"+id).val();
		//alert(subcat_name);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>subcategory/update_sub_category_name', 
         data: {'id' : id, 'subcat_name' : subcat_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Sub Category updated");  
              }
          });

        });
}
function InactiveStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>subcategory/update_status_sub_category', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					alert("Sub Category made Inactive");  
					window.location = "<?php  echo base_url(); ?>pages/prod_subcat_list";
					
              }
          });

        });
}

function activeStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>subcategory/update_status_sub_category1', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					alert("Sub Category made Active");  
					window.location = "<?php  echo base_url(); ?>pages/prod_subcat_list";
					
              }
          });

        });
}


</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Product Sub-Category List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addsubcat.png" title="Add Product Sub-Category" style="width:24px;height:24px;">Add Product Sub-Category</button>-->
           <a href="<?php  echo base_url(); ?>pages/add_prod_subcat"><i class="fa fa-plus-square" aria-hidden="true" title="Add Product Sub-Category" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i></a>
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple"  class="responsive-table display" cellspacing="0" >
                    <thead>
                        <tr>
							<th>S.No.</th>
                            <th style="text-align:center;font-size:13px;color:##303f9f;"><b>Category Name</b></th>
							 <th style="text-align:center;font-size:13px;color:##303f9f;"><b>Sub-Category Name</b></th>
                           <th style="text-align:center;font-size:13px;color:##303f9f;"><b>Action</b></th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1;foreach($list as $key){ ?>
                        <tr>
						<td><?php echo $i;?></td>
                            <td><input type="text" value="<?php echo $key->product_category; ?>" class="" name="subcat_name" readonly></td>
							  <td><input type="text" value="<?php echo $key->subcat_name; ?>" class="" name="subcat_name" readonly> </td>
                           
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>subcategory/update_sub_category/<?php echo $key->prosubcat_id; ?>" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<!--<?php if($key->status!='1') { ?> <a href="#" onclick="InactiveStatus('<?php echo $key->prosubcat_id; ?>')">Inactive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->prosubcat_id; ?>')" >Active</a><?php } ?>-->
					
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