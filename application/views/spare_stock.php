<head>
<style>
.ui-state-default {
    background:#6c477d;
    color:#fff;
    border: 3px solid #fff !important;
    font-size: 12px;
   /*border-bottom:1px solid #000;*/
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
    background-color: white;
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
select {
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

label > input[type=text] {
    background-color: transparent;
    border: 1px solid #522276;
    font-size: 12px;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5	rem;
    margin: 0 0 3px 0;
    padding: 5px;
    box-shadow: #522276;
    /* -webkit-box-sizing: content-box; */
    -moz-box-sizing: content-box;
    /* box-sizing: content-box; */
    /* transition: all .3s; */
    height: 12px;
}
input[type=text] {
    background-color: transparent;
    border: 0px solid #522276;
    font-size: 12px;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5	rem;
    margin: 0 0 3px 0;
    padding: 5px;
    box-shadow: #522276;
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
body{    background-color: #fff;}

.ui-widget-header {
    border: 1px solid white;
    background: white;
	height: 35px;
	}
	.ui-state-default
	{
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
 .dataTables_filter{
	 float:right;
 }
 label {
    display: block;
    margin-bottom: 34px;
	 margin-left: 25px;
}
.dtable {display:none}
	.dtable_custom_controls {display:none;position: absolute;z-index: 50;margin-left: 5px;margin-top:1px}
	.dtable_custom_controls .dataTables_length {width:auto;float:none}
	
	.dataTables_filter input{
		border:1px solid #ccc;
	}

.dataTables_paginate > span > a{
    color: #000 !important;
    border: 0px solid #cacaca !important;
    /*background-color: #fff;*/
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    /*background: linear-gradient(to bottom, #DBD0E1 0%, #522276 100%) !important;*/
    background: transparent !important;
    opacity: 1;
}
	
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

.dataTables_paginate > .previous{
    color: #fff !important;
    border: 0px solid #cacaca !important;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    /*background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;*/
    background: transparent !important;
    opacity: 1;
}
.dataTables_paginate > .previous.ui-state-disabled{
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

.dataTables_paginate > .next{
    color: #000 !important;
    border: 0px solid #cacaca !important;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    /*background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;*/
    background: transparent !important;
    opacity: 1;
}
.dataTables_paginate > .next.ui-state-disabled{
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

.dataTables_paginate > .first{
    color: #000 !important;
    border: 0px solid #cacaca !important;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    /*background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;*/
    background: transparent !important;
    opacity: 1;
}
.dataTables_paginate > .first.ui-state-disabled{
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

.dataTables_paginate > .last{
    color: #000 !important;
    border: 0px solid #cacaca !important;
    background-color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
    background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
    /*background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;*/
    background: transparent !important;
    opacity: 1;
}

.dataTables_paginate > .last.ui-state-disabled{
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
a:hover{
	cursor:pointer;
	color:#000;
}
a{
	color:#522276;
}
</style>

<style>
/*select{width:200px;}*/
thead {
        border-bottom: 1px solid #eeeeee;
        border: 1px solid #eeeeee;
        background:#6c477d;
        color:#fff;
        }
input[readonly]
{
border:none;
}

.data{
	border: 1px solid #522276 !important;
width: 25% !important;
margin-right:4px !important;
}
.data1{
	border: 1px solid #522276 !important;
width: 20% !important;
margin-right:4px !important;
}
.date
{
	border: 1px solid gray !important;
width: 32% !important;
margin-right:4px !important;
}
.fancybox-opened{
	width:1035px !important;
}
.fancybox-inner{
	width:1030px !important;
}
</style>
<!--<style>
.btnstyle{
    padding: 3px 8px;
    margin-left: 925px;
    margin-top: -37px;
}
table.dataTable thead th, table.dataTable thead td {
    padding:4px 18px;
    border: 1px solid #522276 !important;
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
  border: 1px solid #522276 !important;
}
th {
padding: 0px;
    text-align: center;
    font-size: 12px;
	 border: 1px solid #522276 !important;
    /* background-color: #DBD0E1 !important; */
}

.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
}
#data-table-simple_length {
    display: block;
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

.fancybox-inner{
	width:1020px !important;
}
.fancybox-wrap{
	width:1030px !important;
}


</style>-->

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
					padding : 5
					
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
					padding : 5
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
</head>
<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2>Spare Stock</h2>
<hr>
            <!--DataTables example-->
            <div id="table-datatables" style="width:90%; margin-left:5%;">
           
              <div class="row">
              
			
               <div class="col-md-8 col-md-offset-2">
			    <div style="float: right;
height:50px;
">				
						<a id="fancybox-manual-b" href="javascript:;" style="margin-right: 20px;"><img src="<?php echo base_url(); ?>assets/images/spare_add1.png" alt="materialize logo"></a>
						
						<a id="fancybox-manual-bc" href="javascript:;"><img src="<?php echo base_url(); ?>assets/images/spare_delete1.png" alt="materialize logo"></a>
						</div>
                       <table id="data-table-simple" class="dtable responsive-table display" cellspacing="0" style=" margin-top:2%;">
                    <thead>
                        <tr><th class="hidden">id</th>
                            <th>Spare Name</th>
							 <th>Stock In Hand</th>
							 <th>Spare With Engineers</th>
							 <th>Used Spare</th>							
							
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($spare_stock as $sparekey){ 
					$sdf=$sparekey->id;?>
                        <tr>
							<td class="hidden"><?php echo $sparekey->id; ?></td>
                            <td><input type="text" value="<?php echo $sparekey->spare_name; ?>" class="" name="spare_name" id="spare_name" readonly></td>
							  <td><a onclick="clickPopup('<?php echo $sdf;?>')"> <input type="text" value="<?php echo $sparekey->spare_qty; ?>" class="" name="total_spare" id="total_spare_<?php echo $sparekey->id; ?>" readonly></a></td>
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
<!--<script type='text/javascript'>//<![CDATA[

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


</script>-->

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
       
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>-->
   <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>-->
    <!-- chartist -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>  --> 
    
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