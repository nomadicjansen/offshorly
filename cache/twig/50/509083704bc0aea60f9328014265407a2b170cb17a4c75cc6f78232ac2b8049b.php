<?php

/* @Page:C:/xampp/htdocs/offshorly/user/pages/02.portfolio/01._intro */
class __TwigTemplate_eb0a2ce354df712a3f712347af53bdc483213732ffd329695bf78f4cfd6ddcb2 extends Twig_Template
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
        echo "<div class=\"modular-row features \">
    <h1>Our Projects</h1>
<h2>Working with over 10 digital agencies based in the UK, Japan and Australia gives us a broad range of exposure to different market sectors</h2>
    <div class=\"feature-items\">
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/offshorly/user/pages/02.portfolio/01._intro";
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
        return new Twig_Source("<div class=\"modular-row features \">
    <h1>Our Projects</h1>
<h2>Working with over 10 digital agencies based in the UK, Japan and Australia gives us a broad range of exposure to different market sectors</h2>
    <div class=\"feature-items\">
        </div>
</div>
", "@Page:C:/xampp/htdocs/offshorly/user/pages/02.portfolio/01._intro", "");
    }
}
