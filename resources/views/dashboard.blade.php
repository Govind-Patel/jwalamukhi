@extends($layout)
@section('css')
<style>
.mySlides {
  display:none;
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5));
  height:600px;
}
.jumbotron {
    padding: 0rem 0rem !important;
}
.location:hover{
  text-decoration:none;
}
#overlay {
  position: absolute;
  display: block;
  width: 100%;
  height:600px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  background-color: rgba(0,0,0,0.5);
  cursor: pointer;
}

#text{
  position: absolute;
  top: 20%;
  left: 50%;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
.img-fluid{
  max-height:450px;
  height:450px;
}
</style>
@endsection
@section('js')
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@endsection
@section('main_section')
<section>  
<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative " style="margin-bottom: 0px;height:600px">
    <div class="w3-content w3-section" style="max-width:100%">
        <img class="mySlides" src="{{asset('img/1.jpeg')}}" style="width:100%;height:600px; ">
        <img class="mySlides" src="{{asset('img/2.jpeg')}}" style="width:100%;height:600px">
        <!-- <img class="mySlides" src="/img/header.jpg" style="width:100%;height:600px">  -->
       
        <!-- <div id="overlay" class="overlay-bottom">
          <center><div id="text"> <h1 class="text-white mt-5 mb-5">Maa Jwala Charitable Trust</h1></div></center>
      </div> -->
    </div>
     
    </div>  
  
    <!-- About Start -->
    <div class="container-fluid py-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/about.jpeg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6> -->
                        <h1 class="display-4">माँ ज्वालामुखी चैरिटेबल ट्रस्ट, पीलीभीत</h1>
                    </div>
                    <p>माँ ज्वालामुखी जी की स्थापना वर्ष 2019 में जिले के प्राचीन मंदिर श्री गोपाल मंदिर, मौहल्ला इनायतगंज, शहर व जिला पीलीभीत (उत्तर प्रदेश) पिन- 262001 में 8 दिसम्बर को ट्रस्ट के मुख्य ट्रस्टी श्री नीलेश चतुर्वेदी द्वारा की गई थी। माँ ज्वालामुखी की अष्टधातु की प्रतिमा माँ ज्वाला जी मंदिर हिमांचल प्रदेश से माँ ज्वाला जी की ज्योति के साथ लाकर श्री गोपाल मंदिर में स्थापित की गई थी। तब से प्रत्येक वर्ष माँ ज्वाला जी का ज्योति जागरण व गुणगान, भंडारा इत्यादि होता आ रहा है।</p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">123</h1>
                                <h6 class="text-uppercase text-white">Count<span class="d-block">1</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Count<span class="d-block">2</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">123</h1>
                                <h6 class="text-uppercase text-white">Count<span class="d-block">3</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                <h6 class="text-uppercase text-white">Count<span class="d-block">4</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid py-3">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">ट्रस्टीगण</h6> -->
                <h1 class="display-4">ट्रस्टीगण</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor1.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">नीलेश चतुर्वेदी</h5>
                        <p class="mb-2">मुख्य ट्रस्टी/अध्यक्ष</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor2.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">पंडित विकास मिश्रा</h5>
                        <p class="mb-2">ट्रस्टी</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor3.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">पंडित रमन मिश्रा</h5>
                        <p class="mb-2">ट्रस्टी</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor4.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">एडवोकेट पीयूष सक्सेना</h5>
                        <p class="mb-2">क़ानूनी सलाहकार</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor5.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">एडवोकेट राजेश शर्मा</h5>
                        <p class="mb-2">क़ानूनी सलाहकार</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{asset('img/instructor6.jpeg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">आचार्य शिवमोहन पाठक</h5>
                        <p class="mb-2">ट्रस्टी</p>
                        <!-- <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6> -->
                    <h1 class="display-4">कार्यक्रम तथा चित्र प्रदर्शनी</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{asset('img/course-3.jpeg')}}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">कोरोना काल में ट्रस्ट द्वारा की गई ग़रीबो को अन्न सेवा</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <!-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span> -->
                            <span class="text-white"><i class="fa fa-calendar mr-2"></i>02 मई 2022 <small></small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <!-- <a class="btn btn-primary" href="detail.html">Course Detail</a> -->
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{asset('img/course-4.jpeg')}}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">वार्षिक ज्योति जागरण श्री गोपाल मंदिर 2 मई 2022</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <!-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span> -->
                            <span class="text-white"><i class="fa fa-calendar mr-2"></i>02 मई 2022 <small></small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <!-- <a class="btn btn-primary" href="detail.html">Course Detail</a> -->
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{asset('img/course-5.jpeg')}}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">जागरण ज्योति</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <!-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span> -->
                            <span class="text-white"><i class="fa fa-calendar mr-2"></i>02 मई 2022 <small></small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <!-- <a class="btn btn-primary" href="detail.html">Course Detail</a> -->
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{asset('img/course-6.jpeg')}}" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">जागरण आरती फ़ोटो</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <!-- <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span> -->
                            <span class="text-white"><i class="fa fa-calendar mr-2"></i>02 मई 2022 <small></small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <!-- <a class="btn btn-primary" href="detail.html">Course Detail</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">30% Off For New Students</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-light border-0 px-3" style="height: 60px;">
                                        <option selected>Select A courses</option>
                                        <option value="1">courses 1</option>
                                        <option value="2">courses 1</option>
                                        <option value="3">courses 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Sign Up Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Courses End -->




    <!-- Testimonial Start -->
    <!-- <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-4">What Say Our Students</h1>
                    </div>
                    <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="map-image">
        <div class="container py-5 ">
            <div class="row align-items-center ">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5 " style="height: 450px;">
                        <a class="location" href="https://maps.apple.com/place?ll=28.627674,79.801092&q=Maa%20Jwala%20Charitable%20Trust&_ext=EiQpUB3gOq+gPEAxbhTIGEXzU0A5UB3gOq+gPEBBbhTIGEXzU0A%3D&t=m"><div class="d-flex align-items-center mb-5 ">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>हमारा पता</h4>
                                <p class="m-0">माँ ज्वालामुखी विराजमान श्री गोपाल मंदिर, मौहल्ला इनायतगंज, शहर व जिला पीलीभीत (उत्तर प्रदेश) पिन- 262001</p>
                            </div>
                        </div></a>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>हमें कॉल करें</h4>
                                <p class="m-0">+919458466666</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>हमे ईमेल करे</h4>
                                <p class="m-0">info@maajwala.org</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <!-- <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6> -->
                        <h1 class="display-4">संपर्क करें</h1>
                    </div>
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="नाम" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="ईमेल" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="विषय" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="संदेश" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">मेसेज भेजें</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


</section>

@endsection
