<style>
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	border-style: none !important;
	height: 2rem !important;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
#data-table-simple_filter, #data-table-simple_length
{
  display:block;
}
#data-table-simple_wrapper{
  width: 50%;
  margin: auto;
}
.select-wrapper {
  display: inline-block;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
  width:75%;
}
#table-datatables {
  margin-top: 15px;
}
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
		location_name = $("#location_name"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Location/update_location', 
         data: {'id' : id, 'location_name' : location_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Location updated");  
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
		  
		  
		    <h4 class="header">Location List</h4>

          
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <form id="form1">
                  <table id="data-table-simple"  cellspacing="0" style="margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Location Name</td>
							<td>Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($location_list as $key){ ?>
                        <tr>
                            <td>
								<input type="text" value="<?php echo $key->location_name; ?>" class="" name="location_name" id="location_name<?php echo $key->id; ?>">
							</td>
							<td class="options-width">
					
					
					<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $key->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>
					<!--<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>-->
					
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