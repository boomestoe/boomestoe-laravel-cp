<!-- Foter -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="about widget clearfix">
                    <div class="logo-wrap">
                            <a href="index.html">Bappeda</a>
                        </div>
                        <p>Komplek Pusat Perkantoran dan Perumahan Pemerintah Provinsi Kepulauan Bangka Belitung <br>
                           <small>Jl. Pulau Belitung No.2, Kelurahan Airitam, <br>Telp. (0717) 439336 Fax. (0717) 439335 <br> PANGKALPINANG - 33148</small></p>
                        <div class="social-media-icons">
                            <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                            <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            <a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>

                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 ">
                <div class="quick-links widget clearfix">
                    <h4 class="title">Quick Links</h4>
                    <div class="links">
                        <a href="#"><i class="fa fa-angle-double-right"></i>About Us</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i>Forum</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i>Terms and Conditions</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i>Privacy Policy</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i>Blog</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i>Campains</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="tags-outer widget clearfix">
                    <h4 class="title">Tags</h4>
                    <div class="tags">
                        <a href="#"><span>Cause</span></a>
                        <a href="#"><span>Lipsum</span></a>
                        <a href="#"><span>Donation</span></a>
                        <a href="#"><span>Charitable</span></a>
                        <a href="#"><span>Homeless</span></a>
                        <a href="#"><span>Blog</span></a>
                        <a href="#"><span>Minimal</span></a>
                        <a href="#"><span>Health</span></a>
                        <a href="#"><span>Education</span></a>
                        <a href="#"><span>LifStyle</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="subcribe widget clearfix">
                    <h4 class="title">Subscribe</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate provident amet reprehenderit!</p>
                    <form action="#">
                        <div class="field">
                            <input type="email" name="e-mail" placeholder="Your E-mail">
                        </div>
                        <div class="field">
                            <button class="btn btn-min btn-solid"><span>Subscibe</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <h5><?php echo date('Y');?> © copyright by <a href="#" target="_blank">Bappeda</a> - All Rights Reserved</h5>
        </div>
    </div>
</footer>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/jquery.meanmenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/progress-bar-appear.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/nivo-lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/countdown.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBEypW1XtGLWpikFPcityAok8rhJzzWRw "></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/gmaps.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontEnd/assets/js/js.js')}}"></script>
    <script>
    $(function () {
        $('.single-slider','.slider-screen').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
        });
    })
    </script>

{{-- section-footer --}}
@section('footer')
    @show