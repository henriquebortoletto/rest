<?php /* Template Name: Página Sobre */ ?>

<?php get_header(); ?>

	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>

				<section class="container sobre">
					<h2 class="subtitulo"><?php the_title(); ?></h2>
					<div class="grid-8">
						<img src="<?php the_field( 'foto_rest' ); ?>" alt="<?php the_field( 'foto_rest_alt' ); ?>">
					</div>
					<div class="grid-8">
						<?php if ( have_rows( 'conteudo_sobre' ) ): ?>
						<?php while ( have_rows( 'conteudo_sobre' ) ): ?>
							<?php the_row(); ?>
							<h2><?php the_sub_field( 'titulo_sobre' ); ?></h2>
							<?php the_sub_field( 'texto_sobre' ); ?>
						<?php endwhile; ?>
					<?php else: ?>
						<p><?php esc_html_e( 'Desculpe, nenhum conteúdo corresponde aos seus critérios.' ); ?></p>
					<?php endif; ?>
					</div>
				</section>

		<?php endwhile; ?>
	<?php else: ?>
		<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
