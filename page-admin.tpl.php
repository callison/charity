<?php //$Id: page-admin.tpl.php,v 1.3 2009/10/08 16:12:13 callison Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"
  <?php print $rdf_namespaces ?>>

<head profile="<?php print $grddl_profile ?>">
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>

<body>
<div id="container">
	<div class="header<?php if (theme_get_setting('charity_girl') == 0) { print " no-girl"; } ?>">
		<div id="logo">
			<?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
	      	<?php if ($site_slogan) { ?><div class='site-slogan'><p><?php print $site_slogan ?></p></div><?php } ?>
			<?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
		</div>
		<?php if ($header_left): ?>
			<div id="header_left"><?php print $header_left; ?></div>
		<?php endif; ?>
	</div>
	<div id="main_menu">
		<?php if (isset($main_menu)) { ?><?php print theme('links', $main_menu, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?>
	</div>

	<div id="content">
		<div id="<?php if ( $sidebar ) { print "main_content"; (theme_get_setting('charity_sidebar-side') == 'left') ? print "-right" : ''; } else { print "wide"; } ?>">
			<?php print $breadcrumb ?>
			<?php print $help ?>
			<div class="block" id="right-toggle"><a>[<?php print t('Expand Page'); ?>]</a></div>
			<?php if ($content_top): ?>
				<?php print $content_top; ?>
			<?php endif; ?>
			<h1 class="title"><?php print $title ?></h1>
			<div class="tabs"><?php print $tabs ?></div>
			<?php print $messages ?>
			<?php print $content; ?>
			<?php if ($content_bottom): ?>
				<?php print $content_bottom; ?>
			<?php endif; ?>
		</div>
		<?php if ($sidebar): ?>
		<div id="sidebar<?php if(theme_get_setting('charity_sidebar-side') == 'left') { print "-left"; } ?>">
			<?php print $sidebar ?>
		</div>
		<?php endif; ?>
		<div id="footerline"></div>
	</div>
	
	<?php if (isset($secondary_menu)) { ?><div class="secondary_menu"><?php print theme('links', $secondary_menu, array('class' =>'secondary-links', 'id' => 'secondary-navlist')) ?></div><?php } ?>
	
	<div id="footer">
		<?php print $footer ?>
		Drupal theme by <a href="http://tentmaker.allisonmission.com">Tentmaker Web Design</a> | Valid <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a>
	</div>
</div>
<script type="text/javascript">
/* <![CDATA[ */
		$(document).ready(function(){
			$("#right-toggle").click( function() {
        $("#right-toggle").hide();
        $("#main_content").width("660px");
			});
    });
/* ]]> */
</script>
<?php print $closure; ?>
</body>

</html>