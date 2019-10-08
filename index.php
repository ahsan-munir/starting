<?php get_header(); ?>
<div class="main-content" data-drawer-push="">
   <div class="main-content__wrapper">
        <main class="content-for-layout" id="MainContent" role="main">

               <?php if(have_posts()) { ?>
                <div class="page-width">
                <?php while(have_posts()) { ?>
                     <article <?php post_class() ?>>
                        <?php the_post(); ?>
                        <h2>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h2>
                        <div>
                            <?php _woocify_post_meta(); ?>
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>
                            <?php _woocify_readmore_link(); ?> 
                        </article>
                <?php } ?>
                <?php the_posts_pagination( ); ?>
            </div>
            <?php } else { ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', '_woocify'); ?></p>
            <?php } ?>     
            
            

         </main>
    </div>
</div>
<?php get_footer(); ?>