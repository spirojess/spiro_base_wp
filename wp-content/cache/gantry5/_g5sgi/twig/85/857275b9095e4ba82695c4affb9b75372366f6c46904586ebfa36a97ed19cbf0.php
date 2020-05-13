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

/* @particles/spiro-card.html.twig */
class __TwigTemplate_411f225b3ced6ecd12c6fb23cec7587ef36a5e69fbcab83e0990161e9140c1cc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/spiro-card.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"g-topbott ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
                    <div class=\"g-block size-100\">
                      <div class=\"card\">
                          <div class=\"card-block\">
                            ";
        // line 9
        if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
            // line 10
            echo "                                  <div class=\"card-block\">
                                    <i class=\"fa ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>
                                </div>

                            ";
        } elseif ($this->getAttribute(        // line 14
($context["particle"] ?? null), "image", [])) {
            // line 15
            echo "                                <div class=\"tb-image-wrapper\">
                                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "\" class=\"card-image\" />
                                </div>
                            ";
        }
        // line 19
        echo "                            ";
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 20
            echo "                              <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []), "html", null, true);
            echo "\"><h4 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h4></a>
                            ";
        } else {
            // line 22
            echo "                              <h4 class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h4>
                            ";
        }
        // line 24
        echo "                              <p class=\"card-text\">";
        echo $this->getAttribute(($context["particle"] ?? null), "copy", []);
        echo "  <a class=\"rdmore\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []), "html", null, true);
        echo "\">Learn More</a></p>

                              ";
        // line 26
        if ($this->getAttribute(($context["item"] ?? null), "linktext", [])) {
            // line 27
            echo "                              <p class=\"card-text\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []), "html", null, true);
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []), "html", null, true);
            echo "</a></p>
                              ";
        }
        // line 29
        echo "
                          </div>
                      </div>

                    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/spiro-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  103 => 27,  101 => 26,  93 => 24,  87 => 22,  79 => 20,  76 => 19,  68 => 16,  65 => 15,  63 => 14,  57 => 11,  54 => 10,  52 => 9,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/spiro-card.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/themes/_g5sgi/custom/particles/spiro-card.html.twig");
    }
}
