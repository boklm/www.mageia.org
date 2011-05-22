<?php require '../../contribute/contribute.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>" />
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php # include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
	<?php include '../../contribute/contribute_contents.php'; ?>

</body>
</html>
