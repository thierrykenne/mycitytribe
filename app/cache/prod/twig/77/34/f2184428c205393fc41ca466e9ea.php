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
            'body' => array($this, 'block_body'),
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
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28877518-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
\t<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 20
        $this->displayBlock('head_style', $context, $blocks);
        // line 28
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
\t\tif (\$('input.city').val()==\"\" || ('input.country').val() )
\t\t{
\t\t\t\$('#error').show();
\t\t\tans=false;
\t\t}
\t\t
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
\t\tgeocoder.geocode( { 'address': \$('input#address').val() }, function(results, status) {
\t\tresponse(\$.map(results, function(item) {
\t\treturn {
\t\tvalue: item.formatted_address,
\t    latitude: item.geometry.location.lat(),
\t    longitude: item.geometry.location.lng(),
\t    state: 
\t\t        function (){
\t\t\t\t    var elt = item.address_components;
\t\t\t\t\tfor(i in elt){
\t\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_1')
\t\t\t\t\t\t\treturn elt[i].long_name;
\t                }

\t\t\t\t},

\t\tregion: 
\t\t        function (){
\t\t\t\t    var elt = item.address_components;
\t\t\t\t\tfor(i in elt){
\t\t\t\t\t\tif(elt[i].types[0] == 'administrative_area_level_2')
\t\t\t\t\t\t\treturn elt[i].long_name;
\t                }

\t\t\t\t},

\t\tcountry: 
\t\t        function (){
\t\t\t\t    var elt = item.address_components;
\t\t\t\t\tfor(i in elt){
\t\t\t\t\t\tif(elt[i].types[0] == 'country')
\t\t\t\t\t\t\treturn elt[i].long_name;
\t               }
\t\t       },
\t\tcity: 
\t\t        function (){
\t\t\t\t    var elt = item.address_components;
\t\t\t\t\tfor(i in elt){
\t\t\t\t\t\tif(elt[i].types[0] == 'locality')
\t\t\t\t\t\t\treturn elt[i].long_name;
\t               }
\t\t       }
\t\t}
\t\t}));
\t\t});
\t\t},
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
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_polygon_region"), "html", null, true);
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
\t\t}
\t});
\t

\t});

</script>
\t</head>
\t
\t<body>
";
        // line 222
        $this->displayBlock('body', $context, $blocks);
        // line 250
        echo "\t</body>
</html>
";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe -Alfa";
    }

    // line 20
    public function block_head_style($context, array $blocks = array())
    {
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c33c4b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_0") : $this->env->getExtension('assets')->getAssetUrl("css/4c33c4b_bootstrap_1.css");
            // line 24
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "4c33c4b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_1") : $this->env->getExtension('assets')->getAssetUrl("css/4c33c4b_custom_2.css");
            // line 24
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "4c33c4b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b") : $this->env->getExtension('assets')->getAssetUrl("css/4c33c4b.css");
            // line 24
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
    }

    // line 229
    public function block_flashes($context, array $blocks = array())
    {
        // line 230
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 231
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 234
    public function block_content($context, array $blocks = array())
    {
        // line 235
        echo "            <div class=\"row\">

            </div>
            ";
    }

    // line 242
    public function block_footer($context, array $blocks = array())
    {
        // line 243
        echo "\t        <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
\t        ";
    }

    // line 224
    public function block_container($context, array $blocks = array())
    {
        // line 225
        echo "        ";
        // line 226
        echo "
        <div class=\"content\">
\t\t\t
\t\t\t";
        // line 229
        $this->displayBlock('flashes', $context, $blocks);
        // line 233
        echo "
            ";
        // line 234
        $this->displayBlock('content', $context, $blocks);
        // line 239
        echo "        </div>";
        // line 240
        echo "
        <footer class=\"row\">
\t        ";
        // line 242
        $this->displayBlock('footer', $context, $blocks);
        // line 245
        echo "        </footer>
\t";
    }

    // line 222
    public function block_body($context, array $blocks = array())
    {
        // line 223
        echo "    <div class=\"container\">
\t";
        // line 224
        $this->displayBlock('container', $context, $blocks);
        // line 247
        echo "    </div>";
        // line 248
        echo "
";
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
