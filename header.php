<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, skrink-to-fit=no">
	<title>
		<?php if ( is_front_page() ): ?>
			<?php bloginfo( 'name' ); ?> - Página Principal - <?php the_field( 'titulo_seo' ); ?>
		<?php else: ?>
			<?php bloginfo( 'name' ); wp_title( '-' ); ?> - <?php the_field( 'titulo_seo' ); ?>
		<?php endif; ?>
	</title>
	<link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<meta name="description" content="<?php the_field( 'descricao_seo' ); ?>">
	<meta name="theme-color" content="#f17060">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

	<header>
		<?php wp_nav_menu([
			'menu' => 'principal',
			'container' => 'nav'
		]); ?>

		<?php $id = get_page_by_title( 'Menu da Semana' )->ID; ?>
		<h1><img src="<?php the_field( 'logo', $id ); ?>" alt="<?php the_field( 'logo_alt', $id ); ?>"></h1>

		<?php $id = get_page_by_title( 'Contato' )->ID; ?>
		<?php the_field( 'endereco_header' , $id ); ?>
		<p class="telefone"><?php the_field( 'telefone_header', $id ); ?></p>
	</header>
