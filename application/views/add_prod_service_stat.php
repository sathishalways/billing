<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(function(){
    var tbl = $("#table1");
    
    $("#addRowBtn").click(function(){
        $('<tr>  <td><input type="text" value="" name="" class="" id=""></td>  <td><input type="text" value="" name="" class="" id=""></td>  </tr>').appendTo(tbl);  
		
    });
   
    $(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    });    
    
});
});//]]>  

</script>
<style>
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
 </style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">Add Service Status</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>prodservicestat/add_prod_service_status" method="post">
                               


<table id="myTable" class="tableadd">

<tr>
<td><label style="font-weight:bold;">Service Status Name</label></td>
</tr>
<tr>
<td><input type="text" name="status_name[]" class="corporate"></td>
</tr>
</table>

<a class="link" href='' onclick='$("<tr><td><input type=\"text\" name=\"status_name[]\" /></td></tr>").appendTo($("#myTable")); return false;'>Add Service</a><button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
                               <i class="fa fa-arrow-right"></i>

                              </button>


<table class="tableadd">



<tr>
<td ></td>
<td style="padding-top: 25px;">
 
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
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>