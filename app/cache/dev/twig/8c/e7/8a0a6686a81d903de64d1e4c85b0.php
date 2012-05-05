<?php

/* ::Bloglayout.html.twig */
class __TwigTemplate_8ce78a0a6686a81d903de64d1e4c85b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'title' => array($this, 'block_title'),
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
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "locale"), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 6
        $this->displayBlock('head_style', $context, $blocks);
        // line 18
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
</head>
<body>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "</body>
</html>";
    }

    // line 6
    public function block_head_style($context, array $blocks = array())
    {
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fed6b85_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fed6b85_bootstrap_1.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "fed6b85_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fed6b85_custom_2.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "fed6b85_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fed6b85_comments_3.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "fed6b85"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fed6b85") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fed6b85.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/content.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "    ";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe";
    }

    // line 29
    public function block_flashes($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 31
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "                <div class=\"row\"></div>
            ";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "        <footer class=\"row\">
\t   <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
        </footer>
    ";
    }

    // line 25
    public function block_container($context, array $blocks = array())
    {
        // line 26
        echo "
        <div class=\"content\">
\t\t\t
\t\t\t";
        // line 29
        $this->displayBlock('flashes', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "        </div>
    ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "\t";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"container\">
\t";
        // line 25
        $this->displayBlock('container', $context, $blocks);
        // line 44
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "::Bloglayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
