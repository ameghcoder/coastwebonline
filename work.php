<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/public/components/headLink.php') ?>
  <title>Our Work</title>
</head>

<body data-theme="light">
  <div class="relative">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php") ?>
    <main class="w-screen">
      <div id="home" class="w-screen h-auto px-4 py-6 flex flex-col gap-2 justify-center relative">
        <div class="flex gap-2 justify-start px-2 md:px-4 lg:px-8 w-full max-w-7xl mx-auto">
          <div class="flex flex-col">
            <h1>
              <strong class="text-4xl md:text-7xl txt-stroke-white">Check</strong>
              <br>
              <strong class="text-4xl md:text-7xl">Our Work</strong>
            </h1>
            <a href="./#contactForm" class="w-full max-w-40 relative bg-q_primary_clr rounded-s-full rounded-e-full hover:rounded-e-none transition-all px-4 py-2 group shadow-lg" type="button">
              <span class="z-10 text-xl font-semibold tracking-wider text-q_background_clr">
                Say Hello !
              </span>
              <span class="absolute -z-10 top-0 right-0 flex invisible group-hover:-right-12 group-hover:visible w-11 h-11 bg-q_primary_clr rounded-e-full items-center justify-center transition-all animate-pulse" style="padding: 6px 0;">
                <span class="small-icon right-arrow"></span>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="bg-q_background_clr backdrop-blur-sm mt-4">
        <div id="show-work" class="w-full h-auto flex justify-center items-center relative">
          <div class="w-full max-w-7xl mx-auto">
            <!-- branding work showcase -->
            <div class="w-full h-auto rounded-md shadow-md overflow-hidden">
              <div class="w-full border-b border-q_br_clr bg-q_surface_clr px-4 py-2">
                <strong class="text-heading-small">Branding</strong>
              </div>
              <div class="w-full p-4">
                <div class="glide w-full" style="min-height: 240px;">
                  <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides flex">
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/brand-mood.webp" src="./public/mockups/ameghcoder/webp/brand-mood.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup brand mood image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/business-card-envelope.webp" src="./public/mockups/ameghcoder/webp/business-card-envelope.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup business card envelope image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/color-matching-sweatshirt.webp" src="./public/mockups/ameghcoder/webp/color-matching-sweatshirt.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup color matching sweatshirt image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/glass-sign.webp" src="./public/mockups/ameghcoder/webp/glass-sign.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup glass sign image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/listed-brand-logo.webp" src="./public/mockups/ameghcoder/webp/listed-brand-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup listed brand logo image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/mail-light-box-billboard.webp" src="./public/mockups/ameghcoder/webp/mail-light-box-billboard.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup light box bill board image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/metal-plate-logo.webp" src="./public/mockups/ameghcoder/webp/metal-plate-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup metal plate logo image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/mug-logo.webp" src="./public/mockups/ameghcoder/webp/mug-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup mug logo image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/office.webp" src="./public/mockups/ameghcoder/webp/office.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup office image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/outdoor-neon-light-logo.webp" src="./public/mockups/ameghcoder/webp/outdoor-neon-light-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup outdoor neon light logo image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/outside-company.webp" src="./public/mockups/ameghcoder/webp/outside-company.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup outside company image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/paper-logo.webp" src="./public/mockups/ameghcoder/webp/paper-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup paper logo image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/roll-edge-sticker.webp" src="./public/mockups/ameghcoder/webp/roll-edge-sticker.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup roll edge sticker image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/watch.webp" src="./public/mockups/ameghcoder/webp/watch.png" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup watch image">
                      </li>
                      <li class="list-none glide__slide flex items-center justify-center mockup-img">
                        <img data-baseUrl="./public/mockups/{{REPLACE}}/webp/wooden-sign-logo.webp" src="./public/mockups/ameghcoder/webp/wooden-sign-logo.webp" class="rounded-md h-auto max-h-60 object-cover shadow-md img_to_model" alt="mockup wooden sign logo image">
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="w-full flex gap-2 justify-center flex-wrap">
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90 active__selected--box" data-pathName="ameghcoder">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/ameghcoder.png" alt="amegh coder logo">
                    <span class="text-sm font-semibold hidden">Amegh<br>Coder</span>
                  </div>
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90" data-pathName="cwo">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/cwo.png" alt="coast web online logo">
                    <span class="text-sm font-semibold hidden">Coast Web<br>Online</span>
                  </div>
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90" data-pathName="gator">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/gator.png" alt="gator logo">
                    <span class="text-sm font-semibold hidden">Gator</span>
                  </div>
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90" data-pathName="query">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/query.png" alt="query logo">
                    <span class="text-sm font-semibold hidden">Query</span>
                  </div>
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90" data-pathName="receko">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/receko.png" alt="receko logo">
                    <span class="text-sm font-semibold hidden">Receko</span>
                  </div>
                  <div class="w-16 h-16 rounded-full shadow-md py-1 px-2 border border-q_br_clr flex items-center justify-between mockup-change-btn transition-all cursor-pointer hover:scale-90" data-pathName="wa">
                    <img class="w-12 h-12" src="./public/mockups/original-logo/wa.png" alt="wallpaper access or wa logo">
                    <span class="text-sm font-semibold hidden">WA</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- website design work showcase -->
            <div class="w-full h-auto rounded-md shadow-md overflow-hidden mt-4">
              <div class="w-full border-b border-q_br_clr bg-q_surface_clr px-4 py-2">
                <strong class="text-heading-small">Web Development, UI/UX Design</strong>
              </div>
              <div class="w-full p-4">
                <div class="w-full grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Clothe_Website.webp" alt="clothes website">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Fantasy_Website.webp" alt="fantasy website">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Furniture_Dark.webp" alt="furniture dark">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Furniture_Light.webp" alt="furniture light">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Market_Website.webp" alt="market website">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Tranvelling_Website.webp" alt="travelling website">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Ultimate_Design.webp" alt="ultimate website design">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Web_Service_Dark.webp" alt="webservices website design dark">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/web-design/webp/Web_Service_Light.webp" alt="web services website design light">
                </div>
              </div>
            </div>
            <!-- graphic and logo design work showcase -->
            <div class="w-full h-auto rounded-md shadow-md overflow-hidden mt-4">
              <div class="w-full border-b border-q_br_clr bg-q_surface_clr px-4 py-2">
                <strong class="text-heading-small">Graphics and Logo Designs</strong>
              </div>
              <div class="w-full p-4">
                <div class="w-full grid gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/amegh-coder.webp" alt="amegh coder graphic">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/banner.webp" alt="banner for marketing">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/comeup-design.webp" alt="banner for web marketing">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/discovery-card.webp" alt="discovery card">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/dotor.webp" alt="dotor">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/gloztik.webp" alt="gloztik">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/google-analytics.webp" alt="google analytics">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/matrix.webp" alt="matrix">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/ocean-of-code.webp" alt="ocean of code">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/ogt.webp" alt="open gaming time">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/pixel-blaze.webp" alt="pixel blaze">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/query.webp" alt="query">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/quotes.webp" alt="quotes">
                  <img class="w-full max-w-60 h-auto object-cover rounded-md shadow-md img_to_model" src="./public/mockups/graphics/wallpaper-access.webp" alt="wallpaper access">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="blob-box w-full h-full fixed top-0 sm:-top-1/3 md:-top-1/2 -right-1/2 -z-50">
      <div class="blob-container w-full h-full absolute -z-50">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
          <defs>
            <pattern id="pattern3" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse" fill="var(--firstStopColor)">
              <path d="M0 40L40 0H20L0 20M40 40V20L20 40"></path>
            </pattern>
          </defs>
          <path fill="url(#pattern3)">
            <animate 
            attributeName="d"
            dur="25000ms"
            repeatCount="indefinite"
            values="
            M377,274Q341,298,360,367.5Q379,437,328,455.5Q277,474,234,439.5Q191,405,131,406.5Q71,408,55.5,355Q40,302,57,254.5Q74,207,88.5,163Q103,119,161,143.5Q219,168,243.5,133.5Q268,99,322.5,82.5Q377,66,372.5,127Q368,188,390.5,219Q413,250,377,274Z;
            M419.12076,300.89639Q443.51075,351.79277,417.8526,404.03849Q392.19445,456.2842,330.02992,427.08118Q267.86538,397.87815,219.79059,427.82798Q171.7158,457.77781,150.2842,407.51496Q128.8526,357.2521,94.57588,327.08866Q60.29916,296.92521,89.98613,257.54487Q119.67311,218.16454,98.1421,157.41773Q76.61109,96.67092,133.59614,94.27454Q190.58118,91.87815,228.78311,100.00639Q266.98504,108.13462,296.11109,124.11328Q325.23714,140.09193,365.39529,154.40386Q405.55344,168.7158,400.1421,209.3579Q394.73076,250,419.12076,300.89639Z;
            M361.5,276.5Q351,303,354.5,355Q358,407,315,417.5Q272,428,231,418Q190,408,140.5,399.5Q91,391,64.5,346.5Q38,302,48,252.5Q58,203,122,198Q186,193,179.5,120.5Q173,48,223.5,48Q274,48,333,46Q392,44,364.5,124.5Q337,205,354.5,227.5Q372,250,361.5,276.5Z;
            M440,303.5Q454,357,423,406Q392,455,326.5,400Q261,345,224,380.5Q187,416,187,361Q187,306,178,288Q169,270,166.5,249.5Q164,229,137,177.5Q110,126,149,106.5Q188,87,228.5,92.5Q269,98,287,134Q305,170,344,175Q383,180,404.5,215Q426,250,440,303.5Z;
            M377,274Q341,298,360,367.5Q379,437,328,455.5Q277,474,234,439.5Q191,405,131,406.5Q71,408,55.5,355Q40,302,57,254.5Q74,207,88.5,163Q103,119,161,143.5Q219,168,243.5,133.5Q268,99,322.5,82.5Q377,66,372.5,127Q368,188,390.5,219Q413,250,377,274Z;
            "
            >
            </animate>
          </path>
        </svg>
      </div>
    </div>
    
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/public/components/footer.php') ?>
    <script src="https://unpkg.com/@glidejs/glide"></script>
    <script>
      const glide = new Glide(".glide", {
        type: 'carousel',
        startAt: 1,
        perView: 5,
        focusAt: 'center',
        hoverpause: true,
        autoplay: 2000,
        keyboard: true,
        animationDuraton: 800,
        animationTimingFunc: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
        breakpoints: {
            1000: {
                perView: 3
            },
            600: {
                perView: 1
            }
        },
      });
      glide.mount();
    </script>
  </div>
  </body>
</html>
