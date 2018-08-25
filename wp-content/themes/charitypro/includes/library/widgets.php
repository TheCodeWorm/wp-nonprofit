<?php
///----Blog widgets---

/// Recent Posts 
class Bunch_Recent_Post extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_Recent_Post', /* Name */esc_html__('CharityPro Recent Posts','charitypro'), array( 'description' => esc_html__('Show the recent posts', 'charitypro' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
        <!-- Popular Posts -->
        <div class="popular-posts">
            <?php echo balanceTags($before_title.$title.$after_title); ?>
        
            <?php $query_string = 'posts_per_page='.$instance['number'];
				if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
				 
				
				$this->posts($query_string);
			?>
        </div>
        
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Recent News', 'charitypro');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'charitypro'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'charitypro'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'charitypro'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'charitypro'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		$query = new WP_Query($query_string); 
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
			<?php while( $query->have_posts() ): $query->the_post(); ?>
            <article class="post">
                <figure class="post-thumb"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('charitypro_115x106');?></a></figure>
                <h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h4>
                <div class="post-meta">
                    <ul class="clearfix">
                        <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><span class="icon flaticon-speech-bubble-outline-of-rectangular-shape"></span> <?php echo comments_number( '0', '1', '%' ); ?></a></li>
						
                        <li>
                        	<?php $like = get_post_meta( get_the_id(), '_jolly_like_it', true );?>
                            <a href="javascript:void(0);" class="jolly_like_it"  data-id="<?php echo get_the_ID();?>"><span class="icon flaticon-heart-2"></span> <?php (int)$like;?></a>
                        	<?php echo balanceTags($like); ?>
                        </li>
                    </ul>
                </div>
            </article>
			<?php endwhile; ?>
            
        <?php endif;
		wp_reset_postdata();
    }
}

///----footer widgets---
//About Us
class Bunch_About_us extends WP_Widget
{
	
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_About_us', /* Name */esc_html__('CharityPro About Us','charitypro'), array( 'description' => esc_html__('Show the information about company', 'charitypro' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget);?>
      		
			<!--Footer Column-->
            <div class="about-widget">
                <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($instance['logo']); ?>" alt="<?php esc_html_e('Footer Logo', 'charitypro');?>"></a></div>
                <div class="widget-content">
                    <div class="title"><?php echo balanceTags($instance['title']); ?></div>
                    <div class="text"><?php echo balanceTags($instance['content']); ?></div>
                </div>
            </div>
            
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['logo'] = strip_tags($new_instance['logo']);
		$instance['title'] = $new_instance['title'];
		$instance['content'] = $new_instance['content'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$logo = ($instance) ? esc_attr($instance['logo']) : 'http://';
		$title = ($instance) ? esc_attr($instance['title']) : '';
		$content = ( $instance ) ? esc_attr($instance['content']) : '';?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('logo')); ?>"><?php esc_html_e('Footer Logo Url:', 'charitypro'); ?></label>
            <input placeholder="<?php esc_html_e('Https://', 'charitypro');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('logo')); ?>" name="<?php echo esc_attr($this->get_field_name('logo')); ?>" type="text" value="<?php echo esc_attr($logo); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'charitypro'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" ><?php echo balanceTags($title); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'charitypro'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo balanceTags($content); ?></textarea>
        </p>        
                
		<?php 
	}
	
}

/// Recent Posts 
class Bunch_gallery extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Bunch_gallery', /* Name */esc_html__('Artica Gallery Widget','charitypro'), array( 'description' => esc_html__('Show the Gallery images', 'charitypro' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
		<div class="gallery-widget">
            <?php echo balanceTags($before_title.$title.$after_title); ?>
            
			<?php 
				$args = array('post_type' => 'bunch_gallery', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'gallery_category','field' => 'id','terms' => (array)$instance['cat']));
				 
					
				$this->posts($args);
				?>
            
        </div>
        
        <?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Gallery Widget', 'charitypro');
		$number = ( $instance ) ? esc_attr($instance['number']) : 8;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'charitypro'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'charitypro'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'charitypro'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'charitypro'), 'selected'=>$cat, 'taxonomy' => 'gallery_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($args)
	{
		$query = new WP_Query($args);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
				<div class="thumbs-outer clearfix">
				<?php while( $query->have_posts() ): $query->the_post(); 
					global $post;
				?>
                <?php 
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>
                    <figure class="image"><?php the_post_thumbnail('charitypro_80x65', array('class' => 'img-responsive'));?><a href="<?php echo esc_url($post_thumbnail_url);?>" class="lightbox-image"><span class="fa fa-search"></span></a></figure>
                <?php endwhile; ?>
                </div>
        <?php endif;
		wp_reset_postdata();
    }
}