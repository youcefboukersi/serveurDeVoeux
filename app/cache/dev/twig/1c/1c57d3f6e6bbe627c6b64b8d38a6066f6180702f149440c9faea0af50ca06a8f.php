<?php

/* SRVDVServerBundle:Profile:show.html.twig */
class __TwigTemplate_4c688bb8249d12e44d67a3e9e72acf7f80b9afce09523ef727a4d137c1640caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 1);
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
        $__internal_067f3890b0edb22108f8e272a6114a649126d597dbc0013b51629bc5a55f441a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067f3890b0edb22108f8e272a6114a649126d597dbc0013b51629bc5a55f441a->enter($__internal_067f3890b0edb22108f8e272a6114a649126d597dbc0013b51629bc5a55f441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067f3890b0edb22108f8e272a6114a649126d597dbc0013b51629bc5a55f441a->leave($__internal_067f3890b0edb22108f8e272a6114a649126d597dbc0013b51629bc5a55f441a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84c9051048b87f50654005a3501a90d522877f2277f3820b27ccad4224ae6239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c9051048b87f50654005a3501a90d522877f2277f3820b27ccad4224ae6239->enter($__internal_84c9051048b87f50654005a3501a90d522877f2277f3820b27ccad4224ae6239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_84c9051048b87f50654005a3501a90d522877f2277f3820b27ccad4224ae6239->leave($__internal_84c9051048b87f50654005a3501a90d522877f2277f3820b27ccad4224ae6239_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:show.html.twig";
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
", "SRVDVServerBundle:Profile:show.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/show.html.twig");
    }
}
