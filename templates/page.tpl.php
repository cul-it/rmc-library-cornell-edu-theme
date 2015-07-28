<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>


<header class = "CUL-header">

	<a href="http://www.cornell.edu/"><img class="cu_logo" src="/sites/all/themes/rmc_library_bootstrap/img/CULogo-white.svg"></a>
	
	<div class="search-navigation-items"><a href="http://newcatalog.library.cornell.edu/">Library Catalog</a>
	<a href="/search/node">Search This Site</a>
	<a href="http://www.cornell.edu/search/">Search Cornell</a>
	</div>
	
	<div class="CUL-header-links">
	<a id="header-link-CUL" href="https://www.library.cornell.edu/">Cornell University Library</a><br/>
	<a id="header-link-RMC" href="/">Rare and Manuscript Collections</a>
	</div>
	
</header>

<header class="RMC-subheader row">
    
    <div class="krochpanes col-sm-5 col-sm-offset-7 hidden-xs">
    <img src="/sites/all/themes/rmc_library_bootstrap/img/kroch_panes_2.png" class ="img-responsive center-block">            
    </div>
    
    <div class="quicklinks col-sm-5 col-sm-offset-7 col-xs-12">
    <a href="">Find Materials</a> <a style="padding-left: 20px;" href="">Register & Request items</a> <a style="padding-left: 20px;" href="">Visit</a>
    </div>
  
</header>
  
<nav id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container-fluid">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</nav>

<div class="main-container container-fluid">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section id ="main-body" <?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>


<footer class="footer"><!-- took out container class -->
  <?php print render($page['footer']); ?>
  
  <div class="row">

	<div class="col-sm-3 hidden-xs">
	<h1>SERVICES</h1>
	
	Research Services Overview<br/>
	How to Find Rare Books & Manuscripts<br/>
	Registration & Guidelines for Use<br/>
	Reproductions & Permissions<br/>
	Information for Visitors<br/>
	Teaching Services<br/>
	Funding for Research<br/>
	Ask a Librarian
	</div>
	
	<div class="col-sm-3 hidden-xs">
	<h1>COLLECTIONS</h1>
	
	Collections Overview<br/>
	Collection Highlights<br/>
	Photographs & Visual Materials<br/>
	Digital Collections<br/>
	Archival Guides<br/>
	Recent Acquisitions<br/>
	Collection History<br/>
	Collecting Policies
	</div>
	
	<div class="col-sm-3 hidden-xs">
	<h1>EXHIBITIONS & EVENTS</h1>
	
	Current Exhibitions<br/>
	Past & Online Exhibitions<br/>
	Outreach & Events<br/>
	News & Social Media
	</div>
	
	<div class="col-sm-3 hidden-xs">
	<h1>ABOUT US</h1>
	
	<a href="/about/kroch">Overview</a><br/>
	The Carl A. Kroch Library<br/>
	Frequently Asked Questions<br/>
	Search this Website<br/>
	Staff Directory<br/>
	Make a Gift<br/>
	</div>

</div>

<div class="footer-social-media-icons">
<a href="https://www.facebook.com/Cornell.Rare" title="Follow us on Facebook"><span class="fa fa-facebook-square"></span></a> 
<a href="https://instagram.com/rarecornell/" title="Follow us on Instagram"><span class="fa fa-instagram"></span></a> 
<a href="http://cornellrmc.tumblr.com/" title="Follow us on Tumblr"><span class="fa fa-tumblr-square"></span></a> 
<a href="https://twitter.com/CornellRMC" title="Follow us on Twitter"><span class="fa fa-twitter-square"></span></a> 
<a href="https://www.youtube.com/user/CornellRMC" title="Follow us on YouTube"><span class="fa fa-youtube-square"></span></a>
</div>

<div class="visible-xs"><br/><a href="">Feedback</a></div>

<hr style="clear: right; margin: 0px 0px 5px 0px; padding: 0px; border-color: #666;">
<p style="float: right; margin-left: 30px;"><a href="https://confluence.cornell.edu/pages/viewpage.action?pageId=90087303" title="RMC Staff-Only Wiki">Staff Wiki</a></p>
<div style="color: #ccc;">&copy; 2015  Division of Rare and Manuscript Collections, 2B Carl A. Kroch Library, Cornell University, Ithaca, NY 14853.<br/>
Phone: 607-255-3530 | Fax: 607-255-9524</div>


</footer>

