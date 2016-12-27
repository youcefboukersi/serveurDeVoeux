<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_35709ff032587c2b99c000bfccdd99237be2bcddef0b1825b6e303fc74b7e112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_68cc04e31490ef0f5d175010466a9fdeafa180a44a267e5b9916cb5bc3e48e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cc04e31490ef0f5d175010466a9fdeafa180a44a267e5b9916cb5bc3e48e7d->enter($__internal_68cc04e31490ef0f5d175010466a9fdeafa180a44a267e5b9916cb5bc3e48e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68cc04e31490ef0f5d175010466a9fdeafa180a44a267e5b9916cb5bc3e48e7d->leave($__internal_68cc04e31490ef0f5d175010466a9fdeafa180a44a267e5b9916cb5bc3e48e7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_995b0c966192f309f9b3caa2e6bdcd770af9efbbe7f476243a6efbde8e498e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995b0c966192f309f9b3caa2e6bdcd770af9efbbe7f476243a6efbde8e498e1a->enter($__internal_995b0c966192f309f9b3caa2e6bdcd770af9efbbe7f476243a6efbde8e498e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_995b0c966192f309f9b3caa2e6bdcd770af9efbbe7f476243a6efbde8e498e1a->leave($__internal_995b0c966192f309f9b3caa2e6bdcd770af9efbbe7f476243a6efbde8e498e1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
