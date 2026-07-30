<?php get_header() ?>

<div class="team-container">
    <div class="single-team">

        <?php
        while (have_posts()):
            the_post();
            ?>

            <div class="team-single-image">

                <?php

                if (has_post_thumbnail()) {

                    the_post_thumbnail('large');

                }

                ?>

            </div>

            <h1>
                <?php the_title(); ?>
            </h1>

            <div class="team-content">

                <?php the_content(); ?>

            </div>

            <div class="team-designation">


                <strong>Designation:</strong>


                <?php

                $terms = get_the_terms(
                    get_the_ID(),
                    'designation'
                );


                if ($terms && !is_wp_error($terms)) {


                    foreach ($terms as $term) {

                        echo $term->name;

                    }


                }

                ?>


            </div>


        <?php endwhile; ?>


    </div>
</div>


<?php get_footer(); ?>