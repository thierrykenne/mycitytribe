<?php

/* IsdevTwitterBootstrapBundle::navbar.html.twig */
class __TwigTemplate_64a44d41b9813fb26ebda91726e0bd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'navbar_brand' => array($this, 'block_navbar_brand'),
            'navbar_collapse' => array($this, 'block_navbar_collapse'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            ";
        // line 4
        $this->displayBlock('navbar_brand', $context, $blocks);
        // line 7
        echo "
            <div class=\"nav-collapse\">
                ";
        // line 9
        $this->displayBlock('navbar_collapse', $context, $blocks);
        // line 29
        echo "            </div>
        </div>
    </div>
</div>";
    }

    // line 4
    public function block_navbar_brand($context, array $blocks = array())
    {
        // line 5
        echo "                <a class=\"brand\" href=\"#\">Twitter Bootstrap Bundle</a>
            ";
    }

    // line 9
    public function block_navbar_collapse($context, array $blocks = array())
    {
        // line 10
        echo "                    <ul class=\"nav\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Link 1</a></li>
                        <li><a href=\"#\">Link 2</a></li>
                    </ul>

                    <ul class=\"nav pull-right\">
                        <li class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Dropdown <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Link 3</a></li>
                                <li><a href=\"#\">Link 4</a></li>
                                <li><a href=\"#\">Link 5</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Link 6</a></li>
                            </ul>
                        </li>
                    </ul>
                ";
    }

    public function getTemplateName()
    {
        return "IsdevTwitterBootstrapBundle::navbar.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
