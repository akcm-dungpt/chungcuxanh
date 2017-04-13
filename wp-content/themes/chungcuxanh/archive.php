<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SociallyViral
 */

get_header(); ?>
<div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php sociallyviral_the_breadcrumb(); ?></div>

<div class="contents-top">
    <div id="primary" class="content-area">
        <!-- Du an BDS -->
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                <?php
                    sociallyviral_archive_title( '<h1 class="page-title">', '</h1>' );
                    sociallyviral_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                </header><!-- .page-header -->
                <?php
                $id_Category = the_category_ID($echo=false);
                if ($id_Category) {
                $posts_array = get_posts( array(category=>$id_Category, numberposts=>'100') );
                $total_page = count($posts_array);
                while ( have_posts() ) : the_post();
                ?>
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
                    </div>
                <?php endwhile; ?>
                <div class="phan_trang">
                    <?php forest_pagination(); ?>
                </div>
                <?php }?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
            
        </div>
        
    </div><!-- #primary -->
    <?php get_sidebar();?>
</div> <!-- .contents-top -->
<?php get_footer(); ?>
