<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ---- cart state for this product (code "05") ---- */
$dp_code    = isset($productArray["05"]["code"]) ? $productArray["05"]["code"] : '';
$dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
$dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

/* ---- images: swap these for your own ---- */
$dp_hero_image = 'images/Entrance Matting/26.jpg';
$dp_hd_image   = 'images/Entrance Matting/3.jpg';  // heavy duty texture
$dp_md_image   = 'images/Entrance Matting/27.jpg';  // medium duty texture
$dp_bespoke_sw = '';                                                            // small bespoke-colour swatch
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Zig-Zag Mat by Delta Solutions</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!-- shared product-page design system -->
<link href="css/delta-product.css" rel="stylesheet"/>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<meta content="Delta Zig-Zag mat - open-structure PVC scraper mats for wet and gritty conditions, HD and MD duty." name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/zig-zag-mat.php" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<meta content="Zig-Zag Mat" property="og:title"/>
<meta content="Delta Zig-Zag mat - open-structure PVC scraper mats for wet and gritty conditions, HD and MD duty." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Zig-Zag/zig-zag.jpg" property="og:image"/>
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
  "name": "Zig-Zag Mat",
  "description": "Delta Zig-Zag mat - open-structure PVC scraper mats for wet and gritty conditions, HD and MD duty.",
  "brand": { "@type": "Brand", "name": "Delta" },
  "url": "https://delta-solutions.in/zig-zag-mat.php"
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
        <li>Zig-Zag Mat</li>
      </ul>
    </div>
  </nav>

  <!-- ============ HERO: IMAGE LEFT / DUTIES RIGHT ============ -->
  <section class="dp-hero dp-hero--light">
    <div class="dp-hero__media">
      <img alt="Zig-Zag Mat at a retail entrance - Delta Solutions" src="<?php echo $dp_hero_image; ?>"/>
    </div>

    <div class="dp-hero__panel">
      <span class="dp-eyebrow">Collection 05 &middot; Zone 1</span>
      <h1 class="dp-h1">Grit meets its <em>match</em><span class="dot">.</span></h1>
      <span class="dp-rule"></span>

      <p class="dp-body">
        Zig-Zag is the mat you put where the weather is. An open PVC structure with a raised
        chevron surface scrapes soles hard and drains water instantly &mdash; built for external
        steps, wet ramps, factory gates and pool decks.
      </p>

      <div class="dp-duties">
        <div class="dp-dutycard">
          <img class="dp-dutycard__img" alt="Zig-Zag Heavy Duty - Delta Solutions" src="<?php echo $dp_hd_image; ?>"/>
          <div class="dp-dutycard__in">
            <div class="dp-dutycard__top">
              <h3>Heavy Duty</h3>
              <span class="dp-chip">11042</span>
            </div>
            <div class="dp-dutycard__r"><span>Thickness</span><b>14 mm</b></div>
            <div class="dp-dutycard__r"><span>Roll</span><b>1 m &times; 5 m &middot; Grey</b></div>
          </div>
        </div>

        <div class="dp-dutycard">
          <img class="dp-dutycard__img" alt="Zig-Zag Medium Duty - Delta Solutions" src="<?php echo $dp_md_image; ?>"/>
          <div class="dp-dutycard__in">
            <div class="dp-dutycard__top">
              <h3>Medium Duty</h3>
              <span class="dp-chip dp-chip--mute">11570</span>
            </div>
            <div class="dp-dutycard__r"><span>Thickness</span><b>7.5 mm</b></div>
            <div class="dp-dutycard__r"><span>Roll</span><b>1 m &times; 10 m &middot; Grey</b></div>
          </div>
        </div>
      </div>

      <div class="dp-note">
        <p>Cut on site with a utility knife &mdash; no edging needed, no fuss.</p>
      </div>

      <div class="dp-callout">
        <span class="dp-callout__sw" style="background-color:#c2185b;<?php echo !empty($dp_bespoke_sw) ? 'background-image:url(\''.$dp_bespoke_sw.'\');' : ''; ?>"></span>
        <p><b>Beyond grey</b> &mdash; bespoke Zig-Zag colourways can be produced against order for branded and hospitality spaces.</p>
      </div>
    </div>
  </section>

  <!-- ============ SPECIFICATION + WHERE TO USE ============ -->
  <section class="dp-section">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-sectionhead--split dp-reveal">
        <div>
          <span class="dp-eyebrow">Specification</span>
          <h2 class="dp-h2">Open structure, <em>nowhere for water to sit</em>.</h2>
        </div>
        <p class="dp-lead">
          The chevron ribs work against the sole while the voids between them carry grit and
          rainwater away &mdash; which is why Zig-Zag belongs outside the door, not behind it.
        </p>
      </div>

      <div class="dp-specpanel dp-reveal">
        <span class="dp-eyebrow">Technical Data</span>
        <div class="dp-specgrid dp-specgrid--3">
          <div><span>Construction</span><b>Open PVC scraper structure</b></div>
          <div><span>Heavy duty</span><b>14 mm &middot; 1 m &times; 5 m &middot; 11042</b></div>
          <div><span>Medium duty</span><b>7.5 mm &middot; 1 m &times; 10 m &middot; 11570</b></div>
          <div><span>Colour</span><b>Grey &middot; bespoke on order</b></div>
          <div><span>Zone</span><b>Zone 1 &middot; Primary matting</b></div>
          <div><span>Unit</span><b>Sq.ft</b></div>
        </div>
        <p>Cut to shape on site &mdash; no edging or finishing required. <em>Colour renders indicative; physical samples available.</em></p>
      </div>

      <div style="margin-top:clamp(40px,5vw,68px);" class="dp-reveal">
        <span class="dp-eyebrow">Where to use</span>
        <div class="dp-apply">
          <div class="dp-apply__i">
            <span class="dp-apply__n">01</span>
            <h3>External steps &amp; ramps</h3>
            <p>Exposed approaches where rain collects and a solid mat would simply float on the water.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">02</span>
            <h3>Factory &amp; service gates</h3>
            <p>Coarse grit, oil and mud &mdash; the conditions that finish softer matting in a season.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">03</span>
            <h3>Pool decks &amp; wet zones</h3>
            <p>Barefoot-safe drainage underfoot, hosed clean and put straight back down.</p>
          </div>
        </div>

        <div class="dp-tags">
          <span class="dp-tag">External steps</span>
          <span class="dp-tag">Wet ramps</span>
          <span class="dp-tag">Factory gates</span>
          <span class="dp-tag">Pool decks</span>
          <span class="dp-tag">Loading bays</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ENQUIRY ============ -->
  <section class="dp-section dp-section--red">
    <div class="dp-wrap dp-enquiry">
      <div>
        <span class="dp-rule" style="margin-top:0;"></span>
        <h2 class="dp-h2">Send the opening. We'll send the roll plan.</h2>
        <p class="dp-lead" style="margin-top:14px;">Tell us the duty, the area and the exposure and we'll come back with rolls, cutting and a price.</p>
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
