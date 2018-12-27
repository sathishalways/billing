



<tbody>
						<?php 
						foreach($get_searchByStatus as $key){?>
                        <tr>
						 <td><?php echo $key->request_id; ?></td>
                            <td><?php echo $key->company_name; ?></td>
							     
								<td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->model;} } ?></td>
							  
                        
							<td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){
											echo $key1->machine_status; 
											
											 }  }?></td>	
						
							
                            <td><?php echo $key->request_date; ?></td>
							
							
							 <td><?php foreach($service_req_listforEmp as $key2){
										if($key2->request_id==$key->id){ echo $key2->emp_name; } } 
										
										/* foreach($service_req_listfordealers as $dealerkey2){
										if($dealerkey2->request_id==$key->id){ echo $dealerkey2->customer_name; } } */
										
										?></td>
							
							 
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->site; } } ?></td>
							 
							
                            <td><?php foreach($service_req_list1 as $key1){
										if($key1->request_id==$key->id){ echo $key1->service_loc; } } ?></td>
							 
							<td class="options-width">
								<select name="service_status[]" id="service_status_<?php echo $key->id; ?>">
									<option value="">---Select---</option>
									<?php foreach($status_list as $statuskey){
										  if($statuskey->id==$key->status){
											 // if(in_array($statuskey->id, $statuslists[$i])){
								    ?>
									<option selected="selected" value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } else {?>
									<option value="<?php echo $statuskey->id.','.$key->id; ?>"><?php echo $statuskey->status; ?></option>
									<?php } } ?>

								</select>			
							</td>
					
					<td class="options-width">
					
					
					<a href="<?php echo base_url(); ?>service/update_service_req/<?php echo $key->id; ?>" style="padding-left:15px;" ><i class="fa fa-floppy-o fa-2x"></i></a>
					
					
					</td>
					
                        </tr>
                         <?php } ?>                    
                     </tbody>
					 
					 <script>
$(document).ready(function(){
   $('[id^="service_status_"]').change(function(){//alert("hiisss");
   var id = $(this).val();
   //alert(id);
   var arr = id.split(',');
   var statusid = arr['0'];
   var reqid = arr['1'];
   var data_String;
    data_String = 'statusid='+statusid+'&reqid='+reqid;
	
    $.post('<?php  echo base_url(); ?>service/update_service_status',data_String,function(data){ 
          //var data= jQuery.parseJSON(data);
		  alert("Service status changed");
           //$('#actaddress').val(data.Address1),
       });
   });
 });
</script>