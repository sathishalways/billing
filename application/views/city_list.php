<ul id="country-list">
<?php
foreach($city_list as $key) {
?>
<li onClick="selectCountry('<?php echo $key->city; ?>');"><?php echo $key->city; ?></li>
<?php } ?>
</ul>
