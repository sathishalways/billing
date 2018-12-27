<script>
function DelStatus(id){
	
		$(function()
        {
            $.ajax({
         type: "POST",
         url: '<?php  echo base_url(); ?>Employee/del_employee', 
         data: {'id' : id},
         dataType: "text",  
         cache:false,
         success: 
              function(data){ 
					var r=confirm("Are you sure want to delete");
					if (r==true)
						{
							window.location = "<?php  echo base_url(); ?>pages/emp_list";
						}
                alert("Employee deleted");  
              }
          });

        });
}
</script>
<style>
hr {
    margin-top: -22px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
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
    padding:4px 0px;
    border: 1px solid #dbd0e1;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 0px 5px !important;
}
table.dataTable.no-footer tr td {
    border: 1px solid #522276; !important;
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
}
thead {
    /*border-bottom: 1px solid #d0d0d0;*/
    border: 1px solid #522276;
    background:#6c477d;
    color:#fff;
	font-weight:bold;
	font-size:12px;
}
/*thead {
    border-bottom: 1px solid #eeeeee;
    border: 1px solid #eeeeee;
    color: #303f9f;
	background-color:#fff;
	
}*/
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: left;
	margin-right:102px;
}
#data-table-simple_length {
    display: block;
	
}
.dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding-top: 0.755em;
    margin-left: 120px;
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em;
    margin-right: 102px;
}
input[type=text]{
    background-color: transparent;
    border:none;
    border-radius: 7;
    width: 55% !important;
    font-size: 1.5rem;
    margin: 0 0 15px 0;
    padding: 1px;
    box-shadow: #ccc;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
}
input[type=search]{
    background-color: transparent;
    border: 1px solid #522276;
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
table > thead > tr > th:last-child{
	width:70px !important;
}
a {
    color: #522276;
}
a:hover {
    color: #9678ab;
}
a:focus {
    color: #522276;
}
a:active {
    color: #522276;
}
body{    background-color: #fff;}
</style>

<section id="content">
        
      
        <div class="container-fluid">
          <div class="section">
		  
		  
		   <!-- <h4 class="header" style="display:inline-block; height: 36px;
background: #FFF;
margin-bottom: -20px;
padding: 10px;border:1px solid #055E87; border-bottom:none;">Employee List</h4> <a href="employee_add.php" style="border:1px solid #055E87;padding: 15px; border-bottom:none; margin-left:-5px;padding-bottom: 2px;">NEW EMPLOYEE</a>-->


  <h2>Employee List</h2>
          <!--<button type="button" class="btn btn-primary btnstyle"><img src="<?php echo base_url(); ?>assets/images/addemployee.png" title="Add Employee" style="width:24px;height:24px;">Add Employee</button>-->
          <a href="<?php  echo base_url(); ?>pages/add_emp"><i class="fa fa-plus-square" aria-hidden="true" title="Add New Employee" style="position: relative; bottom: 27px; left: 88%;"></i></a>
           <hr>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0" >
                    <thead>
                        <tr>
						  <th>Emp ID</th>
                            <th>Emp Name</th>
                            <th>Designation</th>
                          
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>  
							   
							<th>Action</th>
                        </tr>
                    </thead>
                 
                 
                 
                    <tbody>
					 <?php foreach($list as $key){?>
                        <tr>
						 <td><?php echo $key->emp_id; ?></td>
                            <td><?php echo $key->emp_name; ?></td>
                            <td><?php echo $key->emp_designation; ?></td>
                          
                            <td><?php echo $key->emp_mobile; ?></td>
                             <td><?php echo $key->emp_email; ?></td>
							   <td><?php echo $key->emp_city; ?></td>
							      
							<td class="options-width" style="text-align:center;">
					
					
					<a href="<?php echo base_url(); ?>Employee/update_employee/<?php echo $key->id; ?>" style="padding-right:10px;" ><i class="fa fa-pencil-square-o fa-2x"></i></a>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script> -->
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>    
     <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>

</html>