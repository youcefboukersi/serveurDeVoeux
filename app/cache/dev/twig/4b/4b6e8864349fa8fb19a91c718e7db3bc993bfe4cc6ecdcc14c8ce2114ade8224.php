<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_246dac66a3df1d1b548c2979f316d06fc8e36e9cc346e65067a4a2badbd3fcbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a40e72798f287f58b718b253378708f9f80be39604c78ecd88e36ca0cb248ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40e72798f287f58b718b253378708f9f80be39604c78ecd88e36ca0cb248ce5->enter($__internal_a40e72798f287f58b718b253378708f9f80be39604c78ecd88e36ca0cb248ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40e72798f287f58b718b253378708f9f80be39604c78ecd88e36ca0cb248ce5->leave($__internal_a40e72798f287f58b718b253378708f9f80be39604c78ecd88e36ca0cb248ce5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f49d650fda4a9cbfb6daaa5605182788728d373be9d31f9fd72a76f4d9cadd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49d650fda4a9cbfb6daaa5605182788728d373be9d31f9fd72a76f4d9cadd5c->enter($__internal_f49d650fda4a9cbfb6daaa5605182788728d373be9d31f9fd72a76f4d9cadd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f49d650fda4a9cbfb6daaa5605182788728d373be9d31f9fd72a76f4d9cadd5c->leave($__internal_f49d650fda4a9cbfb6daaa5605182788728d373be9d31f9fd72a76f4d9cadd5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
