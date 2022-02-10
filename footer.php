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
      </main>
      <nav>
        <a class="item" href="<?=get_permalink(get_page_by_title( 'Estrelas' ))?>">
          <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
          <span>ESTRELAS</span>
        </a>
        <a class="item">
          <img src="https://images.newscientist.com/wp-content/uploads/2020/08/19163900/credit_irina-dmitrienko-_-alamy.jpg?crop=16:9,smart&width=1200&height=675&upscale=true">
          <span>STAFF</span>
        </a>
        <a class="logo" href="<?= home_url(); ?>">
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
  <script>
    
document.addEventListener("DOMContentLoaded", function(e) {
  try {
    const headerToggle = document.querySelector('#headerToggleNav');
    headerToggle.addEventListener('click', (e) => {
      const nav = document.querySelector('nav');
      nav.classList.toggle('active');
    });
  }catch(error) {
    console.log(error.message);
  }

  try {
    const colCards = document.querySelectorAll('.col-card .img-wrapper');
    colCards.forEach((colCard) => {
      colCard.addEventListener('click', (e) => {
        const colCardImg = colCard.querySelector('.img-text');
        colCardImg.classList.toggle('active');
      });
    });
  }catch(error) {
    console.log(error.message);
  }

  try {
    const main = document.querySelector('main');
    main.addEventListener('scroll', function() {
      const scroll = main.scrollTop;
      const max = main.scrollHeight;
      console.log('scroll', scroll);
      console.log('max', max);
      const perc = scroll/max*100;
      const backgroundElem = document.querySelector('.background');
      console.log(perc);
      backgroundElem.style.filter = `hue-rotate(45deg), brightness(${perc/100});`;
      backgroundElem.style.backgroundPosition = `0% ${perc}%`;
    });
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
    },
    {
      left: '-65%',
      top: '-35%',
      'grid-template-columns': '1fr .5fr 1.5fr',
      'grid-template-rows': '2fr .5fr 1fr'
    },
    {
      left: '-50%',
      top: '-50%',
      'grid-template-columns': '1fr 1.5fr 1fr',
      'grid-template-rows': '1fr 1.5fr 1fr'
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
      'grid-template-rows': '1fr .5fr 2fr'
    },
    {
      left: '-50%',
      top: '-50%',
      'grid-template-columns': '1fr .5fr 1fr',
      'grid-template-rows': '1fr .5fr 1fr',
    },
  ]
  if(mainElem) {
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
        anime({
          ...mainAnimationConfig,
          'grid-template-columns':  mainState['grid-template-columns'],
          'grid-template-rows':     mainState['grid-template-rows'],
        });
        anime({
          ...backgroundAnimationConfig,
          'top':    mainState['top'],
          'left':   mainState['left'],
          'filter': `hue-rotate(${itemNumber*10}deg)`
        });
      });
      mainItemElem.addEventListener('mouseleave', function() {
        anime({
          ...mainAnimationConfig,
          'grid-template-columns':  mainStateDefault['grid-template-columns'],
          'grid-template-rows':     mainStateDefault['grid-template-rows']
        });
        anime({
          ...backgroundAnimationConfig,
          'top':  mainStateDefault['top'],
          'left': mainStateDefault['left'],
          'filter': `hue-rotate(0deg)`
        });
      })
    });
  }
});


    </script>
	</body>
</html>
