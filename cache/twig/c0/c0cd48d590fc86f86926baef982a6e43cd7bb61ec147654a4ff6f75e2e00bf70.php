<?php

/* @Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.news */
class __TwigTemplate_78c53df32cd83ddcf0336721fd834144ab9e53fe53fbd8a2613d705682ad0251 extends Twig_Template
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
        echo "<h1>NEWS</h1>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.news";
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
        return new Twig_Source("<h1>NEWS</h1>", "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/03.news", "");
    }
}
