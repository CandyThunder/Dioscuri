<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>Dioscuri Webdesign Agentur Bensheim | High-Performance Websites</title>

  <meta name="description"
    content="Dioscuri Webdesign Agentur in Bensheim: handgefertigte Websites mit purem Code oder Webflow – schnell, SEO-stark, responsiv." />
  <link rel="canonical" href="https://dioscuri.design/" />

  <!-- Robots + snippet preview controls (Google-supported) -->
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="Dioscuri" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Dioscuri – Webdesign Agentur in Bensheim" />
  <meta property="og:description"
    content="Handgefertigte Websites mit purem Code oder Webflow – optimiert für Performance, SEO und responsives Design." />
  <meta property="og:url" content="https://dioscuri.design/" />
  <meta property="og:locale" content="de_DE" />
  <!-- IMPORTANT: use PNG/JPG/WebP, not SVG -->
  <meta property="og:image" content="https://dioscuri.design/assets/images/og/og-image-1200x630.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Dioscuri – Webdesign Agentur in Bensheim" />
  <meta name="twitter:description" content="High-Performance Websites mit Code oder Webflow – SEO & responsiv." />
  <meta name="twitter:image" content="https://dioscuri.design/assets/images/og/og-image-1200x630.jpg" />

  <!-- Icons -->
  <link rel="icon" href="/assets/images/favicon.ico" sizes="any" />
  <!-- Optional but recommended if you have them:
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32.png" />
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png" />
  <link rel="manifest" href="/site.webmanifest" />
  -->

  <!-- CSS: keep critical CSS renderable immediately -->
  <link rel="stylesheet" href="styles/critical.css" />
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/modal-styles.css" />

  <!-- Structured data (clean entity IDs) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["Organization","ProfessionalService"],
        "@id": "https://dioscuri.design/#organization",
        "name": "Dioscuri Webdesign Agentur",
        "legalName": "Hazem Alahmad - Dioscuri",
        "url": "https://dioscuri.design/",
        "logo": "https://dioscuri.design/assets/images/logo.png",
        "image": "https://dioscuri.design/assets/images/og/og-image-1200x630.jpg",
        "description": "Dioscuri Webdesign Agentur mit Sitz in Bensheim. Handgefertigt mit purem Code oder Webflow für optimale Performance.",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Taunusstraße 8",
          "addressLocality": "Bensheim",
          "postalCode": "64625",
          "addressCountry": "DE"
        },
        "areaServed": "DE",
        "availableLanguage": ["de","en"],
        "sameAs": [
          "https://dioscuri.design/"
        ]
        /* Recommended if you provide them:
        ,"telephone": "+49...",
        "email": "hello@...",
        "geo": {"@type":"GeoCoordinates","latitude":..., "longitude":...},
        "openingHoursSpecification": [...],
        "priceRange": "€€"
        */
      },
      {
        "@type": "WebSite",
        "@id": "https://dioscuri.design/#website",
        "url": "https://dioscuri.design/",
        "name": "Dioscuri",
        "publisher": { "@id": "https://dioscuri.design/#organization" }
      },
      {
        "@type": "Service",
        "@id": "https://dioscuri.design/#service-webdesign",
        "name": "Webdesign & Webentwicklung",
        "serviceType": "Webdesign und Webentwicklung",
        "provider": { "@id": "https://dioscuri.design/#organization" },
        "areaServed": "DE",
        "description": "Handgefertigte Websites mit purem Code oder Webflow, optimiert für Performance, SEO und responsives Design.",
        "offers": {
          "@type": "Offer",
          "url": "https://dioscuri.design/",
          "priceCurrency": "EUR"
          /* add "price" only if you show consistent pricing publicly */
        }
      }
    ]
  }
  </script>

  <!-- Analytics -->
  <script src="https://analytics.ahrefs.com/analytics.js" data-key="1V4Zg5DKBSAP2nQhFUIFNw" async></script>
</head>


<body>
  <?php include 'components/header.php'; ?>
  <?php include 'components/hero.php'; ?>
  <?php include 'components/ueber-mich.php'; ?>
  <?php include 'components/projekte.php'; ?>
  <?php include 'components/footer.php'; ?>
  <?php include 'components/impressum.php'; ?>
  <?php include 'components/datenschutz.php'; ?>

  <script>
    document.querySelectorAll('.no-hash').forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        document.getElementById(targetId).scrollIntoView({
          behavior: 'smooth'
        });
        // Remove the hash from the URL
        history.replaceState(null, null, window.location.pathname + window.location.search);
      });
    });
  </script>
  <script defer src="./js/dropdown.js?v=2"></script>
  <script defer src="./js/footer.js?v=2"></script>
  <script defer src="./js/desktop.js?v=2"></script>
  <script defer src="./js/profile.js?v=2"></script>
  <script defer src="./js/modal-script.js?v=2"></script>

  <script>
    window.addEventListener('load', () => {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = 'styles/non-critical.css';
      document.head.appendChild(link);
    });
  </script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
</body>

</html>