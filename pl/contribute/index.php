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
    
    <div id="doc" class="yui-t7">
		<a name="top" />
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
				<div class="para">
					<h2><?php echo $_t['h2_general']; ?></h2>
					<p>
						<?php echo $_t['contribute_general_1']; ?><br />
						<?php echo $_t['contribute_general_2']; ?><br />
						<?php echo $_t['contribute_general_3']; ?><br />
						<?php echo $_t['contribute_general_4']; ?><br />&nbsp;<br />
						<span style="font-weight:bold;"><?php echo $_t['contribute_general_remark']; ?></span>
					</p>
					<h2><?php echo $_t['choose_profile']; ?></h2>
					<p><ul>
						<li><a href="#documenter"><?php echo $_t['profile_documenter']; ?></a></li>
						<li><a href="#graphical"><?php echo $_t['profile_graphical']; ?></a></li>
						<li><a href="#ambassador"><?php echo $_t['profile_ambassador']; ?></a></li>
						<li><a href="#technical"><?php echo $_t['profile_technical']; ?></a></li>
						<li><a href="#translator"><?php echo $_t['profile_translator']; ?></a></li>
						<li><a href="#web"><?php echo $_t['profile_web']; ?></a></li>
						<li><a href="#donator"><?php echo $_t['profile_donator']; ?></a></li>
					</ul></p>
					<a name="documenter">
						<h3><?php echo $_t['profile_documenter']; ?></h3>
					</a>
					<p>
						<span style="font-weight: bold;"><?php echo $_t['contribute_role']; ?> : </span>
						<?php echo $_t['document_role']; ?><br />&nbsp;<br />
						<span style="font-weight: bold;"><?php echo $_t['contribute_skills']; ?> :</span><br />
						<ul><?php foreach ( $_t['document_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<span style="font-weight: bold;"><?php echo $_t['contribute_examples']; ?> :</span><br />
						<ul><?php foreach ( $_t['document_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							}?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="graphical">
						<h3><?php echo $_t['profile_graphical']; ?></h3>
					</a>
					<p>
						<span style="font-weight: bold;"><?php echo $_t['contribute_role']; ?> : </span>
						<?php echo $_t['graphical_role']; ?><br />&nbsp;<br />
						<span style="font-weight: bold;"><?php echo $_t['contribute_skills']; ?> :</span><br />
						<ul><?php foreach ( $_t['graphical_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<span style="font-weight: bold;"><?php echo $_t['contribute_examples']; ?> :</span><br />
						<ul><?php foreach ( $_t['graphical_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="ambassador">
						<h3><?php echo $_t['profile_ambassador']; ?></h3>
					</a>
					<p>
						<?php echo $_t['contribute_role']; ?> : <?php echo $_t['ambassador_role']; ?><br />&nbsp;<br />
						<?php echo $_t['contribute_skills']; ?> :<br />
						<ul><?php foreach ( $_t['ambassador_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<?php echo $_t['contribute_examples']; ?> :<br />
						<ul><?php foreach ( $_t['ambassador_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="technical">
						<h3><?php echo $_t['profile_technical']; ?></h3>
					</a>
					<p>
						<?php echo $_t['contribute_role']; ?> : <?php echo $_t['technical_role']; ?><br />&nbsp;<br />
						<?php echo $_t['contribute_skills']; ?> :<br />
						<ul><?php foreach ( $_t['technical_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<?php echo $_t['contribute_examples']; ?> :<br />
						<ul><?php foreach ( $_t['technical_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="translator">
						<h3><?php echo $_t['profile_translator']; ?></h3>
					</a>
					<p>
						<?php echo $_t['contribute_role']; ?> : <?php echo $_t['translator_role']; ?><br />&nbsp;<br />
						<?php echo $_t['contribute_skills']; ?> :<br />
						<ul><?php foreach ( $_t['translator_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<?php echo $_t['contribute_examples']; ?> :<br />
						<ul><?php foreach ( $_t['translator_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="web">
						<h3><?php echo $_t['profile_web']; ?></h3>
					</a>
					<p>
						<?php echo $_t['contribute_role']; ?> : <?php echo $_t['web_role']; ?><br />&nbsp;<br />
						<?php echo $_t['contribute_skills']; ?> :<br />
						<ul><?php foreach ( $_t['web_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<?php echo $_t['contribute_examples']; ?> :<br />
						<ul><?php foreach ( $_t['web_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
					<a name="donator">
						<h3><?php echo $_t['profile_donator']; ?></h3>
					</a>
					<p>
						<?php echo $_t['contribute_role']; ?> : <?php echo $_t['donator_role']; ?><br />&nbsp;<br />
						<?php echo $_t['contribute_skills']; ?> :<br />
						<ul><?php foreach ( $_t['donator_skills'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<?php echo $_t['contribute_examples']; ?> :<br />
						<ul><?php foreach ( $_t['donator_example'] as $item ) {
								echo '<li>'.$item.'</li>';
							} ?></ul><br />
						<a href="#top"><?php echo $_t['ancor_top']; ?></a>
					</p>
				</div>
            </div>
        </div>
    </div>
</body>
</html>
