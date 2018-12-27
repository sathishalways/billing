<ul id="country-list">
<?php
foreach($category_list as $key) {
?>
<li onClick="selectCountry1('<?php echo $key->subcat_name; ?>','<?php echo $key->id; ?>');"><?php echo $key->subcat_name; ?></li>
<?php } ?>
</ul>
