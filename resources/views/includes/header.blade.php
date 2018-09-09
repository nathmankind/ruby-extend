<header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="assets/images/rubylogo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse title-color" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" style="color: #6b95e0;">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/activities')}}">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('volunteer')}}">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact" href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>