<?php

/* @SRVDVServer/Resetting/request.html.twig */
class __TwigTemplate_98f30bf29daadf8adfe130db8f6f66ba1cea5d61b3d77ecde2becc628687ab69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/request.html.twig", 1);
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
        $__internal_4741498668f7789068d0ce2148b6949b54b057496e125841d7fc0652ae257aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4741498668f7789068d0ce2148b6949b54b057496e125841d7fc0652ae257aa9->enter($__internal_4741498668f7789068d0ce2148b6949b54b057496e125841d7fc0652ae257aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4741498668f7789068d0ce2148b6949b54b057496e125841d7fc0652ae257aa9->leave($__internal_4741498668f7789068d0ce2148b6949b54b057496e125841d7fc0652ae257aa9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fd9b73481ae3045ca4c6fc6f0b47e38a91c32533191f1f740d6f357f8cf403d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd9b73481ae3045ca4c6fc6f0b47e38a91c32533191f1f740d6f357f8cf403d->enter($__internal_8fd9b73481ae3045ca4c6fc6f0b47e38a91c32533191f1f740d6f357f8cf403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@SRVDVServer/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8fd9b73481ae3045ca4c6fc6f0b47e38a91c32533191f1f740d6f357f8cf403d->leave($__internal_8fd9b73481ae3045ca4c6fc6f0b47e38a91c32533191f1f740d6f357f8cf403d_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Resetting/request.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
