$(document).ready(function () {
	
	var datosenvio;
	
	var map = AmCharts.makeChart("chartdiv", {
	    type: "map",
	    "theme": "light",
	    
	   areasSettings: {
	        unlistedAreasColor: "#70b2be"
	    },

	    dataProvider: {
	        map: "worldLow"
	        
	    },
	    
	});
	
	console.log(document.location);
	$.ajax({
		url: document.location.protocol + '//' + document.location.host + document.location.pathname   + 'dashboard',
	    type:"get",
	    async: true,
	    dataType: "JSON",
	    success: function(resp){
	    	datosenvio = {
	    		map: "worldLow",
	    		images:	resp
	    	};
	    	
	    	map.dataProvider = datosenvio;
    		
	    	map.validateData();
	    	
		},error: function(e){
			
		}	
	});



// add events to recalculate map position when the map is moved or zoomed
map.addListener("positionChanged", updateCustomMarkers);

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
    dot.className += (image.correcto) ? ' dot-red' : '';
    holder.appendChild(dot);

    // create pulse
    var pulse = document.createElement('div');
    pulse.className = 'pulse';
    pulse.className += (image.correcto) ? ' pulse-red' : '';
    holder.appendChild(pulse);

    // append the marker to the map container
    image.chart.chartDiv.appendChild(holder);

    return holder;
}
})
