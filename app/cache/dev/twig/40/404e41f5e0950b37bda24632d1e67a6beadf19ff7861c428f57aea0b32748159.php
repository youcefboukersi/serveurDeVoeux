<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dd45c889146453ef271b95d71c7f69ae887082f2b2052fbff9002b9ac7212979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3e0a336a6fa1075cdb5e256d1136d109a908983b98c9701d2fd0fa2b8d445a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0a336a6fa1075cdb5e256d1136d109a908983b98c9701d2fd0fa2b8d445a9b->enter($__internal_3e0a336a6fa1075cdb5e256d1136d109a908983b98c9701d2fd0fa2b8d445a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e0a336a6fa1075cdb5e256d1136d109a908983b98c9701d2fd0fa2b8d445a9b->leave($__internal_3e0a336a6fa1075cdb5e256d1136d109a908983b98c9701d2fd0fa2b8d445a9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1502c9c60dabfbac68a08f5287a576e11b136f6e743e3bdada2096eea0bc4bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1502c9c60dabfbac68a08f5287a576e11b136f6e743e3bdada2096eea0bc4bc9->enter($__internal_1502c9c60dabfbac68a08f5287a576e11b136f6e743e3bdada2096eea0bc4bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1502c9c60dabfbac68a08f5287a576e11b136f6e743e3bdada2096eea0bc4bc9->leave($__internal_1502c9c60dabfbac68a08f5287a576e11b136f6e743e3bdada2096eea0bc4bc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
