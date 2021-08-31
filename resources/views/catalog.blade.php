@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('nav-chain')
  	@parent
  	<span>Каталог</span>
@endsection

@section('content')
<section>
<!-- {{ url()->current() }} -->
<!-- {{ Route::current()->getName() }} -->



	<div id="catalog">
	@foreach($data as $el)
		<figure class="product_item">
			<div class="product_item_pict">
				<a href="/detail/{{ $el->id }}">
					<img src="../../images/{{ filePictureName($el) }}.jpg" alt="{{ $el->mark }} {{ $el->model }}" title="{{ $el->mark }} {{ $el->model }}"/>
				</a>
			</div>
			<figcaption>
				<h3><a href="#">{{ $el->mark }} {{ $el->model }}</a></h3>
<!-- 				<span class="product_item_price dark_grey old_price">**3 230 000 руб.**</span> -->
				<p class="product_item_price dark_grey">{{ $el->price }}.</p>
			</figcaption>
		</figure>
	@endforeach
	</div>
</section>
@endsection
