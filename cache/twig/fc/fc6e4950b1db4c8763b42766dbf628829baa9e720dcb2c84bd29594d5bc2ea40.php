<?php

/* @Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.rates/thankyou */
class __TwigTemplate_dc66ce033039ad4ad1d9f13218d5a4cef77b747429a25055c32cc09aa7cbf95f extends Twig_Template
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
        echo "<h1>Your message was sent successfully.</h1>
<h2>We will be in contact within 24 hours</h2>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.rates/thankyou";
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
        return new Twig_Source("<h1>Your message was sent successfully.</h1>
<h2>We will be in contact within 24 hours</h2>", "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.rates/thankyou", "");
    }
}
