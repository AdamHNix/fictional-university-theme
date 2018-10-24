
<div class="post-item">
    <h2 class = "headline--medium headline--post-title"><a href="<?php the_permalink(); ?>">Continue Reading <?php the_title(); ?></a></h2>
</div>
<div class="metabox">
    <p>posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?>
    <?php echo get_the_category_list();?></p>
</div>
<div class="generic-content">
    <?php the_excerpt();?>
    <p><a btn btn--blue href="<?php get_permalink(); ?>"></a></p>
</div>
