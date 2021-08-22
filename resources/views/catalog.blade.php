@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('tagline')
    <section class="tagline">
      <div id="top">
            <h1>Режим просмотра</h1>
            <!-- <h3>это образ жизни!</h3> -->
      </div>
    </section>
@endsection

@section('nav-chain')
  @parent
  <span>Каталог</span>
@endsection

@section('content')
	
	@foreach($data as $el)
		<div class="item">
			<h3>{{ $el->id }}</h3>
			<h3>{{ $el->price }}</h3>
			<h3>{{ $el->year }}</h3>
		</div>


		<figure class="product_item">
			<div class="product_item_pict">
				<a href="#">
					<img src="images/one-no-image.jpg" alt="BMW X3 2.0d" title="**BMW X3 2.0d**"/>
				</a>
			</div>
			<figcaption>
				<h3><a href="#">{{ $el->mark }} {{ $el->model }}</a></h3>
<!-- 				<span class="product_item_price dark_grey old_price">**3 230 000 руб.**</span> -->
				<p class="product_item_price dark_grey">{{ $el->price }}.</p>

			</figcaption>
		</figure>
	@endforeach
@endsection
