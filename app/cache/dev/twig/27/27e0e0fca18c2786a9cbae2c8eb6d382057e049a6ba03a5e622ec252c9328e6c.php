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
        $__internal_950822d13f98a5230d0d778cb45b24a695b9de8a17c38b8ac18fd26fad0959fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950822d13f98a5230d0d778cb45b24a695b9de8a17c38b8ac18fd26fad0959fa->enter($__internal_950822d13f98a5230d0d778cb45b24a695b9de8a17c38b8ac18fd26fad0959fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_950822d13f98a5230d0d778cb45b24a695b9de8a17c38b8ac18fd26fad0959fa->leave($__internal_950822d13f98a5230d0d778cb45b24a695b9de8a17c38b8ac18fd26fad0959fa_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf303c44d42d95814693feaacd85ebaa0b9a8b22fc4d0f82c6ae2e7a3ba838ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf303c44d42d95814693feaacd85ebaa0b9a8b22fc4d0f82c6ae2e7a3ba838ae->enter($__internal_cf303c44d42d95814693feaacd85ebaa0b9a8b22fc4d0f82c6ae2e7a3ba838ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_cf303c44d42d95814693feaacd85ebaa0b9a8b22fc4d0f82c6ae2e7a3ba838ae->leave($__internal_cf303c44d42d95814693feaacd85ebaa0b9a8b22fc4d0f82c6ae2e7a3ba838ae_prof);

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
