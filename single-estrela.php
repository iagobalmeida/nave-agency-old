<?php
if ( is_home() ) :
  get_header( 'home' );
elseif ( is_404() ) :
  get_header( '404' );
else :
  get_header();
endif;
?>

<h1>ESTRELA</h1>
<pre>
<?php

print_r(array_keys(get_defined_vars()));
var_dump($estrela);
?>
</pre>
<?php
if ( is_home() ) :
  get_footer( 'home' );
elseif ( is_404() ) :
  get_footer( '404' );
else :
  get_footer();
endif;
?>