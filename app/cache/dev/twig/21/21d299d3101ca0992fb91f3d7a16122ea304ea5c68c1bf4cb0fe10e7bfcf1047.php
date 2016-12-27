<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1c30b0c01591f63f8452f832d965a25991da9fc4650af1bf84ff48a6e5923f78 extends Twig_Template
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
        $__internal_4ac0f6124d9e78c6ad0bc487cde519e85a7cd7a983e44129b1bfa8768c6e81ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac0f6124d9e78c6ad0bc487cde519e85a7cd7a983e44129b1bfa8768c6e81ad->enter($__internal_4ac0f6124d9e78c6ad0bc487cde519e85a7cd7a983e44129b1bfa8768c6e81ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4ac0f6124d9e78c6ad0bc487cde519e85a7cd7a983e44129b1bfa8768c6e81ad->leave($__internal_4ac0f6124d9e78c6ad0bc487cde519e85a7cd7a983e44129b1bfa8768c6e81ad_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0e71e9bc69db8a5402a14094d3fa49154f77f7342e0ca914f1247791e8f8110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e71e9bc69db8a5402a14094d3fa49154f77f7342e0ca914f1247791e8f8110->enter($__internal_d0e71e9bc69db8a5402a14094d3fa49154f77f7342e0ca914f1247791e8f8110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_d0e71e9bc69db8a5402a14094d3fa49154f77f7342e0ca914f1247791e8f8110->leave($__internal_d0e71e9bc69db8a5402a14094d3fa49154f77f7342e0ca914f1247791e8f8110_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
