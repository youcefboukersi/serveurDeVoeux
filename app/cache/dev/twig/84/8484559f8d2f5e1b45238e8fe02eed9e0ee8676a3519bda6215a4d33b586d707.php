<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_dcfde6b799f2a10be79fd238017ec18809838aed7e0462dab008718532925c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c0acc91d2eafa9703c73d833ed289ec4a00ee43c52fc5bf1923d9376dad51907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0acc91d2eafa9703c73d833ed289ec4a00ee43c52fc5bf1923d9376dad51907->enter($__internal_c0acc91d2eafa9703c73d833ed289ec4a00ee43c52fc5bf1923d9376dad51907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0acc91d2eafa9703c73d833ed289ec4a00ee43c52fc5bf1923d9376dad51907->leave($__internal_c0acc91d2eafa9703c73d833ed289ec4a00ee43c52fc5bf1923d9376dad51907_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42c1bb40e6d009403a36e4a8fcd9f6fe2d818b2a63459a3d3163d7b17b9c822c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c1bb40e6d009403a36e4a8fcd9f6fe2d818b2a63459a3d3163d7b17b9c822c->enter($__internal_42c1bb40e6d009403a36e4a8fcd9f6fe2d818b2a63459a3d3163d7b17b9c822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_42c1bb40e6d009403a36e4a8fcd9f6fe2d818b2a63459a3d3163d7b17b9c822c->leave($__internal_42c1bb40e6d009403a36e4a8fcd9f6fe2d818b2a63459a3d3163d7b17b9c822c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
