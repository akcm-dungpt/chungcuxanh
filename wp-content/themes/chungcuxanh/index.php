<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SociallyViral
 */

get_header(); ?>
<div class="contents-top">
    <div id="primary" class="content-area">
        <!-- Du an BDS -->
        <div class="row">
        	<?php
        		$link_dabds = get_category_link(3);
        	?>
            <h1 class="page-title"><a href="<?php echo $link_dabds; ?>"><?php echo get_cat_name(3);?></a></h1>
            <?php
            $posts_array = get_posts( array(category=>3, numberposts=>'12') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <div id="box1" class="col">
                	<a href="<?php the_permalink(); ?>">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
                    </a>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?> <br />
							<div>
							    <span class="post_don_gia">Giá bán: </span>
							    <span><?php echo get_post_meta($post->ID, 'don_gia', TRUE);?></span>
							</div>
							<div>
							    <span class="post_don_gia">Địa chỉ: </span>
							    <span><?php echo get_post_meta($post->ID, 'dia_chi', TRUE);?></span>
							</div>
						</a>
					</h2>
					<div></div>
					
				</div>
            <?php endforeach; ?>
        </div>
        <?php
        if (count($posts_array) >0) {
        ?>
        <div class="xem-them"><a href="<?php echo $link_dabds; ?>">Xem thêm ...</a></div>
        <?php }?>
        
        <!-- Rao vat -->
        <div class="row">
        	<?php
        	$link_raovat = get_category_link(105);
        	?>
            <h1 class="page-title"><a href="<?php echo $link_raovat; ?>"><?php echo get_cat_name(105);?></a>
            </h1>
            <?php
            $posts_array = get_posts( array(category=>105, numberposts=>'12') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); //var_dump($post->ID);?>
                <div id="box1" class="col">
                	<a href="<?php the_permalink(); ?>">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
                    </a>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</div>
            <?php endforeach; ?>    		
        </div>
        <?php
        if (count($posts_array) >0) {
        ?>
        <div class="xem-them"><a href="<?php echo $link_raovat; ?>">Xem thêm ...</a></div>
        <?php }?>
        <!-- Tin tuc thi truong -->
        <div class="row">
        	<?php
        	$link_tttt = get_category_link(9);
        	?>
            <h1 class="page-title"><a href="<?php echo $link_raovat; ?>"><?php echo get_cat_name(9);?></a></h1>
            <?php
            $posts_array = get_posts( array(category=>9, numberposts=>'12') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <div id="box1" class="col">
                	<a href="<?php the_permalink(); ?>">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
					</a>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</div>
            <?php endforeach; ?>    		
        </div>
        <?php
        if (count($posts_array) >0) {
        ?>
        <div class="xem-them"><a href="<?php echo $link_tttt; ?>">Xem thêm ...</a></div>
        <?php }?>
	</div><!-- #primary -->
    <?php get_sidebar();?>
</div> <!-- .contents-top -->
<?php get_footer(); ?>