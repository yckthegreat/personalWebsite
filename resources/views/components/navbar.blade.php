<nav class="navbar navbar-mobile">
    <div class="navbar-toggle">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24">
            <g>
                <rect class="menu-bar-1" width="18" height="2" transform="translate(3 6)"></rect>
                <rect class="menu-bar-2" width="18" height="2" transform="translate(3 11)"></rect>
                <rect class="menu-bar-3" width="18" height="2" transform="translate(3 16)"></rect>
            </g>
        </svg>
    </div>

    <div class="navbar-close hidden">
        @include('svgs.close-button')
    </div>

    <ul class="navbar-items hidden">
        <li class="navbar-item">
            <a href="/" class="hvr-underline-from-left"><span>Home</span></a>
        </li>
        <li class="navbar-item">
            <a href="/about-me" class="hvr-underline-from-left"><span>About Me</span></a>
        </li>
        <li class="navbar-item">
            <a href="/portfolio" class="hvr-underline-from-left"><span>Portfolio</span></a>
        </li>
        <li class="navbar-item">
            <a href="/random-things" class="hvr-underline-from-left"><span>Random Things</span></a>
        </li>
        <li class="navbar-item">
            <a href="/contacts" class="hvr-underline-from-left"><span>Contacts</span></a>
        </li>
    </ul>

    <div class="overlay hidden"></div>
</nav>