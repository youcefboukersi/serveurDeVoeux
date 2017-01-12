<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d4ed0259d0cb603edb6e47844d9d621e001ae607dd99c8f08c1bcccabc2c79d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_284ceaa8d2ea0d4f99702cbdd844d47331a39787b44e39dfaeed27fe85457d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ceaa8d2ea0d4f99702cbdd844d47331a39787b44e39dfaeed27fe85457d0e->enter($__internal_284ceaa8d2ea0d4f99702cbdd844d47331a39787b44e39dfaeed27fe85457d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284ceaa8d2ea0d4f99702cbdd844d47331a39787b44e39dfaeed27fe85457d0e->leave($__internal_284ceaa8d2ea0d4f99702cbdd844d47331a39787b44e39dfaeed27fe85457d0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_762c62c0b34a6e9b0e38058a050810cc92bf53981046bd8f99e4fad0b0431c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762c62c0b34a6e9b0e38058a050810cc92bf53981046bd8f99e4fad0b0431c15->enter($__internal_762c62c0b34a6e9b0e38058a050810cc92bf53981046bd8f99e4fad0b0431c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_762c62c0b34a6e9b0e38058a050810cc92bf53981046bd8f99e4fad0b0431c15->leave($__internal_762c62c0b34a6e9b0e38058a050810cc92bf53981046bd8f99e4fad0b0431c15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
