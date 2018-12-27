<script type='text/javascript'>//<![CDATA[ 
$(function(){
$('[name="cand_no"]').on('change', function() {
    // Not checking for Invalid input
    if (this.value != '') {
        var val = parseInt(this.value, 10);
        var rows = $('#studentTable tr'),
            rowCnt = rows.length - 1; // Allow for header row
        
        if (rowCnt > val) {
            for (var i = rowCnt; i > val; i--) {
                rows[i].remove();
            }
        }
        if (rowCnt < val) {
            for (var i = 0; i < val - rowCnt; i++) {
                // Clone the Template
                var $cloned = $('.template tbody').clone();				
                // For each Candidate append the template row
                $('#studentTable tbody').append($cloned.html());
            }
        }
    }
});
});//]]>  

</script>
<style>
#studentTable .skill td
{
	background: #055E87 none repeat scroll 0% 0%;
border: 1px solid #B3B3B3;
padding: 8px;
color: #FFF;
}
#studentTable tr td
{
	border: 1px solid #B3B3B3;
text-align: center;
padding: 10px;
}

#studentTable tr td select:focus
{
	border:1px solid #055E87;
}
input.number
{
	border-radius:5px;
	
}
input{
	border:none !important;
	text-align:center;
}
</style>

<section id="content">

     
        <div class="container">
          <div class="section">

            <h5 class="breadcrumbs-title">New Employee</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    
			  
                <div class="col-md-12">
                 
                      <form action="<?php echo base_url(); ?>Employee/add_service_skill" method="post" name="frmEmp" >
                     

   <table id="studentTable"  border="0">
      <tr class="skill">
         <td>Category  <input name="empid" type="hidden" value="<?php echo $id; ?>"/></td>
         <td>Sub-category</td>
		 <td>Brand</td>
         <td>Model</td> 
	<?php foreach($servicecatlist as $key1){ ?>		 
        <td><?php echo $key1->service_category; ?></td>   
	<?php } ?>	
      </tr>
	   <?php foreach($list as $key){ ?>
      <tr>
	  
 <td><input name="p_category[]" type="text" value="<?php echo $key->category; ?>"/></td>
 <td><input name="sub_category[]" type="text" value="<?php echo $key->subcategory; ?>"/></td>
 <td><input name="brand[]" type="text" value="<?php echo $key->brand_name; ?>"/></td>
 <td><input name="p_model[]" type="text" value="<?php echo $key->model; ?>"/><input name="ids[]" type="hidden" value="<?php echo $key->id; ?>"/></td> 
	
		<?php foreach($servicecatlist as $key1){ ?>		
         <td><input name="service_cat<?php echo $key->id; ?>[]" value="<?php echo $key1->service_category; ?>" type="checkbox" /></td>
		 <?php } ?>	
		 
      </tr>
	<?php } ?>
   </table>





<button class="btn cyan waves-effect waves-light " type="submit" >Submit
                               <i class="fa fa-arrow-right"></i>
                            </button>
       
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
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>