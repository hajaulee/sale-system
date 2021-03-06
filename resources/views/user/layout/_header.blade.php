<div>

<div class="wrap_header fixed-header2 trans-0-4">
    <!-- Logo -->
    <a href="/" class="logo">
        <img src="/user/images/icons/logo.png" alt="IMG-LOGO">
    </a>


    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/shop">Shop</a>
                </li>

                <li>
                    <a href="/cart">Cart</a>
                </li>

                <li>
                    <a href="/blog">Blog</a>
                </li>

                <li>
                    <a href="/about">About</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Header Icon -->
    <div class="header-icons">
        <a href="/profile" class="header-wrapicon1 dis-block">
            @if(Auth::guard('user')->user()->avatar)
                <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::guard('user')->user()->avatar)}}" class="header-icon1 rounded-circle" alt="ICON">
            @else
                <img src="/admin/images/avatar.jpg" class="header-icon1 rounded-circle" alt="ICON">
            @endif        </a>
        <a href="{{route('user.logout')}}" class="link-color">Logout</a>

        <span class="linedivide1"></span>

    </div>
</div>
<!-- Header -->
    <header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2">
        <div class="topbar2">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <!-- Logo2 -->
            <a href="/" class="logo2">
                <img src="/user/images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <div class="topbar-child2">
					<span class="topbar-email">
						Hello <strong>{{Auth::guard('user')->user()->name}}</strong>
					</span>

                {{--<div class="topbar-language rs1-select2">--}}
                    {{--<select class="selection-1" name="time">--}}
                        {{--<option>USD</option>--}}
                        {{--<option>EUR</option>--}}
                    {{--</select>--}}
                {{--</div>--}}

                <!--  -->
                <a href="/profile" class="header-wrapicon1 dis-block m-l-30">
                    @if(Auth::guard('user')->user()->avatar)
                    <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::guard('user')->user()->avatar)}}" class="header-icon1 rounded-circle" alt="ICON">
                    @else
                    <img src="/admin/images/avatar.jpg" class="header-icon1 rounded-circle" alt="ICON">
                        @endif
                </a>

                <a href="{{route('user.logout')}}" class="link-color">Logout</a>
                <span class="linedivide1"></span>
            </div>
        </div>

        <div class="wrap_header">

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li>
                            <a href="/shop">Shop</a>
                        </li>

                        <li>
                            <a href="/cart">Cart</a>
                        </li>

                        <li>
                            <a href="/blog">Blog</a>
                        </li>


                        <li>
                            <a href="/about">About</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/" class="logo-mobile">
            <img src="/user/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::guard('user')->user()->avatar)}}" class="header-icon1" alt="ICON">
                </a>

                <a href="{{route('user.logout')}}" class="link-color">Logout</a>

                <span class="linedivide2"></span>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Home</a>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="/shop">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/cart">Cart</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/blog">Blog</a>
                </li>



                <li class="item-menu-mobile">
                    <a href="/about">About</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
</div>



