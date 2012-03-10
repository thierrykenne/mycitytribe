<?php

/* ::Commentlayout.html.twig */
class __TwigTemplate_fb45a9aaddf001e416e0d6eba66f88c4 extends Twig_Template
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
        echo "\t\t<!-- CSS -->
\t\t";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "48ed673_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673_comments_1.css");
            // line 11
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "48ed673"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
<!-- jQuery -->
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>

\t</head>
\t
\t<body>

\t\t<div id=\"corps\">
\t\t
\t\t\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "\t\t\t
\t\t</div> 
 
\t\t<div id=\"pied_de_page\"> 
\t 
\t\t</div>
\t</body>
\t";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
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

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "\t\t";
        // line 34
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::Commentlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
