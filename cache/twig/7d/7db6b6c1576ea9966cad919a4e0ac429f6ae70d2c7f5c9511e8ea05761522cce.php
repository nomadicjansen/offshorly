<?php

/* partials/seo_data.html.twig */
class __TwigTemplate_7477bac7652bed57c6203653544aea27c2c73a665a3b3ce103b62788cb79383f extends Twig_Template
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
        $context["settings"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "seo", array()), "header", array());
        // line 2
        echo "

<title>";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "googletitle", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "googletitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html", null, true);
        }
        echo "</title>


<meta name=\"description\" content=\"";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "googledesc", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "googledesc", array()), "html", null, true);
        } else {
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(\Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array())), 180), $this->getAttribute(($context["site"] ?? null), "description", array())), "html", null, true);
        }
        echo "\">
";
        // line 11
        echo "
";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "twitterenable", array()) != "0")) {
            // line 15
            echo "<meta name=\"twitter:card\" content=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "twittercardoptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "twittercardoptions", array()), "summary")) : ("summary")), "html", null, true);
            echo "\" />
";
            // line 16
            if ($this->getAttribute(($context["settings"] ?? null), "twitterid", array())) {
                // line 17
                echo "<meta name=\"twitter:site\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "twitterid", array()), "html", null, true);
                echo "\" />
";
            }
            // line 19
            echo "<meta name=\"twitter:title\" content=\"";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "twittertitle", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "twittertitle", array()), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())), "html", null, true);
            }
            echo "\" />
<meta name=\"twitter:description\" content=\"";
            // line 20
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "twitterdescription", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "twitterdescription", array()), "html", null, true);
            } else {
                echo " ";
                echo twig_escape_filter($this->env, \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array())), 140), "html", null, true);
            }
            echo "\" />
";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "twittershareimg", array())) {
                // line 23
                echo "<meta name=\"twitter:image\" content=\"";
                if ( !$this->getAttribute(($context["system"] ?? null), "absolute_urls", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "base", array(), "method"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "twittershareimg", array()), array(), "array"), "url", array(0 => true), "method"), "html", null, true);
                echo "\" />
";
            } else {
                // line 25
                echo "<meta name=\"twitter:image\" content=\"";
                if ( !$this->getAttribute(($context["system"] ?? null), "absolute_urls", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "base", array(), "method"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array(0 => true), "method"), "html", null, true);
                echo "\" />
";
            }
            // line 27
            echo "<meta name=\"twitter:url\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method"), "html", null, true);
            echo "\"/>
";
        }
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "facebookenable", array()) != "0")) {
            // line 31
            echo "<meta property=\"og:title\" content=\"";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "facebooktitle", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "facebooktitle", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["page"] ?? null), "title", array()) . " | ") . $this->getAttribute(($context["site"] ?? null), "title", array())), "html", null, true);
            }
            echo "\" />
<meta property=\"og:url\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method"), "html", null, true);
            echo "\" />
";
            // line 33
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "facebookimg", array())) {
                // line 34
                echo "<meta property=\"og:image\" content=\"";
                if ( !$this->getAttribute(($context["system"] ?? null), "absolute_urls", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "base", array(), "method"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "facebookimg", array()), array(), "array"), "url", array(0 => true), "method"), "html", null, true);
                echo "\" />
";
            } else {
                // line 36
                echo "<meta property=\"og:image\" content=\"";
                if ( !$this->getAttribute(($context["system"] ?? null), "absolute_urls", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "base", array(), "method"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array(0 => true), "method"), "html", null, true);
                echo "\" />
";
            }
            // line 38
            echo "<meta property=\"og:description\" content=\"";
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "facebookdesc", array(), "any", true, true) &&  !($context["empty"] ?? null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "facebookdesc", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, _twig_default_filter(\Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array())), 300), $this->getAttribute(($context["site"] ?? null), "description", array())), "html", null, true);
            }
            echo "\" />
";
        }
        // line 40
        echo "

";
        // line 42
        if ($this->getAttribute(($context["header"] ?? null), "articleenabled", array())) {
            // line 43
            $context["fullimagepath"] = (($this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "article", array()), "image", array()), "url", array()));
            // line 44
            $context["fulllogopath"] = (($this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method") . "/") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "article", array()), "publisher", array()), "logo", array()), "url", array()));
            // line 45
            $context["article"] = twig_array_merge($this->getAttribute(($context["header"] ?? null), "article", array()), array("image" => array("url" =>             // line 46
($context["fullimagepath"] ?? null), "@type" => "ImageObject", "height" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 48
($context["header"] ?? null), "article", array()), "image", array()), "height", array()), "width" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 49
($context["header"] ?? null), "article", array()), "image", array()), "width", array()))));
            // line 52
            $context["article"] = twig_array_merge(($context["article"] ?? null), array("publisher" => array("@type" => "Organization", "name" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "article", array()), "publisher", array()), "name", array()), "logo" => array("@type" => "ImageObject", "url" => ($context["fulllogopath"] ?? null)))));
            // line 53
            echo "<script  type=\"application/ld+json\">
";
            // line 54
            echo twig_jsonencode_filter(($context["article"] ?? null), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 57
        if ($this->getAttribute(($context["header"] ?? null), "personenabled", array())) {
            // line 58
            echo "<script  type=\"application/ld+json\">
";
            // line 59
            echo twig_jsonencode_filter($this->getAttribute(($context["header"] ?? null), "person", array()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 62
        if ($this->getAttribute(($context["header"] ?? null), "eventenabled", array())) {
            // line 63
            echo "<script  type=\"application/ld+json\">
";
            // line 64
            echo twig_jsonencode_filter($this->getAttribute(($context["header"] ?? null), "event", array()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 67
        if ($this->getAttribute(($context["header"] ?? null), "musicalbumenabled", array())) {
            // line 68
            $context["fullalbumimgpath"] = (($this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method") . "/") . $this->getAttribute($this->getAttribute(($context["header"] ?? null), "musicalbum", array()), "image", array()));
            // line 69
            $context["musicalbum"] = twig_array_merge($this->getAttribute(($context["header"] ?? null), "musicalbum", array()), array("image" => ($context["fullalbumimgpath"] ?? null)));
            // line 70
            echo "<script  type=\"application/ld+json\">
";
            // line 71
            echo twig_jsonencode_filter(($context["musicalbum"] ?? null), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 74
        if ($this->getAttribute(($context["header"] ?? null), "restaurantenabled", array())) {
            // line 75
            $context["fullrestaurantimgpath"] = (($this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method") . "/") . $this->getAttribute($this->getAttribute(($context["header"] ?? null), "restaurant", array()), "image", array()));
            // line 76
            $context["restaurant"] = twig_array_merge($this->getAttribute(($context["header"] ?? null), "restaurant", array()), array("image" => ($context["fullrestaurantimgpath"] ?? null)));
            // line 77
            echo "<script  type=\"application/ld+json\">
";
            // line 78
            echo twig_jsonencode_filter(($context["restaurant"] ?? null), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 81
        if ($this->getAttribute(($context["header"] ?? null), "musiceventenabled", array())) {
            // line 82
            echo "<script  type=\"application/ld+json\">
";
            // line 83
            $context["musicevent"] = twig_array_merge($this->getAttribute(($context["header"] ?? null), "musicevent", array()), array("startDate" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "musicevent", array()), "startDate", array()), "c")));
            // line 84
            $context["musicevent"] = twig_array_merge(($context["musicevent"] ?? null), array("endDate" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "musicevent", array()), "endDate", array()), "c")));
            // line 85
            echo "
";
            // line 86
            $context["musiceventimgpath"] = (($this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method") . "/") . $this->getAttribute($this->getAttribute(($context["header"] ?? null), "musicevent", array()), "image", array()));
            // line 87
            $context["musicevent"] = twig_array_merge(($context["musicevent"] ?? null), array("image" => ($context["musiceventimgpath"] ?? null)));
            // line 88
            echo twig_jsonencode_filter(($context["musicevent"] ?? null), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_UNESCAPED_SLASHES")));
            echo "
</script>
";
        }
        // line 91
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/seo_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 91,  251 => 88,  249 => 87,  247 => 86,  244 => 85,  242 => 84,  240 => 83,  237 => 82,  235 => 81,  229 => 78,  226 => 77,  224 => 76,  222 => 75,  220 => 74,  214 => 71,  211 => 70,  209 => 69,  207 => 68,  205 => 67,  199 => 64,  196 => 63,  194 => 62,  188 => 59,  185 => 58,  183 => 57,  177 => 54,  174 => 53,  172 => 52,  170 => 49,  169 => 48,  168 => 46,  167 => 45,  165 => 44,  163 => 43,  161 => 42,  157 => 40,  146 => 38,  137 => 36,  128 => 34,  126 => 33,  122 => 32,  112 => 31,  110 => 30,  104 => 27,  95 => 25,  86 => 23,  84 => 22,  75 => 20,  64 => 19,  58 => 17,  56 => 16,  51 => 15,  49 => 14,  46 => 11,  37 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set settings = config.plugins.seo.header %}


<title>{% if page.header.googletitle is defined and not empty %}{{ page.header.googletitle}}{% else %}{{ page.title }} | {{ site.title }}{% endif %}</title>


<meta name=\"description\" content=\"{% if page.header.googledesc is defined and not empty %}{{ page.header.googledesc }}{% else %} {{ page.summary|striptags|truncate(180)|default(site.description) }}{% endif %}\">
{# if settings.robots or page.header.robots is defined %}
<meta name=\"robots\" content=\"{{ page.header.robots|default(settings.robots)|default('index') }}\">
{% endif #}

{#<meta name=\"author\" content=\"\">#}
{# twitter #}
{% if page.header.twitterenable != \"0\" %}
<meta name=\"twitter:card\" content=\"{{ page.header.twittercardoptions|default('summary') }}\" />
{% if settings.twitterid %}
<meta name=\"twitter:site\" content=\"{{ settings.twitterid }}\" />
{% endif %}
<meta name=\"twitter:title\" content=\"{% if page.header.twittertitle is defined and not empty %}{{ page.header.twittertitle }} {% else %} {{page.title ~ \" | \" ~ site.title }}{% endif %}\" />
<meta name=\"twitter:description\" content=\"{% if page.header.twitterdescription is defined and not empty %}{{ page.header.twitterdescription }}{% else %} {{page.summary|striptags|truncate(140) }}{% endif %}\" />
{#{% if page.header.twittercardoptions or settings.twittercardoptions == \"summary\" %}#}
{% if page.header.twittershareimg %}
<meta name=\"twitter:image\" content=\"{% if not system.absolute_urls %}{{ uri.base()}}{% endif %}{{page.media[header.twittershareimg].url(true)}}\" />
{% else %}
<meta name=\"twitter:image\" content=\"{% if not system.absolute_urls %}{{ uri.base()}}{% endif %}{{page.media.images|first.url(true)}}\" />
{% endif %}
<meta name=\"twitter:url\" content=\"{{page.url(true) }}\"/>
{# {% endif %}#}
{% endif %}
{% if page.header.facebookenable != \"0\" %}
<meta property=\"og:title\" content=\"{% if page.header.facebooktitle is defined and not empty %}{{ page.header.facebooktitle }} {% else %}{{ page.title ~ \" | \" ~ site.title }}{% endif %}\" />
<meta property=\"og:url\" content=\"{{ page.url(true) }}\" />
{% if page.header.facebookimg %}
<meta property=\"og:image\" content=\"{% if not system.absolute_urls %}{{ uri.base()}}{% endif %}{{page.media[header.facebookimg].url(true)}}\" />
{% else %}
<meta property=\"og:image\" content=\"{% if not system.absolute_urls %}{{ uri.base()}}{% endif %}{{page.media.images|first.url(true)}}\" />
{% endif %}
<meta property=\"og:description\" content=\"{% if page.header.facebookdesc is defined and not empty %}{{ page.header.facebookdesc }} {% else %}{{ page.summary|striptags|truncate(300)|default(site.description) }}{% endif %}\" />
{% endif %}


{% if header.articleenabled %}
{% set fullimagepath = page.url(true) ~ \"/\" ~ header.article.image.url %}
{% set fulllogopath = page.url(true) ~ \"/\" ~ header.article.publisher.logo.url %}
{% set article = header.article|merge({'image' : {
    'url': fullimagepath,
    '@type': 'ImageObject',
    'height': header.article.image.height,
    'width': header.article.image.width
    
} }) %}
{% set article = article|merge({'publisher': { '@type': 'Organization', 'name': header.article.publisher.name, 'logo':{'@type': 'ImageObject', 'url': fulllogopath } } }) %}
<script  type=\"application/ld+json\">
{{ article|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}
{% if header.personenabled %}
<script  type=\"application/ld+json\">
{{ header.person|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}
{% if header.eventenabled %}
<script  type=\"application/ld+json\">
{{ header.event|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}
{% if header.musicalbumenabled %}
{% set fullalbumimgpath = page.url(true) ~ \"/\" ~ header.musicalbum.image %}
{% set musicalbum = header.musicalbum|merge({'image' : fullalbumimgpath }) %}
<script  type=\"application/ld+json\">
{{ musicalbum|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}
{% if header.restaurantenabled %}
{% set fullrestaurantimgpath = page.url(true) ~ \"/\" ~ header.restaurant.image %}
{% set restaurant = header.restaurant|merge({'image' : fullrestaurantimgpath }) %}
<script  type=\"application/ld+json\">
{{ restaurant|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}
{% if header.musiceventenabled %}
<script  type=\"application/ld+json\">
{% set musicevent = header.musicevent|merge({'startDate' : header.musicevent.startDate|date('c')}) %}
{% set musicevent = musicevent|merge({'endDate' : header.musicevent.endDate|date('c')}) %}

{% set musiceventimgpath = page.url(true) ~ \"/\" ~ header.musicevent.image %}
{% set musicevent = musicevent|merge({'image' : musiceventimgpath }) %}
{{ musicevent|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_SLASHES'))|raw }}
</script>
{% endif %}

", "partials/seo_data.html.twig", "C:\\xampp\\htdocs\\offshorly\\user\\plugins\\seo\\templates\\partials\\seo_data.html.twig");
    }
}
