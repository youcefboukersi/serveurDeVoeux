<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e9288064b7b78409d6c2c53b11da329ca478d85c5e1d80010772bb7f9fec0763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e35bf8169dacf5b476f9bfac3f4b05803ce6b8b91b937b3ddb020417bd3bf1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35bf8169dacf5b476f9bfac3f4b05803ce6b8b91b937b3ddb020417bd3bf1e7->enter($__internal_e35bf8169dacf5b476f9bfac3f4b05803ce6b8b91b937b3ddb020417bd3bf1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35bf8169dacf5b476f9bfac3f4b05803ce6b8b91b937b3ddb020417bd3bf1e7->leave($__internal_e35bf8169dacf5b476f9bfac3f4b05803ce6b8b91b937b3ddb020417bd3bf1e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b0c44ad2672cfd252a0e790f6fd1432355950a02386e5dd3497ade056f6ac0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0c44ad2672cfd252a0e790f6fd1432355950a02386e5dd3497ade056f6ac0f->enter($__internal_6b0c44ad2672cfd252a0e790f6fd1432355950a02386e5dd3497ade056f6ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6b0c44ad2672cfd252a0e790f6fd1432355950a02386e5dd3497ade056f6ac0f->leave($__internal_6b0c44ad2672cfd252a0e790f6fd1432355950a02386e5dd3497ade056f6ac0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
