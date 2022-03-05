<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
      <form class="contact-wrapper">
          <span class="close">
            <?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?>
          </span>
          <h1 class="leading">CONTATO</h1>
          <div class="contact-form">
            <div class="input-wrapper">
              <label for="nome">Nome</label>
              <input type="text" name="nome">
            </div>
            <div class="input-wrapper">
              <label for="email">E-mail</label>
              <input type="email" name="email">
            </div>
            <div class="input-wrapper" style="height: 45%">
              <label for="mensagem">Mensagem</label>
              <textarea name="mensagem"></textarea>
            </div>
            <div class="input-wrapper">
              <button>Enviar</button>
            </div>
          </div>
          <div class="contact-link">
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/discord-w.svg'); ?>
            </a>
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/twitter-w.svg'); ?>
            </a>
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/insta-w.svg'); ?>
            </a>
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/yt-w.svg'); ?>
            </a>
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/face-w.svg'); ?>
            </a>
            <a href="#">
              <?= file_get_contents(get_template_directory_uri().'/assets/icons/link-w.svg'); ?>
            </a>
          </div>
        </form>
    </main>
    
    <nav class="fullscreen">
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>ESTRELAS</span>
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>STAFF</span>
      </a>
      <a class="logo">
        <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg">
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>SOBRE</span>
      </a>
      <a class="item">
        <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
        <span>CONTATO</span>
      </a>
    </nav>
    <!--Transition JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    
document.addEventListener("DOMContentLoaded", function(e) {

  try {
    const contactToggle = document.querySelector('#contact_toggle');
    const contactForm = document.querySelector('.contact-wrapper');
    const contactClose = document.querySelector('.contact-wrapper .close');
    contactToggle.addEventListener('click', (e) => {
      contactForm.classList.toggle('active');
    });
    contactClose.addEventListener('click', (e) => {
      contactForm.classList.toggle('active');
    });
  }catch(error) {
    console.log(error.message);
  }


  try {
    const backgroundElem = document.querySelector('.background-video');
    backgroundElem.style.opacity = 1;
  }catch(error) {
    console.log(error.message);
  }
  
  const backgroundElem = document.querySelector('.background-video');
  const mainElem = document.querySelector('main.fullscreen');
  const mainStateList = [
    {
      left: '-35%',
      top: '-35%',
      'grid-template-columns': '2fr .5fr 1fr',
      'grid-template-rows': '1.5fr .5fr 1fr',
      'hue-rotate': '50deg'
    },
    {
      left: '-65%',
      top: '-35%',
      'grid-template-columns': '1fr .5fr 1.5fr',
      'grid-template-rows': '2fr .5fr 1fr',
      'hue-rotate': '-90deg'
    },
    {
      left: '-50%',
      top: '-50%',
      'grid-template-columns': '1fr 1.5fr 1fr',
      'grid-template-rows': '1fr 1.5fr 1fr',
      'hue-rotate': '0deg'
    },
    {
      left: '-35%',
      top: '-65%',
      'grid-template-columns': '2fr .5fr 1fr',
      'grid-template-rows': '1fr .5fr 2fr'
    },
    {
      left: '-65%',
      top: '-65%',
      'grid-template-columns': '1fr .5fr 1.5fr',
      'grid-template-rows': '1fr .5fr 2fr',
      'hue-rotate': '90deg'
    },
    {
      left: '-50%',
      top: '-50%',
      'grid-template-columns': '1fr .5fr 1fr',
      'grid-template-rows': '1fr .5fr 1fr',
      'hue-rotate': '0deg'
    },
  ]
  if(mainElem) {
    const animeHueCycle = anime({
      targets:  backgroundElem,
      filter:   'hue-rotate(360deg)',
      loop:     true,
      autoplay: false,
      easing:   'linear',
      duration: 6000
    });
    const mainStateDefault = mainStateList[mainStateList.length-1];
    const mainAnimationConfig = {
      targets:  mainElem,
      easing:   'linear',
      duration: 300
    };
    const backgroundAnimationConfig = {
      targets: backgroundElem,
      easing: 'cubicBezier(0.285, 0.240, 0.100, 0.935)',
      duration: 3000
    }
    const mainItemElemList = [...document.querySelectorAll('[data-item-number]')];
    mainItemElemList.forEach(mainItemElem => {
      const itemNumber = mainItemElem.getAttribute('data-item-number');
      const mainState = mainStateList[itemNumber];
      mainItemElem.addEventListener('mouseover', function() {
        if(itemNumber == 2) {
          animeHueCycle.play();
        }
        anime({
          ...mainAnimationConfig,
          'grid-template-columns':  mainState['grid-template-columns'],
          'grid-template-rows':     mainState['grid-template-rows'],
        });
        anime({
          ...backgroundAnimationConfig,
          'top':    mainState['top'],
          'left':   mainState['left'],
          'filter': `hue-rotate(${mainState['hue-rotate']})`
        });
      });
      mainItemElem.addEventListener('mouseleave', function() {
        if(itemNumber == 2) {
          animeHueCycle.pause();
        }
        anime({
          ...mainAnimationConfig,
          'grid-template-columns':  mainStateDefault['grid-template-columns'],
          'grid-template-rows':     mainStateDefault['grid-template-rows']
        });
        anime({
          ...backgroundAnimationConfig,
          'top':  mainStateDefault['top'],
          'left': mainStateDefault['left'],
          'filter': `hue-rotate(${mainStateDefault['hue-rotate']})`
        });
      });
    });
  }
});


    </script>
	</body>
</html>
