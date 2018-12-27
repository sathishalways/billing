
<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>


<style>
table.display
{border:1px solid #ccc;
	margin-top:15px;
}
table.display th,td
{
	padding:10px;
	border:1px solid #ccc;
}
#data-table-simple_paginate
{
	display:none;
}
<!--.dataTables_info
{
	visibility:hidden;
}
.dataTables_paginate paging_simple_numbers
{
visibility:hidden;	
}-->
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
table.no_border tr td
{
	border:1px solid white !important;
}
table.dataTable.hover tbody tr:hover,table.dataTable.hover tbody tr.odd:hover,table.dataTable.hover tbody tr.even:hover,table.dataTable.display tbody tr:hover,table.dataTable.display tbody tr.odd:hover,table.dataTable.display tbody tr.even:hover{background-color:#fff}
</style>

<div class="pull-right" style="margin-right:145px;margin-top:9px;">
<img src="<?php echo base_url()  ?>assets/images/x1.png" style="height:35px;float:left;"  onclick="tableToExcel('export', 'W3C Example Table')">
<img src="<?php echo base_url()  ?>assets/images/p1.png" style="margin-left:8px;height:35px;" onClick="printDiv('table-datatables')">
</div>


<?php
						$i=1;
						$f=0;
						$c=0;
						$s=0;
						$t=0;
						$pending=0;
						$salary=0;
						$subtotal=0;
						$profit=0;
						$profit_subtot=0;
						$count=0;

if(!empty($month))
					{
						
						$count = count($month);
						
						$salary = $count * 60;
	foreach($month as $report)
					{                
					
						
					
					$f+=$report->agn_charge;
					$c+=$report->conveyance;
					$s+=$report->stamping_charge;
					$t+=$report->penalty;
					$pending+=$report->pending_amt;
					$subtotal=$s+$t;
					
					$bustotal = 1000;
					
					$profit_subtot = $subtotal - $i - $c - $salary - 1000;
					
					$profit = $profit_subtot - $pending;
					
					} 
					
					}
					
					?>
<section id="content">
        
      
        <div class="container">
          <div class="section">
		  
		  
		    <h4 class="header">Stamping Monthly Report List</h4>

          
            <div class="divider"></div>
            
	 <div id="table-datatables" >
           
               <div class="row">
			  
			
              
			
               <div class="col-md-12">
			 
			 <?php
			
					echo "<table id='export' class='responsive-table display' cellspacing='0' >";
					  
					echo "<thead>";
					
					echo "<th>S.No</th>";
					echo "<th>RequestID</th>";
					echo "<th>CustomerName</th>";
					echo "<th>Model</th>";
					echo "<th>CmrPaid</th>";
					echo "<th>stampingCharge</th>";
					echo "<th>PenaltyCharge</th>";
					echo "<th>AgentCharge</th>";
					echo "<th>ConveyanceCharge</th>";
					echo "<th>PendingAmount</th>";
					echo "<th>Status</th>";
					
					echo "</thead>";
					
					// $body .= $display;
			 if($i!=1){ $i=1; } 
 
             
					//if(!empty($month))
					//{				
					 if ($month)
					 {					
					foreach($month as $row)
					{                				
					
                     echo "<tr>";
					 echo "<td>".$i."</td>";
                     echo "<td>".stripslashes($row->request_id)."</td>";
                     echo "<td>".stripslashes($row->customer_name)."</td>";
                     echo "<td>".stripslashes($row->model)."</td>";
                     echo "<td>".stripslashes($row->cmr_paid)."</td>";
                     echo "<td>".stripslashes($row->stamping_charge)."</td>";
                     echo "<td>".stripslashes($row->penalty)."</td>";
                     echo "<td>".stripslashes($row->agn_charge)."</td>";
                     echo "<td>".stripslashes($row->conveyance)."</td>";
                     echo "<td>".stripslashes($row->pending_amt)."</td>";
                     echo "<td>".stripslashes($row->status)."</td>";
                           
							
                     echo "</tr>";
					 $i++;
					}
					 
					}
					 else
					 {
						  echo "<h4 align='center'>No Data Available</h4>"; 
					 }
					
					echo "<tr>";
					echo "</tr>";
					echo "<tr style='visibility: collapse;'>";
					
					echo "<td colspan='10' style='border:1px solid #ccc !important; '></td>";
					
					echo "</tr>";
					echo "<tr>";
					echo "<td class='no_border' style='border:1px solid white !important;background-color:#fff; '></td>";
					echo "<td colspan='8' class='no_border' style='border:1px solid white !important;'>";
					
					echo "<table class='table table-responsive no_border' id='export' style='border:1px solid white !important; '>";
			  
					echo "</tr>";
				   
					echo "<td style='border:1px solid white !important; '>Total stamping & penalty charge<span class='pull-right'>:</span></td>";
				   
					echo "<td style='border:1px solid white !important; '>". $subtotal."</td>";
					
					echo "<td class='border' style='border:1px solid white !important; '></td><td style='border:1px solid white !important; '>Total Stamping recevied<span class='pull-right'>:</span></td>";
					
					echo "<td style='border:1px solid white !important; '>".$count."</td>";
					
					echo "</tr>";
				
					echo "<tr>";
					echo "<td style='border:1px solid white !important; '>Total Agent_Charge<span class='pull-right'>:</span></td>";
			  
					echo "<td style='border:1px solid white !important; '>".$f."</td> <td style='border:1px solid white !important; ' class='border'></td>";
			  
					echo "</tr>";
					echo "<tr>";
					echo "<td style='border:1px solid white !important; '>Total Conveyance_Charge<span class='pull-right'>:</span></td>";
					echo " <td style='border:1px solid white !important; '>".$c."</td> <td style='border:1px solid white !important; ' class='border'></td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td style='border:1px solid white !important; '>Salary<span class='pull-right'>:</span></td>";
					echo "<td style='border:1px solid white !important; '>".$salary."</td> <td class='border' style='border:1px solid white !important; '></td><td style='border:1px solid white !important; '>Profit<span class='pull-right'>:</span></td>";
			  
					echo " <td style='border:1px solid white !important; '>".$profit_subtot."</td>";
					echo "</tr>";
					echo " <tr>";
					echo " <td style='border:1px solid white !important; '>Bus Pass<span class='pull-right'>:</span></td>";
			  
					echo " <td style='border:1px solid white !important; '>1000</td>  <td class='border' style='border:1px solid white !important; '></td> <td style='border:1px solid white !important; '>Outstanding Amount<span class='pull-right'>:</span></td>";
			 
					echo " <td style='border:1px solid white !important; '>".$pending."</td>";
					echo " </tr>  ";
					echo " <tr >";
					echo " <td style='border:1px solid white !important; '><b>Profit<span class='pull-right'>:</span></b></td>";
			 
					echo " <td style='border:1px solid white !important; '><b>".$profit_subtot."</b></td> <td class='border' style='border:1px solid white !important; ' ></td> <td style='border:1px solid white !important; '><b>Net Profit<span class='pull-right'>:</span></b></td>";
			 
					echo " <td style='border:1px solid white !important; '><b>".$profit."</b></td>";
					echo " </tr>";
			  
					echo "   <tr>";
					echo " <td style='border:1px solid white !important; '></td>";
					echo " <td style='border:1px solid white !important; '></td>";
					echo "  <td style='border:1px solid white !important; '></td>";
					echo "  </tr>";
			  
			
					echo "</table>";
					//calculation
					
					
					
					echo "</table>";
					 
					 
					
			?>
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