<?php
/**
 * The template for displaying all single rooms
 */

 get_header(); ?>

 		<?php
 		if ( have_posts() ) :

 			while ( have_posts() ) : the_post(); ?>

                <div class="roompage-container-fluid roompage-body">
                    <div class="roompage-hero-background">
                    <?php
                        $background = get_field('background_selector');
                        $background_url;
                        $foreground_img_width = get_field('foreground_number');

                        if($background == 'green_wall') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene-without-frame.jpg';
                            $background_width = 615;
                        }
                        elseif($background == 'chair_grey_wall') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene_Contemporary_Chair_Grey.jpg';
                            $background_width = 615;
                            $additional_styling = "left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'door_grey_wall') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene_Contemporary_Door_Grey.jpg';
                            $background_width = 615;
                        }
                        elseif($background == 'green_wall_chair') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene_Traditional_Chair_Green.jpg';
                            $background_width = 615;
                            $additional_styling = "left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'red_wall_chair') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene_Traditional_Chair_Red.jpg';
                            $background_width = 615;
                            $additional_styling = "left: 0; right: 0; margin: auto;";                                                        
                        }
                        elseif($background == 'red_wall_door') {
                            $background_url = get_template_directory_uri() . '/img/Large-scene_Traditional_Door_Red.jpg';
                            $background_width = 615;
                        }
                        elseif($background == 'red_wall_med_max') {
                            $background_url = get_template_directory_uri() . '/img/Medium-scene_Maximum-AW-size.jpg';
                            $background_width = 170;
                            $additional_styling = "top: 100px; left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'red_wall_med_min') {
                            $background_url = get_template_directory_uri() . '/img/Medium-scene_Minimum-AW-size.jpg';
                            $background_width = 154;
                            $additional_styling = "top: 100px; left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'small_green') {
                            $background_url = get_template_directory_uri() . '/img/Small-scene_Green-wall.jpg';
                            $background_width = 123;
                            $additional_styling = "top: 50px; left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'small_grey') {
                            $background_url = get_template_directory_uri() . '/img/Small-scene_Grey-wall.jpg';
                            $background_width = 123;
                            $additional_styling = "top: 50px; left: 0; right: 0; margin: auto;";
                        }
                        elseif($background == 'small_red') {
                            $background_url = get_template_directory_uri() . '/img/Small-scene_Red-wall.jpg';
                            $background_width = 123;
                            $additional_styling = "top: 50px; left: 0; right: 0; margin: auto;";

                        }

                        $foreground_img_width = $foreground_img_width * 100;
                        $foreground_proportion =  $foreground_img_width / $background_width;

                      ?>


                    <?php if( get_field('background_selector') ): ?>
                        <div class="hero-container">
                            <img class="roompage-hero-background__img" src="<?php echo $background_url; ?>" />
                            <img class="roompage-hero-foreground__img" src="<?php the_field('foreground_image');?>" style="width: <?php echo $foreground_proportion . "%" ?>; <?php echo $additional_styling; ?>" />
                        </div>
                    <?php endif; ?>

                    </div>
                </div>

                <div class="roompage-container-main">
                    <div class="roompage-artwork">
                    <div class="roompage-artwork__image-container">


                        <div class="roompage-bullets" style="text-align:center">
                            <span class="roompage-dot active" data-active="true" onclick="currentSlide(1)"></span>
                            <span class="roompage-dot" data-active="false" onclick="currentSlide(2)"></span>
                        </div>
                        <div class="roompage-slideshow-container">
                        <div class="roompage-mySlides roompage-fade">
                            <?php if( get_field('image_unframed') ): ?>
                                <!-- <div  class="roompage-artwork-image" style="background-image: url('<?php echo the_field('image_unframed'); ?>')"></div> -->
                                <img class="roompage-artwork-image" data-url="<?php the_field('image_unframed'); ?>" src="<?php the_field('image_unframed'); ?>" />
                            <?php endif; ?>
                        </div>

                        <div class="roompage-mySlides roompage-fade">
                            <?php if( get_field('image_framed') ): ?>
                                <!-- <div  class="roompage-artwork-image" style="background-image: url('<?php echo the_field('image_framed'); ?>')"></div> -->
                                <img class="roompage-artwork-image" data-url="<?php the_field('image_framed'); ?>" src="<?php the_field('image_framed'); ?>" />
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>

                    <div class="roompage-artwork-info">
                        <h2 class="roompage-artwork-info__author"><?php the_title(); ?></h2>
                        <span class="roompage-artwork-info__years"><?php the_field('years_of_life'); ?></span>
                        <span class="roompage-artwork-info__name"><?php the_field('artwork_name'); ?></span>
                        <div class="roompage-artwork-icons">

                        <?php if( get_field('image_framed') ): ?>
                            <a href="#" id="image-frame" class="roompage-artwork-icons__frame" onclick="currentSlide(2)"></a>
                        <?php endif; ?>

                        <a href="#" class="roompage-artwork-icons__zoom" ></a>
                        </div>
                        <p class="roompage-artwork-text"><?php the_field('artwork_description'); ?></p>
                        <span class="roompage-artwork-signed"><?php the_field('artwork_signed'); ?></span>
                        <span class="roompage-artwork-material"><?php the_field('artwork_material'); ?></span>
                        <span class="roompage-artwork-sizes"><?php the_field('artwork_sizes'); ?></span>
                    </div>
                    </div>

                    <div id="roompage-modal-desktop" class="roompage-modal">
                    <div class="roompage-modal-buttons">
                        <a id="roompage-full-screen" class="roompage-full-screen" href="#"></a>
                        <span class="roompage-close">&times;</span>
                    </div>
                    <img id="roompage-modal-image" class="roompage-modal-content" src="<?php the_field('modal_image'); ?>" alt="Framed Painting">
                    </div>

                    <div class="roompage-opened-fullscreen">
                    <div id="roompage-overlay" data-url="<?php the_field('modal_image'); ?>"></div>
                    <div class="roompage-exit-full-screen ">
                        <a class="roompage-exit-button " href="# ">
                        <span>Exit Fullscreen</span>
                        </a>
                    </div>
                    </div>


            <!-- Flexible Content Section -->

            <?php if( have_rows('flexible_content_section') ): ?>

                    <?php while( have_rows('flexible_content_section') ): the_row(); ?>

                        <?php if( get_row_layout() == 'wysiwyg_block' ): ?>
                        <div class="roompage-about-artwork ">
                            <?php the_sub_field('wysiwyg'); ?>
                        </div>


                        <?php elseif( get_row_layout() == 'repeater_block' ): ?>
                         <?php
                                if( have_rows('repeater_field') ): ?>
                                    <div class="roompage-about-author ">

                                  <?php  while ( have_rows('repeater_field') ) : the_row(); ?>

                                        <div class="roompage-about-author__row">
                                            <img class="roompage-row-img " src="<?php  the_sub_field('repeater_image_block'); ?>" alt="Image ">
                                            <div class="roompage-row-text__div">
                                                <?php  the_sub_field('repeater_text');  ?>
                                             </div>
                                        </div>

                                    <?php endwhile; ?>
                                 </div>
                              <?php  endif; ?>


                        <?php elseif( get_row_layout() == 'video_block' ): ?>
                        <div class="video-block">
                            <div class='video-container'>
                                    <iframe src='<?php the_sub_field('art_video'); ?>' frameborder='0' allowfullscreen>
                                    </iframe>
                            </div>
                            <span class="roompage-video-decription ">
                                        <?php the_sub_field('video_description'); ?>
                            </span>
                        </div>


                        <?php elseif( get_row_layout() == 'quote_block' ): ?>
                        <?php
                            if( have_rows('quote_field') ): ?>
                            <?php while( have_rows('quote_field') ): the_row(); ?>
                                    <div class="roompage-restoration ">
                                        <div class="roompage-restoration-text__block ">
                                                <p class="roompage-restoration-text ">
                                                    <?php the_sub_field('quote'); ?>
                                                </p>
                                        </div>
                                        <img class="roompage-restoration-img " src="<?php the_sub_field('quote_image'); ?>" alt="Restoration process ">
                                    </div>
                                <?php    endwhile; ?>
                            <?php endif; ?>

                       <?php elseif( get_row_layout() == 'title_block' ): ?>
                        <div class="roompage-list-section ">
                                <h4 class="roompage-separator ">
                                    <span class="roompage-separator-text ">
                                        <?php the_sub_field('title'); ?>
                                    </span>
                                </h4>
                         </div >


                        <?php elseif( get_row_layout() == 'wysiwyg_block' ): ?>
                            <ul class="roompage-list ">
                                 <?php the_sub_field('wysiwyg'); ?>
                            </ul>


                        <?php elseif( get_row_layout() == 'image_block' ): ?>
                        <div class="roompage-list-section__image ">
                                <img class="roompage-list-image " src="<?php the_sub_field('image'); ?> " alt="Painter ">
                        </div>


                            <?php  endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

    <!--    End Of Flexible Content   -->
    <!--     Downloads Section         -->

                        <div class="roompage-downloads-section ">
                            <h4 class="roompage-separator ">
                                 <span class="roompage-separator-text "><?php the_field('downloads_title'); ?></span>
                             </h4>
                                <?php  if( have_rows('downloads_repeater') ): ?>
                                        <div class="roompage-downloads ">

                                            <?php  while ( have_rows('downloads_repeater') ) : the_row(); ?>
                                                <div class="roompage-link-container ">
                                                    <a class="roompage-downloads-link " href="<?php the_sub_field('downloads_link'); ?> "></a>
                                                    <span class="roompage-downloads-link__info "><?php the_sub_field('downloads_description'); ?></span>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                 <?php  endif; ?>
                        </div>

    <!--    End Of the Downloads Section      -->
    <!--    Other Rooms Section     -->
    <?php
             $current_user = wp_get_current_user();
             $current_user_id = $current_user->ID;
             $rooms = get_field('user_rooms', 'user_'.$current_user_id); ?>
               <?php if( $rooms ): ?>
                    <div class="roompage-rooms-section ">
                        <h4 class="roompage-separator ">
                            <span class="roompage-separator-text "></span>
                        </h4>
                        <div class="roompage-rooms ">
                            <ul class="roompage-rooms__list ">
                            <?php foreach( $rooms as $p): // variable must be called $post (IMPORTANT) ?>
                            <?php  $featured_img_url = get_the_post_thumbnail_url($p->ID,'large');  ?>

                                <li class="rooms-room-list__item ">
                                        <div class="rooms-room " data-aos="fade-up " data-aos-duration="15000 " data-aos-easing="linear ">
                                            <div class="rooms-room__img " style="background-image: url('<?php echo esc_url($featured_img_url); ?>')">
                                            </div>
                                            <div class="rooms-room__div ">
                                                <h1 class="rooms-room__author "><?php echo get_the_title($p->ID); ?></h1>
                                                <p class="rooms-room__text "> viewing room </p>
                                            <a href="<?php echo get_permalink($p->ID); ?>">
                                                    <button class="rooms-button " type="button ">enter</button>
                                                </a>
                                            </div>
                                        </div>
                                </li>

                  <?php endforeach; ?>
                            </ul>
                         </div>
                    </div>

          <?php endif; ?>
    <!--        End Of the Other Rooms Section       -->
    <!--         Related Section                  -->

                    <div class="roompage-related-section ">
                                    <h4 class="roompage-separator ">
                                        <span class="roompage-separator-text "><?php the_field('related_title'); ?></span>
                                    </h4>
                                    <div class="roompage-related ">

                                        <?php  if( have_rows('related_content') ): ?>
                                            <?php  while ( have_rows('related_content') ) : the_row(); ?>
                                                <a class="related-link" href="<?php the_sub_field('related_url'); ?>">
                                                <div class="roompage-related-img__container ">
                                                        <div class="roompage-related-img " style="background-image: url('<?php the_sub_field('background_image'); ?>')">
                                                        </div>
                                                        <span class="roompage-related-img__info ">
                                                            <?php the_sub_field('related_heading'); ?>
                                                        </span>
                                                </div>
                                                </a>
                                             <?php endwhile; ?>
                                        <?php  endif; ?>
                                    </div>
                    </div>

    <!--        End Of the Related Section            -->
            <?php endwhile; ?>
     <?php endif; ?>

 <?php get_footer(); ?>
