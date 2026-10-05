<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ---- cart state for this product (code "01") ---- */
$dp_code    = isset($productArray["01"]["code"]) ? $productArray["01"]["code"] : '';
$dp_codeAtt = htmlspecialchars($dp_code, ENT_QUOTES);
$dp_in_cart = (!empty($_SESSION["cart_item"]) && $dp_code !== '' && in_array($dp_code, array_keys($_SESSION["cart_item"])));

/* ---- images: swap these for your own ---- */
$dp_hero_image = 'images/Entrance Matting/8.jpg';
$dp_tblock_image = 'images/Entrance Matting/9.jpg';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Nova Aluminium Mat by Delta Solutions</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!-- shared product-page design system -->
<link href="css/delta-product.css" rel="stylesheet"/>
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<meta content="Delta Nova Aluminium entrance matting - anodised aluminium profiles with carpet, brush or rubber inserts, HD and LD duty. Engineered at the threshold." name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/nova-aluminium-mat.php" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<meta content="Nova Aluminium Mat" property="og:title"/>
<meta content="Delta Nova Aluminium entrance matting - anodised aluminium profiles with carpet, brush or rubber inserts, HD and LD duty. Engineered at the threshold." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Nova%20Aluminium/nova-aluminium.jpg" property="og:image"/>
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
  "name": "Nova Aluminium Mat",
  "description": "Delta Nova Aluminium entrance matting - anodised aluminium profiles with carpet, brush or rubber inserts, HD and LD duty. Engineered at the threshold.",
  "brand": { "@type": "Brand", "name": "Delta" },
  "url": "https://delta-solutions.in/nova-aluminium-mat.php"
}
</script>
</head>

<body>
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<div class="page-wrapper">
<?php include 'header.php';?>

<main class="dp-page">

  <!-- ============ BREADCRUMB ============ -->
  <!--<nav class="dp-crumbs">-->
  <!--  <div class="dp-wrap">-->
  <!--    <ul class="dp-crumbs__list page-breadcrumb">-->
  <!--      <li><a href="index.php">Home</a></li>-->
  <!--      <li><a href="entrance-matting-systems.php">Entrance Matting Systems</a></li>-->
  <!--      <li>Nova Aluminium Mat</li>-->
  <!--    </ul>-->
  <!--  </div>-->
  <!--</nav>-->

  <!-- ============ SHEET HEADER (drawing title strip) ============ -->
  <div class="dp-wrap">
    <div class="dp-sheethead">
      <span>Delta &middot; Entrance Matting</span>
      <span class="dp-sheethead__mid">Nova Aluminium &mdash; Collection <b>01</b></span>
      <span class="dp-sheethead__r">Zone 1&ndash;2 &middot; Primary Matting</span>
    </div>
  </div>

  <!-- ============ HERO: TYPE ON A BLUEPRINT ============ -->
  <section class="dp-section dp-grid" style="padding-top:clamp(40px,5vw,72px);">
    <div class="dp-wrap">
      <div class="dp-sectionhead--split" style="align-items:center;">

        <div>
          <span class="dp-eyebrow">Extruded &middot; Anodised &middot; Made to size</span>
          <h1 class="dp-h1">The mat that is <em>built into</em> the floor<span class="dot">.</span></h1>

          <div class="dp-dim">
            <span class="dp-dim__line"></span>
            <span class="dp-dim__label">Made to size</span>
            <span class="dp-dim__line"></span>
          </div>

          <p class="dp-body" style="margin-top:30px;">
            Nova is not laid down &mdash; it is specified. Anodised aluminium profiles are cut to
            your opening and locked side by side, carrying interchangeable inserts between them.
            The result is a rigid surface that takes the load of an entrance and drops the dirt
            out of sight beneath it.
          </p>

          <div class="dp-strip">
            <div class="dp-strip__i"><span class="dp-strip__k">Frame</span><span class="dp-strip__v">Anodised aluminium</span></div>
            <div class="dp-strip__i"><span class="dp-strip__k">Backing</span><span class="dp-strip__v">Anti-skid EVA</span></div>
            <div class="dp-strip__i"><span class="dp-strip__k">Edges</span><span class="dp-strip__v">Side incline profile</span></div>
          </div>
        </div>

        <div class="dp-view">
          <span class="dp-view__m1"></span><span class="dp-view__m2"></span>
          <img alt="Nova Aluminium Mat - Delta Solutions" src="<?php echo $dp_hero_image; ?>"/>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ SECTION THROUGH THE PROFILE (drawn in CSS) ============ -->
  <section class="dp-section dp-section--dark dp-on-dark dp-grid dp-grid--dark">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-reveal" style="text-align:center;">
        <span class="dp-eyebrow">Section A&ndash;A</span>
        <h2 class="dp-h2" style="margin:0 auto; max-width:20ch;">Choose the insert. <em>Watch the section change.</em></h2>
      </div>

      <!-- switcher -->
      <div class="dp-switch dp-reveal">
        <button type="button" class="dp-switch__b is-on" data-ins="carpet">Carpet insert</button>
        <button type="button" class="dp-switch__b" data-ins="brush">Brush insert</button>
        <button type="button" class="dp-switch__b" data-ins="rubber">Rubber insert</button>
      </div>

      <!-- the drawing -->
      <div class="dp-dwg is-carpet dp-reveal" id="dpDwg">
        <div class="dp-dwg__stage">
          <div class="dp-dwg__profile">
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span><span class="dp-dwg__ins"></span>
            <span class="dp-dwg__bar"></span>
          </div>
          <div class="dp-dwg__base"></div>
          <div class="dp-dwg__floor"></div>
        </div>

        <p class="dp-switch__note" id="dpInsNote">
          Carpet inserts absorb moisture off the sole and hold it below the walking plane &mdash;
          the choice for covered thresholds and lobbies where water is the problem.
        </p>

        <div class="dp-dwg__leads">
          <div class="dp-lead-i">
            <span>01</span><b>Aluminium profile</b>
            <p>Anodised extrusion, cut to length. Carries the load and keeps the run rigid.</p>
          </div>
          <div class="dp-lead-i">
            <span>02</span><b>Interchangeable insert</b>
            <p>Carpet, brush or rubber &mdash; swapped without replacing the frame.</p>
          </div>
          <div class="dp-lead-i">
            <span>03</span><b>Anti-skid EVA backing</b>
            <p>Holds the run in position and protects the floor finish underneath.</p>
          </div>
          <div class="dp-lead-i">
            <span>04</span><b>Side incline edge</b>
            <p>A tapered profile at the perimeter for surface-laid installations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ DUTY: LOAD BARS ============ -->
  <section class="dp-section">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-sectionhead--split dp-reveal">
        <div>
          <span class="dp-eyebrow">Duty Selection</span>
          <h2 class="dp-h2">Two builds, <em>one profile family</em>.</h2>
        </div>
        <p class="dp-lead">
          The difference is not the look &mdash; it is how much traffic the run is engineered to
          absorb before it shows it. Specify by footfall, not by budget.
        </p>
      </div>

      <div class="dp-load dp-reveal">
        <div class="dp-load__row">
          <div class="dp-load__name">HD Nova &mdash; <em>Heavy Duty</em><span>Code 11668</span></div>
          <div class="dp-load__track"><i data-fill="92"></i></div>
          <div class="dp-load__val">High footfall</div>
        </div>
        <div class="dp-load__row">
          <div class="dp-load__name">LD Nova &mdash; Light Duty<span>Code 11645</span></div>
          <div class="dp-load__track"><i class="is-mute" data-fill="54"></i></div>
          <div class="dp-load__val">Light&ndash;medium</div>
        </div>
      </div>

      <div class="dp-tags">
        <span class="dp-tag">Malls</span>
        <span class="dp-tag">Hotels</span>
        <span class="dp-tag">Airports</span>
        <span class="dp-tag">Hospitals</span>
        <span class="dp-tag">Corporate towers</span>
      </div>

    </div>
  </section>
  

  <!-- ============ TITLE BLOCK + FIGURE ============ -->
  <section class="dp-section dp-section--soft">
    <div class="dp-wrap">
      <div class="dp-sectionhead dp-reveal">
        <span class="dp-eyebrow">Title Block</span>
        <h2 class="dp-h2">Everything, <em>on one sheet</em>.</h2>
      </div>

      <div class="dp-withimg dp-reveal">

        <div class="dp-tblock">
          <div class="dp-tblock__c"><span>Construction</span><b>Anodised aluminium profile</b></div>
          <div class="dp-tblock__c"><span>Inserts</span><b>Carpet / brush / rubber</b></div>
          <div class="dp-tblock__c"><span>Backing</span><b>Anti-skid EVA</b></div>
          <div class="dp-tblock__c"><span>Edges</span><b>Side incline profile</b></div>

          <div class="dp-tblock__c dp-tblock__c--red"><span>Heavy duty</span><b>Code 11668</b></div>
          <div class="dp-tblock__c"><span>Light duty</span><b>Code 11645</b></div>
          <div class="dp-tblock__c"><span>Format</span><b>Made to size</b></div>
          <div class="dp-tblock__c"><span>Unit</span><b>Sq.ft</b></div>

          <div class="dp-tblock__c dp-tblock__c--wide"><span>Zone</span><b>Zone 1&ndash;2 &middot; Primary matting at the threshold</b></div>
          <div class="dp-tblock__c dp-tblock__c--wide"><span>Installation</span><b>Recessed flush, or surface-laid with incline edge</b></div>
        </div>

        <figure class="dp-withimg__fig">
          <img alt="Nova Aluminium Mat installed at a threshold - Delta Solutions" src="<?php echo $dp_tblock_image; ?>"/>
          <span class="dp-withimg__cap">Visualised Installation</span>
        </figure>

      </div>

    </div>
  </section>

  <!-- ============ ENQUIRY (red) ============ -->
  <section class="dp-section dp-section--red">
    <div class="dp-wrap dp-enquiry">
      <div>
        <span class="dp-rule" style="margin-top:0;"></span>
        <h2 class="dp-h2">Send the opening. We'll send the profile run.</h2>
        <p class="dp-lead" style="margin-top:14px;">Recess dimensions or a floor plan is enough &mdash; we come back with the layout, the insert mix and a price.</p>
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

/* ---- insert switcher: repaints the CSS section drawing ---- */
(function () {
    var dwg  = document.getElementById('dpDwg');
    var note = document.getElementById('dpInsNote');
    var btns = document.querySelectorAll('.dp-switch__b');
    if (!dwg || !btns.length) { return; }

    var copy = {
        carpet: "Carpet inserts absorb moisture off the sole and hold it below the walking plane — the choice for covered thresholds and lobbies where water is the problem.",
        brush:  "Brush inserts attack dry grit and sand, combing it out of the tread and dropping it into the void — for exposed doors and dusty approaches.",
        rubber: "Rubber inserts give grip and take punishment — specified for service entrances, ramps and anywhere trolleys and wheels cross the mat."
    };

    Array.prototype.forEach.call(btns, function (b) {
        b.addEventListener('click', function () {
            var ins = b.getAttribute('data-ins');
            Array.prototype.forEach.call(btns, function (x) { x.classList.remove('is-on'); });
            b.classList.add('is-on');
            dwg.className = dwg.className.replace(/\s*is-(carpet|brush|rubber)/g, '') + ' is-' + ins;
            if (note && copy[ins]) { note.textContent = copy[ins]; }
        });
    });
}());

/* ---- reveal on scroll + duty bars fill when seen ---- */
(function () {
    var els = document.querySelectorAll('.dp-reveal');
    function fillBars(scope) {
        var bars = (scope || document).querySelectorAll('.dp-load__track i');
        Array.prototype.forEach.call(bars, function (bar) {
            bar.style.width = (bar.getAttribute('data-fill') || 0) + '%';
        });
    }
    if (!('IntersectionObserver' in window)) {
        for (var i = 0; i < els.length; i++) { els[i].className += ' is-in'; }
        fillBars();
        return;
    }
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) { return; }
            e.target.classList.add('is-in');
            if (e.target.querySelector('.dp-load__track')) { fillBars(e.target); }
            io.unobserve(e.target);
        });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.06 });
    Array.prototype.forEach.call(els, function (el) { io.observe(el); });
}());
</script>
</body>
</html>
