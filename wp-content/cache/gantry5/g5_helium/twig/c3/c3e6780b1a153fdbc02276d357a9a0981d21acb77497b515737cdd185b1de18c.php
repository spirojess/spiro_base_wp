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

/* @particles/custom.html.twig */
class __TwigTemplate_f9cb34c11273cc19b790065df7ed3b1356b7eb871e2ce339f5c874145e972bef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/custom.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["html"] = (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "twig", [])) ? ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", []), "compile", [0 => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "html", [])], "method")) : ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "html", [])));
        // line 5
        echo "    ";
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "filter", [])) ? ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", []), "filter", [0 => (isset($context["html"]) ? $context["html"] : null)], "method")) : ((isset($context["html"]) ? $context["html"] : null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/custom.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/engines/nucleus/particles/custom.html.twig");
    }
}
