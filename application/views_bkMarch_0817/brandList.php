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
   var catid = arr['0'];
   var brid = arr['1'];
   var data_String;
    data_String = 'catid='+catid+'&brid='+brid;
	$('#pro_subcat_'+brid+ "> option").remove(); 
    $.post('<?php  echo base_url(); ?>Brand/getsub_cat',data_String,function(data){ 
		  $('#pro_subcat_'+brid).append("<option value=''>---Select---</option>");
          $.each(data, function(index, data){//alert(data.subcat_name);
            $('#pro_subcat_'+brid).append("<option value='"+data.id+','+brid+"'>"+data.subcat_name+"</option>");
            });
       });
   });
   
   $('[id^="pro_subcat_"]').change(function(){//alert("haaaii");
   var id = $(this).val();
   //alert(id);
   var arr = id.split(',');
   var subcatid = arr['0'];
   var brid = arr['1'];
   
   var data_String;
    data_String = 'subcatid='+subcatid+'&brid='+brid;
	
    $.post('<?php  echo base_url(); ?>Brand/updatesub_category',data_String,function(data){ 
		 alert("Category changed");
       });
   });
 });

 function InactiveStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		//brand_name = $("#brand_name_"+id).val();
		//alert(brand_name);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Brand/update_status_brand_name', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Brand made Inactive");  
				window.location = "<?php  echo base_url(); ?>pages/brandList";	
              }
          });

        });
}

function activeStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		//brand_name = $("#brand_name_"+id).val();
		//alert(brand_name);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Brand/update_status_brand_name1', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Brand made Active");  
				window.location = "<?php  echo base_url(); ?>pages/brandList";	
              }
          });

        });
}


</script>


<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Product Brand List</h2>
 <i class="fa fa-plus-square" aria-hidden="true" title="Add New Brand" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i> 
          <!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addbrand.png" title="Add New Brand" style="width:24px;height:24px;">Add New Brand</button>-->
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="dtable responsive-table display">
                    <thead>
                        <tr>
                            <td style="text-align:center;font-size:13px;color:##303f9f;">Brand Name</td>
                           <td style="text-align:center;font-size:13px;color:##303f9f;">Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($brand_list as $key){?>
                        <tr>
                             <td><input type="text" value="<?php echo $key->brand_name; ?>" class="" name="brand_name" readonly></td>
                           
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>Brand/update_brand_name/<?php echo $key->br_id; ?>" style="padding-right:10px;"><i class="fa fa-floppy-o fa-2x"></i></a>
					<?php if($key->status!='1') { ?><a href="#" onclick="InactiveStatus('<?php echo $key->br_id; ?>')">InActive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->br_id; ?>')">Active</a><?php } ?>
					
					</td>
                        </tr>
                     <?php } ?>
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