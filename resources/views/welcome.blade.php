@extends('layouts.combineHeaderFooter')


@section('content')
    <section class="sec-hero">
        <div class="hero-left"></div>
        <div class="section-container">
            <div class="left">
                <div class="left-container">
                    <h4 class="sub">MJ Devign - Grow Your Business Today! </h4>
                    <h1 class="title"><span class="one">Digital Design &</span><span class="two">Development Agency</span></h1>
                    <p class="description">
                        We are an Australian based Digital Design & Development Agency here to provide you with quality and affordable services. Our goal is your satisfaction and we are here to work with you every step of the way!
                        <img src="main/images/web2.png" alt="" class="">
                    </p>
                    <div class="buttons">
                        <a href="#sec-info" class="btn-price mr-10 text-15px">ABOUT US</a>
                        <a href="#sec-services" class="btn-start text-15px">OUR SERVICES!</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <img src="main/images/others/landingpage/circle-shape.png" alt="" class="circle">
                <img src="main/images/others/landingpage/triangle-shape2.png" alt="" class="triangle2">
                <img src="main/images/others/landingpage/tringle-shape.png" alt="" class="triangle">
            </div>
        </div>
    </section>

    <section class="sec-info" style="background-color: #FFFFFF" id="sec-info">
        <div class="out-container">
            <div class="left">
                <div class="img-wrapper">
                    <img src="main/images/others/index/sec-info-index.jpg" alt="" class="">
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <div class="sub">MJ DEVIGN</div>
                    <div class="title">Digital Design &<br>Development Agency</div>
                    <div class="red-border"></div>
                    <div class="description">
                        <p>Establishing an online presence is a critical element in today's modern world that drives opportunity, growth and success.</p>
                        <p>Whether you're a business, entrepreneur, organisation or individual with an idea or project, we are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                        <p>During your experience with us we work with you on an individual level to help guide and facilitate the process, no matter what your level of technical knowledge is. The daunting idea of owning and managing your very own website will be a thought of the past!</p>
                    </div>
                    <img src="main/images/others/index/sec-info-index.jpg" alt="" class="img-fluid mobile-img">
                    <div class="list">
                        <div class="list-item"><a href="/websites"><img src="main/images/listicon.png" alt=""><span>Website Development</span></a></div>
                        <div class="list-item"><a href="/dropshipping"><img src="main/images/listicon.png" alt=""><span>Dropshipping Store</span></a></div>
                        <div class="list-item"><a href="/landingpage"><img src="main/images/listicon.png" alt=""><span>Landing Page</span></a></div>
                        <div class="list-item"><a href="/mobileapp"><img src="main/images/listicon.png" alt=""><span>Mobile App</span></a></div>
                        <div class="list-item"><a href="/webapp"><img src="main/images/listicon.png" alt=""><span>Web Application</span></a></div>
                        <div class="list-item"><a href="#"><img src="main/images/listicon.png" alt=""><span>Website Renovation</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-container" id="sec-info">
            <div class="left"></div>
            <div class="right"></div>
        </div>
    </section>

    <section class="sec-services" id="sec-services">
        <div class="heading flex-column section-container">
            <p class="sub">MJ Devign - Digital Design & Development Agency</p>
            <p class="title mb-20">Services We Offer</p>
            <div class="red-border mb-20"></div>
            <p class="description">Getting up and running online couldn't be easier with MJ Devign.</p>
        </div>
        <div class="section-container services">
            <div class="service">
                <img src="main/images/others/index/service1.png" alt="">
                <p class="one">Website Development</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/websites">Check it out
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service2.png" alt="">
                <p class="one">Dropshipping Store</p>
                <p class="text-black2 text-15px lineheight1">Start your very own online profitable business with our Dropshipping Store Development Package!</p>
                <a href="/dropshipping">Check it out
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service3.png" alt="">
                <p class="one">Landing Page</p>
                <p class="text-black2 text-15px lineheight1">Promote and grow your business strategically with our Landing Page Development Package!</p>
                <a href="/landingpage">Check it out
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service4.png" alt="">
                <p class="one">Mobile App</p>
                <p class="text-black2 text-15px lineheight1">Have the next new big idea for a mobile application? You’ve come to the right place to get started!</p>
                <a href="/mobileapp">Check it out
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service5.png" alt="">
                <p class="one">Web Application</p>
                <p class="text-black2 text-15px lineheight1">Need a customised web application to introduce to the market or make your business run smoothly? No worries!</p>
                <a href="/webapp">Check it out
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service6.png" alt="">
                <p class="one">Website Renovation</p>
                <p class="text-black2 text-15px lineheight1">Have an existing a website that needs a new look? We are here to renovate it to modern standards!</p>
                <a href="#">Comming Soon
                    <img src="main/images/others/index/arrow.png" alt="" class="normal">
                    <img src="main/images/others/index/arrow-hover.png" alt="" class="hover">
                </a>
            </div>
        </div>
    </section>

    <section class="sec-newyear">
        <div class="section-container">
            <div class="left">
                <img src="main/images/sec-newyear/sale-promotion.png" alt="">
            </div>
            <div class="right">
                <div class="right-content">
                    <div class="right-text1 f-montserratMedium text-white text-700 text-22px">Promo Code:</div>
                    <div class="right-text2 f-montserratMedium text-white text-700 text-22px">MJDevign</div>
                    <div class="right-text3 text-white">Enter the promo code during checkout.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-faq" id="sec-faq">
        <div class="section-container">
            <p class="sub">FAQ</p>
            <p class="title">Frequently Asked Questions</p>
            <div class="red-border" style="margin-bottom: 55px;"></div>
            <div class="faq">
                <div class="left side">
                    <div class="item">
                        <div class="item-q">
                            <i class="far fa-gem"></i>
                            <p>What is MJ Devign?</p>
                        </div>
                        <div class="item-a">
                            We’re an Australian based Digital Design & Development Agency here to provide you with quality and affordable services. Our goal is your satisfaction and we are here to work with you every step of the way!
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <i class="fas fa-globe-europe"></i>
                            <p>Why do I need a website?</p>
                        </div>
                        <div class="item-a">
                            Having a website to establish your online presence is a critical element in today’s modern world that drives opportunity, growth and success. There are many reasons why you might need a website. You can sell products or services, promote your business or organisation, start an online forum, take online bookings and so much more.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <i class="far fa-thumbs-up"></i>
                            <p>Will I have ownership once development is complete?</p>
                        </div>
                        <div class="item-a">
                            Yes. Once we complete development everything will be transferred into your name and you will have 100% ownership.
                        </div>
                    </div>
                </div>
                <div class="right side">
                    <div class="item">
                        <div class="item-q">
                            <i class="far fa-money-bill-alt"></i>
                            <p>Why are our development services so cheap?</p>
                        </div>
                        <div class="item-a">
                            If you have done your research, you have probably found that many other agencies charge much higher prices for the same services that we offer.<br>
                            We are a small business and we are strong supporters of other small businesses. We are not here to empty your wallet, that is not in our philosophy. We are here to offer you a fair, affordable and quality solutions to getting yourself online.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <i class="fas fa-mobile-alt"></i>
                            <p>Can I call you to discuss my vison?</p>
                        </div>
                        <div class="item-a">
                            Absolutely! Send us an email with your details and we will organise a time to discuss your requirements.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <i class="far fa-handshake"></i>
                            <p>Can I be involved in the development process?</p>
                        </div>
                        <div class="item-a">
                            Yes, we encourage it! After you place an order with us you will have a direct line of contact with us developers through a chat feature in your account. We will keep you updated with progress and take on board any of your ideas along the way.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.service').forEach(item=>{
            item.addEventListener('click', function(e){
                window.open(item.querySelector('a').getAttribute('href'), "_self");
            })
        })
    </script>

@endsection
