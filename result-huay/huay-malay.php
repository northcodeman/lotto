<?php
include("include/navbar.php")
?>

<div id="here">
<section id="services" style="padding-top:150px ;">
	<div class="text-center" style="margin-top: 20vh;">
	<span class="loader-1"></span>
	</div>
	<div class="" style="margin-top: 30vh;"></div>
</div>
</section>

<?php
include("include/footer.php")
?>
<script>
$.ajax({
	type: "GET",
	url: "../api/apihuay.php?huay=huay-malay",
	success: function (response) {
		$("#here").html(response);
	}
});
</script>
