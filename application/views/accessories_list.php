<style>
table.dataTable tbody td{
	padding: 0px 10px !important;
}
input
{
	/*border-style: none !important;*/
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:block;
}
#data-table-simple_length {
	display:block;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 5px 18px;
    border: 1px solid #dbd0e1;
}
thead {
    border-bottom: 1px solid #d0d0d0;
    border: 1px solid #522276;
    background:#6c477d;
        color:#fff;
	font-weight:bold;
	font-size:13px;
}
table.dataTable.no-footer tr td {
	border: 1px solid #522276 !important;
	padding:4px 10px;
}
.divider{
	width:100%;
}
.acc_name{
	border-style: none !important; 
}
.fa-plus-square{
	color: #522276;
}
a {
    color: #522276;
}
input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #522276;
    border-radius: 0;
    outline: none;
    /* height: 3.9rem; */
    width: 100%;
    font-size: 0.9em;
    margin: 0;
    padding: 0;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
label {
    color: #522276;
}
hr{
	border-top:1px solid #522276;
}
input[type=search]{
	width:55%;
	border:1px solid #522276;
	padding:0px 8px;
}
input:focus{
	border:1px solid #522276;
}
input:active{
	border:1px solid #522276;
}
a:hover{
	color: #522276;
}
a:focus{
	color: #522276;
}
a:active{
	color: #522276;
}
</style>

<script>

 function UpdateStatus(id){//alert(id);
		//id = $("#status_id").val(); 
		acc_name = $("#acc_name_"+id).val();
		
		//$(function()
        //{
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>accessories/update_accessories', 
         data: {'id' : id, 'acc_name' : acc_name},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
                alert("Accessories updated");  
              }
          });

        //});
}

function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>accessories/del_accessories', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/accessories_list";
						}
                alert("Accessories deleted");  
              }
          });

        });
}


</script>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		    <h2 class="header" style="display:inline-block;">Accessories List</h2> 
			<a href="<?php echo base_url(); ?>pages/add_accessories"style="color: #FFF; border-radius: 5px;position: relative; float: right; top: 30px; left: 100px;"><i class="fa fa-plus-square" aria-hidden="true" title="Add Accessories"></i></a>

			<hr>
            <!--<div class="divider"></div>-->
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple"  cellspacing="0" style="margin-top:2%;">
                    <thead>
                        <tr>
							<th>S.No.</th>
                            <th>Accessories Name</th>
                           <th>Action</th>
                        </tr>
                    </thead>
                 
                
                    <tbody>
					<?php $i=1;foreach($list as $key){ ?>
                        <tr>
						<td><?php echo $i;?></td>
                            <td><input type="text" value="<?php echo $key->accessory; ?>" class="acc_name" name="acc_name" id="acc_name_<?php echo $key->id; ?>" readonly></td>
                           
							<td class="options-width">
					
				<a href="<?php echo base_url(); ?>accessories/update_accessories_name/<?php echo $key->id;?>" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<!--<a href="#" style="padding-right:10px;" onclick="UpdateStatus('<?php echo $key->id; ?>')"><i class="fa fa-floppy-o fa-2x"></i></a>-->
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
    <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.js"></script>   
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>--> 
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>