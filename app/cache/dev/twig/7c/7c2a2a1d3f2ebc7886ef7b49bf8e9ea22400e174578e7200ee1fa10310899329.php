<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_2cf6706bac556ed3d0485cf81af7ef4a6b2e41902587dcd857441b6eaef4231f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_3426543330da531bd9ffb15e883da7280f79a7950f621c09f0b5a84e38e53702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426543330da531bd9ffb15e883da7280f79a7950f621c09f0b5a84e38e53702->enter($__internal_3426543330da531bd9ffb15e883da7280f79a7950f621c09f0b5a84e38e53702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3426543330da531bd9ffb15e883da7280f79a7950f621c09f0b5a84e38e53702->leave($__internal_3426543330da531bd9ffb15e883da7280f79a7950f621c09f0b5a84e38e53702_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_605a304f45ab464df0d6b4ab65df8aa0fd57bd575311daadbf4c0c93a7f149eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605a304f45ab464df0d6b4ab65df8aa0fd57bd575311daadbf4c0c93a7f149eb->enter($__internal_605a304f45ab464df0d6b4ab65df8aa0fd57bd575311daadbf4c0c93a7f149eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_605a304f45ab464df0d6b4ab65df8aa0fd57bd575311daadbf4c0c93a7f149eb->leave($__internal_605a304f45ab464df0d6b4ab65df8aa0fd57bd575311daadbf4c0c93a7f149eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
