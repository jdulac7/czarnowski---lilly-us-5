<?php
/**                                               Template Name: Medical Disclosures Page
*                                                 Template Post Type: page, post
*                       *                         @package WordPress
*        *                  .'.  _       *        @subpackage lilly_tradeshow
*                         ."   '' '.              @since 1.0.0
*               *       .*     .. '*.`*._
*                     _/    _.*'._..*''`._'*      *        .'.        *
*   *               ,'8                 _.*'.`_          ."   '' '.
*                _.*8                         `'\ .'.._         .. '*.`*._
*     *       /8'\         .*8  .. '*.         .*8  .. '*.         .*''`._'*
*          .'/8   \_   _.*'._                     .. '*.`*._         `'\ .'..__
*      _.*' .        '*.             .*8  ..                 \_   -------------
*    .*8  .. '*.                         .*8  .. '*.           `*._------------
*_.*'._                            .*8  ..                          `*._-------
*______________________________________________________________________________
*                       Lilly_tradeshow theme by iBec Creative */

get_header();

$resources = get_field('resources');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
  .cardBlock img {
    border: 2px solid #eeeeee;
  }

  .cardBlock__card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .page-template-downloadable_resources,
  .page-template-medical_resources {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/x-bg.svg) no-repeat top center;
    background-size: 100%;
  }

  .pdfModal__inner {
    text-align: center;
  }

  .addToCart {
    display: inline-block !important;
    text-indent: 26px;
    background: url(/wp-content/themes/lilly_tradeshow/ibex/images/download-gray.svg) no-repeat left center;
  }


  .addToCart.added {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg) no-repeat left center;
    text-indent: 28px;
    color: #ee3a2a;
  }

  .addToCart.added img,
  .addToCart img {
      display: none !important;
      
    }
    .page-template-medical_resources h1,
    .cardBlock__card--large .card__title {
      font-family: "FFDINWebProLight", sans-serif;
    }

.clippy {
  float: right;
    margin-top: -140px;
    width: 268px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.clippy p {
  font-family: "FFDINWebProCondensedBold", sans-serif;
  text-decoration: none;

}

</style>


<main id="site-content" class="x-background x-background--left" role="main" style="background-position: 0% -3%;">

  <div class="content">

    <div class="flex">

        <div class="flex__left">
            <h1>Scientific Disclosures</h1>
            <h6 style="font-style: italic;">LILLY’S PRESENTATIONS AND POSTERS</h6>
            <p>Saturday, May 21, 2022, 12:30-5:30 p.m. PST </p>
            <p>Sunday, May 22, 2022, 12:30-1:30 p.m. PST</p>
            <p>Monday, May 23, 2022, 12:30-1:30 p.m. PST</p>
            <p>Tuesday, May 24, 2022, 8:00-1:30 p.m. PST</p>
        </div>

        <div class="flex__right">
            <p style="max-width: 450px;"><img style="cursor:pointer;" onclick="window.open('https://lillyscience.lilly.com/congress/ddw2022','_blank');" class="alignleft size-full wp-image-1875" src="<?php echo bloginfo('stylesheet_directory');?>/ibex/images/qr.png" alt="QR Code" width="80" height="80" />For a complete list of Lilly’s presentations and posters, please scan this QR code or visit <a style="display: inline; text-transform: none; font-size: 16px; margin-left: 0;" href="https://lillyscience.lilly.com/congress/ddw2022 " target="_blank">lillyscience.lilly.com/congress/ddw2022 </a></p>
          
      
        </div>

    </div>

    <div>
      <?php the_content(); ?>
    </div>

  </div>

  <?php
    // additional links to other pages (will be the same on all pages)
    get_template_part( 'template-parts/navigation/explore' );
    ?> 


</main><!-- #site-content -->


<?php 
foreach ($resources as $resource) {
?>

  <div class="pdfModal" style="" data-resource="<?= $resource['title'] ?>">
    <div class="pdfModal__inner">
      <div class="pdfModal__close">╳</div>
      <p class="pdfModal__title"><?= $resource['title'] ?></p>
      <a class="addToCart" href="<?= $resource['file']['url'] ?>" target="_blank" download><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/download-gray.svg" alt="download icon">DOWNLOAD DOCUMENT</a>
      
      <div class="resourceSlider">

        <?php 
          $images = $resource['images'];
          if (is_array($images)) {
            foreach ($images as $image) {
        ?>

        <div class="resourceSlide">
          <img src="<?= $image['url'] ?>">
        </div>

        <?php
            }//end foreach image
          }//endif
        ?>

      </div>
    </div>
  </div>

<?php
}
?>

<script>
$(document).ready(function(){
    $('.resourceSlider').slick({
      lazyLoad: false,
      draggable: false,
      infinite: true
    });
  });
  </script>
<?php get_footer(); ?>
