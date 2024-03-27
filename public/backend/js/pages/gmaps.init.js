var map;
$(document).ready(function () {
    (map = new GMaps({div: "#gmaps-markers", lat: 40.385503715213815, lng: 49.828650009921574})).addMarker({
        lat: 40.385503715213815,
        lng: 49.828650009921574,
        title: "Lima",
        details: {database_id: 42, author: "HPNeo"},
        click: function (a) {
            console.log && console.log(a), alert("You clicked in this marker")
        }
    }), (map = new GMaps({
        div: "#gmaps-overlay",
        lat: 40.385503715213815,
        lng: 49.828650009921574
    })).drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        content: '<div class="gmaps-overlay">Lima<div class="gmaps-overlay_arrow above"></div></div>',
        verticalAlign: "top",
        horizontalAlign: "center"
    }), map = GMaps.createPanorama({
        el: "#panorama",
        // 40.385503715213815, 49.828650009921574
        lat: 40.385503715213815,
        lng: 49.828650009921574
    }), (map = new GMaps({
        div: "#gmaps-types",
        lat: 40.385503715213815,
        lng: 49.828650009921574,
        mapTypeControlOptions: {mapTypeIds: ["hybrid", "roadmap", "satellite", "terrain", "osm"]}
    })).addMapType("osm", {
        getTileUrl: function (a, e) {
            return "https://a.tile.openstreetmap.org/" + e + "/" + a.x + "/" + a.y + ".png"
        }, tileSize: new google.maps.Size(256, 256), name: "OpenStreetMap", maxZoom: 18
    }), map.setMapTypeId("osm")
});
