<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="/wp-content/themes/baseAppLabo_v4/tailwind.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Chikau Kume</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-2 ">
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-2xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-100"
            href="#"
            >Chikau Kume</a
          >
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
        </div>
      </div>
    </nav>
    <main class="bg-gray-200">
      <div
        class="relative pt-16 pb-20 flex content-center items-center justify-center topImg_lg">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover bg-black opacity-90"
          style='background-image: url("/wp-content/themes/baseAppLabo_v4/img/laptop.jpg");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-60 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-in">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-7/12 px-4 mt-8 ml-auto mr-auto text-center">
                <h1 class="text-gray-100 font-semibold sm:text-3xl md:text-4xl lg:text-5xl text-3xl">
                        <span class="text-gray-100">Get the App you want</span> 
                    </span>    
                </h1>
                <p class="mt-4 sm:text-xl md:text-xl lg:text-2xl text-gray-100">
                    Serving great web systems.
                </p>
            </div>
          </div>
        </div>
      </div>
      <section class="relative py-3 md:pt-20 md:pb-10 lg:pt-20 pt-16">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap md:justify-center lg:justify-start">
            <div class="w-full md:w-4/12 mx-6 flex justify-center lg:justify-end" data-aos="fade-right">
              <img
                alt="..."
                class="object-cover h-64 lg:h-72 max-w-full rounded-lg shadow-lg"
                src="/wp-content/themes/baseAppLabo_v4/img/self.jpg"
              />
            </div>
            <div class="w-full md:w-6/12 mt-8 md:mt-0 lg:mt-0 px-6 flex justify-center text-center" data-aos="fade-left">
              <div class="md:pr-12">
              <h2 class="text-2xl md:text-3xl lg:text-3xl font-semibold">Who am I ?</h2>
                <p class="mt-3 text-sm md:text-lg lg:text-lg leading-relaxed text-gray-600 text-left">
                    Hi, I'm <span class="font-bold">Chikau Kume</span>. I work as a IT related project manager for 2 years in the Philipine. I ususally communicate with Philipino programmers and proceed the project together. I'm interested in creating web applications with modern skills especailly backend such as Laravel. 
                </p>
                <!-- <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-800 bg-gray-200 mr-3"
                          >
                          <i class="fas fa-laptop-code"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                            Great Price
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-800 bg-gray-200 mr-3"
                          >
                          <i class="fas fa-laptop-code"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                            Great Price
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-800 bg-gray-200 mr-3"
                          >
                          <i class="fas fa-laptop-code"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                            Great Price
                        </h4>
                      </div>
                    </div>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pt-10 pb-5 lg:pb-20 md:pb-5">
        <div class="container mx-auto px-4" data-aos="fadein">
          <div class="flex flex-wrap justify-center text-center mb-6" >
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-3xl md:text-4xl lg:text-4xl font-semibold">Skills</h2>
            </div>
          </div>
          <div class="w-9/12 flex flex-wrap mx-auto justify-center">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6 ">
                <img
                  src="/wp-content/themes/baseAppLabo_v4/img/frontend.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px; height: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-base font-bold">HTML & CSS & JS</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Advanced Intermediate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  src="/wp-content/themes/baseAppLabo_v4/img/laravel.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Laravel</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Advanced Intermediate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/vue.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Vue.js</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Intermediate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/wp.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">WordPress</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Beginner
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/bootstrap.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Bootstrap</h5>
                  <p class="text-sm text-gray-500 uppercase font-semibold">
                    Intermediate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/tailwind.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Tailwind CSS</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Beginner
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/docker.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Docker</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Intermediate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4 mt-5">
              <div class="px-6">
                <img
                  alt="..."
                  src="/wp-content/themes/baseAppLabo_v4/img/aws.jpeg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">AWS</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Beginner
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="lg:pb-10 md:py-5">
        <div class="container mx-auto px-4" data-aos="fadein">
          <div class="flex flex-col mx-0 justify-center text-center mb-6" >
            <div class="w-full px-4">
              <h2 class="text-3xl md:text-4xl lg:text-4xl font-semibold">Working History</h2>
            </div>
            <div class="lg:w-8/12 md:w-full flex flex-col mx-auto md:justify-center lg:justify-start justify-center px-5 lg:px-0 md:pl-10 px-10">

              <div class="flex lg:flex-row flex-col text-sm xs:text-xs lg:text-lg md:text-base mt-10">
                <p class="mr-4">2020/08 〜 | Kredo IT Abroad.inc :</p>
                <p>Working as a IT related Project Director.</p>
              </div>
              <div class="flex lg:flex-row flex-col text-sm xs:text-xs lg:text-lg md:text-base mt-6">
                <p class="mr-4">2019/10 〜 20/07 | Emphtech.inc:</p>
                <p class="text-left md:text-center lg:text-center">Working as a Bridge engineeer between Japan and Philipine.</p>
              </div>
              <div class="flex lg:flex-row flex-col text-sm xs:text-xs lg:text-lg md:text-base mt-6">
                <p class="mr-4">2019/01 〜 05 | C tag.inc :</p>
                <p>Working as a Laravel engineer.</p>
              </div>
              <div class="flex lg:flex-row flex-col text-sm xs:text-xs lg:text-lg md:text-base mt-6">
                <p class="mr-4">2018/05 〜 07 | Mitsucari.inc </p>
                <p>Studying Ruby on Rails as an internship</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="relative py-3 md:pt-0 lg:pt-5 pb-20">
        <div class="container px-8 md:mx-auto lg:mx-auto px-4">
          <div class="items-center flex flex-wrap justify-center">
            <div class="w-full px-4 text-center my-8">
              <h2 class="text-3xl md:text-4xl lg:text-4xl font-semibold">Product</h2>
            </div>
            <div class="w-full md:w-4/12 mx-6 flex justify-center lg:justify-end" data-aos="fade-right">
              <a href="https://feedback-portal.herokuapp.com/"  target="_blank" rel="noopener noreferrer">
                <img
                  alt="..."
                  class="object-cover max-w-full rounded-lg shadow-lg"
                  src="/wp-content/themes/baseAppLabo_v4/img/feedback.png"
                />
                <p class="mt-2 text-xs md:text-xs lg:text-base font-semibold">Click the image and access the application.</p>
              </a>
            </div>
            <div class="w-full md:w-6/12 mt-8 md:mt-0 lg:mt-0 px-0 flex justify-center text-center" data-aos="fade-left">
              <div>
                <h2 class="md:text-2xl lg:text-3xl font-semibold">Feedback Application</h2>
                  <div class="mt-3 text-sm md:text-base lg:text-lg leading-relaxed text-gray-600 md:text-left lg:text-center text-left">
                    <p>
                      Developed a feedback system that is easy to track lesson.
                    </p>
                    <ul class="mt-2">
                        <li>- Reduced the time it takes to create feedback</li>
                        <li>- Improved the ease of managing feedback</li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gray-900 pt-8 pb-3">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
      >
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 mb-8 md:mb-8 lg:mb-0 px-0">
            <h4 class="text-2xl text-white font-semibold md:text-3xl lg:text-3xl mb-4">Contact me in social media.</h4>
            <div class="mt-3 md:mt-6 lg:mt-6 flex justify-center sm:justify-start md:justify-start lg:justify-start">
                <button
                    onclick="location.href = 'https://www.facebook.com/kume.chikau.7'"
                    class="bg-white text-indigo-600 shadow-lg font-normal h-20 w-20 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                    type="button"
                >
                    <i class="flex text-4xl fab fa-facebook-square"></i>
                </button>
                <button
                    onclick="location.href = 'https://github.com/ChikauKume'"
                    class="bg-white text-gray-800 shadow-lg font-normal h-20 w-20 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                    type="button"
                >
                    <i class="flex text-4xl fab fa-github"></i>
                </button>
                <button
                    onclick="location.href = 'https://www.linkedin.com/in/chikau-kume-5851811b4/'"
                    class="bg-white text-blue-600 shadow-lg font-normal h-20 w-20 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                    type="button"
                >
                    <i class="flex text-4xl fab fa-linkedin"></i>
                </button>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
        </div>
      </div>
    </footer>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

  <script>
      AOS.init({
        delay: 200,
        duration: 1200,
        once: true
      });
 </script>
</html>
