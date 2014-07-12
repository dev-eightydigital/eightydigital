	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'eightydigital' ); ?>
		</div>
		<?php endif; ?>
		<div class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endif; // is_single() ?>
			
			<div class="entry-meta001">
			<?php if( is_single() ){?>
				Posted by <?php the_author() ?> | <?php the_time('F j, Y | h:i:s A')?>
				<?= (is_single())? ' |': ''; ?>
				
				<?php if ( comments_open() ) : ?>
					<span class="comments-link">
						<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'eightydigital' ) . '</span>', __( '1 Reply', 'eightydigital' ), __( '% Replies', 'eightydigital' ) ); ?>
					</span><!-- .comments-link -->
				<?php endif; // comments_open() ?>
			<?php }?>
			</div> <!--\.meta-->
		</div><!-- .entry-header -->

		<?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
		
				<div class="img-holder">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
				</div>
				<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="meta"><i class="fa fa-pencil"></i> <?php the_time('F j, Y'); ?></div>
				<div class="desc"><?php 
				$trimmed_content = wp_trim_words( get_the_excerpt(), 40,  '...' );
				echo $trimmed_content;
				 ?></div>
				<div class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
			
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'eightydigital' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'eightydigital' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">

			<?php 
			if(is_single()){
				edit_post_link( __( 'Edit', 'eightydigital' ), '<span class="edit-link">', '</span>' ); 
			}
			?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'eightydigital_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'eightydigital' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'eightydigital' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->