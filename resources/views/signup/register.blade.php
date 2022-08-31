@include('signup.header')
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="8f1b8cf0b3613fb15c2e501c-|49"></script>

<body class="hold-transition sidebar-collapse layout-top-nav" onload=document.getElementById("noti_popup").click()>
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md nav-header mb-4">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"
                            style="text-shadow: 2px 2px 2px #000000;color: #fff;"></i></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link menu-header "
                                style="font-size: x-large;text-shadow: 0 0 10px #008885, 0 0 20px #69e0ff, 0 0 40px #69e0ff;">shopgenshin.com</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link menu-header "><i class="ficon fa-lg fa fa-home"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="nav-link dropdown-toggle menu-header ">Nạp tiền</a>
                            <ul class="dropdown-menu border-0 shadow" style="left: 0px; right: inherit;">
                                <li><a href="https://shopgenshin.com/user/money/phone-card/send-card"
                                        class="dropdown-item "><i class="fas fa-money-check-alt mr-1"></i> Nạp bằng thẻ
                                        cào</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="https://shopgenshin.com/user/money/auto-bank/info" class="dropdown-item"><i
                                            class="fas fa-university mr-1"></i> Nạp bằng bank, ví</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#recharge_service" class="nav-link menu-header">Nạp Game</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://shopgenshin.com/genshin/acc/my-acc" class="nav-link menu-header ">Lịch Sử
                                Mua</a>
                        </li>
                    </ul>
                    <div class=" navbar-nav" style="position: absolute;right: 35px;">
                        <li class="nav-item">
                            <a href="register" class="nav-link"><button
                                    class="btn-pretty">Đăng ký</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="login" class="nav-link" style="padding-left: unset"><button
                                    class="btn-pretty">Đăng nhập</button></a>
                        </li>
                    </div>
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"
                    style="position: absolute;right: 35px;">
                </ul>
            </div>
        </nav>

        <main>
            <section class="content">
                <div class="container-fluid">
                    <center><img src="https://uploadstatic-sea.mihoyo.com/contentweb/20200319/2020031919242255224.png"
                            class="city__icon"></center>
                    <h1 class="guide__title" style="margin-bottom: 72px;"></h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Register shopgenshin.com</div>
                                    <div class="card-body">
                                        @include('alert')
                                        <form method="POST" action="register">
                                            <input type="hidden" 
                                                value="NT78Mm7qRYdPPSvBDpD4b8huEHK4dAYAAO0P7Q58">
                                            <div class="form-group row">
                                                <label for="full_name"
                                                    class="col-md-4 col-form-label text-md-right">Họ và tên</label>
                                                <div class="col-md-6">
                                                    <input id="full_name" type="text" class="form-control "
                                                        name="full_name" value="{{old('full_name') }}" required
                                                        placeholder="Tên này công khai, người khác có thể thấy"
                                                        autocomplete="name" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="login_name"
                                                    class="col-md-4 col-form-label text-md-right">Tên đăng nhập</label>
                                                <div class="col-md-6">
                                                    <input id="login_name" type="text" class="form-control "
                                                        name="login_name" value="{{old('login_name') }}" required autocomplete="name"
                                                        autofocus placeholder="Giữ bí mật, không điền giống bên trên">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label text-md-right">Số
                                                    điện thoại</label>
                                                <div class="col-md-6">
                                                    <input id="phone" type="text" class="form-control "
                                                        name="phone" value="{{old('phone') }}" required
                                                        placeholder="Chính xác để lấy lại mật khẩu nếu quên">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">Địa chỉ email</label>
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control "
                                                        name="email" value="{{old('email') }}" required
                                                        placeholder="Chính xác để lấy lại mật khẩu nếu quên"
                                                        autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">Mật khẩu</label>
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control "
                                                        name="password" required placeholder="Điền tối thiểu 8 ký tự"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password-confirm"
                                                    class="col-md-4 col-form-label text-md-right">Xác nhận mật
                                                    khẩu</label>
                                                <div class="col-md-6">
                                                    <input id="password_confirm" type="password" class="form-control"
                                                        name="password_confirmation" required
                                                        placeholder="Nhập lại mật khẩu giống bên trên"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-4 mb-3">

                                                <script src="https://www.google.com/recaptcha/api.js" async defer type="8f1b8cf0b3613fb15c2e501c-text/javascript"></script>
                                                <div class="g-recaptcha" id="feedback-recaptcha"
                                                    data-sitekey="6LfJo3whAAAAAMU3IEn9u0S08lWg3zZjdx0rvAnU"></div>

                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Đăng ký
                                                    </button>
                                                    <a href="login" class="btn btn-light">Đăng nhập</a>
                                                </div>
                                            </div>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="mt-5 p-3"
                        style="background: rgb(27 25 60 / 58%);color: #fff; margin-right: -6px; margin-left: -8px">
                        <div class="container-lg">
                            <h2 class="guide__title mt-3">
                                <span style="font-size: xx-large;font-family: cursive;"
                                    class="link-active">shopgenshin.com</span>
                            </h2>
                            <div class="row">
                                <section class="col-12 col-lg-4">
                                    <div class="h h4 link-active">Về shopgenshin.com</div>
                                    <p>Shop mua bán acc Genshin Impact lớn nhất Việt Nam !</p>
                                    <p>Shop Genshin Impact rẻ nhất và uy tin nhất!<br></p>
                                    <p>Dịch vụ : Mua Bán - Nạp Game - Uy Tín</p>
                                    <p class="mt-3 small">© shopgenshin.com</p>
                                </section>
                                <section class="col-12 col-lg-4">
                                    <div class="h h4 link-active">Chúng tôi</div>
                                    <p class="m-0">
                                    <p>Làm việc tận tâm hỗ trợ khách hàng nhiệt tình nhất có thể !</p>
                                    </p>
                                </section>
                                <section class="col-12 col-lg-4">
                                    <i class="fab fa-facebook-square fa-2x mr-2"></i>
                                    <i class="fab fa-youtube fa-2x"></i>
                                    <p class="mt-3 fw-bold"><i class="fa fa-phone mr-2"></i>Hotline: 0777.599.666</p>
                                    <p class="fw-bold"><i class="fa fa-clock mr-2"></i>Work time: 8h Sáng - 24h Tối
                                    </p>
                                    <p class="m-0"></p>
                                </section>
                            </div>
                        </div>
                    </footer>
                </div>
            </section>
        </main>
    </div>


@include('signup.footer')