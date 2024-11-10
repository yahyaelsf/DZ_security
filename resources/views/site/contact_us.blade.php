<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
        <!-- icons  -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

        <title>Contat us</title>
    </head>
      <style>
        .headerContact::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
    </style>

    <body>
          <header class="headerContact">
        <div class="container">

            <nav>
                <a href="#" class="logo"><img class="logo" src="{{ asset('frontend/images/logoS.png') }}" alt=""></a>
                <ul class="navlist">
                    <li><a href="{{ route('home') }}" target="_blank">Home</a></li>
                    <li><a href="{{ route('services') }}" target="_blank">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
                </ul>
                <div class="bx bx-menu" id="menu-icon"></div>
            </nav>
            <div class="hero">
                <h1 class="wow backInLeft">Contact Us</h1>
                <p>There's A Time And Place For Everything.</p>

                <a href="#contactUs">Contact Us</a>
            </div>
        </div>
    </header>


    <section id="services">

        <h2 class="title wow bounceIn">Find out how our security solutions and services are tailored to the need of each
            individual client.</h2>
        <div class="services services-contact">
            <div class="container">
                <h2 class="title wow bounceIn"><span>Contact Us</span> </h2>
                <div class="all row gap-5 justify-content-center ">
                    <div class="col-12 col-md-4 col-lg-3 wow bounceInLeft">
                        <a href="https://wa.me/+447427988808" style="color: black; text-decoration: none">
                        <div class="itemContact m-auto d-flex align-items-center justify-content-center flex-column">
                            <div>
                                <i class="fa-brands fa-whatsapp icon"></i>
                            </div>
                            <h3>Watsapp</h3>
                            <p class="text-center">
                                +44 7398 599160
                            </p>
                            <p class="text-center">
                                +44 7427 988808
                            </p>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 wow bounceInDown">
                        <a href="#" style="color: black; text-decoration: none">
                        <div class="itemContact m-auto d-flex align-items-center justify-content-center flex-column">
                            <i class="fa-solid fa-envelope icon"></i>
                            <h3>Email</h3>
                            <p class="text-center">
                                info@dzsecurityservices.co.uk
                            </p>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 wow bounceInRight">
                        <a href="https://wa.me/+447398599160" style="color: black; text-decoration: none">
                            <div class="itemContact m-auto d-flex align-items-center justify-content-center flex-column">
                            <i class="fa-solid fa-phone icon"></i>
                            <h3>Phone</h3>
                            <p class="text-center">
                                +44 7398 599160
                            </p>
                            <p class="text-center">
                                +44 7427 988808
                            </p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact_us" id="contactUs">
        <div class="container">
            <div class="row gap-5 justify-content-center">
                <div class="col-12 col-md-5 wow bounceInLeft">
                    <div class="image">
                        <img src="{{ asset('frontend/images/contact_us.png') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 wow bounceInRight">
                    <div class="form">
                        <div class="contact-title wow bounceIn">
                            GET IN TOUCH
                        </div>
                         <form action="{{ route('send')}}" method="post">
                                @csrf
                                <input type="text" name="s_name" placeholder="full Name ….">
                                <input type="phone" name="s_mobile" placeholder="Phone ….">
                                <input type="email" name="s_email" placeholder="Email ….">
                                <input type="text" name="s_content" placeholder="Your Message ….">
                                <button>Send Now</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <h2 class="title wow bounceIn">Thank you for choosing <span>DZ Security Services Ltd</span> for your security
            needs.</h2>
    </section>


      <footer>
            <div class="container">
                <div class="footer-hero">
                    <div class="logo">
                        <img src="{{ asset('frontend/images/logoS.png') }}" alt="">
                    </div>
                    <div class="body wow bounceIn">
                        <h4 class="title wow bounceIn" style="color: var(--secondry-color);">DZ SECURITY SERVICES LTD</h4>
                        <!-- <p>protection Through Excelence</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="title">Contact Us</div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18">
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M18,18H6a2,2,0,0,1-2-2H18a2,2,0,0,0,2-2V4a2,2,0,0,1,2,2v8A4,4,0,0,1,18,18Zm-2-4H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H16a2,2,0,0,1,2,2V12A2,2,0,0,1,16,14ZM2,3.6V5.73L7.35,9.48A2.8,2.8,0,0,0,8.983,10h.034a2.8,2.8,0,0,0,1.633-.52L16,5.73V3.6L9.65,8.05a1.136,1.136,0,0,1-1.3,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                                <p>
                                    info@dzsecurityservices.co.uk
                                </p>
                            </li>
                            <li>
                                <a href="https://wa.me/+447398599160" class="d-flex" style="color: #fff; text-decoration: none">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.002" height="18.002"
                                        viewBox="0 0 18.002 18.002">
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M14,18a10.07,10.07,0,0,1-4.74-1.19l-.45-.25a18,18,0,0,1-7.33-7.33l-.25-.45A10.07,10.07,0,0,1,0,4v-.67a2,2,0,0,1,.59-1.42L2.28.222a.75.75,0,0,1,1.18.15l2.25,3.86a1,1,0,0,1-.16,1.21L3.66,7.332a.5.5,0,0,0-.09.59l.35.66a13.53,13.53,0,0,0,5.5,5.49l.66.36a.5.5,0,0,0,.59-.09l1.89-1.89a1,1,0,0,1,1.21-.16l3.86,2.25a.75.75,0,0,1,.15,1.18l-1.69,1.69a2,2,0,0,1-1.42.59Z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <p>
                                    +44 7398 599160
                                </p>
                                </a>
                            </li>
                            <li>
                             <a href="https://wa.me/+447427988808" class="d-flex" style="color: #fff; text-decoration: none">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.002" height="18.002"
                                        viewBox="0 0 18.002 18.002">
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M14,18a10.07,10.07,0,0,1-4.74-1.19l-.45-.25a18,18,0,0,1-7.33-7.33l-.25-.45A10.07,10.07,0,0,1,0,4v-.67a2,2,0,0,1,.59-1.42L2.28.222a.75.75,0,0,1,1.18.15l2.25,3.86a1,1,0,0,1-.16,1.21L3.66,7.332a.5.5,0,0,0-.09.59l.35.66a13.53,13.53,0,0,0,5.5,5.49l.66.36a.5.5,0,0,0,.59-.09l1.89-1.89a1,1,0,0,1,1.21-.16l3.86,2.25a.75.75,0,0,1,.15,1.18l-1.69,1.69a2,2,0,0,1-1.42.59Z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <p>
                                    +44 7427 988808
                                </p>
                            </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="title">Socials</div>
                        <ul>
                            <li>
                              <a href="https://twitter.com/dz_security" class="d-flex">
                                  <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M19.971,2.464a7.99,7.99,0,0,1-1.847,1.778v.549A12.184,12.184,0,0,1,5.772,17,12.217,12.217,0,0,1,.33,15.74a.25.25,0,0,1-.15-.23V15.4a.26.26,0,0,1,.26-.26A8.844,8.844,0,0,0,5.552,13.3a4.363,4.363,0,0,1-3.884-2.557.26.26,0,0,1,.26-.36,3.992,3.992,0,0,0,1.518-.14A4.355,4.355,0,0,1,0,6.44.26.26,0,0,1,.36,6.18a3.992,3.992,0,0,0,1.578.34A4.277,4.277,0,0,1,.23,1.585a.539.539,0,0,1,.909-.18,12.339,12.339,0,0,0,8.4,3.876,4,4,0,0,1-.12-1,4.353,4.353,0,0,1,7.5-2.937A8.674,8.674,0,0,0,19.3.516a.17.17,0,0,1,.18,0,.17.17,0,0,1,0,.18,4.365,4.365,0,0,1-1.757,2,8.564,8.564,0,0,0,2-.48.16.16,0,0,1,.18,0,.17.17,0,0,1,.07.25Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                                <p>
                                    Twitter
                                </p>
                              </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/dz_security_services?igshid=OGQ5ZDc2ODk2ZA==" class="d-flex">
                                    <div class="icon">
                                    <svg id="ico_24_social_media_tools_instagram"
                                        data-name="ico / 24 / social media &amp; tools / instagram"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <rect id="Bounding_box" data-name="Bounding box" width="24" height="24"
                                            fill="rgba(255,255,255,0)" />
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M13,18H5a5.006,5.006,0,0,1-5-5V5A5.006,5.006,0,0,1,5,0h8a5.006,5.006,0,0,1,5,5v8A5.006,5.006,0,0,1,13,18ZM5,1.75A3.271,3.271,0,0,0,1.75,5v8A3.271,3.271,0,0,0,5,16.25h8A3.271,3.271,0,0,0,16.25,13V5A3.271,3.271,0,0,0,13,1.75ZM9,13.5a4.5,4.5,0,0,1,0-9h.01a4.5,4.5,0,0,1-.01,9ZM9,6.25A2.75,2.75,0,1,0,11.75,9,2.754,2.754,0,0,0,9,6.25Zm4.75-1a1,1,0,1,1,1-1A1,1,0,0,1,13.75,5.25Z"
                                            transform="translate(3 3)" fill="#fff" />
                                    </svg>

                                </div>
                                <p>
                                    Instagram
                                </p>
                                </a>
                            </li>
                            <li>
                               <a href="https://www.facebook.com/profile.php?id=100085090485216" class="d-flex">
                                 <div class="icon">
                                    <svg id="ico_24_social_media_tools_facebook"
                                        data-name="ico / 24 / social media &amp; tools / facebook"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <rect id="Bounding_box" data-name="Bounding box" width="24" height="24"
                                            fill="rgba(255,255,255,0)" />
                                        <path id="Icon_color" data-name="Icon color"
                                            d="M9.5,3h-3a1,1,0,0,0-1,1V7h4a.35.35,0,0,1,.34.46L9.1,9.66a.5.5,0,0,1-.47.34H5.5v7.5A.5.5,0,0,1,5,18H2.5a.5.5,0,0,1-.5-.5V10H.5A.5.5,0,0,1,0,9.5v-2A.5.5,0,0,1,.5,7H2V4A4,4,0,0,1,6,0H9.5a.5.5,0,0,1,.5.5v2A.5.5,0,0,1,9.5,3Z"
                                            transform="translate(7 3)" fill="#fff" />
                                    </svg>

                                </div>
                                <p>
                                    Facebook
                                </p>
                               </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="title">Quick Links</div>
                        <ul>
                            <li>
                                <a href="index.html" target="_blank">
                                    <p>Home</p>
                                </a>
                            </li>
                            <li>
                                <a href="our_services.html" target="_blank">
                                    <p>Services</p>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" target="_blank">
                                    <p>Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/all.min.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/custom.js') }}"></script>
        <script>
            new WOW().init();
        </script>
    </body>

</html>
