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

@section('content')

		<section class="content">
			<div class="advert">
				<div class="banner">
				<img src="../../images/banner_mercedes_c.jpg" alt="" title="" />
					<div class="banner_content">
						<h1>Новый Mercedes C-класс</h1>
						<h3></h3>
						<h2>Подчеркнуто динамичный характер. С легкостью преодолевает любые трудности. Откройте для себя превосходные качества нового седана C-класса. Динамичного, элегантного и роскошного как никогда <a href="catalog.php?model[]=1&purpose=1" class="detail_link">подробнее</a><!-- <a href="#1" class="detail_link">подробнее</a> --></h2>
					</div>
				</div>
			</div>
			<h2 class="push_right">Подборка недели</h2>

			<section class="product_line">
    		<div id="catalog">
          <figure class="product_item">
            <a href="detail.php?vehicle=">
              <div class="product_item_pict">
                <img src="images/004_volkswagen_caravelle_white.jpg" alt="Volkswagen Caravelle" title="Volkswagen Caravelle"/>
              </div>
            </a>
            <figcaption>
              <h3><a href="detail.php?vehicle=4">Volkswagen Caravelle</a></h3>
              <span class="product_item_price old_price"></span>
              <p class="product_item_price">2 990 000</p>
            </figcaption>
          </figure>
          <figure class="product_item">
            <a href="detail.php?vehicle=10">
              <div class="product_item_pict">
                <img src="images/010_hyundai_santa_fe_gray.jpg" alt="Hyundai Santa Fe" title="Hyundai Santa Fe"/>
              </div>
            </a>
            <figcaption>
              <h3><a href="detail.php?vehicle=10">Hyundai Santa Fe</a></h3>
              <span class="product_item_price old_price"></span>
              <p class="product_item_price">2 647 000</p>
            </figcaption>
          </figure>

          <figure class="product_item">
            <a href="detail.php?vehicle=3">
              <div class="product_item_pict">
                <img src="images/003_peugeot_traveller_black.jpg" alt="Peugeot Traveller" title="Peugeot Traveller"/>
              </div>
            </a>
            <figcaption>
              <h3><a href="detail.php?vehicle=3">Peugeot Traveller</a></h3>
              <span class="product_item_price old_price"></span>
              <p class="product_item_price">3 099 000</p>
            </figcaption>
          </figure>
          <figure class="product_item">
            <a href="detail.php?vehicle=6">
              <div class="product_item_pict">
                <img src="images/006_lexus_rx_iv_gray.jpg" alt="Lexus RX IV" title="Lexus RX IV"/>
              </div>
            </a>
            <figcaption>
              <h3><a href="detail.php?vehicle=6">Lexus RX IV</a></h3>
              <span class="product_item_price old_price"></span>
              <p class="product_item_price">4 271 000</p>
            </figcaption>
          </figure>
                <span>Не найдено </span>

        </div>
      </section>


	</section>
@endsection
