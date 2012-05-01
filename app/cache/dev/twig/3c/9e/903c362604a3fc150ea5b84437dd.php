<?php

/* CityGeoBundle:Destination:index.html.twig */
class __TwigTemplate_3c9e903c362604a3fc150ea5b84437dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Glayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"content-type1\">
    <div class=\"logo-left\"> <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-medium.png"), "html", null, true);
        echo "\"> </div>
    <div class=\"slogan row  \">  <h2 > <span>Felling at your own home everywhere!</span> </h2></div>

<div class=\"row contentbox content-map\"> 
        ";
        // line 8
        if (array_key_exists("flash", $context)) {
            echo " 
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "
        ";
        }
        // line 11
        if ($this->getContext($context, "create")) {
            // line 12
            echo "<form id =\"form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_destination_create"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
";
        } else {
            // line 14
            echo "<form id =\"form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_destination_update"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
";
        }
        // line 16
        echo "        <div class=\"row\">
            <div class=\"span3 offset3 \">
                <label> <strong>Your  Destination City /Address : </strong>  </label>
            </div>
            <div class=\"span5 \">
                
                <input id=\"address\" class=\"span4\" type=\"text\" autocomplete=\"on\" onKeyPress=\"return event.keyCode!=13\" value=\"";
        // line 22
        if ((!$this->getContext($context, "create"))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locality"), "city"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locality"), "country"), "html", null, true);
            echo "
                                    ";
        }
        // line 23
        echo "\" placeholder=\" Destination City or Address.. \" />
                <button type=\"submit\" class=\" address-btn btn btn-success btn-medium\">Validate</button>
            </div>
            
        </div>
        <div class=\"span4\">
                    
            <div>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "country"));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "country"), array("attr" => array("class" => "country", "readonly" => "readonly")));
        echo "
            </div>
            <div>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "state"));
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "state"), array("attr" => array("class" => "state", "readonly" => "readonly")));
        echo "
            </div>
            <div>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "region"));
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "region"), array("attr" => array("class" => "region", "readonly" => "readonly")));
        echo "
            </div>
            <div>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "city"));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "city"), array("attr" => array("class" => "city", "readonly" => "readonly")));
        echo "
            </div>
            
            ";
        // line 47
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "           
            <div id=\"erreur\"> </div> 
        </div>
        <div class=\"span8\">
            <div class=\"map-msg alert alert-info\"> You can also move the icon on the map to select the address</div>
            <div id=\"map-canvas\" style=\"width:550px; height:400px\"></div><br/>
        </div>
</form>     
</div>
";
    }

    public function getTemplateName()
    {
        return "CityGeoBundle:Destination:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
