		var myMap;
	
  		function initMap ()
  		{

  			myMap = new ymaps.Map("yandexmap", {
    			center: [<?=$arStore['coordinates']?>],
    			zoom: 12,

        });

  			myGeoObject = new ymaps.Placemark([<?=$arStore['coordinates'] ?>],
  			{
    			balloonContentBody: '<h3><?=$arStore['name_ru']?></h3>',
    			balloonContentFooter: '<?=$arStore['address']?>',
    				
    			hintContent: "<?=$arStore['address']?>",
   				iconContent: "<?=$arStore['name_ru']?>"
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