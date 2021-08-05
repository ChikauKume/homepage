<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/baseAppLabo/dist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Base App Labo</title>
</head>
<body class="font-Poppins">
    <header>
        <nav class="container flex items-center py-4 mt-5 sm:mt-12">
            <div class="py-1">
                <img src="/wp-content/themes/baseAppLabo/imgs/logo-bookmark.svg">
            </div>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-blue uppercase text-xs">
                <li class="cursor-pointer">Features</li>
                <li class="cursor-pointer">Pricing</li>
                <li class="cursor-pointer">Contact</li>
                <button type="button" class="bg-red text-white rounded-md px-7 py-3 uppercase">Login</button>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-2xl fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row item-center gap-12 mt-14 lg:mt-28">
            <div class="flex flex-1 flex-col item-center lg:items-start">
                <h2 class="text-blue text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">A Simple Bookmark Manager</h2>
                <p class="text-gray text-lg text-center lg:text-left mb-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                <!-- Content -->
                <div class="flex justify-center flex-wrap gap-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Get it Chrome</button>
                    <button type="button" class="btn btn-white hover:bg-purple hover:text-white">Get it Firefox</button>
                </div>
            </div>
                <!-- Image -->
            <div class="flex justify-center flex-1 mb-10 md:-16 lg:mb-0 z-10">
                <img src="/wp-content/themes/baseAppLabo/imgs/hero-bg.png" class="w-5/6 h-5/6 lg:w-full lg:h-full sm:w-3/4 sm:h-3/4 md:w-1/2 md:h-1/2">
            </div>
        </div>
        <div class="hidden md:block overflow-hidden bg-purple rounded-l-full absolute h-80 lg:w-1/2 lg:h-full top-32 right-0 md:w-1/2 md:h-2/5">

        </div>
    </section>

    <section class="bg-white py-20 mt-20 lg:mt-60">
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-blue">Features</h1>
            <p class="text-center text-gray mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            </p>
        </div>
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img src="/wp-content/themes/baseAppLabo/imgs/illustration-features-tab-1.png" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-blue">Bookmark in one click</h1>
                    <p class="text-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Get More Info</button>
                </div>
                <div class="hidden md:block overflow-hidden bg-purple rounded-r-full absolute h-80 lg:w-1/2 lg:h-full top-32 left-0 md:w-1/2 md:h-2/5">
                </div>
            </div>
        </div>
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img src="/wp-content/themes/baseAppLabo/imgs/illustration-features-tab-2.png" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-blue">Intelligent Search</h1>
                    <p class="text-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Get More Info</button>
                </div>
                <div class="hidden md:block overflow-hidden bg-purple rounded-l-full absolute h-80 lg:w-1/2 lg:h-full top-32 right-0 md:w-1/2 md:h-2/5">
                </div>
            </div>
        </div>
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img src="/wp-content/themes/baseAppLabo/imgs/illustration-features-tab-3.png" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-blue">Share your bookmarks</h1>
                    <p class="text-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Get More Info</button>
                </div>
                <div class="hidden md:block overflow-hidden bg-purple rounded-r-full absolute h-80 lg:w-1/2 lg:h-full top-32 left-0 md:w-1/2 md:h-2/5">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 mt-20">
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-blue">Download the extension</h1>
            <p class="text-center text-gray mt-4">
                We've got more browsers in pipeline. Please do let us know if you've got a favorite you'd like us to prioritize.
            </p>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
            <div class="flex flex-col rounded-md shadow-md">
                <div class="p-6 flex flex-col items-center">
                    <img src="/wp-content/themes/baseAppLabo/imgs/logo-chrome.svg">
                    <h3 class="mt-5 mb-2 text-blue text-lg">Add to Chrome</h3>
                    <p class="mb-2 text-grey font-light">ver.4.5</p>
                </div>
                <hr class="border-b border-white">
                <div class="flex p-6  mx-auto">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Add & Install Extenstion</button>
                </div>
            </div>
            <div class="flex flex-col rounded-md shadow-md">
                <div class="p-6 flex flex-col items-center">
                    <img src="/wp-content/themes/baseAppLabo/imgs/logo-firefox.svg">
                    <h3 class="mt-5 mb-2 text-blue text-lg">Add to firefox</h3>
                    <p class="mb-2 text-grey font-light">ver.4.5</p>
                </div>
                <hr class="border-b border-white">
                <div class="flex p-6 mx-auto">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Add & Install Extenstion</button>
                </div>
            </div>
            <div class="flex flex-col rounded-md shadow-md">
                <div class="p-6 flex flex-col items-center">
                    <img src="/wp-content/themes/baseAppLabo/imgs/logo-opera.svg">
                    <h3 class="mt-5 mb-2 text-blue text-lg">Add to Opera</h3>
                    <p class="mb-2 text-grey font-light">ver.4.5</p>
                </div>
                <hr class="border-b border-white">
                <div class="flex p-6 mx-auto">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-black">Add & Install Extenstion</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container">
            <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2 mb-4">
                <h1 class="text-3xl text-center text-blue">FAQ</h1>
                <p class="text-center text-grey mt-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                </p>
            </div>
            <div class="flex flex-col sm:w-3/4 lg:w-5/12 mx-auto">
                <div class="flex items-center border-b py-4">
                    <span class="flex-1">How can we apply?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="flex items-center border-b py-4">
                    <span class="flex-1">How can we apply?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="flex items-center border-b py-4">
                    <span class="flex-1">How can we apply?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <button type="button" class="mt-12 flex self-center btn btn-purple hover:bg-white hover:text-black">
                    More Info
                </button>
            </div>
        </div>
    </section>

    <section class="bg-purple text-white py-20">
        <div class="container">
            <div class="sm:w-3/4 lg:w-1/2 mx-auto">
                <p class="font-light uppercase text-center mb-8">
                    35,000+ ALREADY JOINED
                </p>
                <h1 class="text-2xl text-center">Stay up-to-date with what we're doing</h1>
                <div class="flex flex-col sm:flex-row gap-6 mt-8">
                    <input type="text" placeholder="Enter your email address" class="flex-1 px-2 py-3 rounded-md text-black">
                    <button type="button" class="btn btn-red hover:bg-white hover:text-black">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-blue py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap items-center justify-center md:justify-start gap-12">
                <img src="/wp-content/themes/baseAppLabo/imgs/logo-bookmark-white.png">
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer">Features</li>
                    <li class="cursor-pointer">Pricing</li>
                    <li class="cursor-pointer">Contact</li>
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0">
                <li><i class="text-white text-2xl fab fa-twitter"></i></li>
                <li><i class="text-white text-2xl fab fa-facebook-square"></i></li>
            </div>
        </div>
    </footer>
</body> 
</html>