<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ee5722d7555b1dad044ca1fddbb0eb08855b283dbf0692b09c91c95d9bf46b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_93913eb28a80941086f5dad1ce904339d48ba3152fe1288d310ad4fd6300fbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93913eb28a80941086f5dad1ce904339d48ba3152fe1288d310ad4fd6300fbe0->enter($__internal_93913eb28a80941086f5dad1ce904339d48ba3152fe1288d310ad4fd6300fbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93913eb28a80941086f5dad1ce904339d48ba3152fe1288d310ad4fd6300fbe0->leave($__internal_93913eb28a80941086f5dad1ce904339d48ba3152fe1288d310ad4fd6300fbe0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_465f0d9dded6dade02d9c53ed471232c868f38f54d0d8f9d5d58a3b767c877b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465f0d9dded6dade02d9c53ed471232c868f38f54d0d8f9d5d58a3b767c877b3->enter($__internal_465f0d9dded6dade02d9c53ed471232c868f38f54d0d8f9d5d58a3b767c877b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_465f0d9dded6dade02d9c53ed471232c868f38f54d0d8f9d5d58a3b767c877b3->leave($__internal_465f0d9dded6dade02d9c53ed471232c868f38f54d0d8f9d5d58a3b767c877b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
