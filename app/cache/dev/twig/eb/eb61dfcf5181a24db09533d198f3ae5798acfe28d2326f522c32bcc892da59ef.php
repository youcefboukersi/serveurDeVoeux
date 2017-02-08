<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_367f8285fba4b85bae3a8e4c4f2bf488eda88b793eb6872cf2bd3af973ea6c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_008799f7ee67e55f17bbf6bf1cb629f70b9a51c993f41f69911d31ea18f4825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008799f7ee67e55f17bbf6bf1cb629f70b9a51c993f41f69911d31ea18f4825f->enter($__internal_008799f7ee67e55f17bbf6bf1cb629f70b9a51c993f41f69911d31ea18f4825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008799f7ee67e55f17bbf6bf1cb629f70b9a51c993f41f69911d31ea18f4825f->leave($__internal_008799f7ee67e55f17bbf6bf1cb629f70b9a51c993f41f69911d31ea18f4825f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8996c021f28ab6127fa08061be765e91dd07b7cefb20f78871b8a6abee609c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8996c021f28ab6127fa08061be765e91dd07b7cefb20f78871b8a6abee609c7->enter($__internal_b8996c021f28ab6127fa08061be765e91dd07b7cefb20f78871b8a6abee609c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b8996c021f28ab6127fa08061be765e91dd07b7cefb20f78871b8a6abee609c7->leave($__internal_b8996c021f28ab6127fa08061be765e91dd07b7cefb20f78871b8a6abee609c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
