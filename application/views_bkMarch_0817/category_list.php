<ul id="country-list">
<?php
foreach($category_list as $key) {
?>
<li onClick="selectCountry('<?php echo $key->product_category; ?>','<?php echo $key->id; ?>');"><?php echo $key->product_category; ?></li>
<?php } ?>
</ul>
