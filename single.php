<?php get_header(); ?>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="main">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(array('mb-3')); ?>>
                              <div>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content();?></p>
                              </div>
                            </div><!-- .post --> 

                        <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                        </div><!-- #main --> 
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </section>
<?php get_footer(); ?>