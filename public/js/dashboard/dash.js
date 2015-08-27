$(document).ready(function () {
    /**
 * This example uses pulsating circles CSS by Kevin Urrutia
 * http://kevinurrutia.tumblr.com/post/16411271583/creating-a-css3-pulsating-circle
 */

var map = AmCharts.makeChart("chartdiv", {
    type: "map",
    "theme": "light",
    path: "http://www.amcharts.com/lib/3/",

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

    dataProvider: {
        map: "worldLow",
        images: [{
            zoomLevel: 5,
            scale: 0.5,
            title: "Brussels",
            latitude: 50.8371,
            longitude: 4.3676,
            url:"http://www.google.co.uk"
        }, {
            zoomLevel: 5,
            scale: 0.5,
            title: "London",
            latitude: 51.5002,
            longitude: -0.1262,
            url:"http://www.google.co.uk"
        }]
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
    holder.appendChild(dot);

    // create pulse
    var pulse = document.createElement('div');
    pulse.className = 'pulse';
    holder.appendChild(pulse);

    // append the marker to the map container
    image.chart.chartDiv.appendChild(holder);

    return holder;
}
})
