@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('content')

		<section class="content">
			<div class="advert">
				<div class="banner">
				<img src="../../images/banner_mercedes_c.jpg" alt="" title="" />
					<div class="banner_content">
						<h1>Новый Mercedes C-класс</h1>
						<h3></h3>
						<h2>Подчеркнуто динамичный характер. С легкостью преодолевает любые трудности. Откройте для себя превосходные качества нового седана C-класса. Динамичного, элегантного и роскошного как никогда <a href="/detail/1" class="detail_link">подробнее</a><!-- <a href="#1" class="detail_link">подробнее</a> --></h2>
					</div>
				</div>
			</div>
			<h2 class="push_right">Подборка недели</h2>

			<section class="product_line">
    		<div id="catalog">
          @foreach($data as $el)
            <figure class="product_item">
              <div class="product_item_pict">
                <a href="/detail/{{ $el->id }}">
                  <img src="../../images/{{ filePictureName($el) }}.jpg" alt="BMW X3 2.0d" title="**BMW X3 2.0d**"/>
                </a>
              </div>
              <figcaption>
                <h3><a href="#">{{ $el->mark }} {{ $el->model }}</a></h3>
<!--              <span class="product_item_price dark_grey old_price">**3 230 000 руб.**</span> -->
                <p class="product_item_price dark_grey">{{ $el->price }}.</p>
              </figcaption>
            </figure>
          @endforeach
        </div>
      </section>


	</section>
@endsection
