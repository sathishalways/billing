<style>
.fancybox-inner{
overflow: auto;
width: 800px;
height: 600px !important;

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
	
    /* background-color: #DBD0E1 !important; */
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
a{
	color:#522276;
	cursor:pointer;
}
a:hover{
	color:#522276;
}
a:active{
	color:#522276;
}
a:focus{
	color:#522276;
}
body{    background-color: #fff;}
input[readonly]
{
border:none;
}
</style>




<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addspare.png" title="Add Spare" style="width:24px;height:24px;">Add Spare</button>-->
<div style="float: right; height:50px; margin-top:-45px;">
          <a href="<?php  echo base_url(); ?>pages/add_new_stock"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Spare" style="position: relative;right: 22px;"></i></a>
		  
		  <a id="fancybox-manual-b" href="javascript:;" style="margin-right: 20px;"><img src="<?php echo base_url(); ?>assets/images/spare_add1.png" alt="materialize logo"></a>
						
						<a id="fancybox-manual-bc" href="javascript:;"><img src="<?php echo base_url(); ?>assets/images/spare_delete1.png" alt="materialize logo"></a>
						</div>
           <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                   <table id="data-table-simple"  class="responsive-table display" cellspacing="0" style="margin-top:2%;">
                    <thead>
                        <tr><th class="hidden">id</th>
							
                            <th colspan='2' style="width: 110px; !important">Spare Name</th>
                            <th style="width: 50px; !important">Part No.</th>
                           <!--<th>Qty</th>-->	
                            <th style="width: 69px; !important">Sales Price</th>
                            <!--<th style="width: 89px; !important">Purchase Price</th>-->
                            <!--<th>Category</th>
							<th>SubCategory</th>
							<th>Brand</th>-->
							<th style="width: 50px; !important">Model</th>
							<th>Total Quantity</th>
							<th>Stock In Hand</th>
							 <th>Spare With Engineers</th>
							 <th>Used Spare</th>
                            <th style="width:82px !important">Effective Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                
                    <tbody><?php foreach($sparelist1 as $key1){
					$sdf=$key1->id;?>
                        <tr>
						<td class="hidden"><?php echo $key1->id; ?></td>
                            <td><input type="checkbox" name="dashboard_show" id="dashboard_show<?php echo $key1->id; ?>" onclick="Updatedefault('<?php echo $key1->id; ?>')" <?php if($key1->dashboard_show){?> checked="checked" <?php }?>><a onclick="clickPopup('<?php echo $sdf;?>')"> </td><td><?php echo $key1->spare_name; ?></a></td>
                            <td><?php if($key1->part_no !=0){ echo $key1->part_no;} ?></td>
                            <!--<td><?php if($key1->spare_qty !=0){echo $key1->spare_qty;}?></td>-->					
                            <td><?php  if($key1->sales_price !=0){echo $key1->sales_price;} ?></td>
                            <!--<td><?php if($key1->purchase_price !=0){echo $key1->purchase_price;} ?></td>-->
                            
							<td>
							<ul class="quantity">
									<?php foreach($sparelist as $key){
										if($key->spare_id==$key1->id){
									?>
										<li><?php echo $key->model; ?></li>
									<?php } } ?>
								</ul>
							</td>
							<td><?php echo $key1->purchase_qty;?></td>
							 <td> <input type="text" value="<?php if($key1->spare_qty !=0){ echo $key1->spare_qty; }?>" class="" name="total_spare" id="total_spare_<?php echo $key1->id; ?>" readonly></td>
							  <!--<td><input type="text" value="<?php if($key1->eng_spare !=0){echo $key1->eng_spare;} ?>" class="" name="engg_spare" id="engg_spare_<?php echo $key1->id; ?>" readonly></td>-->
							  <td><input type="text" value="<?php foreach($engspareqty as $ekey){
					if($ekey->spare_id==$key1->id){echo $ekey->qty_plus;} }?>" class="" name="engg_spare" id="engg_spare_<?php echo $key1->id; ?>" readonly></td>
							   <td><input type="text" value="<?php if($key1->used_spare !=0){echo $key1->used_spare;}?>" class="" name="used_spare" id="used_spare_<?php echo $key1->id; ?>" readonly></td>
							
                            <td><?php echo $key1->effective_date; ?></td>
                            <td style="text-align:center;"><a href="<?php echo base_url(); ?>Spare/update_spare/<?php echo $key1->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
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
var jq= jQuery.noConflict();
jq(document).ready(function() { 
	jq("#fancybox-manual-b").click(function() { 
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				jq.fancybox.open({
					href : '<?php  echo base_url(); ?>Spare/purchase_popup',
					type : 'iframe',
					padding : 5,
					'afterClose':function () {
					parent.location.reload(true);
					//window.location.reload('<?php  echo base_url(); ?>pages/add_spare');
					alert('Spare Stock Added Successfully!!!');
					}
					
				});
			});
			
	jq("#fancybox-manual-bc").click(function() { 
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				jq.fancybox.open({
					href : '<?php  echo base_url(); ?>Spare/purchase_popupminus',
					type : 'iframe',
					padding : 5,
					
				'afterClose':function () {
					
					window.location.reload('<?php  echo base_url(); ?>pages/add_spare');
					alert('Spare Stock Minus Successfully!!!');
					}
				});
			});
			/*$("#fancybox-manual-purchase").click(function() { alert("test");
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Spare/view_purchase',
					type : 'iframe',
					padding : 5
				});
			});*/
			
});
</script>
<script>
function Updatedefault(id)
	{
		
		if(document.getElementById('dashboard_show'+id).checked) {
			
			var dashboard_show = '1';
			alert("Checked Spare Name will display on dashboard");
		} else {
			var dashboard_show = '0';
			//alert(tax_default);
			alert("Unchecked Spare Name disappear from dashboard");
		}
		
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Spare/update_important', 
         data: {'id' : id, 'dashboard_show' : dashboard_show},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ //alert(data);
				//alert("Spare Selected");
              }
          });

       
		
	}
</script>
<script>
  function clickPopup(idd)
  { //alert("test");
	 
	  //var sitename = $("#sitename_"+idd).val();
		
		jq.fancybox.open({
					href : '<?php  echo base_url(); ?>spare/view_purchase/'+idd,
					type : 'iframe',
					padding : 5
				});
  }
  </script>
	 
</body>

</html>