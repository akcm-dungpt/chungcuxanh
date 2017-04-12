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
            foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <div id="box1" class="col">
                    <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php the_title(); ?>" />
                    <h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?> <br />
							<?php echo get_post_meta($post->ID, 'tp_country', TRUE);?>
						</a>
					</h2>
                </div>
            <?php endforeach;
            if(paginate_links()!='') {?>
            	<div class="quatrang">
            		<?php
            		global $wp_query;
            		$big = 999999999;
            		echo paginate_links( array(
            			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            			'format' => '?paged=%#%',
            			'prev_text'    => __('« Mới hơn'),
            			'next_text'    => __('Tiếp theo »'),
            			'current' => max( 1, get_query_var('paged') ),
            			'total' => $wp_query->max_num_pages
            			) );
            	    ?>
            	</div>
            <?php }
            }?>
        </div>
    </div><!-- #primary -->
    <?php get_sidebar();?>
</div> <!-- .contents-top -->
<?php get_footer(); ?>
