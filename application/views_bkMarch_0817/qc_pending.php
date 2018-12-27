
<head>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
 	<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>-->
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>  
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>-->
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
	 
	 <script type="text/javascript" src="http://cdn.datatables.net/1.9.4/js/jquery.dataTables.min.js"></script>
 <link href="<?php echo base_url(); ?>assets/select/select2.css" rel="stylesheet"/>
 
 <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    
    <!-- data-tables -->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>-->
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>-->
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="<?php echo base_url(); ?>assets/select/jquery-1.8.0.min.js"></script>-->
	  
	  
	   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>





  
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
   <script>
  $( function() {
    $( ".datepicker" ).datepicker({
	     dateFormat:"dd-mm-yy",
		 changeMonth:true,
		 changeYear:true,
		 yearRange:'1950:2016'
	});
  } );
  </script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
<script>
    $(document).ready(function(){
      $('#myTable').DataTable();
	  $('#myTable1').DataTable();
    });
  </script>
	  
<style>
.btn {
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.btn, .btn-large {
    text-decoration: none;
    color: #FFF;
    background-color: #ff4081;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: 0.2s ease-out;
    -moz-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    transition: 0.2s ease-out;
    cursor: pointer;
}
.btn, .btn-large, .btn-flat {
    border: none;
    border-radius: 2px;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    outline: 0;
    padding: 0 2rem;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
}
.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.cyan {
    background-color: #00bcd4 !important;
    background-color: #25555C !important;
    background-color: #055E87 !important;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
html input[type="button"], button, input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
table {
    
    border-color: grey;
}

.link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .icon
 {
	padding-right: 20px;
 }
 .fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		.tableadd1 tr td
		{
			
text-align: center;
		}
		.tableadd1 tr
		{
			height: 50px;
		}
		.tableadd1 tr td select
		{
			border: 1px solid #9A9A9B;
border-radius: 5px;
width:150px;
		}
		.tableadd1 tr td textarea
		{
			width:200px;
			border: 1px solid #9A9A9B;
			height:70px;
			border-radius: 5px;
		}
		.tableadd1 tr td label {
 
    line-height: 0;
	color:white;
	
   
}
.tableadd1 tr td.plus
{
	padding-top: 0px;
}
.tableadd1 tr td.plus input
{
	width:50px;
	border:1px solid gray;
	
}

.tableadd1 tr td input
{
	
	height: 33px;
border-radius: 3px;
padding-left: 0px;
}
.tableadd1 tr td.qty
{
	padding-top: 14px;
}
.tableadd1 tr td.qty input
{
	width:100px;
	border:1px solid gray;
	
	
}
.tableadd1 tr td.save .fa {
    font-size: 30px !important;
}
.rowadd
{
	 border: 1px solid #055E87 !important;
background: #055E87 none repeat scroll 0% 0% !important;
padding: 4px;
border-radius: 5px;
color: white;
font-weight: bold;
font-family: calibri;
font-size: 15px;
margin-top: 30px;
}
#addtable 
{
	width:51%;
	margin-top:20px;
}
#addtable tr td
{
border:none;
text-align:left;

}
#addtable tr td label
{

color:black;
}
#errorBox{
 color:#F00;
 }
#errorBox1{
 color:#F00;
 }
 #errorBox2{
 color:#F00;
 }
 #errorBox3{
 color:#F00;
 }
 #errorBox4{
 color:#F00;
 }
  #errorBox5{
 color:#F00;
 }
  #errorBox6{
 color:#F00;
 }
 #errorBox7{
 color:#F00;
 }
 #errorBox8{
 color:#F00;
 }
  #errorBox9{
 color:#F00;
 }
 #errorBox10{
 color:#F00;
 }
 input[id=basicamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 5px;
  left: 29px;
 }
  input[id=cst]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 20px;
  left: 208px;
 }
  input[id=freight]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 35px;
  left: 364px;
 }
  input[id=totalamount]{
	 width: 100px;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 1px;
  float:right;
  position: relative;
  top: 50px;
  left: 560px;
 }
 .purchasedetail{
  position: relative;
  top: -63px;
  left: 50px;
 }
 .pipurchasedetail{
  position: relative;
  top: -63px;
  left: 90px;
 }
 .cstpurchasedetail{
  position: relative;
  top: -63px;
  left: 95px;
 }
.tableadd tr td input {
  width:100%;
  height: 33px;
  /* border: 1px solid #B3B3B3; */
  border-radius: 5px;
  padding-left: 10px;
}
  .recvd_qty_cl{
 color:#F00;
 }

</style>

<script>
function frmValidate(){ 
 
 if ($('.chkNumber:checked').length) {
          var cln = '';
          $('.chkNumber:checked').each(function () { 
            cln = $(this).val();
			var loc_name = $('#loc_name').val();
			var stats_name = $('#stats_name').val();
			
			var batch_inc_id = $('#batch_inc_id-'+cln).val();
			var prod_cat = $('#prod_cat-'+cln).val();
			
			//alert(batch_inc_id);
			
			//var success_msg = 'Good Successfully received';
			
			//parent.setSelectedMsg(success_msg);
			
			var dataString = 'loc_name='+loc_name+'&stats_name='+stats_name+'&batch_inc_id='+batch_inc_id+'&prod_cat='+prod_cat;
				$.ajax
				({
			type: "POST",
			url: "<?php echo base_url(); ?>Product/updating_batchno_status",
			data: dataString,
			cache: false,
			success: function(data) 
			{ 	
				location.reload();
				document.getElementById("errorBox").innerHTML = "Batch # updated";
			} 
			});
			
          });
          //chkId = chkId.slice(0, -1);
          //alert(chkId);
		  
		  
		  return false;
        }
        else {
          document.getElementById("errorBox").innerHTML = "please check any Batch # to update";
		  return false;
        }
 
 
   
}

</script>


<script>
$(document).ready(function(){
   $('.acc_qc_update').change(function(){
		var idd=$(this).closest(this).attr('id');
		var arr = idd.split('-');
		var rowid = arr['1'];
		var qc_status_id = $('#acc_qc_update-'+rowid).val();
		
   var dataString = 'id='+rowid+'&status_id='+qc_status_id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Product/update_qc_status",
data: dataString,
cache: false,
success: function(data) 
{ 	
	alert("QC Updated");  

} 
});

   });
 });
</script>

  
 
</head>
<section id="content">
        
      
        <div class="container">
		<form action="<?php echo base_url(); ?>Product/qc_pending" method="post" name="frmQcpending" autocomplete="off" onsubmit="return frmValidate()">
          <div class="section">
		  
		  
		    <h4 class="header" style="margin-top:8px; font-size: 22px; color: #055e87;">QC Pending SR Batch #</h4>
			<hr style="border: 1px solid #feca08; margin-top:17px;">
          
            <!--<div class="divider"></div>-->
            <div id="errorBox" style="margin-left:310px;"></div> 
	




          <div class="col-md-12">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#home">Product</a></li>
                  <li><a data-toggle="tab" href="#menu1">Accessories</a></li>
              </ul>
          </div>
			
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
			
			
               <div class="col-md-12">
			  <div style="margin: 30px 0px;" class="tab-content">





<div id="home" class="tab-pane fade in active">	  
<table class="tableadd1" style="width:100%;" id="myTable">

<thead>
<tr style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;border:1px solid grey;">
<td style="border:1px solid grey;"><label>Model</label></td>
<td style="width: 350px;border:1px solid grey;"><label>SR Batch #</label></td>
<td style="border:1px solid grey;"><label>Serial #</label></td>
<td ><label>PO #</label></td>
<td style="width: 90px;border:1px solid grey;"><label>Location</label></td>
<td style="width: 90px;border:1px solid grey;"><label>Action</label></td>
</tr>

</thead>

<tbody>
<?php $i=1; foreach($qc_pending as $key){?>
<tr>
<td style="border:1px solid grey;"><?php echo $key->model; ?></td>
<td style="border:1px solid grey;"><?php echo $key->batch_no; ?></td>
<td style="border:1px solid grey;"><?php echo $key->serial_no; ?></td>
<td style="border:1px solid grey;"><?php echo $key->po_no; ?>  <input type="hidden" name="batch_inc_id" id="batch_inc_id-<?php echo $i; ?>" class="bamount" value="<?php echo $key->batch_inc_id; ?>" >  <input type="hidden" name="prod_cat" id="prod_cat-<?php echo $i; ?>" class="bamount" value="<?php echo $key->category; ?>" ></td>
<td style="border:1px solid grey;"><?php foreach($location_list as $loc_key){
									   if(isset($loc_key->location_name) && $loc_key->location_name!=""){
										if($loc_key->id==$key->loc_id){
											echo $loc_key->location_name;
}} }
											
									?>
						 </td>

						 
		  <td class="options-width" style="border:1px solid grey;">
					
					<a href="<?php echo base_url(); ?>Product/qc_report/<?php echo $key->category; ?>/<?php echo $key->batch_no; ?>/<?php echo $key->model_id; ?>" >QC Report</a>
					</td>
			

</tr>
<?php $i++; } ?>
</tbody>
<!--<input type="text" name="chked_item" id="chked_item" class="bamount" value="" readonly>-->

</table>
</div>

<div id="menu1" class="tab-pane fade">
<table class="tableadd1" style="width:100%;" id="myTable1">

<thead>
<tr style="background: rgb(5, 94, 135) none repeat scroll 0% 0%;border:1px solid grey;">
<td style="border:1px solid grey;"><label>Accessories</label></td>
<td style="width: 350px;border:1px solid grey;"><label>Serial #</label></td>
<td ><label>PO #</label></td>
<td style="width: 90px;border:1px solid grey;"><label>Location</label></td>
<td style="width: 90px;border:1px solid grey;"><label>Action</label></td>
</tr>

</thead>

<tbody>
<?php $j=1; foreach($acc_qc_pending as $key11){?>
<tr>
<td style="border:1px solid grey;"><?php echo $key11->accessory; ?></td>
<td style="border:1px solid grey;"><?php echo $key11->serial_no; ?></td>
<td style="border:1px solid grey;"><?php echo $key11->po_no; ?><input type="hidden" name="batch_inc_id" id="batch_inc_id-<?php echo $j; ?>" class="bamount" value="<?php echo $key11->batch_inc_id; ?>" ></td>
<td style="border:1px solid grey;"><?php foreach($location_list as $loc_key){
											if(isset($loc_key->location_name) && $loc_key->location_name!=""){
												if($loc_key->id==$key11->loc_id){
													echo $loc_key->location_name;
										}} }
									?>
						 </td>

						 
		  <td class="options-width" style="border:1px solid grey;">
					
					<select name="acc_qc_update" id="acc_qc_update-<?php echo $key11->batch_inc_id; ?>" class="acc_qc_update">
				<option value="11">Select</option>
				<option value="12">QC Accepted</option>
				<option value="13">QC Rejected</option>
			</select>
					</td>
			

</tr>

<?php $j++; } ?>

</tbody>
<!--<input type="text" name="chked_item" id="chked_item" class="bamount" value="" readonly>-->
</table>
</div>

</div>

                </div>
				
              </div>
            </div> 
           
          </div>
		  
        </div>
		 
	
      </section>

	  

  </div>
  </form>

  </div>
  



<script>
     $('.chkSelectAll').click(function () {
        $('.chkNumber').prop('checked', $(this).is(':checked'));
      });

      $('.chkNumber').click(function () {
        if ($('.chkNumber:checked').length == $('.chkNumber').length) {
          $('.chkSelectAll').prop('checked', true);
        }
        else {
          $('.chkSelectAll').prop('checked', false);
        }
      });


</script>

    <!--<script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	 
    <script src="<?php echo base_url(); ?>assets/select/select2.js"></script>
  <script>
   var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"},
	  '.enable_split_word_search'     : {enable_split_word_search:true},
	  '.chosen-select'     : {search_contains:true}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
  <script>
        $(function() {
            $(".product_name").select2();
			$(".vendor_name").select2();			 
			 
             /*$(".property_name").select2();       
             $(".property_type").select2(); 
             $(".property1_name").select2();  
			  $(".propertymulti").select2();  
			   $(".propertymulti1").select2();  
				 $(".reference_con").select2(); */ 	
                
                  
        });
    </script>-->
	
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
function brinfo(id){
		$.fancybox.open({
					href : '<?php  echo base_url(); ?>Product/qc_report/'+id,
					type : 'iframe',
					padding : 5
		});
}

</script>




</body>

</html>