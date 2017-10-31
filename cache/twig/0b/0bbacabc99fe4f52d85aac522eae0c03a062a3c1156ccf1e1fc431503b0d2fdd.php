<?php

/* @particles/mobile-menu.html.twig */
class __TwigTemplate_9a3fdad8e701781a4ac1181af8dcfeeb11250ec63d1af58a9a5443f0b1b696d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/mobile-menu.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"g-mobilemenu-container\" data-g-menu-breakpoint=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method"), "48rem")) : ("48rem")), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@particles/mobile-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}
    <div id=\"g-mobilemenu-container\" data-g-menu-breakpoint=\"{{ gantry.config.get('styles.breakpoints.mobile-menu-breakpoint')|default('48rem') }}\"></div>
{% endblock %}
", "@particles/mobile-menu.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\mobile-menu.html.twig");
    }
}
