<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_45139fbdf6ece912f117df273c313964b3d5a01ba3cd9c1f44f2bfafe910a1dc extends Twig_Template
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
        $__internal_b99b9501d4589e46e4ed12e18a9e9c3d6de09be47467de450e1aacfe165e5e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99b9501d4589e46e4ed12e18a9e9c3d6de09be47467de450e1aacfe165e5e54->enter($__internal_b99b9501d4589e46e4ed12e18a9e9c3d6de09be47467de450e1aacfe165e5e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b99b9501d4589e46e4ed12e18a9e9c3d6de09be47467de450e1aacfe165e5e54->leave($__internal_b99b9501d4589e46e4ed12e18a9e9c3d6de09be47467de450e1aacfe165e5e54_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b25da26c2b8afcbc2a2be8a0a54067ddf3ba44d1c793279aa6fa803a17fd3ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25da26c2b8afcbc2a2be8a0a54067ddf3ba44d1c793279aa6fa803a17fd3ea5->enter($__internal_b25da26c2b8afcbc2a2be8a0a54067ddf3ba44d1c793279aa6fa803a17fd3ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_b25da26c2b8afcbc2a2be8a0a54067ddf3ba44d1c793279aa6fa803a17fd3ea5->leave($__internal_b25da26c2b8afcbc2a2be8a0a54067ddf3ba44d1c793279aa6fa803a17fd3ea5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
