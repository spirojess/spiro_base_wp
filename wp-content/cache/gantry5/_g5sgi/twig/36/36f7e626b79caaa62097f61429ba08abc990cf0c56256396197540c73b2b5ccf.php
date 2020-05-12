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

/* @nucleus/content/spacer.html.twig */
class __TwigTemplate_2ddb8e412e685829412880dc24a5e051510df04f4121e9fd81025f5b5b46d9f1 extends \Twig\Template
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
        if ( !(isset($context["particle"]) ? $context["particle"] : null)) {
            // line 2
            echo "    ";
            $context["enabled"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", []), "get", [0 => (("particles." . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "type", [])) . ".enabled"), 1 => 1], "method");
            // line 3
            echo "    ";
            $context["spacer"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", []), "getJoined", [0 => ("particles." . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "type", [])), 1 => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", [])], "method");
        }
        // line 5
        echo "
";
        // line 6
        if (((isset($context["enabled"]) ? $context["enabled"] : null) && ((null === $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "enabled", [])) || $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", []), "enabled", [])))) {
            // line 7
            echo "    <div class=\"spacer";
            (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", [])) ? (print (twig_escape_filter($this->env, (" " . twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", []), " "))), "html", null, true))) : (print ("")));
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/content/spacer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  42 => 6,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/content/spacer.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/engines/nucleus/templates/content/spacer.html.twig");
    }
}
