<?php
add_action('admin_init', 'email_template_hide_title');
function email_template_hide_title() {
     remove_post_type_support('email_template', 'title');
}
?>