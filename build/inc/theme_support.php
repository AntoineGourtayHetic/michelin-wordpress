<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
		add_theme_support( 'post-thumbnails' );

  	add_image_size("thumbnail_articles",450,300,false);
  	add_image_size("thumbnail_articles_full",1450,800,false);
  	add_image_size("thumbnail_slide",1500,600,true);
}
add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
   	register_nav_menu( 'header', 'Menu entête' );
		register_nav_menu( 'footer', 'Menu bas de page' );
		register_nav_menu('copyright', 'Menu copyright');
}
function theme_settings_page(){
	?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");
	            submit_button();
	        ?>
	    </form>
		</div>
	<?php
}

function display_footer_title()
{
	?>
    	<input type="text" name="footer_title" id="footer_title" value="<?php echo get_option('footer_title'); ?>" />
    <?php
}
function display_footer_content()
{
	?>
    	<input type="textarea" name="footer_content" id="footer_content" value="<?php echo get_option('footer_content'); ?>" />
    <?php
}
function display_footer_menuTitle()
{
	?>
    	<input type="text" name="footer_menuTitle" id="footer_menuTitle" value="<?php echo get_option('footer_menuTitle'); ?>" />
    <?php
}
function display_footer_coopyright()
{
	?>
    	<input type="text" name="footer_coopyright" id="footer_coopyright" value="<?php echo get_option('footer_coopyright'); ?>" />
    <?php
}
function display_newsletter()
{
	?>
	<input type="text" name="newsletter" id="newsletter" value="<?php echo get_option('newsletter'); ?>" />
	<?php
}
function display_newsletter_title()
{
	?>
	<input type="text" name="newsletter_title" id="newsletter_title" value="<?php echo get_option('newsletter_title'); ?>" />
	<?php
}
function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");

		add_settings_field("footer_title", "Footer title", "display_footer_title", "theme-options", "section");
		add_settings_field("footer_content", "Footer content", "display_footer_content", "theme-options", "section");
		add_settings_field("footer_menuTitle", "Footer menu title", "display_footer_menuTitle", "theme-options", "section");
		add_settings_field("footer_coopyright", "Footer coopyright", "display_footer_coopyright", "theme-options", "section");
		add_settings_field("newsletter", "Newsletter shortcode", "display_newsletter", "theme-options", "section");
		add_settings_field("newsletter_title", "Newsletter title shortcode", "display_newsletter_title", "theme-options", "section");


		register_setting("section", "footer_title");
		register_setting("section", "footer_content");
		register_setting("section", "footer_menuTitle");
		register_setting("section", "footer_coopyright");
		register_setting("section", "newsletter");
		register_setting("section", "newsletter_title");
}
add_action("admin_init", "display_theme_panel_fields");

function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");
