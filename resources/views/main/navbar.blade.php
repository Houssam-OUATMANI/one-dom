<!--=====================================
        NAVBAR PART START
=======================================-->
<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content">
            <a class="navbar-logo" href="{{ route('home') }}"><img src="{{ asset('images/onedom.png') }}" alt="logo"></a>
            <button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>

            <div class="navbar-slide">
                <a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>

                <ul class="navbar-list">
                    <li class="navbar-item active"><a class="navbar-link" href="{{ route('home') }}">Acceuil</a></li>
                    <li class="navbar-item navbar-dropdown">
                        <a class="navbar-link dropdown-indicator" href="#my_services">
                            <span>Services</span>
                            <i class="fas fa-plus"></i>
                        </a>
                
                    </li>
                    <li class="navbar-item navbar-dropdown">
                        <a class="navbar-link dropdown-indicator" href="#about_us">
                            <span>A propos</span>
                            <i class="fas fa-plus"></i>
                        </a>
                    </li>
                    
                </ul>

                <div class="navbar-btn">
                    <a class="btn btn-inline" href="#contact_us">
                        <i class="fas fa-user"></i>
                        <span>Contactez nous</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--=====================================
            NAVBAR PART END
=======================================-->