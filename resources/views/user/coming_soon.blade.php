@extends("user.layout.BasicApp")
@section("title","Coming soon")
@section("comingsoon")

    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Coming Soon Section Start -->
    <section class="coming-soon-section pt-0">
        <div class="bg-black"></div>
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-lg-5"></div>

                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="coming-box">
                        <div>
                            <div class="coming-title">
                                <h2>We are Coming Soon...</h2>
                            </div>
                            <p class="coming-text">We are currently working on an awesome new site. Stay tuned for
                                more information. Subscribe to our newsletter to stay updated on our progress.</p>

                            <div class="coming-timer" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                <ul class="d-flex justify-content-center">
                                    <li>
                                        <div class="counter">
                                            <div class="days">
                                                <h6></h6>
                                            </div>
                                            <p>Day</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="hours">
                                                <h6></h6>
                                            </div>
                                            <p>Hour</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="minutes">
                                                <h6></h6>
                                            </div>
                                            <p>Min</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div class="seconds">
                                                <h6></h6>
                                            </div>
                                            <p>Sec</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="coming-contain">
                                <div class="coming-form input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Your Email Address">
                                    <button class="coming-button">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection