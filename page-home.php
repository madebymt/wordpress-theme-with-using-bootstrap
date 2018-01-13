<?php
/*
Template name: Home page
 */
 //custume field
get_header();?>
<?php if(is_front_page()) ?>

<?php
$slider1_head = get_post_meta(11,'slider1_head',true);
$slider1_content = get_post_meta(11,'slider1_content',true);

$slider1 = get_field('slider1');
$slider2 = get_field('slider2');
$slider3 = get_field('slider3');
$size = 'full';
$sign_up_title = get_field('sign_up_title');
$sign_up_intro = get_field('sign_up_into');
$sign_up_form = get_field('sign_up_form');

$author_img = get_field('author_img');
$author_title = get_field('about_tilte');
$about_author = get_field('about_author');

$product_feature_img = get_field('product_feature_img');
$product_title = get_field('product_title');
$product_price = get_field('product_price');
?>



<!-- <div class="">
<div class="w-slider-mask">
  <div class="slide w-slide">
    <div class="div-block slider-wrapper">
      <div class="div-block-2">
        <h1 class="heading"><?php echo $slider1_head;?></h1>
        <p class="paragraph"><?php echo $slider1_content; ?></p>
        <br>
        <br>
      </div>
    </div>
  </div>

      <!- slider 2-->
      <!-- <div class="slide-2 w-slide">
        <div class="div-block slider-wrapper">
          <div class="div-block-2">
            <h1 class="heading">Deslicious</h1>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
              cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div> -->

      <!--  slider 3 -->
      <!-- <div class="slide-3 w-slide">
        <div class="div-block slider-wrapper">
          <div class="div-block-2">
            <h1 class="heading">Desert time</h1>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
              cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div>
  </div>
  </div> -->

  <!---  end of slider    -->
    <div class="left-arrow w-slider-arrow-left">
      <div class="icon w-icon-slider-left"></div>
    </div>
    <div class="right-arrow w-slider-arrow-right">
      <div class="icon-2 w-icon-slider-right"></div>
    </div>
    <div class="slide-nav w-slider-nav w-round"></div>
  </div>
  </div>

  <div class="div-block-17">
    <div class="div-block-16 home-signup">
      <h1 class="heading-11"><?php echo $sign_up_title;?></h1>
      <!-- <?php get_field('sign_up_form');?> -->
      <!-- <div>
        <div class="w-form">
      </div> -->
    </div>
  </div>

  <div>
    <div class="row w-row">
      <div class="column w-col w-col-6">
        <div class="div-block-3">
					<img src="<?php the_field('author_img'); ?>" sizes="(max-width: 479px) 85vw, (max-width: 767px) 91vw, (max-width: 991px) 48vw, 25vw" class="image">
				</div>
      </div>
      <div class="column-6 w-col w-col-6">
        <div class="div-block-5">
          <h1 class="heading-3"><?php the_field('author_title');?></h1>
          <p class="paragraph-2"><?php the_field('about_author');?></p>
          <div class="div-block-11"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="div-block-10">
    <h1 class="heading-7">TOP SELLER</h1>
    <!-- <p class="paragraph-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id
      rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p> -->
    <div class="w-row">

      <?php $loop = new WP_Query(array('post_type' =>'product_feature','orderby' =>'post_id','order' => 'ASC')); ?>

      <?php while ($loop->have_posts() ) : $loop->the_post(); ?>

      <div class="column-5 w-col w-col-4">
        <div>
          <img src="<?php the_field('product_feature_img');?>" alt="">
          <h1 class="heading-8"><?php the_title(); ?></h1>
          <p class="paragraph-7"><?php the_field('product_price')?></p>
        </div>
    </div>
      <?php endwhile; ?>
  </div>




 <!-- //// post area //// -->

  <div class="div-block-20"> </div>
  <div class="div-block-12">

    <h1 class="heading-3 popular-post">RECENT POST</h1>
    <div class="div-block-11 div-center"></div>
    <div>

    </div>

      <div class="w-row">
        <?php echo do_shortcode("[post_grid id='43']"); ?>


      </div>

  </div>





<!-- /// button sign up /// -->

  <div class="div-block-15">
    <!-- <div data-w-id="13d89fc0-978c-a5d7-5dd8-14091d73373b" class="div-block-40 modal"> -->
      <!-- <div class="div-block-41 w-clearfix"><a href="#" data-w-id="1e88e741-8e04-a4f0-8cfd-af6dd85518f7" class="link-11">Close X</a>
        <h1 class="heading-19">Sign up for goodies</h1>
        <p class="paragraph-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus
          id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        <div class="w-form">
          <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label for="name-3" class="field-label-7">Name:</label><input type="text" class="w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2"><label for="email-3" class="field-label-8">Email Address:</label><input type="text" class="w-input"
              maxlength="256" name="email-2" data-name="Email 2" id="email-2" required=""><input type="submit" value="JOIN ME" data-wait="Please wait..." class="submit-button-4 w-button">
            <p class="paragraph-16">No Spam, just some good info you would like.</p>
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
  </div>  -->
    <h1 class="heading-10">Journey start here...</h1>
    <a href="#" data-w-id="447913fd-49d5-938c-f1c7-16b5bc980535" class="button w-button">JOIN ME</a>
  </div> -->


<?php get_footer(); ?>
