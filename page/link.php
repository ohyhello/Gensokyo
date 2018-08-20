<?php
/*
Template Name: Links
*/
get_header(); ?>
<div class="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="block post linkpage">
			<p style="text-align:center"><div>
</div>
</p>
            <h3>最喜欢的la~</h3>
            <ul>
                <?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'me'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank"><img src="%s"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : 'https://www.ohyhello.com/wp-content/uploads/2017/08/22.jpg', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙很懒，什么也没有留下' );
                }
                ?>
            </ul>
            <h3>好的朋友哦！</h3>
            <ul>
                <?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'friends'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="follow"><img src="%s"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : 'https://www.ohyhello.com/wp-content/uploads/2017/08/22.jpg', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙很懒，什么也没有留下' );
                }
                ?>
            </ul>
            <h3>人家才不认识呢</h3>
            <ul>
                <?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'dead'
                ));

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf( '<li><a href="%s" target="_blank" rel="nofollow"><img src="%s"><h4>%s</h4><p>%s</p></a></li>', $bookmark->link_url, $bookmark->link_image ? $bookmark->link_image : 'https://www.ohyhello.com/wp-content/uploads/2017/08/22.jpg', $bookmark->link_name, $bookmark->link_description ? $bookmark->link_description : '这家伙很懒，什么也没有留下' );
                }
                ?>
            </ul>
        </article><!-- #post -->
        <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
</div><!-- main -->
<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>
