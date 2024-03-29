<?php
 //Advanced Custom Fields
 $project_feature_title	    = get_field('project_feature_title');
 $project_feature_body	    = get_field('project_feature_body');
?>

<!-- PROJECT FEATURES
================================================== -->
<section id="project-features">
    <div class="container">
    
        <h2><?php echo $project_feature_title; ?></h2>
        <p class="lead"><?php echo $project_feature_body; ?></p>
        
        <div class="row">

            <!--Loops through all the project features and displays them-->
            <?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-sm-4">
                
                    <!--if user uploaded an image-->
                    <?php 
                        if (has_post_thumbnail() ) {
                            the_post_thumbnail( array( 200, 200 ) ); //limit the size of the image
                        }
                    ?>

                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div><!-- col -->

            <?php endwhile; wp_reset_query(); ?>
            
        </div><!-- row -->
        
    </div><!-- container -->
</section><!-- project-features -->
