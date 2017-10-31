<?php

/* @Page:C:/projects/xampp/htdocs/offshorly/user/pages/04.news */
class __TwigTemplate_886920ee32e43c5c566866bdd417019918eec8e1d4b96401be7ce1cf27a80787 extends Twig_Template
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
        return "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/04.news";
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
        return new Twig_Source("<h1>NEWS</h1>", "@Page:C:/projects/xampp/htdocs/offshorly/user/pages/04.news", "");
    }
}
