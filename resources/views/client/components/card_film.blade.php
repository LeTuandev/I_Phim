<div class="row">
    @foreach ($films as $film)
        <div class="col-3 mb-4">
            <a href="#" class="text-decoration-none">
                <img src="{{ asset($film['thumbnail_url']) }}" alt="" class="w-100">
                <div class="d-flex align-items-center justify-content-between bg-white">
                    <div class="p-3 text-dark">{{ $film['title'] }}</div>
                    <div class="p-3 text-dark">{{ $film['premiere_date'] }}</div>
                </div>
            </a>
        </div>
    @endforeach
</div>
