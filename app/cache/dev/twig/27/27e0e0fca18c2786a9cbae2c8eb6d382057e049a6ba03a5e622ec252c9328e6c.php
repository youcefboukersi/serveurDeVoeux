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
        $__internal_b198d56026eb500039e8548a142b1bcaf72f2799d6eb24996353bd486ab02503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b198d56026eb500039e8548a142b1bcaf72f2799d6eb24996353bd486ab02503->enter($__internal_b198d56026eb500039e8548a142b1bcaf72f2799d6eb24996353bd486ab02503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b198d56026eb500039e8548a142b1bcaf72f2799d6eb24996353bd486ab02503->leave($__internal_b198d56026eb500039e8548a142b1bcaf72f2799d6eb24996353bd486ab02503_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12a1b1a2bb7ce05689bf3492a14f2db1007f64527f5300bf055e48000342b3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a1b1a2bb7ce05689bf3492a14f2db1007f64527f5300bf055e48000342b3ec->enter($__internal_12a1b1a2bb7ce05689bf3492a14f2db1007f64527f5300bf055e48000342b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_12a1b1a2bb7ce05689bf3492a14f2db1007f64527f5300bf055e48000342b3ec->leave($__internal_12a1b1a2bb7ce05689bf3492a14f2db1007f64527f5300bf055e48000342b3ec_prof);

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
