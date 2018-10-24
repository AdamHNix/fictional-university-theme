<?php 

get_header(); 
pageBanner(array(
    'title'=> 'All Events',
    'subtitle'=> 'See what is Going on in Our World'
));
?>
    <div class="container container--narrow page-section">
        <?php 
        while(have_posts()){
        the_post();
        get_template_part('template-parts/content-event');
    }
echo paginate_links();

?>
<p>Looking for past events? <a href="<?php echo site_url('/past-events');?>">Check out our archive!</a></p>
<?php
get_footer();
?>