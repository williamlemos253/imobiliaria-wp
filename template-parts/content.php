<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-imob
 */

?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
		
			</header><!-- .entry-header -->

		
		
   			<div class="col s12 m4">
			   <div class="card">
       				<div class="card-image">	
						<?php imobiliariafacil_post_thumbnail(); ?>
						<span class="card-title"><?php the_title('<h2>', '</h2>') ?> </span>
					</div>
					<div class="card-content">
					<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');?>
					</div>
				</div>
			</div>
		

			
					
			

			
		</article><!-- #post-<?php the_ID(); ?> -->
