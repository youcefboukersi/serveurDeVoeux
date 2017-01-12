<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5dc652b60bec2afb455a6cd7326ed53a1b0b4f88444bbdb800eb6b304193329b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_52ee3c2b6bd698b540b86289804c1a39c163144baf78ca50fbff439f24658792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ee3c2b6bd698b540b86289804c1a39c163144baf78ca50fbff439f24658792->enter($__internal_52ee3c2b6bd698b540b86289804c1a39c163144baf78ca50fbff439f24658792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ee3c2b6bd698b540b86289804c1a39c163144baf78ca50fbff439f24658792->leave($__internal_52ee3c2b6bd698b540b86289804c1a39c163144baf78ca50fbff439f24658792_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad26863ac83aa7ed0f879f5b6312d39a3f45b1f4c5060f8dd97086e07678bcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad26863ac83aa7ed0f879f5b6312d39a3f45b1f4c5060f8dd97086e07678bcef->enter($__internal_ad26863ac83aa7ed0f879f5b6312d39a3f45b1f4c5060f8dd97086e07678bcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ad26863ac83aa7ed0f879f5b6312d39a3f45b1f4c5060f8dd97086e07678bcef->leave($__internal_ad26863ac83aa7ed0f879f5b6312d39a3f45b1f4c5060f8dd97086e07678bcef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
