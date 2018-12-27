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
    border: 1px solid #eee;
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
</style>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Purchase Orders</h2>
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
						 <th>Purchase Order Id</th> 
						
                            <th>Supplier</th>
                            <th>Requested Date</th>                     
							 <th>Order Amt</th>
                           
							<th>Action</th>
                        </tr>
                    </thead>
                 
                <tbody>
						<?php 
						foreach($get_purchase_orders as $key){?>
                        <tr>
						 <td><?php echo $key->id; ?></td>
                            <td><?php echo $key->to_name; ?></td>
							     
								<td style="text-align:right;"><?php echo $key->todaydate;?></td>
							  
                        
							<td style="text-align:right;"><?php echo $key->totalamount;?></td>	
						
					<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>spare/edit_purchase_order/<?php echo $key->id; ?>" style="padding-left:15px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					
					<!--<a href="<?php echo base_url(); ?>spare/sparereceipt_service/<?php echo $key->id; ?>" style="padding-left:15px;"  onclick="print_status('<?php echo $key->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->
					
					
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