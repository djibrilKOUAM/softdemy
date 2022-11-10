<!--  -->
<!-- loader  -->
<div class="loader_bg">
    <div class="loader">
        <img src="{{asset('assets/images/loading.gif')}}" alt="#" />
    </div>
</div>
<!-- end loader -->
<style>
.row{
    display: flex;
    justify-content: space-between;
}
</style>
<!-- header -->
<header>
<div class="header">
    <div class="header_top d_none1">
        <div class="container">
            <div class="row row">
                <div class="col-md-3">
                    <ul class="conta_icon ">
                        <li>
                            <a href="#"><i class="fa fa-phone"></i>Call us: 653 91 53 50</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="social_icon">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube" ></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                        {{-- <form action="#" >
                            <div class="select-box">
                                <label for="select-box1" class="label select-box1">
                                    <span class="label-desc">français</span>
                                </label>
                                <select id="select-box1" class="select">
                                    <option value="Choice 1">English</option>
                                    <option value="Choice 1">français</option>
                                </select>
                            </div>
                        </form> --}}
                            <span>Lun - Sam</span>
                            <span>7.00 - 21.30</span>
                </div>
                @guest
                <div class="col-md-3 row row-cols-auto">
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary px-4 select-box1">
                            <a href="{{route('login')}}">Login</a>
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-success select-box1">
                            <a href="{{route('register')}}">Register</a>
                        </button>
                    </div>
                </div>
                @else

                    @if (Auth::user()->role_id === 1)
                        <li class="inline-flex ">
                            <a href="{{route('index')}}" class="p-1 select-box1">
                                Tableau de bord
                            </a>
                        </li>
                    @endif
                    <li class="inline-flex ">
                        <a href="{{route('logout')}}" class="p-1 select-box1" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit(); ">
                            Se deconnectez
                        </a>
                    </li>
                    <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                    @csrf</form>
                @endguest

            </div>
        </div>
    </div>
    <div class="header_midil">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-3">
                    <ul class="conta_icon d_none1">
                        <li>
                            <a href="#">
                                <img src="{{asset('assets/images/email.png')}}" alt="#"/>
                                <span>info@softdemy.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/icon/logo.jpg')}}" width="20%" alt="#"/>
                </div>

            </div>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/formation">formations</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="/service">services</a>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="/nouvelle">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-4">
                    <div class="search">
                        <form action="#">
                            </i><input class="form_sea" type="text" placeholder="Search" name="search">
                            {{-- <button type="submit" class="seach_icon">
                                <i class="fa fa-search"></i>
                            </button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- end header -->
