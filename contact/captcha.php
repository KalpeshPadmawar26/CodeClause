<?php
	if (isset($_POST['submit'])) {
		$captcha_sum = $_POST['captcha-sum'];
		$captcha_input = $_POST['captcha-input'];
		if ($captcha_sum == $captcha_input) {
			echo "<p>Captcha entered successfully!</p>";
		} else {
			echo "<p>Failed to enter captcha.</p>";
		}
	}
?>