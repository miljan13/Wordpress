<?php
/**
 * Plugin Name: My Custom Plugin
 * Plugin URI:  https://www.example.com/my-custom-plugin
 * Description: Custom functionality for Ultimate Member.
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://www.example.com
 */

// Plugin code goes here


function change_um_profile_tabs( $tabs ) {
    // Modify the 'Posts' tab
    if ( isset( $tabs['posts'] ) ) {
        $tabs['recipes'] = $tabs['posts'];
        unset( $tabs['posts'] );
    }

    // Rename the 'Recipes' tab
    if ( isset( $tabs['recipes'] ) ) {
        $tabs['recipes']['name'] = 'Recipes';
    }
    
    return $tabs;
}
add_filter( 'um_profile_tabs', 'change_um_profile_tabs', 10, 1 );

function change_um_profile_tab_content( $content, $key, $profile_id, $form_id, $parent_user_id ) {
    // Modify the content for the 'Recipes' tab
    if ( 'recipes' === $key ) {
        ob_start();

        $args = array(
            'post_type'      => 'recipes', // Replace 'recipe' with the slug of your custom post type
            'author'         => get_current_user_id(),
            'posts_per_page' => -1,
        );

        $recipes = new WP_Query( $args );

        if ( $recipes->have_posts() ) {
            while ( $recipes->have_posts() ) {
                $recipes->the_post();
                ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </div>
                <?php
            }
        } else {
            echo '<p>No recipes found.</p>';
        }

        wp_reset_postdata();

        $content = ob_get_clean();
    }
    

    return $content;
}
add_filter( 'um_profile_content_hook_recipes', 'change_um_profile_tab_content', 10, 5 );