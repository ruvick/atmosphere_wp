	<footer id="footer" class="footer">
		<div class="footer__container _container">
			<div class="footer__row d-flex">
				<a href="<? bloginfo("url"); ?>" class="footer__logo logo-icon"></a> 
				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu menu-list',
				'container_class' => 'footer__menu menu-list','container' => false )); ?>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>