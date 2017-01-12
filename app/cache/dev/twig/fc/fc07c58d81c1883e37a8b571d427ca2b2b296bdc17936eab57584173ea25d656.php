<?php

/* @SRVDVServer/ChangePassword/changePassword.html.twig */
class __TwigTemplate_24d0232cc9ab1457532bd0e304dfab7913eec9f0135cfd5fa7518383822dd205 extends Twig_Template
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
        $__internal_d62b0ff47377ac413380d2cba15c0e2ee617765301436bb5839c3f6b8ba2fec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62b0ff47377ac413380d2cba15c0e2ee617765301436bb5839c3f6b8ba2fec1->enter($__internal_d62b0ff47377ac413380d2cba15c0e2ee617765301436bb5839c3f6b8ba2fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d62b0ff47377ac413380d2cba15c0e2ee617765301436bb5839c3f6b8ba2fec1->leave($__internal_d62b0ff47377ac413380d2cba15c0e2ee617765301436bb5839c3f6b8ba2fec1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50803c39ce7eb5c0416de67557a7efbafc149f1b4771513ae3948137b3ebadd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50803c39ce7eb5c0416de67557a7efbafc149f1b4771513ae3948137b3ebadd2->enter($__internal_50803c39ce7eb5c0416de67557a7efbafc149f1b4771513ae3948137b3ebadd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_50803c39ce7eb5c0416de67557a7efbafc149f1b4771513ae3948137b3ebadd2->leave($__internal_50803c39ce7eb5c0416de67557a7efbafc149f1b4771513ae3948137b3ebadd2_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/ChangePassword/changePassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/ChangePassword/changePassword.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
