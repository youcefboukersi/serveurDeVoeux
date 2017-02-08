<?php

/* SRVDVServerBundle:Profile:edit.html.twig */
class __TwigTemplate_5b20997d70d2bb6ba07ef305d24594c5bc6b8dca3a735a0ccc40bae03a81e746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("SRVDVServerBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:Profile:edit.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit.html.twig");
    }
}
