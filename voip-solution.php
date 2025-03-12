<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voip Tech</title>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/out.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <style>
        html, body { font-family: 'DM Sans', sans-serif; }
        .stats-main{ clip-path: polygon(0 0, 100% 1%, 100% 53%, 0 67%); }
    </style>
</head>
<body>
    <header>
        <!-- Top Header -->
         <div class="py-2">
            <div class="flex justify-center md:justify-end items-center w-full px-3 xl:px-0  xl:w-6xl 2xl:w-7xl mx-auto gap-x-4">
                
                <!-- Lang Selector -->
                 <div class="flex gap-1 items-center ">
                    <span class="globe-icn"><img src="images/glob-icon.png" alt="" /></span> 
                    <select name="lang" id="lang" class=" px-2 py-1">
                        <option value="en">English </option>
                        <option value="fr">French</option>
                    </select>
                    <span class="flag flex"> <img src="images/flag-ind.png" alt="" class="max-w-[25px]" /> </span>
                 </div>
                 <a href="tel:+12312312" class="text-black">+099812334343</a>
            </div>
         </div>
        <!-- Main Header -->
         <div class="py-2 border-y">


            <!-- Navigation -->
            <nav class="">
                <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto">
                    <div class="relative flex h-16 items-center justify-between">
                        <!-- Mobile menu button -->
                        <div class="absolute inset-y-0 right-0 flex items-center md:hidden">
                            <button type="button" id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Hamburger icon -->
                                <svg class="block! md:hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Close icon -->
                                <svg class="hidden! h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Logo and desktop menu -->
                        <div class="flex flex-1 items-center gap-3 justify-center  md:justify-between">
                            <div class="flex flex-shrink-0 items-center">
                                <img class="w-[200px]" src="images/logo.png" alt="Voip Tech">
                            </div>
                            <div class="hidden md:ml-6 md:block">
                                <ul class="flex space-x-4">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Voip Services</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <a href="#" class="hidden md:block bg-[#e5462c] text-white py-2 px-6 rounded-md">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="md:hidden hidden absolute right-4 bg-white shadow-lg rounded-xl border border-b-gray-400 z-10" id="mobile-menu">
                    <ul class="space-y-2 px-2 pb-3 pt-2 text-lg">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Voip Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#" class=" bg-[#e5462c] text-white py-2 px-6 rounded-md">Enquire Now</a></li>
                    </ul>
                </div>
            </nav>





            <!-- <div class="flex justify-between items-center w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto">
                <div class="logo">
                    <img src="images/logo.png" alt="" class="max-w-[200px]" />
                </div>
                <nav>
                    <ul class="flex gap-x-4">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Voip Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
                <a href="#" class="bg-[#e5462c] text-white py-2 px-6 rounded-md">Enquire Now</a>
         </div> -->
    </header>
    <main>
        <!-- Banner Section -->
        <section class="bg-linear-65 from-[#e5462c] to-[#ff6c24] py-12 relative">
            <div class="flex flex-col md:flex-row gap-y-10 justify-between w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto relative z-9">
                <div class="w-full md:w-2/5 flex flex-col gap-y-3 items-start text-center md:text-left">
                    <h5 class="text-white text-3xl md:text-5xl w-full">Switch to Our</h5>
                    <h1 class="text-white text-6xl md:text-8xl w-full">Call Center Solutions</h1>
                    <p class="text-white text-xl font-semibold mb-4 w-full">Cloud-based VoIP solutions for the modern business that is seamless, scalable, and affordable </p>
                    <a href="#" class="bg-white text-[#e5462c] py-2 px-6 rounded-md text-3xl flex gap-2 items-center self-center md:self-start">Free Demo <span class="flex items-center"><img src="images/right-ang.png" alt="" class="w-[10px]"/></span></a>    
                </div>
                <!-- Contact Form-->
                <div class="w-96 mx-auto md:mx-0 md:w-2/5 bg-white p-6 rounded-3xl">
                    
                    <form action="" class="flex flex-col gap-y-3">
                        <input type="text" placeholder="Full Name" class="border border-gray-300 p-2 rounded-lg" />
                        <input type="tel" placeholder="WhatsApp Number/ Phone Number" class="border p-2 border-gray-300 rounded-lg" />
                        <input type="email" placeholder="Email Id" class="border border-gray-300 p-2 rounded-lg" />
                        <select class="border border-gray-300 p-2 rounded-lg text-gray-500">
                            <option value="0">Number of Users</option>
                            <option value="1">5</option>
                            <option value="2">10-20</option>
                            <option value="3">50+</option>
                        </select>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Describe your need" class="border border-gray-300 p-2 rounded-lg"></textarea>
                        <button type="submit" class="bg-[#ff6c24] text-white py-2 rounded-md cursor-pointer">Get a Free Demo</button>
                    </form>

                </div>

            </div>
            <div class="absolute bottom-0 left-0 w-full z-0">
                <img src="images/wave-bg.png" alt="" class="w-full" />
            </div>
        </section>
        <!-- Partner Logos  -->
         <section class="py-8">
            <div  class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto relative z-9">
                <h2 class="text-3xl text-center mb-8">The Most Reliable VoIP Solution for Leading Companies across the Globe</h2>
                <div class="flex flex-wrap gap-8 md:gap-x-8 justify-center items-center">
                    <img src="images/logos/nxtl.png" alt="" class="w-[120px]" />
                    <img src="images/logos/mobility.png" alt="" class="w-[200px]"/>
                    <img src="images/logos/sinch.png" alt="" class="w-[200px]"/>
                    <img src="images/logos/telnyx.png" alt="" class="w-[160px]"/>
                    <img src="images/logos/idt.png" alt="" class="w-[160px]" />
                </div>
            </div>
         </section>

         <!-- Services Section -->
        <section class="bg-[#fe6a25] py-8 relative">
            <div class="hidden lg:block absolute w-full top-[-180px] left-0 z-0">
                <img src="images/section-curve-top.jpg" alt="" class="w-full" />
            </div>
            <div class="w-[90%] p-6 xl:w-6xl 2xl:w-7xl mx-auto relative z-9 bg-[#19212e] rounded-xl grid grid-cols-1  lg:grid-cols-4 gap-4">
                <div class="border-b lg:border-b-0 lg:border-r border-white text-white p-3">
                    <h4 class="bg-[#f35a29] text-white rounded-xl p-3 w-full text-3xl font-semibold text-center mb-4">VoIP Minutes</h4>
                    <p class="text-center mb-4 lg:min-h-[80px]">VoIP minutes for clear global communication at an affordable cost.</p>
                    <ul>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Crystal-clear voice quality</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Competitive pricing</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Global coverage</li>
                    </ul>
                </div>
                <div class="border-b lg:border-b-0 lg:border-r border-white text-white p-3">
                    <h4 class="bg-[#f35a29] text-white rounded-xl p-3 w-full text-3xl font-semibold text-center mb-4">CC Traffic</h4>
                    <p class="text-center mb-4 lg:min-h-[80px]">Accurate and real-time Mobile Call Center CC Traffic Solutions</p>
                    <ul>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Optimized call routing</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> High call completion rates</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> 24/7 network reliability</li>
                    </ul>
                </div>
                <div class="border-b lg:border-b-0 lg:border-r border-white text-white p-3">
                    <h4 class="bg-[#f35a29] text-white rounded-xl p-3 w-full text-3xl font-semibold text-center mb-4">CLI/NCLI</h4>
                    <p class="text-center mb-4 lg:min-h-[80px]">Flexible CLI (Caller ID) and NON-CLI options for best communication requirements</p>
                    <ul>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Secure and authentic routes</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> High deliverability rates</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Relying upon destinations worldwide</li>
                    </ul>
                </div>
                <div class=" text-white p-3">
                    <h4 class="bg-[#f35a29] text-white rounded-xl p-3 w-full text-3xl font-semibold text-center mb-4">Wholesale VoIP</h4>
                    <p class="text-center mb-4 lg:min-h-[80px]">Scalable wholesale VoIP solutions for carriers & businesses worldwide.</p>
                    <ul>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Handling High-Volume Traffic</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Competitive termination rates from A-Z</li>
                        <li class="flex gap-2 mb-3 items-center"><span><img src="images/icons/green-tick.png"alt="" class="min-w-[25px] max-w-[25px]"/></span> Reliable interconnectivity</li>
                    </ul>
                </div>
                
                
                
            </div>

            <div class="w-full px-3 lg:px-0 xl:w-6xl 2xl:w-7xl mx-auto mt-16 relative z-9">
                <div class="flex flex-col lg:flex-row gap-10 lg:gap-x-50 items-center">
                    <div class="w-full lg:w-2/5">
                        <div class="relative">
                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                                <img src="images/icons/play-icn.png" alt="" class="play-vid  cursor-pointer w-28" onclick="openVideo('nzyZwh8v1-8')" />
                            </div>
                            <img src="images/vid-thumb1.png" alt="" class="w-full" />
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 text-white">
                        <h3 class="text-4xl md:text-6xl text-center md:text-left mb-10">Your Entire Team Works with VoIPTech</h3>
                        <div class="text-center md:text-left">
                            <img src="images/title-devider.png" alt="" class="w-full md:w-3/4" />
                        </div>
                        <p class="text-center mt-10 ">VoIPTech provides crystal-clear, tailored VoIP solutions for teams of any size. Our solutions improve communication, increase efficiency and cut down costs — be it call centers or enterprises. We offer connectivity you can rely on, global coverage and scalable options that will keep your team connected anywhere, anytime. Enjoy no-fail VoIP solutions that are tailored for business productivity and growth.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Sections -->
        <section class="py-8">
            <div  class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-semibold text-center mb-10">The Reliable VoIP Solution to Engage Customers</h2>
                <div class="flex flex-col-reverse  lg:flex-row items-center justify-between gap-10">
                    <div class="w-full lg:w-3/5">
                        <h3 class="font-semibold text-4xl">Budget Friendly</h3>
                        <div class="w-full lg:w-1/2 h-4 bg-[#fe6a25] rounded-full  rounded-br-[0] my-3"></div>
                        <ul>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Custom Plans are Affordable Always for even Startup</li>
                            <li class="flex gap-3 mb-4 items-center  text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> No hidden fees, competitive VoIP rates </li>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Scalable solutions to fit your ever-growing needs</li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-2/5">
                        <img src="images/solution-img1.jpg" alt="" class="w-full" />
                    </div>
                </div>

                <div class="flex flex-col-reverse  lg:flex-row-reverse items-center justify-between gap-10 mt-10 mb-10">
                    <div class="w-full lg:w-3/5">
                        <h3 class="font-semibold text-4xl">24/7 Support</h3>
                        <div class="w-full lg:w-1/2 h-4 bg-[#fe6a25] rounded-full  rounded-br-[0] my-3"></div>
                        <ul>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span>24/7 Technical Support for Continuous Service</li>
                            <li class="flex gap-3 mb-4 items-center  text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> A response team of professionals who resolve problems rapidly </li>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Preventing downtime through proactive monitoring</li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-2/5">
                        <img src="images/solution-img2.jpg" alt="" class="w-full" />
                    </div>
                </div>

                <div class="flex flex-col-reverse  lg:flex-row items-center justify-between gap-10">
                    <div class="w-full lg:w-3/5">
                        <h3 class="font-semibold text-4xl">Insights & Analytics</h3>
                        <div class="w-full lg:w-1/2 h-4 bg-[#fe6a25] rounded-full  rounded-br-[0] my-3"></div>
                        <ul>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Call tracking and reporting in real-time</li>
                            <li class="flex gap-3 mb-4 items-center  text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Insights based on data to improve performance </li>
                            <li class="flex gap-3 mb-4 items-center text-3xl"><span><img src="images/icons/black-tick.png"alt="" class="min-w-[25px] max-w-[25px]" /></span> Interactive dashboards to improve the decision-making process</li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-2/5">
                        <img src="images/solution-img3.jpg" alt="" class="w-full" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section -->
         <section  class="bg-linear-65 from-[#e5462c] to-[#ff6c24] lg:bg-[url(../images/clipped-bg.jpg)] bg-no-repeat bg-top pt-6 pb-12 min-h-[500px]  relative text-white  mt-10 overflow-visible">
            <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-x-5 items-center relative">
                    <div class="w-full mb-4 lg:w-1/5">
                        <p class="text-xl">Provide superior VoIP based phone systems with unparalleled connectivity, reliability, and scalability, helping improve communication and business performance.</p>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="grid grid-cols-2 md:grid-cols-2 gap-5">
                            <div class="bg-white shadow-xl shadow-[#ef8a75] rounded-tl-xl rounded-4xl p-5">
                                <h4 class="text-4xl lg:text-7xl font-bold text-[#e84b2b] mb-2">1000+</h4>
                                <p class="text-xl text-black">Happy<br>Clients</p>
                            </div>
                            <div class="bg-white shadow-xl shadow-[#ef8a75] rounded-tl-xl rounded-4xl p-5">
                                <h4 class="text-4xl lg:text-7xl font-bold text-[#e84b2b] mb-2">300+</h4>
                                <p class="text-xl text-black">Career<br>Connections</p>
                            </div>
                            <div class="bg-white shadow-xl shadow-[#ef8a75] rounded-tl-xl rounded-4xl p-5">
                                <h4 class="text-4xl lg:text-7xl font-bold text-[#e84b2b] mb-2">90%</h4>
                                <p class="text-xl text-black">Directly<br>Connected</p>
                            </div>
                            <div class="bg-white shadow-xl shadow-[#ef8a75] rounded-tl-xl rounded-4xl p-5">
                                <h4 class="text-4xl lg:text-7xl font-bold text-[#e84b2b] mb-2">20K+</h4>
                                <p class="text-xl text-black">Leads<br>Generated/Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:absolute right-20 top-8 mt-4 lg:mt-0 ">
                        <img src="images/prof-man.png" alt="" class="w-96" />
                    </div>
                </div>
                <div class="mt-16 lg:mt-[180px] flex flex-col lg:flex-row items-center justify-between relative z-10">
                    <div class="w-full lg:w-2/5 relative">
                        <p class="text-3xl text-center lg:text-left lg:text-[49px] lg:leading-[50px] text-white lg:text-[#e5462c]">Revolutionizing Telecommunication with<br>Advanced VoIP Solutions</p>
                        <div class="hidden lg:block absolute bottom-12 -right-24">
                            <img src="images/dir-arrow.png" alt="" class="w-50" />
                        </div>
                    </div>
                    <div class="w-full mt-4 lg:mt-0 lg:w-2/5 relative">
                        <div class="relative">
                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                                <img src="images/icons/play-icn.png" alt="" class="play-vid cursor-pointer w-28" onclick="openVideo('ScJ0loAKZ2c')" />
                            </div>
                            <img src="images/vid-thumb2.png" alt="" class="w-full" />
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- Whu choose us -->
          <section class="py-12 relative">
            <div class="bg-[#fe6a25] w-full h-[300px] absolute top-0 z-0"></div>
            <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto relative z-9">
                <h2 class="text-center font-semibold text-white text-4xl lg:text-6xl">Why VoIPTech Solutions?</h2>
                <div class="mt-20 px-8 lg:px-0 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                    <div class="bg-white text-black rounded-[80px] shadow-xl py-10 px-3 text-center">
                        <h4 class="text-[#e5462c] font-semibold text-4xl mb-3 lg:min-h-[85px]">VoIP Expertise</h4>
                        <p class="font-semibold text-2xl">Multiple years of experience in providing quality, reliable, and cutting-edge VoIP solutions</p>
                    </div>
                    <div class="bg-white text-black rounded-[80px] shadow-xl py-10 px-3 text-center">
                        <h4 class="text-[#e5462c] font-semibold text-4xl mb-3 lg:min-h-[85px]">Seamless Integration</h4>
                        <p class="font-semibold text-2xl">Everything you need, easy integration with existing solutions, no hassle</p>
                    </div>
                    <div class="bg-white text-black rounded-[80px] shadow-xl py-10 px-3 text-center">
                        <h4 class="text-[#e5462c] font-semibold text-4xl mb-3 lg:min-h-[85px]">Global Connectivity</h4>
                        <p class="font-semibold text-2xl">Worldwide reach with crystal-clear voice quality</p>
                    </div>
                    <div class="bg-white text-black rounded-[80px] shadow-xl py-10 px-3 text-center">
                        <h4 class="text-[#e5462c] font-semibold text-4xl mb-3 lg:min-h-[85px]">Result-Driven Approach</h4>
                        <p class="font-semibold text-2xl">VoIP solutions that are optimized to improve performance, productivity, and growth</p>
                    </div>
                </div>
            </div>
          </section>
          <!-- Testimonials -->
           <section class="mt-10 mb-20">
                <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto relative z-9">
                    <h2 class="text-center text-[#e5462c] text-4xl lg:text-6xl font-semibold mb-6">Our Client’s Testimonial</h2>
                    <p class="text-center text-xl lg:text-3xl">Our business has changed so much since partnering with VoIPTech Solutions. Reliably high quality and value for money! </p>


                    <div class="owl-carousel owl-theme mt-10">
                        <!-- Testimonial 1 -->
                        <div class="item">
                            <div class="bg-white p-6 rounded-4xl border-3 border-[#f27113] mx-4">
                                <div class="flex items-center justify-baseline gap-2 mb-4">
                                    <!-- <img src="https://placehold.co/100x100" alt="Client" class="w-12 h-12 rounded-full"> -->
                                    <div class="flex items-center"><div class="w-[80px] h-[80px] rounded-full bg-[#e5462c]"></div></div> 
                                    
                                    <div class="w-full">
                                        <h4 class="font-bold text-lg">Michael R.</h4>
                                        <p class="text-gray-600">Call Center Manager</p>
                                        <div class="rating mt-2 w-[100px]"><img src="images/icons/5star.png" class="w-10" /></div>
                                    </div>
                                </div>
                                <p class="text-gray-600 ">Our business has changed so much since partnering with VoIPTech Solutions. Reliably high quality and value for money!</p>
                                
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="item">
                            <div class="bg-white p-6 rounded-4xl border-3 border-[#f27113] mx-4">
                                <div class="flex items-center justify-baseline gap-2 mb-4">
                                    <!-- <img src="https://placehold.co/100x100" alt="Client" class="w-12 h-12 rounded-full"> -->
                                    <div class="flex items-center"><div class="w-[80px] h-[80px] rounded-full bg-[#e5462c]"></div></div>
                                    <div class="w-full">
                                        <h4 class="font-bold text-lg">Sarah L.</h4>
                                        <p class="text-gray-600">IT Director</p>
                                        <div class="rating mt-2 w-[100px]"><img src="images/icons/5star.png" class="w-10" /></div>
                                    </div>
                                </div>
                                <p class="text-gray-600 ">Well done, outstanding support, 24×7.” Voice over Internet Protocol solutions assisted us in effectively expanding at a reduced cost</p>
                                
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="item">
                            <div class="bg-white p-6 rounded-4xl border-3 border-[#f27113] mx-4">
                                <div class="flex items-center justify-baseline gap-2 mb-4">
                                    <!-- <img src="https://placehold.co/100x100" alt="Client" class="w-12 h-12 rounded-full"> -->
                                    <div class="flex items-center"><div class="w-[80px] h-[80px] rounded-full bg-[#e5462c]"></div></div>
                                    <div class="w-full">
                                        <h4 class="font-bold text-lg">James K.</h4>
                                        <p class="text-gray-600">Operations Head</p>
                                        <div class="rating mt-2 w-[100px]"><img src="images/icons/5star.png" class="w-10" /></div>
                                    </div>
                                </div>
                                <p class="text-gray-600 ">The best VoIP provider we used so far! Solution to Excellent global connectivity and insightful analytics for growth</p>
                                
                            </div>
                        </div>
            
                        
            
                        <!-- Add more testimonials as needed -->
                    </div>


                </div>
           </section>
    </main>


    <footer class="bg-linear-65 from-[#e5462c] to-[#ff6c24] py-12 relative text-white overflow-hidden">
        <!-- CTA TEXT -->
        <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto text-xl lg:text-3xl text-center">
            <p>VoIPTech Solutions delivers reliable, scalable, and cost-effective VoIP services, empowering businesses with seamless communication and global connectivity.</p>
        
        </div>
        <!-- Get in Touch -->
         <div class="w-full p-10 lg:p-20 rounded-tr-[80px] rounded-bl-[80px] bg-white mt-10 relative z-9">
            <div class="w-full lg:w-4xl mx-auto bg-linear-65 from-[#e5462c] to-[#ff6c24] rounded-tl-[80px] rounded-br-[80px] p-10">
                <h3 class="text-3xl lg:text-5xl text-center text-white font-semibold mb-3">Get in Touch!</h3>
                <p class="text-white text-center text:lg lg:text-2xl">Subscribe us to get in touch and know about latest products </p>
                <div class="mt-4">
                    <form class="flex flex-col lg:flex-row gap-2 w-full">
                        <input type="email" placeholder="Enter your email" class="bg-white w-full py-4 rounded-2xl px-2 text-black placeholder:text-[#bababa] " />
                        <button type="submit" class="bg-white text-[#e5462c] py-4 px-10 rounded-2xl text-2xl cursor-pointer">Subscribe</button>
                    </form>
                </div>
            </div>
         </div>
         <!-- Footer Navigation -->
          <div class="footer-bottom relative w-full pt-16 pb-4">
            <div class="absolute top-[-60px] left-[-100px] w-full z-0">
                <img src="images/footer-effect2.png" alt="" class="w-[200px]" />
            </div>
            <div class="absolute bottom-0 right-0 w-full z-0 text-right">
                <img src="images/footer-effect2.png" alt="" class="w-[300px] absolute right-[-100px] bottom-[-150px]" />
            </div>
            <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto  grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-4 relative z-10">
                <div class="flex flex-col items-center lg:items-start gap-3">
                    <a href="#">
                        <img src="images/logo-white.png" alt="" class="w-[200px]" />
                    </a>
                    <p class="text-white mt-3 text-xl text-center lg:text-left">VoIPTech is a leading Voice and SMS service provider across the globe.  </p>
                    <div class="flex gap-2 mt-2">
                        <a href="https://www.facebook.com/VoIPTechSolutions" target="_blank"><img src="images/icons/fb.png" alt="" class="w-9"/></a>
                        <a href="https://www.instagram.com/voiptechsolutions" target="_blank"><img src="images/icons/insta.png" alt="" class="w-9"/></a>
                        <a href="https://www.linkedin.com/company/voiptechsolutions" target="_blank"><img src="images/icons/linkedin.png" alt="" class="w-9"/></a>
                        <a href="https://wa.me/7008220621" target="_blank"><img src="images/icons/whatsapp.png" alt="" class="w-9"/></a>
                    </div>
                </div>
                <div class="text-white text-center lg:text-left">
                    <h4 class="text-3xl">Company</h4>
                    <ul class="mt-6 flex flex-col gap-4">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <div class="text-white text-center lg:text-left">
                    <h4 class="text-3xl">Services</h4>
                    <ul class="mt-6 flex flex-col gap-4">
                        <li><a href="#">VoIP Minutes</a></li>
                        <li><a href="#">CC Traffic</a></li>
                        <li><a href="#">CLI/NCLI </a></li>
                    </ul>
                </div>
                <div class="text-white  text-center lg:text-left">
                    <h4 class="text-3xl">Contact Us</h4>
                    <ul class="mt-6 flex flex-col gap-4">
                        <li><a href="#">+01 XXXX XXXXXX</a></li>
                        <li><a href="#">info@voiptechsolutions.com</a></li>
                        <li><a href="#">530, DLF Cybercity, Patia, Bhubaneswar, Odisha</a></li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <div class="w-full px-3 xl:px-0 xl:w-6xl 2xl:w-7xl mx-auto relative z-10">
                <div class="mt-10 mb-4">
                    <img src="images/footer-hr.png" alt="" class="w-full" />
                </div>
                <p class="text-white text-center text-xl">Copyright 2025 © VoIPTech Solutions Pvt. Ltd. All Rights Reserved.</p>
            </div>
          </div>
    </footer>

    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            
            <form id="contactForm" action="" class="flex flex-col gap-y-3">
                <input type="text" placeholder="Full Name" class="border border-gray-300 p-2 rounded-lg" />
                <input type="tel" placeholder="WhatsApp Number/ Phone Number" class="border p-2 border-gray-300 rounded-lg" />
                        <input type="email" placeholder="Email Id" class="border border-gray-300 p-2 rounded-lg" />
                        <select class="border border-gray-300 p-2 rounded-lg text-gray-500">
                            <option value="0">Number of Users</option>
                            <option value="1">5</option>
                            <option value="2">10-20</option>
                            <option value="3">50+</option>
                        </select>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Describe your need" class="border border-gray-300 p-2 rounded-lg"></textarea>
                <button type="submit" class="bg-[#ff6c24] text-white py-2 rounded-md cursor-pointer">Get a Free Demo</button>
            </form>
        </div>
    </div>

    <!-- Vidoe Popup -->
    <div class="video-popup" id="videoPopup">
        <div class="popup-content">
            <span class="close-btn" onclick="closeVideo()">&times;</span>
            <div class="video-container">
                <iframe id="youtubeVideo" src="" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
    });
</script>
<!-- Mobile Menu -->
     <script>
        // Toggle mobile menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            // Toggle menu visibility
            mobileMenu.classList.toggle('hidden');
            
            // Toggle hamburger/close icon
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenuButton.querySelectorAll('svg').forEach(icon => icon.classList.toggle('hidden'));
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.querySelectorAll('svg').forEach(icon => {
                    icon.classList.add('hidden');
                    if (icon.querySelector('d').getAttribute('d') === 'M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5') {
                        icon.classList.remove('hidden');
                    }
                });
            }
        });

        // Close menu on resize if window is larger than mobile
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.querySelectorAll('svg').forEach(icon => {
                    icon.classList.add('hidden1');
                    if (icon.querySelector('d').getAttribute('d') === 'M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5') {
                        icon.classList.remove('hidden');
                    }
                });
            }
        });
    </script>
    <!--Popup -->
    <!--<script>
        // Show popup after 10 seconds
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('popup').style.display = 'block';
            }, 10000);
        };

        // Close popup functionality
        document.getElementById('closePopup').onclick = function() {
            document.getElementById('popup').style.display = 'none';
        };

        // Close when clicking outside the popup content
        window.onclick = function(event) {
            const popup = document.getElementById('popup');
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        };

        // Form submission handling
        document.getElementById('contactForm').onsubmit = function(e) {
            e.preventDefault();
            // Add your form submission logic here
            alert('Form submitted!');
            document.getElementById('popup').style.display = 'none';
        };
    </script>-->
    <script>
        // Show popup after 10 seconds
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('popup').style.display = 'block';
            }, 10000);
        };

        // Close popup functionality
        document.getElementById('closePopup').onclick = function() {
            document.getElementById('popup').style.display = 'none';
        };
        // Close when clicking outside the popup content
        window.onclick = function(event) {
            const popup = document.getElementById('popup');
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        };
        // Form submission handling
        document.getElementById('contactForm').onsubmit = function(e) {
            e.preventDefault();
            // Add your form submission logic here
            alert('Form submitted!');
            document.getElementById('popup').style.display = 'none';
        };
    </script>
    <!-- Vidoe Popup -->
    <script>
        function openVideo(videoId) {
            const popup = document.getElementById('videoPopup');
            const video = document.getElementById('youtubeVideo');
            
            // Set YouTube video ID (replace with your video ID)
            //const videoId = 'dQw4w9WgXcQ';
            video.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            
            popup.style.display = 'block';
        }

        function closeVideo() {
            const popup = document.getElementById('videoPopup');
            const video = document.getElementById('youtubeVideo');
            
            popup.style.display = 'none';
            video.src = ''; // Stop the video
        }

        // Close popup when clicking outside
        window.onclick = function(event) {
            const popup = document.getElementById('videoPopup');
            if (event.target === popup) {
                closeVideo();
            }
        };
    </script>

</body>
</html>