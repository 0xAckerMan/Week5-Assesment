<?php get_header(); ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => 4,
    'paged' => $paged
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        get_template_part( 'content', get_post_format() );
    endwhile;

    // Pagination
    if ( $query->max_num_pages > 1 ) :
        $prev_link = get_previous_posts_link( 'Newer Posts' );
        $next_link = get_next_posts_link( 'Older posts', $query->max_num_pages );

        echo '<div class="pagination">';
        if ( $prev_link ) {
            echo $prev_link;
        }
        if ( $next_link ) {
            echo $next_link;
        }
        echo '</div>';

    endif;

    // Reset Post Data
    wp_reset_postdata();

else :
    get_template_part( 'content', 'none' );
endif;
?>

<?php get_footer(); ?>
