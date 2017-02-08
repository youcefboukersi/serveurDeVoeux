<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_90c6a3f4c2373a5c8fe08312695d66c141e053164d6109cba8336e66d0c93713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3789d47ce1a01407d848f7af94c14f9427ce07ebf7859434b1698b3a6292cded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3789d47ce1a01407d848f7af94c14f9427ce07ebf7859434b1698b3a6292cded->enter($__internal_3789d47ce1a01407d848f7af94c14f9427ce07ebf7859434b1698b3a6292cded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3789d47ce1a01407d848f7af94c14f9427ce07ebf7859434b1698b3a6292cded->leave($__internal_3789d47ce1a01407d848f7af94c14f9427ce07ebf7859434b1698b3a6292cded_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad48baddf3c01ff8f6e1ea16504f166d2354eea45fe3259a5701e4482a4082f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad48baddf3c01ff8f6e1ea16504f166d2354eea45fe3259a5701e4482a4082f7->enter($__internal_ad48baddf3c01ff8f6e1ea16504f166d2354eea45fe3259a5701e4482a4082f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ad48baddf3c01ff8f6e1ea16504f166d2354eea45fe3259a5701e4482a4082f7->leave($__internal_ad48baddf3c01ff8f6e1ea16504f166d2354eea45fe3259a5701e4482a4082f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
