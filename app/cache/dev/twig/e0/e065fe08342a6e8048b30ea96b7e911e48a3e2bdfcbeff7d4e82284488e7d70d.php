<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_f986ac799b28b96772cf754daa9bc6b092cad7e45d09a7dcd0da4d25ef52ee84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2a22de6cffe361683406019579a2fe0b2edd76074f3c1b92dd38898d4d5f18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a22de6cffe361683406019579a2fe0b2edd76074f3c1b92dd38898d4d5f18f->enter($__internal_f2a22de6cffe361683406019579a2fe0b2edd76074f3c1b92dd38898d4d5f18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2a22de6cffe361683406019579a2fe0b2edd76074f3c1b92dd38898d4d5f18f->leave($__internal_f2a22de6cffe361683406019579a2fe0b2edd76074f3c1b92dd38898d4d5f18f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8b1d12ce88a468fc59fbbfe92c454e758890a8133f1c28782001f928a988d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b1d12ce88a468fc59fbbfe92c454e758890a8133f1c28782001f928a988d1a->enter($__internal_f8b1d12ce88a468fc59fbbfe92c454e758890a8133f1c28782001f928a988d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f8b1d12ce88a468fc59fbbfe92c454e758890a8133f1c28782001f928a988d1a->leave($__internal_f8b1d12ce88a468fc59fbbfe92c454e758890a8133f1c28782001f928a988d1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
