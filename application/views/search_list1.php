<script>
function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>order/del_order', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/order_list";
						}
                alert("Order deleted");  
              }
          });

        });
}
</script>
<script>
 $(document).ready(function(){
   $("#search").change(function(){ //alert("search");
  var datastring='search='+$("#search").val();
  var avail=$("#available").remove();
  //var a=$('#bodyd').hide();
  //var ava=$("#bodyd").remove(); 
  //alert(datastring);
  $.ajax({
   type: "post",
   url: "<?php  echo base_url(); ?>order/search_list",
   cache: false,    
   data:datastring,
   success: function(data){ 
   
	if(data.length=='0'){
		//alert("sdsds");
			$('#bodyd').append("<tr id='available'><td colspan='10' align='center'><h4 align='center'>No Data Available</h4></td></tr>"); 
	}else{
			$.each(data, function(index, data){ 
		var val=data.warranty_date;
		
		
		

var datavalue='';
var value='';
												if(val !='')
												{
													value ="Warranty";
												}else
												{
													value="Chargeable";
												}
datavalue=value;
//alert(data.serial_no.length);
		if(data.serial_no.length>0){ //alert("3rrr");
		 $('#bodyd').append("<tr id='available'><td>"+data.customer_id+"</td><td>"+data.company_name+"</td><td>"+data.branch_name+"</td><td>"+data.type+"</td><td>"+data.model+"</td><td>"+data.serial_no+"</td><td>"+data.purchase_date+"</td><td>"+datavalue+"</td><td>"+data.service_loc+"</td><td><a href='<?php echo base_url(); ?>order/update_order/"+data.oid+"'>Edit</a> <a href='#' onclick='brinfo1("+data.oid+")'>View</a></td></tr>"); 
		}	
    });
			
		}	
	
	
  
   },
  
  });
 
  
   });
 });/*"<tr><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th><th>"+id+"</th></tr>"*/
 
</script>
<style>
.input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
    margin-left: 4px !important;
    height: 38px;
}
.fa {
    font-size: 16px !important;
}
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #522276;
	font-size:12px;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
}
table, th, td {
    border: 1px solid #ccc;
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
	border: 1px solid #dbd0e1 !important;
    /*background-color: white;*/
}
thead {
			border-bottom: 1px solid #ccc;
			border: 1px solid #ccc;
			color: #fff;
			background:#6c477d;
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

/* Ends Here */

input[type=text]{
    margin: 0 0 15px 0;
    padding: 1px;
    border: 1px solid #ccc;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
    border-radius: 6px;
}
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
hr {
    margin-top: 0px !important;
}
a{
	color: #522276 !important;
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
#sicon{
	cursor:pointer;
}
#available{
	align:center;
}

</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		   
    <div class="col-md-12">
	      <h2>Search List</h2>
		  <hr>
		  <!--<div class="col-md-offset-4  col-md-3">
		 <input type="text" name="search" id="search" class="form-control" 
		 maxlength="40" placeholder="Search Serial No." AUTOCOMPLETE = "off" style="font-size: 12px;"/>
		 <span style="position: relative;
    float: right;
    top: -42px;
   
"><i class="fa fa-search" id="sicon"></i> </span>
		</div>-->
	</div>	 
            
			<div class="row">
    <div class="col-md-offset-4 col-xs-6 col-md-4">
      <div class="input-group">
   <input type="text" name="search" id="search" class="form-control" 
		 placeholder="Search Serial No." AUTOCOMPLETE = "off" />
   <div class="input-group-btn">
        <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-search"></span>
        </button>
   </div>
   </div>
    </div>
  </div>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table class="table table-border display" >
                    <thead id="head">
                        <tr>
							<th class="hidden">id</th>
							<th >Customer ID</th>
                            <th >Customer Name</th>
							<th>Branch</th>
                            <th>Type Of Customer</th>                           
                            <th >Products</th>
							<th>Serial No.</th>
							 <th >Sale Date</th>
                            <!--<th style="width:9% !important">Warranty Date</th>-->
                            <th >Machine status</th>
						<th>Location</th>
							<th>Action</th>
                        </tr>
                    </thead>
                 
                
                      <tbody id="bodyd" >
					  <tr id="available"><td  colspan="14"><?php echo "<h4 align='center'>No Data Available</h4>"; ?></td></tr>
                      
                       
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
  
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


        
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->


     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script>
    $(document).ready(function(){
		
		$('#search').bind('keyup blur', function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$(this).val( $(this).val().replace(/[^a-zA-Z0-9 ]/g,""));
        });
		/*$('#search').click( function(){
            //$(this).val( $(this).val().replace(/[^0-9]/g,'') );
			$('#bodyd').hide();
        });*/
		
		
		
	 });
</script>

 <!-- Add jQuery library -->
	
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
function brinfo1(id){ 
		$.fancybox.open({
					href : '<?php  echo base_url(); ?>Order/pm_service_status/'+id,
					type : 'iframe',
					padding : 5,
					'width' : 800,
                    'height' : 675,
                    'autoScale' : false,
                    'onComplete' : function(){
                        $.fancybox.resize();
                    } 
				});
			
}
</script>
</body>

</html>