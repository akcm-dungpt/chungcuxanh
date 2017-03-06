<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package SociallyViral
 */
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="side-bar">
		<div class="sidebar-box">
        	<?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
        <div class="sidebar-box">
            <h1 class="h1-title">Hotline hỗ trợ</h1>
            <span>Ms Phượng</span>
            <ul>
                <li class="box-dienthoai"><img class="hotline-img" src="<?php echo site_url(); ?>/wp-content/themes/chungcuxanh/images/icon_dt.png" alt="" />
                0936.399.755<br />
                &nbsp;&nbsp;&nbsp;0976.256.783
                </li>
                <li> 
                	<img class="hotline-img" src="<?php echo site_url(); ?>/wp-content/themes/chungcuxanh/images/icon_skype.png" alt="" />
                    <a href="skype:phuonghoang1710?chat">phuonghoang1710</a>
                </li>
                <li>
                    <div class="fb-like" data-href="http://chungcuxanh.vn" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </li>
            </ul>
        </div>
        <div class="sidebar-box">
            <h1 class="h1-title">Tin mới</h1>
            <?php
                $arr = array('posts_per_page' => 10);
                $the_query = new WP_Query($arr);
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) : $the_query->the_post();
                        $title = the_title('','',false);
                        ?>
                        <div id="postnew-sidebar">
                            <div class="sidebar-image">
                                <img src="<?php echo sociallyviral_get_thumbnail_url('sociallyviral_featured'); ?>" alt="<?php echo $title; ?>" />
                            </div>
                            <div class="sidebar-title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words($title, 10); ?> </a></div>
                        </div>
                        <?php
                    endwhile;
                } 
            ?>
        </div>
    </div><!-- #side-bar -->
    <div class="clear"></div>
