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

			<div class="col s12">
				<h1 class="center-align"><?php the_field('tipo_de_imovel') ?> para <?php the_field('tipo_de_negocio') ?> em <?php the_field('cidade') ?>  </h1>
			</div>
		
				<div class="col s8 margemVertical">

				
					<div class="card hoverable margemVertical t100">
						<div class="card-image">	
								<div class="carousel carousel-slider">
								<a class="carousel-item" href="#one!"><?php the_post_thumbnail( 'imovel_thumb' ); ?></a>

								<?php
									//Get the images ids from the post_metadata
									$images = acf_photo_gallery('imagens', $post->ID);
									//Check if return array has anything in it
									if( count($images) ):
										//Cool, we got some data so now let's loop over it
										foreach($images as $image):
											
											$full_image_url= $image['full_image_url']; //Full size image url
											
								?>

								<a class="carousel-item" href="#one!"><img class="img-responsive" src="<?php echo $full_image_url ?>">  </a>

								<?php endforeach; endif; ?>

								</div>

								<span class="white-text grey darken-3 badge preco">R$&nbsp;<?php $output = get_field('preco'); $price = number_format( $output, 2, ',', '.'); echo $price; ?></span>
								<p class="white-text red lighten-1 tipodeNegocio badge"><?php the_field('tipo_de_negocio');  ?></p>
								<a class="btn-floating halfway-fab waves-effect waves-light red hoverable"><i class="far fa-heart"></i></a>
							<div class="box detalhesimovel">
								&nbsp;<span class="white-text letraGrande"><?php the_field('tipo_de_imovel') ?></span><br/>
								&nbsp;<span class="white-text letraGrande"><i class="fas fa-map-marker-alt"></i>
								<?php the_field('cidade') ?>,&nbsp;<?php the_field('bairro') ?></span>
								<div class="divider red lighten-1 margemVertical"></div>

								&nbsp;<i class="fas fa-bed" ></i><?php $dormitorios = get_field('dormitorios'); ?>
								<span class="letraMedia"><?php echo $dormitorios ?>&nbsp;<?php echo ($dormitorios == 1) ? "Dormitório" : "Dormitórios";  ?>&nbsp;&nbsp;&nbsp;</span>

								<i class="fas fa-toilet"></i><?php $banheiros = get_field('banheiros'); ?>
								<span class="letraMedia"><?php echo $banheiros ?>&nbsp;<?php echo ($banheiros == 1) ? "Banheiro" : "Banheiros";  ?>&nbsp;&nbsp;&nbsp;</span>

								<i class="fas fa-bath"></i><?php $suites = get_field('suites'); ?>
								<span class="letraMedia"><?php echo $suites ?>&nbsp;<?php echo ($suites == 1) ? "Suíte" : "Suítes";  ?>&nbsp;&nbsp;&nbsp;</span>

								<i class="fas fa-car"></i><?php $vagas_na_garagem = get_field('vagas_na_garagem'); ?>
								<span class="letraMedia"><?php echo $vagas_na_garagem ?>&nbsp;<?php echo ($vagas_na_garagem == 1) ? "Vaga" : "Vagas";  ?>&nbsp;</b>&nbsp;&nbsp;</span>

								<span class="tooltipped" data-position="top" data-tooltip="Área do imóvel"><i class="fas fa-ruler-combined" ></i>&nbsp;<?php the_field('tamanho_do_imovel') ?>m²</span>
								


							</div><!-- fim da linha de detalhes do card -->
						</div><!-- fim do carrosel -->
					</div><!-- fim do card -->

						

	

				

				<h3>Detalhes do imóvel</h3>					
						<div>
							<p class="flow-text"><?php the_field('descricao_do_imovel') ?></p>
						</div>		

				<h3>Características do imóvel</h3>									

		</div>

		<div class="col s4">
			<div class="filter"><?php echo do_shortcode( '[tipo_de_negocio]' ); ?></div>

			
		</div>
				


					<?php $author_id = get_the_author_meta('ID'); ?> 
				
					


					<div class="col s12 m8">
							<h2>Fale com o corretor</h2>
							<span class="flow-text"><?php $user_info = get_userdata(1);  echo $user_info->first_name .  " " . $user_info->last_name . "\n"; ?></span>
								
							<p>Creci: <?php the_field('creci', 'user_'. $author_id ) ?></p>
									
						
							<a class="tooltipped" data-position="top" data-tooltip="Telefonar" href="tel:<?php the_field("telefone_do_corretor", 'user_'. $author_id ) ?>"><i class="fas fa-mobile-alt fa-3x margem letraCinza"></i> </a>
							<a class="tooltipped" data-position="top" data-tooltip="Contatar via Whatsapp" href="https://api.whatsapp.com/send?phone=<?php the_field("telefone_do_corretor", 'user_'. $author_id ) ?>"><i class="fab fa-whatsapp fa-3x margem letraCinza"></i> </a>
							<a class="tooltipped" data-position="top" data-tooltip="Contatar via e-mail" href="mailto:<?php $user_info = get_userdata(1);  echo $user_info->user_email . "\n"; ?>"><i class="fas fa-envelope-open-text fa-3x margem letraCinza"></i> </a>
					</div>


					<div class="col s12 m4">
						<span class="col s12 center-align">
							<img class="circle responsive-img" src="<?php the_field('foto_de_perfil', 'user_'. $author_id)  ?>" width="70%" />
						</span>
					</div>
					
			
			
			
			</div><!-- div finalizando a pagina   -->
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
