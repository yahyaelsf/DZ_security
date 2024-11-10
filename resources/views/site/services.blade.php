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
          <style>
        .headerContact::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
    </style>
    </head>

    <body>
          <header class="header header_services">
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
                    <h1 class="wow backInLeft">Our Security Services</h1>
                    <h2 class="title wow bounceIn">We’re here to help make your world a safer place</h2>

                    <p class="wow bounceInLeft" style="color: #fff;">
                       At <span> DZ Security Services Ltd</span> , we are committed to providing top-of-the-line services and
                        solutions that protect both your home and business.. Feel safe, every day, wherever and whenever.

                    </p>
                    <a href="{{route('contact')}}">Contact Us</a>
                </div>
            </div>
        </header>

        <section class="about wow fadeIn mb-5">

            <h2 class="title wow bounceIn my-5">We Provide The Best Security Services</h2>
            <p class="wow bounceInLeft mb-4" style="color: #014A77;">
                You do not have to take the hassle of recruitment, contracts, payments, obligations and
                responsibilities; we
                will instead take care of everything with no hidden charges. Our highly-trained SIA security guards can
                be
                tasked with various security roles to match your unique requirements. We strive to provide the best and
                most
                diverse range of safety solutions.

            </p>
            <div class="solutions">
                <h2 class="title wow bounceIn mb-5" style="color: var(--secondry-color);">How our services and solutions
                    protect
                    your Home & business?</h2>
                    <div class="ser-all">

                    <div class="item1 item1__ wow col-lg-12 bounceInLeft d-flex justify-content-between align-items-center" id="business">
                        <div class="content col-lg-6">
                            <h3>
                                Security for your Business
                            </h3>
                            <p>
                                The less time you have to spend worrying about things like security, the more you can focus on growing your business and protecting your profits.
                               You work hard for your business but making sure it’s properly protected should be an easy process.
                                We provide all the services you need to keep your people, property and assets safe creating a calm environment for work ensuring your business runs smoothly. Having a security guard adds an element of professionalism to the business, making customers feel secure and giving a positive impression to potential clients. We can also help reduce insurance costs for businesses. Whether you’re running a small or medium-size company, our adaptable approach to business security ensures we have a solution that fits your needs and your budget.


                                </p>
                            </div>
                        <div class="img col-lg-6" style="background-image: url('{{ asset('frontend/images/Security_for_your_business.jfif') }}');">
                            <div class="layer"></div>
                        </div>

                    </div>


                    <div class="item1 item1_ wow bounceInDown mb-5" id="home">
                        <div class="img col-lg-6" style="background-image: url('{{ asset('frontend/images/home5.jfif') }}');  background-position: center;">
                            <div class="layer"></div>
                        </div>
                        <div class="content pt-5">
                            <h3>
                                Security for your Home
                            </h3>
                            <p>
                                Complete security for you, your family and your home. Allowing you to feel confident
                                that
                                your home is secure
                                whether in or away, we take care of the security of your home. Homeowners now have more
                                options than ever to ensure their homes are secure, making it easier for families to be
                                safe
                                while enjoying their homes' comfort. Our services include a Security officer patrolling
                                your
                                home grounds, visitors are double checked before they enter your abode, retrieve and
                                receive
                                parcels on your behalf. Bin services are also available.

                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="chose_us chose_us2 wow bounceInLeft">
            <h2 class="title">How it works:</h2>
            <h2 class="title wow bounceIn" style="color: #01253C;">First our security solutions experts
                carry
                out a risk assessment to identify the elements of business security you need.
                From there, you can trust us to help make your world a safer place</h2>
            <div class="services">
                <h2 class="title wow bounceIn" style="color: var(--secondry-color);">FEATURED SERVICES</h2>

                <div class="row chose2">
                    <div class="col-12 col-md-6">
                        <div class="item" style="height: 400px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M96 128V70.2c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30V128h-.3c.2 2.6 .3 5.3 .3 8v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V136c0-2.7 .1-5.4 .3-8H96zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80V160H144v16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48V64H192c-4.4 0-8 3.6-8 8V88c0 4.4 3.6 8 8 8h16v16c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V96h16c4.4 0 8-3.6 8-8V72c0-4.4-3.6-8-8-8H240V48c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8z" />
                                </svg>
                            </div>
                            <h3>
                                On site security
                            </h3>
                            <p>
                                Our trained and skilled SIA security officers have the right experiences in handling the
                                different threats that could emerge through vast locations and premises.
                                We are aware that people would like to feel safe at all times, therefore you can rely on
                                us
                                and our professional security personnel to reduce your risks and threats and respond to
                                your
                                requirements rapidly. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item" style="height: 400px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="29"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M280 24c0-13.3-10.7-24-24-24s-24 10.7-24 24v80c0 13.3 10.7 24 24 24s24-10.7 24-24V24zM185.8 224H326.2c6.8 0 12.8 4.3 15.1 10.6L360.3 288H151.7l19.1-53.4c2.3-6.4 8.3-10.6 15.1-10.6zm-75.3-10.9L82.2 292.4C62.1 300.9 48 320.8 48 344v40 64 32c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V448H384v32c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V448 384 344c0-23.2-14.1-43.1-34.2-51.6l-28.3-79.3C390.1 181.3 360 160 326.2 160H185.8c-33.8 0-64 21.3-75.3 53.1zM128 344a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm232 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM39 39c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L73 39c-9.4-9.4-24.6-9.4-33.9 0zm400 0L391 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0z" />
                                </svg>

                            </div>
                            <h3>
                                Mobile security
                            </h3>
                            <p>
                                Professional security car patrolling provides trust and confidence in businesses or
                                residential all of our fully SIA-trained mobile patrol officers provide the highest
                                level of
                                experience in residential and commercial areas.
                                This can significantly increase safety and security.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item" style="height: 450px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="27"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                                </svg>



                            </div>
                            <h3>
                                Key holding
                            </h3>
                            <p>
                                We understand the importance of keeping your premises safe and doors locked at all
                                times.
                                Which is why we provide a key holding service. You give us a set of keys to your
                                premises
                                and depending on the range of services you choose,
                                the keys could then be used as agreed or be used in the event of a security breach
                                making
                                premises safe and putting your minds at rest.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="item" style="height: 450px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M224 352L196.8 52.3C194.2 24.2 216.3 0 244.6 0H534.1c21.1 0 36.4 20.1 30.9 40.4L558.5 64H400c-8.8 0-16 7.2-16 16s7.2 16 16 16H549.8l-17.5 64H400c-8.8 0-16 7.2-16 16s7.2 16 16 16H523.6l-17.5 64H400c-8.8 0-16 7.2-16 16s7.2 16 16 16h97.5L480 352H224zm-16 32H496c26.5 0 48 21.5 48 48v32c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V432c0-26.5 21.5-48 48-48zm144 96a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM147.5 30.7c10.8 6.7 15.3 21 10.6 33.4l-22 57.8c-4.2 10.9-14.5 17.6-25.3 16.4l-33.3-3.6c-13.6 42.2-13.6 88.4 0 130.7l33.3-3.6c10.9-1.2 21.2 5.5 25.3 16.4l22 57.8c4.7 12.4 .2 26.7-10.6 33.4l-44 27.2c-9.7 6-21.9 4.2-29.8-4.3C-24.6 286-24.6 114 73.7 7.8C81.6-.7 93.8-2.5 103.5 3.5l44 27.2z" />
                                </svg>


                            </div>
                            <h3>
                                Call service
                            </h3>
                            <p>
                                We're on call 24/7, so your workday ends when the daily work ends. You don't have to put
                                yourself or your employee in an unsafe situation. We will enter your site, lock and
                                unlock
                                it, and always check to ensure everything is okay.
                                If an alarm or a suspicious activity is alerted, we will dispatch our best security
                                officer
                                to your premises with your keys. There, they will asses the situation, enter the
                                premises
                                and search for any potential threats or dangers. You will be issued with a full report
                                of
                                the incident and any actions that have been taken. If needed, we will request emergency
                                services; communicating with the police on your behalf.


                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="chose_us wow bounceInLeft">
            <h2 class="title">See a different world</h2>
            <div class="services">
                <div class="row gap-3 justify-content-center">
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3 0 0c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z" />
                                </svg>
                            </div>
                            <h3>
                                Save Money
                            </h3>
                            <p>
                                Pay only for the services you require. You can choose from a range of our flexible
                                tariffs
                                within a budget that suits you best. We can increase, reduce, add or remove features if
                                required. No contract and no cancellation fees.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z" />
                                </svg>

                            </div>
                            <h3>
                                You can share the package
                            </h3>
                            <p>
                                Reduce your cost by sharing the tariff with your neighbours, residents in your area or
                                businesses.
                                By doing so, you share the the security of yourself and others and you save money at no
                                extra cost to you.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                                </svg>

                            </div>
                            <h3>
                                Keep Costs Down
                            </h3>
                            <p>
                                Our SIA security guards multi-role capabilities such as key holding,
                                concierge duties and risk assessment mean you can keep costs down without compromising
                                on
                                vital services.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M211.2 96a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM32 256c0 17.7 14.3 32 32 32h85.6c10.1-39.4 38.6-71.5 75.8-86.6c-9.7-6-21.2-9.4-33.4-9.4H96c-35.3 0-64 28.7-64 64zm461.6 32H576c17.7 0 32-14.3 32-32c0-35.3-28.7-64-64-64H448c-11.7 0-22.7 3.1-32.1 8.6c38.1 14.8 67.4 47.3 77.7 87.4zM391.2 226.4c-6.9-1.6-14.2-2.4-21.6-2.4h-96c-8.5 0-16.7 1.1-24.5 3.1c-30.8 8.1-55.6 31.1-66.1 60.9c-3.5 10-5.5 20.8-5.5 32c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32c0-11.2-1.9-22-5.5-32c-10.8-30.7-36.8-54.2-68.9-61.6zM563.2 96a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zM321.6 192a80 80 0 1 0 0-160 80 80 0 1 0 0 160zM32 416c-17.7 0-32 14.3-32 32s14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32z" />
                                </svg>

                            </div>
                            <h3>
                                Tailored to Your Needs </h3>
                            <p>
                                Relax in the knowledge that your solution will be tailored to your specific security
                                requirements, guaranteeing you a personalised, first-class service.

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3H178.3zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7V273.8L591.4 312z" />
                                </svg>

                            </div>
                            <h3>
                                Deter Criminals
                            </h3>
                            <p>
                                An important visual deterrent,
                                the presence of security guards will significantly minimise the chance of vandalism,
                                trespassing theft and other crime.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="item" style="height: 350px;">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="30"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-15.9-5.8-30.4-15.3-41.6l76.6-147.4c6.1-11.8 1.5-26.3-10.2-32.4s-26.2-1.5-32.4 10.2L262.1 288.3c-2-.2-4-.3-6.1-.3c-35.3 0-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z" />
                                </svg>

                            </div>
                            <h3>
                                Rapid Response Solution
                            </h3>
                            <p>
                                As well as an effective visual deterrent,
                                our security guards can also act as a rapid response solution to any potential or
                                genuine
                                threats.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured_services">
            <h2 class="title wow bounceIn" style="color: var(--secondry-color);">What We Provide?</h2>

            <h2 class="title wow bounceIn">We Provide The Best Security Services</h2>
            <div class="container mb-5">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Security_guard.jfif') }}'); background-position: center;">
                            <div class="content">
                                <h3>SIA Security Guards.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/CCTV_Guard.jfif') }}');">
                            <div class="content">
                                <h3>CCTV Operator Guards.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Undercover1.jfif') }}');">
                            <div class="content">
                                <h3>Undercover Security Guards.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pe-0 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/sec7.jfif') }}');">
                            <div class="content">
                                <h3>Close Protection.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 ps-0 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Concierge.jfif') }}');">
                            <div class="content">
                                <h3>Concierge.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Key_Holder.jfif') }}');">
                            <div class="content">
                                <h3>Key Holder.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Mobile_patrol1.jfif') }}');">
                            <div class="content">
                                <h3>Mobile Patrols.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pe-0 g-5">
                        <div class="featured_item" style="background-image: url('{{ asset('frontend/images/Cctv_mobile_unit.jfif') }}');">
                            <div class="content">
                                <h3>CCTV Mobile Unit.</h3>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14.576"
                                        viewBox="0 0 16.002 14.576">
                                        <path id="Path"
                                            d="M15.85,7.638a.48.48,0,0,0,0-.7L9.06.148a.5.5,0,0,0-.71,0l-.2.2A.49.49,0,0,0,8,.708v3.58H.5a.5.5,0,0,0-.5.5v5a.5.5,0,0,0,.5.5H8v3.58a.49.49,0,0,0,.15.36l.2.2a.5.5,0,0,0,.71,0Z"
                                            fill="#fff" />
                                    </svg>

                                </div>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="title wow bounceIn">Security Experts</h2>

        </section>
        <section class="what_we_do wow zoomIn">
            <ul>
                <li>Commercial and industrial facilities</li>
                <li>Construction Sites</li>
                <li>Residential areas and offices</li>
                <li>Healthcare sites</li>
                <li>Education sites</li>
                <li>Events </li>
                <li>Truck terminals and depots</li>
            </ul>

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
