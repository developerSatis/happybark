@extends('frontend.mainlayout')

@section('css')

@endsection

@section('content')


<!--breadcrumb start-->
<section class="theme-breadcrumb">
    <nav aria-label="breadcrumb">
        <div>
            <h2 class="text-center">CONTACT</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CONTACT</li>
            </ol>
        </div>
    </nav>
</section>
<!--breadcrumb end-->


<!--contact start-->
<section class="contact-page section-b-space common-bg">
    <ul class="common-decor">
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="circel"></li>
        <li class="plus"></li>
        <li class="plus"></li>
    </ul>
    <div class="container auth-page">
        <div class="row">
            <div class="col-lg-7 map">
                <div class="common-card">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1605.811957341231!2d25.45976406005396!3d36.3940974010114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550912388321"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-right common-card">
                    <ul>
                        <li>
                            <div class="contact-icon"><i class="fa fa-phone"></i>
                                <h6>Contact Us</h6>
                            </div>
                            <div class="media-body">
                                <p>+91 123 - 456 - 7890</p>
                                <p>+86 163 - 451 - 7894</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h6>Address</h6>
                            </div>
                            <div class="media-body">
                                <p>ABC Complex,Near xyz, New York</p>
                                <p>USA 123456</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-envelope-o"></i>
                                <h6>Address</h6>
                            </div>
                            <div class="media-body">
                                <p>Support@Shopcart.com</p>
                                <p>info@shopcart.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                <h6>Fax</h6>
                            </div>
                            <div class="media-body">
                                <p>Support@Shopcart.com</p>
                                <p>info@shopcart.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="theme-card">
                    <form class="theme-form">
                        <div >
                            <div class="row">
                              <div class="col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                       required="">
                              </div>
                              <div class="col-md-6">
                                  <label for="email">Last Name</label>
                                  <input type="text" class="form-control" id="last-name" placeholder="Enter Your Last name" required="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="review">Phone number</label>
                                  <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                         required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="review">Write Your Message</label>
                            <textarea class="form-control" placeholder="Write Your Message"
                                      id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn_dark" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact ends-->


@endsection

@section('js')
@endsection