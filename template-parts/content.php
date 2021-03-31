<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
            
                <header class="entry-header">

                    <?php the_title( '<h1>', '</h1>'); ?>

                    <div class="byline">
                        <span><?php esc_html_e( 'Author:' );?> </span><?php the_author(); ?>
                    </div>  
                    
                </header>

                <div class="entry-content">
                
                    <?php the_content(); ?>

                </div>

                <?php comments_template(); ?>
            
            </article>