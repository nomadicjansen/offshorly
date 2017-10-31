<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_fa970b17ea0f7db3ab60bdccbd62744c85b9b708bbb114cf7adca0292f398a76 extends Twig_Template
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
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_49af63e08b203be598f90388643d73f67c5083ec5c45b4e7fd999acf63021b2c = ($context["php_version"] ?? null)) && is_string($__internal_28fd8bca6118dd4c982a00c569ac1d316b045024fadfb3d62928bdbe78607cf2 = "5.4") && ('' === $__internal_28fd8bca6118dd4c982a00c569ac1d316b045024fadfb3d62928bdbe78607cf2 || 0 === strpos($__internal_49af63e08b203be598f90388643d73f67c5083ec5c45b4e7fd999acf63021b2c, $__internal_28fd8bca6118dd4c982a00c569ac1d316b045024fadfb3d62928bdbe78607cf2)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\admin\\templates\\partials\\php_unsupported.html.twig");
    }
}
