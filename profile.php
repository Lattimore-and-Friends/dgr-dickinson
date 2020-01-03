<?php
/* Template Name: Profile Template */
/**
 * The template for displaying the profile page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

 get_header(); ?>

 		<?php
 		if ( have_posts() ) :

 			/* Start the Loop */
             while ( have_posts() ) : the_post(); ?>

    <?php   $current_user = wp_get_current_user();
            $current_user_name = $current_user->display_name; ?>

           <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>


             <div class="rooms-hero-section">
             <div class="rooms-hero-background__desktop">
               <img class="rooms-hero-background" src="<?php the_field('featured_image', 'user_'. $current_user->ID ); ?>" alt="Hero section image" srcset="">
             </div>
             <div class="rooms-hero-info">
               <h1 class="rooms-hero"> <?php printf( __( 'Welcome %s', 'textdomain' ), esc_html( $current_user->display_name ) ) .  '<br />'; ?> </h1>
               <p class="rooms-hero-intro"> <?php the_field('personalised_intro', 'user_'. $current_user->ID ); ?></p>
               <div class="rooms-hero-text"> <?php the_content(); ?></div>
             </div>
           </div>
       
           <div class="rooms-rooms">
             <ul class="rooms-rooms__list"></ul>
           </div>
         </div>

<!--    Other Rooms Section           -->
<?php 
$current_user = wp_get_current_user();
$current_user_id = $current_user->ID;
$posts = get_field('user_rooms', 'user_'.$current_user_id); ?>

<?php if( $posts ): ?>
<div class="roompage-container-main">
        <div class="roompage-rooms-section ">

            <div class="roompage-rooms ">
                <ul class="roompage-rooms__list ">

    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
     <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large'); ?>
        <?php setup_postdata($post); ?>
        <li class="rooms-room-list__item ">
                <div class="rooms-room " data-aos="fade-up " data-aos-duration="15000 " data-aos-easing="linear ">
                    <div class="rooms-room__img " style="background-image: url('<?php echo esc_url($featured_img_url); ?>')">
                    </div>

                    <div class="rooms-room__div ">
                            <h1 class="rooms-room__author "><?php the_title(); ?></h1>
                            <p class="rooms-room__text ">viewing room</p>
                            <a href="<?php the_permalink(); ?>">
                                <button class="rooms-button " type="button ">enter</button>
                            </a> 
                    </div>
                </div>
        </li>

    <?php endforeach; ?>
                 </ul>
             </div>
        </div> 
</div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

    <!--         End Of the Other Rooms Section       -->
 		<?php	endwhile;
 		        endif; ?>

 <?php get_footer(); ?>
