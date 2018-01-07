<?php
/*
Template name: Home page

 */

get_header(); ?>

<!-- slider -->

<?php if(is_front_page()) ?>


<div class="">
<div class="w-slider-mask">
  <div class="slide w-slide">
    <div class="div-block slider-wrapper">
      <div class="div-block-2">
        <h1 class="heading">start fresh of day</h1>
        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
          cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      </div>
    </div>
  </div>

      <!--   slider 2-->
      <div class="slide-2 w-slide">
        <div class="div-block slider-wrapper">
          <div class="div-block-2">
            <h1 class="heading">Deslicious</h1>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
              cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div>

      <!--  slider 3 -->
      <div class="slide-3 w-slide">
        <div class="div-block slider-wrapper">
          <div class="div-block-2">
            <h1 class="heading">Desert time</h1>
            <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
              cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          </div>
        </div>
      </div>
  </div>
  </div>

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
      <h1 class="heading-11">JOIN ME WITH ALL THE GOODIES</h1>
      <!-- <div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form-2"><label for="name" class="field-label">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" id="name" required=""><label for="email" class="field-label-2">Email:</label><input type="text" class="text-field-2 w-input"
              maxlength="256" name="email" data-name="Email" id="email" required=""><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <div>
    <div class="row w-row">
      <div class="column w-col w-col-6">
        <div class="div-block-3">
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/pic1.png" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/pic1-p-500.png 500w, images/pic1.png 635w" sizes="(max-width: 479px) 85vw, (max-width: 767px) 91vw, (max-width: 991px) 48vw, 25vw" class="image">
				</div>
      </div>
      <div class="column-6 w-col w-col-6">
        <div class="div-block-5">
          <h1 class="heading-3">My name is Ally</h1>
          <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus
            id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. </p>
          <div class="div-block-11"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="div-block-10">
    <h1 class="heading-7">TOP SELLER</h1>
    <p class="paragraph-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id
      rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
    <div class="w-row">
      <div class="column-5 w-col w-col-4">
        <div><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 87vw, (max-width: 3657px) 28vw, 1024px"
            data-w-id="167eb020-cc10-2fa4-07be-3f9945f2da08">
          <h1 class="heading-8">T-SHIRT</h1>
          <p class="paragraph-7">$24.99</p>
        </div>
      </div>
      <div class="w-col w-col-4"><img src="<<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 84vw, (max-width: 3657px) 28vw, 1024px"
          data-w-id="81c8a637-f29b-606d-53c0-19be2684cf86">
        <h1 class="heading-8">T-SHIRT</h1>
        <p class="paragraph-7">$24.99</p>
      </div>
      <div class="w-col w-col-4"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 84vw, (max-width: 3657px) 28vw, 1024px"
          data-w-id="5edf8143-1aba-9357-3277-b9d0e49f8725">
        <h1 class="heading-8">T-SHIRT</h1>
        <p class="paragraph-7">$24.99</p>
      </div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-4">
        <div><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 84vw, (max-width: 3657px) 28vw, 1024px"
            data-w-id="8cf9d881-5f3b-6a4a-dadb-886f08056272">
          <h1 class="heading-8">T-SHIRT</h1>
          <p class="paragraph-7">$24.99</p>
        </div>
      </div>
      <div class="w-col w-col-4"><img src="<<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 84vw, (max-width: 3657px) 28vw, 1024px"
          data-w-id="0148b804-e89f-cc36-2afa-b477b5aff841">
        <h1 class="heading-8">T-SHIRT</h1>
        <p class="paragraph-7">$24.99</p>
      </div>
      <div class="w-col w-col-4"><img src="<<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624.jpg" srcset="<?php bloginfo('stylesheet_directory');?>/assets/images/free-tshirt-mockup-1024x624-p-800.jpeg 800w, images/free-tshirt-mockup-1024x624.jpg 1024w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 84vw, (max-width: 3657px) 28vw, 1024px"
          data-w-id="fee24b52-d3c2-b0ec-19ca-61c9dee564b6">
        <h1 class="heading-8">T-SHIRT</h1>
        <p class="paragraph-7">$24.99</p>
      </div>
    </div>
  </div>




 <!-- //// post area //// -->

  <div class="div-block-20"> </div>
  <div class="div-block-12">

    <h1 class="heading-3 popular-post">RECENT POST</h1>
    <div class="div-block-11 div-center"></div>
    <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="w-row">
        <div class="column-3 w-col w-col-4">
          <div class="div-block-8">
            <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail(); ?>" data-w-id="6c2180c1-d4fe-9540-e918-0425885df16f" class="image-3">
            <h1 class="heading-4"><?php the_title(); ?></h1>
          </a>
            <p class="paragraph-3"><?php the_content(); ?></p>
          </div>
        </div>
 
      </div>
    </div>
  </div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


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
      </div> -->
    <!-- </div> -->
    <h1 class="heading-10">Journey start here...</h1>
    <a href="#" data-w-id="447913fd-49d5-938c-f1c7-16b5bc980535" class="button w-button">JOIN ME</a>
  </div>


<?php get_footer(); ?>
