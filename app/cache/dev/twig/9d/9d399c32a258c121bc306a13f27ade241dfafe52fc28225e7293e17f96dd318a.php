<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8904e80c86d378b8260da9f528953d795825c3df8fe48b92855764db80f31317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5f4241a8333617eb076eca63d1f73408bca25cc63d6a135bd5de4801011d3255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4241a8333617eb076eca63d1f73408bca25cc63d6a135bd5de4801011d3255->enter($__internal_5f4241a8333617eb076eca63d1f73408bca25cc63d6a135bd5de4801011d3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4241a8333617eb076eca63d1f73408bca25cc63d6a135bd5de4801011d3255->leave($__internal_5f4241a8333617eb076eca63d1f73408bca25cc63d6a135bd5de4801011d3255_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9394cc67122e32026b99101c73640ec030ec1f5866845794f6abf50c27625999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9394cc67122e32026b99101c73640ec030ec1f5866845794f6abf50c27625999->enter($__internal_9394cc67122e32026b99101c73640ec030ec1f5866845794f6abf50c27625999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9394cc67122e32026b99101c73640ec030ec1f5866845794f6abf50c27625999->leave($__internal_9394cc67122e32026b99101c73640ec030ec1f5866845794f6abf50c27625999_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
