<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('  <tr><td>  <select>  <option>---Select---</option>  <option>Spare 1</option>  <option>Spare 2</option>  <option>Spare 3</option>  <option>Spare 4</option>  </select>  </td>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td> <td style="border:none;"><button class="delRowBtn" style="font-size:20px;"><i class="fa fa-trash-o"></i></button></td></tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>
    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).attr("value")=="ready"){

                    $(".box").not(".ready").hide();

                    $(".ready").show();

                }

                else if($(this).attr("value")=="delivery"){

                    $(".box").not(".delivery").hide();

                    $(".delivery").show();

                }

                else if($(this).attr("value")=="blue"){

                    $(".box").not(".blue").hide();

                    $(".blue").show();

                }

                else{

                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>
  <style>
  .tableadd tr td input {
    width: 210px !important;
	border:none;
 }
 
 .tableadd tr td label{
	 width:150px !important;
	 font-weight:bold;
	 
 }
 .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

          box-shadow:none !important;

        }
		
  </style>


<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Quote Review</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form >
                               

<table class="tableadd">
<tr>
<td><label>Customer Name</label>:</td><td><input type="text" name="" class="" value="Manikandan"  ></td><td><label>Product Name</label>:</td><td><input type="text" name="" class="" value="Motorola" readonly></td>
</tr>
<tr>
<td><label>Date Of Request</label>:</td><td><input type="text" name="" class="date" value="29/8/2015" ></td><td><label>Engineer Name</label>:</td><td><input type="text" name="" class="" value="Vishnu" ></td>
</tr>
<tr>
<td><label>Site</label>:</td><td><input type="text" name="" class="" value="OnSite" ></td><td><label>Location</label>:</td><td><input type="text" name="" class="" value="Chennai" ></td>
</tr>
<tr>
<td><label>Problem</label>:</td><td><input type="text" name="" class="" value="Repair" ></td><td><label>Machine Status</label>:</td><td><input type="text" name="" class="" value="Warranty" ></td>
</tr>
<!--
<tr>
<td><label>Spare Charges</label>:</td><td><input type="text" name="" class="" value="700" ></td><td><label>Service Location</label>:</td><td><input type="text" name="" class="" value="Chennai" ></td>
</tr>
<tr>
<td><label>Labour Charges</label>:</td><td><input type="text" name="" class="" value="300" ></td>
</tr>
<tr>
<td><label>Conveyance Charges</label></td><td><input type="text" name="" class="" value="0" readonly></td>
</tr>
<tr>
<td><label>Total Amount</label>:</td><td><input type="text" name="" class="" value="1000" ></td>
</tr>
<tr>
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="" class="" value="4/9/2015" ></td>
</tr>-->


</table>


 <table id="table1" class="tableadd2" style="margin-bottom: 20px;">
  
  


 
  
  <tr class="back" > 
  <td>Spare Name</td>
  <td>Quantity</td>
  <td>Amount</td>   
  </tr>
   <tr>
  <td>
  <select>
  <option>---Select---</option>
  <option>Spare 1</option>
  <option>Spare 2</option>
  <option>Spare 3</option>
  <option>Spare 4</option>
  </select>
  </td>
  <td><input type="text" value="" name="" class="" id=""></td>
  <td><input type="text" value="" name="" class="" id=""></td>

 
  </tr>
  
  </table>


<a id="addRowBtn"  style="background: rgb(179, 179, 179) none repeat scroll 0% 0% !important;
padding: 10px;
color: white; border-radius:5px;">Add Row</a>

<table class="tableadd">
<tr>
<td><label>Spare Tax Amount</label>:</td><td><input type="text" name="" class="" value="70" ></td><td><label>Spare Total Charges</label>:</td><td><input type="text" name="" class="" value="700" ></td>
</tr>

<tr>
<td><label>Labour Charges</label>:</td><td><input type="text" name="" class="" value="300" ></td><td><label>Conveyance Charges</label>:</td><td><input type="text" name="" class="" value="0" ></td>
</tr>

<tr>
<td><label>Total Amount</label>:</td><td><input type="text" name="" class="" value="1000" ></td><td><label>Service Location</label>:</td><td><input type="text" name="" class="" value="Chennai" ></td>
</tr>

<tr>
<td><label >Status</label></td>
<td>
<select>
<option>---Select---</option>
<option value="ready">Ready For Delivery</option>
<option value="delivery">Delivered</option>
</select>
</td>

</tr>

<tr class="ready box">
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="" class="date" value="4/9/2015" ></td>
</tr>
<tr class="ready box">
<td><label>Comments</label>:</td><td><input type="text" name="" class="" value="Delivered" ></td>
</tr>
<tr class="delivery box">
<td><label>Date Of Delivery</label>:</td><td><input type="text" name="" class="date" value="4/9/2015" ></td>
</tr>
<tr class="delivery box">
<td><label>Comments</label>:</td><td><input type="text" name="" class="" value="Delivered" ></td>
</tr>
<tr class="delivery box">
<td><label>Assign To</label>:</td><td><input type="text" name="" class="" value="Vishnu" ></td>
</tr>

</table>




<table class="tableadd" style="margin-top: 25px;">



<tr >
<td ><button class="btn cyan waves-effect waves-light " type="submit" name="action">Send Quote to Customer
                               <i class="fa fa-arrow-right"></i>

                              </button>
 <button class="btn cyan waves-effect waves-light " type="submit" name="action">Confirm
                               <i class="fa fa-arrow-right"></i>

                              </button>
</td>
</tr>

</table>
           
                        </div>
                     
                  
                      </form>
                  
                
                </div>
             
             <div class="col-md-1">
			  </div>
              </div>
			  </div>
            </div>

			
			
			
			
       
          </div>

   
 

      </div>
  </section>


  </div>
  

  </div>
  
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

   
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">    
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  
	  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>   
	  
      <script type='text/javascript' src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
  
  
  


<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
$(document).on('click', function() {
$('.date').each(function() {
        $(this).datepicker({
            changeMonth: true,
            changeYear: true,
    dateFormat: 'dd-mm-yy',
			yearRange: "1950:2055"
        });
});
});

}//]]>  

</script>  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>