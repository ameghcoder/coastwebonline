<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./public/src/output.css" />
  <!-- favicon -->
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./public/assets/apple-touch-icon.png"
  />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./public/assets/favicon-32x32.png"
  />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./public/assets/favicon-16x16.png"
  />
  <link rel="manifest" href="/site.webmanifest" />
  <link
    rel="mask-icon"
    href="./public/assets/safari-pinned-tab.svg"
    color="#01b9ef"
  />
  <meta name="apple-mobile-web-app-title" content="Coast Web Online" />
  <meta name="application-name" content="Coast Web Online" />
  <meta name="msapplication-TileColor" content="#01b9ef" />
  <meta name="theme-color" content="#01b9ef" />
  <title>Build Your Own Website - Made by Professionals</title>
</head>

<body data-theme="light">
  <div class="relative">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/public/components/header.php") ?>
    <main class="w-screen">
      <div id="home" class="w-screen h-screen p-4 flex flex-col gap-2 justify-center relative">
        <div class="flex gap-2 justify-start px-2 md:px-4 lg:px-8 w-full max-w-7xl mx-auto">
          <div class="flex flex-col">
            <strong class="text-4xl md:text-7xl">Simple Solutions</strong>
            <strong class="text-4xl md:text-7xl">Powerful Results</strong>
            <h2 class="font-semibold text-2xl md:text-4xl para-txt-default">Make Your Brand Online</h2>
            <a href="#contactForm" class="w-full max-w-40 relative bg-q_primary_clr rounded-s-full rounded-e-full hover:rounded-e-none transition-all px-4 py-2 group shadow-lg" type="button">
              <span class="z-10 text-xl font-semibold tracking-wider text-q_background_clr">
                Say Hello !
              </span>
              <span class="absolute -z-10 top-0 right-0 flex invisible group-hover:-right-12 group-hover:visible w-11 h-11 bg-q_primary_clr rounded-e-full items-center justify-center transition-all animate-pulse" style="padding: 6px 0;">
                <span class="small-icon right-arrow"></span>
              </span>
            </a>
          </div>
          <div class="flex flex-col justify-center items-center gap-2 absolute bottom-20 left-0">
            <h1 class="font-bold text-6xl text-center flex flex-col items-center justify-center gap-2">
              <strong class="relative overflow-hidden h-20 -mt-2 noScrollbar">
                <span id="text-slider-upDown" class="flex flex-col gap-4 items-start transition-all">
                  <span class="p-4 grad-text-prop txt-stroke-white tracking-widest uppercase">Design</span>
                  <span class="p-4 grad-text-prop txt-stroke-white tracking-widest uppercase">Develop</span>
                  <span class="p-4 grad-text-prop txt-stroke-white tracking-widest uppercase">Deliver</span>
                </span>
              </strong>
            </h1>
          </div>
        </div>
      </div>
      <div class="bg-q_background_clr backdrop-blur-sm">
        <div id="about" class="w-full h-auto flex justify-center items-center px-4 py-8 relative">
          <div class="w-full max-w-7xl mx-auto">
            <div>
                <strong class="text-heading-small">Our Team</strong>
                <div class="flex gap-2 justify-between flex-col md:flex-row">
                  <strong class="text-heading text-left tracking-wider">Expert <span class="text-q_primary_clr">Team</span><br>Pro <span class="text-q_primary_clr">Results</span></strong>
                  <p class="w-full max-w-xl py-1 md:px-4 para-txt-default">Our skilled team always gives their best, so you can count on top-notch results. Trust us to get the job done right, every time.</p>
                </div>
                <div class="infinity-slider-container w-full px-10 py-4 overflow-hidden whitespace-nowrap">
                  <div class="inline-block h-52 logo-slide inf_slider">
                    <div class="relative mx-4 inline-block w-52 h-52 group">
                      <div class="absolute w-52 h-52 shadow-md transition-all">
                        <img src="./public/assets/Backend_Developer.jpg" class="w-full h-full object-cover transition-all" alt="teams member image">
                        <span class="absolute -bottom-1 -left-1 w-full z-20">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Backend Developer</span>
                        </span>
                        <span class="absolute -bottom-1 -right-1 w-full -z-10 text-right group-hover:-bottom-6 transition-all">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Bharat Sharama</span>
                        </span>
                      </div>
                    </div>
                    <div class="relative mx-4 inline-block w-52 h-52 group">
                      <div class="absolute w-52 h-52 shadow-md transition-all">
                        <img src="./public/assets/Frontend_Developer.jpg" class="w-full h-full object-cover transition-all" alt="teams member image">
                        <span class="absolute -bottom-1 -left-1 w-full z-20">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Frontend Developer</span>
                        </span>
                        <span class="absolute -bottom-1 -right-1 w-full -z-10 text-right group-hover:-bottom-6 transition-all">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Ankit Yadav</span>
                        </span>
                      </div>
                    </div>
                    <div class="relative mx-4 inline-block w-52 h-52 group">
                      <div class="absolute w-52 h-52 shadow-md transition-all">
                        <span class="absolute z-50 w-8 h-8 rounded-md flex items-center justify-center top-2 right-2 hover:scale-110">
                          <a href="https://www.linkedin.com/in/yrjdeveloper/"><span class="small-icon linkedIn"></span></a>
                        </span>
                        <img src="./public/assets/FullStack_Developer.jpg" class="w-full h-full object-cover transition-all" alt="teams member image">
                        <span class="absolute -bottom-1 -left-1 w-full z-20">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">FullStack Developer</span>
                        </span>
                        <span class="absolute -bottom-1 -right-1 w-full -z-10 text-right group-hover:-bottom-6 transition-all">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Yashraj (FO & CEO)</span>
                        </span>
                      </div>
                    </div>     
                    <div class="relative mx-4 inline-block w-52 h-52 group">
                      <div class="absolute w-52 h-52 shadow-md transition-all">
                        <img src="./public/assets/SEO_Expert.jpg" class="w-full h-full object-cover transition-all" alt="teams member image">
                        <span class="absolute -bottom-1 -left-1 w-full z-20">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">SEO, SMM Expert</span>
                        </span>
                        <span class="absolute -bottom-1 -right-1 w-full -z-10 text-right group-hover:-bottom-6 transition-all">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Shubham Sharma</span>
                        </span>
                      </div>
                    </div>
                    <div class="relative mx-4 inline-block w-52 h-52 group">
                      <div class="absolute w-52 h-52 shadow-md transition-all">
                        <img src="./public/assets/Social_Media_Expert.jpg" class="w-full h-full object-cover transition-all" alt="teams member image">
                        <span class="absolute -bottom-1 -left-1 w-full z-20">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">SMM Expert</span>
                        </span>
                        <span class="absolute -bottom-1 -right-1 w-full -z-10 text-right group-hover:-bottom-6 transition-all">
                            <span class="w-full bg-q_br_clr p-1 text-q_tx_clr font-light text-xs uppercase tracking-widest">Sagar Mehra</span>
                        </span>
                      </div>
                    </div>                  
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div id="service" class="w-full h-auto flex justify-center items-center p-4 ">
          <div class="w-full max-w-7xl mx-auto">
            <strong class="text-heading-small">Our Services</strong>
            <div class="flex gap-4 justify-between flex-col md:flex-row">
              <strong class="text-heading text-left tracking-wider">What <span class="text-q_primary_clr">Services</span><br>We're Offering</strong>
              <p class="w-full max-w-xl py-1 md:px-4 para-txt-default">we offer services that can help business improve their visibility and business reputation online, expand market reach, and increase turnover through effective digital strategies. Following are the services we provide</p>
            </div>
            <div class="p-2 mt-6 flex flex-col gap-2">
              <div data-id='1' class="openOnHover border-b-2 border-q_br_clr group text-left group">
                <div class="px-2 py-4 cursor-pointer flex justify-between text-heading">
                  <strong class="text-q_tx_clr/75">Branding</strong>
                  <span class="icon plusIcon !brightness-75 group-hover:rotate-45 transition-all"></span>
                </div>
                <div class="oohContainer overflow-hidden transition-all h-0 group-hover:bg-q_surface_clr" data-id='1'>
                  <p class="p-2 md:p-4 para-txt-default">
                  Elevate your brand with us. From concept to creation, we will create a unique identity that resonates. Let's create your story together.
                  </p>
                </div>
              </div>
              <div data-id='2' class="openOnHover border-b-2 border-q_br_clr group text-left">
                <div class="flex px-2 py-4 cursor-pointer justify-between text-heading">
                  <strong class="text-q_tx_clr/75">Web Development & Designing</strong>
                  <span class="icon plusIcon !brightness-75 group-hover:rotate-45 transition-all"></span>
                </div>
                <div class="oohContainer overflow-hidden transition-all h-0 group-hover:bg-q_surface_clr" data-id='2'>
                  <p class="p-2 md:p-4 para-txt-default">
                  Unlock the potential of your online presence with our expert web development and design services. From sleek interfaces to seamless functionality, we'll create a digital experience that will set you apart.
                  </p>
                </div>
              </div>
              <div class="border-b-2 border-q_br_clr group text-left">
                <div data-id='4' class="openOnHover flex px-2 py-4 cursor-pointer justify-between text-heading">
                  <strong class="text-q_tx_clr/75">Graphic Design</strong>
                  <span class="icon plusIcon !brightness-75 group-hover:rotate-45 transition-all"></span>
                </div>
                <div class="oohContainer overflow-hidden transition-all h-0 group-hover:bg-q_surface_clr" data-id='4'>
                  <p class="p-2 md:p-4 para-txt-default">
                  Elevate your brand with our expert graphic design service. From logos to branding, we create visual identities that effortlessly capture and communicate your essence. Let's tell your story through design.
                  </p>
                </div>
              </div>
              <div class="border-b-2 border-q_br_clr group text-left">
                <div data-id='5' class="openOnHover flex px-2 py-4 cursor-pointer justify-between text-heading">
                  <strong class="text-q_tx_clr/75">SEO</strong>
                  <span class="icon plusIcon !brightness-75 group-hover:rotate-45 transition-all"></span>
                </div>
                <div class="oohContainer overflow-hidden transition-all h-0 group-hover:bg-q_surface_clr" data-id='5'>
                  <p class="p-2 md:p-4 para-txt-default">
                  Increase your online visibility with our SEO service. We optimize your website to rank higher on search engines, drive organic traffic and increase your online presence. Let's work together to take your business to the top of search results.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div id="pricing" class="w-full h-auto flex justify-center items-center p-4 ">
          <div class="rounded-md w-full max-w-7xl mx-auto">
            <div>
              <strong class="text-heading-small">Our Pricing</strong>
              <div class="flex gap-4 justify-between flex-col md:flex-row">
                <strong class="text-heading text-left tracking-wider">Our <span class="text-q_primary_clr">Pricing</span><br>Depends on Services</strong>
                <p class="w-full max-w-xl py-1 md:px-4 para-txt-default">we offer services that can help business improve their visibility and business reputation online, expand market reach, and increase turnover through effective digital strategies. Following are the services we provide</p>
              </div>
            </div>
            <div id="development" class="w-full h-auto flex justify-center items-center p-4 ">
            <div class="rounded-md w-full max-w-7xl mx-auto">
              <div class="my-4">
                <div class="flex gap-4 justify-center">
                  <strong class="text-heading text-center tracking-wider"><span class="text-q_primary_clr uppercase font-extrabold">Web Development</span></strong>
                </div>
              </div>
              <div class="overflow-hidden bg-q_background_clr border border-q_br_clr shadow-inner rounded-md w-full">
                <div id="pricingPreview" class="z-50 relative px-4 py-8 glide1">
                  <div class="w-full h-auto min-h-40 glide__track" data-glide-el="track">
                    <div class="glide__slides flex gap-x-4 justify-center items-start">
                        <div class="glide__slide price-container z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
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
                        <div class="glide__slide price-container z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
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
                        <div class="glide__slide price-container z-50 w-80 inline-flex flex-col rounded-lg bg-q_surface_clr/50 backdrop-blur-lg shadow-md relative overflow-hidden">
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
                </div>
                <div id="pricingChanger" class="w-full flex items-center justify-center relative bg-q_background_clr/50 backdrop-blur-lg p-4 gap-4" style="z-index: 100000;">
                  <a href="./#pricingPreview">
                    <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient bg-transparent star">Web Development</strong>
                  </a>
                  <a href="./pricing#branding">
                    <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all">Branding</strong>
                  </a>
                  <a href="./pricing#graphicdesign">
                    <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all">Graphic Design</strong>
                  </a>
                  <a href="./pricing#seo&sem">
                    <strong class="list-none py-2 rounded-full text-sm font-semibold tracking-wider px-4 bg-q_surface_clr border-gradient hover:bg-transparent hover:text-black cursor-pointer transition-all">Seo</strong>
                  </a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div id="testimonials" class="w-full h-auto flex justify-center items-center p-4">
          <div class="rounded-md p-4 w-full max-w-7xl mx-auto relative">
            <div>
              <strong class="text-heading-small">Testimonials</strong>
              <div class="flex gap-4 justify-between flex-col md:flex-row">
                <strong class="text-heading text-left tracking-wider"><span class="txt-stroke-white">Real</span> <span class="text-q_primary_clr">Voices</span>,<br><span class="txt-stroke-white text-q_tx_clr">Real</span> <span class="text-q_primary_clr">Stories</span>,<br><span class="txt-stroke-white">Real</span> <span class="text-q_primary_clr">Impact</span></strong>
                <p class="w-full max-w-xl p-0 md:p-4 para-txt-default">Discover what others are saying about us! Listen to Our Community's Success Stories.</p>
              </div>
            </div>
            <div class="absolute top-0 right-0 -z-50">
              <img class="w-56 h-auto opacity-20" src="./public/assets/quote.svg" alt="quote image">
            </div>
            <div class="glide">
              <div class="border-b border-q_br_clr p-2 flex py-8 relative overflow-hidden glide__track" data-glide-el="track">
                <div class="w-full glide__slides flex">
                  <div class="glide__slide w-auto inline-flex flex-col items-center justify-center">
                    <div class="flex gap-2">
                      <div>
                        <img class="w-14 h-14 rounded-full object-cover" src="./public/assets/review1.webp" alt="">
                      </div>
                      <div class="flex justify-between flex-col">
                        <strong class="text-xl">Akhil Rao</strong>
                        <p class="my-0 text-sm para-txt-default">E-commerce Website</p>
                      </div>
                    </div>
                    <div class="w-full max-w-lg text-q_tx_clr/75">
                      <p class="text-center para-txt-default">Our decision to work with CoastWebOnline for our jewelry website has truly paid off. Their understanding of the aesthetics and intricacies of the jewelry industry is evident in the stunning website they created for us. From captivating visuals to seamless navigation, CoastWebOnline has given our jewelry brand an online presence that sparkles as much as our products do.</p>
                    </div>
                  </div>
                  <div class="glide__slide w-auto inline-flex flex-col items-center justify-center">
                    <div class="flex gap-2">
                      <div>
                        <img class="w-14 h-14 rounded-full object-cover" src="./public/assets/review2.webp" alt="">
                      </div>
                      <div class="flex justify-between flex-col">
                        <strong class="text-xl">Yatin Setia</strong>
                        <p class="my-0 text-sm para-txt-default">Portfolio Website</p>
                      </div>
                    </div>
                    <div class="w-full max-w-lg text-q_tx_clr/75">
                      <p class="text-center para-txt-default">CoastWebOnline transformed my personal portfolio into a professional showcase. Their attention to detail and creative flair brought my vision to life, creating a website that not only reflects my skills and achievements but also stands out in the competitive job market. The collaboration was smooth, and the result is a personal portfolio that I'm proud to share.</p>
                    </div>
                  </div>
                  <div class="glide__slide w-auto inline-flex flex-col items-center justify-center">
                    <div class="flex gap-2">
                      <div>
                        <img class="w-14 h-14 rounded-full object-cover" src="./public/assets/review3.webp" alt="">
                      </div>
                      <div class="flex justify-between flex-col">
                        <strong class="text-xl">Harish Saini</strong>
                        <p class="my-0 text-sm para-txt-default">Educational Website</p>
                      </div>
                    </div>
                    <div class="w-full max-w-lg text-q_tx_clr/75">
                      <p class="text-center para-txt-default">Choosing CoastWebOnline for our school website was a wise decision. Their team demonstrated a deep understanding of educational needs, resulting in a website that seamlessly integrates information, engagement, and ease of use. The professionalism exhibited during the process ensured our school's online presence reflects our commitment to academic excellence.</p>
                    </div>
                  </div>
                  <div class="glide__slide w-auto inline-flex flex-col items-center justify-center">
                    <div class="flex gap-2">
                      <div>
                        <img class="w-14 h-14 rounded-full object-cover" src="./public/assets/review4.webp" alt="">
                      </div>
                      <div class="flex justify-between flex-col">
                        <strong class="text-xl">Pawan Sethi</strong>
                        <p class="my-0 text-sm para-txt-default">E-commerce Redesign</p>
                      </div>
                    </div>
                    <div class="w-full max-w-lg text-q_tx_clr/75">
                      <p class="text-center para-txt-default">Grateful for Diamond Web's incredible work on my website! I'm from India but working here in New York, their expertise and attention to detail truly made a difference. Thank you for bringing a touch of artistry and professionalism to my online presence!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="contactForm" class="bg-art w-full h-auto flex justify-center items-center overflow-hidden">
          <div class="p-8 w-full max-w-7xl mx-auto relative z-50 bg-q_background_clr/50 backdrop-blur-lg">
            <strong class="w-full flex flex-col items-center text-center text-xl sm:text-2xl md:text-4xl font-normal tracking-wide">Contact Form <br> Say Hello to Us!</strong>
            <div>
              <form action="#">
                <div>
                  <div class="input-group">
                    <label for="cust_name">Your Name<sup>*</sup></label>
                    <input type="text" name="cust_name" id="cust_name" placeholder="John William">
                  </div>
                  <div class="input-group">
                    <label for="cust_email">Email<sup>*</sup></label>
                    <input type="email" name="cust_email" id="cust_email" placeholder="john_will@gmail.com">
                  </div>
                </div>
                <div>
                  <div class="input-group">
                    <label for="cust_phone">Tel<sup>*</sup></label>
                    <div class="flex gap-2">
                      <select class="w-full max-w-48" name="countryCode" id="cust_country">
                        <option value="">Select Your Country</option>
                        <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                        <option data-countryCode="AD" value="376">Andorra (+376)</option>
                        <option data-countryCode="AO" value="244">Angola (+244)</option>
                        <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                        <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option data-countryCode="AR" value="54">Argentina (+54)</option>
                        <option data-countryCode="AM" value="374">Armenia (+374)</option>
                        <option data-countryCode="AW" value="297">Aruba (+297)</option>
                        <option data-countryCode="AU" value="61">Australia (+61)</option>
                        <option data-countryCode="AT" value="43">Austria (+43)</option>
                        <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                        <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                        <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                        <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                        <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                        <option data-countryCode="BY" value="375">Belarus (+375)</option>
                        <option data-countryCode="BE" value="32">Belgium (+32)</option>
                        <option data-countryCode="BZ" value="501">Belize (+501)</option>
                        <option data-countryCode="BJ" value="229">Benin (+229)</option>
                        <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                        <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                        <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                        <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option data-countryCode="BW" value="267">Botswana (+267)</option>
                        <option data-countryCode="BR" value="55">Brazil (+55)</option>
                        <option data-countryCode="BN" value="673">Brunei (+673)</option>
                        <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                        <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                        <option data-countryCode="BI" value="257">Burundi (+257)</option>
                        <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                        <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                        <option data-countryCode="CA" value="1">Canada (+1)</option>
                        <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                        <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                        <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                        <option data-countryCode="CL" value="56">Chile (+56)</option>
                        <option data-countryCode="CN" value="86">China (+86)</option>
                        <option data-countryCode="CO" value="57">Colombia (+57)</option>
                        <option data-countryCode="KM" value="269">Comoros (+269)</option>
                        <option data-countryCode="CG" value="242">Congo (+242)</option>
                        <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                        <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                        <option data-countryCode="HR" value="385">Croatia (+385)</option>
                        <option data-countryCode="CU" value="53">Cuba (+53)</option>
                        <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                        <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                        <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                        <option data-countryCode="DK" value="45">Denmark (+45)</option>
                        <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                        <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                        <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                        <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                        <option data-countryCode="EG" value="20">Egypt (+20)</option>
                        <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                        <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                        <option data-countryCode="EE" value="372">Estonia (+372)</option>
                        <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                        <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                        <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                        <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                        <option data-countryCode="FI" value="358">Finland (+358)</option>
                        <option data-countryCode="FR" value="33">France (+33)</option>
                        <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                        <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                        <option data-countryCode="GA" value="241">Gabon (+241)</option>
                        <option data-countryCode="GM" value="220">Gambia (+220)</option>
                        <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                        <option data-countryCode="DE" value="49">Germany (+49)</option>
                        <option data-countryCode="GH" value="233">Ghana (+233)</option>
                        <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                        <option data-countryCode="GR" value="30">Greece (+30)</option>
                        <option data-countryCode="GL" value="299">Greenland (+299)</option>
                        <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                        <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                        <option data-countryCode="GU" value="671">Guam (+671)</option>
                        <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                        <option data-countryCode="GN" value="224">Guinea (+224)</option>
                        <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                        <option data-countryCode="GY" value="592">Guyana (+592)</option>
                        <option data-countryCode="HT" value="509">Haiti (+509)</option>
                        <option data-countryCode="HN" value="504">Honduras (+504)</option>
                        <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                        <option data-countryCode="HU" value="36">Hungary (+36)</option>
                        <option data-countryCode="IS" value="354">Iceland (+354)</option>
                        <option data-countryCode="IN" value="91">India (+91)</option>
                        <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                        <option data-countryCode="IR" value="98">Iran (+98)</option>
                        <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                        <option data-countryCode="IE" value="353">Ireland (+353)</option>
                        <option data-countryCode="IL" value="972">Israel (+972)</option>
                        <option data-countryCode="IT" value="39">Italy (+39)</option>
                        <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                        <option data-countryCode="JP" value="81">Japan (+81)</option>
                        <option data-countryCode="JO" value="962">Jordan (+962)</option>
                        <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                        <option data-countryCode="KE" value="254">Kenya (+254)</option>
                        <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                        <option data-countryCode="KP" value="850">Korea North (+850)</option>
                        <option data-countryCode="KR" value="82">Korea South (+82)</option>
                        <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                        <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                        <option data-countryCode="LA" value="856">Laos (+856)</option>
                        <option data-countryCode="LV" value="371">Latvia (+371)</option>
                        <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                        <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                        <option data-countryCode="LR" value="231">Liberia (+231)</option>
                        <option data-countryCode="LY" value="218">Libya (+218)</option>
                        <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                        <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                        <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                        <option data-countryCode="MO" value="853">Macao (+853)</option>
                        <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                        <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                        <option data-countryCode="MW" value="265">Malawi (+265)</option>
                        <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                        <option data-countryCode="MV" value="960">Maldives (+960)</option>
                        <option data-countryCode="ML" value="223">Mali (+223)</option>
                        <option data-countryCode="MT" value="356">Malta (+356)</option>
                        <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                        <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                        <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                        <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                        <option data-countryCode="MX" value="52">Mexico (+52)</option>
                        <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                        <option data-countryCode="MD" value="373">Moldova (+373)</option>
                        <option data-countryCode="MC" value="377">Monaco (+377)</option>
                        <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                        <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                        <option data-countryCode="MA" value="212">Morocco (+212)</option>
                        <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                        <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                        <option data-countryCode="NA" value="264">Namibia (+264)</option>
                        <option data-countryCode="NR" value="674">Nauru (+674)</option>
                        <option data-countryCode="NP" value="977">Nepal (+977)</option>
                        <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                        <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                        <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                        <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                        <option data-countryCode="NE" value="227">Niger (+227)</option>
                        <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                        <option data-countryCode="NU" value="683">Niue (+683)</option>
                        <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                        <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                        <option data-countryCode="NO" value="47">Norway (+47)</option>
                        <option data-countryCode="OM" value="968">Oman (+968)</option>
                        <option data-countryCode="PW" value="680">Palau (+680)</option>
                        <option data-countryCode="PA" value="507">Panama (+507)</option>
                        <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                        <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                        <option data-countryCode="PE" value="51">Peru (+51)</option>
                        <option data-countryCode="PH" value="63">Philippines (+63)</option>
                        <option data-countryCode="PL" value="48">Poland (+48)</option>
                        <option data-countryCode="PT" value="351">Portugal (+351)</option>
                        <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                        <option data-countryCode="QA" value="974">Qatar (+974)</option>
                        <option data-countryCode="RE" value="262">Reunion (+262)</option>
                        <option data-countryCode="RO" value="40">Romania (+40)</option>
                        <option data-countryCode="RU" value="7">Russia (+7)</option>
                        <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                        <option data-countryCode="SM" value="378">San Marino (+378)</option>
                        <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                        <option data-countryCode="SN" value="221">Senegal (+221)</option>
                        <option data-countryCode="CS" value="381">Serbia (+381)</option>
                        <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                        <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                        <option data-countryCode="SG" value="65">Singapore (+65)</option>
                        <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                        <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                        <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                        <option data-countryCode="SO" value="252">Somalia (+252)</option>
                        <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                        <option data-countryCode="ES" value="34">Spain (+34)</option>
                        <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                        <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                        <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                        <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                        <option data-countryCode="SD" value="249">Sudan (+249)</option>
                        <option data-countryCode="SR" value="597">Suriname (+597)</option>
                        <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                        <option data-countryCode="SE" value="46">Sweden (+46)</option>
                        <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                        <option data-countryCode="SI" value="963">Syria (+963)</option>
                        <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                        <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                        <option data-countryCode="TH" value="66">Thailand (+66)</option>
                        <option data-countryCode="TG" value="228">Togo (+228)</option>
                        <option data-countryCode="TO" value="676">Tonga (+676)</option>
                        <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                        <option data-countryCode="TR" value="90">Turkey (+90)</option>
                        <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                        <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                        <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                        <option data-countryCode="UG" value="256">Uganda (+256)</option>
                        <option data-countryCode="GB" value="44">UK (+44)</option>
                        <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                        <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                        <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                        <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                        <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                        <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                        <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                        <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                        <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                        <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                        <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                        <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                        <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                      </select>
                      <input class="w-full" type="text" name="cust_phone" id="cust_phone" placeholder="124-222-8596">
                    </div>
                  </div>
                  <div class="input-group">
                    <label for="cust_services">Select Service<sup>*</sup></label>
                    <select name="cust_services" id="cust_services">
                      <option value="branding">Branding</option>
                      <option value="development">Development</option>
                      <option value="uiuxdesign">UI/UX Design</option>
                      <option value="graphicdesign">UI/UX Design</option>
                      <option value="seo">SEO</option>
                    </select>
                  </div>
                </div>
                <div>
                  <div class="input-group">
                    <label for="cust_msg">Your Message for Us<sup>*</sup></label>
                    <textarea rows="5" class="w-full" name="cust_msg" id="cust_msg" placeholder="I want ..."></textarea>
                  </div>
                  <button type="button" class="w-full px-2 py-4 border border-q_br_clr rounded-md bg-q_primary_clr hover:scale-95 transition-all text-black/50 font-bold text-xl">Say Hello</button>
                </div>
              </form>
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
    <script src="./public/src/style_v1.js"></script>
    <script>
      const glide = new Glide(".glide", {
        type: 'carousel',
        autoplay: 2000,
        hoverpause: true,
        startAt: 0,
        perView: 1
      });
      const glide1 = new Glide(".glide1", {
        type: 'carousel',
        startAt: 1,
        focusAt: 1,
        perView: 3,
        breakpoints: {
          1100: {
            perView: 1,
            focusAt: 0
          }
        },
        peek:{
          before: 20,
          after: 40
        }
      });
      glide.mount();
      glide1.mount();
    </script>
  </div>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TY4T56KN0G"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TY4T56KN0G');
  </script>
  </body>
</html>