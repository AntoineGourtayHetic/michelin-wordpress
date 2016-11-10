</div>

<footer class="page-footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"><?php echo get_option('footer_title'); ?></h5>
        <p class="grey-text text-lighten-4"><?php echo get_option('footer_content'); ?></p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text"><?php echo get_option('footer_menuTitle'); ?></h5>
        <ul>
					<?php $args=array(
						'theme_location' => 'footer', // nom du slug
						'menu' => 'footer_fr', // nom à donner cette occurence du menu
						'menu_class' => 'menu_footer', // class à attribuer au menu
						'menu_id' => 'menu_id', // id à attribuer au menu
						// voir les autres arguments possibles sur le codex
						);
						wp_nav_menu($args); ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
			<nav>
	        <div class="nav-wrapper">
							<?php echo get_option('footer_coopyright'); ?>
	            <ul id="nav-mobile" class="left hide-on-small-and-down">
	                <?php $args=array(
	                  'theme_location' => 'copyright', // nom du slug
	                  'menu' => 'footer_copyright_fr', // nom à donner cette occurence du menu
	                  'menu_class' => 'menu_footer_copyright', // class à attribuer au menu
	                  'menu_id' => 'menu_id_copyright', // id à attribuer au menu
	                  // voir les autres arguments possibles sur le codex
	                  );
	                  wp_nav_menu($args); ?>
	            </ul>
	        </div>
	    </nav>
    </div>
  </div>
</footer>


        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>
