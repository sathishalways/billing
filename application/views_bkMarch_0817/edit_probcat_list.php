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
	 margin-right:10px;
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
 </style>

<section id="content">

     
        <div class="container-fluid">
          <div class="section">

            <h2>Edit Problem Category</h2>

          <hr>
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form action="<?php echo base_url(); ?>problemcategory/update_prob_category" method="post">
                               


<table id="myTable" class="tableadd">

<!--<tr>
<td><label style="width:180px;font-weight:bold;">Problem Category Name</label></td>
<td><label style="width:180px;font-weight:bold;">Model</label></td>
</tr>-->
<?php foreach($list As $key){?>
  <div class="col-md-12" style="padding:0px">
    <div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Problem Category Name</label>
        <input type="text" name="prob_cat_name" class="corporate" value="<?php echo $key->prob_category; ?>"><input type="hidden" name="prob_catid" class="corporate" value="<?php echo $key->id; ?>">
	</div>
	<div class="col-md-3">
        <label style="width:180px;font-weight:bold;">Model</label>
        <select name="model" id="model">
           <option value="">---Select---</option>
           <?php foreach($modellist as $modelkey){
				 if($modelkey->id==$key->modelid){
			?>
			<option selected="selected" value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } else{?>
		 		<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } } ?>
		 		
          </select>
    </div>
  </div>





<!--<tr>
<td><input type="text" name="prob_cat_name" class="corporate" value="<?php echo $key->prob_category; ?>"><input type="hidden" name="prob_catid" class="corporate" value="<?php echo $key->id; ?>"></td>
<td><select name="model" id="model">
           <option value="">---Select---</option>
           <?php foreach($modellist as $modelkey){
				 if($modelkey->id==$key->modelid){
			?>
			<option selected="selected" value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } else{?>
		 		<option value="<?php echo $modelkey->id; ?>"><?php echo $modelkey->model; ?></option>
		   <?php } } ?>
		 		
          </select></td>
</tr>-->
<?php } ?>
</table>

<a class="link" href='' onclick='$("<tr><td><input type=\"text\" name=\"prob_cat_name[]\" /></td><td><select name=\"model[]\" data-placeholder=\"Select Model...\" class=\"chosen-select\" tabindex=\"2\"><option value=\"\">---Select---</option><?php foreach($modellist as $modelkey){ ?><option value=\"<?php echo $modelkey->id; ?>\"><?php echo $modelkey->model; ?></option><?php } ?></select></td></tr>").appendTo($("#myTable")); return false;'>Add Category</a><button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
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