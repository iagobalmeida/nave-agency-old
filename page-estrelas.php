<?php
$args = array(
    'numberposts' => 10,
    'post_type'   => 'streamer'
);

$streamers = get_posts($args);
get_header();
?>
<h1 class="leading">ESTRELAS</h1>
<div class="row full">
    <div class="col">
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
        We’re an award-winning, purpose-driven, creative agency specializing in strategy, content creation, and social media. Our mission is to leverage the power of technology, art, and culture to create a more connected, engaging, and just world.
    </div>
</div>
<div class="row mb-0">
    <?php foreach($streamers as $streamer): ?>
    <?php $customFields = get_fields($streamer->ID); ?>
    <div class="col-card mb-60">
        <div class="img-wrapper">
            <div class="img-text">
                <?=$streamer->post_content;?>
                <div class="social-icons">
                    <?php if($customFields['url_discord']): ?>
                        <a href="<?=$customFields['url_discord']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/discord-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($customFields['url_twitter']): ?>
                        <a href="<?=$customFields['url_twitter']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/twitter-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($customFields['url_instagram']): ?>
                        <a href="<?=$customFields['url_instagram']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/insta-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($customFields['url_youtube']): ?>
                        <a href="<?=$customFields['url_youtube']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/yt-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($customFields['url_facebook']): ?>
                        <a href="<?=$customFields['url_facebook']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/face-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if($customFields['url_link']): ?>
                        <a href="<?=$customFields['url_link']?>">
                            <?= file_get_contents(get_template_directory_uri().'/assets/icons/link-b.svg'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <img src="<?= $customFields['imagem']; ?>">
        </div>
        <h3 class="title"><?=$streamer->post_name?></h3>
        <h5 class="subtitle"><?=$customFields['subtitulo']?></h5>
    </div>
    <?php endforeach; ?>
</div>
<pre>
<?php

?>
</pre>

<?php
if (is_home()) :
    get_footer('home');
elseif (is_404()) :
    get_footer('404');
else :
    get_footer();
endif;
?>