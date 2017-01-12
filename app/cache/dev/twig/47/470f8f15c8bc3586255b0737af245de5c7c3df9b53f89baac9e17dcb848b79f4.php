<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_47987fdec56864e2731a7eee3e7f6398752923196163ec721a1591492f565b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d001dfd0d023e10c0b4eb0dd3c42e4d3e0a33e7fe289ef39bef429be168c8cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d001dfd0d023e10c0b4eb0dd3c42e4d3e0a33e7fe289ef39bef429be168c8cae->enter($__internal_d001dfd0d023e10c0b4eb0dd3c42e4d3e0a33e7fe289ef39bef429be168c8cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d001dfd0d023e10c0b4eb0dd3c42e4d3e0a33e7fe289ef39bef429be168c8cae->leave($__internal_d001dfd0d023e10c0b4eb0dd3c42e4d3e0a33e7fe289ef39bef429be168c8cae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_147fac311cb09709417d8ff6847a19d5f8d7c4868cae624ae4457ba4bd37cef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147fac311cb09709417d8ff6847a19d5f8d7c4868cae624ae4457ba4bd37cef3->enter($__internal_147fac311cb09709417d8ff6847a19d5f8d7c4868cae624ae4457ba4bd37cef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_147fac311cb09709417d8ff6847a19d5f8d7c4868cae624ae4457ba4bd37cef3->leave($__internal_147fac311cb09709417d8ff6847a19d5f8d7c4868cae624ae4457ba4bd37cef3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
