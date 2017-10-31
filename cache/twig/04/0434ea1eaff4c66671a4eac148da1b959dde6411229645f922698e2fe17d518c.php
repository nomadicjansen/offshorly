<?php

/* @nucleus/page_head.html.twig */
class __TwigTemplate_b740fffa0a2741926b787f659092c4cd1ba857d8e5d89e641920b14ef7513a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_platform' => array($this, 'block_head_platform'),
            'head_overrides' => array($this, 'block_head_overrides'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
            'head_ie_stylesheets' => array($this, 'block_head_ie_stylesheets'),
            'head' => array($this, 'block_head'),
            'head_custom' => array($this, 'block_head_custom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "debugger", array()), "assets", array(), "method");
        // line 2
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "loadAtoms", array(), "method");
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "    ";
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 13
        $this->displayBlock('head_platform', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('head_overrides', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 22
        echo "<head>
    ";
        // line 23
        $this->displayBlock('head_meta', $context, $blocks);
        // line 51
        $this->displayBlock('head_title', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('head_application', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('head_ie_stylesheets', $context, $blocks);
        // line 69
        $this->displayBlock('head', $context, $blocks);
        // line 70
        echo "    ";
        $this->displayBlock('head_custom', $context, $blocks);
        // line 75
        echo "</head>
";
    }

    // line 5
    public function block_head_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"gantry-assets://css/font-awesome.min.css\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"gantry-engine://css-compiled/nucleus.css\" type=\"text/css\"/>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "files", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "files", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["scss"]) {
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["scss"], "html", null, true);
            echo ".scss\" type=\"text/css\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
    }

    // line 13
    public function block_head_platform($context, array $blocks = array())
    {
    }

    // line 15
    public function block_head_overrides($context, array $blocks = array())
    {
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "configuration", array()), "css", array()), "overrides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["scss"]) {
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["scss"], "html", null, true);
            echo ".scss\" type=\"text/css\"/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
    }

    // line 23
    public function block_head_meta($context, array $blocks = array())
    {
        // line 24
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 28
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "seo", array()), "enabled", array())) {
            // line 29
            echo "        ";
            $this->loadTemplate("partials/seo_data.html.twig", "@nucleus/page_head.html.twig", 29)->display($context);
            // line 30
            echo "        ";
        }
        // line 31
        echo "        ";
        // line 32
        echo "    
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "meta", array())) {
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "meta", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 36
                    echo "                    <meta name=\"";
                    echo twig_escape_filter($this->env, $context["key"]);
                    echo "\" property=\"";
                    echo twig_escape_filter($this->env, $context["key"]);
                    echo "\" content=\"";
                    echo twig_escape_filter($this->env, $context["value"]);
                    echo "\" />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "favicon", array())) {
            // line 42
            echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "favicon", array())), "html", null, true);
            echo "\" />
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())) {
            // line 46
            echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "assets", array()), "touchicon", array())), "html", null, true);
            echo "\">
        ";
        }
        // line 49
        echo "    ";
    }

    // line 51
    public function block_head_title($context, array $blocks = array())
    {
        // line 52
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Title</title>";
    }

    // line 56
    public function block_head_application($context, array $blocks = array())
    {
        // line 57
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "styles", array(0 => "head"), "method"), "
");
        echo "
        ";
        // line 58
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "scripts", array(0 => "head"), "method"), "
");
    }

    // line 61
    public function block_head_ie_stylesheets($context, array $blocks = array())
    {
        // line 62
        echo "<!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/html5shiv-printshiv.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-engine://css/nucleus-ie9.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/matchmedia.polyfill.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    ";
    }

    // line 69
    public function block_head($context, array $blocks = array())
    {
    }

    // line 70
    public function block_head_custom($context, array $blocks = array())
    {
        // line 71
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "head_bottom", array())) {
            // line 72
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "head", array()), "head_bottom", array());
            echo "
        ";
        }
        // line 74
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@nucleus/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 74,  260 => 72,  257 => 71,  254 => 70,  249 => 69,  242 => 65,  238 => 64,  234 => 63,  231 => 62,  228 => 61,  223 => 58,  218 => 57,  215 => 56,  210 => 52,  207 => 51,  203 => 49,  198 => 47,  193 => 46,  191 => 45,  188 => 44,  182 => 42,  180 => 41,  162 => 36,  158 => 35,  154 => 34,  152 => 33,  149 => 32,  147 => 31,  144 => 30,  141 => 29,  138 => 28,  133 => 24,  130 => 23,  126 => 19,  118 => 17,  114 => 16,  111 => 15,  106 => 13,  102 => 11,  94 => 9,  90 => 8,  86 => 6,  83 => 5,  78 => 75,  75 => 70,  73 => 69,  71 => 61,  68 => 60,  66 => 56,  63 => 55,  61 => 51,  59 => 23,  56 => 22,  52 => 15,  49 => 14,  47 => 13,  44 => 5,  32 => 4,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- do gantry.debugger.assets() -%}
{%- do gantry.theme.loadAtoms() -%}

{% assets with { priority: 10 } %}
    {% block head_stylesheets -%}
        <link rel=\"stylesheet\" href=\"gantry-assets://css/font-awesome.min.css\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"gantry-engine://css-compiled/nucleus.css\" type=\"text/css\"/>
        {% for scss in gantry.theme.configuration.css.persistent|default(gantry.theme.configuration.css.files) %}
        <link rel=\"stylesheet\" href=\"{{ scss }}.scss\" type=\"text/css\"/>
        {%- endfor %}
    {% endblock -%}

    {% block head_platform %}{% endblock %}

    {% block head_overrides -%}
        {% for scss in gantry.theme.configuration.css.overrides %}
        <link rel=\"stylesheet\" href=\"{{ scss }}.scss\" type=\"text/css\"/>
        {%- endfor %}
    {% endblock -%}
{% endassets -%}

<head>
    {% block head_meta %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        {# Added for SEO Plugin #}
        {% if config.plugins.seo.enabled %}
        {% include 'partials/seo_data.html.twig' %}
        {% endif %}
        {# /Added for SEO Plugin #}
    
        {% if gantry.config.page.head.meta -%}
            {% for attributes in gantry.config.page.head.meta -%}
                {%- for key, value in attributes %}
                    <meta name=\"{{ key|e }}\" property=\"{{ key|e }}\" content=\"{{ value|e }}\" />
                {% endfor -%}
            {%- endfor -%}
        {%- endif -%}

        {% if gantry.config.page.assets.favicon %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ url(gantry.config.page.assets.favicon) }}\" />
        {% endif %}

        {% if gantry.config.page.assets.touchicon %}
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url(gantry.config.page.assets.touchicon) }}\">
        <link rel=\"icon\" sizes=\"192x192\" href=\"{{ url(gantry.config.page.assets.touchicon) }}\">
        {% endif %}
    {% endblock %}

    {%- block head_title -%}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Title</title>
    {%- endblock %}

    {% block head_application -%}
        {{ gantry.styles('head')|join(\"\\n\")|raw }}
        {{ gantry.scripts('head')|join(\"\\n\")|raw }}
    {%- endblock %}

    {% block head_ie_stylesheets -%}
        <!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/html5shiv-printshiv.min.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ url('gantry-engine://css/nucleus-ie9.css') }}\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/matchmedia.polyfill.js') }}\"></script>
        <![endif]-->
    {% endblock -%}

    {% block head %}{% endblock %}
    {% block head_custom %}
        {% if gantry.config.page.head.head_bottom %}
        {{ gantry.config.page.head.head_bottom|raw }}
        {% endif %}
    {% endblock %}
</head>
", "@nucleus/page_head.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\page_head.html.twig");
    }
}
