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
            <div class="input-wrapper" style="height: 55%">
              <label for="mensagem">Mensagem</label>
              <textarea name="mensagem"></textarea>
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
      <nav>
        <a class="item" href="<?=get_permalink(get_page_by_title( 'Estrelas' ))?>">
          <span>ESTRELAS</span>
        </a>
        <a class="item"  href="<?=get_permalink(get_page_by_title( 'Staff' ))?>">
          <span>STAFF</span>
        </a>
        <a class="logo"href="<?= home_url(); ?>">
          <img src="<?=get_template_directory_uri();?>/assets/imgs/NAVE-branco.svg">
        </a>
        <a class="item" href="<?=get_permalink(get_page_by_title( 'Sobre' ))?>">
          <span>SOBRE</span>
        </a>
        <a class="item" id="contact_toggle">
          <span>CONTATO</span>
        </a>
      </nav>

  <script>
    
document.addEventListener("DOMContentLoaded", function(e) {
  try {
    const backgroundElem = document.querySelector('.background-video');
    backgroundElem.style.opacity = 1;
  }catch(error) {
    console.log(error.message);
  }

  try {
    const contactToggle = document.querySelector('#contact_toggle');
    const contactForm = document.querySelector('.contact-wrapper');
    contactToggle.addEventListener('click', (e) => {
      contactForm.classList.toggle('active');
    });
  }catch(error) {
    console.log(error.message);
  }


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

  const mainElem = document.querySelector('main.fullscreen');
});


    </script>
	</body>
</html>
