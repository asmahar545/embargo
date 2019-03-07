<?php

/* modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig */
class __TwigTemplate_4915b3e3968ab6016fe50fe44970007d8f91a834cdc7730c297a236a074b583e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 25);
        $filters = array("t" => 39);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["button"] ?? null), "html", null, true));
        echo "
    <div id=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["id"] ?? null), "html", null, true));
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
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
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
        return array (  98 => 39,  95 => 38,  91 => 36,  89 => 35,  84 => 33,  81 => 32,  77 => 30,  75 => 29,  72 => 28,  62 => 26,  60 => 25,  52 => 20,  48 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig", "/home/grip/www/embargo/modules/field_group_modal_bootstrap/templates/field-group-modal-bootstrap.html.twig");
    }
}
