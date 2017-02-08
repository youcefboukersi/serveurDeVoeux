<?php

/* SRVDVServerBundle:Registration:register.html.twig */
class __TwigTemplate_bffd4b90b06e7244778deba5464cb577a7eeed682b0c655424f3421097ed54e6 extends Twig_Template
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
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "SRVDVServerBundle:Registration:register.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:Registration:register.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
