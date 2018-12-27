<tr>
	<td style="padding:10px 0;"><input type="text" name="qc_param[]" id="qc_param-<?php echo $count; ?>" class="qcparam" maxlength="20"></td>
	<td style="padding:10px 0;"><input type="text" name="qc_value[]" id="qc_value-<?php echo $count; ?>" class="qcvalue" maxlength="6"></td>
	<td style="border:none;text-align:center;"><a id="delbtn" class="delrow"   onClick="$(this).closest('tr').remove();"><i class="fa fa-trash" style="color:#5f3282;"></i></a></td>
	
</tr>
<script type='text/javascript' src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
	$(function(){
		$(".qcparam").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^a-zA-Z0-9.]/g,""));
		});
		$(".qcvalue").bind("keyup blur", function(){
			$(this).val($(this).val().replace(/[^0-9.]/g,""));
		});
	});
</script>
