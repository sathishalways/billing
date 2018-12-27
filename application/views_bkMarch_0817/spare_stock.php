<head>
<style>
select{width:200px;}
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:white;
}
input[readonly]
{
border:none;
}

.data{
	border: 1px solid gray !important;
width: 25% !important;
margin-right:4px !important;
}
.data1{
	border: 1px solid gray !important;
width: 20% !important;
margin-right:4px !important;
}
.date
{
	border: 1px solid gray !important;
width: 32% !important;
margin-right:4px !important;
}
</style>
<style>
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

.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
input[type=search]{
    background-color: transparent;
    border: 1px solid #eee;
    border-radius: 7;
    width: 55%;
    font-size: 1.5rem;
   
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
input[type=text]{
    background-color: transparent;
    border: none;
    
    width: 100%;
    font-size: 12px;
    margin: 0 0 -2px 0;
    padding: 5px;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
body{    background-color: #fff;}
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		//var total_spare = $("#total_spare_"+id).val();
		var used_spare = $("#used_spare_"+id).val();
		
		var purchase_qty = $("#purchase_qty_"+id).val();
		var purchase_price = $("#purchase_price_"+id).val();
		var purchase_date = $("#purchase_date_"+id).val();
		//alert("purchase_qty: "+purchase_qty+"purchase_price: "+purchase_price+"purchase_date: "+purchase_date)
		
		var total_spare = parseInt(purchase_qty) - parseInt(used_spare);
		//alert(stock_spare);
		//$('#total_amt').val(stock_spare);
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Spare/update_spare_stock', 
         data: {'id' : id, 'used_spare' : used_spare, 'total_spare' : total_spare, 'purchase_qty' : purchase_qty, 'purchase_price' : purchase_price, 'purchase_date' : purchase_date},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Spare Stock updated");
				window.location = "<?php  echo base_url(); ?>pages/spare_stock";
              }
          });

        });
		
}

</script>

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
				//var idd=$(this).closest(this).attr('id');
				//var arr = idd.split('_');
				//var rowid = arr['1'];
				//alert(rowid);
				$.fancybox.open({
					href : '<?php  echo base_url(); ?>Spare/purchase_popup',
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
</head>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare Stock</h2>
<hr>
            <!--DataTables example-->
            <div id="table-datatables" style="width:90%; margin-left:5%;">
           
              <div class="row">
              
			
               <div class="col-md-12">
			    <div style="float: right;
height:50px;
">				
						<a id="fancybox-manual-b" href="javascript:;" style="margin-right: 20px;"><img src="<?php echo base_url(); ?>assets/images/spare_add1.png" alt="materialize logo"></a>
						
						<a id="fancybox-manual-bc" href="javascript:;"><img src="<?php echo base_url(); ?>assets/images/spare_delete1.png" alt="materialize logo"></a>
						</div>
                       <table id="data-table-simple" class="responsive-table display" cellspacing="0" style=" margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Spare Name</td>
							 <td>Stock In Hand</td>
							 <td>Spare With Engineers</td>
							 <td>Used Spare</td>							
							
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($spare_stock as $sparekey){ ?>
                        <tr>
                            <td><input type="text" value="<?php echo $sparekey->spare_name; ?>" class="" name="spare_name" id="spare_name" readonly></td>
							  <td><input type="text" value="<?php echo $sparekey->spare_qty; ?>" class="" name="total_spare" id="total_spare_<?php echo $sparekey->id; ?>" readonly></td>
							  <td><input type="text" value="<?php echo $sparekey->eng_spare; ?>" class="" name="engg_spare" id="engg_spare_<?php echo $sparekey->id; ?>" readonly></td>
							   <td><input type="text" value="<?php echo $sparekey->used_spare; ?>" class="" name="used_spare" id="used_spare_<?php echo $sparekey->id; ?>" readonly></td>
							
                        </tr>
                      <?php } ?>
                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
      
<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $sparekey->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->

           
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
    <script type='text/javascript'>//<![CDATA[

$(document).ready(function () {
   

    $('#data-table-simple').dataTable({
		
		"order": [[0,"desc"]],
		
		"aoColumns": [
            { "sType": "cust-txt" },
            { "sType": "cust-txt" },
            { "sType": "cust-txt" },
            { "sType": "cust-txt" }
        ]});
});


</script>

  <script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'yy-mm-dd',
			yearRange: "1950:2055"
        });
});
});

}//]]>  

</script>

       
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>-->
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>