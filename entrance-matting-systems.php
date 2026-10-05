<?php
require_once ("product.php");
$product = new Product();
$productArray = $product->getAllProduct();

/* ------------------------------------------------------------------
   Cart state — checked per product code (not one shared flag)
------------------------------------------------------------------ */
$session_code_array = (!empty($_SESSION["cart_item"])) ? array_keys($_SESSION["cart_item"]) : array();

/* ------------------------------------------------------------------
   PAGE CONTENT
   Everything editable lives here. Swap image paths / specs and the
   layout below rebuilds itself. Keys ("01".."06") must match the
   product codes coming from product.php.
------------------------------------------------------------------ */
$dl_hero_image = 'images/Entrance Matting/2.jpg'; // <-- put your hero image here

$dl_products = array(

  array(
    'key'    => '01',
    'anchor' => 'nova',
    'num'    => '01',
    'name'   => 'Nova Aluminium',
    'zones'  => array(1,2),
    'zoneline' => 'Zone 1 – 2',
    'lead'   => 'Anodised aluminium mats with carpet, brush or rubber inserts. The engineered threshold — HD &amp; LD profiles, made to size.',
    'link'   => 'nova-aluminium-mat.php',
    'img'    => 'images/Entrance Matting/6.jpg',
    'zoom'   => 'images/Entrance Matting/6.jpg',
    'alt'    => 'Nova Aluminium Mat - Delta Solutions',
    'specs'  => array(
      'Construction' => 'Anodised aluminium profile',
      'Inserts'      => 'Carpet / brush / rubber',
      'Backing'      => 'Anti-skid EVA',
      'Edges'        => 'Side incline profile',
      'Duty'         => 'HD (Code 11668) &amp; LD (Code 11645)',
      'Format'       => 'Made to size',
      'Unit'         => 'Sq.ft',
    ),
  ),

  array(
    'key'    => '02',
    'anchor' => 'cushionloop',
    'num'    => '02',
    'name'   => 'Cushion / Loop',
    'zones'  => array(1,2),
    'zoneline' => 'Zone 1 – 2',
    'lead'   => '17 mm heavy-duty open vinyl coil matting in six colours. Scrapes, drains and endures the wettest entrances.',
    'link'   => 'cushion-loop-mat.php',
    'img'    => 'images/Entrance Matting/4.jpg',
    'zoom'   => 'images/Entrance Matting/4.jpg',
    'alt'    => 'Cushion Loop Mat - Delta Solutions',
    'specs'  => array(
      'Construction'          => 'Open vinyl coil, heavy duty',
      'Thickness (mm)'        => '17',
      'Density (kg/m&sup2;)'  => '8.2',
      'Roll size'             => '4&#39; &times; 26&#39;3&quot;',
      'Roll weight (kg)'      => '80',
      'Colours'               => 'Black, Red, Light Grey, Dark Grey, Light Green, Dark Green',
      'Unit'                  => 'Sq.ft',
    ),
  ),

  array(
    'key'    => '03',
    'anchor' => 'carpetsuper',
    'num'    => '03',
    'name'   => 'Carpet Mat Super',
    'zones'  => array(2,3),
    'zoneline' => 'Zone 2 – 3',
    'lead'   => '100% polyamide tufted pile, Cfl-S1 fire class. The moisture professional for the first metres inside.',
    'link'   => 'carpet-mat-super.php',
    'img'    => 'images/Entrance Matting/5.jpg',
    'zoom'   => 'images/Entrance Matting/5.jpg',
    'alt'    => 'Carpet Mat Super - Delta Solutions',
    'specs'  => array(
      'Construction'                  => 'Tufted, 100% polyamide pile',
      'Pile / total height (mm)'      => '6 / 8',
      'Pile / total weight (g/m&sup2;)' => '1050 / 3600',
      'Roll format'                   => '20 m &times; 1.35 m, vinyl backed',
      'Fire class / slip'             => 'Cfl-S1, anti-slip backing',
      'Colours'                       => 'Dark Grey, Grey, Brown (Blue &amp; Beige on request)',
      'Unit'                          => 'Sq.ft',
    ),
  ),

  array(
    'key'    => '04',
    'anchor' => 'carpetuniversal',
    'num'    => '04',
    'name'   => 'Carpet Mat Universal',
    'zones'  => array(2,3),
    'zoneline' => 'Zone 2 – 3',
    'lead'   => 'Polyscraper&ndash;polypropylene blend for everyday circulation. Three roll widths, vinyl anti-slip backing.',
    'link'   => 'carpet-mat-universal.php',
    'img'    => 'images/Entrance Matting/7.jpg',
    'zoom'   => 'images/Entrance Matting/7.jpg',
    'alt'    => 'Carpet Mat Universal - Delta Solutions',
    'specs'  => array(
      'Construction'              => 'Tufted, polyscraper/polypropylene blend',
      'Component'                 => '15% polyscraper / 85% PP',
      'Pile / total height (mm)'  => '7 / 8',
      'Weights (g/m&sup2;)'       => '710 pile / 2810 total',
      'Backing'                   => 'Vinyl, anti-slip',
      'Roll widths'               => '2 m, 1 m, 67 cm (20 m length)',
      'Colours'                   => 'Grey (11510), Black (11511)',
      'Unit'                      => 'Sq.ft',
    ),
  ),

  array(
    'key'    => '05',
    'anchor' => 'zigzag',
    'num'    => '05',
    'name'   => 'Zig-Zag',
    'zones'  => array(1),
    'zoneline' => 'Zone 1',
    'lead'   => 'Open-structure PVC scraper matting for wet and gritty conditions. The first line of defence, outside the door.',
    'link'   => 'zig-zag-mat.php',
    'img'    => 'images/Entrance Matting/3.jpg',
    'zoom'   => 'images/Entrance Matting/3.jpg',
    'alt'    => 'Zig-Zag Mat - Delta Solutions',
    'specs'  => array(
      'Construction'      => 'Open PVC scraper structure',
      'Heavy Duty (mm)'   => '14, Roll 1m &times; 5m (Code 11042)',
      'Medium Duty (mm)'  => '7.5, Roll 1m &times; 10m (Code 11570)',
      'Colour'            => 'Grey (bespoke colours on order)',
      'Unit'              => 'Sq.ft',
    ),
  ),

  array(
    'key'    => '06',
    'anchor' => 'logoshower',
    'num'    => '06',
    'name'   => 'Logo &amp; Shower Mats',
    'zones'  => array(3),
    'zoneline' => 'Zone 3',
    'lead'   => 'Custom-branded nylon logo mats, plus anti-skid shower mats for wet areas. The last, considered impression.',
    'link'   => 'logo-shower-mats.php',
    'img'    => '',
    'zoom'   => '',
    'alt'    => 'Logo and Shower Mats - Delta Solutions',
    'specs'  => array(
      'Logo Mat yarn'             => '100% nylon, custom-dyed (Code 11030)',
      'Logo Mat pile height (mm)' => '7.2',
      'Logo Mat backing'          => 'Anti-skid PVC',
      'Shower Mat size'           => '45 &times; 60 cm (Code 11034)',
      'Shower Mat backing'        => 'Rubber strip, anti-skid',
      'Unit'                      => 'Sq.ft (logo) / Pc (shower)',
    ),
  ),

);
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8"/>
<title>Entrance Matting Systems by Delta Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet"/>
<!--Favicon-->
<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="images/favicon.png" rel="icon" type="image/x-icon"/>
<!-- Responsive -->
<meta content="Delta Innovative Ssolutions offers entrance matting systems for India's busiest buildings - Nova Aluminium, Cushion/Loop, Carpet Mat Super, Carpet Mat Universal, Zig-Zag and Logo/Shower Mats. Click to know more!" name="description"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="https://delta-solutions.in/entrance-matting-systems" rel="canonical"/>
<meta content="index, follow" name="robots"/>
<link href="https://delta-solutions.in/entrance-matting-systems" hreflang="en-in" rel="alternate"/>
<link href="https://delta-solutions.in/entrance-matting-systems" hreflang="x-default" rel="alternate"/>
<link href="https://fonts.gstatic.com" rel="preconnect"/>
<!-- Typeface: Roboto only -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet"/>
<!-- OG Tags -->
<meta content="Entrance Matting Systems" property="og:title"/>
<meta content="Entrance matting systems engineered for India's busiest buildings - from the first scrape outside to the final polished step within." property="og:description"/>
<meta content="https://delta-solutions.in/images/product-images/Entrance%20Matting/Nova%20Aluminium/nova-aluminium.jpg" property="og:image"/>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-0WPY5YR5W4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0WPY5YR5W4');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K4ZLQJJ');</script>
<!-- End Google Tag Manager -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["WebPage", "CollectionPage"],
      "@id": "https://delta-solutions.in/entrance-matting-systems/#webpage",
      "url": "https://delta-solutions.in/entrance-matting-systems/",
      "name": "Entrance Matting Systems",
      "description": "Category page listing Delta's entrance matting product families - Nova Aluminium, Cushion/Loop, Carpet Mat Super, Carpet Mat Universal, Zig-Zag and Logo/Shower Mats.",
      "isPartOf": {
        "@id": "https://delta-solutions.in/#website"
      },
      "about": {
  "@type": "Thing",
  "name": "Entrance Matting Systems",
  "description": "Entrance matting systems designed to scrape, absorb and clean footfall across three zones of an entrance."
      },
      "breadcrumb": {
        "@id": "https://delta-solutions.in/entrance-matting-systems/#breadcrumbs"
      },
      "mainEntity": {
        "@id": "https://delta-solutions.in/entrance-matting-systems/#itemlist"
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://delta-solutions.in/entrance-matting-systems/#itemlist",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 6,
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Nova Aluminium Mat", "url": "https://delta-solutions.in/nova-aluminium-mat.php" },
        { "@type": "ListItem", "position": 2, "name": "Cushion / Loop Mat", "url": "https://delta-solutions.in/cushion-loop-mat.php" },
        { "@type": "ListItem", "position": 3, "name": "Carpet Mat Super", "url": "https://delta-solutions.in/carpet-mat-super.php" },
        { "@type": "ListItem", "position": 4, "name": "Carpet Mat Universal", "url": "https://delta-solutions.in/carpet-mat-universal.php" },
        { "@type": "ListItem", "position": 5, "name": "Zig-Zag Mat", "url": "https://delta-solutions.in/zig-zag-mat.php" },
        { "@type": "ListItem", "position": 6, "name": "Logo & Shower Mats", "url": "https://delta-solutions.in/logo-shower-mats.php" }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://delta-solutions.in/entrance-matting-systems/#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://delta-solutions.in/" },
        { "@type": "ListItem", "position": 2, "name": "Entrance Matting Systems", "item": "https://delta-solutions.in/entrance-matting-systems/" }
      ]
    }
  ]
}
</script>

<style type="text/css">
/* ==================================================================
   ENTRANCE MATTING SYSTEMS — page styles (scoped to .dl-page)
   Theme: red #ed3237 on white, editorial serif + clean sans
   Type: Roboto only (300 display / 400 body / 500-700 UI)
   ================================================================== */

:root{
  --dl-red:#ed3237;
  --dl-red-dark:#c92329;
  --dl-ink:#16181c;
  --dl-body:#5c626c;
  --dl-muted:#9aa0a8;
  --dl-line:#e6e7ea;
  --dl-soft:#f6f6f7;
  --dl-header-h:70px;   /* height of the site's sticky header — tweak if needed */
}

/* position:sticky needs a non-clipping ancestor on this page */
.page-wrapper{ overflow:visible; }
html{ scroll-behavior:smooth; }

.dl-page{
  font-family:'Roboto', sans-serif;
  color:var(--dl-body);
  background:#fff;
  -webkit-font-smoothing:antialiased;
}
.dl-page *{ box-sizing:border-box; }
.dl-container{ max-width:1220px; margin:0 auto; padding:0 28px; }

/* ---------- shared type ---------- */
.dl-page .dl-eyebrow{
  display:block;
  font-family:'Roboto',sans-serif;
  font-size:11px; font-weight:700;
  letter-spacing:.24em; text-transform:uppercase;
  color:var(--dl-red); margin:0 0 18px;
}
.dl-page .dl-display{
  font-family:'Roboto', sans-serif;
  font-weight:300; color:var(--dl-ink);
  line-height:1.12; letter-spacing:-.028em; margin:0;
}
.dl-page .dl-display em{ font-style:normal; font-weight:500; color:var(--dl-red); }
.dl-page .dl-lead{ font-size:17px; line-height:1.75; color:var(--dl-body); margin:0; }

/* ---------- breadcrumb ---------- */
.dl-crumbs{ border-bottom:1px solid var(--dl-line); background:#fff; }
.dl-page ul.dl-crumbs__list{ margin:0; padding:18px 0; font-size:12px; letter-spacing:.06em; }
.dl-page ul.dl-crumbs__list li{ display:inline-block; color:var(--dl-muted); text-transform:uppercase; }
.dl-page ul.dl-crumbs__list li + li:before{ content:"/"; margin:0 10px; color:#d3d5d9; }
.dl-page ul.dl-crumbs__list a{ color:var(--dl-body); }
.dl-page ul.dl-crumbs__list a:hover{ color:var(--dl-red); }

/* ---------- hero ---------- */
.dl-hero{
  position:relative;
  min-height:clamp(420px, 68vh, 620px);
  display:flex; align-items:flex-end;
  background:#101215 center/cover no-repeat;
  overflow:hidden;
}
.dl-hero:after{
  content:""; position:absolute; inset:0;
  background:linear-gradient(180deg, rgba(10,11,13,.55) 0%, rgba(10,11,13,.15) 40%, rgba(10,11,13,.88) 100%);
}
.dl-hero__inner{ position:relative; z-index:2; width:100%; padding-top:120px; padding-bottom:56px; }
.dl-hero .dl-eyebrow{ color:#fff; opacity:.85; }
.dl-page .dl-hero h1{
  font-family:'Roboto', sans-serif;
  font-weight:300; color:#fff;
  font-size:clamp(38px, 5.6vw, 72px);
  line-height:1.06; letter-spacing:-.035em; margin:0 0 22px;
  max-width:15ch;
}
.dl-page .dl-hero h1 em{ font-style:normal; font-weight:700; color:#fff; }
.dl-page .dl-hero h1 .dot{ color:var(--dl-red); }
.dl-hero__sub{ max-width:52ch; color:rgba(255,255,255,.82); font-size:17px; line-height:1.7; margin:0; }

/* stat strip */
.dl-stats{ display:flex; flex-wrap:wrap; gap:44px; margin-top:44px; }
.dl-stat{ min-width:132px; }
.dl-stat__rule{ display:block; height:2px; width:64px; background:rgba(255,255,255,.35); margin-bottom:14px; }
.dl-stat:first-child .dl-stat__rule{ background:var(--dl-red); }
.dl-stat__num{
  font-family:'Roboto', sans-serif; font-weight:700;
  font-size:38px; line-height:1; letter-spacing:-.02em; color:#fff; display:block;
}
.dl-stat__num sup{ font-size:.5em; color:var(--dl-red); top:-.7em; }
.dl-stat__label{
  display:block; margin-top:9px;
  font-size:10.5px; letter-spacing:.18em; text-transform:uppercase;
  color:rgba(255,255,255,.6); line-height:1.6;
}

/* ---------- sticky product nav ---------- */
.dl-subnav{
  position:sticky; top:var(--dl-header-h); z-index:40;
  background:rgba(255,255,255,.94);
  -webkit-backdrop-filter:saturate(180%) blur(12px);
  backdrop-filter:saturate(180%) blur(12px);
  border-bottom:1px solid var(--dl-line);
}
.dl-page ul.dl-subnav__list{
  display:flex; gap:8px; padding:12px 0; margin:0;
  overflow-x:auto; -ms-overflow-style:none; scrollbar-width:none;
}
.dl-page ul.dl-subnav__list::-webkit-scrollbar{ display:none; }
.dl-page ul.dl-subnav__list li{ flex:0 0 auto; }
.dl-page ul.dl-subnav__list a{
  display:block; white-space:nowrap;
  font-size:12.5px; font-weight:600; letter-spacing:.02em;
  color:var(--dl-body); padding:8px 16px; border-radius:100px;
  border:1px solid var(--dl-line); background:#fff;
  transition:all .25s ease;
}
.dl-page ul.dl-subnav__list a:hover{ color:var(--dl-ink); border-color:#c9ccd1; }
.dl-page ul.dl-subnav__list a.is-active{ background:var(--dl-red); border-color:var(--dl-red); color:#fff; }

/* ---------- intro / the system ---------- */
.dl-section{ padding:88px 0; }
.dl-section--soft{ background:var(--dl-soft); }
.dl-intro{ display:grid; grid-template-columns:1fr 1.15fr; gap:70px; align-items:start; }
.dl-page .dl-intro h2{ font-size:clamp(30px,3.4vw,46px); max-width:12ch; }

.dl-zones{ display:grid; grid-template-columns:repeat(3,1fr); gap:26px; margin-top:64px; }
.dl-zone{
  background:#fff; border:1px solid var(--dl-line);
  border-top:2px solid var(--dl-line);
  padding:32px 28px 30px; transition:all .35s ease;
}
.dl-zone:hover{ border-top-color:var(--dl-red); transform:translateY(-4px); box-shadow:0 18px 40px -24px rgba(22,24,28,.35); }
.dl-zone__num{
  font-family:'Roboto', sans-serif; font-weight:700;
  font-size:26px; letter-spacing:-.02em;
  color:var(--dl-red); line-height:1; display:block; margin-bottom:16px;
}
.dl-page .dl-zone h3{
  font-family:'Roboto', sans-serif; font-weight:500;
  font-size:20px; letter-spacing:-.012em;
  color:var(--dl-ink); margin:0 0 10px; line-height:1.35;
}
.dl-zone p{ font-size:14.5px; line-height:1.7; margin:0 0 18px; }
.dl-zone__fam{
  font-size:10.5px; letter-spacing:.16em; text-transform:uppercase;
  color:var(--dl-ink); font-weight:700; padding-top:16px;
  border-top:1px solid var(--dl-line);
}

/* ---------- range header ---------- */
.dl-rangehead{ padding:88px 0 8px; }
.dl-page .dl-rangehead h2{ font-size:clamp(32px,4vw,54px); max-width:16ch; }

/* ---------- product rows ---------- */
.dl-row{
  display:grid; grid-template-columns:1.02fr .98fr;
  gap:66px; align-items:center;
  padding:74px 0; border-top:1px solid var(--dl-line);
  scroll-margin-top:calc(var(--dl-header-h) + 80px);
}
.dl-row:first-of-type{ border-top:0; padding-top:36px; }
.dl-row--flip .dl-row__media{ order:2; }

.dl-media{
  position:relative; overflow:hidden; background:var(--dl-soft);
  border:1px solid var(--dl-line); border-radius:3px;
}
.dl-media a{ display:block; }
.dl-page .dl-media img{
  display:block; width:100%; height:420px; object-fit:cover;
  transition:transform 1.1s cubic-bezier(.16,1,.3,1);
}
.dl-media:hover img{ transform:scale(1.045); }
.dl-media__num{
  position:absolute; top:0; left:0; z-index:3;
  background:#fff; color:var(--dl-ink);
  font-family:'Roboto',sans-serif; font-size:11px; font-weight:700; letter-spacing:.16em;
  padding:10px 16px; border-right:1px solid var(--dl-line); border-bottom:1px solid var(--dl-line);
}
.dl-media__num i{ font-style:normal; color:var(--dl-red); }

/* zone chips */
.dl-chips{ display:flex; align-items:center; gap:7px; margin:0 0 20px; }
.dl-chips__label{
  font-size:10px; letter-spacing:.18em; text-transform:uppercase;
  color:var(--dl-muted); margin-right:4px;
}
.dl-chip{
  width:22px; height:22px; line-height:20px; text-align:center;
  font-size:11px; font-weight:700; border-radius:3px;
  border:1px solid var(--dl-line); color:#c6c9ce; background:#fff;
}
.dl-chip.is-on{ background:var(--dl-ink); border-color:var(--dl-ink); color:#fff; }

.dl-page .dl-row h2{
  font-family:'Roboto', sans-serif; font-weight:500;
  font-size:clamp(26px,2.9vw,37px); color:var(--dl-ink);
  line-height:1.18; letter-spacing:-.028em; margin:0 0 8px;
}
.dl-row__meta{
  font-size:11px; letter-spacing:.18em; text-transform:uppercase;
  color:var(--dl-muted); margin:0 0 20px;
}
.dl-row__meta b{ color:var(--dl-red); font-weight:700; }
.dl-row__lead{ font-size:16px; line-height:1.75; margin:0 0 28px; max-width:46ch; }

/* spec list */
.dl-page ul.dl-specs{ margin:0 0 30px; padding:0; border-top:1px solid var(--dl-line); }
.dl-page ul.dl-specs li{
  display:flex; justify-content:space-between; align-items:baseline; gap:26px;
  padding:11px 2px; border-bottom:1px solid var(--dl-line);
  list-style:none; margin:0;
}
.dl-specs__k{
  flex:0 0 auto; font-size:11px; letter-spacing:.1em; text-transform:uppercase;
  color:var(--dl-muted); font-weight:600;
}
.dl-specs__v{ text-align:right; font-size:14px; color:var(--dl-ink); font-weight:600; line-height:1.55; }

/* buttons */
.dl-actions{ display:flex; flex-wrap:wrap; gap:12px; align-items:center; }
.dl-page a.dl-btn, .dl-page button.dl-btn{
  display:inline-flex; align-items:center; gap:9px;
  font-family:'Roboto',sans-serif; font-size:13px; font-weight:700;
  letter-spacing:.02em; line-height:1;
  padding:14px 26px; border-radius:100px; cursor:pointer;
  border:1px solid transparent; transition:all .28s ease; text-transform:none;
}
.dl-page a.dl-btn--solid{ background:var(--dl-red); color:#fff; border-color:var(--dl-red); }
.dl-page a.dl-btn--solid:hover{ background:var(--dl-ink); border-color:var(--dl-ink); color:#fff; }
.dl-page button.dl-btn--ghost{ background:#fff; color:var(--dl-ink); border-color:#d7d9dd; }
.dl-page button.dl-btn--ghost:hover{ border-color:var(--dl-ink); background:var(--dl-ink); color:#fff; }
.dl-page button.dl-btn--added{ background:var(--dl-soft); color:var(--dl-ink); border-color:var(--dl-line); cursor:default; }
.dl-btn img{ width:15px; height:auto; display:inline-block; }
.dl-page input.dl-hidden{ display:none !important; }

/* ---------- closing CTA ---------- */
.dl-cta{ background:var(--dl-ink); color:#fff; padding:76px 0; margin-top:20px; }
.dl-cta__inner{ display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:34px; }
.dl-cta__rule{ display:block; width:56px; height:2px; background:var(--dl-red); margin-bottom:22px; }
.dl-page .dl-cta h2{
  font-family:'Roboto', sans-serif; font-weight:300; font-style:normal;
  color:#fff; font-size:clamp(24px,2.8vw,35px); line-height:1.3; letter-spacing:-.028em;
  margin:0; max-width:24ch;
}
.dl-cta p{ color:rgba(255,255,255,.6); font-size:15px; margin:14px 0 0; max-width:46ch; }
.dl-page a.dl-btn--light{ background:#fff; color:var(--dl-ink); border-color:#fff; padding:16px 32px; }
.dl-page a.dl-btn--light:hover{ background:var(--dl-red); border-color:var(--dl-red); color:#fff; }

/* ---------- reveal ---------- */
.dl-reveal{ opacity:0; transform:translateY(20px); }
.dl-reveal.is-in{ opacity:1; transform:none; transition:opacity .8s cubic-bezier(.16,1,.3,1), transform .8s cubic-bezier(.16,1,.3,1); }
@media (prefers-reduced-motion:reduce){
  html{ scroll-behavior:auto; }
  .dl-reveal{ opacity:1; transform:none; }
}

/* ---------- responsive ---------- */
@media (max-width:1100px){
  .dl-row{ gap:46px; }
  .dl-page .dl-media img{ height:360px; }
}
@media (max-width:991px){
  .dl-section{ padding:64px 0; }
  .dl-intro{ grid-template-columns:1fr; gap:28px; }
  .dl-zones{ grid-template-columns:1fr; gap:16px; margin-top:44px; }
  .dl-row{ grid-template-columns:1fr; gap:32px; padding:56px 0; }
  .dl-row--flip .dl-row__media{ order:0; }
  .dl-hero__inner{ padding-top:96px; padding-bottom:44px; }
  .dl-stats{ gap:28px; margin-top:34px; }
  .dl-stat{ min-width:104px; }
  .dl-stat__num{ font-size:30px; }
}
@media (max-width:600px){
  .dl-container{ padding:0 20px; }
  .dl-page .dl-media img{ height:260px; }
  .dl-page ul.dl-specs li{ flex-direction:column; align-items:flex-start; gap:4px; }
  .dl-specs__v{ text-align:left; }
  .dl-actions{ gap:10px; }
  .dl-page a.dl-btn, .dl-page button.dl-btn{ width:100%; justify-content:center; }
  .dl-cta__inner{ display:block; }
  .dl-cta .dl-btn{ margin-top:26px; }
}
</style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-K4ZLQJJ" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<?php include 'header.php';?>

<main class="dl-page">

  <!-- ============ BREADCRUMB ============ -->
  <nav class="dl-crumbs">
    <div class="dl-container">
      <ul class="dl-crumbs__list page-breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Entrance Matting Systems</li>
      </ul>
    </div>
  </nav>

  <!-- ============ HERO ============ -->
  <section class="dl-hero" style="background-image:url('<?php echo $dl_hero_image; ?>');">
    <div class="dl-container dl-hero__inner">
      <span class="dl-eyebrow">The Delta System, Installed</span>
      <h1>Leave the outside <em>outside</em><span class="dot">.</span></h1>
      <p class="dl-hero__sub">
        Six product families, one system &mdash; engineered zone by zone to scrape, absorb
        and clean footfall before it ever reaches your floor.
      </p>

      <div class="dl-stats">
        <div class="dl-stat">
          <span class="dl-stat__rule"></span>
          <span class="dl-stat__num">6</span>
          <span class="dl-stat__label">Product<br/>families</span>
        </div>
        <div class="dl-stat">
          <span class="dl-stat__rule"></span>
          <span class="dl-stat__num">17<sup>+</sup></span>
          <span class="dl-stat__label">Specifications<br/>in range</span>
        </div>
        <div class="dl-stat">
          <span class="dl-stat__rule"></span>
          <span class="dl-stat__num">3</span>
          <span class="dl-stat__label">Zones of<br/>defence</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STICKY PRODUCT NAV ============ -->
  <nav class="dl-subnav" id="dlSubnav">
    <div class="dl-container">
      <ul class="dl-subnav__list">
        <?php foreach ($dl_products as $i => $p): ?>
        <li><a class="<?php echo ($i === 0) ? 'is-active' : ''; ?>" href="#<?php echo $p['anchor']; ?>"><?php echo $p['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>

  <!-- ============ THE SYSTEM ============ -->
  <section class="dl-section dl-section--soft">
    <div class="dl-container">
      <div class="dl-intro dl-reveal">
        <div>
          <span class="dl-eyebrow">The System</span>
          <h2 class="dl-display">Clean in <em>six meters.</em></h2>
        </div>
        <div>
          <p class="dl-lead">
            A single mat behind the door cannot do the whole job &mdash; people don't stop to wipe
            their feet, so the floor must work while they walk. An effective entrance cleans in
            stages: coarse grit scraped off first, moisture absorbed at the threshold, fine dust
            captured inside. Delta's families are engineered zone by zone to finish the job
            within the first few meters.
          </p>
        </div>
      </div>

      <div class="dl-zones">
        <div class="dl-zone dl-reveal">
          <span class="dl-zone__num">01</span>
          <h3>Zone 1 &mdash; Outside</h3>
          <p>The first line of defence. Coarse grit and standing water are scraped and drained before the door.</p>
          <div class="dl-zone__fam">Zig-Zag &middot; Nova Aluminium</div>
        </div>
        <div class="dl-zone dl-reveal">
          <span class="dl-zone__num">02</span>
          <h3>Zone 2 &mdash; Threshold</h3>
          <p>Dirt and moisture are trapped at the entrance itself, where footfall is heaviest and wettest.</p>
          <div class="dl-zone__fam">Cushion / Loop &middot; Carpet Super</div>
        </div>
        <div class="dl-zone dl-reveal">
          <span class="dl-zone__num">03</span>
          <h3>Zone 3 &mdash; Inside</h3>
          <p>Fine dust is captured in circulation areas, so lobbies, corridors and finishes stay at their best.</p>
          <div class="dl-zone__fam">Carpet Universal &middot; Logo Mats</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ THE RANGE ============ -->
  <section class="dl-rangehead">
    <div class="dl-container dl-reveal">
      <span class="dl-eyebrow">The Range</span>
      <h2 class="dl-display">Six families, <em>one system.</em></h2>
    </div>
  </section>

  <section class="projects-section-four" style="padding:0 0 40px;">
    <div class="dl-container">

      <?php
      $i = 0;
      foreach ($dl_products as $p):
          $code    = isset($productArray[$p['key']]['code']) ? $productArray[$p['key']]['code'] : '';
          $codeAtt = htmlspecialchars($code, ENT_QUOTES);
          $in_cart = ($code !== '' && in_array($code, $session_code_array));
          $flip    = ($i % 2 === 1);
          $i++;
      ?>
      <article class="dl-row <?php echo $flip ? 'dl-row--flip' : ''; ?> dl-reveal" id="<?php echo $p['anchor']; ?>">

        <!-- media -->
        <div class="dl-row__media">
          <div class="dl-media">
            <span class="dl-media__num"><i><?php echo $p['num']; ?></i> &middot; <?php echo $p['zoneline']; ?></span>
            <a href="<?php echo $p['link']; ?>">
              <img alt="<?php echo $p['alt']; ?>"
                   class="drift-demo-trigger"
                   data-zoom="<?php echo $p['zoom']; ?>"
                   src="<?php echo $p['img']; ?>"/>
            </a>
          </div>
        </div>

        <!-- info -->
        <div class="dl-row__info">
          <div class="dl-chips">
            <span class="dl-chips__label">Zones</span>
            <?php for ($z = 1; $z <= 3; $z++): ?>
              <span class="dl-chip <?php echo in_array($z, $p['zones']) ? 'is-on' : ''; ?>"><?php echo $z; ?></span>
            <?php endfor; ?>
          </div>

          <h2><?php echo $p['name']; ?></h2>
          <p class="dl-row__meta">Collection <b><?php echo $p['num']; ?></b> &nbsp;&middot;&nbsp; <?php echo $p['zoneline']; ?></p>
          <p class="dl-row__lead"><?php echo $p['lead']; ?></p>

          <ul class="dl-specs">
            <?php foreach ($p['specs'] as $k => $v): ?>
            <li><span class="dl-specs__k"><?php echo $k; ?></span><span class="dl-specs__v"><?php echo $v; ?></span></li>
            <?php endforeach; ?>
          </ul>

          <div class="dl-actions">
            <a class="dl-btn dl-btn--solid theme-btn btn-style-one" href="<?php echo $p['link']; ?>">Know More</a>

            <button type="button"
                    class="dl-btn dl-btn--ghost theme-btn btn-style-onecart btnAddAction"
                    id="add_<?php echo $codeAtt; ?>"
                    onClick="cartAction('add','<?php echo $codeAtt; ?>')"
                    <?php if ($in_cart) { ?>style="display:none"<?php } ?>>
              Add to Enquiry Basket <img src="images/add-to-cart.png" alt="Add to enquiry basket"/>
            </button>

            <button type="button"
                    class="dl-btn dl-btn--added theme-btn btn-style-onecart btnAdded"
                    id="added_<?php echo $codeAtt; ?>"
                    <?php if (!$in_cart) { ?>style="display:none"<?php } ?>>
              Added <img src="images/icon-check.png" alt="Added checkmark"/>
            </button>

            <input class="dl-hidden" type="hidden" id="qty_<?php echo $codeAtt; ?>" name="quantity" value="1" size="2"/>
            <input class="dl-hidden" type="hidden" id="remark_<?php echo $codeAtt; ?>" name="remark" value=""/>
          </div>
        </div>

      </article>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- ============ CLOSING CTA ============ -->
  <section class="dl-cta">
    <div class="dl-container dl-cta__inner">
      <div>
        <span class="dl-cta__rule"></span>
        <h2>Share your floor plan &mdash; we'll return it zoned and specified.</h2>
        <p>Every building is specified differently. Tell us the doors, the footfall and the finishes, and we'll map the right system entrance by entrance.</p>
      </div>
      <a class="dl-btn dl-btn--light" href="contact.php">Request a Specification</a>
    </div>
  </section>

</main>

<?php include 'footer.php';?>
</div>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.products').addClass('current');
});

/* ---- page enhancements: reveal on scroll + active sub-nav ---- */
(function () {
    if (!('IntersectionObserver' in window)) {
        var els = document.querySelectorAll('.dl-reveal');
        for (var i = 0; i < els.length; i++) { els[i].classList.add('is-in'); }
        return;
    }

    // fade sections in
    var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-in');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -12% 0px', threshold: 0.08 });

    document.querySelectorAll('.dl-reveal').forEach(function (el, i) {
        el.style.transitionDelay = (Math.min(i, 3) * 70) + 'ms';
        revealObserver.observe(el);
    });

    // highlight the product currently in view
    var links = document.querySelectorAll('.dl-subnav__list a');
    var navObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) { return; }
            var id = entry.target.getAttribute('id');
            links.forEach(function (a) {
                a.classList.toggle('is-active', a.getAttribute('href') === '#' + id);
            });
        });
    }, { rootMargin: '-30% 0px -55% 0px', threshold: 0 });

    document.querySelectorAll('.dl-row[id]').forEach(function (row) { navObserver.observe(row); });
}());
</script>
</body>
</html>
