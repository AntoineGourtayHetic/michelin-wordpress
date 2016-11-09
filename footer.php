</div>

<footer class="page-footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"><?php
					$footer_title = get_option('footer_title');
					echo $footer_title;
				?></h5>
        <p class="grey-text text-lighten-4"><?php
					$footer_content = get_option('footer_content');
					echo $footer_content;
				?></p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text"><?php
					$footer_menuTitle = get_option('footer_menuTitle');
					echo $footer_menuTitle;
				?></h5>
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
    <div class="container"><?php
			$footer_coopyright = get_option('footer_coopyright');
			echo $footer_coopyright;
		?><a class="grey-text text-lighten-4 right" href="#!">Mentions légales</a>
    </div>
  </div>
</footer>


        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>
