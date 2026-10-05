<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ---- cart state for this product (code "03") ---- */
$dp_code    = isset($productArray["03"]["code"]) ? $productArray["03"]["code"] : '';
$dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
$dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

/* ---- images: swap these for your own ---- */
$dp_hero_image = 'images/Entrance Matting/18.jpg';

/* ---- colours. 'hex' is the fallback tile colour shown if 'img' is missing/broken ---- */
$dp_colours = array(
  array('name'=>'Dark Grey', 'code'=>'11590', 'hex'=>'#3d4045', 'desc'=>'The specification default &mdash; hides traffic and reads as part of a dark floor.', 'img'=>'images/Entrance Matting/0.jpg'),
  array('name'=>'Grey',      'code'=>'11584', 'hex'=>'#70747a', 'desc'=>'A mid tone that sits comfortably against stone and terrazzo lobbies.',            'img'=>'images/Entrance Matting/7.jpg'),
  array('name'=>'Brown',     'code'=>'11591', 'hex'=>'#6b5b4c', 'desc'=>'Warmer option for timber, brass and hospitality interiors.',                     'img'=>'images/Entrance Matting/21.jpg'),
);

$dp_onrequest = array(
  array('name'=>'Blue',  'hex'=>'#4a6b8a', 'img'=>''),
  array('name'=>'Beige', 'hex'=>'#c8b9a6', 'img'=>''),
);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Carpet Mat Super by Delta Solutions</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!-- shared product-page design system -->
<link href="css/delta-product.css" rel="stylesheet"/>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<meta content="Delta Carpet Mat Super - 100% polyamide tufted pile, Cfl-S1 fire class. The moisture professional for entrance matting." name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/carpet-mat-super.php" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<meta content="Carpet Mat Super" property="og:title"/>
<meta content="Delta Carpet Mat Super - 100% polyamide tufted pile, Cfl-S1 fire class. The moisture professional for entrance matting." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Carpet%20Mat%20Super/carpet-mat-super.jpg" property="og:image"/>
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
  "name": "Carpet Mat Super",
  "description": "Delta Carpet Mat Super - 100% polyamide tufted pile, Cfl-S1 fire class. The moisture professional for entrance matting.",
  "brand": { "@type": "Brand", "name": "Delta" },
  "url": "https://delta-solutions.in/carpet-mat-super.php"
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
        <li>Carpet Mat Super</li>
      </ul>
    </div>
  </nav>


  <!-- ============ BANNER HERO ============ -->
  <section class="dp-wrap" style="padding-top:clamp(18px,2.4vw,30px);">
    <div class="dp-banner">
      <img alt="Carpet Mat Super - Delta Solutions" src="<?php echo $dp_hero_image; ?>"/>
      <div class="dp-banner__in">
        <span class="dp-eyebrow">Collection 03 &middot; Zone 2&ndash;3</span>
        <h1>The moisture <em>professional</em><span class="dot">.</span></h1>
      </div>
    </div>
  </section>

  <!-- ============ BODY: COPY + SPEC / COLOURS ============ -->
  <section class="dp-section">
    <div class="dp-wrap">
      <div class="dp-split dp-reveal">

        <!-- left: copy + spec list + metrics -->
        <div>
          <p class="dp-body">
            Carpet Mat Super is a dense tufted mat in 100% polyamide &mdash; the fibre that drinks
            moisture off shoe soles in the first few steps and holds its colour wash after wash.
            A heavy vinyl backing keeps it flat and slip-resistant; Cfl-S1 fire classification
            keeps it specifiable for public buildings.
          </p>

          <div class="dp-speclist">
            <div class="dp-speclist__i"><span>Construction</span><b>Tufted &middot; 100% polyamide pile</b></div>
            <div class="dp-speclist__i"><span>Pile / total height</span><b>6 mm / 8 mm</b></div>
            <div class="dp-speclist__i"><span>Pile / total weight</span><b>1050 g/m&sup2; / 3600 g/m&sup2;</b></div>
            <div class="dp-speclist__i"><span>Roll format</span><b>20 m &times; 1.35 m &middot; vinyl backed</b></div>
            <div class="dp-speclist__i"><span>Fire class / slip</span><b>Cfl-S1 &middot; anti-slip backing</b></div>
          </div>

          <div class="dp-metrics">
            <div class="dp-metric"><b>6</b><i>mm</i><span>Pile height</span></div>
            <div class="dp-metric"><b>3600</b><i>g/m&sup2;</i><span>Total weight</span></div>
            <div class="dp-metric"><b>20</b><i>m</i><span>Roll length</span></div>
          </div>
        </div>

        <!-- right: colours -->
        <div>
          <span class="dp-eyebrow">Available Colours</span>
          <div class="dp-swatches dp-swatches--3">
            <?php foreach ($dp_colours as $c): ?>
            <div class="dp-swatch">
              <div class="dp-swatch__tile" style="background-color:<?php echo $c['hex']; ?>;">
                <?php if (!empty($c['img'])): ?>
                <img alt="Carpet Mat Super <?php echo $c['name']; ?> - Delta Solutions"
                     src="<?php echo $c['img']; ?>"
                     onerror="this.style.display='none';"/>
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
            <div class="dp-onreq__tiles">
              <?php foreach ($dp_onrequest as $o): ?>
              <span class="dp-onreq__t" title="<?php echo $o['name']; ?>" style="background-color:<?php echo $o['hex']; ?>;<?php echo !empty($o['img']) ? 'background-image:url(\''.$o['img'].'\');' : ''; ?>"></span>
              <?php endforeach; ?>
            </div>
            <p>Further colourways &mdash; including blue and beige &mdash; available on request.</p>
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
          <h2 class="dp-h2">Built to take <em>water</em>, not to show it.</h2>
        </div>
        <p class="dp-lead">
          Polyamide holds several times its weight in moisture and releases it on drying &mdash;
          which is why Super belongs in the metres immediately inside the door.
        </p>
      </div>

      <div class="dp-specpanel dp-reveal">
        <span class="dp-eyebrow">Technical Data</span>
        <div class="dp-specgrid dp-specgrid--3">
          <div><span>Construction</span><b>Tufted, 100% polyamide</b></div>
          <div><span>Pile / total height</span><b>6 mm / 8 mm</b></div>
          <div><span>Backing</span><b>Vinyl &middot; anti-slip</b></div>
          <div><span>Pile / total weight</span><b>1050 / 3600 g/m&sup2;</b></div>
          <div><span>Roll format</span><b>20 m &times; 1.35 m</b></div>
          <div><span>Fire class</span><b>Cfl-S1</b></div>
          <div><span>Colours</span><b>Three &middot; 11584 / 11590 / 11591</b></div>
          <div><span>Zone</span><b>Zone 2&ndash;3</b></div>
          <div><span>Unit</span><b>Sq.ft</b></div>
        </div>
        <p>Blue and beige available on request. <em>Colour renders indicative; physical swatches available.</em></p>
      </div>

      <div style="margin-top:clamp(40px,5vw,68px);" class="dp-reveal">
        <span class="dp-eyebrow">Where to use</span>
        <div class="dp-apply">
          <div class="dp-apply__i">
            <span class="dp-apply__n">01</span>
            <h3>Behind the main door</h3>
            <p>The first run inside, where wet soles arrive and the floor finish is most at risk.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">02</span>
            <h3>Public buildings</h3>
            <p>Cfl-S1 classification keeps it specifiable where fire performance is scrutinised.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">03</span>
            <h3>Heavy, wet footfall</h3>
            <p>Lobbies and transfer areas during monsoon months, where moisture is constant.</p>
          </div>
        </div>

        <div class="dp-tags">
          <span class="dp-tag">Hotels</span>
          <span class="dp-tag">Hospitals</span>
          <span class="dp-tag">Airports</span>
          <span class="dp-tag">Offices</span>
          <span class="dp-tag">Institutions</span>
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
        <p class="dp-lead" style="margin-top:14px;">Give us the area and the colour and we'll come back with roll quantities, cutting and a price.</p>
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