<?php

/**
 * Plugin Name: About Page Helper
 */

class AboutPageHelper
{
    const META_KEY = '_about_us_attachment_ids';

    public static function init()
    {
        add_action('add_meta_boxes', array('AboutPageHelper', 'addMetaBox'));
        add_action('admin_enqueue_scripts', array('AboutPageHelper', 'enqueueMedia'));

        add_action('wp_ajax_aboutUs.attach', array(new PageHelperController, 'attach'));
        add_action('wp_ajax_aboutUs.remove', array(new PageHelperController, 'remove'));
    }

    public static function enqueueMedia()
    {
        wp_enqueue_media();
        wp_enqueue_script('jquery');
        wp_enqueue_script('about-page-helper', plugins_url('js/index.js', __FILE__));
        wp_enqueue_style('about-page-helper-css', plugins_url('css/index.css', __FILE__));
    }

    public static function addMetaBox()
    {
        add_meta_box('team', 'Team photos', array('AboutPageHelper', 'displayMetaBox'), 'page');
    }

    public static function displayMetaBox($post)
    {
        $attachments = self::getPostPhotos($post->ID);

        include dirname(__FILE__) . '/template/metabox.php';
    }

    public static function getPostPhotos($postId)
    {
        return get_post_meta((int)$postId, AboutPageHelper::META_KEY, true);
    }

    public static function getAllImages($postId = 13, $size = 'thumbnail')
    {
        $attachments = self::getPostPhotos((int)$postId);
        $data = array();

        if (count($attachments) === 0) {
            return $data;
        }

        foreach ($attachments as $attachment) {
            $data[] = wp_get_attachment_image_src($attachment, $size);
        }

        return $data;
    }
}

class PageHelperController
{
    public function attach()
    {
        $ids = array();
        $attachments = isset($_POST['attachments']) ? $_POST['attachments'] : array();
        $postId = isset($_POST['post_id']) ? (int)$_POST['post_id'] : null;

        if (count($attachments) < 1) {
            wp_send_json_error('Please, select at least one photo');
            exit;
        }

        if (null === $postId || $postId < 0) {
            wp_send_json_error('Invalid post identifier');
            exit;
        }

        $current = AboutPageHelper::getPostPhotos($postId);

        foreach ($attachments as $attachment) {
            $ids[] = $attachment['id'];
        }

        update_post_meta($postId, AboutPageHelper::META_KEY, array_merge($current, $ids));

        wp_send_json_success();
    }

    public function remove()
    {
        $postId = isset($_POST['post_id']) ? (int)$_POST['post_id'] : null;
        $attachmentId = isset($_POST['attachment_id']) ? (int)$_POST['attachment_id'] : null;

        if (null === $postId || null === $attachmentId) {
            wp_send_json_error(array('message' => 'Invalid post id or attachment id'));
        }

        $attachments = AboutPageHelper::getPostPhotos($postId);

        if (false === $key = array_search($attachmentId, $attachments)) {
            wp_send_json_error(array('message' => 'Unable to find this attachment'));
        }

        unset($attachments[$key]);

        update_post_meta($postId, AboutPageHelper::META_KEY, $attachments);

        wp_send_json_success();
    }
}

AboutPageHelper::init();
