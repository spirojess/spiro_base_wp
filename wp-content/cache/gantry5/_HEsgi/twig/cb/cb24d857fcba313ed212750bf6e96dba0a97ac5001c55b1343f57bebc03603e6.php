<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_bb328d8b9dc283f04ada24aa67ae6d89bf442349fd1fb7d7ffe20376f44a4346 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["tag_type"] = (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", []), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "id", [])) ? ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "id", [])) : (("g-" . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "id", []))));
        // line 3
        $context["attr_class"] = ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "class", []) . (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "variations", [])) ? ((" " . twig_join_filter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "variations", []), " "))) : ("")));
        // line 5
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "extra", []));
        // line 6
        $context["boxed"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "boxed", []);
        // line 7
        if ( !(null === (isset($context["boxed"]) ? $context["boxed"] : null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((twig_trim_filter((isset($context["boxed"]) ? $context["boxed"] : null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", []), "page", []), "body", []), "layout", []), "sections", [])) : ((isset($context["boxed"]) ? $context["boxed"] : null)));
        }
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "children", [])) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 14
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", [])) . ".html.twig"), "@nucleus/layout/section.html.twig", 14)->display(twig_array_merge($context, ["segments" => $this->getAttribute($context["segment"], "children", [])]));
                // line 15
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "sticky", []) || twig_trim_filter((isset($context["html"]) ? $context["html"] : null)))) {
            // line 20
            if (( !(null === (isset($context["boxed"]) ? $context["boxed"] : null)) && (((isset($context["boxed"]) ? $context["boxed"] : null) == 0) || ((isset($context["boxed"]) ? $context["boxed"] : null) == 2)))) {
                // line 21
                echo "        ";
                ob_start(function () { return ''; });
                // line 22
                echo "        <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 24
                echo "    ";
            }
            // line 25
            echo "
    ";
            // line 26
            ob_start(function () { return ''; });
            // line 27
            echo "    ";
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 2)) {
                $context["attr_class"] = ((isset($context["attr_class"]) ? $context["attr_class"] : null) . " g-flushed");
            }
            // line 28
            echo "    ";
            $context["attr_class"] = (((isset($context["attr_class"]) ? $context["attr_class"] : null)) ? (((" class=\"" . twig_trim_filter((isset($context["attr_class"]) ? $context["attr_class"] : null))) . "\"")) : (""));
            // line 29
            echo "<";
            echo (isset($context["tag_type"]) ? $context["tag_type"] : null);
            echo " id=\"";
            echo (isset($context["attr_id"]) ? $context["attr_id"] : null);
            echo "\"";
            echo (isset($context["attr_class"]) ? $context["attr_class"] : null);
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            echo ">
        ";
            // line 30
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "
    </";
            // line 31
            echo (isset($context["tag_type"]) ? $context["tag_type"] : null);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 1)) {
                // line 35
                echo "    <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
    ";
            } else {
                // line 37
                echo "    ";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  140 => 35,  138 => 34,  134 => 31,  130 => 30,  120 => 29,  117 => 28,  112 => 27,  110 => 26,  107 => 25,  104 => 24,  98 => 22,  95 => 21,  93 => 20,  91 => 19,  87 => 16,  73 => 15,  70 => 14,  52 => 13,  49 => 12,  47 => 11,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/section.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/engines/nucleus/templates/layout/section.html.twig");
    }
}
