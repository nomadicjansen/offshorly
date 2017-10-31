<?php

/* @Page:C:/projects/xampp/htdocs/offshorly/user/pages/01.home/07.form */
class __TwigTemplate_cfa77def80215d3ac92b9aadc37999d9c67939330310bd1ea6ad86765893c16c extends Twig_Template
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
        echo "<h1>Have a challenge? Let's talk.</h1>
<h2>Send us a message below, <a href=\"mailto:hello@offshorly.com?Subject=Hello\">email us</a> or call us at <a href=\"tel:+639391546020\">+63 939 154 6020</a></h2>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/01.home/07.form";
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
        return new Twig_Source("<h1>Have a challenge? Let's talk.</h1>
<h2>Send us a message below, <a href=\"mailto:hello@offshorly.com?Subject=Hello\">email us</a> or call us at <a href=\"tel:+639391546020\">+63 939 154 6020</a></h2>", "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/01.home/07.form", "");
    }
}
