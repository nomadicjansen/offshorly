<?php

/* forms/fields/gantry/inherit.html.twig */
class __TwigTemplate_cf63e13e17be4b3b040a6e8ad3a3780422f5fdd4198361fa0a33827a7e829c66 extends Twig_Template
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
        echo "<div class=\"g-inherit";
        echo ((($context["inherit"] ?? null)) ? ("") : (" hide"));
        echo "\">
    <div class=\"g-inherit-content\">
        ";
        // line 3
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITING_FROM_X", (("<strong>" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "name", array(0 => ($context["inherit"] ?? null)), "method"))) . "</strong>"));
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/inherit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/gantry/inherit.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\admin\\templates\\forms\\fields\\gantry\\inherit.html.twig");
    }
}
