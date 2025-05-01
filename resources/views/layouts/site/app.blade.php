<!DOCTYPE html>
<html lang="en">
@include('layouts.site.header')
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="{{ $settings->facebook }}"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="{{ $settings->linkedin }}"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="mailto:{{ $settings->gmail }}"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="{{ $settings->instagram }}"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="{{ $settings->github }}"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle" >Hello, I am</h4>
                <h1 class="header-title">{{ $settings->name }}</h1>
                <h6 class="header-mono" >{{ $settings->position }}</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
            </div>
        </div>
    </header>
    @include('layouts.site.navbar')
    
    @yield('content')

    {{-- footer --}}
    @include('layouts.site.footer')
    

	<!-- core js -->
    @include('layouts.site.scripts')

</body>
</html>
