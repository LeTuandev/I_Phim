<div class="header">
    <div class="header__left">
        <img src="{{ asset('assest/img/LOGO.svg') }}" alt="logo" class="me-4">
        <form action="" method="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tên phim" aria-label="Recipient's username" aria-describedby="basic-addon2" id="search">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
            </div>
        </form>
    </div>
    <div class="header__right">
        <a href="#">Giá vé</a>
        <a href="#">Phim sắp chiếu</a>
        <a href="#">Phim đang chiếu</a>
        <a href="#">Phim tháng 5/2023</a>
        <a href="#">Rạp</a>
    </div>
    <button class="humburger-menu">
        <i class="bi bi-list"></i>
        <i class="bi bi-x d-none"></i>
    </button>
</div>

<nav>
    <ul>
        <form action="" method="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tên phim" aria-label="Recipient's username" aria-describedby="basic-addon2" id="search">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
            </div>
        </form>
        <li><a href="#">Giá vé</a></li>
        <li><a href="#">Phim đang chiếu</a></li>
        <li><a href="#">Phim sắp chiếu</a></li>
        <li><a href="#">Phim chiếu rạp tháng 5/2022</a></li>
        <li><a href="#">Rạp</a></li>
    </ul>
</nav>

@section('js')
<script>
    $(document).ready(function () {
        $('#basic-addon2').on('click', function () {
            $('#search').focus();
        })

        $('.humburger-menu').on('click', function () {
            $('nav').toggle();
            $(this).find('.bi-list').toggleClass('d-none');
            $(this).find('.bi-x').toggleClass('d-none');
        })
    })
</script>
@endsection
