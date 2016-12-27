<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c45d9bea076debcbc2bd55572c711fcbfd714ff5f0670e2c4383b159b2b4cd06 extends Twig_Template
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
        $__internal_1dbb4a591bdef0be0373345ac5af3f9c63101d097f91fc9b9f8138cd234afb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbb4a591bdef0be0373345ac5af3f9c63101d097f91fc9b9f8138cd234afb18->enter($__internal_1dbb4a591bdef0be0373345ac5af3f9c63101d097f91fc9b9f8138cd234afb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1dbb4a591bdef0be0373345ac5af3f9c63101d097f91fc9b9f8138cd234afb18->leave($__internal_1dbb4a591bdef0be0373345ac5af3f9c63101d097f91fc9b9f8138cd234afb18_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba6474d72dc45f4a643654f86eae2444ed5c715825293511eb64e13db014f8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6474d72dc45f4a643654f86eae2444ed5c715825293511eb64e13db014f8fa->enter($__internal_ba6474d72dc45f4a643654f86eae2444ed5c715825293511eb64e13db014f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ba6474d72dc45f4a643654f86eae2444ed5c715825293511eb64e13db014f8fa->leave($__internal_ba6474d72dc45f4a643654f86eae2444ed5c715825293511eb64e13db014f8fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit.html.twig");
    }
}
