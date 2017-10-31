<?php

/* @particles/feed.html.twig */
class __TwigTemplate_67577d9cff70df4c0b3322051d92c4fcf8e7f1d7111a5bb01deaf0bbcf6e2411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/feed.html.twig", 1);
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
        echo "    ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array()) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "feed", array()), "skip", array())) && $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()))) {
            // line 5
            echo "    <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())), "html", null, true);
            echo ".atom\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())), "html", null, true);
            echo ".rss\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> RSS</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    {% if config.plugins.feed.enabled and not page.feed.skip and page.header.content %}
    <a class=\"button\" href=\"{{ base_url_relative ~ page.route }}.atom\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ base_url_relative ~ page.route }}.rss\"><i class=\"fa fa-rss-square\" aria-hidden=\"true\"></i> RSS</a>
    {% endif %}
{% endblock %}
", "@particles/feed.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\feed.html.twig");
    }
}
