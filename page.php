<?php get_header(); ?>

	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>

			<section class="container">
				<h2 class="subtitulo"><?php the_title(); ?></h2>
				<?php if ( have_rows( 'tipos_de_pratos' ) ): ?>
					<?php while ( have_rows( 'tipos_de_pratos' ) ): ?>
						<?php the_row(); ?>
						<div class="menu-item grid-8">
							<h2><?php the_sub_field( 'nome_do_prato' ); ?></h2>
							<?php if ( have_rows( 'informacoes_do_prato' )): ?>
								<ul>
									<?php while ( have_rows( 'informacoes_do_prato' ) ): ?>
										<?php the_row(); ?>
										<li>
											<span><sup>R$</sup><?php the_sub_field( 'preco' ); ?></span>
											<div>
												<h3><?php the_sub_field( 'nome' ); ?></h3>
												<?php the_sub_field( 'descricao' ); ?>
											</div>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php else: ?>
								<p><?php esc_html_e( 'Desculpe, nenhum conteúdo corresponde aos seus critérios.' ); ?></p>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					<p><?php esc_html_e( 'Desculpe, nenhum conteúdo corresponde aos seus critérios.' ); ?></p>
				<?php endif; ?>
			</section>

		<?php endwhile; ?>
	<?php else: ?>
		<p><?php esc_html_e( 'Desculpe, nenhum post corresponde aos seus critérios.' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
