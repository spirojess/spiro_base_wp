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

/* @gantry-admin/ajax/outline-new.html.twig */
class __TwigTemplate_800a2d930d838711d403b8fa1890c3c17e8f6d2910812771dafff84084cfcc07 extends \Twig\Template
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
        $context["create_route"] = ((($context["duplicate"] ?? null)) ? ($this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => ($context["outline"] ?? null), 2 => "duplicate/new"], "method")) : ($this->getAttribute(($context["gantry"] ?? null), "route", [0 => "configurations", 1 => "create/new"], "method")));
        // line 2
        echo "
<div class=\"card settings-block\">
    <h4 id=\"g-modal-labelledby\">";
        // line 4
        echo twig_escape_filter($this->env, ((($context["outline"] ?? null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CREATE_OUTLINE_FROM_X", $this->getAttribute(($context["outlines"] ?? null), ($context["outline"] ?? null), [], "array"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CREATE_OUTLINE"))), "html", null, true);
        echo "</h4>
    <div class=\"inner-params\" id=\"g-modal-describedby\">
        <div class=\"settings-param input-text\">
            <span class=\"settings-param-title float-left\">
                <span data-tip=\"Outline Title\" data-tip-place=\"top-right\" aria-label=\"Outline Title\" data-title=\"Outline Title\">Title</span>
            </span>
            <div class=\"settings-param-field\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"title\" placeholder=\"";
        // line 12
        echo ((($context["duplicate"] ?? null)) ? ("Auto generate") : ("Untitled"));
        echo "\" aria-label=\"Outline Title Field\" pattern=\"[A-Za-z0-9-\\s]+\">
                </div>
            </div>
        </div>

        ";
        // line 17
        if (($context["presets"] ?? null)) {
            // line 18
            echo "        <div class=\"settings-param input-radios\">
            <span class=\"settings-param-title float-left\">
                <span data-tip=\"Create from a Preset or from an Outline\" data-tip-place=\"top-right\" aria-label=\"Create from a Preset or from an Outline\" data-title=\"Create from a Preset or from an Outline\">Create From</span>
            </span>
            <div class=\"settings-param-field\">
                <span class=\"radios\">
                    <input type=\"radio\" id=\"from-preset\" value=\"preset\" name=\"from\" checked=\"checked\" />
                    <label for=\"from-preset\">Preset</label>
                </span>
                <span class=\"radios\">
                    <input type=\"radio\" id=\"from-outline\" value=\"outline\" name=\"from\" />
                    <label for=\"from-outline\">Outline</label>
                </span>
            </div>
        </div>

        <div class=\"settings-param input-text g-create-from g-create-from-preset\">
            <span class=\"settings-param-title float-left\">
                <span data-tip=\"Outline Preset\" data-tip-place=\"top-right\" aria-label=\"Outline Preset\" data-title=\"Outline Preset\">Preset</span>
            </span>
            <div class=\"settings-param-field\">
                <div class=\"input-group\">
                    <select name=\"preset\" value=\"Untitled\" ";
            // line 40
            echo ((($context["duplicate"] ?? null)) ? ("disabled=\"disabled\"") : (""));
            echo " aria-label=\"Outline Preset Field\" data-selectize=\"\">
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
            foreach ($context['_seq'] as $context["group"] => $context["options"]) {
                // line 42
                echo "                            <optgroup label=\"";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["group"]), "html", null, true);
                echo "\">
                                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["options"]);
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 44
                    echo "                                    ";
                    $context["selected"] = ((($context["key"] == (((isset($context["outline"]) || array_key_exists("outline", $context))) ? (_twig_default_filter(($context["outline"] ?? null), "default")) : ("default")))) ? ("selected=\"selected\"") : (""));
                    // line 45
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["selected"] ?? null), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                            </optgroup>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </select>
                </div>
            </div>
        </div>

        <div class=\"settings-param input-text g-create-from g-create-from-outline\" style=\"display: none;\">
            <span class=\"settings-param-title float-left\">
                <span data-tip=\"Outline\" data-tip-place=\"top-right\" aria-label=\"Outline\" data-title=\"Outline\">Outline</span>
            </span>
            <div class=\"settings-param-field\">
                <div class=\"input-group\">
                    <select name=\"outline\" value=\"default\" aria-label=\"Outline Field\" title=\"Outline Field\" data-selectize=\"\">
                        ";
            // line 61
            $this->loadTemplate("partials/outlines-list.html.twig", "@gantry-admin/ajax/outline-new.html.twig", 61)->display($context);
            // line 62
            echo "                    </select>
                </div>
            </div>
        </div>
        ";
        } else {
            // line 67
            echo "            <input type=\"hidden\" id=\"from-preset\" value=\"outline\" name=\"from\" />
            <input type=\"hidden\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["outline"] ?? null), "html", null, true);
            echo "\" name=\"outline\" />
        ";
        }
        // line 70
        echo "
        <div class=\"settings-param input-multicheckbox g-create-from g-create-from-outline\"";
        // line 71
        if (($context["presets"] ?? null)) {
            echo " style=\"display: none;\"";
        }
        echo ">
            <span class=\"settings-param-title float-left\">
                <span data-tip=\"Inherit every Section and Children of the selected Outline. If left unchecked they will be cloned.\" data-tip-place=\"top-right\" aria-label=\"Inherit every Section and Children of the selected Outline. If left unchecked they will be cloned.\" data-title=\"Inherit every Section and Children of the selected Outline. If left unchecked they will be cloned.\">Inherit</span>
            </span>
            <div class=\"settings-param-field\">
                <div class=\"input-group\">
                    <label>
                        <input type=\"checkbox\" name=\"inherit\" value=\"1\" aria-label=\"Inherit\" checked=\"checked\">
                        <span>Inherit every Section and Children of the selected Outline. If left unchecked they will be cloned.</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"g-modal-actions\">
    <button tabindex=\"0\" class=\"button button-primary\" role=\"button\" aria-label=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONFIRM"), "html", null, true);
        echo "\" data-g-outline-create-confirm=\"";
        echo twig_escape_filter($this->env, ($context["create_route"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONFIRM"), "html", null, true);
        echo "
    </button>
    <button tabindex=\"0\" class=\"button g5-dialog-close\" role=\"button\" aria-label=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "\" data-g-outline-create-cancel=\"\">
        ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "
    </button>
</div>";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/outline-new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 91,  187 => 90,  182 => 88,  176 => 87,  155 => 71,  152 => 70,  147 => 68,  144 => 67,  137 => 62,  135 => 61,  121 => 49,  114 => 47,  101 => 45,  98 => 44,  94 => 43,  89 => 42,  85 => 41,  81 => 40,  57 => 18,  55 => 17,  47 => 12,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/ajax/outline-new.html.twig", "/Applications/MAMP/htdocs/spiro_base_wp/wp-content/plugins/gantry5/admin/templates/ajax/outline-new.html.twig");
    }
}
