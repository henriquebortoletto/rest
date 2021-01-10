	<footer>
		<nav class="nav-footer">
			<?php wp_nav_menu([
				'menu' => 'principal',
				'container' => false
			]); ?>
		</nav>

		<p><?php bloginfo( 'name' ); ?> &copy; <?= Date("Y"); ?>. Alguns direitos reservados.</p>
	</footer>

	<?php wp_footer(); ?>
</body>

</html>
