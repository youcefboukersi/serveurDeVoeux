<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8502890e25dd34c4ac5d38d9177c3c53ee156b0be8ce2432e9c23ace46e2aa27 extends Twig_Template
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
        $__internal_c2f8eb7049dccea8036fc08f6cf0ed2b7d060c145d66802491bb8780fdbf8231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f8eb7049dccea8036fc08f6cf0ed2b7d060c145d66802491bb8780fdbf8231->enter($__internal_c2f8eb7049dccea8036fc08f6cf0ed2b7d060c145d66802491bb8780fdbf8231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f8eb7049dccea8036fc08f6cf0ed2b7d060c145d66802491bb8780fdbf8231->leave($__internal_c2f8eb7049dccea8036fc08f6cf0ed2b7d060c145d66802491bb8780fdbf8231_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbc30c1a7ce87647429d6319521c91c9a752e696c32591e33b8ef272fd6325b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc30c1a7ce87647429d6319521c91c9a752e696c32591e33b8ef272fd6325b4->enter($__internal_cbc30c1a7ce87647429d6319521c91c9a752e696c32591e33b8ef272fd6325b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cbc30c1a7ce87647429d6319521c91c9a752e696c32591e33b8ef272fd6325b4->leave($__internal_cbc30c1a7ce87647429d6319521c91c9a752e696c32591e33b8ef272fd6325b4_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
