<?php get_header(); ?>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('<?php bloginfo('template_directory');?>/img/header-bg.jpg');>
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="main">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(array('card', 'mb-3')); ?>>
                              <div class="card-body">
                                <h2><?php the_title(); ?></h2>
                                <p class="card-text"><span class="post-meta">Posted by <a href="#"><?php the_author(' ');?></a> on <?php the_time('l, F jS, Y')?></span></p>
                                <p class="card-text"><?php the_content();?></p>

                                <?php comments_template( '', true ); ?>

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