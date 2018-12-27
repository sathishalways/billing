<style>
.ui-state-default {
    background: #fff !important; 
    border: 3px solid #fff !important;
    color: #303f9f !important;
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
    border-bottom: 1px solid #111;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 0px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #eee !important;
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
    background-color: white;
}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:#fff;
	
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
input[type=text]{
    background-color: transparent;
    border: 0px solid #eee;
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
    border: 1px solid #eee;
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
                alert("Tax updated");  
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


function DelStatus(id){
	
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
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/tax_list";
						}
                alert("Tax deleted");  
              }
          });

        });
}


</script>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Tax List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addtax.png" title="Add Tax" style="width:24px;height:24px;">Add Tax</button>-->
           <i class="fa fa-plus-square" aria-hidden="true" title="Add New Tax" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i> 
          <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <form id="form1">
                  <table id="data-table-simple" class="responsive-table display">
                    <thead>
                        <tr>
                            <td style="text-align:center;font-size:13px;color:##303f9f;">Tax Name</td>
							 <td style="text-align:center;font-size:13px;color:##303f9f;">Percentage</td>
                           <td style="text-align:center;font-size:13px;color:##303f9f;">Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($tax_list as $key){ ?>
                        <tr>
                            <td>
								<input type="checkbox" name="tax_default" id="tax_default<?php echo $key->id; ?>" onclick="Updatedefault('<?php echo $key->id; ?>')" <?php if($key->tax_default){?> checked="checked" <?php }?>><input type="text" value="<?php echo $key->tax_name; ?>" class="" name="tax_name" id="tax_name<?php echo $key->id; ?>">
							</td>
							  <td><input type="text" value="<?php echo $key->tax_percentage; ?>" class="" name="tax_percent" id="tax_percent<?php echo $key->id; ?>"> </td>
                           
							<td class="options-width" style="text-align:center;">
					
					
					<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $key->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
					
					</td>
                        </tr>
					 <?php } ?>
                      
                        
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
</body>

</html>