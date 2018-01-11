<?php
/*
Template name: Blog post

 */

get_header(); ?>

<body class="blog">

  <div class="div-block-21">
    <h1 class="heading-12">Blog</h1>
  </div>


  <!--- blog post  -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="div-block-54">
    <div class="w-row">
      <div class="column-7 w-col w-col-8">
        <div class="div-block-22">
          <a href="blog-post.html" class="link-block w-inline-block">
            <h1 class="heading-13"><?php the_title(); ?></h1>
          </a>
          <div class="div-block-24">
            <a href="#" class="link"></a>
            <a href="#" class="link-5">Ruby</a>
            <a href="#" class="link-2"></a>
            <a href="#" class="link-2"> Life</a>
            <a href="#" class="link-3"></a>
            <a href="#" class="link-3">Travel, food, love</a>
            <a href="#" class="link-4"></a><a href="#" class="link-4">12/25/2017</a>
          </div>
          <img src="images/pexels-photo-378153.jpeg" srcset="images/pexels-photo-378153-p-500.jpeg 500w, images/pexels-photo-378153-p-800.jpeg 800w, images/pexels-photo-378153.jpeg 1062w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 89vw, (max-width: 991px) 58vw, 60vw" class="image-9">
          <p class="paragraph-11">
            <?php t; ?>
          </p>
            <a href="#" class="link-6 read-more">Read More</a>
          <div class="div-block-25">
            <a href="#" class="link-6"></a>
            <a href="#" class="link-6">Comment</a>
            <a href="#" class="link-6"></a>
            <a href="#" class="link-6">Read More</a>
          </div>
        </div>



    <?php endwhile; else : ?>
      <p> <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        <!-- <div class="div-block-22">
          <a href="/post" class="link-block w-inline-block">
            <h1 class="heading-13">BLOG POST 1</h1>
          </a>
          <div class="div-block-24"><a href="#" class="link"></a><a href="#" class="link-5">Ruby</a><a href="#" class="link-2"></a><a href="#" class="link-2"> Life</a><a href="#" class="link-3"></a><a href="#" class="link-3">Travel, food, love</a><a href="#" class="link-4"></a><a href="#" class="link-4">12/25/2017</a></div><img src="images/pexels-photo-378153.jpeg" srcset="images/pexels-photo-378153-p-500.jpeg 500w, images/pexels-photo-378153-p-800.jpeg 800w, images/pexels-photo-378153.jpeg 1062w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 89vw, (max-width: 1831px) 58vw, 1062px">
          <p class="paragraph-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a href="#" class="link-6 read-more">Read More</a>
          <div class="div-block-25"><a href="#" class="link-6"></a><a href="#" class="link-6">Comment</a><a href="#" class="link-6"></a><a href="#" class="link-6">Read More</a></div>
        </div>
        <div class="div-block-22">
          <a href="/post" class="link-block w-inline-block">
            <h1 class="heading-13">BLOG POST 1</h1>
          </a>
          <div class="div-block-24"><a href="#" class="link"></a><a href="#" class="link-5">Ruby</a><a href="#" class="link-2"></a><a href="#" class="link-2"> Life</a><a href="#" class="link-3"></a><a href="#" class="link-3">Travel, food, love</a><a href="#" class="link-4"></a><a href="#" class="link-4">12/25/2017</a></div><img src="images/pexels-photo-378153.jpeg" srcset="images/pexels-photo-378153-p-500.jpeg 500w, images/pexels-photo-378153-p-800.jpeg 800w, images/pexels-photo-378153.jpeg 1062w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 89vw, (max-width: 1831px) 58vw, 1062px">
          <p class="paragraph-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a href="#" class="link-6 read-more">Read More</a>
          <div class="div-block-25"><a href="#" class="link-6"></a><a href="#" class="link-6">Comment</a><a href="#" class="link-6"></a><a href="#" class="link-6">Read More</a></div>
        </div>
        <div class="div-block-22">
          <a href="/post" class="link-block w-inline-block">
            <h1 class="heading-13">BLOG POST 1</h1>
          </a>
          <div class="div-block-24"><a href="#" class="link"></a><a href="#" class="link-5">Ruby</a><a href="#" class="link-2"></a><a href="#" class="link-2"> Life</a><a href="#" class="link-3"></a><a href="#" class="link-3">Travel, food, love</a><a href="#" class="link-4"></a><a href="#" class="link-4">12/25/2017</a></div><img src="images/pexels-photo-378153.jpeg" srcset="images/pexels-photo-378153-p-500.jpeg 500w, images/pexels-photo-378153-p-800.jpeg 800w, images/pexels-photo-378153.jpeg 1062w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 89vw, (max-width: 1831px) 58vw, 1062px">
          <p class="paragraph-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a href="#" class="link-6 read-more">Read More</a>
          <div class="div-block-25"><a href="#" class="link-6"></a><a href="#" class="link-6">Comment</a><a href="#" class="link-6"></a><a href="#" class="link-6">Read More</a></div>
        </div> -->
   </div>

   <!-- // sidebar -->
      <div class="column-8 w-col w-col-4">
        <div class="div-block-26">
          <div class="div-block-31">
            <h4 class="heading-14">JOIN US WITH GOODIE</h4><a href="#" class="button-2 w-button">SIGN UP HERE</a></div>
          <div class="div-block-27">
            <h4 class="heading-14">ABOUT</h4><img src="images/pic1.png" srcset="images/pic1-p-500.png 500w, images/pic1.png 635w" sizes="(max-width: 479px) 55vw, (max-width: 767px) 60vw, (max-width: 991px) 19vw, 20vw" class="image-8">
            <p class="paragraph-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a href="#" class="link-7"></a><a href="#" class="link-7"></a><a href="#" class="link-7"></a><a href="#" class="link-7"></a></div>
        </div>
        <div class="div-block-28">
          <h4 class="heading-14">Recent post</h4>
          <div class="div-block-29 w-clearfix">
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Blog post </p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Blog post </p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Blog post </p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Blog post </p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Blog post </p>
              <p class="paragraph-13">Blog post </p>
              <p class="paragraph-13">Blog post </p>
              <p class="paragraph-13">Blog post </p>
            </a>
          </div>
        </div>
        <div class="div-block-28">
          <h4 class="heading-14">Categories</h4>
          <div class="div-block-29 w-clearfix">
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Food</p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Beauty</p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Travel</p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Photo</p>
            </a>
            <a href="#" class="link-block-2 w-inline-block">
              <p class="paragraph-13">Relationship</p>
            </a>
          </div>
        </div>
        <div class="div-block-28">
          <h4 class="heading-14">Tags</h4>
          <div class="div-block-30 w-clearfix"><a href="#" class="link-9">Houston</a><a href="#" class="link-9">Travel</a><a href="#" class="link-9">NY</a><a href="#" class="link-9">CA</a><a href="#" class="link-9">Life</a><a href="#" class="link-9">Food</a><a href="#" class="link-9">Pet</a><a href="#" class="link-9">Friends</a></div>
        </div>
        <div class="div-block-28">
          <h4 class="heading-14">Search</h4>
          <div>
            <form action="/search" class="search w-form"><input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search…" id="search" required=""><input type="submit" value="Search" class="search-button w-button"></form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="div-block-16">
      <h1 class="heading-11">JOIN ME WITH ALL THE GOODIES</h1>
      <div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form-2"><label for="name" class="field-label">Name:</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" id="name" required=""><label for="email" class="field-label-2">Email:</label><input type="text" class="text-field-2 w-input" maxlength="256" name="email" data-name="Email" id="email" required=""><input type="submit" value="SIGN UP" data-wait="Please wait..." class="submit-button w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>



<?php get_footer(); ?>
