
<?php
if ( is_home() ) :
    get_header( 'home' );
elseif ( is_404() ) :
    get_header( '404' );
else :
    get_header();
endif;
 ?>
    <div class="outline"></div>
    <video autoplay muted loop class="background-video">
      <source src="assets/imgs/space-purple.webm" type="video/mp4">
    </video>
    <main class="fullscreen">
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
    </main>
    <nav class="fullscreen">
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>WORK</span>
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>ABOUT</span>
      </a>
      <a class="logo">
        NAVE
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>COMMUNITY</span>
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>CONNECT</span>
      </a>
    </nav>
    <!--Transition JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
if ( is_home() ) :
    get_footer( 'home' );
elseif ( is_404() ) :
    get_footer( '404' );
else :
    get_footer();
endif;
 ?>
