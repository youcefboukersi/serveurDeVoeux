<?php

/* @SRVDVServer/Resetting/reset.html.twig */
class __TwigTemplate_50c40c867a4ee6204f4bafb59f8b2e06948e770f83bd0ac9eb12c11b1db6334c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6531e7aa11eef3487e683a7456feb1872ae34600171c057d65d5ddb4e814ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6531e7aa11eef3487e683a7456feb1872ae34600171c057d65d5ddb4e814ff6->enter($__internal_c6531e7aa11eef3487e683a7456feb1872ae34600171c057d65d5ddb4e814ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6531e7aa11eef3487e683a7456feb1872ae34600171c057d65d5ddb4e814ff6->leave($__internal_c6531e7aa11eef3487e683a7456feb1872ae34600171c057d65d5ddb4e814ff6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_510ba971d98c8e565c7d2795af1d22e08ccfac60e9023a2101d3822f9c7f76c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510ba971d98c8e565c7d2795af1d22e08ccfac60e9023a2101d3822f9c7f76c8->enter($__internal_510ba971d98c8e565c7d2795af1d22e08ccfac60e9023a2101d3822f9c7f76c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_510ba971d98c8e565c7d2795af1d22e08ccfac60e9023a2101d3822f9c7f76c8->leave($__internal_510ba971d98c8e565c7d2795af1d22e08ccfac60e9023a2101d3822f9c7f76c8_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/reset.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% block fos_user_content %}
    {% include \"SRVDVServerBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Resetting/reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
