<?php
$args = array(
    'numberposts' => 10,
    'post_type'   => 'streamer'
);

$streamers = get_posts($args);
get_header();
?>
<style>
    .background-video {
        transition: all 500ms ease-in-out;
        filter: hue-rotate(50deg);
    }
</style>
<h1 class="leading">ESTRELAS</h1>
<div class="row full">
    <div class="col">
        Isso é um teste apenas, me ignore... 
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
                    <?php 
                        $url_discord    = isset($customFields['url_discord']) && $customFields['url_discord'] ? $customFields['url_discord'] : '#';
                        $url_twitter    = isset($customFields['url_twitter']) && $customFields['url_twitter'] ? $customFields['url_twitter'] : '#';
                        $url_instagram  = isset($customFields['url_instagram']) && $customFields['url_instagram'] ? $customFields['url_instagram'] : '#';
                        $url_youtube    = isset($customFields['url_youtube']) && $customFields['url_youtube'] ? $customFields['url_youtube'] : '#';
                        $url_facebook   = isset($customFields['url_facebook']) && $customFields['url_facebook'] ? $customFields['url_facebook'] : '#';
                        $url_link       = isset($customFields['url_link']) && $customFields['url_link'] ? $customFields['url_link'] : '#';
                    ?>
                    <a href="<?= $url_discord ?>" class="<?= $url_discord ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/discord-b.svg'); ?>
                    </a>
                    <a href="<?= $url_twitter ?>" class="<?= $url_twitter ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/twitter-b.svg'); ?>
                    </a>
                    <a href="<?= $url_instagram ?>" class="<?= $url_instagram ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/insta-b.svg'); ?>
                    </a>
                    <a href="<?= $url_youtube ?>" class="<?= $url_youtube ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/yt-b.svg'); ?>
                    </a>
                    <a href="<?= $url_facebook ?>" class="<?= $url_facebook ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/face-b.svg'); ?>
                    </a>
                    <a href="<?= $url_link ?>" class="<?= $url_link ? 'disabled' : '' ?>">
                        <?= file_get_contents(get_template_directory_uri().'/assets/icons/link-b.svg'); ?>
                    </a>
                </div>
            </div>
            <img src="<?= $customFields['imagem']; ?>">
        </div>
        <div class="title-wrapper">
            <div class="text">
                <h3 class="title"><?=$streamer->post_name?></h3>
                <h5 class="subtitle">
                    <?=$customFields['subtitulo']?>
                </h5>
            </div>
            <span class="svg-plus"><?= file_get_contents(get_template_directory_uri().'/assets/icons/plus-w.svg'); ?></span>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<pre>
<?php

?>
</pre>

<?php
get_footer();
?>