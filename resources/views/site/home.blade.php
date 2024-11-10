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

        <title></title>
    </head>

    <body>
         <header class="header">
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
                    <h1 class="wow backInLeft">Discover our world</h1>
                    <p>We are protecting the things that matter. <br>
            We’ve seen more than most, that’s why we are the
                        partner of choice for companies and individuals.</p>

                    <a href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </header>
        <section class="about_us">
            <div class="container">
                <div class="row">
                    <div class="col-6 para wow bounceInLeft">
                        <p class="wow bounceInRight" style="color: #014A77;">
                            Welcome to the place where you find all the security solutions under one roof!
                            We put our clients at the heart of our business. With passion, determination and leadership
                            <br><span>DZ
                                Security Services Ltd</span>
                            offers a set of security services and facility management solutions that will cover a wide
                            range of
                            needs.
                            Whatever your security needs, with us you will have everything under one roof. We pride
                            ourselves in
                            providing a full
                            range of Security Management Services and are committed to continually improve the contents
                            and quality.
                            With well
                            qualified and experienced professionals, we are dedicated to grow and improve security for
                            our clients
                            at all times.

                        </p>
                        <h2 class="title wow bounceIn">ABOUT DZ</h2>
                        <p class="wow bounceInLeft" style="color: #014A77;">
                            Welcome to the place where you can get your security services with confidence and trust.
                            <span>DZ Security Services Ltd</span> provide highly-trained SIA security guards that can be
                            tasked with
                            various security roles, even
                            in the most challenging security situations. To match your unique requirements; we strive to
                            provide the
                            best and most
                            diverse range of safety solutions tailored to your needs. We are committed to offering only
                            the highest
                            level of
                            effective and efficient service.

                        </p>
                    </div>
                    <div class="col-6 shakel wow bounceInRight">
                        <div class="rhombus-container" style="transform: translate(30px, 20px) rotate(-48deg);">
                            <div class="rhombus first wow backInUp">
                                <a href="{{ url('/services#featured_services') }}">
                                    <div class="rhombus-content"  style="transform: translate(-30px, 32px) rotate(48deg);">
                                        <!-- <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M96 128V70.2c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30V128h-.3c.2 2.6 .3 5.3 .3 8v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V136c0-2.7 .1-5.4 .3-8H96zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80V160H144v16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48V64H192c-4.4 0-8 3.6-8 8V88c0 4.4 3.6 8 8 8h16v16c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V96h16c4.4 0 8-3.6 8-8V72c0-4.4-3.6-8-8-8H240V48c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8z" />
                                    </svg>
                                    </div> -->
                                        <p style="font-size:13px;">FEATURED SERVICES</p>
                                        <p style="font-size:12px;color:#fdfdfd;">Find out more ></p>
                                    </div>
                                </a>
                            </div>
                            <div class="rhombus sec wow bounceInRight"  >
                                <a href="{{ url('/services#home') }}">
                                    <div class="rhombus-content"   style="transform: translate(-30px, 20px) rotate(48deg);">
                                        <!-- <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                                                                viewBox="0 0 512 512">
                                                                                <path
                                                                                    d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                                                                            </svg>
                                                                        </div> -->
                                        <p style="font-size:13px">Security for your Home</p>
                                        <p style="color: #fdfdfd;font-size:12px">Find out more ></p>

                                    </div>
                                </a>
                            </div>
                            <div class="rhombus" style="display: none;"></div>
                            <div class="rhombus third wow backInLeft" >
                               <a href="{{ url('/services#business') }}">
                                <div class="rhombus-content"   style="transform: translate(-32px, 39px) rotate(48deg);">
                                    <!-- <div class="icon" style="padding-right: 50px;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                                                            viewBox="0 0 384 512">
                                                                            <path
                                                                                d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z" />
                                                                        </svg>
                                                                    </div> -->
                                    <p style="font-size:13px;">Security for your Business</p>
                                    <p style="font-size:13px;color:#fdfdfd;">Find out more ></p>

                                </div>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about wow fadeIn">
            <div class="services">
                <h2 class="title wow bounceIn" style="color: var(--secondry-color);">We give you peace of mind.</h2>
                <p class="wow bounceInRight" style="color: white !important;">
                    By providing innovative, high-quality and sustainable security services to our clients, we help them
                    keep ahead of their
                    risks so that they can focus on their core business alone while we deal with the rest..
                </p>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <h3>
                                Peace of Mind for You
                            </h3>
                            <p>
                                Rest assured that your business, people, and property will be protected by us whenever
                                and wherever.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <h3>
                                Security Company You Can Trust
                            </h3>
                            <p>
                                Our work ethic, our passion for doing a good
                                job and our determination to provide the in
                                best possible security are what sets us apart
                                from the crowd.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <h3>
                                Expert Security Solutions
                            </h3>
                            <p>
                                With years of experience and expertise, Our
                                security company provides expert security a
                                solutions that give our clients peace of mind.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="chose_us wow bounceInLeft">
            <h2 class="title">WHY CHOOSE US</h2>
            <div class="services">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M246.9 14.1C234 15.2 224 26 224 39c0 13.8 11.2 25 25 25H400c8.8 0 16-7.2 16-16V17.4C416 8 408 .7 398.7 1.4L246.9 14.1zM240 112c0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H241.6c-1 5.2-1.6 10.5-1.6 16zM72 224c-22.1 0-40 17.9-40 40s17.9 40 40 40H224v89.4L386.8 230.5c-13.3-4.3-27.3-6.5-41.6-6.5H240 72zm345.7 20.9L246.6 416H416V369.7l53.6 90.6c11.2 19 35.8 25.3 54.8 14.1s25.3-35.8 14.1-54.8L462.3 290.8c-11.2-18.9-26.6-34.5-44.6-45.9zM224 448v32c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V448H224z" />
                                </svg>
                            </div>
                            <h3>
                                Highly Trained Experts
                            </h3>
                            <p>
                                DZ Security Services Ltd deploys only the highest-trained SIA licensed officers.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                </svg>

                            </div>
                            <h3>
                                AFFORDABILITY
                            </h3>
                            <p>
                                We have a very competitive pricing structure, which means our quality Security services
                                don’t cost the earth for any
                                business.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z" />
                                </svg>



                            </div>
                            <h3>
                                PROFESSIONALISM
                            </h3>
                            <p>
                                Our team of security officers are fully trained, qualified and have a wealth of
                                knowledge and experience to always keep
                                you and your assets safe.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8V128h-.7l-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48V352h28.2l91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16V352c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V128H16zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128V352c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V144c0-8.8-7.2-16-16-16H544zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                                </svg>


                            </div>
                            <h3>
                                GREAT CUSTOMER SERVICE
                            </h3>
                            <p>
                                Our team is available 24/7. Any queries and problems are handled professionally and in a
                                timely manner for
                                your convenience.

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M184 0c30.9 0 56 25.1 56 56V456c0 30.9-25.1 56-56 56c-28.9 0-52.7-21.9-55.7-50.1c-5.2 1.4-10.7 2.1-16.3 2.1c-35.3 0-64-28.7-64-64c0-7.4 1.3-14.6 3.6-21.2C21.4 367.4 0 338.2 0 304c0-31.9 18.7-59.5 45.8-72.3C37.1 220.8 32 207 32 192c0-30.7 21.6-56.3 50.4-62.6C80.8 123.9 80 118 80 112c0-29.9 20.6-55.1 48.3-62.1C131.3 21.9 155.1 0 184 0zM328 0c28.9 0 52.6 21.9 55.7 49.9c27.8 7 48.3 32.1 48.3 62.1c0 6-.8 11.9-2.4 17.4c28.8 6.2 50.4 31.9 50.4 62.6c0 15-5.1 28.8-13.8 39.7C493.3 244.5 512 272.1 512 304c0 34.2-21.4 63.4-51.6 74.8c2.3 6.6 3.6 13.8 3.6 21.2c0 35.3-28.7 64-64 64c-5.6 0-11.1-.7-16.3-2.1c-3 28.2-26.8 50.1-55.7 50.1c-30.9 0-56-25.1-56-56V56c0-30.9 25.1-56 56-56z" />
                                </svg>

                            </div>
                            <h3>
                                SMART & PRESENTABLE
                            </h3>
                            <p>
                                Our team are always prepared, full uniformed and equipped. In the right place at the
                                right time.
                                {{-- ,Let our highly trained security guards
                                take care of your property's security and ensure your employees never have to put
                                themselves at risk. --}}
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 wow bounceInLeft">
                        <div class="item">
                            <div class="icon">

                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                </svg>
                            </div>
                            <h3>
                                24/7 SUPPORT SERVICE
                            </h3>
                            <p>
                                Anytime you find yourself in trouble, give us a call and we’ll send out the required
                                service and support you need anytime and
                                always.

                            </p>
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
                                <a href="{{ route('home') }}" target="_blank">
                                    <p>Home</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}" target="_blank">
                                    <p>Services</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" target="_blank">
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
