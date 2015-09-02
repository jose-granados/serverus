$(document).ready(function () {

	$('input[name=latitud] , input[name=longitud]').prop('readonly',true);
	
var dataP =  ($('input[name=latitud]').val() != '') ? { map: "worldLow",images: [{scale: 0.5, title: $('input[name=nombre]').val(),latitude: $('input[name=latitud]').val(),longitude: $('input[name=longitud]').val() }] } :{map: "worldLow"}; 
	
var map = AmCharts.makeChart("chartdiv", {
    type: "map",
    "theme": "light",

    imagesSettings: {
        rollOverColor: "#C7EDF4",
        rollOverScale: 3,
        selectedScale: 3,
        selectedColor: "#C7EDF4",
        color: "#13564e"
    },

    areasSettings: {
        unlistedAreasColor: "#70b2be"
    },

    dataProvider: dataP
});

// add events to recalculate map position when the map is moved or zoomed
map.addListener("positionChanged", updateCustomMarkers);

map.addListener("click", posicionMaps);

map.addListener("homeButtonClicked", resetMapa);

function resetMapa(event){
	 map.dataProvider.zoomLevel = 1;
	 map.dataProvider.zoomLatitude = 0;
	 map.dataProvider.zoomLongitude = 0;
}

function posicionMaps(event){

	var dat = event.chart.getDevInfo();
	
	$('input[name=latitud]').val(dat.latitude);
	$('input[name=longitud]').val(dat.longitude);
	
	map.dataProvider = {
		map: "worldLow",
	    images: [{
            scale: 0.5,
            title: $('input[name=nombre]').val(),
            latitude: dat.latitude,
            longitude: dat.longitude,
        }],
        zoomLatitude:map.zoomLatitude(),
        zoomLevel : map.zoomLevel(),
        zoomLongitude : map.zoomLongitude()
	
	};
	
	map.validateData();
	
}

// this function will take current images on the map and create HTML elements for them
function updateCustomMarkers (event) {
    // get map object
    var map = event.chart;

    // go through all of the images
    for( var x in map.dataProvider.images) {
        // get MapImage object
        var image = map.dataProvider.images[x];

        // check if it has corresponding HTML element
        if ('undefined' == typeof image.externalElement)
            image.externalElement = createCustomMarker(image);

        // reposition the element accoridng to coordinates
        image.externalElement.style.top = map.latitudeToY(image.latitude) + 'px';
        image.externalElement.style.left = map.longitudeToX(image.longitude) + 'px';
    }
}

// this function creates and returns a new marker element
function createCustomMarker(image) {
    // create holder
    var holder = document.createElement('div');
    holder.className = 'map-marker';
    holder.title = image.title;
    holder.style.position = 'absolute';

    // maybe add a link to it?
    if (undefined != image.url) {
        holder.onclick = function() {
            window.location.href = image.url;
        };
        holder.className += ' map-clickable';
    }

    // create dot
    var dot = document.createElement('div');
    dot.className = 'dot';
    holder.appendChild(dot);

    // create pulse
    var pulse = document.createElement('div');
    pulse.className = 'pulse';
    holder.appendChild(pulse);

    // append the marker to the map container
    image.chart.chartDiv.appendChild(holder);

    return holder;
}
});
