

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
    border: 1px solid #dbd0e1 !important;
}
/* table.dataTable thead th{
	background: #DBD0E1 !important;
	color: #522276 !important;
} */
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
	 border: 1px solid #522276 !important;
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
    /* background: #DBD0E1; */
}
thead {
        border-bottom: 1px solid #eeeeee;
        border: 1px solid #eeeeee;
        background:#dbd0e1;
        color:#522276;
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
    border: 1px solid #522276;
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
a{
	color:#522276;
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
.dataTables_paginate > span > a.ui-state-disabled{
	color: #333 !important;
    border: 1px solid #cacaca !important;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;
	opacity:1;
}
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
</style>
<script>
function DelStatus(id){
		var spareid = $("#spareid_"+id).val();
		var reqid = $("#reqid_"+id).val();
		var qty = $("#qty_"+id).val();
		var auto_cnt = $("#auto_cnt_"+id).val();
		var dataString = 'id='+id+'&spareid='+spareid+'&reqid='+reqid+'&qty='+qty+'&auto_cnt='+auto_cnt;
		
		var r=confirm("Are you sure want to delete?");
		if (r==true)
			{ //alert("true");
		
				$.ajax
				({
					type: "POST",
					url: "<?php  echo base_url(); ?>Spare/del_spare_to_enggs",
					data: dataString,
					cache: false,
					success: function(data) 
						{ 	
						//alert(data);
							window.location = "<?php  echo base_url(); ?>pages/sparereceipt";
							alert("Spare to engineer deleted");  
						} 
				});
				
			}
		
		 
		
		
}


</script>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare Receipt List</h2>

          <hr>
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
			   <br/>
			  
			<div class='dtable_custom_controls'>
		<div class='dataTables_wrapper'>
			<div class='ui-toolbar'>
				<div class='dataTables_length'>		
				</div>
			</div>
		</div>
	</div>
			
                 <table id="data-table-simple"   class="dtable responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
						<th class="hidden">Request ID</th> 
						 <th>Request ID</th> 
						
                            <th>Engineer Name</th>
                            <th>Spare Name</th>
                            <th>Customer Name</th>
							<th>Requested Date</th>                     
							 <th>Remarks</th>
							<th>Action</th>
                        </tr>
                    </thead>
                 
                <tbody>
						<?php 
						foreach($receipt as $key){?>
                        <tr>
						<td class="hidden"><?php echo $key->id; ?></td>
						 <td><?php echo $key->request_id; ?><input type="hidden" name="spareid" id="spareid_<?php echo $key->id; ?>" value="<?php echo $key->spareid;?>"><input type="hidden" name="reqid" id="reqid_<?php echo $key->id; ?>" value="<?php echo $key->reqid;?>"><input type="hidden" name="qty" id="qty_<?php echo $key->id; ?>" value="<?php echo $key->qty_out;?>"><input type="hidden" name="auto_cnt" id="auto_cnt_<?php echo $key->id; ?>" value="<?php echo $key->auto_cnt;?>"></td>
                            <td><?php echo $key->emp_name; ?></td>
							     
								<td><?php echo $key->spare_name;?></td>
							  
                        
							<td><?php echo $key->customer_name;?></td>	
						
							
                            <td style="text-align:left;"><?php echo $key->engineer_date; ?></td>
							
							
							 <td><?php echo $key->reason;?></td>
					<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>spare/sparereceipt_service/<?php echo $key->id; ?>" style="padding-left:15px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					
					<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>
					
					
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
		background:#6c477d;
        color:#fff;
border: 3px solid #055E87;
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