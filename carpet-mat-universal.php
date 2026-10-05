<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ---- cart state for this product (code "04") ---- */
$dp_code    = isset($productArray["04"]["code"]) ? $productArray["04"]["code"] : '';
$dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
$dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

/* ---- images: swap these for your own ---- */
$dp_hero_image = 'images/product-images/Entrance Matting/Carpet Mat Universal/carpet-mat-universal-large.jpg';
/* fall back cleanly if the hero file hasn't been uploaded yet */
$dp_hero_ok = file_exists(__DIR__ . '/' . $dp_hero_image);

/* ---- colours. 'hex' is the fallback tile colour until 'img' exists ---- */
$dp_colours = array(
  array('name'=>'Universal &mdash; Grey',  'code'=>'11510', 'hex'=>'#9aa0a6', 'desc'=>'Mid-tone flecked grey that hides everyday soiling between cleans.', 'img'=>'images/Entrance Matting/5.jpg'),
  array('name'=>'Universal &mdash; Black', 'code'=>'11511', 'hex'=>'#232528', 'desc'=>'Deep charcoal-black for formal entrances and dark floor palettes.',  'img'=>'images/Entrance Matting/0.jpg'),
);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Carpet Mat Universal by Delta Solutions</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!-- shared product-page design system -->
<link href="css/delta-product.css" rel="stylesheet"/>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<meta content="Delta Carpet Mat Universal - polyscraper-polypropylene blend for everyday circulation, three roll widths." name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/carpet-mat-universal.php" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<meta content="Carpet Mat Universal" property="og:title"/>
<meta content="Delta Carpet Mat Universal - polyscraper-polypropylene blend for everyday circulation, three roll widths." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Carpet%20Mat%20Universal/carpet-mat-universal.jpg" property="og:image"/>
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
  "name": "Carpet Mat Universal",
  "description": "Delta Carpet Mat Universal - polyscraper-polypropylene blend for everyday circulation, three roll widths.",
  "brand": { "@type": "Brand", "name": "Delta" },
  "url": "https://delta-solutions.in/carpet-mat-universal.php"
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
        <li>Carpet Mat Universal</li>
      </ul>
    </div>
  </nav>


  <!-- ============ BANNER HERO ============ -->
  <section class="dp-wrap" style="padding-top:clamp(18px,2.4vw,30px);">
    <div class="dp-banner">
      <?php if ($dp_hero_ok): ?>
      <img alt="Carpet Mat Universal - Delta Solutions"
           src="<?php echo $dp_hero_image; ?>"
           onerror="this.closest('.dp-banner').classList.add('dp-banner--noimg'); this.remove();"/>
      <?php else: ?>
      <!-- hero image not found on server: render a plain fallback panel instead of a broken icon -->
      <div class="dp-banner__fallback" aria-hidden="true"></div>
      <?php endif; ?>
      <div class="dp-banner__in">
        <span class="dp-eyebrow">Collection 04 &middot; Zone 2&ndash;3</span>
        <h1>Everyday duty, done <em>properly</em><span class="dot">.</span></h1>
      </div>
    </div>
  </section>

  <!-- ============ BODY: COPY + SPEC / COLOURS ============ -->
  <section class="dp-section" style="padding-top:clamp(20px,3vw,36px);">
    <div class="dp-wrap">
      <div class="dp-split dp-reveal">

        <!-- left: copy + spec list + metrics -->
        <div>
          <p class="dp-body">
            Carpet Mat Universal pairs a polyscraper scraping fibre with a resilient polypropylene
            pile &mdash; a practical, hard-working walk-off mat for shops, offices, corridors and
            building cores. Three roll widths mean less cutting, less waste and a cleaner fit in
            narrow runs.
          </p>
          <p class="dp-body">
            Where Super specialises in moisture, Universal is the all-rounder &mdash; scraping and
            drying in a single, economical construction.
          </p>

          <div class="dp-speclist">
            <div class="dp-speclist__i"><span>Construction</span><b>Tufted</b></div>
            <div class="dp-speclist__i"><span>Component</span><b>15% polyscraper / 85% PP</b></div>
            <div class="dp-speclist__i"><span>Pile / total height</span><b>7 mm / 8 mm</b></div>
            <div class="dp-speclist__i"><span>Weights</span><b>710 g/m&sup2; pile &middot; 2810 g/m&sup2; total</b></div>
            <div class="dp-speclist__i"><span>Backing</span><b>Vinyl &middot; anti-slip</b></div>
          </div>

          <div class="dp-metrics">
            <div class="dp-metric"><b>2</b><i>m</i><span>Roll width</span></div>
            <div class="dp-metric"><b>1</b><i>m</i><span>Roll width</span></div>
            <div class="dp-metric"><b>67</b><i>cm</i><span>Roll width</span></div>
          </div>
        </div>

        <!-- right: colours -->
        <div style="padding-top:clamp(8px,1.4vw,16px);">
          <span class="dp-eyebrow">Available Colours</span>
          <div class="dp-swatches dp-swatches--2">
            <?php foreach ($dp_colours as $c):
              $img_ok = !empty($c['img']) && file_exists(__DIR__ . '/' . $c['img']);
            ?>
            <div class="dp-swatch">
              <div class="dp-swatch__tile" style="background-color:<?php echo $c['hex']; ?>;">
                <?php if ($img_ok): ?>
                <img alt="Carpet Mat Universal <?php echo strip_tags($c['name']); ?> - Delta Solutions"
                     src="<?php echo $c['img']; ?>"
                     onerror="this.style.display='none'"/>
                <?php endif; ?>
              </div>
              <div class="dp-swatch__meta">
                <span class="dp-swatch__name"><?php echo $c['name']; ?></span>
                <span class="dp-swatch__code"><?php echo $c['code']; ?></span>
              </div>
              <p class="dp-swatch__desc"><?php echo $c['desc']; ?></p>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="dp-onreq">
            <p>Both colourways run in all three widths &mdash; 2 m, 1 m and 67 cm, in 20 m rolls.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ============ SPECIFICATION PANEL ============ -->
  <section class="dp-section dp-section--soft">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-sectionhead--split dp-reveal">
        <div>
          <span class="dp-eyebrow">Specification</span>
          <h2 class="dp-h2">Three widths, <em>less waste</em>.</h2>
        </div>
        <p class="dp-lead">
          Narrow corridors rarely suit a 2 m roll. Specifying the width that matches the run means
          fewer cuts, fewer seams and a cleaner finished edge.
        </p>
      </div>

      <div class="dp-specpanel dp-reveal">
        <span class="dp-eyebrow">Technical Data</span>
        <div class="dp-specgrid dp-specgrid--3">
          <div><span>Construction</span><b>Tufted</b></div>
          <div><span>Pile / total height</span><b>7 mm / 8 mm</b></div>
          <div><span>Backing</span><b>Vinyl &middot; anti-slip</b></div>
          <div><span>Component</span><b>15% polyscraper / 85% PP</b></div>
          <div><span>Weights</span><b>710 g/m&sup2; pile &middot; 2810 g/m&sup2; total</b></div>
          <div><span>Roll length</span><b>20 m</b></div>
          <div><span>Roll widths</span><b>2 m &middot; 1 m &middot; 67 cm</b></div>
          <div><span>Colours</span><b>Grey 11510 &middot; Black 11511</b></div>
          <div><span>Unit</span><b>Sq.ft</b></div>
        </div>
        <p>Zone 2&ndash;3 circulation matting. <em>Colour renders indicative; physical swatches available.</em></p>
      </div>

      <div style="margin-top:clamp(40px,5vw,68px);" class="dp-reveal">
        <span class="dp-eyebrow">Where to use</span>
        <div class="dp-apply">
          <div class="dp-apply__i">
            <span class="dp-apply__n">01</span>
            <h3>Corridors &amp; cores</h3>
            <p>Narrow runs where a 67 cm or 1 m width fits wall to wall without a single cut.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">02</span>
            <h3>Shops &amp; offices</h3>
            <p>Everyday walk-off duty in front of lifts, tills and reception desks.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">03</span>
            <h3>Behind primary matting</h3>
            <p>The second stage of the system, catching what Zone 1 and 2 left behind.</p>
          </div>
        </div>

        <div class="dp-tags">
          <span class="dp-tag">Shops</span>
          <span class="dp-tag">Offices</span>
          <span class="dp-tag">Corridors</span>
          <span class="dp-tag">Building cores</span>
          <span class="dp-tag">Lift lobbies</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ============ ENQUIRY ============ -->
  <section class="dp-section dp-section--red">
    <div class="dp-wrap dp-enquiry">
      <div>
        <span class="dp-rule" style="margin-top:0;"></span>
        <h2 class="dp-h2">Send the run. We'll send the roll plan.</h2>
        <p class="dp-lead" style="margin-top:14px;">Give us the corridor widths and the colour and we'll come back with the right roll width, quantities and a price.</p>
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