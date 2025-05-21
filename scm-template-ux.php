<?php
/**
 * Plugin Name: SCM Template UX
 * Description: Email template builder and sync for Brevo.
 * Version: 0.1.0
 * Author: Screechy Cat Media
 * Author URI: https://screechycatmedia.com
 * GitHub Plugin URI: 3JsandaK/scm-template-ux
 * GitHub Branch: main
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-scm-template-ux.php';

function scm_template_ux_init() {
    new SCM_Template_UX();
}
add_action('plugins_loaded', 'scm_template_ux_init');
