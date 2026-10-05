<?php
// Example blog data (you can replace this with DB fetch)
$blogs = [
  [
    "id" => 1,
    "title" => "Battery vs Diesel Ride On Sweeper: Choosing the Right Fit for Your Facility",
    "excerpt" => "Discover the right ride-on sweeper for your facility. Battery or diesel? Learn operational, environmental, and maintenance insights to make an informed choice.",
    "author" => "Admin",
    "date" => "2025-12-19", 
    "category" => "Sweepers",
    "image"=> "/images/blogs/battery-vs-diesel-ride-on-sweeper.webp",
    "link"=>"battery-vs-diesel-ride-on-sweeper",
  ],
  [
    "id" => 2,
    "title" => "Which Vacuum Cleaner is Best for Industrial Use",
    "excerpt" => "If you manage sites or large factories, you might know that home vacuums fall short when floors need deep cleaning. From removing dangerous waste to handling metal or plaster dust, the right industrial vacuum does more than clean—it protects employees and keeps operations running smoothly...",
    "author" => "Admin",
    "date" => "2025-08-23", 
    "category" => "Vacuum Cleaners",
    "image"=> "/images/blogs/which-vacuum-cleaner-is-best-for-industrial-use.png",
    "link"=>"which-vacuum-cleaner-is-best-for-industrial-use",
  ],
  [
  "id" => 3,
  "title" => "Industrial Cleaning Equipment: The Complete Buyers Guide for Choosing the Right Machines for Every Facility",
  "excerpt" => "Looking for the right industrial cleaning equipment for your facility? This comprehensive buyers guide explains different industrial cleaning machines, their applications, buying considerations, and how to select the ideal solution for factories, warehouses, hospitals, hotels, and commercial spaces.",
  "author" => "Admin",
  "date" => "2026-07-16", 
  "category" => "Industrial Cleaning",
  "image"=> "/images/blogs/industrial-cleaning-equipment-the-complete-buyers-guide.webp",
  "link"=>"industrial-cleaning-equipment-buyers-guide",
],
 [
  "id" => 4,
  "title" => "Industrial Vacuum Cleaner vs Wet & Dry Vacuum Cleaner: What's the Difference?",
  "excerpt" => "Understand the difference between industrial and wet & dry vacuum cleaners, including their applications, filtration, capacity, suction and operating requirements.",
  "author" => "Admin",
  "date" => "2026-08-20", 
  "category" => "Vacuum Cleaners",
  "image"=> "/images/blogs/industrial-vacuum-cleaner-vs-wet-dry-vacuum-cleaner.webp",
  "link"=>"industrial-vacuum-cleaner-vs-wet-dry-vacuum-cleaner",
],
  [
  "id" => 5,
  "title" => "Wet and Dry Vacuum Cleaner: Complete Buying Guide",
  "excerpt" => "A practical guide to choosing a wet and dry vacuum cleaner for commercial and professional applications, covering capacity, suction, airflow, filtration, features and maintenance.",
  "author" => "Admin",
  "date" => "2026-08-24", 
  "category" => "Vacuum Cleaners",
  "image"=> "/images/blogs/wet-and-dry-vacuum-cleaner-complete-buying-guide.webp",
  "link"=>"wet-and-dry-vacuum-cleaner-buying-guide",
],
];

// Sort blogs by date, latest first
usort($blogs, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>Blogs - Delta Solutions</title>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="Explore Delta Solutions' blogs for expert insights on industrial cleaning machines, facility management, hygiene best practices, and workplace cleaning solutions." />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  
  <link rel="canonical" href="https://delta-solutions.in/blogs" />
  <link rel="alternate" href="https://delta-solutions.in/blogs" hreflang="en-in" />
  <link rel="alternate" href="https://delta-solutions.in/blogs" hreflang="x-default">

  <meta property="og:title" content="Blogs - Delta Solutions">
  <meta property="og:site_name" content="Delta Solutions">
  <meta property="og:url" content="https://delta-solutions.in/blogs">
  <meta property="og:description" content="Stay updated with the latest tips, trends, and solutions in cleaning and facility management.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://delta-solutions.in/images/300x75.png">
  
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Blogs - Delta Solutions" />
  <meta name="twitter:description" content="Stay updated with the latest tips, trends, and solutions in cleaning and facility management." />
  <meta name="twitter:image" content="https://delta-solutions.in/images/300x75.png" />


<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet"><!-- 
<link href="css/owl.css" rel="stylesheet">
 -->
<link href="css/owl.theme.default.css" rel="stylesheet">
<!-- <link href="css/owl.theme.default.min.css" rel="stylesheet"> -->
<!-- <link href="css/owl.theme.green.css" rel="stylesheet"> -->

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->


<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Delta Solutions Blog",
  "url": "https://delta-solutions.in/blogs",
  "description": "Stay updated with the latest tips, trends, and solutions in cleaning and facility management.",
  "datePublished": "2025-08-28T09:00:00+05:30",
  "dateModified": "2025-08-28T09:00:00+05:30",
  "isPartOf": {
    "@type": "CollectionPage",
    "name": "Delta Solutions Blog Listing",
    "mainEntity": {
      "@type": "Blog",
      "name": "Delta Solutions Blog",
      "blogPost": [
        {
          "@type": "BlogPosting",
          "headline": "Which Vacuum Cleaner is Best for Industrial Use",
          "url": "https://delta-solutions.in/blogs/which-vacuum-cleaner-is-best-for-industrial-use",
          "datePublished": "2025-08-22T09:00:00+05:30",
          "author": {
            "@type": "Person",
            "name": "Admin"
          }
        },
        {
          "@type": "BlogPosting",
          "headline": "Why Vacuum Cleaners Are Replacing Brooms and Mops",
          "url": "https://delta-solutions.in/blogs/why-vacuum-cleaners-are-replacing-brooms-and-mops",
          "datePublished": "2025-08-22T09:00:00+05:30",
          "author": {
            "@type": "Person",
            "name": "Admin"
          }
        }
      ]
    }
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://delta-solutions.in"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Blogs",
        "item": "https://delta-solutions.in/blogs"
      }
    ]
  },
  "publisher": {
    "@type": "Organization",
    "name": "Delta Solutions",
    "url": "https://delta-solutions.in",
    "logo": {
      "@type": "ImageObject",
      "url": "https://delta-solutions.in/images/300x75.png",
      "width": 600,
      "height": 60
    }
  },
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://delta-solutions.in/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<!-- Hotjar Tracking Code for http://delta-solutions.in/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2558653,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

  <style>
 
    .blog-card {
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }
    .blog-card:hover {
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .blog-img {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }
    .blog-category {
      font-size: 12px;
      text-transform: uppercase;
      color: #e63946;
      font-weight: bold;
    }
    .blog-date {
      font-size: 13px;
      color: #6c757d;
      margin-bottom: 6px;
    }
    .read-btn {
    
      background: #e63946;
      color: #fff;
      border-radius: 8px;
      padding: 6px 14px;
      font-size: 14px;
      text-decoration: none;
      margin-top: 12px;
    }
    .read-btn:hover {
      background: #c92c3a;
      color: #fff;
    }
    .container {margin-top: 120px;}
    .card-text {margin-bottom: 12px;}
  </style>
</head>
<body>


<div class="wrapper">
    <?php include 'header.php';?>

  <div class="container py-5 mt-16">
    <div class="text-center mb-5">
              <h1 class="fw-bold">Latest <span class="text-danger">Blogs</span></h1>
      <h2 class="text-uppercase text-danger">Our Insights</h2>

      <p class="text-muted">Stay updated with the latest tips, trends, and solutions in cleaning and facility management.</p>
    </div>

    <div class="row g-4">
      <?php foreach ($blogs as $blog): ?>
        <div class="col-md-6 col-lg-4">
          <div class="card blog-card">
            <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>" class="blog-img">
            <div class="card-body">
              <p class="blog-category"><?php echo $blog['category']; ?></p>
              <div class="card-title fw-bold"><?php echo $blog['title']; ?></div>
              <p class="blog-date mb-1">
                <?php echo date('d M Y', strtotime($blog['date'])); ?>
              </p>
              <p class="card-text text-muted">
                <?php echo substr($blog['excerpt'], 0, 100) . "..."; ?>
              </p>
              <a href="<?php echo $blog['link']; ?>" class="read-btn">Read More</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
 <?php include 'footer.php'; ?>
</div>


</body>
</html>