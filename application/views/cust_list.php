<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
function DelStatus(id){
	
		var r=confirm("Are you sure want to delete");
					if (r==true)
						{ 
					var datastring='id='+id;
		 $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>customer/del_customer', 
         data: datastring,
         cache:false,
         success: 
              function(data){
					
							window.location = "<?php  echo base_url(); ?>pages/cust_list";
						
                alert("Customer Deleted Successfully!!!");  
              }
          });
           

        }
}
</script>
<style>

.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
/*table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #dbd0e1;
}*/

table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #ccc;
}

table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 15px !important;
}
/*table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
	padding:0px 15px;
}*/
table.dataTable.no-footer tr td {
    border: 1px solid #ccc !important;
	padding:0px 15px;
}
a:hover, a:active, a:focus {
    outline: none;
    text-decoration: none;
    color: #444;
}
a {
    color: #444;
	cursor:pointer;
}
td {
    text-align: left;
	font-size: 12px; 
	padding: 15px;
}

/*th {
padding: 0px;
    text-align: center;
    font-size: 12px;
    background-color: white;
}*/
/*thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #522276;
    background:#6c477d;
    color:#fff;
    font-weight: bold;
	font-size:12px;
}*/

thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #522276;
    /*background:#6c477d;/*/
    background:black;
   /* color:#fff;*/
	color:#fed700;
    font-weight: bold;
	font-size:12px;
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
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
#data-table-simple_length {
    display: block;
}
.fa-folder{
	color:#522276;
}
.fa-eye{
	color:#522276;
}
.fa-pencil-square-o{
	color:#444;
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 0px;
}
hr {
    margin-top: 0px;
}
</style>
<section id="content">
        <div class="container-fluid">
          <div class="section">
		  
		    <h2>Customer List</h2>
			
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/cusadd.png" title="Add Customer" style="width:24px;height:24px;">Add Customer</button>-->
            <a href="<?php  echo base_url(); ?>pages/add_cust" style="position: relative; bottom: 27px;left: 88%;"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Customer"></i></a>
           <hr>
			
            <!--DataTables example-->
            <div id="table-datatables">
              <div class="row">
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
							<th>ID</th>
                            <th style="width:250 !important">Customer Name</th>
                            <th>Mobile</th>
                            <th>Location</th>
							<th>Action</th>
                        </tr>
                    </thead>
               
                    <tbody>
					<?php foreach($list as $key){
						?>
                        <tr>
						   <td><?php echo $key->id; ?></td>
                           <td><?php echo $key->customer_name; ?></td>
						   <td><?php echo $key->mobile; ?></td>
						   <td><?php echo $key->city; ?></td>
						   <td class="options-width" style="width:10%">
					<a href="<?php echo base_url(); ?>customer/update_customer/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
					</td>
                        </tr>
						<?php } ?>
                       
                    </tbody>
                  </table>
				  
				   
                </div>
              </div>
            </div> 
            
          </div>
        </div>
      </section>
  </div>
  </div>
  
  
  

        
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
 
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>-->
    
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
  function clickPopup(idd)
  {
	 
	  var sitename = $("#sitename_"+idd).val();
		
		$.fancybox.open({
					href : '<?php  echo base_url(); ?>customer/view_sales/'+idd,
					type : 'iframe',
					padding : 5
				});
  }
  </script>
 

</body>

</html>