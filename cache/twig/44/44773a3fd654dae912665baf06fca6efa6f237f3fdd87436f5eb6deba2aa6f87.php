<?php

/* __string_template__449bde953152e42930304c977fbfff19f8ea5073b0be4f523ea93d5a354ce315 */
class __TwigTemplate_5dcd7ec3f9f51ffe48d922cd8d2fe8bc9b45b76f4a76ca0e94dd05e8cad297f3 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", array()), "fetch", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "<div class=\"alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
            echo " alert\">";
            echo $this->getAttribute($context["message"], "message", array());
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "__string_template__449bde953152e42930304c977fbfff19f8ea5073b0be4f523ea93d5a354ce315";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for message in grav.messages.fetch %}<div class=\"alert-{{ message.scope|e }} alert\">{{ message.message|raw }}</div>{% endfor %}", "__string_template__449bde953152e42930304c977fbfff19f8ea5073b0be4f523ea93d5a354ce315", "");
    }
}
