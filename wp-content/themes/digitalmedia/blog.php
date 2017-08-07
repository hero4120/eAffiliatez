<!--Start single  item-->
<div class="latest-news">
    <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('digitalmedia_1200x313', array('class' => 'img-responsive'));?></a>
    <div class="latest-news-text">
        <div class="date">
            <h6><?php echo get_the_date('d');?><br><?php echo get_the_date('M');?></h6>
        </div>
        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><h4><?php the_title();?></h4></a>
        <p><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author();?></a></p>
    </div>
    <div class="latest-text">
        <?php the_excerpt();?>
        <div class="bottom-box clearfix">
            <a class="pull-left" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Read More', 'digitalmedia');?></a>
        </div><!-- /.bottom-box -->
    </div>
</div>