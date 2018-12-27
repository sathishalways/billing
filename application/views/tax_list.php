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
    border: 1px solid #dbd0e1 !important;
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
}
thead {
    border-bottom: 1px solid #ccc;
    border: 1px solid #ccc;
    background:#6c477d;
    color:#fff;
	
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
#data-table-simple_length {
    display: block;
}


/* For info in correct position */

.select-wrapper {
    position: relative;
    margin: -5px 6px;
}
select {
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
		tax_name = $("#tax_name"+id).val();
		tax_percent = $("#tax_percent"+id).val();
		
		//alert("tax name: "+tax_name+"tax_percent: "+tax_percent);
		//alert(tax_percent);
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/update_tax', 
         data: {'id' : id, 'tax_name' : tax_name, 'tax_percent' : tax_percent},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Tax Updated Successfully!!!");  
              }
          });

        });
}

function Updatedefault(id)
	{
		
		if(document.getElementById('tax_default'+id).checked) {
			var tax_default = '1';
			//alert(tax_default);
		} else {
			var tax_default = '0';
			//alert(tax_default);
		}
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/update_default', 
         data: {'id' : id, 'tax_default' : tax_default},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ //alert(data);
				alert("Tax Selected");
              }
          });

        });
		
	}


/* function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/del_tax', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want delete?");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/tax_list";
						}
                alert("Tax Deleted Succefully!!!");  
              }
          });

        });
}
 */
function InactiveStatus(id){  
//alert(id);
	
		//$(function()
        //{
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/Inactive_tax_list', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Tax Inactive"); 
				window.location = "<?php  echo base_url(); ?>pages/tax_list";	
              }
          });

       // });
}
function activeStatus(id){
	//alert(id);
		//$(function()
       // {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>tax/active_cust_type', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Tax Active"); 
				window.location = "<?php  echo base_url(); ?>pages/tax_list";	
              }
          });

        //});
}
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
  $('.tax_percent').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9.]/g,'') );
        });
		
	});
</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Tax List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addtax.png" title="Add Tax" style="width:24px;height:24px;">Add Tax</button>-->
           <a href="<?php  echo base_url(); ?>pages/add_tax" style="position: relative;bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Tax"></i></a>
          <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <form id="form1">
                  <table id="data-table-simple" class="responsive-table display">
                    <thead>
                        <tr>
                            <th class="hidden">Id</th>
							<th>S.No.</th>
                            <th style="text-align:center;font-size:13px;color:##303f9f;">Tax Name</th>
							 <th style="text-align:center;font-size:13px;color:##303f9f;">Percentage</th>
                           <th style="text-align:center;font-size:13px;color:##303f9f;">Status</th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php 
					//print_r($tax_list);
					
					$i=1;foreach($tax_list as $key){ 
				//	print_r($key);
					?>
                        <tr>
						
                            <td class="hidden">
						<input type="hidden" name="key_id" id="key_id" value="<?php echo $key->id;?>">
                            </td>
							<td><?php echo $i;?></td>
                            <td>
								<input type="checkbox" name="tax_default" id="tax_default<?php echo $key->id; ?>" onclick="Updatedefault('<?php echo $key->id; ?>')" <?php if($key->tax_default){?> checked="checked" <?php }?>><?php echo $key->tax_name; ?><input type="hidden" value="<?php echo $key->tax_name; ?>" class="" name="tax_name" id="tax_name<?php echo $key->id; ?>">
								<span id="dis" style="color:red"></span>
							</td>
							  <td><input type="text" value="<?php if($key->tax_percentage !=0){echo $key->tax_percentage; }?>" class="tax_percent" name="tax_percent" id="tax_percent<?php echo $key->id; ?>" onChange="UpdateStatus('<?php echo $key->id; ?>')" maxlength="5">
<span id="dis1" style="color:red"></span>							  </td>
                           
							<!--<td class="options-width" style="text-align:center;width:40px !important;">
					
					
					<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $key->id; ?>')" id="edit"><i class="fa fa-floppy-o fa-2x"></i></a>->
					<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-floppy-o fa-2x"></i></a>
					
					</td>-->
					<td class="options-width" style="text-align:center;width:40px !important;">
					<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $key->id; ?>')" id="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>-->
					
					
					<!--<a href="<?php echo base_url(); ?>pages/tax_list/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i>
					</a>-->

					<?php if($key->status!='1') { ?><a href="#" onclick="InactiveStatus('<?php echo $key->id; ?>')">Inactive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->id; ?>')">Active</a><?php } ?>
					</td>
                        </tr>
					 <?php $i++;} ?>
                      
                        
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
  


        
    <!--materialize js-->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>-->
    <!--prism-->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">\
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>-->
	
	<script>
		$(document).ready(function(){
    $('#data-table-simple').DataTable();
});
	</script>
	
    <!-- chartist -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>-->
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>