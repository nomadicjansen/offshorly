<?php

/* @particles/contentarray.html.twig */
class __TwigTemplate_12816127d43a8cf2e769d9e66960b348fa76a2fb18a4bd00763563388d6d1195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentarray.html.twig", 1);
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
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["article_settings"] = $this->getAttribute(($context["particle"] ?? null), "article", array());
        // line 14
        echo "    ";
        $context["filter"] = $this->getAttribute(($context["article_settings"] ?? null), "filter", array());
        // line 15
        echo "    ";
        $context["sort"] = $this->getAttribute(($context["article_settings"] ?? null), "sort", array());
        // line 16
        echo "    ";
        $context["limit"] = $this->getAttribute(($context["article_settings"] ?? null), "limit", array());
        // line 17
        echo "    ";
        $context["display"] = $this->getAttribute(($context["article_settings"] ?? null), "display", array());
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $context["pages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", array()), "collection", array(0 => array("items" => array("@taxonomy.category" => twig_split_filter($this->env, $this->getAttribute(        // line 21
($context["filter"] ?? null), "categories", array()), " ")), "order" => array("by" => $this->getAttribute(        // line 22
($context["sort"] ?? null), "orderby", array()), "dir" => $this->getAttribute(($context["sort"] ?? null), "ordering", array())), "url_taxonomy_filters" => false), 1 => false), "method"), "slice", array(0 => $this->getAttribute(        // line 24
($context["limit"] ?? null), "start", array()), 1 => $this->getAttribute(($context["limit"] ?? null), "total", array())), "method");
        // line 25
        echo "
    ";
        // line 27
        echo "    <div class=\"g-content-array g-grav-pages";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array()), "html", null, true);
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "batch", array(0 => $this->getAttribute(($context["limit"] ?? null), "columns", array())), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 30
            echo "            <div class=\"g-grid\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                ";
                // line 36
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array())) {
                    // line 37
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array()) == "intro")) {
                        // line 38
                        echo "                                        ";
                        $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "summary", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "summary", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "summary", array()), "file", array())) : (true))) : (""));
                        // line 39
                        echo "                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array()) == "full")) {
                        // line 40
                        echo "                                        ";
                        $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "text", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "text", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "text", array()), "file", array())) : (true))) : (""));
                        // line 41
                        echo "                                    ";
                    }
                    // line 42
                    echo "
                                    ";
                    // line 43
                    $context["image"] = (((($context["file"] ?? null) === true)) ? (twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array()))) : (((($context["file"] ?? null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array()), ($context["file"] ?? null), array(), "array")) : (""))));
                    // line 44
                    echo "
                                    ";
                    // line 45
                    if (($context["image"] ?? null)) {
                        // line 46
                        echo "                                    <div class=\"g-array-item-image\">
                                        <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                        echo "\">
                                            ";
                        // line 48
                        echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", array(0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "width", array()), 900), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "image", array()), "height", array()), 300)), "method"), "html", array());
                        echo "
                                        </a>
                                    </div>
                                    ";
                    }
                    // line 52
                    echo "                                ";
                }
                // line 53
                echo "
                                ";
                // line 54
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "enabled", array())) {
                    // line 55
                    echo "                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 58
                    echo (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array())), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()))));
                    echo "
                                            </a>
                                        </h3>
                                    </div>
                                ";
                }
                // line 63
                echo "
                                ";
                // line 64
                if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array()) || ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", array()), "enabled", array()) && $this->getAttribute($context["page"], "username", array()))) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array()))) {
                    // line 65
                    echo "                                    <div class=\"g-array-item-details\">
                                        ";
                    // line 66
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array())) {
                        // line 67
                        echo "                                            <span class=\"g-array-item-date\">
                                                ";
                        // line 68
                        if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array()) == "published")) {
                            // line 69
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "publishDate", array(), "method"), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 70
($context["display"] ?? null), "date", array()), "enabled", array()) == "modified")) {
                            // line 71
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "modified", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 73
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 75
                        echo "                                            </span>
                                        ";
                    }
                    // line 77
                    echo "
                                        ";
                    // line 78
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", array()), "enabled", array()) && ($this->getAttribute($context["page"], "username", array()) || $this->getAttribute($context["page"], "author", array())))) {
                        // line 79
                        echo "                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
                        // line 80
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["page"], "author", array())) ? ($this->getAttribute($context["page"], "author", array())) : ($this->getAttribute($context["page"], "username", array()))), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 83
                    echo "
                                        ";
                    // line 84
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array())) {
                        // line 85
                        echo "                                            <span class=\"g-array-item-category\">
                                                ";
                        // line 86
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "taxonomy", array()), "category", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 87
                            echo "                                                    ";
                            if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "route", array())) {
                                // line 88
                                echo "                                                        <a href=\"";
                                echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "route", array())), "html", null, true);
                                echo "\">
                                                            <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                                // line 89
                                echo $context["category"];
                                echo "
                                                        </a>
                                                    ";
                            } else {
                                // line 92
                                echo "                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                                echo $context["category"];
                                echo "
                                                    ";
                            }
                            // line 94
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "                                            </span>
                                        ";
                    }
                    // line 97
                    echo "                                    </div>
                                ";
                }
                // line 99
                echo "
                                ";
                // line 100
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array())) {
                    // line 101
                    echo "                                    ";
                    $context["page_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["page"], "summary", array())) : ($this->getAttribute($context["page"], "content", array())));
                    // line 102
                    echo "                                    <div class=\"g-array-item-text\">
                                        ";
                    // line 103
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "formatting", array()) == "text")) {
                        // line 104
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["page_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    } else {
                        // line 106
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["page_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    }
                    // line 108
                    echo "                                    </div>
                                ";
                }
                // line 110
                echo "
                                ";
                // line 111
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "enabled", array())) {
                    // line 112
                    echo "                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                    echo "\">
                                            <button class=\"button";
                    // line 114
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "css", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "css", array()), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</button>

                                        </a>
                                    </div>
                                ";
                }
                // line 119
                echo "                            </div>
                        </div>
                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentarray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 126,  339 => 124,  329 => 119,  316 => 114,  312 => 113,  309 => 112,  307 => 111,  304 => 110,  300 => 108,  294 => 106,  288 => 104,  286 => 103,  283 => 102,  280 => 101,  278 => 100,  275 => 99,  271 => 97,  267 => 95,  261 => 94,  255 => 92,  249 => 89,  244 => 88,  241 => 87,  237 => 86,  234 => 85,  232 => 84,  229 => 83,  223 => 80,  220 => 79,  218 => 78,  215 => 77,  211 => 75,  205 => 73,  199 => 71,  197 => 70,  192 => 69,  190 => 68,  187 => 67,  185 => 66,  182 => 65,  180 => 64,  177 => 63,  169 => 58,  165 => 57,  161 => 55,  159 => 54,  156 => 53,  153 => 52,  146 => 48,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  117 => 38,  114 => 37,  112 => 36,  106 => 32,  102 => 31,  99 => 30,  95 => 29,  82 => 27,  79 => 25,  77 => 24,  76 => 22,  75 => 21,  73 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 1,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% set attr_extra = '' %}
{% if particle.extra %}
    {% for attributes in particle.extra %}
        {% for key, value in attributes %}
            {% set attr_extra = attr_extra ~ ' ' ~ key|e ~ '=\"' ~ value|e('html_attr') ~ '\"' %}
        {% endfor %}
    {% endfor %}
{% endif %}

{% block particle %}
    {% set article_settings = particle.article %}
    {% set filter = article_settings.filter %}
    {% set sort = article_settings.sort %}
    {% set limit = article_settings.limit %}
    {% set display = article_settings.display %}

    {# Content Finder #}
    {% set pages = grav.page.collection({
        items: {'@taxonomy.category': filter.categories|split(' ')},
        order: {by: sort.orderby, dir: sort.ordering},
        url_taxonomy_filters: false
    }, false).slice(limit.start, limit.total) %}

    {# All pages #}
    <div class=\"g-content-array g-grav-pages{% if particle.css.class %} {{ particle.css.class }}{% endif %}\" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>

        {% for column in pages.batch(limit.columns) %}
            <div class=\"g-grid\">
                {% for page in column %}

                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                {% if display.image.enabled %}
                                    {% if display.image.enabled == 'intro' %}
                                        {% set file = page.header.image.summary.enabled|defined(false) ? (page.header.image.summary.file ?: true) %}
                                    {% elseif display.image.enabled == 'full' %}
                                        {% set file = page.header.image.text.enabled|defined(false) ? (page.header.image.text.file ?: true) %}
                                    {% endif %}

                                    {% set image = file is same as(true) ? page.media.images|first : (file ? page.media.images[file]) %}

                                    {% if image %}
                                    <div class=\"g-array-item-image\">
                                        <a href=\"{{ page.url }}\">
                                            {{ image.cropZoom(page.header.image.width|defined(900), page.header.image.height|defined(300)).html|raw }}
                                        </a>
                                    </div>
                                    {% endif %}
                                {% endif %}

                                {% if display.title.enabled %}
                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"{{ page.url }}\">
                                                {{ (display.title.limit ? page.title|e|truncate_text(display.title.limit) : page.title|e)|raw }}
                                            </a>
                                        </h3>
                                    </div>
                                {% endif %}

                                {% if display.date.enabled or (display.author.enabled and page.username) or display.category.enabled %}
                                    <div class=\"g-array-item-details\">
                                        {% if display.date.enabled %}
                                            <span class=\"g-array-item-date\">
                                                {% if display.date.enabled == 'published' %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.publishDate()|date(display.date.format) }}
                                                {% elseif display.date.enabled == 'modified' %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.modified|date(display.date.format) }}
                                                {% else %}
                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>{{ page.date|date(display.date.format) }}
                                                {% endif %}
                                            </span>
                                        {% endif %}

                                        {% if display.author.enabled and (page.username or page.author) %}
                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>{{ page.author ?: page.username }}
                                            </span>
                                        {% endif %}

                                        {% if display.category.enabled %}
                                            <span class=\"g-array-item-category\">
                                                {% for category in page.taxonomy.category %}
                                                    {% if display.category.route %}
                                                        <a href=\"{{ base_url ~ display.category.route }}\">
                                                            <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>{{ category|raw }}
                                                        </a>
                                                    {% else %}
                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>{{ category|raw }}
                                                    {% endif %}
                                                {% endfor %}
                                            </span>
                                        {% endif %}
                                    </div>
                                {% endif %}

                                {% if display.text.type %}
                                    {% set page_text = display.text.type == 'intro' ? page.summary : page.content %}
                                    <div class=\"g-array-item-text\">
                                        {% if display.text.formatting == 'text' %}
                                            {{ page_text|truncate_text(display.text.limit)|raw }}
                                        {% else %}
                                            {{ page_text|truncate_html(display.text.limit)|raw }}
                                        {% endif %}
                                    </div>
                                {% endif %}

                                {% if display.read_more.enabled %}
                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"{{ page.url }}\">
                                            <button class=\"button{% if display.read_more.css %} {{ display.read_more.css }}{% endif %}\">{{ display.read_more.label|default('Read More...') }}</button>

                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                {% endfor %}
            </div>
        {% endfor %}
    </div>

{% endblock %}
", "@particles/contentarray.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\contentarray.html.twig");
    }
}
