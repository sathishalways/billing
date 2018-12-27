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
    border: 0px solid #eee;
    border-radius: 7;
    width: 55% !important;
    font-size: 12px;
    margin: 0 0 -2px 0;
    padding: 3px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
	height:17px;
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
<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		prob_category = $("#prob_category_"+id).val();
		
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>problemcategory/update_prob_category', 
         data: {'id' : id, 'prob_category' : prob_category},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Problem Category updated");  
              }
          });

        });
}

function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>problemcategory/del_prob_category', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/prob_cat_list";
						}
                alert("Problem Category deleted");  
              }
          });

        });
}


</script>

<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h2>Problem Category List</h2>

          <!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addpro.png" title="Add Problem Category" style="width:24px;height:24px;">Add Problem Category</button>-->
             <i class="fa fa-plus-square" aria-hidden="true" title="Add New Sales" style="position: relative;
    float: right;bottom: 27px;right: 22px;"></i> 
	<hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display">
                    <thead>
                        <tr>
                            <td style="text-align:center;font-size:13px;color:##303f9f;">Problem Name</td>
								<td style="text-align:center;font-size:13px;color:##303f9f;">Model</td>
                           <td style="text-align:center;font-size:13px;color:##303f9f;">Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php foreach($list as $key){ ?>
                        <tr>
                            <td><input type="text" value="<?php echo $key->prob_category; ?>" class="" name="prob_category" id="prob_category_<?php echo $key->id; ?>" readonly></td>
								<td><input type="text" value="<?php foreach($list1 As $key1){ if($key->id==$key1->id){echo $key1->model;}} ?>" class="" name="model" id="model_<?php echo $key->id; ?>" readonly></td>
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>problemcategory/update_prob_cat/<?php echo $key->id; ?>" style="padding-right:10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<!--<a href="#" ><i onclick="DelStatus('<?php echo $key->id; ?>')" class="fa fa-trash-o fa-2x"></i></a>-->
					
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
  


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>