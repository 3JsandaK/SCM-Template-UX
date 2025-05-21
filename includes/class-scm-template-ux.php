<?php
// includes/class-scm-template-ux.php

class SCM_Template_UX {
    public function __construct() {
        add_action('init', array($this, 'register_template_post_type'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }

    public function register_template_post_type() {
        register_post_type('scm_email_template', array(
            'labels' => array(
                'name' => 'Email Templates',
                'singular_name' => 'Email Template'
            ),
            'public' => false,
            'show_ui' => true,
            'supports' => array('title', 'editor'),
            'menu_icon' => 'dashicons-email',
        ));
    }

    public function add_admin_menu() {
        add_menu_page(
            'SCM Email Templates',
            'Email Templates',
            'manage_options',
            'scm-template-ux',
            array($this, 'admin_page'),
            'dashicons-email'
        );
    }

    public function admin_page() {
        echo '<div class="wrap"><h1>Email Templates</h1><p>Manage and sync your Brevo email templates here.</p></div>';
    }
}
