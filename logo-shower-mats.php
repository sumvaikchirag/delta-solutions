<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ---- cart state for this product (code "06") ---- */
$dp_code    = isset($productArray["06"]["code"]) ? $productArray["06"]["code"] : '';
$dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
$dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

/* ---- images: swap these for your own ---- */
$dp_logo_image   = 'images/Entrance Matting/30.jpg'; // logo mat in situ
$dp_shower_image = 'images/Entrance Matting/311.jpg';        // shower mat
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Logo &amp; Shower Mats by Delta Solutions</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!-- shared product-page design system -->
<link href="css/delta-product.css" rel="stylesheet"/>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<meta content="Delta Customised Logo Mats and anti-skid Shower Mats - branded entrance matting and wet-area matting solutions." name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/logo-shower-mats.php" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<meta content="Logo &amp; Shower Mats" property="og:title"/>
<meta content="Delta Customised Logo Mats and anti-skid Shower Mats - branded entrance matting and wet-area matting solutions." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Logo%20Shower/logo-shower.jpg" property="og:image"/>
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
  "name": "Logo & Shower Mats",
  "description": "Delta Customised Logo Mats and anti-skid Shower Mats - branded entrance matting and wet-area matting solutions.",
  "brand": { "@type": "Brand", "name": "Delta" },
  "url": "https://delta-solutions.in/logo-shower-mats.php"
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
        <li>Logo &amp; Shower Mats</li>
      </ul>
    </div>
  </nav>

  <!-- ============ THE LOGO MAT (dark) ============ -->
  <section class="dp-section dp-section--dark dp-on-dark">
    <div class="dp-wrap">
      <div class="dp-split">

        <!-- left: the pitch + spec -->
        <div>
          <span class="dp-eyebrow">Collection 06 &middot; Zone 3</span>
          <h1 class="dp-h1">Your brand, at the <em>door</em><span class="dot">.</span></h1>
          <span class="dp-rule"></span>

          <p class="dp-body">
            The Delta Customised Logo Mat turns the entrance into a brand moment. Your identity is
            woven into 100% nylon yarn in your exact colours &mdash; with the stain resistance and
            colour fastness to keep it sharp under thousands of footsteps.
          </p>

          <div class="dp-speclist">
            <div class="dp-speclist__i"><span>Yarn</span><b>100% nylon, custom-dyed to brand colours</b></div>
            <div class="dp-speclist__i"><span>Pile height</span><b>7.2 mm</b></div>
            <div class="dp-speclist__i"><span>Backing</span><b>Anti-skid PVC</b></div>
            <div class="dp-speclist__i"><span>Performance</span><b>Superior stain resistance &amp; colour fastness</b></div>
          </div>

          <div style="margin-top:clamp(22px,2.8vw,32px);">
            <span class="dp-chip">Code 11030 &middot; Made to order</span>
          </div>
        </div>

        <!-- right: the mat -->
        <div>
          <h2 class="dp-h2" style="max-width:none; text-align:center; font-size:clamp(20px,2.2vw,27px);">Any logo. Any colourway. Any size.</h2>
          <span class="dp-capline">Supplied against artwork &middot; Billed per sq.ft.</span>

          <div class="dp-figure-wrap" style="margin-top:clamp(20px,2.6vw,30px);">
            <img alt="Customised Logo Mat at a retail entrance - Delta Solutions" src="<?php echo $dp_logo_image; ?>"/>
            <span>Visualised Installation</span>
          </div>

          <span class="dp-figcap">
            Woven monogram and wordmark reproduced tone-on-tone in the pile &mdash; legible to the
            eye, invisible to wear.
          </span>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ COMPLETING THE SYSTEM ============ -->
  <section class="dp-section">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-reveal">
        <span class="dp-eyebrow dp-eyebrow--muted">Completing the system</span>
        <h2 class="dp-h2">The details that <em>finish</em> the job.</h2>
      </div>

      <div class="dp-cards dp-reveal">

        <!-- card 1: shower mats -->
        <div class="dp-card">
          <div class="dp-card__top">
            <h3>Delta Shower Mats</h3>
            <span class="dp-chip dp-chip--mute">Code 11034</span>
          </div>
          <p>
            Anti-skid comfort for wet areas &mdash; bathrooms, changing rooms, spa floors and
            poolside showers. PVC strip construction with a rubber strip backing that grips wet
            tile without lifting.
          </p>
          <img class="dp-card__img" alt="Delta Shower Mat - Delta Solutions" src="<?php echo $dp_shower_image; ?>"/>
          <div class="dp-minispecs">
            <div><span>Size</span><b>45 &times; 60 cm</b></div>
            <div><span>Colour</span><b>Beige</b></div>
            <div><span>Backing</span><b>Rubber strip</b></div>
          </div>
        </div>

        <!-- card 2: edges & endings -->
        <div class="dp-card dp-card--soft">
          <div class="dp-card__top">
            <h3>Edges &amp; endings</h3>
          </div>
          <p>
            Every Nova aluminium installation can be completed with the right transitions &mdash;
            because a premium mat deserves a premium finish.
          </p>

          <div class="dp-numrow">
            <span class="dp-numrow__b">01</span>
            <div>
              <h4>Side incline profile</h4>
              <p>Ramped aluminium edge for surface-laid mats.</p>
            </div>
          </div>
          <div class="dp-numrow">
            <span class="dp-numrow__b">02</span>
            <div>
              <h4>Brush end strips</h4>
              <p>Extra scraping action at entry and exit rows.</p>
            </div>
          </div>
          <div class="dp-numrow">
            <span class="dp-numrow__b dp-numrow__b--red">03</span>
            <div>
              <h4>Rubber end strips</h4>
              <p>Soft, quiet transitions for wheeled traffic.</p>
            </div>
          </div>
        </div>

        <!-- card 3: choosing right -->
        <div class="dp-card dp-card--dark">
          <div class="dp-card__top">
            <h3>Choosing right</h3>
          </div>
          <p>The right mat depends on four things. Tell us these, and we'll specify the system:</p>

          <div class="dp-abc">
            <div class="dp-abc__i"><b>a.</b> Footfall &mdash; how many people, how often</div>
            <div class="dp-abc__i"><b>b.</b> Location &mdash; covered, exposed, wet or dry</div>
            <div class="dp-abc__i"><b>c.</b> Soil type &mdash; dust, mud, grit or moisture</div>
            <div class="dp-abc__i"><b>d.</b> The floor being protected inside</div>
          </div>
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
          <h2 class="dp-h2">Two products, <em>one last impression</em>.</h2>
        </div>
        <p class="dp-lead">
          The logo mat is made to your artwork and billed per sq.ft; the shower mat is a stock
          piece, sold per unit. Both close out the system at Zone 3.
        </p>
      </div>

      <div class="dp-specpanel dp-reveal">
        <span class="dp-eyebrow">Technical Data</span>
        <div class="dp-specgrid dp-specgrid--3">
          <div><span>Logo mat yarn</span><b>100% nylon, custom-dyed</b></div>
          <div><span>Logo mat pile height</span><b>7.2 mm</b></div>
          <div><span>Logo mat backing</span><b>Anti-skid PVC</b></div>
          <div><span>Logo mat code</span><b>11030 &middot; made to order</b></div>
          <div><span>Shower mat size</span><b>45 &times; 60 cm</b></div>
          <div><span>Shower mat code</span><b>11034</b></div>
          <div><span>Shower mat backing</span><b>Rubber strip, anti-skid</b></div>
          <div><span>Zone</span><b>Zone 3 &middot; Circulation</b></div>
          <div><span>Unit</span><b>Sq.ft (logo) / Pc (shower)</b></div>
        </div>
        <p>Logo mats are produced against supplied artwork. <em>Renders indicative; production proofs issued before manufacture.</em></p>
      </div>

      <div style="margin-top:clamp(40px,5vw,68px);" class="dp-reveal">
        <span class="dp-eyebrow">Where to use</span>
        <div class="dp-apply">
          <div class="dp-apply__i">
            <span class="dp-apply__n">01</span>
            <h3>Branded entrances</h3>
            <p>Retail, hospitality and corporate lobbies where the first surface should carry the name.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">02</span>
            <h3>Reception &amp; lift cores</h3>
            <p>Interior circulation, where a logo mat doubles as a walk-off surface.</p>
          </div>
          <div class="dp-apply__i">
            <span class="dp-apply__n">03</span>
            <h3>Wet areas</h3>
            <p>Bathrooms, changing rooms, spa floors and poolside showers &mdash; anti-skid underfoot.</p>
          </div>
        </div>

        <div class="dp-tags">
          <span class="dp-tag">Retail</span>
          <span class="dp-tag">Hospitality</span>
          <span class="dp-tag">Corporate lobbies</span>
          <span class="dp-tag">Changing rooms</span>
          <span class="dp-tag">Spa &amp; poolside</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ENQUIRY ============ -->
  <section class="dp-section dp-section--red">
    <div class="dp-wrap dp-enquiry">
      <div>
        <span class="dp-rule" style="margin-top:0;"></span>
        <h2 class="dp-h2">Send the artwork. We'll send the proof.</h2>
        <p class="dp-lead" style="margin-top:14px;">Logo, colours and the finished size &mdash; that is enough for us to come back with a production proof and a price.</p>
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
