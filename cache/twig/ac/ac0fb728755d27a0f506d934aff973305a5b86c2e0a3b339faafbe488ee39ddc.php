<?php

/* @Page:C:/xampp/htdocs/offshorly/user/pages/thankyou */
class __TwigTemplate_fb176137910b53fe76afb47824a3623c236dc35ba5d8af9b80ebfdda8e0a1a04 extends Twig_Template
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
        return "@Page:C:/xampp/htdocs/offshorly/user/pages/thankyou";
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
<h2>We will be in contact within 24 hours</h2>", "@Page:C:/xampp/htdocs/offshorly/user/pages/thankyou", "");
    }
}
