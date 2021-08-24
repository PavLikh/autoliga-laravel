@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('tagline')
  @parent
    <section class="tagline">
      <div id="top">
            <h1>Режим просмотра</h1>
      </div>
    </section>
@endsection

@section('content')
<script>
    var data = @json($data);
</script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@if (Route::current()->getName() == 'one-store')

<script type="text/javascript">
		var myMap;
	
  		function initMap ()
  		{

  			myMap = new ymaps.Map("yandexmap", {
    			center: [{{ $data->coordinates }}],
    			zoom: 12,

        });

  			myGeoObject = new ymaps.Placemark([{{ $data->coordinates }}],
  			{
    			balloonContentBody: '<h3>{{ $data->name_ru }}</h3>',
    			balloonContentFooter: '{{ $data->address }}',
    				
    			hintContent: "{{ $data->address }}",
   				iconContent: "{{ $data->name_ru }}"
   			}, 
   			{
    			preset: "islands#greenStretchyIcon",
    						// Отключаем кнопку закрытия балуна.
    						//balloonCloseButton: false,
    			 			// Балун будем открывать и закрывать кликом по иконке метки.
    			hideIconOnBalloonOpen: false
    		});

  			myMap.geoObjects.add(myGeoObject);
        myMap.controls.remove('searchControl');

   	}
	ymaps.ready(initMap);
</script>

	<section class="store">

		<figure class="store_item">

			<figcaption>
				<h2>{{ $data->name_ru }}</h2>
			    <p>Регион: {{ $data->region }}</p>
        		<p class="">{{ $data->address }}</p>
            	<p>Телефон: +7(001)999-99-99</p>
          	</figcaption>
		</figure>

 		<section class="map">
			<div id="yandexmap" style="width: 100%; height: 500px"></div> 	
 		</section>
 	</section>

@else
	<script type="text/javascript">
		var myMap;

  		function initMap ()
  		{

  			myMap = new ymaps.Map("yandexmap", {
    			center: [57.799, 37.114],
    			zoom: 5.2,
    		});
  			//var pointer = [];
                    var i = 0;
                    var ar = data;

                   @foreach ($data as $value) 
                    	
                   

            	        myGeoObject = new ymaps.Placemark([{{ $value->coordinates }}],
                        {
                            balloonContentBody: '<img src="" />',
                            balloonContentFooter: '<a href="#">Ссылка</a>',
                    
                            hintContent: "{{ $value->address }}",
                            //iconContent: "Азербайджан"
                        }, 
                        {
                            preset: "islands#greenStretchyIcon",
                            // Отключаем кнопку закрытия балуна.
                            //balloonCloseButton: false,
                            // Балун будем открывать и закрывать кликом по иконке метки.
                            hideIconOnBalloonOpen: false
                        });

                    myMap.geoObjects.add(myGeoObject);
                    myMap.controls.remove('searchControl'); //удалить поле поиска

        	 @endforeach 

                var place;
        }
   	
	ymaps.ready(initMap);
	</script>
	<section class="stores">
		<section class="stores_list">
			@foreach($data as $el)
				<a href="stores/{{ $el->id }}">
					<figure class="store_item">

						<figcaption>
							<h3>{{ $el->region }}</h3>
							<p>Регион: {{ $el->region }}</p>
                			<p class="">{{ $el->address }}</p>

						</figcaption>
					</figure>
				</a>
			@endforeach
		</section>
 		<section class="map">
			<div id="yandexmap" style="width: 100%; height: 500px"></div> 	
 		</section>
	</section>
@endif

@endsection