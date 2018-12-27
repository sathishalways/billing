


<style>
/*div.fg-toolbar > div.dataTables_paginate > a.ui-state-default {
    background: #fff !important; 
    border: 3px solid #fff !important;
    color: #303f9f !important;
    font-size: 12px;
   border-bottom:1px solid #000;
	}
	div.fg-toolbar > div.dataTables_paginate > span > a.ui-state-default {
    background: #fff !important; 
    border: 3px solid #fff !important;
    color: #303f9f !important;
    font-size: 12px;
   border-bottom:1px solid #000;
	} 	 */	
	.dataTables_wrapper .dataTables_paginate .ui-button.ui-state-disabled, .dataTables_wrapper .dataTables_paginate .ui-button.ui-state-disabled:hover {
    color: #333 !important;
    border: 1px solid #cacaca;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
	opacity:1;
}
.dataTables_wrapper .dataTables_paginate .ui-button, .dataTables_wrapper .dataTables_paginate .ui-button:hover {
    color: #333 !important;
    border: 1px solid transparent;
    background-color: transparent;
   
}
.dataTables_wrapper .dataTables_paginate .previous.ui-button, .dataTables_wrapper .dataTables_paginate .previous.ui-button:hover {
    color: #333 !important;
    border: 1px solid transparent;
    background: transparent;
   
}
.dataTables_wrapper .dataTables_paginate .first.ui-button, .dataTables_wrapper .dataTables_paginate .first.ui-button:hover {
    color: #333 !important;
    border: 1px solid transparent;
    background: transparent;
   
}
.dataTables_wrapper .dataTables_paginate .next.ui-button, .dataTables_wrapper .dataTables_paginate .next.ui-button:hover {
    color: #333 !important;
    border: 1px solid transparent;
    background: transparent;
   
}
.dataTables_wrapper .dataTables_paginate .last.ui-button, .dataTables_wrapper .dataTables_paginate .last.ui-button:hover {
    color: #333 !important;
    border: 1px solid transparent;
    background: transparent;
   
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
}
thead {
    /*border-bottom: 1px solid #d0d0d0;*/
    border: 1px solid #522276;
    background:#6c477d;
        color:#fff;
	font-weight:bold;
	font-size:12px;
}

/*thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:#fff;
	
}*/
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
input[type=text] {
    background-color: transparent;
    border: none;
    font-size: 12px;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5	rem;
    margin: 0 0 3px 0;
    padding: 5px;
    box-shadow: #ccc;
    /* -webkit-box-sizing: content-box; */
    -moz-box-sizing: content-box;
    /* box-sizing: content-box; */
    /* transition: all .3s; */
    height: 12px;
}
input[type=search]{
    background-color: transparent;
    border: 1px solid #522276;
    border-radius: 7;
    width: 55%;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 6px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
	
}
a {
    color: #522276;
	cursor: pointer;
}
a:hover {
    color: #9678ab;
}
a:focus {
    color: #522276;
}
a:active {
    color: #522276;
}
body{    background-color: #fff;}

.ui-widget-header {
    border: 1px solid white;
    background: white;
	height: 35px;
	}
	.ui-state-default
	{
background:#6c477d;
        color:#fff;
font-size: 13px !important;
font-weight: bold;
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
background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
	}
	.dataTables_paginate{
		float:right;
	}
	.dataTables_info{
		float:left;
	}
	
	/* input, textarea, .uneditable-input {
    margin-left: 940px;
    margin-top: -68px;
} */
.dataTables_length{
	float: left;
	margin-left: 0px;
 }
 #data-table-simple_length{
	 display:block;
 }
 #data-table-simple_length > label > select{
	position: relative;
    width: 32%;
    padding: 4px 6px;
 }
 .dataTables_filter{
	 float:right;
 }
 #data-table-simple_filter > label > input{
	border:1px solid #522276;
 }
 label {
    display: block;
    margin-bottom: 34px;
	 margin-left: 25px;
}
.dtable {display:none}
	.dtable_custom_controls {display:none;position: absolute;z-index: 50;margin-left: 5px;margin-top:1px}
	.dtable_custom_controls .dataTables_length {width:auto;float:none}
	
	/*.dataTables_filter input{
		border:1px solid #ccc;
	}*/
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		cat_name = $("#prod_cat_name_"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Productcategory/update_prod_category', 
         data: {'id' : id, 'category_name' : cat_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Product Category updated");  
              }
          });

        });
}

function InactiveStatus(id){
	//alert("add");
		
		//	alert("add1");
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Labcategory/update_status_prod_category', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Lab Category made Inactive"); 
				window.location = "<?php  echo base_url(); ?>pages/lab_listsss";	
              }
          });

      
}

function activeStatus(id){
	
		//$(function()
      //  {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Labcategory/update_status_prod_category1', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
				alert("Lab Category made active"); 
				window.location = "<?php  echo base_url(); ?>pages/lab_listsss";	
                 
              }
          });

       // });
}


</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Lab List</h2>
<!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addcat.png" title="Add Product Category" style="width:24px;height:24px;">Add Product Category</button>-->
          <a href="<?php echo base_url();?>pages/add_lab"> <i class="fa fa-plus-square" aria-hidden="true" title="Add Lab" style="position: relative;
    bottom: 27px;left:95%;"></i> </a>
           <hr style="    margin-top: -22px;">
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="dtable table-bordered table-responsive display table" cellspacing="0" >
                    <thead>
                        <tr>
							<th style="text-align:center;font-size:13px;">Lab ID</th>
                            <th style="text-align:center;font-size:13px;">Lab Name</th>
                           <th  style="text-align:center;font-size:13px;">Action</th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1; foreach($listss as $key){ ?>
                        <tr>
							<td><input type="text" value="<?php  echo $key->id;?>" readonly></td>
                            <td ><input type="text" value="<?php echo $key->lab_name; ?>" class="" name="prod_cat_name" id="prod_cat_name_<?php echo $key->id; ?>" readonly></td>
                           
							<td class="options-width"  style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>Labcategory/update_lab_category/<?php echo $key->id; ?>" style="padding-right:10px;"><i class="fa fa-floppy-o fa-2x"></i></a>
					<?php if($key->status!='1') { ?> <a onclick="InactiveStatus('<?php echo $key->id; ?>')" >InActive</a><?php } ?><?php if($key->status!='0') { ?><a href="#" onclick="activeStatus('<?php echo $key->id; ?>')" >Active</a><?php } ?>
					
					
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
  


  
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> -->
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
	 
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
			"aoColumnDefs": [{ 'bSortable': true, 'aTargets': [ 0,7,9 ] }],
		//	 "ordering": false,
		//"ordering": [[ 2, "false" ]],
		"aoColumnDefs": [
          { 'bSortable': true, 'aTargets': [ 0 ] }
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

</body>

</html>