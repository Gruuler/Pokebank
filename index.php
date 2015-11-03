
<head>
	<link type="text/css" rel="stylesheet" href="style\bootstrap.css">
	<link type="text/css" rel="stylesheet" href="bootstrap.css">
	<?php

	?>
</head>

<body>
	<?php
		include 'elements\header.php';
	?>

	<div class ="row">

		<div class = "col-md-1">
		</div>

		<div class="col-md-10">
		
			<div class="row">
				<div class="col-md-8">
					Test
				</div>
				<div class="col-md-4">

					<form>
						Username:<br>
						<input type="text" name="user"><br>
						Password:<br>
						<input type="password" name="password"><br>
						<input type="button" value="Submit">
					</form>

				</div>
			</div>

		</div>

		<div class="col-md-1">
		</div>

	</div>

	<?php
		include 'elements\footer.php';
	?>
</body>
