<?php

/* CityGeoBundle:Destination:index.html.twig */
class __TwigTemplate_3c9e903c362604a3fc150ea5b84437dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<br />
    ";
        // line 5
        if (array_key_exists("flash", $context)) {
            echo " 
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    <label>Address: </label> <input id=\"address\" type=\"text\" autocomplete=\"off\" onKeyPress=\"return event.keyCode!=13\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locality"), "city"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locality"), "country"), "html", null, true);
        echo "\" /><br>

    <div id=\"map-canvas\" style=\"width:400px; height:400px\"></div><br/>
    ";
        // line 11
        if ($this->getContext($context, "create")) {
            // line 12
            echo "    <form id =\"form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_destination_create"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
    ";
        } else {
            // line 14
            echo "    <form id =\"form\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("GeoBundle_destination_update"), "html", null, true);
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo ">
    ";
        }
        // line 16
        echo "    
    
    <div>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "country"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "country"), array("attr" => array("class" => "country")));
        echo "
    </div>
    <div>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "state"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "state"), array("attr" => array("class" => "state")));
        echo "
    </div>
    <div>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "region"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "region"), array("attr" => array("class" => "region")));
        echo "
    </div>
    <div>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "city"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "city"), array("attr" => array("class" => "city")));
        echo "
    </div>
    
    ";
        // line 35
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        <input id=\"submit\" type=\"submit\" />
    </form>
<div id=\"erreur\"> </div>
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
