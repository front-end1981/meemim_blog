<?php


/**
 * Class Meemim_Team_Module
 */
class Meemim_Team_Module extends Meemim_Core_BaseModule
{
    /**
     * Triggered when the resolver doing initialization of module
     */
    public function onInit()
    {
        parent::onInit();

        $this->addMetaBox();
        $this->addAssets();
    }

    /**
     * Adds meta box to the page editor.
     *
     * @see https://codex.wordpress.org/Function_Reference/add_meta_box
     */
    public function onAddMetaBoxes()
    {
        add_meta_box(
            'meemim_team',
            'Team',
            array($this, 'onMetaBoxLoaded'),
            'page'
        );
    }

    public function onMetaBoxLoaded($page)
    {
        /** @var Rsc_Http_Response $response */
        $response = call_user_func(
            array($this->getController(), 'indexAction'),
            $page
        );

        echo $response->getContent();
    }

    public function loadStyles()
    {
        wp_enqueue_style(
            'meemim-team',
            $this->getLocationUrl() . '/assets/css/team.css'
        );

        wp_enqueue_style(
            'meemim-font-awesome',
            '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'
        );
    }

    public function loadScripts()
    {
        wp_enqueue_media();
        wp_enqueue_script('jquery');

        wp_enqueue_script(
            'meemim-knockout',
            'https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'
        );

        wp_enqueue_script(
            'meemim-team',
            $this->getLocationUrl() . '/assets/js/team.js',
            array('jquery', 'meemim-knockout')
        );
    }

    /**
     * Listen 'add_meta_boxes' event to register own meta box.
     *
     * @see https://codex.wordpress.org/Function_Reference/add_meta_box
     */
    private function addMetaBox()
    {
        add_action('add_meta_boxes', array($this, 'onAddMetaBoxes'));
    }

    private function addAssets()
    {
        add_action('admin_enqueue_scripts', array($this, 'loadStyles'));
        add_action('admin_enqueue_scripts', array($this, 'loadScripts'));
    }

}