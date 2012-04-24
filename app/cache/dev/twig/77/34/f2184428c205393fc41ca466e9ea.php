<?php

/* ::Glayout.html.twig */
class __TwigTemplate_7734f2184428c205393fc41ca466e9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'flashes' => array($this, 'block_flashes'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
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
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('head_style', $context, $blocks);
        // line 15
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
\tvar Gcity=\$('input.city').attr('id'); 
\tvar Gregion=\$('input.region').attr('id'); 
\tvar Gcountry=\$('input.country').attr('id');
\tvar Gstate=\$('input.state').attr('id');
\t\$(\"#submit\").click(function(){
\t\tans=true;
\t\tif(\$('input#address').val()==\"\") {
\t\t\t\$('input#address').css(\"border-color\",\"red\");
\t\t\tans=false;
\t\t}
\t\treturn ans;
\t})
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
\t\t\t\t\$('.formatted_address').val(results[0].formatted_address);
\t\t\t\t//\$('#country').val(marker.getPosition().lng());
\t\t\t    var elt = results[0].address_components;
\t\t\t    for(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'locality')
\t\t\t\t\t\tdocument.getElementById(Gcity).value = elt[i].long_name;

\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_1')
\t\t\t\t\t\tdocument.getElementById(Gstate).value = elt[i].long_name;

\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_2')
\t\t\t\t\t\tdocument.getElementById(Gregion).value = elt[i].long_name;

\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_3')
\t\t\t\t\t\tdocument.getElementById(Gsubregion).value = elt[i].long_name;

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
    latitude: item.geometry.location.lat(),
    longitude: item.geometry.location.lng(),
    state: 
\t        function (){
\t\t\t    var elt = item.address_components;
\t\t\t\tfor(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_1')
\t\t\t\t\t\treturn elt[i].long_name;
                }

\t\t\t},

\tregion: 
\t        function (){
\t\t\t    var elt = item.address_components;
\t\t\t\tfor(i in elt){
\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_2')
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
\t\t\t\$('.formatted_address').val(ui.item['value']);
\t\t\t\$(\"input.state\").val(ui.item.state);
\t\t\t\$(\"input.region\").val(ui.item.region);
\t\t\t\$(\"input.country\").val(ui.item.country);
\t\t\t\$(\"input.city\").val(ui.item.city);
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
        // line 162
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
";
        // line 204
        $this->displayBlock('body', $context, $blocks);
        // line 238
        echo "\t</body>
\t";
        // line 239
        $this->displayBlock('javascripts', $context, $blocks);
        // line 243
        echo "</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe";
    }

    // line 7
    public function block_head_style($context, array $blocks = array())
    {
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c33c4b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b_bootstrap_1.css");
            // line 11
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "4c33c4b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b_custom_2.css");
            // line 11
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "4c33c4b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b.css");
            // line 11
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    ";
    }

    // line 211
    public function block_flashes($context, array $blocks = array())
    {
        // line 212
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 213
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 216
    public function block_content($context, array $blocks = array())
    {
        // line 217
        echo "            <div class=\"row\">

            </div>
            ";
    }

    // line 224
    public function block_footer($context, array $blocks = array())
    {
        // line 225
        echo "\t        <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
\t        ";
    }

    // line 206
    public function block_container($context, array $blocks = array())
    {
        // line 207
        echo "        ";
        // line 208
        echo "
        <div class=\"content\">
\t\t\t
\t\t\t";
        // line 211
        $this->displayBlock('flashes', $context, $blocks);
        // line 215
        echo "
            ";
        // line 216
        $this->displayBlock('content', $context, $blocks);
        // line 221
        echo "        </div>";
        // line 222
        echo "
        <footer class=\"row\">
\t        ";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 227
        echo "        </footer>
\t";
    }

    // line 231
    public function block_foot_script($context, array $blocks = array())
    {
        // line 232
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d23fcb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4d23fcb_jquery.min_1.js");
            // line 235
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
            // asset "4d23fcb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4d23fcb_bootstrap_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "4d23fcb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/4d23fcb.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 236
        echo "    ";
    }

    // line 204
    public function block_body($context, array $blocks = array())
    {
        // line 205
        echo "    <div class=\"container\">
\t";
        // line 206
        $this->displayBlock('container', $context, $blocks);
        // line 229
        echo "    </div>";
        // line 230
        echo "
\t";
        // line 231
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 239
    public function block_javascripts($context, array $blocks = array())
    {
        // line 240
        echo "\t\t";
        // line 241
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
