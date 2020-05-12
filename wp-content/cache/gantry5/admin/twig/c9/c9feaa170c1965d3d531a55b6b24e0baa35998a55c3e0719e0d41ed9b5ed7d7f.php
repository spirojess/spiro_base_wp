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

/* @gantry-admin/forms/fields/gantry/particle.html.twig */
class __TwigTemplate_ed692404d41042debd1794e51cac898e54b647056c67f2c03981285e5bdb70bc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . (((isset($context["layout"]) || array_key_exists("layout", $context))) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "@gantry-admin/forms/fields/gantry/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"settings-block\"><div class=\"settings-param-field\"><div class=\"input-group\">
    ";
        // line 5
        $context["label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", []), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PICK_PARTICLE"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PICK_PARTICLE")));
        // line 6
        echo "    ";
        $context["alt_label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", []), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_PARTICLE"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_PARTICLE")));
        // line 7
        echo "    <span class=\"g-instancepicker-title\" title=\"";
        (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "particle", [])) ? (print (twig_escape_filter($this->env, ("Particle Type: " . $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "particle", [])), "html", null, true))) : (print ("")));
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "title", []), "")) : ("")), "html", null, true);
        echo "</span><button class=\"button\" data-g-instancepicker=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["type" => "particle", "field" => twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))))]), "html_attr");
        echo "\" data-g-instancepicker-text=\"";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "\" data-g-instancepicker-alttext=\"";
        echo twig_escape_filter($this->env, (isset($context["alt_label"]) ? $context["alt_label"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["alt_label"]) ? $context["alt_label"] : null)) : ((isset($context["label"]) ? $context["label"] : null))), "html", null, true);
        echo "</button>
    <input
            type=\"hidden\"
            name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
            value=\"";
        // line 11
        echo (((isset($context["value"]) ? $context["value"] : null)) ? (twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null), twig_constant("JSON_UNESCAPED_UNICODE")))) : (""));
        echo "\"
            ";
        // line 13
        echo "            ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
            ";
        // line 15
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "disabled=\"disabled\"";
        }
        // line 16
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 17
        echo "            />

    <span class=\"g-reset-field\" data-g-reset-field=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"><i class=\"fa  fa-fw fa-times-circle\" aria-hidden=\"true\"></i></span>
    </div></div></div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/forms/fields/gantry/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  89 => 17,  84 => 16,  79 => 15,  74 => 13,  70 => 11,  66 => 10,  49 => 7,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/forms/fields/gantry/particle.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/templates/forms/fields/gantry/particle.html.twig");
    }
}
