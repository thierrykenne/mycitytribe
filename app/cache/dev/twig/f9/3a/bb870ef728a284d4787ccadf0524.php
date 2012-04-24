<?php

/* IsdevTwitterBootstrapBundle::flash.html.twig */
class __TwigTemplate_f93abb870ef728a284d4787ccadf0524 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        echo "

";
    }

    // line 2
    public function getmsg($type = null, $message = null, $close = null, $use_raw = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "type" => $type,
            "message" => $message,
            "close" => $close,
            "use_raw" => $use_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "<div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
            echo "\">";
            // line 4
            if (((array_key_exists("close", $context)) ? (_twig_default_filter($this->getContext($context, "close"), false)) : (false))) {
                // line 5
                echo "<a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>";
            }
            // line 8
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) {
                // line 9
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "message"));
            } else {
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message")), "html", null, true);
            }
            // line 13
            echo "</div>";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 18
    public function getsession_msg($type = null, $close = null, $use_raw = null, $class = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "type" => $type,
            "close" => $close,
            "use_raw" => $use_raw,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            $context["types"] = array(0 => "info", 1 => "error", 2 => "warning", 3 => "success");
            // line 20
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method")) > 0)) {
                // line 21
                echo "    <div class=\"row\">
        <div class=\"";
                // line 22
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "span12")) : ("span12")), "html", null, true);
                echo "\">
            ";
                // line 23
                if (((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), false)) : (false))) {
                    // line 24
                    echo "                ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array($this->getContext($context, "type"), ), "method")) {
                        // line 25
                        echo "                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "type"), ), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 26
                            echo "                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this, "msg", array($this->getContext($context, "type"), $this->getContext($context, "message"), $this->getContext($context, "close"), $this->getContext($context, "use_raw"), ), "method"), "html", null, true);
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 28
                        echo "                ";
                    }
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "types"));
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 31
                        echo "                    ";
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array($this->getContext($context, "type"), ), "method")) {
                            // line 32
                            echo "                        ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "type"), ), "method"));
                            $context['_iterated'] = false;
                            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                                // line 33
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this, "msg", array($this->getContext($context, "type"), $this->getContext($context, "message"), $this->getContext($context, "close"), $this->getContext($context, "use_raw"), ), "method"), "html", null, true);
                                echo "
                        ";
                                $context['_iterated'] = true;
                            }
                            if (!$context['_iterated']) {
                                // line 35
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this, "msg", array($this->getContext($context, "type"), $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "type"), ), "method"), $this->getContext($context, "close"), $this->getContext($context, "use_raw"), ), "method"), "html", null, true);
                                echo "
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 37
                            echo "                    ";
                        }
                        // line 38
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "        </div>
    </div>
    ";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "IsdevTwitterBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
