<?php

/* ::Glayout.html.twig */
class __TwigTemplate_7734f2184428c205393fc41ca466e9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "<!-- Gmap -->
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false&language=en\"></script>
<!-- jQuery -->
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js\"></script>
<!-- jQuery UI -->
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js\"></script>
<!-- jQuery UI Css -->
<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/base/jquery-ui.css\" type=\"text/css\" />
<script language=\"javascript\">
\$(document).ready(function() {
\tvar Gcity=\"\"; var Gcountry=\"\"; var Gregion=\"\";
\t\$.each(\$('#form').find('input:visible'),function(index) { 
  \t\tif (index==0) {
\t\t\t\$(this).addClass('city'); 
\t\t\tGcity=\$(this).attr('id');
\t\t}

\t\tif (index==1) {
\t\t\t\$(this).addClass('region'); 
\t\t\tGregion=\$(this).attr('id');
\t\t}
\t\tif (index==2) {
\t\t\t \$(this).addClass('country'); 
\t\t\tGcountry=\$(this).attr('id');
\t\t}
\t});

\t\$(\"#form\").ajaxForm({
              \t beforeSubmit: function() {
\t\t\talert(\"salut\");
                       if (\$('.city').val==\"\") \$(\"#erreur\").text(\" city not esits\");
               }
\t});
\t//Init Geocoder  

\tvar geocoder = new google.maps.Geocoder();
\t
\t//Init Map in Paris
\tvar latlng = new google.maps.LatLng(48.864715,2.352448);
\t\tvar options = {
\t\tzoom:5,
\t\tcenter: latlng,
\t\tmapTypeId: google.maps.MapTypeId.TERRAIN
\t};
\tvar map = new google.maps.Map(document.getElementById(\"map-canvas\"), options);
\t//add Polygon
\t\tvar points = []; 
\t    var regionPolygon = new google.maps.Polygon({
\t\tpaths: points,
\t\tstrokeColor: \"#FF0000\",
\t\tstrokeOpacity: 0.8,
\t\tstrokeWeight: 2,
\t\tfillColor: \"#FF0000\",
\t\tfillOpacity: 0.35
\t  });
\t//Add Marker
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
    \tdraggable:true,
    \tanimation: google.maps.Animation.DROP,
    });
\t
\t//Drag Event
\tgoogle.maps.event.addListener(marker, 'drag', function() {
\t\tgeocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
\t\tif (status == google.maps.GeocoderStatus.OK) {
\t\t\tif (results[0]) {
\t\t\t\t\$('#address').val(results[0].formatted_address);
\t\t\t\t//\$('#region').val(marker.getPosition().lat());
\t\t\t\t//\$('#country').val(marker.getPosition().lng());
\t\t\t    var elt = results[0].address_components;
\t\t\t    for(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'locality')
\t\t\t\t\t\tdocument.getElementById(Gcity).value = elt[i].long_name;\t\t\t\t\t
\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_1')
\t\t\t\t\t\tdocument.getElementById(Gregion).value = elt[i].long_name;
\t\t\t\t\tif(elt[i].types[0] == 'country')
\t\t\t\t\t\tdocument.getElementById(Gcountry).value = elt[i].long_name;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t});
    });
\t
\t//Autocomplete
\t\$('input#address').autocomplete({
\tsource: function(request,response) {
\tgeocoder.geocode( { 'address': \$('input#address').val() }, function(results, status) {
\tresponse(\$.map(results, function(item) {
\treturn {
\tvalue: item.formatted_address,
    \tlatitude: item.geometry.location.lat(),
    \tlongitude: item.geometry.location.lng(),
\tregion: 
\t        function (){
\t\t\t    var elt = item.address_components;
\t\t\t\tfor(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_1')
\t\t\t\t\t\treturn elt[i].long_name;
                }

\t\t\t},
\tcountry: 
\t        function (){
\t\t\t    var elt = item.address_components;
\t\t\t\tfor(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'country')
\t\t\t\t\t\treturn elt[i].long_name;
               }
\t       },
\tcity: 
\t        function (){
\t\t\t    var elt = item.address_components;
\t\t\t\tfor(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'locality')
\t\t\t\t\t\treturn elt[i].long_name;
               }
\t       }
\t}
\t}));
\t});
\t},
\tselect: function(event, ui) {
\t\t\t\$('#address').val(ui.item['value']);
\t\t\t\$(\".region\").val(ui.item.region);
\t\t\t\$(\".country\").val(ui.item.country);
\t\t\t\$(\".city\").val(ui.item.city);
\t\t\tvar location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
\t\t\tmarker.setPosition(location);
\t\t\tmap.setCenter(location);
\t\t\t
\t\t\t
\t\t\t//draw polygon region on the map
\t\t\t
\t\t\t\$.ajax({ // fonction permettant de faire de l'ajax
\t\t\t\t   type: \"POST\", // methode de transmission des données au fichier php
\t\t\t\t   url: \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("CityGeoBundle_polygon_region"), "html", null, true);
        echo "\", // url du fichier php
\t\t\t\t   data: \"country=\"+\$(\".country\").val()+\"&region=\"+\$(\".region\").val(), // données à transmettre
\t\t\t\t   success: function(msg){ // si l'appel a bien fonctionné
\t\t\t\t\t\tif(msg==0) // si la connexion en php a fonctionnée
\t\t\t\t\t\t{
\t\t\t\t\t\t    //remove polygon on map
\t\t\t\t\t\t\tregionPolygon.setPath([]);
\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\telse // si la connexion en php n'a pas fonctionnée
\t\t\t\t\t\t{ 
\t\t\t\t\t\t\tregionPolygon.setPath([]);
   \t\t\t\t\t\t\tpoints=[];
\t\t\t\t\t\t\tvar geomAry = new Array(); 
\t\t\t\t\t\t\tgeomAry = msg.split('|'); 
\t\t\t\t\t\t\tvar XY = new Array(); 
     \t\t\t\t\t\t
\t\t\t\t\t\t\tfor (var i = 0; i < geomAry.length; i++) 
\t\t\t\t\t\t\t{ 
\t\t\t\t\t\t\tXY = geomAry[i].split(','); 
\t\t\t\t\t\t\tpoints.push(new google.maps.LatLng(parseFloat(XY[1]),parseFloat(XY[0]))) ;
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t//add polygon on map
\t\t\t\t\t\t\t  regionPolygon.setPath(points);
\t\t\t\t\t\t\t  regionPolygon.setMap(map);

\t\t\t\t\t\t} 
\t\t\t\t\t\t\t
\t\t\t\t\t}

\t\t\t  })
\t},
\tminLength: 2
\t});
\t

\t});

</script>
\t</head>
\t
\t<body>

\t\t<div id=\"corps\">
\t\t
\t\t\t";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "\t\t\t
\t\t</div> 
 
\t\t<div id=\"pied_de_page\"> 
\t 
\t\t</div>
\t</body>
\t";
        // line 200
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
        echo "</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t";
    }

    // line 191
    public function block_body($context, array $blocks = array())
    {
        // line 192
        echo "\t\t\t";
    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        // line 201
        echo "\t\t";
        // line 202
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::Glayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
