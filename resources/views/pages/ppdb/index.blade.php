@extends('layouts.landingpage')

@section('content')
   
<!-- Star Faq
============================================= -->
<div class="faq-area default-padding">
    <div class="container">
        <div class="faq-items">
            <div class="row align-center">

                <div class="col-lg-6">
                    <div class="faq-content wow fadeInUp">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Where can I get analytics help?
                                    </h4>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How much does data analytics costs?
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What kind of data is needed for analysis?
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consectetur at, sunt maxime, quod alias ullam officiis, ex necessitatibus similique odio aut!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                        <img src="/landingPage/assets/img/illustration/17.png" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Faq -->

    <!-- Start Contact Area  
============================================= -->
<div id="contact" class="contact-us-area default-padding-bottom">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 address text-light">
                <div class="address-items wow fadeInUp">
                    <div class="item">
                        <h4>Office Location</h4>
                        <div class="info">
                            <p>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</p>
                        </div>
                    </div>
                    <div class="item">
                        <h4>Contact Info</h4>
                        <div class="info">
                            <ul>
                                <li>Phone: <span>+44-20-7328-4499</span></li>
                                <li>Fax: <span>+44-20-7328-4499</span></li>
                                <li>Email: <span>info@digilab.com</span></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 contact-form wow fadeInLeft">
                <h2>Still no luck? <strong>Let's ask your questions</strong></h2>
                <form action="/landingPage/assets/mail/contact.php" method="POST" class="contact-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group comments">
                                <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" name="submit" id="submit">
                                Send Message <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!-- End Contact -->
@endsection