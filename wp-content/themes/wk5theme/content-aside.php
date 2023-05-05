<h2>Aside post format</h2>
<h3><?php the_title(sprintf('<h2 class="entry-title"><a href= "%s">', esc_url(get_permalink() )), '</a></h2>'); ?></h3>
    <h3><?php the_content(); ?></h3>
<hr color="blue">