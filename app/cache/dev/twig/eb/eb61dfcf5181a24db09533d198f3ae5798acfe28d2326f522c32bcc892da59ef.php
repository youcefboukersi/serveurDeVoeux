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
        $__internal_11078cac62921fbb1d92d064e03d02bfebbcc004e19055e417f7db58a60c0cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11078cac62921fbb1d92d064e03d02bfebbcc004e19055e417f7db58a60c0cff->enter($__internal_11078cac62921fbb1d92d064e03d02bfebbcc004e19055e417f7db58a60c0cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11078cac62921fbb1d92d064e03d02bfebbcc004e19055e417f7db58a60c0cff->leave($__internal_11078cac62921fbb1d92d064e03d02bfebbcc004e19055e417f7db58a60c0cff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b60e2653fbb8aa55e93f6995bae1c45ad07196c43f7da052d6da8005300ceae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60e2653fbb8aa55e93f6995bae1c45ad07196c43f7da052d6da8005300ceae1->enter($__internal_b60e2653fbb8aa55e93f6995bae1c45ad07196c43f7da052d6da8005300ceae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b60e2653fbb8aa55e93f6995bae1c45ad07196c43f7da052d6da8005300ceae1->leave($__internal_b60e2653fbb8aa55e93f6995bae1c45ad07196c43f7da052d6da8005300ceae1_prof);

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
