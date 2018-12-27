<!DOCTYPE html>
<html lang="en">



<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  
 
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
   
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <link href="js/bootstrap.min.css" rel="stylesheet" type="text/css" />
 
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
table.dataTable tbody td{
	padding: 8px 10px !important;
}
input
{
	border-style: none !important;
	height: 2rem !important;
}
#data-table-simple_filter
{
	display:none;
}
table.dataTable thead .sorting {
    background-image: url("../images/sort_bo.png") !important;
}
table.dataTable thead .sorting_asc {
    background-image: url("../images/sort_a.png") !important;
}
</style>


  
</head>

<body>

  <div id="loader-wrapper">
    <!--  <div id="loader"></div>    -->    
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>





  <header id="header" class="page-topbar">
      
       <?php include('header.php'); ?>
      
  </header>


 
  <div id="main">
   
    <div class="wrapper">

     <?php include('menu.php'); ?>
  
      <section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Product Brand List</h4>

          
            <div class="divider"></div>
            
            <!--DataTables example-->
            <div id="table-datatables">
           
              <div class="row">
              
			
               <div class="col-md-12">
                  <table id="data-table-simple"  cellspacing="0" style="width:70%; margin-top:2%;">
                    <thead>
                        <tr>
                            <td>Category Name</td>
							 <td>Sub-Category Name</td>
							 <td>Brand Name</td>
                           <td>Action</td>
                        </tr>
                    </thead>
                 
                
                    <tbody>
                        <tr>
                            <td><input type="text" value="Air Conditioner" class="" name=""></td>
							  <td><input type="text" value="Subcategory 1" class="" name=""></td>
							    <td><input type="text" value="Brand 1" class="" name=""></td>
                           
							<td class="options-width">
					
					
					<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					
					</td>
                        </tr>
                       <tr>
                            <td><input type="text" value="Television" class="" name=""></td>   
                           <td><input type="text" value="SubCategory 2" class="" name=""></td>
  <td><input type="text" value="Brand 2" class="" name=""></td>						   
							<td class="options-width">					
				<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					</td>
                        </tr>
                      <tr>
                            <td><input type="text" value="Digital Camera" class="" name=""></td>
							  <td><input type="text" value="SubCategory 3" class="" name=""></td>
							    <td><input type="text" value="Brand 3" class="" name=""></td>
                           
							<td class="options-width">
					
					<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					</td>
                        </tr>
                      <tr>
                            <td><input type="text" value="Mobile Phone" class="" name=""></td>
							  <td><input type="text" value="SubCategory 4" class="" name=""></td>
							    <td><input type="text" value="Brand 4" class="" name=""></td>
                           
							<td class="options-width">
					
					
				<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					</td>
                        </tr>
                      <tr>
                            <td><input type="text" value="Cash Counting Machine" class="" name=""></td>
							  <td><input type="text" value="SubCategory 5" class="" name=""></td>
							    <td><input type="text" value="Brand 5" class="" name=""></td>
                           
							<td class="options-width">
					
					
				<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					</td>
                        </tr>
                       
                      <tr>
                            <td><input type="text" value="Washing Machine" class="" name=""></td>
							  <td><input type="text" value="SubCategory 6" class="" name=""></td>
							    <td><input type="text" value="Brand 6" class="" name=""></td>
                           
							<td class="options-width">
					
					
				<a href="#" style="padding-right:10px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
				
					<a href="#" ><i class="fa fa-trash-o fa-3x"></i></a>
					</td>
                        </tr>
                        
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
  


    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>    
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>