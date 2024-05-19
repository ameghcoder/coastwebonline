<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/public/components/headLink.php') ?>
  <title>Pricing for Services - CoastWebOnline</title>
</head>

<body data-theme="light">
  <div class="relative">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php") ?>
    <main class="w-screen after:fixed before:fixed">
      <div id="home" class="w-screen h-auto px-4 py-6 flex flex-col gap-2 justify-center relative">
        <div class="flex gap-2 justify-start px-2 md:px-4 lg:px-8 w-full max-w-7xl mx-auto">
          <div class="flex flex-col">
            <h1>
              <strong class="text-4xl md:text-7xl txt-stroke-white">All Services</strong>
              <br>
              <strong class="text-4xl md:text-7xl">Pricing</strong>
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
      <div class="bg-q_background_clr/50 backdrop-blur-lg z-30">
        <div>
          <div id="branding" class="w-full h-auto flex justify-center items-center p-4 ">
            <div class="rounded-md w-full max-w-7xl mx-auto">
              <div class="my-4">
                <div class="flex gap-4 justify-center">
                  <strong class="text-heading text-center tracking-wider"><span class="txt-stroke-white">Pricing For</span><br><span class="text-q_primary_clr uppercase font-extrabold">Logo Designing</span></strong>
                </div>
              </div>
              <div class="overflow-x-auto w-full">
                <div class="flex justify-center gap-4 min-w-[1050px]">
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Basic</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Starter Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>9,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">4,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Basic Logo Design</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">2 rounds of revisions</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Standard formats (JPEG, PNG)</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">1 initial concept</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Digital delivery with 6 business days</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">5 High Quality Mockups</span>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Most Popular</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Popular Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>19,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">9,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Custom Logo Design</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">3 rounds of revisions</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Vector formats (AI, EPS)</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">2 initial concepts</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Digital delivery within 4 days</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">10 High Quality Mockups</span>
                              </li>
                              
                            </ul>
                          </div>
                      </div>
                    </div>
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Professional</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Professional Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>49,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">24,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Premium logo design with unlimited revisions</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Unlimited revisions untill satisfaction</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Vector and source files in all formats</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Multiple initial concepts for variety</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Digital delivery within 2 days</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">upto 25 High Quality Mockups</span>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div id="pricingChanger" class="w-full flex items-center justify-center relative bg-transparent p-4" style="z-index: 100000;">
                <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all star">Logo Designing</strong>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div id="development" class="w-full h-auto flex justify-center items-center p-4 ">
            <div class="rounded-md w-full max-w-7xl mx-auto">
              <div class="my-4">
                <div class="flex gap-4 justify-center">
                  <strong class="text-heading text-center tracking-wider"><span class="text-q_primary_clr uppercase font-extrabold">Web Development</span></strong>
                </div>
              </div>
              <div class="overflow-x-auto w-full">
                <div class="flex justify-center gap-4 min-w-[1050px]">
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Basic</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Starter Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>9,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 60%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">3,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Basic website design with simple layout</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Development of a simple website with 5 pages</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Standard features such as contact Form</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Responsive Design for All devices</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Basic SEO optimization</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">1 year Basic Hosting Free, After 1 year you have to pay <strong class="font-bold font-mono">₹ 999/year</strong></span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Updates & additional pages: Extra charges apply</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="cancel_icon color-icon"></span>
                                <span class="w-[calc(100%-24px)]">No CMS integration</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="cancel_icon color-icon"></span>
                                <span class="w-[calc(100%-24px)]">No Free Domain</span>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Most Popular</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Popular Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>99,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 60%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">39,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Advanced website design with Modern Layout</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Development of a fully customized website</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Additional features such as image gallery, blogs</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Responsive Design for All devices</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Integration with a CMS for easy content management</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Enhanced SEO optimization for better search visibility</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">1 year Business Hosting Free, After 1 year you have to pay <strong class="font-bold font-mono">₹ 2,999/year</strong></span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Free Domain for 1st year, After 1st year you have to pay <strong class="font-bold">depends on domain name <span class="font-mono font-bold">₹(6,99 to 4,999)</span></strong></span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Free setup for Google Search Console, Google Analytics</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Updates & additional pages: Extra charges apply</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="cancel_icon color-icon"></span>
                                <span class="w-[calc(100%-24px)]">No E-commerce website included, Not integrate with Shopify, Wix, Wordpress etc.</span>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                    <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                      <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Professional</h2>
                      <div class="flex flex-col items-center gap-2 p-2">
                          <h2 class="font-semibold">Professional Plan</h2>
                          <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                          <span>
                            <span>₹</span>
                            <del>1,99,999</del>
                            <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 25%</span>
                          </span>
                          <strong class="text-2xl sm:text-4xl md:text-5xl">
                            <span class="font-mono text-q_primary_clr">₹</span>
                            <span class="font-mono text-q_primary_clr">1,49,999</span>
                          </strong>
                          <hr>
                          <div>
                            <ul>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Premium website design with unique and dynamic elements</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Development of an advanced website with E-commerce functionality</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Advanced features such as user accounts, payment gateway</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Advaned responsive design with fluid layouts</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Advanced CMS integration with custom modules and plugins (Wix, Wordress etc. / Free), If you integrate Shopify (Shopify Extra charges may apply)</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Premium SEO optimization for better search and product visibility</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">1 year Cloud Hosting with dedicated resources and support Free, After 1 year you have to pay <br><strong class="font-bold font-mono">₹ 9,999/year</strong></span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Updates & additional pages: Extra charges apply</span>
                              </li>
                              <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                                <span class="check color-icon"></span>
                                <span class="w-[calc(100%-24px)]">Free setup for Google Search Console, Google Analytics</span>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div id="pricingChanger" class="w-full flex items-center justify-center relative bg-transparent p-4" style="z-index: 100000;">
                <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all star">Web Development</strong>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div id="graphicdesign" class="w-full h-auto flex justify-center items-center p-4 ">
            <div class="rounded-md w-full max-w-7xl mx-auto">
              <div class="my-4">
                <div class="flex gap-4 justify-center">
                  <strong class="text-heading text-center tracking-wider"><span class="text-q_primary_clr uppercase font-extrabold">Graphic Design</span></strong>
                </div>
              </div>
              <div class="overflow-x-auto w-full">
                <div class="flex justify-center gap-4 min-w-[1050px]">
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Basic</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Starter Plan</h2>
                        <p class="text-center para-txt-default">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>2,999</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 66%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">999</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">3 Custom Graphics (e.g., social media posts)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">2 rounds of revisions</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Standard formats (JPEG, PNG)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">1 initial concept</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Digital delivery within 3 business days</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Most Popular</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Popular Plan</h2>
                        <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>9,999</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">4,999</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">6 Custom Graphics (e.g. social media posts, banners, Mockups)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">3 rounds of revisions</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Vector formats (SVG, PNG, JPEG, Figma, PSD)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">2 initial concepts</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Digital delivery within 5 business days</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Professional</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Professional Plan</h2>
                        <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>19,999</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">9,999</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">12 Custom Graphics (e.g. Social Media Posts, Banners, Brochures</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Unlimited revisions</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">All formats (JPEG, PNG, SVG, Figma, PSD, PDF)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">3 initial concepts</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Digital delivery within 3 business days</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="pricingChanger" class="w-full flex items-center justify-center relative bg-transparent p-4" style="z-index: 100000;">
                <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all star">Graphic & Logo Design</strong>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div id="seo&sem" class="w-full h-auto flex justify-center items-center p-4 ">
            <div class="rounded-md w-full max-w-7xl mx-auto">
              <div class="my-4">
                <div class="flex gap-4 justify-center">
                  <strong class="text-heading text-center tracking-wider"><span class="text-q_primary_clr uppercase font-extrabold">SEO (Search Engine Optimization)</span></strong>
                </div>
              </div>
              <div class="overflow-x-auto w-full">
                <div class="flex justify-center gap-4 min-w-[1050px]">
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Basic</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Starter Plan</h2>
                        <p class="text-center para-txt-default">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>19,999</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">9,999/mon</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Basic keyword research (up to 10 keywords)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Basic on-page optimization (titles, meta, tags)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Basic content optimization for homepage and 2 others</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Basic link building (directory submissions)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Basic local SEO setup (Google My Business)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Monthly performance report</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Most Popular</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Popular Plan</h2>
                        <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>39,999</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 50%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">19,999/mon</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Comprehensive keyword research (up to 30 keywords)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Full on-page optimization (titles, meta tags, alt tags, internal linking)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Content creation (2 blog posts/month)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Link building (guest posts, niche directories)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Full local SEO optimization (local citations, reviews management)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Detailed monthly performance report</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                  <div class="price-container min-w-80 z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
                    <h2 class="font-semibold text-xl w-full bg-q_primary_clr text-black p-4 text-center backdrop-blur-sm my-0">Professional</h2>
                    <div class="flex flex-col items-center gap-2 p-2">
                        <h2 class="font-semibold">Professional Plan</h2>
                        <p class="text-center para-txt-default text-base font-light">Unlock Your Website's Potential: Elevate with Enhanced Plans!</p>
                        <span>
                          <span>₹</span>
                          <del>50,000</del>
                          <span class="bg-q_secondary_1_clr/20 px-4 p-2 rounded-full backdrop-blur-sm">Save 40%</span>
                        </span>
                        <strong class="text-2xl sm:text-4xl md:text-5xl">
                          <span class="font-mono text-q_primary_clr">₹</span>
                          <span class="font-mono text-q_primary_clr">29,999/mon</span>
                        </strong>
                        <hr>
                        <div>
                          <ul>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Advanced keywords research (unlimited keywords)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Advanced on-page optimization (including schema markup, technical SEO fixes)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Comprehensive content strategy (4 blog posts/month, content updates)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Advaned links building (high-quality backlinks)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Advaned local SEO (local content creation, local backlinks)</span>
                            </li>
                            <li class="list-none flex gap-2 border-b border-q_br_clr py-2 text-sm tracking-wide items-center">
                              <span class="check color-icon"></span>
                              <span class="w-[calc(100%-24px)]">Advanced reporting and analysis with actionable insights</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="pricingChanger" class="w-full flex items-center justify-center relative bg-transparent p-4" style="z-index: 100000;">
                <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all star">SEO & SEM</strong>
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
  </div>
  
  </body>
</html>
