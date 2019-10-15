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

/* modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig */
class __TwigTemplate_c37d3877bc59f7e5e2557d47fdd7a34b32389d780ad61389ceefdf251c8dd615 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25];
        $filters = ["escape" => 18, "t" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null)), "html", null, true);
        echo "
    <div id=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" class=\"modal fade\" style=\"display:none;\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    ";
        // line 25
        if (($context["title"] ?? null)) {
            // line 26
            echo "                        <h4";
            if (($context["collapsible"] ?? null)) {
                echo " class=\"field-group-toggler\"";
            }
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 28
        echo "                </div>
                ";
        // line 29
        if (($context["collapsible"] ?? null)) {
            // line 30
            echo "                <div class=\"field-group-wrapper\">
                    ";
        }
        // line 32
        echo "                    <div class=\"modal-body\">
                        ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
                    </div>
                    ";
        // line 35
        if (($context["collapsible"] ?? null)) {
            // line 36
            echo "                </div>
                ";
        }
        // line 38
        echo "                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</button>
                </div>
            </div>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  107 => 38,  103 => 36,  101 => 35,  96 => 33,  93 => 32,  89 => 30,  87 => 29,  84 => 28,  74 => 26,  72 => 25,  64 => 20,  60 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig", "C:\\wamp64\\www\\embargo\\modules\\field_group_modal_bootstrap\\templates\\field-group-modal-bootstrap.html.twig");
    }
}
