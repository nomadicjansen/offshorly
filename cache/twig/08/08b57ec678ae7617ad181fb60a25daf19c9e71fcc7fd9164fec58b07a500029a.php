<?php

/* @Page:C:/xampp/htdocs/offshorly/user/pages/01.home/01._nav-contacts */
class __TwigTemplate_4663813b99dd26dec408866498294983054e8b412cb7db4aaa146bee4590e27b extends Twig_Template
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
    <p><a href=\"mailto:hello@offshorly.com?Subject=Hello\">HELLO@OFFSHORLY.COM</a></p>
<!--
[![](facebook-letter-logo.svg)](http://www.facebook.com)
[![](twitter-logo.svg)](http://www.twitter.com)
[![](linkedin-logo.svg)](http://www.linkedin.com)
    <div class=\"feature-items\">
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/offshorly/user/pages/01.home/01._nav-contacts";
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
    <p><a href=\"mailto:hello@offshorly.com?Subject=Hello\">HELLO@OFFSHORLY.COM</a></p>
<!--
[![](facebook-letter-logo.svg)](http://www.facebook.com)
[![](twitter-logo.svg)](http://www.twitter.com)
[![](linkedin-logo.svg)](http://www.linkedin.com)
    <div class=\"feature-items\">
        </div>
</div>
", "@Page:C:/xampp/htdocs/offshorly/user/pages/01.home/01._nav-contacts", "");
    }
}
