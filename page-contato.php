<?php /* Template Name: Página Contato */ ?>

<?php get_header(); ?>

	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>

				<section class="container contato">
					<h2 class="subtitulo"><?php the_title(); ?></h2>
					<div class="grid-16">
						<a href="<?php the_field( 'link_mapa' ); ?>" target="_blank">
							<img src="<?php the_field( 'imagem_mapa' ); ?>" alt="Clique e veja o endereço do <?php bloginfo( 'name' ); ?>">
						</a>
					</div>

					<?php if ( have_rows( 'dados_contato' ) ): ?>
						<?php while ( have_rows( 'dados_contato' ) ): ?>
							<?php the_row(); ?>
							<div class="grid-1-3 contato-item">
								<h2><?php the_sub_field( 'titulo' ); ?></h2>
								<?php the_sub_field( 'informacoes' ); ?>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
					<?php endif; ?>
				</section>

		<?php endwhile; ?>
	<?php else: ?>
		<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
