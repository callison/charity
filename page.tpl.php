<?php //$Id: page.tpl.php,v 1.3 2009/10/08 16:12:13 callison Exp $ ?>
<?php print render($page['header']); ?>

<div id="container">
	<div class="header<?php if (theme_get_setting('charity_girl') == 0) { print " no-girl"; } ?>">
		<div id="logo">
			<?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
	      	<?php if ($site_slogan) { ?><div class='site-slogan'><p><?php print $site_slogan ?></p></div><?php } ?>
			<?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
		</div>
		<?php if ($page['header_left']): ?>
			<div id="header_left"><?php print render($page['header_left']); ?></div>
		<?php endif; ?>
	</div>

	<div id="main_menu">
		<?php if ($main_menu) { ?><?php print theme('links__system_main_menu', array(
                                        'links' => $main_menu,
                                        'attributes' => array(
                                          'class' =>'links',
                                          'id' => 'navlist'),
                                         )); ?><?php } ?>
	</div>

	<div id="content">

		<div id="<?php if ( $page['sidebar'] ) { print "main_content"; (theme_get_setting('charity_sidebar-side') == 'left') ? print "-right" : ''; } else { print "wide"; } ?>">
			<?php print $breadcrumb ?>
			<?php print render($page['help']); ?>
                  <?php print render($page['highlighted']); ?>
			<?php if ($page['content_top']): ?>
				<?php print render($page['content_top']); ?>
			<?php endif; ?>
			<?php print $messages ?>
			<h1 class="title"><?php print $title ?></h1>
			<?php print render($page['content']); ?>
			<?php if ($page['content_bottom']): ?>
				<?php print render($page['content_bottom']); ?>
			<?php endif; ?>
		</div>
		<?php if ($page['sidebar']): ?>
		<div id="sidebar<?php if(theme_get_setting('charity_sidebar-side') == 'left') { print "-left"; } ?>">
			<?php print render($page['sidebar']); ?>
		</div>
		<?php endif; ?>
		<div id="footerline"></div>
	</div>
	
	<?php if (isset($secondary_menu)) { ?><div class="secondary_menu"><?php print theme('links', $secondary_menu, array('class' =>'secondary-links', 'id' => 'secondary-navlist')) ?></div><?php } ?>
	
	<div id="footer">
		<?php print render($page['footer']); ?>
		Drupal theme by <a href="http://tentmaker.allisonmission.com">Tentmaker Web Design</a> | Valid <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a>
	</div>
</div>
<?php print render($page['page_bottom']); ?>
