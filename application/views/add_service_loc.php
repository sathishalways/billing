

<head>

 


<style>

.delRowBtn{
 border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
    padding: 8px 4px 4px 4px;
    border-radius: 5px;
    color: white;
	
}
body{background-color:#fff;}
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
			border: 1px solid #522276;
text-align: center;
		}
		.tableadd1 tr
		{
			height: 40px;
		}
		.tableadd1 tr:first-child
		{
			height: 40px;
			background: rgb(112, 66, 139) none repeat scroll 0% 0%;
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
	color:#fff;
	font-weight:bold;
   
}
.tableadd1 tr td.plus
{
	padding-top: 14px;
}
.tableadd1 tr td.plus input
{
	width:70px;
	border:1px solid #522276;
	
}
.tableadd1 tr td input
{	
	height: 25px;
border-radius: 5px;
padding-left: 10px;
margin-bottom: 0px;
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
.rowadd {
    border: 1px solid #dbd0e1 !important;
    background: #dbd0e1 none repeat scroll 0% 0% !important;
       padding: 0px 4px 4px 4px;
    height: 30px;
    border-radius: 5px;
    color: #70428b;
}
#addtable 
{
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
.tableadd tr td input {
    width: 210px; 
    border-radius: 5px;
    padding-left: 10px;
}
.tableadd1 tr td input {
    width: 210px; 
    border-radius: 5px;
    padding-left: 10px;
}

#errorBox1,#zonecode_error{
 color:#F00;
 }
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
        background-color: transparent;
        border: 1px solid #ccc;
        /* border-bottom: 1px solid #055E87; */
        border-radius: 2px;
        outline: none;
        height: 2.0rem;
        width: 100%;
        font-size: 12px;
        margin: 0 0 15px 0;
        padding: 4px;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        transition: all .3s;
    }
select {
    border: 1px solid #ccc !important;
}
.btn{text-transform:none !important;}
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


<script>
$(document).ready(function(){
$('#addMoreRows').click(function(){ //alert("ddaaassss");
    var inc=1;
	var vl=$('#countid').val();
	//var modelid =$('#modelid').val();
	//alert(modelid);
         var vl1 =  (parseFloat(vl)+parseFloat(inc)); 
		 //alert(vl1);
    //alert(vl);
    $('#countid').val(vl1);
    var datastring='countid='+vl1;
	
	$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Servicelocation/addrow2",
data: datastring,
cache: false,
success: function(result)
{ 
		//alert(result);
            
        $('#table1').append(result);
} 
});

});
  
});
</script>


<script>
$(document).ready(function(){
   $('.eng_spare_name').change(function(){ //alert("hiiio");
   var id = $(this).val();
	
    var idd=$(this).closest(this).attr('id');
	//alert(idd);
	 var arr= idd.split('-');
	  var vl = arr['1'];
   //var vl=$('#countid').val();
	//alert(vl);
  //alert("spareid: "+idd);
   var dataString = 'id='+id;
    $.ajax
	({
type: "POST",
url: "<?php  echo base_url(); ?>Spare/getsparedet",
data: dataString,
cache: false,
success: function(data) 
{ 	
	$.each(data, function(index, data){
		   $('#spare_qty-'+vl).val(data.spare_qty),
		   $('#used_spare-'+vl).val(data.used_spare),
		   $('#eng_spare-'+vl).val(data.eng_spare)
		   
    });

} 
});
   });
 });
</script>

<script>
$(document).ready(function(){	

	
	$('.plus1').click(function(){ //alert("hiiio");
		if(document.getElementById('minus-0').value!=""){
			alert("enter any plus or minus");
			//$("#plus").attr("disabled", "disabled"); 
		}/* else{
			$("#plus").removeAttr("disabled"); 
		} */
   });
   
   $('.minus1').click(function(){ //alert("hiiio");
		if(document.getElementById('plus-0').value!=""){
			alert("enter any plus or minus");
			//$("#minus").attr("disabled", "disabled"); 
		}/* else{
			$("#minus").removeAttr("disabled"); 
			
		} */
   });

});

function UpdateStatus1(id){  //alert(id);alert($("#enggdate_"+id).val());
		var eng_name = $("#eng_name-"+id).val();
		var eng_spare_name = $("#eng_spare_name-"+id).val();
		var engg_date = $("#enggdate_"+id).val();
		
		if(eng_name==""){
			alert("Enter the Engineer Name");
		}else if(eng_spare_name==""){
			alert("Enter the Spare Name");
		}else if(engg_date==""){
			alert("Enter the Date");
		}else{
			var plus = $("#plus-"+id).val();
			var minus = $("#minus-"+id).val();
			
			//alert(engg_date);
			var engg_reason = $("#engg_reason-"+id).val();
		
			var spare_qty = $("#spare_qty-"+id).val();
			var used_spare = $("#used_spare-"+id).val();
			var eng_spare = $("#eng_spare-"+id).val();
		
		
			$(function()
			{
            $.ajax({
			type: "POST",
			url: '<?php  echo base_url(); ?>Spare/add_spare_engg', 
			data: {'eng_name' : eng_name, 'eng_spare_name' : eng_spare_name, 'plus' : plus, 'minus' : minus, 'engg_date' : engg_date, 'engg_reason' : engg_reason, 'spare_qty' : spare_qty, 'used_spare' : used_spare, 'eng_spare' : eng_spare},
			dataType: "text",  
			cache:false,
			success: 
              function(data){ 
                alert("Spares For Engineers Added");  
              }
			});

			});
			
		}
		
		
		
}
</script>


<!--<script>
function frmValidate(){ 
 //var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var serv_loc_code = document.frmZone.serv_loc_code.value;
 var serv_loc_name = document.frmZone.serv_loc_name.value;
 var serv_loc_area = document.frmZone.area_name.value;
 var serv_loc_pincode = document.frmZone.pincode.value;
 alert(serv_loc_area);
 if( serv_loc_code == "" )
   { //alert("Hi");
     document.frmZone.serv_loc_code.focus() ;
	 document.getElementById("zonecode_error").innerHTML = "Enter the Zone Code";
     return false;
   }
   if( serv_loc_name == "" )
   {
     document.frmZone.serv_loc_name.focus() ;
	 document.getElementById("errorBox1").innerHTML = "Enter the Zone Name";
     return false;
   }
   if( serv_loc_area == "")
   {
	    document.frmZone.area_name.focus() ;
	 document.getElementById("errorBox2").innerHTML = "Enter the Area Name";
     return false;
   }
   if( serv_loc_pincode == "")
   {
	    document.frmZone.pincode.focus() ;
	 document.getElementById("errorBox3").innerHTML = "Enter the Pincode Name";
     return false;
   }
	   
   
}

</script>-->
<script>
   $(function(){
   
   $('input:text[id="area_name-0"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9]/g,'') );
        });
	$('input:text[id="zonename"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });
			$('input:text[id="conveyance"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9]/g,'') );
        });
		
   $( "form" ).submit(function( event ) {
  if ( $( "#zonename" ).val() === "" ) {
	$( "#errorBox1" ).text( "Enter the Zone Name" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( "#zonecode" ).val() === "" ) {
	$( "#zonecode_error" ).text( "Enter the Zone Code" ).show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( "#area_name-0" ).val() === "" ) {
	$( "#errorBox2" ).text( "Enter the Area Name" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
  
  if ( $( "#pincode-0_0" ).val() === "" ) {
	$( "#errorBox3" ).text( "Enter the Pincode" ).show().css({'color':'#ff0000','font-size':'10px'});
    event.preventDefault();
  }
   });
   });
   </script>
  
 


<script>
	$(function() {
		$(document.body).delegate(".delRowBtn", "click", function(){
	      $(this).closest("tr").remove();        
	    });
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script>
$(document).ready(function(){alert('sdaks');
	//$("#UserName<?php echo $count; ?>").keyup(function(){
	$(document).on("keyup","#zonecode", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){	

	
var name=$('#zonecode').val();
 
//alert(name);
 
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Servicelocation/checkcode',
  data: {
   p_id:name,
  },
  success: function (data) { //alert(data);
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Zone Code Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '12px'}); 
			$('#zonecode').val('');
			return false;
             
            
        }
  }
  });
}
 
});
</script>-->
<script>
$(document).ready(function(){
//$('#prob_cat_name').change(function(){ //alert("check");
$(document).on("keyup","#zonename", function(){
var timer;	
 clearTimeout(timer);
        timer = setTimeout(mobile, 3000);
		}); 
//alert(brand);
function mobile(){

var name=$("#zonename").val();
 
//alert(name);
 
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Servicelocation/checkname',
  data: {
   p_id:name,
  },
  success: function (data) { //alert(data);
  if(data == 0){
        
        $('#lname2').html('');    
        
            
        }
        else{
			$('#lname2').html('Zone Name Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'}); 
			$('#zonename').val('');
			return false;
             
            
        }
  }
  });
 
}
});
</script>
<script>
$(document).ready(function(){//alert('jsjdf');
//$('#prob_cat_name').change(function(){ //alert("check");
$(document).on("change","#zonecode", function(){//alert('fsdakf');
var timerr;	
 clearTimeout(timerr);
        timerr = setTimeout(mobilee, 3000);
		}); 
//alert(brand);
function mobilee(){

var namee=$("#zonecode").val();
 
//alert(namee);
 
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Servicelocation/checkcode',
  data: {
   p_id:namee,
  },
  success: function (data) { alert(data);
  if(data == 0){
        
        $('#lname1').html('');    
        
            
        }
        else{
			$('#lname1').html('Zone Code Already Exist').show().css({'color':'#ff0000','position':'relative','bottom':'10px','font-size': '10px'}); 
			$('#zonecode').val('');
			return false;
             
            
        }
  }
  });
 
}
});
</script>
 <script>
    $(document).ready(function(){
		$('#zonename').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z ]/g,'') );
        });	
		$('#conveyance').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9 ]/g,'') );
        });	
		$('#pincode-0_0').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^0-9 ]/g,'') );
        });	
		
    });
</script>
   <script>
     $(document).ready(function(){
		$("#zonename").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox1").show();
			}
			else{
				$("#errorBox1").hide();
			}
		});
		$("#zonecode").keyup(function(){
			if($(this).val()==""){
			    $("#zonecode_error").show();
			}
			else{
				$("#zonecode_error").hide();
			}
		});
		$("#area_name-0").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox2").show();
			}
			else{
				$("#errorBox2").hide();
			}
		});
		$("#pincode-0_0").keyup(function(){
			if($(this).val()==""){
			    $("#errorBox3").show();
			}
			else{
				$("#errorBox3").hide();
			}
		});
		
		});
		</script>
		
<!--<script>
$(document).ready(function(){
	$('.pincode').change(function(){
		 var idd=$(this).closest(this).attr('id');
		//alert(idd);
		var arr= idd.split('_');
		var vl = arr['1'];
		var pin=$('#pincode-0_'+vl).val();
		var zone=$('#zonename').val();
		var datastring='id='+pin+'&zone='+zone;
		$.ajax
		({
		type: "POST",
		url: "<?php  echo base_url(); ?>Servicelocation/checkpin",
		data: datastring,
		cache: false,
		success: function(result)
		{ 
				if(result!='0')	
				{
					alert('Already Exists');
				}
		} 
		});
			
	});
});
</script>-->
<script>
		$(function(){
			$('.pincode').change(function(){ //alert('sdalkjfl');
				 var idd=$(this).closest(this).attr('id');
					//alert(idd);
					var arr= idd.split('_');
					var vl = arr['1'];
					var pin=$('#pincode-0_'+vl).val();
					var i;
					for(i=0;i<=vl;i++){
						if(vl!=i){
							var check=$('#pincode-0_'+i).val();
							if(pin==check){
								$('#pincode-0_'+vl).val('');
								alert('Already Exists');
							}
						}
						
						
					}
					
			});
		});
		</script>
		
</head>
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Add Service Zone</h2>

          <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			<form name="frmZone" action="<?php echo base_url(); ?>Servicelocation/add_service_location" method="post" onsubmit="return frmValidate()">
               <div id="errorBox"></div> 
			   <div class="col-md-1">
			   </div>
			  
                <div class="col-md-10">
			   
			   
	<div class="col-md-12 tableadd" id="addtable">
		<div class="col-md-3">
			<label>Zone Code&nbsp;<span style="color:red;">*</span></label>
			<input type="text" name="serv_loc_code" class="corporate" id="zonecode" maxlength="2">
			<span id="zonecode_error"></span>
			<div id='lname1'></div>
		</div>
		<div class="col-md-3">
			<label>Zone Name&nbsp;<span style="color:red;">*</span></label>
			<input type="text" name="serv_loc_name" class="corporate" id="zonename" maxlength="50">
			<div id="errorBox1"></div> 
			<div id='lname2'></div>
		</div>

		<div class="col-md-3">
			<label>Conveyance charge</label>
			<input type="text" name="concharge" class="corporate" id="conveyance" maxlength="6">
		</div>
		<div class="col-md-3">
			<label>Zone Coverage</label>
			<select name="zone_coverage"> 
				<option value="">---Select---</option>
				<option value="on_site">Onsite</option>
				<option value="outstation">Out Station</option>
			</select>
		</div>
	</div>
			   
			   
			   
<div style="margin: 10px 15px;" class="col-md-12">
	<table id="table1" class="tableadd1" style="width:70%;">
		<tr>
			<td><label>Area&nbsp;<span style="color:red;">*</span></label></td>
			<td><label>Pincode&nbsp;<span style="color:red;">*</span></label></td><!--<td><label>Action</label></td>-->
		</tr>
		<tr>
			<td style="padding:10px 0;"><input type="text" name="area_name[]" id="area_name-0"><div id="errorBox2"></div></td>
			<td style="padding:10px 0;"><input type="text" name="pincode[]" id="pincode-0_0" maxlength="6" class='pincode'><div id="errorBox3"></div></td>
			<td style="border:none;"><a id="addMoreRows" class="btn cyan rowadd"><i class="fa fa-plus-square" aria-hidden="true"></i></a></td>
		<!--  <td class="save">	<a href="#" onclick="UpdateStatus1(0)"><i  class="fa fa-floppy-o fa-3x"></i></a></td>-->
		</tr>
	</table>
	<input type="hidden" name="countid" id="countid" class="" value="0" >
</div>
<div class="col-md-12">

<div class="col-md-2">
<button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit</button>
</div>
</div>
		</div>
				<div class="col-md-1">
			   </div>
				</form>
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
<script>
    $(document).ready(function(){
		$('input:text[id="zonecode"]').bind('keyup blur', function(){
            $(this).val( $(this).val().replace(/[^a-zA-z0-9]/g,'') );
        });
		$('input:text[id="zonecode"]').change(function(){
            if($(this).val().length <2){
				alert("Zone code must have 2 digits");
				$( "#zonecode" ).val('');
				$(this).focus();
				return false;
			}
        });
    });
</script>
<script>
  $(function(){

$('input[name^="pincode"]').change(function() {

    var $current = $(this);

    $('input[name^="pincode"]').each(function() {
        if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id'))
        {
            $( "#errorBox3" ).text( "Already Exists" ).show().css({'color':'#ff0000','font-size':'10px'});
        }

    });
  });
});
  </script>

	 
</body>

</html>