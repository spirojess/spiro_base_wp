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

/* forms/fields.html.twig */
class __TwigTemplate_ace6edb45b9b31cdd579c517d55aec749d5d7362aa01f3a6cfb2d74fcb71e5eb extends \Twig\Template
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
        $context["scope"] = ((((isset($context["scope"]) || array_key_exists("scope", $context)) &&  !(null === (isset($context["scope"]) ? $context["scope"] : null)))) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ((isset($context["prefix"]) ? $context["prefix"] : null)));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "type", [])) {
            // line 4
            echo "    ";
            $context["field"] = (isset($context["blueprints"]) ? $context["blueprints"] : null);
            // line 5
            echo "    ";
            $context["current_value"] = (isset($context["data"]) ? $context["data"] : null);
            // line 6
            echo "    ";
            $context["default_value"] = (isset($context["defaults"]) ? $context["defaults"] : null);
            // line 7
            echo "
    ";
            // line 8
            $this->loadTemplate([0 => (("forms/fields/" . twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", []), ["." => "/"])) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"], "forms/fields.html.twig", 8)->display($context);
            // line 9
            echo "
";
        } else {
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", []));
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
            foreach ($context['_seq'] as $context["name"] => $context["field"]) {
                // line 13
                echo "        ";
                if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["name"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ".") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                    // line 14
                    echo "            ";
                    $context["name"] = twig_slice($this->env, $context["name"], 1, null);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        ";
                // line 17
                $context["container"] = ($this->getAttribute($context["field"], "type", []) == "container.tabs");
                // line 18
                echo "        ";
                $context["current_value"] = (((isset($context["container"]) ? $context["container"] : null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), twig_trim_filter((isset($context["scope"]) ? $context["scope"] : null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["name"]))));
                // line 19
                echo "        ";
                $context["default_value"] = (((isset($context["container"]) ? $context["container"] : null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), twig_trim_filter((isset($context["scope"]) ? $context["scope"] : null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["name"]))));
                // line 20
                echo "        ";
                $context["has_value"] =  !(null === (isset($context["current_value"]) ? $context["current_value"] : null));
                // line 21
                echo "        ";
                $context["field_overrideable"] = (($this->getAttribute($context["field"], "overridable", [], "any", true, true)) ? ($this->getAttribute($context["field"], "overridable", [])) : ((($this->getAttribute($context["field"], "overrideable", [], "any", true, true)) ? ($this->getAttribute($context["field"], "overrideable", [])) : (true))));
                // line 22
                echo "
        ";
                // line 23
                if ((((($this->getAttribute($context["field"], "type", []) && !twig_in_filter($context["name"], (isset($context["skip"]) ? $context["skip"] : null))) &&  !$this->getAttribute($context["field"], "skip", [])) &&  !(((isset($context["ignore_not_overrideable"]) ? $context["ignore_not_overrideable"] : null) &&  !(isset($context["field_overrideable"]) ? $context["field_overrideable"] : null)) &&  !(isset($context["has_value"]) ? $context["has_value"] : null))) &&  !( !(isset($context["has_value"]) ? $context["has_value"] : null) && (isset($context["not_global_overrideable"]) ? $context["not_global_overrideable"] : null)))) {
                    // line 24
                    echo "            ";
                    $context["field"] = ($context["field"] + ["name" => $context["name"]]);
                    // line 25
                    echo "
            ";
                    // line 26
                    $this->loadTemplate([0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["field"], "type", []), ["." => "/"])) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"], "forms/fields.html.twig", 26)->display($context);
                    // line 27
                    echo "        ";
                }
                // line 28
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "forms/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  114 => 27,  112 => 26,  109 => 25,  106 => 24,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  58 => 12,  55 => 11,  51 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/templates/forms/fields.html.twig");
    }
}
