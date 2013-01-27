<?php
if(function_exists('register_sidebars')) {
	register_sidebars(1,
                    array(
                      'before_widget' => '<div id="%1$s" class="module %2$s">',
                      'after_widget' => '</div>'
                    )
  );
}
