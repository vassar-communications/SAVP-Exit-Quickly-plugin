<?php
/**
 * Plugin Name: SAVP Leave Quickly
 * Version: 0.9
 * Plugin URI: https://www.csilverman.com/
 * Description: This displays a "Leave Quickly" button on a site, linking to weather.com. It should only be active on SAVP. 
 * Author: Chris Silverman
 * Author URI: https://www.csilverman.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * @package WordPress
 * @author Chris Silverman
 * @since 1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('vassarparent__after_entryContent', function() { 
    echo '<style>.savp__exit-quickly a {
    position: fixed;
    bottom: 1.4em;
    right: 1em;
    z-index: 1000;
    background: #f00;
    display: inline-block;
    padding: 1em 1.4em;
    border-radius: 1em;
    border: 3px solid #fff;
    box-shadow: 0 0.4em 0.4em rgba(0,0,0,0.4);
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 0.06em
}
.savp__exit-quickly a:hover {
    background: #000;
    color: #fff;
}
</style><div class="savp__exit-quickly"><a href="https://weather.com/">Exit Quickly</a></div>';
});










