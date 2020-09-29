<?php

include_once 'views/footer.html';

$username = (!empty($_SESSION["username"])) ? $_SESSION["username"] : "Guest";
$userid   = (!empty($_SESSION["userid"])) ? $_SESSION["userid"] : NULL;

$incartCount = $objshoppie->getInCartProducts();
$_SESSION["incartCount"] = $incartCount;
?>

<input type="hidden" id="incartCount" value="<?= $_SESSION["incartCount"];?>">

<script type="text/javascript">
$(document).ready(function() {
	setTimeout(function() {
		$("#loggedIn_user").html('Hi, '+'<?= $username; ?>'+' !');
	}, 100);
});
</script>
</body>
</html>