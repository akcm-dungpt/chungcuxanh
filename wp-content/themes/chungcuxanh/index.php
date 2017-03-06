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
            <h1 class="page-title"><? echo get_cat_name(3);?></h1>
            <?php
            $posts_array = get_posts( array(category=>3, numberposts=>'12') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <div id="box1" class="col">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
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
        
        <!-- Su kien mo ban -->
        <div class="row">
            <h1 class="page-title"><? echo get_cat_name(2);?></h1>
            <?php
            $posts_array = get_posts( array(category=>2, numberposts=>'') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); //var_dump($post->ID);?>
                <div id="box1" class="col">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</div>
            <?php endforeach; ?>    		
        </div>
        <!-- Tin tuc thi truong -->
        <div class="row">
            <h1 class="page-title"><? echo get_cat_name(9);?></h1>
            <?php
            $posts_array = get_posts( array(category=>9, numberposts=>'') );
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <div id="box1" class="col">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</div>
            <?php endforeach; ?>    		
        </div>
	</div><!-- #primary -->
    <?php get_sidebar();?>
</div> <!-- .contents-top -->
<?php get_footer(); ?>