ymaps.ready(init);
var myMap;

function init(){
    myMap = new ymaps.Map("coffie_map", {
        center: [55.16, 61.40],
        zoom: 12,
        controls:["zoomControl", "fullscreenControl","geolocationControl"]
    });
	
	searchControl = new ymaps.control.SearchControl({
        options: {
            provider: 'yandex#search'
        }
    });
    
    myMap.controls.add(searchControl);
	
	// Программно выполним поиск определённых кафе в текущей
    // прямоугольной области карты.
    searchControl.search('Кофейня');
}
