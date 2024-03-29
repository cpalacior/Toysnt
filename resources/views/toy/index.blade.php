@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container my-4">
    @include('layouts.alerts')
    <div class="card-group">
        @foreach ($viewData['toys'] as $toy)
        <div class="col-md-4 col-lg-3 mb-2 mt-1">
            <div class="card index-card h-100">
                <img src="{{ URL::asset('storage/'.$toy->getImage()) }}" class="card-img-top index-image" alt="{{ $toy->getName() }}">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="{{ route('toy.show', ['id'=> $toy->getId()]) }}" id="card-title">{{ $toy->getName() }}</a></h5>
                    <h6 class="card-subtitle card-price">${{ $toy->getPrice() }}</h6>
                    @if ($toy->getStock() == 0)
                    <div class="p-4 mb-4">
                        <small><b>@lang('app.toy.out_of_stock')</b></small>
                    </div>
                    @else
                    <h6 class="card-subtitle mt-1"><small><b>@lang('app.toy.stock'):</b> {{ $toy->getStock() }}</small></h6>
                    @livewire('cart.cart-management', ['type' => 'toy', 'id' => $toy->getId()])
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection