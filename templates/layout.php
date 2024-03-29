<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php if (isset($data['seo']['title'])) echo $data['seo']['title'] . ' - '; ?>
		Plugo
	</title>
	<?php if (isset($data['seo']['description'])) { ?>
		<meta name="description" content="<?= $data['seo']['description'] ?>">
	<?php } ?>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<?php include('_header.php'); ?>
	<main>
		<?php require $templatePath ?>
	</main>
	<?php include('_footer.php'); ?>
</body>
</html>