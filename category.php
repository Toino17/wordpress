<?php 

wp_insert_term(
	// the name of the category
	'Category Comédie', 		
	// the taxonomy, which in this case if category (don't change)
	'category', 		
	array(			
		'slug' => 'comedie',  
	)
);