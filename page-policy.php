<?php 

/*
Template Name: Страница Договор оферты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main id="primary" class="page site-main"> 
	<section class="content recurring policy-section"> 
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			<?php endwhile;?>
		<?php endif; ?> 
		<a href="<?php echo get_template_directory_uri();?>/img/zayavleniye-anketa-atmosfera-fitnes.odt" class="policy-section__link">Скачать "Заявление-анкета (акцепт) на присоединение к Договору публичной оферты"</a>
		<script type="text/javascript">
			document.ondragstart = test;
			document.onselectstart = test;
			document.oncontextmenu = test;
			function test() {
				return false
			}	
		</script>
	</div>
</section>
<?php get_template_part('template-parts/contacts-section');?>
</main>

<?php get_footer();