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
    <script>
    
document.addEventListener("DOMContentLoaded", function(e) {
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
