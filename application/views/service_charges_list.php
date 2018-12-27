<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
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
	font-weight:bold;
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
#data-table-simple_length {
    display: block;
}
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
body{    background-color: #fff;}
table#data-table-simple{
	width:100% !important;
}
/*.seperate_coloumn ul {
    -webkit-column-count: 6;
    -moz-column-count: 6;
    column-count: 6;
}*/
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
</style>

<script>
function Updatedefault(id)
	{
		
		if(document.getElementById('dashboard_show'+id).checked) {
			
			var dashboard_show = '1';
			//alert(tax_default);
		} else {
			var dashboard_show = '0';
			//alert(tax_default);
		}
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Spare/update_important', 
         data: {'id' : id, 'dashboard_show' : dashboard_show},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ //alert(data);
				alert("Spare Selected");
              }
          });

        });
		
	}
</script>



<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Service Charge List</h2>
		<a href="<?php  echo base_url(); ?>pages/add_service_charge" style="position: relative;bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Service Charge"></i></a>
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <div style="float: right;">				
						

						</div>
                   <table id="data-table-simple"  class="responsive-table display seperate_coloumn">
                    <thead>
                        <tr>
						<th>S.No.</th>
                            <th style="text-align:center;font-size:13px;color:##303f9f;">Service Category</th>
							
							  <th style="text-align:center;font-size:13px;color:##303f9f;">Action</th>
                        </tr>
                    </thead>
                 
                
                    <tbody><?php $i=1;foreach($service_cat_list as $key1){?>
                        <tr>
						<td><?php echo $i; ?></td>
                            <td><?php echo $key1->service_category; ?></td>
							    <!--<td>
								<ul class="quantity">
									<?php //foreach($service_charge_list as $key){
										//if($key->service_cat_id==$key1->id){
									?>
										<li><?php //echo $key->model.' - '.$key->service_charge; ?></li>
									<?php //} } ?>
								</ul>
								</td>-->	
								
								<td><a href="<?php echo base_url(); ?>Servicecategory/update_servicecharge/<?php echo $key1->id; ?>" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
								
								
								<a id="<?php echo $key1->id; ?>" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</td>
								
								
                        </tr>
						<script>
							$(document).ready(function() { 
								$("#<?php echo $key1->id; ?>").click(function() {
									
								//var idd=$(this).closest(this).attr('id');
								
								//var dataString = 'id='+ idd;
								
								//alert(dataString);
//alert("sdwje");		
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Servicecategory/view_models/<?php echo $key1->id; ?>',
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

<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script>
var $= jQuery.noConflict();
$(document).ready(function() { 
	$("#fancybox-manual-b").click(function() {
//alert("sdwje");		
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Servicecategory/view_models',
					type : 'iframe',
					padding : 5
				});
			});
			
	$("#fancybox-manual-bc").click(function() { 
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Spare/purchase_popupminus',
					type : 'iframe',
					padding : 5
				});
			});
});
</script>
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
       
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>