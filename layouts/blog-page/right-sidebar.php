<?php
/* ------------------------------------------------------------------------- *
 * The template for displaying posts having the 'right-sidebar' layout. This
 * page is called from the 'single.php' file. The right-sidebar layout will
 * provide only one sidebar on the right side of the main content. However, for the
 * sidebar to show, there must be some widgets activated on it. If there
 * are no widgets activated on it, then the sidebar will be hidden and
 * there will be a blank space on that side of the main content.
/* ------------------------------------------------------------------------- */
?>
        <!-- single-page-content -->
        <div class="small-12 large-8 columns" id="single-page-content" role="main">
            <?php /* Start loop */ ?>
        
            <?php while (have_posts()) : the_post(); ?>
            
            <div class="single-page-meta-panel">
                <header>
                    <?php magnificient_entry_meta(); ?>
                </header>
            </div>
            <div class="separator"></div>

            <!-- article -->
            <article <?php post_class('single-card') ?> id="post-<?php the_ID(); ?>">
                <?php get_template_part( 'library/post', 'formats' ); ?>
                <div class="entry-content"><?php the_content(); ?></div>
                <div class="separator"></div>
                <div class="after-post-footer">
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'magnificient'), 'after' => '</p></nav>' )); ?>
                    <?php edit_post_link(); ?>
                </div>
            </article>
            <!-- /article -->

            <!-- post navigation -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/post', 'navigation' ); ?>
            <!-- /post navigation -->

            <!-- author -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/author', 'bio' ); ?>
            <!-- /author -->
            
            <!-- related posts -->
            <div class="separator"></div>
            <?php get_template_part( 'templates/related', 'posts' ); ?>
            <!-- /related posts -->
            
            <!-- comments -->
            <div class="separator"></div>
            <?php comments_template(); ?>
            <!-- /comments -->
        
            <?php endwhile; // End the loop ?>
        </div>
        <!-- /single-page-content -->