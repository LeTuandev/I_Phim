<div class="row list-film">
    <div class="col-12 list-film__title">
        <span>{{ $title }}</span>
    </div>
</div>
@include('client.components.card_film', [
    'films' => config('const.card_film')
])
