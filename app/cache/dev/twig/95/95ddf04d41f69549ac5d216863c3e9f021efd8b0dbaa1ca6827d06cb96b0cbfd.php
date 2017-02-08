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
        $__internal_337d8dabcda68a5bd56a5efbc45b6cc255ae0e6d50df1e7bfdd11517e237b33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337d8dabcda68a5bd56a5efbc45b6cc255ae0e6d50df1e7bfdd11517e237b33a->enter($__internal_337d8dabcda68a5bd56a5efbc45b6cc255ae0e6d50df1e7bfdd11517e237b33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337d8dabcda68a5bd56a5efbc45b6cc255ae0e6d50df1e7bfdd11517e237b33a->leave($__internal_337d8dabcda68a5bd56a5efbc45b6cc255ae0e6d50df1e7bfdd11517e237b33a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb724d5f65e2dde5b92f98f6b38101f338bf76a58fb09843c136bd6a3a00ecbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb724d5f65e2dde5b92f98f6b38101f338bf76a58fb09843c136bd6a3a00ecbb->enter($__internal_bb724d5f65e2dde5b92f98f6b38101f338bf76a58fb09843c136bd6a3a00ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bb724d5f65e2dde5b92f98f6b38101f338bf76a58fb09843c136bd6a3a00ecbb->leave($__internal_bb724d5f65e2dde5b92f98f6b38101f338bf76a58fb09843c136bd6a3a00ecbb_prof);

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
