<div class="contain">
    <header>
        <div class="part1">
            <div class="logo">
                <img src="img/world.svg">
                <div class="logo-text">World&travel</div>
            </div>
            <nav>
                <a class="menu-btn" href="{{route ('tour')}}">Тури</a>
                <a class="menu-btn" href="{{route ('cruise')}}">Круїзи</a>
                <a class="menu-btn" href="{{route ('sale')}}">Акції</a>
                <a class="menu-btn" href="{{route ('about')}}">Про нас</a>
                <a class="menu-btn" href="#">Контакти</a>
            </nav>
        </div>
        <div class="login-buttons">
            @guest
                <a class="btn login" href="{{route ('login')}}">Увійти</a>
                <a class="btn sign-up" href="{{route ('register')}}">Зареєструватися</a>
            @endguest

            @auth
                    <a class="btn sign-up" href="{{route ('logout')}}">Вийти</a>
            @endauth
        </div>
        <div class="nav-menu">
            <a class="menu-burger">
                <svg width="27" height="34" viewBox="0 0 27 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path d="M25.2693 6.10262H1.73079C0.774668 6.10262 0 5.12712 0 3.92317C0 2.71923 0.774668 1.74365 1.73079 1.74365H25.2693C26.2253 1.74365 27 2.71916 27 3.92317C27 5.12718 26.2253 6.10262 25.2693 6.10262Z" fill="#2B1B19"/>
                        <path d="M15.5769 19.1796H1.73079C0.774668 19.1796 0 18.204 0 17.0001C0 15.7961 0.774668 14.8206 1.73079 14.8206H15.5769C16.533 14.8206 17.3077 15.7961 17.3077 17.0001C17.3077 18.2041 16.533 19.1796 15.5769 19.1796Z" fill="#2B1B19"/>
                        <path d="M25.2693 19.1796H22.5001C21.544 19.1796 20.7693 18.2041 20.7693 17.0001C20.7693 15.7961 21.544 14.8206 22.5001 14.8206H25.2693C26.2254 14.8206 27.0001 15.7961 27.0001 17.0001C27.0001 18.2041 26.2254 19.1796 25.2693 19.1796Z" fill="#806764"/>
                        <path d="M25.2693 32.2565H1.73079C0.774668 32.2565 0 31.2809 0 30.077C0 28.873 0.774668 27.8975 1.73079 27.8975H25.2693C26.2253 27.8975 27 28.873 27 30.077C27 31.2809 26.2253 32.2565 25.2693 32.2565Z" fill="#2B1B19"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="27" height="34" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </header>
</div>
