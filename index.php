<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<section class="main col-md-8">
				<div class="row titulo">
					<div class="col-md-12">
						<h3>Lo más reciente</h3>
					</div>
				</div>
					<div class="row posts">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article class="col-md-6 post">
							<div class="contenedor">
								<div class="thumb">
									<a href="<?php the_permalink();?>">
										<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>		
									</a>
								</div>
								<div class="info">
									<h2 class="titulo"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
									<p class="fecha"><?php echo get_the_date(); ?></p>
									<div class="extracto"><?php the_excerpt(); ?></div>

									<div class="etiquetas">
										<?php the_category();?>
									</div>
								</div>
							</div>
						</article>
					<?php endwhile; else: ?>
							<article class="col-sm-6 post">
						<div class="contenedor">
							<div class="info">
								<h2 class="titulo">El Post que buscas no existe</h2>
								<div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
							</div>
								</div>
							</article>
						<?php endif; ?>
					</div>
					<div class="row paginacion">
						<ul>
							<li class="disabled">Página 1 de 6</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">Ultima »</a></li>
						</ul>
					</div>	
			</section>
			
			<?php get_sidebar(); ?>	
		</div>
	</div>
<?php get_footer(); ?>		
		