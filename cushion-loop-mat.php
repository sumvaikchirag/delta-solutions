<?php
  require_once ("product.php");
  $product = new Product();
  $productArray = $product->getAllProduct();

  /* ---- cart state for this product (code "02") ---- */
  $dp_code    = isset($productArray["02"]["code"]) ? $productArray["02"]["code"] : '';
  $dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
  $dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

  /* ---- images: swap these for your own ---- */
  $dp_hero_image  = 'images/Entrance Matting/10.jpg';
  $dp_detail_image = 'images/product-images/Entrance Matting/Cushion Loop/cushion-loop-detail.jpg';

  /* ---- the six colours.
    'img'  = swatch photo URL -- ADD YOUR REAL IMAGE URLS HERE
    'hex'  = fallback tile colour, shown automatically if the img fails to load   ---- */
  $dp_colours = array(
    array('name'=>'Black',       'code'=>'11019', 'hex'=>'#3a3d40', 'img'=>'images/Entrance Matting/11.jpg'),
    array('name'=>'Red',         'code'=>'11028', 'hex'=>'#ed3237', 'img'=>'images/Entrance Matting/4.jpg'),
    array('name'=>'Light Grey',  'code'=>'11026', 'hex'=>'#b3b6b9', 'img'=>'images/Entrance Matting/12.jpg'),
    array('name'=>'Dark Grey',   'code'=>'11023', 'hex'=>'#6e7276', 'img'=>'images/Entrance Matting/13.jpg'),
    array('name'=>'Light Green', 'code'=>'11025', 'hex'=>'#7aa64f', 'img'=>'images/Entrance Matting/14.jpg'),
    array('name'=>'Dark Green',  'code'=>'11022', 'hex'=>'#166b4d', 'img'=>'images/Entrance Matting/15.jpg'),
  );
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8"/>
  <title>Cushion / Loop Mat by Delta Solutions</title>
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/style.css" rel="stylesheet"/>
  <link href="css/responsive.css" rel="stylesheet"/>
  <!-- shared product-page design system -->
  <link href="css/delta-product.css" rel="stylesheet"/>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
  <link href="images/favicon.png" rel="icon" type="image/x-icon"/>
  <meta content="Delta Cushion / Loop entrance matting - 17 mm heavy-duty open vinyl coil matting in six colours. Scrapes soles clean, traps grit and drains water straight through." name="description"/>
  <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
  <link href="https://delta-solutions.in/cushion-loop-mat.php" rel="canonical"/>
  <meta content="index, follow" name="robots"/>
  <link href="https://fonts.gstatic.com" rel="preconnect"/>
  <!-- Typeface: Roboto only -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
  <meta content="Cushion / Loop Mat" property="og:title"/>
  <meta content="Delta Cushion / Loop entrance matting - 17 mm heavy-duty open vinyl coil matting in six colours. Scrapes soles clean, traps grit and drains water straight through." property="og:description"/>
  <meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Cushion%20Loop/cushion-loop.jpg" property="og:image"/>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-0WPY5YR5W4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0WPY5YR5W4');
  </script>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K4ZLQJJ');</script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "Cushion / Loop Mat",
    "description": "Delta Cushion / Loop entrance matting - 17 mm heavy-duty open vinyl coil matting in six colours. Scrapes soles clean, traps grit and drains water straight through.",
    "brand": { "@type": "Brand", "name": "Delta" },
    "url": "https://delta-solutions.in/cushion-loop-mat.php"
  }
  </script>
  </head>

  <body>
  <noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
  <div class="page-wrapper">
  <?php include 'header.php';?>

  <main class="dp-page">

    <!-- ============ BREADCRUMB ============ -->
    <nav class="dp-crumbs">
      <div class="dp-wrap">
        <ul class="dp-crumbs__list page-breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="entrance-matting-systems.php">Entrance Matting Systems</a></li>
          <li>Cushion / Loop Mat</li>
        </ul>
      </div>
    </nav>

    <!-- ============ HERO (light panel, media right) ============ -->
    <section class="dp-hero dp-hero--light dp-hero--flip">
      <div class="dp-hero__media">
        <img alt="Cushion Loop Mat - Delta Solutions" src="<?php echo $dp_hero_image; ?>"/>
      </div>

      <div class="dp-hero__panel">
        <span class="dp-eyebrow">Collection 02 &middot; Zone 1&ndash;2</span>
        <h1 class="dp-h1">Cushion / Loop &mdash; coil by coil, <em>cleaner</em> floors<span class="dot">.</span></h1>
        <span class="dp-rule"></span>

        <p class="dp-body">
          Delta Cushion / Loop matting is a dense, springy web of vinyl coils &mdash; 17 mm of open
          structure that scrapes soles clean, traps grit deep below the walking surface, and lets
          water drain straight through.
        </p>
        <p class="dp-body">
          Cut it to any shape, run it wall to wall, hose it down when it's full. It is the workhorse
          of Indian entrances &mdash; porches, ramps, poolsides and loading bays included.
        </p>

        <div class="dp-metrics">
          <div class="dp-metric"><b>17</b><i>mm</i><span>Thickness</span></div>
          <div class="dp-metric"><b>8.2</b><i>kg/m&sup2;</i><span>Density</span></div>
          <div class="dp-metric"><b>6</b><span>Colours</span></div>
        </div>


      </div>
    </section>

    <!-- ============ COLOURS ============ -->
    <section class="dp-section">
      <div class="dp-wrap">
        <div class="dp-sectionhead dp-reveal">
          <span class="dp-eyebrow dp-eyebrow--muted">Cushion / Loop &middot; Heavy Duty</span>
          <h2 class="dp-h2">Six colours, <em>equally tough</em><span class="dot">.</span></h2>
        </div>

        <div class="dp-swatches dp-reveal">
          <?php foreach ($dp_colours as $c): ?>
          <div class="dp-swatch">
            <div class="dp-swatch__tile" style="background-color:<?php echo $c['hex']; ?>;">
              <?php if (!empty($c['img'])): ?>
              <img alt="Cushion Loop Mat <?php echo $c['name']; ?> - Delta Solutions" src="<?php echo $c['img']; ?>" onerror="this.style.display='none';"/>
              <?php endif; ?>
            </div>
            <div class="dp-swatch__meta">
              <span class="dp-swatch__name"><?php echo $c['name']; ?></span>
              <span class="dp-swatch__code"><?php echo $c['code']; ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>

    <!-- ============ HOW IT WORKS ============ -->
    <section class="dp-section dp-section--dark dp-on-dark">
      <div class="dp-wrap">
        <div class="dp-sectionhead dp-sectionhead--split dp-reveal">
          <div>
            <span class="dp-eyebrow">How it works</span>
            <h2 class="dp-h2">The dirt goes <em>under</em> the surface.</h2>
          </div>
          <p class="dp-lead">
            An open coil structure lets dirt and water fall below the walking surface &mdash; so the
            mat looks clean long after it has started working.
          </p>
        </div>

        <!--<div class="dp-anatomy__media dp-reveal">-->
        <!--  <img alt="Cushion Loop Mat detail - Delta Solutions" src="<?php echo $dp_detail_image; ?>"/>-->
        <!--  <span class="dp-anatomy__cap">Cushion / Loop Structure &middot; Visualised Installation</span>-->
        <!--</div>-->

        <div class="dp-feats dp-reveal">
          <div class="dp-feat">
            <span class="dp-feat__n">01</span>
            <h3>Scrapes on contact</h3>
            <p>A springy vinyl web works against the sole with every step, without needing anyone to wipe their feet.</p>
          </div>
          <div class="dp-feat">
            <span class="dp-feat__n">02</span>
            <h3>Holds grit below</h3>
            <p>17 mm of open structure keeps debris beneath the walking plane and out of sight.</p>
          </div>
          <div class="dp-feat">
            <span class="dp-feat__n">03</span>
            <h3>Drains water</h3>
            <p>Rain runs straight through instead of pooling &mdash; ideal for porches, ramps and poolsides.</p>
          </div>
          <div class="dp-feat">
            <span class="dp-feat__n">04</span>
            <h3>Hoses clean</h3>
            <p>Lift it, wash it, put it back. Maintenance is a hose and a few minutes, not a specialist visit.</p>
          </div>
        </div>


      </div>
    </section>

    <!-- ============ SPECIFICATION + WHERE TO USE ============ -->
    <section class="dp-section dp-section--soft">
      <div class="dp-wrap">
        <div class="dp-sectionhead dp-sectionhead--split dp-reveal">
          <div>
            <span class="dp-eyebrow">Specification</span>
            <h2 class="dp-h2">Sold by the roll, <em>cut to your run</em>.</h2>
          </div>
          <p class="dp-lead">
            One roll covers a 4&#39; wide run over 26&#39;3&quot; &mdash; cut to length on site and
            finished to the shape of the opening.
          </p>
        </div>

        <div class="dp-specpanel dp-reveal">
          <span class="dp-eyebrow">Technical Data</span>
          <div class="dp-specgrid">
            <div><span>Construction</span><b>Open vinyl coil, heavy duty</b></div>
            <div><span>Thickness</span><b>17 mm</b></div>
            <div><span>Roll size</span><b>4&#39; &times; 26&#39;3&quot;</b></div>
            <div><span>Roll weight</span><b>80 kg</b></div>
            <div><span>Density</span><b>8.2 kg/m&sup2;</b></div>
            <div><span>Colours</span><b>Six &middot; codes 11019&ndash;11028</b></div>
            <div><span>Zone</span><b>Zone 1&ndash;2 &middot; Primary matting</b></div>
            <div><span>Unit</span><b>Sq.ft</b></div>
          </div>
          <p>Open coil structure lets dirt and water fall below the walking surface. <em>Colour renders indicative; physical swatches available.</em></p>
        </div>

        <div style="margin-top:clamp(40px,5vw,68px);" class="dp-reveal">
          <span class="dp-eyebrow">Where to use</span>
          <div class="dp-apply">
            <div class="dp-apply__i">
              <span class="dp-apply__n">01</span>
              <h3>Outside the door</h3>
              <p>Porches, canopies and approach ramps &mdash; the wettest ground, where drainage matters most.</p>
            </div>
            <div class="dp-apply__i">
              <span class="dp-apply__n">02</span>
              <h3>Wet surrounds</h3>
              <p>Poolsides, washrooms and kitchens, where a mat has to shed water instead of holding it.</p>
            </div>
            <div class="dp-apply__i">
              <span class="dp-apply__n">03</span>
              <h3>Service entrances</h3>
              <p>Loading bays and staff doors, where the grit is coarse and the traffic is constant.</p>
            </div>
          </div>

          <div class="dp-tags">
            <span class="dp-tag">Porches</span>
            <span class="dp-tag">Ramps</span>
            <span class="dp-tag">Poolsides</span>
            <span class="dp-tag">Loading bays</span>
            <span class="dp-tag">Wall-to-wall runs</span>
          </div>
        </div>


      </div>
    </section>

    <!-- ============ ENQUIRY ============ -->
    <section class="dp-section dp-section--dark dp-on-dark">
      <div class="dp-wrap dp-enquiry">
        <div>
          <span class="dp-rule" style="margin-top:0;"></span>
          <h2 class="dp-h2">Add Cushion / Loop to your enquiry basket.</h2>
          <p class="dp-lead" style="margin-top:14px;">Tell us the run, the colour and the exposure, and we'll come back with rolls, cutting and a price.</p>
        </div>

        <div class="dp-actions">
          <button type="button"
                  class="dp-btn dp-btn--solid theme-btn btn-style-onecart btnAddAction"
                  id="add_<?php echo $dp_codeAtt; ?>"
                  onClick="cartAction('add','<?php echo $dp_codeAtt; ?>')"
                  <?php if ($dp_in_cart) { ?>style="display:none"<?php } ?>>
            Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"/>
          </button>

          <button type="button"
                  class="dp-btn dp-btn--added theme-btn btn-style-onecart btnAdded"
                  id="added_<?php echo $dp_codeAtt; ?>"
                  <?php if (!$dp_in_cart) { ?>style="display:none"<?php } ?>>
            Added <img src="images/icon-check.png" alt="Added checkmark"/>
          </button>

          <a class="dp-btn dp-btn--ghost" href="entrance-matting-systems.php">Back to the range</a>

          <input class="dp-hidden" type="hidden" id="qty_<?php echo $dp_codeAtt; ?>" name="quantity" value="1" size="2"/>
          <input class="dp-hidden" type="hidden" id="remark_<?php echo $dp_codeAtt; ?>" name="remark" value=""/>
        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php';?>
  </div>
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
          $('.products').addClass('current');
      });

  /* ---- reveal on scroll ---- */
  (function () {
      var els = document.querySelectorAll('.dp-reveal');
      if (!('IntersectionObserver' in window)) {
          for (var i = 0; i < els.length; i++) { els[i].className += ' is-in'; }
          return;
      }
      var io = new IntersectionObserver(function (entries) {
          entries.forEach(function (e) {
              if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
          });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.06 });
      Array.prototype.forEach.call(els, function (el) { io.observe(el); });
  }());
  </script>
  </body>
  </html>