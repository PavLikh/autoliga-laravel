<template>
    <section class="map">
        <h1>Yandex Map</h1>
        <div id="yandexmap" style="width: 100%; height: 500px"></div>   
    </section>
</template>

<script>
    export default {
        props: [
            'data'
        ],
        mounted() {
            this.update()
        },

        methods: {
            update: function() {
                console.log(this.data);
                function initMap ()
                {

                    myMap = new ymaps.Map("yandexmap", {
                        center: [57.799, 37.114],
                        zoom: 5.2,
                    });
                //var pointer = [];
            
                    var i = 0;
                    var ar = this.data;
                    for (i = 0; i < ar.length; ++i) {
                        //pointer = [<?=$item['coordinates'] ?>];
                        myGeoObject = new ymaps.Placemark([ar[i].coordinates],
                        {
                            balloonContentBody: '<img src="" />',
                            balloonContentFooter: '<a href="#">Ссылка</a>',
                    
                            hintContent: "ar[i].address_ru",
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

            

                var place;
            }
            ymaps.ready(initMap);
            }
        }
    }
}
</script>