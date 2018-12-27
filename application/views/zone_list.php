<ul id="country-list">
<?php
foreach($zone_list as $key) {
?>
<li onClick="selectCountry4('<?php echo $key->service_loc; ?>','<?php echo $key->id; ?>');"><?php echo $key->service_loc; ?></li>
<?php } ?>
</ul>
