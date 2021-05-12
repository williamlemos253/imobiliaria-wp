<?php
/**
 * Template part for displaying imóvel content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-imob
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			</header><!-- .entry-header -->

		
		
   			<div class="col s12 m6 l4 margemVertical">
				
			   <div class="card hoverable margemVertical">
       				<div class="card-image">	
					    
							<?php imobiliariafacil_post_thumbnail(); ?>
							<span class="white-text grey darken-3 badge preco">R$&nbsp;<?php $output = get_field('preco'); $price = number_format( $output, 2, ',', '.'); echo $price; ?></span>
							<p class="white-text red lighten-1 tipodeNegocio badge"><?php the_field('tipo_de_negocio');  ?></p>
							<a class="btn-floating halfway-fab waves-effect waves-light red hoverable"><i class="far fa-heart"></i></a>
							<a href="<?php echo get_permalink(); ?>">
							<div class="box detalhesimovel">
							<span class="white-text letraMedia"><?php the_field('tipo_de_imovel') ?></span><br/>
							<span class="white-text letraMedia"><i class="fas fa-map-marker-alt"></i>&nbsp;
							<?php the_field('cidade') ?>,&nbsp;<?php the_field('bairro') ?></span>
							<div class="divider red lighten-1 margemVertical"></div>

							<span class="tooltipped" data-position="top" data-tooltip="Dormitórios"><i class="fas fa-bed" ></i>&nbsp;<?php the_field('dormitorios') ?></span>&nbsp;&nbsp;

							<span class="tooltipped" data-position="top" data-tooltip="Banheiros"><i class="fas fa-toilet"></i>&nbsp;<?php the_field('banheiros') ?></span>&nbsp;&nbsp;

							<span class="tooltipped" data-position="top" data-tooltip="Suítes"><i class="fas fa-bath"></i>&nbsp;<?php the_field('suites') ?></span>&nbsp;&nbsp;

							<span class="tooltipped" data-position="top" data-tooltip="Garagens/Box"><i class="fas fa-car"></i>&nbsp;<?php the_field('vagas_na_garagem') ?></span>&nbsp;&nbsp;

							<span class="tooltipped" data-position="top" data-tooltip="Área do imóvel"><i class="fas fa-ruler-combined" ></i>&nbsp;<?php the_field('tamanho_do_imovel') ?>m²</span>

						</div></a>  
					</div>

				</div>
				
			</div>
</article><!-- #post-<?php the_ID(); ?> -->
