
            <nav >
               
                    <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'navbar-nav menu_wraper',
                'items_wrap' => '<div id="%1$s" class="nav-item %2$s">%3$s</div>',
                'item_spacing' => 'preserve'
              )
            );
            ?>
            </nav>

 