<?php

/* ::layout.html.twig */
class __TwigTemplate_eb70b60ae1a35f21df78ade825b78f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
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
        // line 14
        echo "    ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 15
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script>
\t\t  function goLogIn(){
\t\t      window.location = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\";
\t\t  }

\t\t  function onFbInit() {
\t\t      if (typeof(FB) != 'undefined' && FB != null ) {
\t\t\t  console.log(\"Got facebook SDK\");
\t\t          FB.Event.subscribe('auth.statusChange', function(response) {
\t\t              setTimeout(goLogIn, 500);
\t\t          });
\t\t      }
\t\t  }
\t</script>
</head>
<body>
";
        // line 33
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "</body>
</html>";
    }

    // line 6
    public function block_head_style($context, array $blocks = array())
    {
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c33c4b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b_bootstrap_1.css");
            // line 10
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "4c33c4b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b_custom_2.css");
            // line 10
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "4c33c4b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c33c4b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4c33c4b.css");
            // line 10
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    // line 14
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "MycityTribe";
    }

    // line 41
    public function block_flashes($context, array $blocks = array())
    {
        // line 42
        echo "                ";
        $context["flash"] = $this->env->loadTemplate("IsdevTwitterBootstrapBundle::flash.html.twig");
        // line 43
        echo "\t\t\t    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "flash"), "session_msg", array(), "method"), "html", null, true);
        echo "
\t\t\t";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "            <div class=\"row\">

            </div>
            ";
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "\t        <p align=\"center\"> Copyright &copy; <a href=\"\" target=\"_blank\">MyCityTribe </a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html", null, true);
        echo "</p>
\t        ";
    }

    // line 36
    public function block_container($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        // line 38
        echo "
        <div class=\"content\">
\t\t\t
\t\t\t";
        // line 41
        $this->displayBlock('flashes', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "        </div>";
        // line 52
        echo "
        <footer class=\"row\">
\t        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "        </footer>
\t";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"container\">
\t";
        // line 36
        $this->displayBlock('container', $context, $blocks);
        // line 59
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
