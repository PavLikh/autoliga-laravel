@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('tagline')
  @parent
    <section class="tagline">
      <div id="top">
            <h1>Режим просмотра</h1>
            <!-- <h3>это образ жизни!</h3> -->
      </div>
    </section>
@endsection

@section('nav-chain')
  	@parent
  	<span>Каталог </span><span class="nav_arrow inline-block">></span><span> {{ $data->mark }} {{ $data->model }}</span>
@endsection

@section('content')
	<section class="content">
		<pre>
			<?print_r($data); ?>
		</pre>
			<h1 class="">{{ $data->mark }} {{ $data->model }}</h1>
			<figure class="product_detail">
			<figcaption>
				<div class="product-photo">
					<div class="main_photo">
						<img class="" src="../../images/{{ filePictureName($data) }}.jpg">
					</div>
				</div>
				<div class="discount">

					
				</div>
				<div class="price_block">
					<p class="product_item_price"><b class="orange">{{ $data->price }}</b> руб.
					<span class="product_item_price old_price"></span></p>
				</div>
				<div class="slide_box">
					<h3 class=" slide_panel show">Параметры
					</h3>
					<div class="slide_block" style="display:block">
						<table class="features">
							<tr>
								<td><div><span>Двигатель:</span></div></td>
								<td>{{ $data->engine }}, {{ $data->volume }}, {{ $data->power }} л.с.</td>
							</tr>
							<tr>
								<td><div><span>КПП:</span></div></td>
								<td>{{ $data->transmission }}</td>
							</tr>
							<tr>
								<td><div><span>Привод:</span></div></td>
								<td>{{ $data->drive }}</td>
							</tr>
							<tr>
								<td><div><span>Год выпуска:</span></div></td>
							<td>{{ $data->year }}</td>
							</tr>
							<tr>
								<td><div><span>Цвет:</span></div></td>
								<td>{{ $data->color }}</td>
							</tr>
							<tr>
								<td><div><span>Кузов:</span></div></td>
								<td>{{ $data->body }}</td>
							</tr>
							<td>
								<div><span>Салон:</span></div></td>
								<td><a href='/stores/{{ $data->store_id }}'><b>{{ $data->store }}</b></a></td>
							</tr>
							
						</table>
					</div>
				</div>

								
			</figcaption>
			</figure>

		</section>
@endsection