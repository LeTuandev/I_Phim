@extends('client.layouts.index')

@section('title', 'comming soon')

@push('css')
    @vite(['resources/sass/client/comming_soon.scss'])
@endpush

@section('content')
    @include('client.comming-soon.box-film', [
            'title' => 'Phim Sắp Chiếu'
        ])
@endsection
