<?php

/* @SRVDVServer/ChangePassword/changePassword.html.twig */
class __TwigTemplate_132117cc5f0769881f77a9e5831c6eb3a914cfaa356f1c1e8da39fd97dd04cf9 extends Twig_Template
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
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/ChangePassword/changePassword.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/ChangePassword/changePassword.html.twig";
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
        return new Twig_Source("", "@SRVDVServer/ChangePassword/changePassword.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
