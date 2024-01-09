<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./src/output.css" />
  <title>Build Your Own Website - Free by Professionals</title>
</head>

<body class="bg-white dark:bg-gray-800">
  <div class="flex flex-col w-full h-screen justify-between">
    <!-- Header -->
    <header class="shadow-md p-4 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100">
      <div class="container flex justify-between h-16 mx-auto md:justify-center md:space-x-8">
        <ul class="items-stretch hidden space-x-3 md:flex">
          <li class="flex">
            <a rel="noopener noreferrer" href="./#about"
              class="flex items-center px-4 -mb-1 border-b-2 border-transparent">About</a>
          </li>
          <li class="flex">
            <a rel="noopener noreferrer" href="./#contact"
              class="flex items-center px-4 -mb-1 border-b-2 border-transparent">Contact</a>
          </li>
        </ul>
        <a rel="noopener noreferrer" href="./" aria-label="Back to homepage" class="flex items-center p-2">
          <img class="w-16 rounded-md" src="./CW_Minimalist.png" alt="logo" />
        </a>
        <ul class="items-stretch hidden space-x-3 md:flex">
          <li class="flex">
            <a rel="noopener noreferrer" href="./#pricing"
              class="flex items-center px-4 -mb-1 border-b-2 border-transparent">Pricing</a>
          </li>
          <li class="flex">
            <a rel="noopener noreferrer" href="./#servicing"
              class="flex items-center px-4 -mb-1 border-b-2 border-transparent">Service</a>
          </li>
        </ul>
        <button title="Button" type="button" class="p-4 md:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 h-6 text-neutrael-400 dark:text-gray-100">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="toggle-menu flex items-center justify-center my-5">
        <label for="Toggle1" class="inline-flex items-center space-x-4 cursor-pointer dark:text-gray-100">
          <span>Light</span>
          <span class="relative">
            <input id="Toggle1" type="checkbox" class="hidden peer" />
            <div
              class="w-10 h-6 rounded-full shadow-inner bg-gray-600 dark:bg-gray-400 peer-checked:dark:bg-violet-400">
            </div>
            <div
              class="absolute inset-y-0 left-0 w-4 h-4 m-1 rounded-full bg-gray-400 shadow peer-checked:right-0 peer-checked:left-auto dark:bg-gray-800">
            </div>
          </span>
          <span>Dark</span>
        </label>
      </div>
    </header>
    <!--  First -->
    <section class="mt-2 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100">
      <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
        <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
          <h1 class="text-5xl font-bold leadi sm:text-6xl">
            Own Website
            <span class="text-rose-400">Own Business</span>
          </h1>
          <p class="mt-6 mb-8 text-lg sm:mb-12">
            Create amazing website by us for all types of business and get
            <br class="hidden md:inline lg:hidden" /><span class="text-rose-400">free life time support</span>
          </p>
          <div
            class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
            <a rel="noopener noreferrer" href="#"
              class="px-8 py-3 text-lg font-semibold rounded bg-rose-400 text-gray-900">Contact us</a>
            <a rel="noopener noreferrer" href="#"
              class="px-8 py-3 text-lg font-semibold border rounded border-gray-100">See Pricing</a>
          </div>
        </div>
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
          <img src="./01.png" alt="hero image" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128" />
        </div>
      </div>
    </section>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <!-- Second -->
    <section class="m-4 md:m-8 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100" id="servicing">
      <div class="container mx-auto p-4 my-6 space-y-2 text-center">
        <h2 class="text-5xl font-bold">Services</h2>
      </div>
      <div class="container mx-auto grid justify-center gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            Website <br />
            Development
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              Custom design, responsive development, e-commerce, Wordpress,
              security, performance, scalability, analytics
            </p>
          </div>
        </div>
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            App <br />
            Development
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              Unique design, responsive development, e-commerce functionality,
              SEO, robust security, high performance, scalability options,
              reliable support, integrated analytics.
            </p>
          </div>
        </div>
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            Graphics <br />
            Design
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              Custom graphics, AI Generated Design, branding, illustrations,
              UI/UX, print media, social media assets, vector art
            </p>
          </div>
        </div>
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            Digital <br />
            Marketing
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              SEO, SEM, social media campaigns, content marketing, email
              campaigns, analytics tracking, lead generation, conversion
              optimization.
            </p>
          </div>
        </div>
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            Youtube <br />
            Assets
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              Custom thumbnails, channel art, intro/outro animations, logo
              animation, video overlays, lower thirds, end screens, social
              media promo graphics
            </p>
          </div>
        </div>
        <div class="flex flex-col items-center p-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 text-rose-400">
            <path fill-rule="evenodd"
              d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
              clip-rule="evenodd"></path>
          </svg>
          <h3 class="my-3 text-center text-3xl font-semibold">
            Business Setup<br />
            on Google
          </h3>
          <div class="space-y-1 leadi text-center">
            <p>
              Optimize your business on Google with GMB setup, local SEO,
              Google Ads, and analytics integration for success.
            </p>
          </div>
        </div>
      </div>
    </section>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <!-- Third  (Chat Section) -->
    <div
      class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto my-5 rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100"
      id="contact">
      <div class="flex flex-col justify-between">
        <div class="space-y-2">
          <h2 class="text-4xl font-bold leadi lg:text-5xl">Let's talk!</h2>
          <div class="text-gray-400">Vivamus in nisl metus? Phasellus.</div>
        </div>
        <img src="./doodle.svg" alt="" class="p-6 h-52 md:h-64" />
      </div>
      <form novalidate="" class="space-y-6">
        <div>
          <label for="name" class="text-sm">Full name</label>
          <input id="name" type="text" placeholder="" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-600" />
        </div>
        <div>
          <label for="email" class="text-sm">Email</label>
          <input id="email" type="email" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-600" />
        </div>
        <div>
          <label for="message" class="text-sm">Message</label>
          <textarea id="message" rows="3" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-600"></textarea>
        </div>
        <button type="submit" class="w-full p-3 text-sm font-bold tracki uppercase rounded bg-rose-400 text-gray-900">
          Send Message
        </button>
      </form>
    </div>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <!-- Fourth -->
    <section class="py-6 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100" id="about">
      <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
        <h1 class="text-4xl font-bold leadi text-center sm:text-5xl">
          Our team
        </h1>
        <p class="max-w-2xl text-center text-gray-400">
          "Our team is a skilled and collaborative force, dedicated to
          transforming ideas into successful outcomes. We pride ourselves on
          creativity, technical expertise, and a shared commitment to client
          satisfaction."
        </p>
        <div class="flex flex-row flex-wrap-reverse justify-center">
          <div class="flex flex-col justify-center m-8 text-center">
            <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500"
              src="./yash.jpg" />
            <p class="text-xl font-semibold leadi">Yashraj</p>
            <p class="text-gray-400">
              Project Manager <br />
              & Full Stack Developer
            </p>
          </div>
          <div class="flex flex-col justify-center m-8 text-center">
            <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500"
              src="./bharat.jpg" />
            <p class="text-xl font-semibold leadi">Bharat Sharma</p>
            <p class="text-gray-400">
              Backend Developer <br />
              & Customer Support
            </p>
          </div>
          <div class="flex flex-col justify-center m-8 text-center">
            <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500"
              src="./sagar.png" />
            <p class="text-xl font-semibold leadi">Sagar Mehra</p>
            <p class="text-gray-400">Frontend Developer</p>
          </div>
        </div>
      </div>
    </section>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <section class="py-20 bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100" id="pricing">
      <div class="container px-4 mx-auto">
        <div class="max-w-2xl mx-auto mb-16 text-center">
          <span class="font-bold tracki uppercase text-rose-400">Pricing</span>
          <h2 class="text-4xl font-bold lg:text-5xl">
            Choose your best plan
          </h2>
        </div>
        <div class="flex flex-wrap items-stretch -mx-4">
          <div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
            <div
              class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 dark:bg-gray-800 bg-slate-100 shadow-lg">
              <div class="space-y-2">
                <h4 class="text text-2xl font-bold">Basic</h4>
                <span class="text-6xl font-bold">₹ 3,999</span>
              </div>
              <p class="mt-3 leadi text-gray-400">Single page website.</p>
              <ul class="flex-1 mb-6 text-gray-400">
                <li class="flex mb-2 space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Modern Design Website</span>
                </li>
                <li class="flex mb-2 space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>With Google Search Console & Analytics Setup</span>
                </li>
                <li class="flex mb-2 space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Free Logo & Graphics (upto 4)</span>
                </li>
                <li class="flex mb-2 space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Contact form</span>
                </li>
                <li class="flex mb-2 space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Social Media Links</span>
                </li>
              </ul>
              <button type="button"
                class="inline-block px-5 py-3 font-semibold tracki text-center rounded bg-rose-400 text-gray-900">
                Get Started
              </button>
            </div>
          </div>
          <div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
            <div class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-rose-400 text-gray-900">
              <div class="space-y-2">
                <h4 class="text-2xl font-bold">Advance</h4>
                <span class="text-6xl font-bold">₹ 9,999 </span>
              </div>
              <p class="leadi">Fully functional multipage website</p>
              <ul class="flex-1 space-y-2">
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Including basic plan features</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>3 month free support (Under terms)</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Website pages upto-10</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Dynamic website</span>
                </li>
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>With 1 year hosting</span>
                </li>
              </ul>
              <a rel="noopener noreferrer" href="#"
                class="inline-block w-full px-5 py-3 font-bold tracki text-center rounded bg-white dark:bg-gray-800 text-rose-400">Get
                Started</a>
            </div>
          </div>
          <div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
            <div
              class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 dark:bg-gray-800 bg-slate-100 shadow-lg">
              <div class="space-y-2">
                <h4 class="text-2xl font-bold">Professional</h4>
                <span class="text-4xl font-bold">Contact us </span>
              </div>
              <p class="leadi text-gray-400">
                If you want any type of "Professional" website, you can
                contact us
              </p>
              <ul class="space-y-2 text-gray-400">
                <li class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Including advance features</span>
                </li>
                <li class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>6 months free support (Under terms) </span>
                </li>
                <li class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>1 year hosting</span>
                </li>
                <li class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Unlimited Dynamic Pages</span>
                </li>
                <li class="flex items-start space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="flex-shrink-0 w-6 h-6 text-rose-400">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span>Admin Panel</span>
                </li>
              </ul>
              <a rel="noopener noreferrer" href="#"
                class="inline-block w-full px-5 py-3 font-semibold tracki text-center rounded bg-rose-400 text-gray-900">Get
                Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <!-- Fifth -->
    <section class="bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100">
      <div class="container px-6 py-12 mx-auto">
        <div class="grid items-center gap-4 xl:grid-cols-5">
          <div class="max-w-2xl mx-auto my-8 space-y-4 text-center xl:col-span-2 xl:text-left">
            <h2 class="text-4xl font-bold">Feedback from you</h2>
            <p class="text-gray-400">
              "Thrilled with our website? Share your thoughts! Click here to
              send your feedback and let CoastWebOnline know how their
              expertise transformed your online presence. Your insights
              matter!"
            </p>
            <button type="button" class="px-8 py-3 font-semibold rounded-full !dark:bg-pink-500">
              Rounded
            </button>
          </div>

          <div class="p-6 xl:col-span-3">
            <div class="grid gap-4 md:grid-cols-2">
              <div class="grid content-center gap-4">
                <div class="p-6 rounded shadow-md dark:bg-gray-800 bg-slate-100 shadow-lg">
                  <p>
                    Our decision to work with CoastWebOnline for our jewelry
                    website has truly paid off. Their understanding of the
                    aesthetics and intricacies of the jewelry industry is
                    evident in the stunning website they created for us. From
                    captivating visuals to seamless navigation, CoastWebOnline
                    has given our jewelry brand an online presence that
                    sparkles as much as our products do.
                  </p>
                  <div class="flex items-center mt-4 space-x-4">
                    <img src="./review1.png" alt="" class="w-12 h-12 bg-center bg-cover rounded-full bg-gray-500" />
                    <div>
                      <p class="text-lg font-semibold">Akhil Rao</p>
                    </div>
                  </div>
                </div>
                <div class="p-6 rounded shadow-md dark:bg-gray-800 bg-slate-100 shadow-lg">
                  <p>
                    CoastWebOnline transformed my personal portfolio into a
                    professional showcase. Their attention to detail and
                    creative flair brought my vision to life, creating a
                    website that not only reflects my skills and achievements
                    but also stands out in the competitive job market. The
                    collaboration was smooth, and the result is a personal
                    portfolio that I'm proud to share.
                  </p>
                  <div class="flex items-center mt-4 space-x-4">
                    <img src="./review2.png" alt="" class="w-12 h-12 bg-center bg-cover rounded-full bg-gray-500" />
                    <div>
                      <p class="text-lg font-semibold">Yatin Setia</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid content-center gap-4">
                <div class="p-6 rounded shadow-md dark:bg-gray-800 bg-slate-100 shadow-lg">
                  <p>
                    Choosing CoastWebOnline for our school website was a wise
                    decision. Their team demonstrated a deep understanding of
                    educational needs, resulting in a website that seamlessly
                    integrates information, engagement, and ease of use. The
                    professionalism exhibited during the process ensured our
                    school's online presence reflects our commitment to
                    academic excellence.
                  </p>
                  <div class="flex items-center mt-4 space-x-4">
                    <img src="./review3.png" alt="" class="w-12 h-12 bg-center bg-cover rounded-full bg-gray-500" />
                    <div>
                      <p class="text-lg font-semibold">Harish Saini</p>
                    </div>
                  </div>
                </div>
                <div class="p-6 rounded shadow-md dark:bg-gray-800 bg-slate-100 shadow-lg">
                  <p>
                    "Grateful for Diamond Web's incredible work on my website!
                    I'm from India but working here in New York, their
                    expertise and attention to detail truly made a difference.
                    Thank you for bringing a touch of artistry and
                    professionalism to my online presence!"
                  </p>
                  <div class="flex items-center mt-4 space-x-4">
                    <img src="./review4.png" alt="" class="w-12 h-12 bg-center bg-cover rounded-full bg-gray-500" />
                    <div>
                      <p class="text-lg font-semibold">Pawan sethi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="w-1/2 m-auto border-t border-gray-700" />
    <!-- Sixth -->
    <section class="bg-white dark:bg-gray-800 text-neutrael-400 dark:text-gray-100">
      <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
        <p class="p-2 text-sm font-medium tracki text-center uppercase">
          How it works
        </p>
        <h2 class="mb-12 text-4xl font-bold leadi text-center sm:text-5xl">
          Frequently Asked Questions
        </h2>
        <div class="flex flex-col divide-y sm:px-8 lg:px-12 xl:px-32 divide-gray-700">
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">
              Optio maiores eligendi molestiae totam dolores similique?
            </summary>
            <div class="px-4 pb-4">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
                neque in fugiat magni, quas animi enim veritatis deleniti ex.
                Impedit.
              </p>
            </div>
          </details>
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">
              Modi dolorem veritatis culpa quos consequuntur beatae itaque
              excepturi perspiciatis?
            </summary>
            <div class="px-4 pb-4">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est
                aspernatur quae, eos explicabo odit minima libero veniam
                similique quibusdam doloribus facilis ipsa accusantium vel
                maiores corrupti! Libero voluptate a doloribus?
              </p>
            </div>
          </details>
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">
              Magni reprehenderit possimus debitis?
            </summary>
            <div class="px-4 pb-4 space-y-2">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                voluptates aspernatur dolores in consequatur doloremque
                inventore reprehenderit, consequuntur perspiciatis architecto.
              </p>
              <p>
                Sed consectetur quod tenetur! Voluptatibus culpa incidunt
                veritatis velit quasi cupiditate unde eaque! Iure,
                voluptatibus autem eaque unde possimus quae.
              </p>
            </div>
          </details>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="border-t border-gray-700 px-4 py-8 bg-white dark:bg-gray-800 text-gray-400">
      <div
        class="container flex flex-wrap items-center justify-center mx-auto space-y-4 sm:justify-between sm:space-y-0">
        <div class="flex flex-row pr-3 space-x-4 sm:space-x-8">
          <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full bg-rose-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
              class="w-5 h-5 rounded-full text-gray-900">
              <path
                d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z">
              </path>
            </svg>
          </div>
          <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
            <li>
              <a rel="noopener noreferrer" href="./termsandconditions.php">Terms of Use</a>
            </li>
            <li>
              <a rel="noopener noreferrer" href="#">Privacy</a>
            </li>
          </ul>
        </div>
        <ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
          <li>
            <a rel="noopener noreferrer" href="#">Instagram</a>
          </li>
          <li>
            <a rel="noopener noreferrer" href="#">Facebook</a>
          </li>
          <li>
            <a rel="noopener noreferrer" href="#">Twitter</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <script src="./src/main_v01.js"></script>
</body>

</html>