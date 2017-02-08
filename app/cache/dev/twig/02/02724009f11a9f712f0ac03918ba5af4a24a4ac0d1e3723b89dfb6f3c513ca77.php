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
        $__internal_524307b137b95f4407521d3100cbc36e48a95e881c60d265424e3248916b07ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524307b137b95f4407521d3100cbc36e48a95e881c60d265424e3248916b07ad->enter($__internal_524307b137b95f4407521d3100cbc36e48a95e881c60d265424e3248916b07ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524307b137b95f4407521d3100cbc36e48a95e881c60d265424e3248916b07ad->leave($__internal_524307b137b95f4407521d3100cbc36e48a95e881c60d265424e3248916b07ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_898facd7237384b559f8309024744d166ca5ac2e759df4427536e3c722fd1606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898facd7237384b559f8309024744d166ca5ac2e759df4427536e3c722fd1606->enter($__internal_898facd7237384b559f8309024744d166ca5ac2e759df4427536e3c722fd1606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_898facd7237384b559f8309024744d166ca5ac2e759df4427536e3c722fd1606->leave($__internal_898facd7237384b559f8309024744d166ca5ac2e759df4427536e3c722fd1606_prof);

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
