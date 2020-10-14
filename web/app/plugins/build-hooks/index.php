<?php
/**
 * Plugin Name: Vercel build hook
 * Plugin URI: https://arden.nl
 * Description: Call webhook when WordPress post is published
 * Version: 1.0
 * Author: Arden
 * Author URI: http://arden.nl
 */  
add_action('publish_future_post', 'vb_webhook_future_post', 10);
add_action('publish_post', 'vb_webhook_post', 10, 2);
add_action('publish_page', 'vb_webhook_post', 10, 2);
add_action('post_updated', 'vb_webhook_update', 10, 3);

function vb_webhook_future_post( $post_id ) {
  vb_webhook_post($post_id, get_post($post_id));
}

function vb_webhook_update($post_id, $post_after, $post_before) {
  vb_webhook_post($post_id, $post_after);
}

function vb_webhook_post($post_id, $post) {
  if ($post->post_status === 'publish') {
    $url = curl_init('https://api.vercel.com/v1/integrations/deploy/QmXqr83QNUVDpt3vmHHQVgb2VPXNjFMiva4ieWeepEMNsB/zVSUsIh4DL');
    curl_setopt($url, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
    curl_exec($url);
  }
}
?>