<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_5c43596ba35a047437cf8ce42f795c293a0f14316df95b5c585507d59bd98712 extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        if (($context["truncate"] ?? null)) {
            // line 4
            echo "        ";
            $context["image_file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "summary", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "summary", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "summary", array()), "file", array())) : (true))) : (""));
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $context["image_file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "text", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "text", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "text", array()), "file", array())) : (true))) : (""));
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    <div class=\"list-blog-header\">
        ";
        // line 10
        if (($context["image_file"] ?? null)) {
            // line 11
            echo "            ";
            $context["image"] = (((($context["image_file"] ?? null) === true)) ? (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) : (((($context["image_file"] ?? null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["image_file"] ?? null), array(), "array")) : (""))));
            // line 12
            echo "            ";
            if (($context["image"] ?? null)) {
                // line 13
                echo "                ";
                echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", array(0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "width", array()), 900), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image", array()), "height", array()), 300)), "method"), "html", array());
                echo "
            ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        if (($context["truncate"] ?? null)) {
            // line 17
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
                // line 18
                echo "            <h2 class=\"p-name\">
                ";
                // line 19
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                    // line 20
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-angle-double-right u-url\" aria-hidden=\"true\"></i></a>
                ";
                }
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array()), "html", null, true);
                echo "\" class=\"u-url\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
                echo "</a>
            </h2>
        ";
            } else {
                // line 25
                echo "            <h2 class=\"p-name\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array()), "html", null, true);
                echo "\" class=\"u-url\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
                echo "</a></h2>
        ";
            }
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "            <h2 class=\"p-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
            echo "</h2>
        ";
        }
        // line 30
        echo "


        ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()) || ($context["show_date"] ?? null))) {
            // line 34
            echo "        <div class=\"list-blog-meta\">
            ";
            // line 35
            if (($context["show_date"] ?? null)) {
                // line 36
                echo "            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
            <time class=\"dt-published\" datetime=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c"), "html", null, true);
                echo "\">
                ";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "jS M Y"), "html", null, true);
                echo "
            </time>
            ";
            }
            // line 41
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                echo " <span class=\"separator\">/</span> ";
            }
            // line 42
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 43
                echo "            <i class=\"fa fa-tags\" aria-hidden=\"true\"></i>
            <span class=\"tags\">
                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 46
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/"), "html", null, true);
                    echo "/tag";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "\" class=\"p-category\">";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 47
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "            </span>
            ";
            }
            // line 50
            echo "        </div>
        ";
        }
        // line 52
        echo "    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 56
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            echo " 
        <div class=\"e-content\">
            ";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>
        ";
            // line 60
            if ( !($context["truncate"] ?? null)) {
                // line 61
                echo "        ";
                $context["show_prev_next"] = true;
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 64
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 65
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            <p><a class=\"read-more button\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array()), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_READMORE"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_READMORE"))), "html", null, true);
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 68
($context["truncate"] ?? null)) {
            // line 69
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 70
            if (($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array()))) {
                // line 71
                echo "                    ";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
                echo "
            ";
            } else {
                // line 73
                echo "                    ";
                echo $this->getAttribute(($context["page"] ?? null), "content", array());
                echo "

            ";
            }
            // line 76
            echo "            <p><a class=\"read-more button\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array()), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_READMORE"))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_READMORE"))), "html", null, true);
            echo "</a></p>
        </div>
    ";
        } else {
            // line 79
            echo "        <div class=\"e-content\">
            ";
            // line 80
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>

        ";
            // line 83
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 84
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 84)->display($context);
                // line 85
                echo "        ";
            }
            // line 86
            echo "
        ";
            // line 87
            $context["show_prev_next"] = true;
            // line 88
            echo "    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if (($context["show_prev_next"] ?? null)) {
            // line 91
            echo "
        <p class=\"prev-next\">
            ";
            // line 93
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 94
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_BLOG_ITEM_NEXT_POST"), "html", null, true);
                echo "</a>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 98
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_BLOG_ITEM_PREV_POST"), "html", null, true);
                echo " <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
            ";
            }
            // line 100
            echo "        </p>
    ";
        }
        // line 102
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 102,  316 => 100,  308 => 98,  306 => 97,  303 => 96,  295 => 94,  293 => 93,  289 => 91,  287 => 90,  284 => 89,  281 => 88,  279 => 87,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  262 => 80,  259 => 79,  250 => 76,  243 => 73,  237 => 71,  235 => 70,  232 => 69,  230 => 68,  223 => 66,  219 => 65,  216 => 64,  213 => 63,  210 => 62,  207 => 61,  205 => 60,  200 => 58,  195 => 56,  189 => 52,  185 => 50,  181 => 48,  167 => 47,  155 => 46,  138 => 45,  134 => 43,  131 => 42,  126 => 41,  120 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  106 => 33,  101 => 30,  95 => 28,  92 => 27,  84 => 25,  75 => 22,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  49 => 13,  46 => 12,  43 => 11,  41 => 10,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% if truncate %}
        {% set image_file = page.header.image.summary.enabled|defined(false) ? (page.header.image.summary.file ?: true) %}
    {% else %}
        {% set image_file = page.header.image.text.enabled|defined(false) ? (page.header.image.text.file ?: true) %}
    {% endif %}

    <div class=\"list-blog-header\">
        {% if image_file %}
            {% set image = image_file is same as(true) ? page.media.images|first : (image_file ? page.media.images[image_file]) %}
            {% if image %}
                {{ image.cropZoom(page.header.image.width|defined(900), page.header.image.height|defined(300)).html|raw }}
            {% endif %}
        {% endif %}
        {% if truncate %}
        {% if page.header.link %}
            <h2 class=\"p-name\">
                {% if page.header.continue_link is not same as(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\" aria-hidden=\"true\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h2>
        {% else %}
            <h2 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h2>
        {% endif %}
        {% else %}
            <h2 class=\"p-name\">{{ page.title }}</h2>
        {% endif %}



        {% if page.taxonomy.tag or show_date  %}
        <div class=\"list-blog-meta\">
            {% if show_date %}
            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                {{ page.date|date('jS M Y') }}
            </time>
            {% endif %}
            {% if page.taxonomy.tag %} <span class=\"separator\">/</span> {% endif %}
            {% if page.taxonomy.tag %}
            <i class=\"fa fa-tags\" aria-hidden=\"true\"></i>
            <span class=\"tags\">
                {% for tag in page.taxonomy.tag %}
                <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
            {% endif %}
        </div>
        {% endif %}
    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is same as(false) %} 
        <div class=\"e-content\">
            {{ page.content|raw }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary|raw }}
            <p><a class=\"read-more button\" href=\"{{ page.url }}\">{{ display.read_more.label|default('GANTRY5_ENGINE_READMORE'|trans) }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {% if page.summary != page.content %}
                    {{ page.content|truncate(550)|raw }}
            {% else %}
                    {{ page.content|raw }}

            {% endif %}
            <p><a class=\"read-more button\" href=\"{{ page.url }}\">{{ display.read_more.label|default('GANTRY5_ENGINE_READMORE'|trans) }}</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content|raw }}
        </div>

        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i> {{ 'GANTRY5_ENGINE_BLOG_ITEM_NEXT_POST'|trans }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'GANTRY5_ENGINE_BLOG_ITEM_PREV_POST'|trans }} <i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "C:\\projects\\xampp\\htdocs\\offshorly\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\partials\\blog_item.html.twig");
    }
}
