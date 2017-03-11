<header class="mdl-layout__header">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">@yield('nav-title')</span>
        <div class="mdl-layout-spacer"></div>
        <a href="/home"><i class="material-icons" style="margin-right: 14px">home</i></a>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="waterfall-exp">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" name="sample"
                       id="waterfall-exp">
            </div>
        </div>
        <div id="cart_badge" class="material-icons mdl-badge mdl-badge--overlap" style="margin-right: 20px; margin-left: 25px" data-badge="1">shopping_cart</div>
        <button id="account" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">account_circle</i>
        </button>

    </div>
    <!-- Bottom row, not visible on scroll -->
    {{--<div class="mdl-layout__header-row">--}}
    {{--<div class="mdl-layout-spacer"></div>--}}
    {{--<!-- Navigation -->--}}
    {{--<nav class="mdl-navigation ">--}}
    {{--<a class="mdl-navigation__link" href="">Home</a>--}}
    {{--<a class="mdl-navigation__link" href="">Link</a>--}}
    {{--<a class="mdl-navigation__link" href="">Contact</a>--}}
    {{--<a class="mdl-navigation__link" href="">About Us</a>--}}
    {{--<div class="material-icons mdl-badge mdl-badge--overlap" style="margin-right: 20px; margin-left: 25px" data-badge="1">add_shopping_cart</div>--}}
    {{--<button id="account" class="mdl-button mdl-js-button mdl-button--icon">--}}
    {{--<i class="material-icons">account_circle</i>--}}
    {{--</button>--}}
    {{--</nav>--}}
    {{--</div>--}}
</header>
    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
        for="demo-menu-lower-right">
        <li class="mdl-menu__item">Profile</li>
        <li class="mdl-menu__item">Log Out</li>
        <li class="mdl-menu__item">Login_with_facebok</li>
        <li class="mdl-menu__item">Login with Google</li>
    </ul>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Categories</span>
        <nav class="mdl-navigation">
            <ul class="collapsibleList mdl-list">
                <li>
                    <span class="mdl-navigation__link mdl-list__item">Link</span> {{--parent item--}}
                    <ul class="mdl-list">
                        {{--child items--}}
                        <li><a class="mdl-navigation__link mdl-list__item" href="#">Link</a></li>
                        <li><a class="mdl-navigation__link mdl-list__item" href="">Link</a></li>
                        <li><a class="mdl-navigation__link mdl-list__item" href="">Link</a></li>
                        <li><a class="mdl-navigation__link mdl-list__item" href="">Link</a></li>
                        <li><a class="mdl-navigation__link mdl-list__item" href="">Link</a></li>
                    </ul>
                </li>
            </ul>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>