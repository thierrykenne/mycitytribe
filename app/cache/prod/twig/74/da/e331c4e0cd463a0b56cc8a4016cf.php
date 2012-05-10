<?php

/* IsdevTwitterBootstrapBundle::base.html.twig */
class __TwigTemplate_74dae331c4e0cd463a0b56cc8a4016cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'headline' => array($this, 'block_headline'),
            'header' => array($this, 'block_header'),
            'flashes' => array($this, 'block_flashes'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
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
        // line 13
        echo "    ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 14
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "</body>
</html>";
    }

    // line 6
    public function block_head_style($context, array $blocks = array())
    {
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c0bc382_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0bc382_0") : $this->env->getExtension('assets')->getAssetUrl("css/c0bc382_bootstrap_1.css");
            // line 11
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
            // asset "c0bc382_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0bc382_1") : $this->env->getExtension('assets')->getAssetUrl("css/c0bc382_bootstrap-responsive_2.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
            // asset "c0bc382_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0bc382_2") : $this->env->getExtension('assets')->getAssetUrl("css/c0bc382_custom_3.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
        } else {
            // asset "c0bc382"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c0bc382") : $this->env->getExtension('assets')->getAssetUrl("css/c0bc382.css");
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
    }

    // line 13
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Twitter Bootstrap Bundle";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $this->env->loadTemplate("IsdevTwitterBootstrapBundle::navbar.html.twig")->display($context);
    }

    // line 26
    public function block_headline($context, array $blocks = array())
    {
        echo "Twitter Bootstrap Bundle";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "            <div class=\"page-header\">
                <h1>";
        // line 26
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
    }

    // line 32
    public function block_flashes($context, array $blocks = array())
    {
        // line 33
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 34
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "            <div class=\"row\">
                <strong>Hier könnte Ihre Werbung stehen ... </strong>
            </div>
            ";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "\t        <p>&copy; <a href=\"http://intellectsoft.org/\" target=\"_blank\">IntellectSoft</a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
\t        ";
    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 22
        echo "
        <header>
            ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        </header>

        <div class=\"content\">
\t\t\t";
        // line 32
        $this->displayBlock('flashes', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        </div>";
        // line 43
        echo "
        <footer>
\t        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "        </footer>
\t";
    }

    // line 52
    public function block_foot_script($context, array $blocks = array())
    {
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d23fcb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb_0") : $this->env->getExtension('assets')->getAssetUrl("js/4d23fcb_jquery.min_1.js");
            // line 56
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
            // asset "4d23fcb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb_1") : $this->env->getExtension('assets')->getAssetUrl("js/4d23fcb_bootstrap_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "4d23fcb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d23fcb") : $this->env->getExtension('assets')->getAssetUrl("js/4d23fcb.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 57
        echo "    ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"container\">
\t";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        // line 50
        echo "    </div>";
        // line 51
        echo "
\t";
        // line 52
        $this->displayBlock('foot_script', $context, $blocks);
    }

    public function getTemplateName()
    {
        return "IsdevTwitterBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
