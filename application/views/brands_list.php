<ul id="country-list">
<?php
foreach($brands_list as $key) {
?>
<li onClick="selectCountry2('<?php echo $key->brand_name; ?>','<?php echo $key->id; ?>');"><?php echo $key->brand_name; ?></li>
<?php } ?>
</ul>
