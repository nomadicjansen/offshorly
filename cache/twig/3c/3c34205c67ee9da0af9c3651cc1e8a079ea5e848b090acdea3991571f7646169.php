<?php

/* @particles/accordionmenu.html.twig */
class __TwigTemplate_78e37a4ec28e5b3c796c4799a6fde1479570bd07231ad55ad8ee06e84774b4df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/accordionmenu.html.twig", 1);
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
    <div class=\"g-accordionmenu\">
        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "            <nav class=\"nav\" role=\"navigation\">
                <ul class=\"nav__list\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "group", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "                    <li>
                        <input id=\"group-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" type=\"checkbox\" hidden />
                        <label for=\"group-";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"><span class=\"indicator\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "</label>
                        ";
            // line 13
            if ($this->getAttribute($context["group"], "items", array())) {
                // line 14
                echo "                        <ul class=\"group-list\">
                            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 16
                    echo "                            <li><a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_blank")) : ("_blank")), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                        </ul>
                        ";
            }
            // line 20
            echo "                    </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
            </nav>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/accordionmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  103 => 20,  99 => 18,  86 => 16,  82 => 15,  79 => 14,  77 => 13,  71 => 12,  67 => 11,  64 => 10,  47 => 9,  43 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"{{ particle.class|e }}\">
    <div class=\"g-accordionmenu\">
        {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}
            <nav class=\"nav\" role=\"navigation\">
                <ul class=\"nav__list\">
                    {% for group in particle.group %}
                    <li>
                        <input id=\"group-{{ loop.index }}\" type=\"checkbox\" hidden />
                        <label for=\"group-{{ loop.index }}\"><span class=\"indicator\"></span> {{ group.title }}</label>
                        {% if group.items %}
                        <ul class=\"group-list\">
                            {% for item in group.items %}
                            <li><a target=\"{{ item.target|default('_blank') }}\" href=\"{{ item.link }}\">{{ item.title }}</a></li>
                            {% endfor %}
                        </ul>
                        {% endif %}
                    </li>
                    {% endfor %}
                </ul>
            </nav>
    </div>
</div>
{% endblock %}
", "@particles/accordionmenu.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\themes\\rt_gemini\\particles\\accordionmenu.html.twig");
    }
}
