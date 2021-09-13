<?php

/*
    Plugin Name: MC Video Tutorials
    Description: Adds an admin page with video tutorials.
    Version: 1.0.0
    Author: Nuno Marques @ Media Creators Studio
    Author URI: http://mediacreators.studio
    Text Domain: mc-video-tutorials
*/


function mc_video_tutorials() {
    add_menu_page(
        __( 'Video Tutorials', 'mc-video-tutorials' ),
        __( 'Video Tutorials', 'mc-video-tutorials' ),
        'manage_options',
        'mc-video-tutorials',
        'mc_video_tutorials_contents',
        'dashicons-format-video',
        3
    );
}

add_action( 'admin_menu', 'mc_video_tutorials' );


function mc_video_tutorials_contents() {
?>

    <h1><?php esc_html_e( 'Video Tutorials', 'mc-video-tutorials' ); ?></h1>

    <div class="wrap">
        <div id="dashboard-widgets-wrap">
            <div id="dashboard-widgets" class="metabox-hulder">
            
            <div class="postbox-container">
                <div class="meta-box-sortables">
                    <div class="postbox">
                        <h2 class="mc-box-title">Title of this Chapter</h2>
                        <div class="inside mc-box-inside">
                            <div class="clientdash-widget">
                                <ul>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="meta-box-sortables">
                    <div class="postbox">
                        <h2 class="mc-box-title">Title of this Chapter</h2>
                        <div class="inside mc-box-inside">
                            <div class="clientdash-widget">
                                <ul>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="postbox-container">
                <div class="meta-box-sortables">
                    <div class="postbox">
                        <h2 class="mc-box-title">Title of this Chapter</h2>
                        <div class="inside mc-box-inside">
                            <div class="clientdash-widget">
                                <ul>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="meta-box-sortables">
                    <div class="postbox">
                        <h2 class="mc-box-title">Title of this Chapter</h2>
                        <div class="inside mc-box-inside">
                            <div class="clientdash-widget">
                                <ul>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                    <li><span class="dashicons dashicons-format-video"></span> <a target="_blank" href="#">Title of this video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
        <!-- dashboard-widgets-wrap -->

    </div>
    <!-- wrap -->

<?php
}


function load_mc_video_tutorials_scripts( $hook ) {

    // Load only on ?page=mc-video-tutorials
    if( $hook != 'toplevel_page_mc-video-tutorials' ) {
        return;
    }

    // Load style & scripts.
    wp_enqueue_style( 'style-css', plugin_dir_url( __FILE__ ) . 'css/style.css' );
    
}

add_action( 'admin_enqueue_scripts', 'load_mc_video_tutorials_scripts' );