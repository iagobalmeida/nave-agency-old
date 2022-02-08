
<?php
if ( is_home() ) :
    get_header( 'home' );
elseif ( is_404() ) :
    get_header( '404' );
else :
    get_header();
endif;
 ?>
  <a class="fullscreen-item" data-item-number="0">
    <div class="image"></div>
    <span>WORK</span>
  </a>
  <a class="fullscreen-item" data-item-number="1">
    <div class="image"></div>
    <span>ABOUT</span>
  </a>
  <a class="logo" data-item-number="2">
    NAVE
  </a>
  <a class="fullscreen-item" data-item-number="3">
    <div class="image"></div>
    <span>COMMUNITY</span>
  </a>
  <a class="fullscreen-item" data-item-number="4">
    <div class="image"></div>
    <span>CONNECT</span>
  </a>
<?php
if ( is_home() ) :
    get_footer( 'home' );
elseif ( is_404() ) :
    get_footer( '404' );
else :
    get_footer();
endif;
 ?>
