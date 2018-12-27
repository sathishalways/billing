<script>
function UpdateStatus(id){
		  var idd = id.split('-');
		  var inc = idd['1'];
		  var reqid = idd['0'];
		 
		  var status_warran = $("#status_warran-"+inc).val();
		  window.open("<?php  echo base_url(); ?>service/view_claim/"+reqid+'/'+status_warran, '_blank');
		
}
</script>
<style>

.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 15px;
    border: 1px solid #dbd0e1 !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 15px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276 !important;
}
td {
    text-align: left;
font-size: 12px; 
 padding: 0px ;
}
th {
padding: 0px;
    text-align: center;
    font-size: 12px;
    /* background-color: #DBD0E1; */
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
.fancybox-outer, .fancybox-inner {
    position: relative;
    height: 300px !important;
}
.fancybox-wrap {
    height: auto !important;
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
</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Warranty Claim List</h2>
            <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Request ID</th>
							<th>Customer Name</th>
                            <th>Model</th>  
							<!--<th>Warranty Mode</th> --> 							
							<th>Warranty Status</th>  							
                            <th>Action</th>
							 
                        </tr>
                    </thead>
                      <tbody>
					  <?php $i=0; foreach($warranty_pending_claims as $war_key){?>
                        <tr>
                            <td><a id="<?php echo $war_key->request_id;?>" href="javascript:;"><?php echo $war_key->request_id; ?></a></td>
							<td><?php echo $war_key->company_name; ?></td>
                            <td><?php echo $war_key->model; ?></td> 
							
							<!--<td><a id="<?php echo $war_key->request_id;?>" href="javascript:;">Warranty Updated</a></td>-->
							<!--<td>
								<select name="status_warran" id="status_warran-<?php echo $i; ?>">
									<option value="credit">credit</option>
									<option value="replacement">replacement</option>
								</select>
							</td> -->
							<td><?php
								if($war_key->code_no && $war_key->code_date )
								{
									echo $war_key->status;
								} else if($war_key->warranty_mode=='credit')
								{
									echo $war_key->status;
								}else{
									
									echo $war_key->status;
								}


							?></td>
							<td style="text-align:center;"><a href="<?php echo base_url(); ?>service/view_claim/<?php echo $war_key->quote_req_id; ?>" target="_blank" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                        </tr>
						
						<script>
							$(document).ready(function() { 
							//alert("afd");
								$("#<?php echo $war_key->request_id;?>").click(function() {
									//alert("fdh");
							
				$.fancybox.open({
					href : '<?php echo base_url(); ?>service/viewclaimup/<?php echo $war_key->request_id; ?>',
					type : 'iframe',
					padding : 5,
					afterClose: function(){
						alert('Warranty Claim Updated Successfully!!!');
						parent.location.reload(true);
						
					}
			});
			
			});
							});
			</script>
			
			
					  <?php $i++; }?>	
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
          </div>
         
        </div>
       

      </section>


  </div>
  

  </div>
  <!-- fancy box -->
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> --> 
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->


     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/piklor.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/handlers.js"></script>



 
</body>

</html>