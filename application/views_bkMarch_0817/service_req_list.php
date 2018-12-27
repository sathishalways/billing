<script>
$(document).ready(function()
{
	/*$("#data-table-simple thead tr th").each(function()
	{
	$(this).removeClass("ui-state-default");
	});*/
	//$("#data-table-simple .ui-state-default").;
	//$("#data-table-simple thead tr th.ui-state-default").addClass("mani");
	
	$("#data-table-simple thead tr th").addClass("ff");
	$("#data-table-simple thead tr th").removeClass("ui-state-default");
	
});
</script>




<script>
$(document).ready(function(){
   $('[id^="service_status_"]').change(function(){//alert("hiisss");
   var id = $(this).val();
   //alert(id);
   var arr = id.split(',');
   var statusid = arr['0'];
   var reqid = arr['1'];
   var data_String;
    data_String = 'statusid='+statusid+'&reqid='+reqid;
	
    $.post('<?php  echo base_url(); ?>service/update_service_status',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Service status changed");
           //$('#actaddress').val(data.Address1),
       });
   });
 });
</script>
<script>
function searchByStatus(){
	var id = $("#select_value").val();
	//alert(id);
	$("#data-table-simple > tbody").remove(); 
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>service/searchByStatus', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					//alert("sdsdsd");  
					
					$('#data-table-simple').append(data);
					//window.location = "<?php  echo base_url(); ?>pages/search_service_req_list";
					
              }
          });

        });
}
</script>
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
thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
    background: #6c477d;
    color: #fff;
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
body{    background-color: #fff;}
</style>
<style>

#select_value {
    height: 33px;
    width: 210px;
	border:1px solid #055E87;
    border-image: none;
    background-color: transparent;
    background-image: linear-gradient(45deg, transparent 50%, #333 50%), linear-gradient(135deg, #070708 50%, transparent 50%), linear-gradient(to right, #F6F8F9, #FBFBFB);
    background-attachment: scroll, scroll, scroll;
    background-clip: border-box, border-box, border-box;
    background-origin: padding-box, padding-box, padding-box;
    background-position: calc(100% - 21px) calc(1em + 2px), calc(100% - 16px) calc(1em + 2px), 100% 0px;
    background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
    background-repeat: no-repeat;
    font: 300 1em/1.5em "Helvetica Neue",Arial,sans-serif;
    padding: 0.5em 3.5em 0.5em 1em;
    border-radius: 0px;
    margin: 0px;
    box-sizing: border-box;
    -moz-appearance: none;
	
}
.form-control
{
	border:none;
}
.cyan {
    color: #6c477d !important;
	background-color: transparent !important;
}
section h2{
	color:#6C217E;
}
.dataTables_length .form-control-label{
	color:#6C217E !important;
}
</style>
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Request List</h2>
			<a href="<?php echo base_url(); ?>pages/add_service_req" class="cyan"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Request" style="position: relative; float: right;bottom: 27px;right: 22px;"></i></a> 
           <hr>

            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <br/>
			   <!--	<div class="col-md-12">				
			<div class="col-md-2">
			<label class="form-control" style="padding-top: 11%;">Search by Status :</label>
			</div>
			<div class="col-md-4">
			<div class="form-control">
			<select id="select_value"  onchange="searchByStatus()">
					<option value="all">All</option>
					<option value="1">Quote Approved</option>
					<option value="2">QC</option>
					<option value="3">Ready For Delivery</option>
					<option value="4">Delivered</option>
					<option value="5">Quote In Progress</option>
					
					<option value="7">Awaiting Approval</option>
					<option value="8">Quote Rejected</option>
					<option value="9">On Hold</option>
					<option value="10">Cancel</option>
			  </select>
			  </div>
			</div>			
			</div>-->
			
			<div class='dtable_custom_controls'>
		<div class='dataTables_wrapper'>
			<div class='ui-toolbar'>
				<div class='dataTables_length'>		
					

		        <div class="col-sm-12">
				
				<div class="form-group row">
    <label for="inputPassword3" class="col-sm-6 form-control-label">Search by Status<span class="pull-right">:</span></label>
    <div class="col-sm-6">
     <select name='cust_filter_status' class='dtable_filter'>					
					<option value=''>All</option>
						<option value='QA'>Quote Approved</option>
						<option value='QCC'>QC</option>
						<option value='RFD'>Ready For Delivery</option>
						
						<option value='DEL'>Delivered</option>
<option value='QIP'>Quote In Progress</option>
<option value='QREW'>Quote Review</option>
<option value='AWP'>Awaiting Approval</option>
<option value='QREJ'>Quote Rejected</option>
<option value='OHLD'>On Hold</option>
<option value='CANL'>Cancel</option>						
										
					
					</select>
    </div>
				
  </div>
 	  
            </div> 

								
			
							
					

					
				</div>
			</div>
		</div>
	</div>
			
                 <table id="data-table-simple"   class="dtable responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						 <th>Request Id</th> 
						
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Machine Status</th>
							  <th>Requested Date</th>                     
							  <th>Assign To</th>
                            <th>Location</th>
							<th>Status</th>
							
							<th>Action</th>
                        </tr>
                    </thead>
                 
                  <!--  <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>-->
                <tbody>
						<?php 
						foreach($service_req_list as $key){?>
                        <tr>
						 <td><?php 
						   if(substr($key->request_id,0,2)=='P-'){
									echo "<span style='color:red;'>".$key->request_id."</span>";
							}else{
								echo $key->request_id;
							}?></td>
                            <td><?php echo $key->company_name; ?></td>
							     
								<td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->model;} } ?></td>
							  
                        
							<td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){
											echo $key1->machine_status; 
											
											 }  }?></td>	
						
							
                            <td><?php echo $key->request_date; ?></td>
							
							
							 <td><?php foreach($service_req_listforEmp as $key2){
										if($key2->request_id==$key->id){ echo $key2->emp_name; } } ?></td>
							
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>
							 
							<td class="options-width">
								<select name="service_status[]" id="service_status_<?php echo $key->id; ?>">
									<option value="">---Select---</option>
									<?php foreach($status_list as $statuskey){
										  if($statuskey->id==$key->status){
											 // if(in_array($statuskey->id, $statuslists[$i])){
								    ?>
									<option selected="selected" value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } else {?>
									<option value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } } ?>

								</select>	
								<?php foreach($status_list as $statuskey){
									if($statuskey->id==$key->status)
									{
									if($statuskey->status=='Quote Approved')
									{
										echo '<input type="hidden" value="QA">';
									}
								if($statuskey->status=='QC')
								{
									echo '<input type="hidden" value="QCC">';
								}
								
								if($statuskey->status=='Ready For Delivery')
								{
									echo '<input type="hidden" value="RFD">';
								}
								
								if($statuskey->status=='Delivered')
								{
									echo '<input type="hidden" value="DEL">';
								}
								
								if($statuskey->status=='Quote In Progress')
								{
									echo '<input type="hidden" value="QIP">';
								}
								
								if($statuskey->status=='Quote Review')
								{
									echo '<input type="hidden" value="QREW">';
								}
								if($statuskey->status=='Awaiting Approval')
								{
									echo '<input type="hidden" value="AWP">';
								}
								if($statuskey->status=='Quote Rejected')
								{
									echo '<input type="hidden" value="QREJ">';
								}
								if($statuskey->status=='On Hold')
								{
									echo '<input type="hidden" value="OHLD">';
								}
								
								if($statuskey->status=='Cancel')
								{
									echo '<input type="hidden" value="CANL">';
								}
								}
								}
											 // if(in_array($statuskey->id, $statuslists[$i])){
								    ?>
								
							</td>
							
					
					<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>service/update_service_req/<?php echo $key->id; ?>" style="padding-left:15px;" class="cyan"><i class="fa fa-floppy-o fa-2x"></i></a>
					
					
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
  

<style>
	.dtable {display:none}
	.dtable_custom_controls {display:none;position: absolute;z-index: 50;margin-left: 5px;margin-top:1px}
	.dtable_custom_controls .dataTables_length {width:auto;float:none}
	.ui-widget-header {
    border: 1px solid white;
    background: white;}
	.ui-state-default
	{
		background: #055E87;
border: 3px solid #055E87;
color: white;
font-size: 12px;
	}
	.ui-state-default .ui-icon
	{
		float: right;
	}
	.ui-button
	{
		min-width: 1.5em;
padding: 0.5em 1em;
margin-left: 10px !important;
text-align: center;
	}
	
	
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.9.4/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		/*
		 * Find and assign actions to filters
		 */
		 
		
		 
		 
		$.fn.dataTableExt.afnFiltering = new Array();
		var oControls = $('.dtable').prevAll('.dtable_custom_controls:first').find(':input[name]');
		oControls.each(function() {
			var oControl = $(this);

			//Add custom filters
			$.fn.dataTableExt.afnFiltering.push(function( oSettings, aData, iDataIndex ) {
				if ( !oControl.val() || !oControl.hasClass('dtable_filter') ) return true;

				for ( i=0; i<aData.length; i++ )
					if ( aData[i].indexOf(oControl.val()) != -1 )
						return true;

				return false;
			});
		});

		options = {
			"sDom"				: 'R<"H"lfr>t<"F"ip<',
			"bProcessing"		: true,
			"bJQueryUI"		: true,
			"bStateSave"		: false,
			"iDisplayLength"	: 8,
			"aLengthMenu"		: [[8, 25, 50, -1], [8, 25, 50, "All"]],
			"sPaginationType"	: "full_numbers",
			"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ 0,7,9 ] }],
		//	 "ordering": false,
		//"ordering": [[ 2, "false" ]],
		"aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 0 ] }
       ],
			"aaSorting"			: [[ 0, "asc" ]],
			"fnDrawCallback"	: function(){
				//Without the CSS call, the table occasionally appears a little too wide
				$(this).show().css('width', '100%');
				//Don't show the filters until the table is showing
				$(this).closest('.dataTables_wrapper').prevAll('.dtable_custom_controls').show();
			},
		/*"fnStateSaveParams": 	function ( oSettings, sValue ) {
			//Save custom filters
			oControls.each(function() {
				if ( $(this).attr('name') )
					sValue[ $(this).attr('name') ] = $(this).val().replace('"', '"');
			});
			return sValue;
		},*/
		"fnStateLoadParams"	: function ( oSettings, oData ) {
			//Load custom filters
			oControls.each(function() {
				var oControl = $(this);

				$.each(oData, function(index, value) {
					if ( index == oControl.attr('name') )
						oControl.val( value );
				});
			});
			return true;
		}
		
		};
		
		
		var oTable = $('.dtable').dataTable(options);

		
		//var table = $('#example').dataTable();
 
      // Perform a filter
      
	 oTable.fnSort( [ [0,'desc'] ] );
		
		//oTable.fnSort( [ [0,'desc'] ] );
		/*
		 * Trigger the filters when the user interacts with them
		 */
		oControls.each(function() {
			$(this).change(function() {
				//Redraw to apply filters
				oTable.fnDraw();
			});
		});
		
		
		
		oTable.fnFilter('');
     // oTable.fnFilter('');
 
      // Remove all filtering
      oTable.fnFilterClear();
		
		
		
	});
	
	
</script>

    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
    materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>