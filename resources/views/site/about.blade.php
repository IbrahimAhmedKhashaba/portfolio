<div class="container-fluid">
    <div id="about" class="row about-section">
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Who am I ?</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">A Web Designer / Developer Located In Our Lovely Earth</h5>
            <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.sit amet, Qui deserunt consequatur
                fugit repellendusillo voluptas?</p>
            <a target="_blank" href="{{ asset('uploads/settings/' . $settings->cv) }}" class="btn btn-outline-danger"><i
                    class="icon-down-circled2 "></i>Download My CV</a>
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Personal Info</h3>
            <span class="line mb-5"></span>
            <ul class="mt40 info list-unstyled">
                <li><span>Birthdate</span> : {{ $settings->birthdate }}</li>
                <li><span>Email</span> : {{ $settings->email }}</li>
                <li><span>Phone</span> : {{ $settings->phone }}</li>
                <li><span>Address</span> : {{ $settings->address }}</li>
            </ul>
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="{{ $settings->facebook }}"><i class="ti-facebook"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="{{ $settings->linkedin }}"><i class="ti-linkedin"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="mailto:{{ $settings->gmail }}"><i class="ti-google"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="{{ $settings->instagram }}"><i class="ti-instagram"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="{{ $settings->github }}"><i class="ti-github"
                            aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>
            @foreach ($expertise as $exp)
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="{{ $exp->icon }}"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>{{ $exp->title }}</h6>
                        <p class="subtitle">{{ $exp->desc }}</p>
                        <hr>
                    </div>
                </div>
            @endforeach
            {{-- <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>UX Design</h6>
                    <p class="subtitle"> exercitat Repellendus,  corrupt.</p>
                    <hr>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Web Development</h6>
                    <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>Digital Marketing</h6>
                    <p class="subtitle">voluptate commodi illo voluptatib.</p>
                    <hr>
                </div>
            </div> --}}
        </div>
    </div>
</div>
