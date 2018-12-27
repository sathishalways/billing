
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
#errorBox{
 color:#F00;
 text-align: center;
 }
 .fancybox-inner{
	 height:100px !important;
 }
 .link{
	 padding: 10px;
	 margin-right: 20px;
border: 1px solid #B3B3B3;
background: #B3B3B3 none repeat scroll 0% 0%;
color: white;
font-weight: bold;
border-radius: 5px;
margin-top:10px;
 }
 .link:focus{
	
color: white;
text-decoration:none;
 }
 .chosen-container-single .chosen-single {
    
    height: 34px !important;
 }
 .chosen-container
 {
	 margin-top: -16px !important;
 }
 .tableadd tr td select {
   
    margin-bottom: 25px !important;
	border: 1px solid gray;
height: 27px;
}
.dropdown-content
{
	display:none;
}
#table1
{
	margin-top:10px;
	width:100%;
	border-collapse: collapse;
}
#table1 tr
{
	height:40px;
}
#table1 tr td
{
	border:1px solid gray;
	text-align:center;
}
span
{
margin-right: 25px;
}
#table1 tr td input
{
	width:120px;
	border: 1px solid gray;
height: 27px;
}
#table1 tr td select
{
	width:120px;
	border: 1px solid gray;
height: 27px;
}
h5
{
	font-size: 22px;
 border-bottom: 1px solid #055E87 !important;
text-align: center;
width: 114px;
margin: auto auto 35px;
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
position: relative;
  top: 10px;
}
.color
{
    background: rgb(5, 94, 135) none repeat scroll 0% 0%;
    color: white;
    height: 30px !important;
}
.rowadd{
	cursor:pointer;
}

 </style>
 <script>
function frmValidate(){  
  
  if((document.getElementById("print_invoice").checked == false) && (document.getElementById("print_invoice1").checked == false))
   {
     document.getElementById("print_invoice").focus();
	 document.getElementById("errorBox").innerHTML = "Check any button to print invoice";
     return false;
   }
   
}

</script>

<section id="content">

     
        <div class="container">
          <div class="section">

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>delivery/print_bills" method="post" name="invoice_chk_frm" onsubmit="return frmValidate()">
                               

<?php if($sitename!='Stamping'){?>	
<table class="spare_table" style="margin-top: 20px;width: 60%;">
<input type="hidden" id="req_id" name="req_id" value="<?php echo $id; ?>">

<tr><td style="padding-bottom: 30px; padding-left: 60px;"><label><input type="radio" id="print_invoice" class="print_invoice" name="print_invoice" value="with_spare"><span class="spare_charge">With Spare charges</span></label> </td><div id="errorBox"></div></tr>
<tr>
<td style="padding-bottom: 30px; padding-left: 60px;"><label><input type="radio" id="print_invoice1" class="print_invoice" name="print_invoice"  value="without_spare"><span class="spare_charge">Without Spare charges</span></label></td>
</tr>
<tr>
<td style="padding-bottom: 30px; padding-left: 60px;"><button class="btn cyan waves-effect waves-light rowadd" type="submit" name="action">Submit<i class="fa fa-arrow-right"></i></button></td>
</tr>
</table>
<?php } ?>


					
                         
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr><td>	<select id="spare_name" class="spare_name" name="spare_name[]"><option value="">---Select---</option>    </select></td><td><input type="text" name="qty[]"></td><td><input type="text" name="purchase_date[]"></td><td><input type="text" name="purchase_price[]"></td><td><input type="text" name="invoice_no[]"></td><td style="border:none;"><button class="delRowBtn" >Delete</button></td></tr>').appendTo(tbl);        
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>


<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css" />
	
	<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.datetimepicker.full.js"></script>
	
	
	
	
	<script>

$.datetimepicker.setLocale('en');

$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});


var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('.datetimepicker7').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic	
});

 



</script>
</body>

</html>