<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="conteudo-post">
		<div class="entry-content">
			<?php
				if ( function_exists( 'ADDTOANY_SHARE_SAVE_FLOATING' ) ) {
					ADDTOANY_SHARE_SAVE_FLOATING( array(
						'kit_style' => 'margin-left:-100px; top:150px;',
						'vertical_type' => true,
					) );
				}
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'morfeu' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .conteudo-post -->
</article><!-- #post-## -->
