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
  
   <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <script type='text/javascript' src='js/addrow.js'></script>

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
 <link rel="stylesheet" href="css/chosen.css">
      <script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>    
<style>
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
	 border-radius:5px;
   
   /* margin-bottom: 25px !important;*/
}
.tableadd tr td input {
    width: 215px;
}
.tableadd
{
	margin-bottom:35px;
}
.tableadd tr td label {
	font-weight:bold;
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

            <h5 class="breadcrumbs-title">Add Product Brand Name</h5>

            <div class="divider"></div>
         
            <div id="basic-form" class="section">
			
			
			   <div class="card-panel">
			
              <div class="row">
			  
			    <div class="col-md-1">
			  </div>
			  
                <div class="col-md-10">
                 
             
                 
                      <form >
                               


<table id="myTable" class="tableadd">
<tr><td><label>Category Name</label></td><td><label>Sub-Category Name</label></td><td><label>Brand Name</label></td></tr>
<tr>
<td> <select >
           <option value="">---Select---</option>
           <option value="Motorola">Air Conditioner</option>
		  <option value="Sony Ericsson">Television</option>
		   <option value="Nokia">Digital Camera</option>
		    <option value="Apple">Mobile Phone</option>
           <option value="Samsung">Cash Counting Machine</option>
		    <option value="Samsung">Washing Machine</option>
		 		
          </select></td><td> <select >
           <option value="">---Select---</option>
           <option value="Motorola">SubCategory 1</option>
		  <option value="Sony Ericsson">SubCategory 2</option>
		   <option value="Nokia">SubCategory 3</option>
		    <option value="Apple">SubCategory 4</option>
           <option value="Samsung">SubCategory 5</option>
		    <option value="Samsung">SubCategory 6</option>
		 		
          </select></td>
		  <td><input type="text" value="" name=""></td>
</tr>

</table>

<a class="link" href='' onclick='$("<tr><td><select ><option value=\"\">---Select---</option><option value=\"Motorola\">Air Conditioner</option><option value=\"Sony Ericsson\">Television</option> <option value=\"Nokia\">Digital Camera</option><option value=\"Apple\">Mobile Phone</option><option value=\"Samsung\">Cash Counting Machine</option><option value=\"Samsung\">Washing Machine</option></select></td><td><select ><option value=\"\">---Select---</option><option value=\"\">SubCategory 1</option><option value=\"\">SubCategory 2</option> <option value=\"\">SubCategory 3</option><option value=\"\">SubCategory 4</option><option value=\"\">SubCategory 5</option><option value=\"\">SubCategory 6</option></select></td> <td><input type=\"text\" value=\"\" name=\"\"></td></tr>").appendTo($("#myTable")); return false;'>Add SubCategory</a><button class="btn cyan waves-effect waves-light " type="submit" name="action">Submit
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
  


    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="js/materialize.js"></script>

    <script type="text/javascript" src="js/prism.js"></script>

    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
   
    <script type="text/javascript" src="js/plugins.js"></script>
       <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
	   <script src="js/chosen.jquery.js" type="text/javascript"></script>
  
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
</body>

</html>