<?php get_header() ?>

<div class="team-archive">

<h1>Team Members</h1>

<div class="team-grid">
    
    <?php
	
    if(have_posts()):
        while(have_posts()):
	    the_post();
    ?>
	
       <div class="team-card">
		   
		   <?php if(has_post_thumbnail()) : ?>
		   
		   <div class="team-member-image">
			   <?php the_post_thumbnail() ?>
		   </div>
		  
	<?php endif; ?>
	
	<a href="<?php the_permalink() ?>">
	<h3>
		<?php the_title(); ?>
	</h3>
	</a>		
	
	<div class="team-except"> 
	<?php the_excerpt() ?>
	</div>
		
	</div>
	
	<?php endwhile;

           endif; ?>

</div>

</div>

<?php get_footer(); ?>