<?php get_header(); ?>

<div class="team-archive">

<h1>All Teams</h1>

<div class="team-grid">
    
    <?php
	
    if(has_posts_thumbnail()):
        while(have_posts()):
	    the_post();
    ?>
	
       <div class="team-card">
		   
		   <?php if(has_posts_thumbnail()) : ?>
		   
		   <div class="team-member-image">
			   <?php the_posts_thumbnail() ?>
		   </div>
		  
	<?php endif ?>
	
	<a href="the_permalink()">
	<h3>
		<?php the_title() ?>
	</h3>
	</a>		
	
	<div class="team-except"> 
	<?php the_excerpt() ?>
	</div>
		
	</div>
	
	<?php endwhile;

	endif ?>

</div>

<?php get_footer(); ?>