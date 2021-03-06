@extends("base")

@section("content")
<div class="slider-container rev_slider_wrapper" style="height: 100vh;" id="home">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1630, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'mouse', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
        <ul>
            <li class="" data-transition="Fade Boxes">
                <img src="img/demos/architecture-interior/slides/sld1.webp"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    class="rev-slidebg">

                <div class="tp-caption rs-parallaxlevel-4"
                    data-frames='[{"from":"opacity:0;","speed":300,"to":"opacity:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
                    data-x="center" data-hoffset="['-150','-150','-150','-150']"
                    data-y="center" data-voffset="['-20','-20','-20','-20']"
                    data-width="['430','430','630','830]"
                    data-height="['330','330','530','730']">
                        <svg class="custom-square-1 custom-transition-1 custom-mobile-square-thickness" width="100%" height="100%">
                            <rect width="100%" height="100%" fill="none" stroke-width="40" stroke="#000" />
                        </svg>
                    </div>

                <h1 class="tp-caption font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
                    data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
                    data-x="center" data-hoffset="['0','0','30','30']"
                    data-y="center" data-voffset="['-55','-55','-85','-120']"
                    data-width="['580','580','780','1000']"
                    data-fontsize="['66','66','86','120']"
                    data-lineheight="['72','72','90','125']">Interior Design & Architecture</h1>

                <div class="tp-caption font-weight-light text-color-light ls-0 rs-parallaxlevel-4"
                    data-frames='[{"from":"opacity:0;y:[50%]","speed":2000,"to":"opacity:0.7;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
                    data-x="center" data-hoffset="['-181','-181','-152','-181']"
                    data-y="center" data-voffset="['45','45','45','65']"
                    data-fontsize="['16','16','32','45']"
                    data-lineheight="['20','20','40','50']">Hello, learn more about us.</div>

                <a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
                    data-hash
                    data-hash-offset="95"
                    href="#whoweare"
                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                    data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
                    data-y="center" data-voffset="['125','125','210','275']"
                    data-paddingtop="['20','20','30','40']"
                    data-paddingbottom="['20','20','30','40']"
                    data-paddingleft="['68','68','68','95']"
                    data-paddingright="['15','15','15','25']"
                    data-fontsize="['16','16','23','45']"
                    data-lineheight="['20','20','26','50']">WHO WE ARE <i class="fas fa-arrow-right ms-4 ps-3 me-2 text-4"></i></a>

            </li>
            <li class="" data-transition="Fade Boxes">
                <img src="img/demos/architecture-interior/slides/sld3.webp"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    class="rev-slidebg">

                <h2 class="tp-caption text-center font-weight-bold text-color-light ws-normal rs-parallaxlevel-3"
                    data-frames='[{"from":"opacity:0;y:[50%];","speed":2000,"to":"opacity:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"o:0;","ease":"Power2.easeInOut"}]'
                    data-x="center" data-hoffset="['0','0','30','30']"
                    data-y="center" data-voffset="['-55','-55','-85','-120']"
                    data-width="['580','580','780','1000']"
                    data-fontsize="['66','66','86','120']"
                    data-lineheight="['72','72','90','125']">The Power of Design to make a Better World</h2>

                <a class="tp-caption d-inline-flex align-items-center btn btn-dark font-weight-bold rounded ls-0 rs-parallaxlevel-2"
                    data-hash
                    data-hash-offset="95"
                    href="#contactus"
                    data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"x:-50%;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                    data-x="['center','center','center','center']" data-hoffset="['-5','-5','25','45']"
                    data-y="center" data-voffset="['125','125','210','275']"
                    data-paddingtop="['20','20','30','40']"
                    data-paddingbottom="['20','20','30','40']"
                    data-paddingleft="['68','68','68','95']"
                    data-paddingright="['15','15','15','25']"
                    data-fontsize="['16','16','23','45']"
                    data-lineheight="['20','20','26','50']">CONTACT US <i class="fas fa-arrow-right ms-4 ps-3 me-2 text-4"></i></a>

            </li>
        </ul>
    </div>
</div>

<section class="section section-height-5 bg-dark border-0 m-0" id="whoweare">
    <div class="container container-xl-custom">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="overflow-hidden">
                    <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">WHO WE ARE</span>
                </div>
                <div class="overflow-hidden mb-3">
                    <h2 class="text-color-white font-weight-extra-bold text-11 negative-ls-1 line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">We design for amazing people</h2>
                </div>
                <p class="text-4 text-white line-height-9 pe-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="4500">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena bibendum mex, et faucibus lacus.</p>
                <a href="demo-architecture-interior-who-we-are.html" class="btn btn-primary btn-outline font-weight-extra-bold text-white px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">LEARN MORE</a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6 col-xl-4 order-1">
                        <img src="img/demos/architecture-interior/others/others-1.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="3000" alt="" />
                    </div>
                    <div class="col-12 col-xl-4 order-3 order-xl-2">
                        <div class="h-100 d-flex align-items-center position-relative px-4 py-4 py-xl-0 mt-4 mt-xl-0">
                            <svg class="custom-square-1 custom-square-top-right z-index-0" width="80" height="80" data-appear-animation-svg="true">
                                <rect class="lineProgressFrom appear-animation" data-appear-animation="lineProgressTo" data-appear-animation-duration="3s" width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <svg class="custom-square-1 custom-square-1-no-pos z-index-0" width="100%" height="100%" data-appear-animation-svg="true">
                                <rect class="lineProgressAndFillFrom appear-animation" data-appear-animation="lineProgressAndFillTo" data-appear-animation-duration="3s" width="100%" height="100%" fill="none" stroke-width="13" stroke="#000" />
                            </svg>
                            <p class="text-color-light line-height-9 text-center text-4 z-index-1 custom-responsive-text-size-1 mb-0 px-2">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa enim. Nullam id varius nunc. Vivamus bibendum mex.</p>
                        </div>
                    </div>
                    <div class="col-6 col-xl-4 order-2 order-xl-3">
                        <img src="img/demos/architecture-interior/others/others-2.jpg" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="3000" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-height-4 bg-dark border-0 m-0 appear-animation" data-appear-animation="fadeIn" id="ourservices">
    <div class="container container-xl-custom">
        <div class="row">
            <div class="col text-center">
                <div class="overflow-hidden">
                    <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">WHAT WE DO</span>
                </div>
                <div class="overflow-hidden mb-4">
                    <h2 class="text-color-light font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Services</h2>
                </div>
            </div>
        </div>
        <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
            <div class="row mb-2">
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M18,11h-5v5h5V11z M15,15h-1v-3h1V15z M17,15h-1v-3h1V15z"/><path d="M23,22h-1v-9.2l0.3,0.3c0.4,0.4,1,0.4,1.4,0l0,0c0.4-0.4,0.4-1,0-1.4L12,0L7,5V3c0.6,0,1-0.4,1-1V1c0-0.6-0.4-1-1-1H3   C2.4,0,2,0.4,2,1v1c0,0.6,0.4,1,1,1v6l-2.7,2.7c-0.4,0.4-0.4,1,0,1.4l0,0c0.4,0.4,1,0.4,1.4,0L2,12.8V22H1c-0.6,0-1,0.4-1,1v1h24   v-1C24,22.4,23.6,22,23,22z M12,2.8l8,8V22h-9v-8H6v8H4V10.8L12,2.8z M10,19v3H7v-7h3v3H9v1H10z M4,8V3h2v3L4,8z M3,1h4v1H3V1z"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Architectural Design</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M23,10h-5V1c0-0.6-0.4-1-1-1H7C6.4,0,6,0.4,6,1v9H1c-0.6,0-1,0.4-1,1v13h24V11C24,10.4,23.6,10,23,10z M2,22V12h4v10H2z    M8,22V11V2h8v9v11H8z M18,22V12h4v10H18z"/><rect height="2" width="1" x="4" y="13"/><rect height="2" width="1" x="4" y="16"/><rect height="2" width="1" x="19" y="13"/><rect height="2" width="1" x="19" y="16"/><rect height="2" width="1" x="10" y="4"/><rect height="2" width="1" x="10" y="7"/><rect height="2" width="1" x="10" y="10"/><rect height="2" width="1" x="10" y="13"/><rect height="2" width="1" x="10" y="16"/><rect height="2" width="1" x="13" y="4"/><rect height="2" width="1" x="13" y="7"/><rect height="2" width="1" x="13" y="10"/><rect height="2" width="1" x="13" y="13"/><rect height="2" width="1" x="13" y="16"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Interior Design</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M21,7.2c-0.4,0-0.7,0.1-1,0.2V5c0-2.8-2.2-5-5-5H9C6.2,0,4,2.2,4,5v2.4C3.7,7.3,3.4,7.2,3,7.2c-1.7,0-3,1.3-3,3   c0,1.3,0.8,2.4,2,2.8c0,0,0,7,0,8s1,1,1,1h3v2h4v-2h4v2h4v-2h3c0,0,1,0,1-1s0-8,0-8c1.2-0.4,2-1.5,2-2.8C24,8.5,22.7,7.2,21,7.2z    M6,5c0-1.7,1.3-3,3-3h6c1.7,0,3,1.3,3,3v5v5H6v-5V5z M4,20c0,0,0-6.8,0-7.8s-1-1-1-1c-0.6,0-1-0.4-1-1s0.4-1.1,1-1.1S4,10,4,10h1   v10H4z M9,23H7v-1h2V23z M17,23h-2v-1h2V23z M6,20v-4h12v4H6z M21,11.2c0,0-1,0-1,1s0,7.8,0,7.8h-1V10h1c0,0,0.4-0.9,1-0.9   s1,0.5,1,1S21.6,11.2,21,11.2z"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Luxury</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M23,11H3V3c0-1.1,0.9-2,2-2s2,0.9,2,2v1.1C6.6,4.2,6.2,4.6,6.1,5h2.8C8.8,4.6,8.4,4.2,8,4.1V3c0-1.7-1.3-3-3-3S2,1.3,2,3v8  H1c-0.6,0-1,0.4-1,1v4c0,2.2,1.2,4.2,3,5.2V22c0,1.1,0.9,2,2,2s2-0.9,2-2h10c0,1.1,0.9,2,2,2s2-0.9,2-2v-0.8c1.8-1,3-3,3-5.2v-4  C24,11.4,23.6,11,23,11z M5,23c-0.6,0-1-0.4-1-1v-0.3C4.6,21.9,5.3,22,6,22C6,22.6,5.6,23,5,23z M20,22c0,0.6-0.4,1-1,1s-1-0.4-1-1  c0.7,0,1.4-0.1,2-0.3V22z M22,16c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4v-1h20V16z M22,14H2v-1h20V14z"/></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Retail</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="/" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M18,11h-5v5h5V11z M15,15h-1v-3h1V15z M17,15h-1v-3h1V15z"/><path d="M23,22h-1v-9.2l0.3,0.3c0.4,0.4,1,0.4,1.4,0l0,0c0.4-0.4,0.4-1,0-1.4L12,0L7,5V3c0.6,0,1-0.4,1-1V1c0-0.6-0.4-1-1-1H3   C2.4,0,2,0.4,2,1v1c0,0.6,0.4,1,1,1v6l-2.7,2.7c-0.4,0.4-0.4,1,0,1.4l0,0c0.4,0.4,1,0.4,1.4,0L2,12.8V22H1c-0.6,0-1,0.4-1,1v1h24   v-1C24,22.4,23.6,22,23,22z M12,2.8l8,8V22h-9v-8H6v8H4V10.8L12,2.8z M10,19v3H7v-7h3v3H9v1H10z M4,8V3h2v3L4,8z M3,1h4v1H3V1z"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Restaturants & Cafe</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M23,11H3V3c0-1.1,0.9-2,2-2s2,0.9,2,2v1.1C6.6,4.2,6.2,4.6,6.1,5h2.8C8.8,4.6,8.4,4.2,8,4.1V3c0-1.7-1.3-3-3-3S2,1.3,2,3v8  H1c-0.6,0-1,0.4-1,1v4c0,2.2,1.2,4.2,3,5.2V22c0,1.1,0.9,2,2,2s2-0.9,2-2h10c0,1.1,0.9,2,2,2s2-0.9,2-2v-0.8c1.8-1,3-3,3-5.2v-4  C24,11.4,23.6,11,23,11z M5,23c-0.6,0-1-0.4-1-1v-0.3C4.6,21.9,5.3,22,6,22C6,22.6,5.6,23,5,23z M20,22c0,0.6-0.4,1-1,1s-1-0.4-1-1  c0.7,0,1.4-0.1,2-0.3V22z M22,16c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4v-1h20V16z M22,14H2v-1h20V14z"/></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Hospitality</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M23,10h-5V1c0-0.6-0.4-1-1-1H7C6.4,0,6,0.4,6,1v9H1c-0.6,0-1,0.4-1,1v13h24V11C24,10.4,23.6,10,23,10z M2,22V12h4v10H2z    M8,22V11V2h8v9v11H8z M18,22V12h4v10H18z"/><rect height="2" width="1" x="4" y="13"/><rect height="2" width="1" x="4" y="16"/><rect height="2" width="1" x="19" y="13"/><rect height="2" width="1" x="19" y="16"/><rect height="2" width="1" x="10" y="4"/><rect height="2" width="1" x="10" y="7"/><rect height="2" width="1" x="10" y="10"/><rect height="2" width="1" x="10" y="13"/><rect height="2" width="1" x="10" y="16"/><rect height="2" width="1" x="13" y="4"/><rect height="2" width="1" x="13" y="7"/><rect height="2" width="1" x="13" y="10"/><rect height="2" width="1" x="13" y="13"/><rect height="2" width="1" x="13" y="16"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Fit-out Services</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M21,7.2c-0.4,0-0.7,0.1-1,0.2V5c0-2.8-2.2-5-5-5H9C6.2,0,4,2.2,4,5v2.4C3.7,7.3,3.4,7.2,3,7.2c-1.7,0-3,1.3-3,3   c0,1.3,0.8,2.4,2,2.8c0,0,0,7,0,8s1,1,1,1h3v2h4v-2h4v2h4v-2h3c0,0,1,0,1-1s0-8,0-8c1.2-0.4,2-1.5,2-2.8C24,8.5,22.7,7.2,21,7.2z    M6,5c0-1.7,1.3-3,3-3h6c1.7,0,3,1.3,3,3v5v5H6v-5V5z M4,20c0,0,0-6.8,0-7.8s-1-1-1-1c-0.6,0-1-0.4-1-1s0.4-1.1,1-1.1S4,10,4,10h1   v10H4z M9,23H7v-1h2V23z M17,23h-2v-1h2V23z M6,20v-4h12v4H6z M21,11.2c0,0-1,0-1,1s0,7.8,0,7.8h-1V10h1c0,0,0.4-0.9,1-0.9   s1,0.5,1,1S21.6,11.2,21,11.2z"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Hospital/Clinic Interiors</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M18,11h-5v5h5V11z M15,15h-1v-3h1V15z M17,15h-1v-3h1V15z"/><path d="M23,22h-1v-9.2l0.3,0.3c0.4,0.4,1,0.4,1.4,0l0,0c0.4-0.4,0.4-1,0-1.4L12,0L7,5V3c0.6,0,1-0.4,1-1V1c0-0.6-0.4-1-1-1H3   C2.4,0,2,0.4,2,1v1c0,0.6,0.4,1,1,1v6l-2.7,2.7c-0.4,0.4-0.4,1,0,1.4l0,0c0.4,0.4,1,0.4,1.4,0L2,12.8V22H1c-0.6,0-1,0.4-1,1v1h24   v-1C24,22.4,23.6,22,23,22z M12,2.8l8,8V22h-9v-8H6v8H4V10.8L12,2.8z M10,19v3H7v-7h3v3H9v1H10z M4,8V3h2v3L4,8z M3,1h4v1H3V1z"/></g></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Spa & Gym</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a href="ajax/demo-architecture-interior-ajax-services-detail.html" class="text-decoration-none simple-ajax-popup">
                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="box-content">
                                <svg class="mb-3" enable-background="new 0 0 24 24" height="88px" version="1.1" viewBox="0 0 24 24" width="88px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M23,11H3V3c0-1.1,0.9-2,2-2s2,0.9,2,2v1.1C6.6,4.2,6.2,4.6,6.1,5h2.8C8.8,4.6,8.4,4.2,8,4.1V3c0-1.7-1.3-3-3-3S2,1.3,2,3v8  H1c-0.6,0-1,0.4-1,1v4c0,2.2,1.2,4.2,3,5.2V22c0,1.1,0.9,2,2,2s2-0.9,2-2h10c0,1.1,0.9,2,2,2s2-0.9,2-2v-0.8c1.8-1,3-3,3-5.2v-4  C24,11.4,23.6,11,23,11z M5,23c-0.6,0-1-0.4-1-1v-0.3C4.6,21.9,5.3,22,6,22C6,22.6,5.6,23,5,23z M20,22c0,0.6-0.4,1-1,1s-1-0.4-1-1  c0.7,0,1.4-0.1,2-0.3V22z M22,16c0,2.2-1.8,4-4,4H6c-2.2,0-4-1.8-4-4v-1h20V16z M22,14H2v-1h20V14z"/></svg>
                                <h3 class="font-weight-bold text-color-light text-5 text-capitalize ls-0 my-3">Swimming Pool</h3>
                                <p class="font-weight-light text-color-light opacity-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#contactus" class="btn btn-dark btn-outline custom-btn-color-1 font-weight-extra-bold text-color-light text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">CONTACT US</a>
            </div>
        </div>
    </div>		
</section>

<section class="section section-height-4 bg-dark border-0 m-0" id="ourprojects">
    <div class="container container-xl-custom">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-6 text-center">
                <div class="overflow-hidden">
                    <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">THE PORTFOLIO</span>
                </div>
                <div class="overflow-hidden mb-3">
                    <h2 class="text-color-white font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Projects</h2>
                </div>
                <p class="text-4 text-color-white mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena.</p>
            </div>
        </div>

        <div id="portfolioLoadMoreWrapper" class="row portfolio-list sort-destination mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-sort-id="portfolio" data-total-pages="3" data-ajax-url="ajax/demo-architecture-interior-ajax-load-more-">

            <div class="col-lg-4 isotope-item">
                <div class="portfolio-item">
                    <a href="/" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/architecture-interior/projects/project-1.webp" class="img-fluid" alt="">
                                <span class="thumb-info-title text-start">
                                    <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3">Project Name</span>
                                    <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 isotope-item">
                <div class="portfolio-item">
                    <a href="demo-architecture-interior-projects-detail.html" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/architecture-interior/projects/project-2.webp" class="img-fluid" alt="">
                                <span class="thumb-info-title text-start">
                                    <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3">Project Name</span>
                                    <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-5">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 isotope-item">
                <div class="portfolio-item">
                    <a href="demo-architecture-interior-projects-detail.html" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear custom-thumb-info-style-1">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/architecture-interior/projects/project-3.webp" class="img-fluid" alt="">
                                <span class="thumb-info-title text-start">
                                    <span class="thumb-info-inner font-weight-bold line-height-1 text-4 mb-3">Project Name</span>
                                    <span class="thumb-info-type text-transform-none font-weight-light text-1 line-height-7 pe-xl-5 me-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. </span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

        </div>

        <div id="portfolioLoadMoreBtnWrapper" class="row">
            <div class="col text-center">

                <div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader" style="min-height: 61px;">
                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>

                <button id="portfolioLoadMore" class="btn btn-warning btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation text-color-white" data-appear-animation="fadeInUpShorter">LOAD MORE</button><a href="demo-architecture-interior-projects.html" class="btn btn-primary btn-outline ms-2 font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter">VIEW ALL</a>
            </div>
        </div>

    </div>
</section>

<section class="section section-parallax section-height-4 overlay overlay-show border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/architecture-interior/backgrounds/background-1.jpg" id="whyhireus">
    <div class="container container-xl-custom pb-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-6 text-center">
                <span class="text-color-primary custom-font-secondary font-weight-semibold">THE BEST CHOICE</span>
                <h2 class="text-color-light font-weight-bold pb-3 mb-3">Why Choose Us?</h2>
                <p class="font-weight-light text-color-light line-height-9 text-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena bibendum mex.</p>
            </div>
        </div>
    </div>
</section>

<div class="container container-xl-custom custom-negative-margin-top z-index-2 position-relative">
    <div class="row align-items-center justify-content-center">
        <div class="col-sm-6 col-lg-3 col-xl-2 order-2 order-xl-1 mb-4 mb-lg-0">
            <div class="card border-0 custom-box-shadow-1">
                <div class="card-body my-4 my-xl-5">
                    <div class="custom-content-rotator">
                        <div><img src="img/logos/logo-1.png" class="img-fluid" alt="" /></div>
                        <div><img src="img/logos/logo-2.png" class="img-fluid" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-xl-2 order-3 order-xl-2 mb-4 mb-lg-0">
            <div class="card border-0 custom-box-shadow-1">
                <div class="card-body my-4 my-xl-5">
                    <div class="custom-content-rotator">
                        <div><img src="img/logos/logo-3.png" class="img-fluid" alt="" /></div>
                        <div><img src="img/logos/logo-4.png" class="img-fluid" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-4 order-1 order-xl-3 mx-lg-5 mx-xl-0 mb-5">
            <div class="card border-0 custom-box-shadow-1">
                <div class="card-body text-center mt-4">
                    <div class="owl-carousel owl-theme nav-style-1 nav-dark custom-nav-size-1 mb-0" data-plugin-options="{'items':1, 'nav': true, 'dots': false}">
                        <div class="text-center px-5">
                            <span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">50</span>
                            <p class="text-4 custom-responsive-m-p-x">Projects made with total success</p>
                        </div>
                        <div class="text-center px-5">
                            <span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">12</span>
                            <p class="text-4 custom-responsive-m-p-x">Years in Business</p>
                        </div>
                        <div class="text-center px-5">
                            <span class="text-color-primary font-weight-bold custom-plus line-height-2 custom-text-size-1">15</span>
                            <p class="text-4 custom-responsive-m-p-x">Architects &amp; Interior Designs</p>
                        </div>
                    </div>
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#contactus" class="btn btn-dark btn-outline font-weight-extra-bold text-3 px-5 py-3 border-width-4 custom-btn-pos-1 custom-btn-style-1">GET A QUOTE</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-xl-2 order-4 order-xl-4 mb-4 mb-sm-0">
            <div class="card border-0 custom-box-shadow-1">
                <div class="card-body my-4 my-xl-5">
                    <div class="custom-content-rotator">
                        <div><img src="img/logos/logo-5.png" class="img-fluid" alt="" /></div>
                        <div><img src="img/logos/logo-6.png" class="img-fluid" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-xl-2 order-5 order-xl-5 mb-4 mb-sm-0">
            <div class="card border-0 custom-box-shadow-1">
                <div class="card-body my-4 my-xl-5">
                    <div class="custom-content-rotator">
                        <div><img src="img/logos/logo-7.png" class="img-fluid" alt="" /></div>
                        <div><img src="img/logos/logo-1.png" class="img-fluid" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section section-height-4 bg-dark border-0 mt-4 mb-0">
    <div class="container container-xl-custom">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme nav-style-1 nav-dark custom-nav-size-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-colored-quotes text-start ps-md-4 mb-0">
                            <blockquote>
                                <p class="text-color-white text-5 line-height-9 mb-0 custom-font-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur.</p>
                            </blockquote>
                            <div class="testimonial-author align-items-start text-start ps-5 ms-3">
                                <p class="text-start"><strong class="font-weight-extra-bold text-4 text-color-primary">- John Smith</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-colored-quotes text-start ps-md-4 mb-0">
                            <blockquote>
                                <p class="text-color-white text-5 line-height-9 mb-0 custom-font-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur.</p>
                            </blockquote>
                            <div class="testimonial-author align-items-start text-start ps-5 ms-3">
                                <p class="text-start"><strong class="font-weight-extra-bold text-4 text-color-primary">- Bob Doe</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-colored-quotes text-start ps-md-4 mb-0">
                            <blockquote>
                                <p class="text-color-dark text-5 line-height-9 mb-0 custom-font-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur.</p>
                            </blockquote>
                            <div class="testimonial-author align-items-start text-start ps-5 ms-3">
                                <p class="text-start"><strong class="font-weight-extra-bold text-4">- Rick Doe</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-colored-quotes text-start ps-md-4 mb-0">
                            <blockquote>
                                <p class="text-color-dark text-5 line-height-9 mb-0 custom-font-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur.</p>
                            </blockquote>
                            <div class="testimonial-author align-items-start text-start ps-5 ms-3">
                                <p class="text-start"><strong class="font-weight-extra-bold text-4">- Alex Doe</strong><span>Okler</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-height-4 border-0 m-0 bg-dark" id="ourteam">
    <div class="container container-xl-custom">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-6 text-center">
                <div class="overflow-hidden">
                    <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">THE PRO TEAM</span>
                </div>
                <div class="overflow-hidden mb-3">
                    <h2 class="text-color-white font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Team</h2>
                </div>
                <p class="font-weight-light text-color-white line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing eli blandit massa im. Nullam id varius nunc. Vivamus bibendum mex, et faucibus lacus venena. </p>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
                    <div class="card border-0 custom-box-shadow-1">
                        <svg class="custom-square-1 z-index-0" width="80" height="80">
                            <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                        </svg>
                        <img class="card-img-top z-index-1" src="img/team/team-2.jpg" alt="" />
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0 text-color-primary">Michel Doe</h4>
                            <p class="card-text">CEO & Founder</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
                    <div class="card border-0 custom-box-shadow-1">
                        <svg class="custom-square-1 z-index-0" width="80" height="80">
                            <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                        </svg>
                        <img class="card-img-top z-index-1" src="img/team/team-4.jpg" alt="" />
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0 text-color-primary">Jessica Doe</h4>
                            <p class="card-text">Architect</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
                    <div class="card border-0 custom-box-shadow-1">
                        <svg class="custom-square-1 z-index-0" width="80" height="80">
                            <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                        </svg>
                        <img class="card-img-top z-index-1" src="img/team/team-5.jpg" alt="" />
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0 text-color-primary">John Doe</h4>
                            <p class="card-text">Architect</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="ajax/demo-architecture-interior-ajax-team-detail.html" class="text-decoration-none simple-ajax-popup">
                    <div class="card border-0 custom-box-shadow-1">
                        <svg class="custom-square-1 z-index-0" width="80" height="80">
                            <rect width="80" height="80" fill="none" stroke-width="13" stroke="#000" />
                        </svg>
                        <img class="card-img-top z-index-1" src="img/team/team-6.jpg" alt="" />
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold line-height-3 text-4 mb-0 text-color-primary">Alice Doe</h4>
                            <p class="card-text">Architect</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section section-height-4 bg-dark border-0 m-0" id="contactus">
    <div class="container container-xl-custom">
        <div class="row mb-5">
            <div class="col text-center">
                <span class="text-color-primary custom-font-secondary font-weight-semibold">GET IN TOUCH</span>
                <h2 class="text-color-light font-weight-bold mb-3">Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-xl-4 order-2 order-xl-1 mb-4 mb-lg-0">
                <div class="card custom-card-style-1 h-100">
                    <div class="card-body">
                        <a href="#" class="text-decoration-none">
                            <img src="img/demos/architecture-interior/logo.png" class="img-fluid pb-2 mt-3 mb-4" width="153" height="53" alt="Demo Architecture & Interior Design" />
                        </a>
                        <h3 class="text-color-primary font-weight-bold text-transform-none text-8 line-height-1 pe-5 mb-4">Interior Design & Archtecture</h3>
                        <ul class="list list-icons list-icons-sm">
                            <li class="text-color-light font-weight-light">
                                <i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Address:</strong> 1234 Street Name, City Name
                            </li>
                            <li class="text-color-light font-weight-light">
                                <i class="fas fa-angle-right custom-text-color-grey-1"></i> <strong class="font-weight-normal">Email:</strong><a href="mailto:mail@example.com" class="link-hover-style-1 ms-1"> mail@example.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-4 order-1 order-xl-2 mb-4 mb-xl-0">
                <div class="card custom-card-style-1 h-100 opacity-10 py-lg-5 py-xl-0" data-appear-animation="customBorderColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -500}">
                    <div class="card-body d-flex justify-content-center flex-column text-center">
                        <span class="text-color-light text-4 mb-3">CALL US NOW</span>
                        <a href="tel:+1234567890" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-11 opacity-10" data-appear-animation="customTextColored" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">1-800-123-4567</a>
                        <a href="tel:+1234567890" class="text-decoration-none text-color-light font-weight-bold line-height-2 text-9">1-800-123-4568</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 order-3">
                <div class="card custom-card-style-1 h-100">
                    <div class="card-body pt-5">

                        <form class="contact-form form-style-4 form-errors-light" action="php/contact-form.php" method="POST">
                            <input type="hidden" value="Contact Form" name="subject" id="subject">
                            <div class="form-group col-lg-12 ms-auto my-0">
                                <div class="contact-form-success alert alert-success d-none">
                                    Message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none">
                                    Error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Name" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="E-mail" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Message" name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <input type="submit" value="Send Message" class="btn btn-primary text-2 font-weight-bold text-uppercase btn-px-5 py-3 position-absolute text-color-white" data-loading-text="Loading..." style="bottom: -30px; right: 25px;">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="bg-dark border-width-1 custom-border-color-grey py-5 mt-0">
    <div class="container container-xl-custom">
        <div class="row justify-content-between">
            <div class="col-auto">
                <ul class="social-icons social-icons-clean social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-auto text-end">
                <p class="text-color-light font-weight-light opacity-8 mb-0">Copyrights ?? {{ date('Y') }} All Rights Reserved by Okler</p>
            </div>
        </div>
    </div>
</footer>
@endsection