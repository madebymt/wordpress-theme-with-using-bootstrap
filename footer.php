<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_theme
 */

?>

<div class="div-block-13">
  <div class="w-row">
    <div class="column-4 w-col w-col-4">
      <div class="div-block-14"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/your-logo300.png" class="image-5 footer-img">
        <p class="paragraph-8">&copy; <?php echo Date('Y') ?> - <?php bloginfo('name');?></p>
      </div>
    </div>
    <div class="w-col w-col-4">
      <h1 class="heading-9">PRODUCT</h1>
      <p class="paragraph-9">T-SHIRT<br>DRESS<br>BAG<br>OTHER</p>
    </div>
    <div class="w-col w-col-4">
      <h1 class="heading-9">PRIVACY</h1>
      <p class="paragraph-9">ABOUT<br>CONTACT<br>SUPPORT<br>HOUR: 10AM - 6PM</p>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/wtheme.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
