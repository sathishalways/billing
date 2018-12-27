<?php 

$count=$_POST['countid'];

?>
<tr>
		  <td style="width: 25.2%;"><input type="text" value="" name="brand_name[]" id="brand-<?php echo $count;?>" class="brandsss"><div id="lname<?php echo $count;?>"></div><div id="dpt_error1<?php echo $count;?>" style="color: #ff0000;position: relative; top: 0px;left: 0px;"></div> </td><td><a class="delRowBtn btn btn-primary fa fa-trash"></a>
</tr>

<script type="text/javascript">
$(document).ready(function()
{ 
$(".category").change(function(){
	 //alert("ffff");

var catid=$(this).closest(this).attr('id');
var id=$(this).val();
//alert("catttt: "+catid);
//alert("iddddd: "+id);
var dataString = 'id='+ id;
$('#sub'+catid+ "> option").remove(); 
$.ajax
({
type: "POST",
url: "<?php  echo base_url(); ?>Brand/getsub_category",
data: dataString,
cache: false,
success: function(data)
{    $('#sub'+catid).append("<option value=''>---Select---</option>");
		$.each(data, function(index, data){//alert(data.subcat_name);
            $('#sub'+catid).append("<option value='"+data.id+"'>"+data.subcat_name+"</option>");
            });
} 
});
    
});

$(document.body).delegate(".delRowBtn", "click", function(){
        $(this).closest("tr").remove();        
    }); 
});

</script>

<script>
$(document).ready(function(){
	
	$(document).on("keyup","#brand-<?php echo $count;?>", function(){
		
		var a=$(this).attr('id').split('-').pop();
		
		var brand = $(this).val();
		
		 if(brand)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url(); ?>Brand/brand_validation',
  data: {
   brand:brand,
  },
  success: function (data) {
  if(data == 0){
        
        $('#dpt_error1'+a).html('');    
        
            
        }
        else{
			$('#dpt_error1'+a).html('Brand Name Already Exist').delay(1000).fadeOut(); 
			$('#brand-'+a).val('');
			return false;
             
            
        }
  }
  });
 }
		
	});
	
	$(".registersubmit").click(function(event){
			//alert("xcfg");
			if($("#brand-<?php echo $count;?>").val()==""){
				$("#lname<?php echo $count;?>").text("Enter Brand Name").show().css({'color':'#ff0000','position':'relative','bottom':'10px'});
				event.preventDefault();
			}
		});
		
		$("#brand-<?php echo $count;?>").keyup(function(){
			if($(this).val()==""){
				$("#lname<?php echo $count;?>").show();
			}
			else{
				$("#lname<?php echo $count;?>").fadeOut('slow');
			}
		})
		
	
});


</script>