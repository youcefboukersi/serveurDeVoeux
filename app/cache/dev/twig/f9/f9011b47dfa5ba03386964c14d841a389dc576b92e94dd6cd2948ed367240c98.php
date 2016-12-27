<?php

/* @SRVDVServer/Resetting/reset.html.twig */
class __TwigTemplate_eb6068057383d6589f12b84bec7200621f373f9bcf30df9eda64bb19018a2234 extends Twig_Template
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
        $__internal_9af186ad2e9e9ea034041fd975eefdda5925d2e9c3cb63cd48d9221141d371ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af186ad2e9e9ea034041fd975eefdda5925d2e9c3cb63cd48d9221141d371ca->enter($__internal_9af186ad2e9e9ea034041fd975eefdda5925d2e9c3cb63cd48d9221141d371ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af186ad2e9e9ea034041fd975eefdda5925d2e9c3cb63cd48d9221141d371ca->leave($__internal_9af186ad2e9e9ea034041fd975eefdda5925d2e9c3cb63cd48d9221141d371ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5906f5f392fc99b725a5d98c0cfcc873880fcc6d38c282b36e50f696cfa69409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5906f5f392fc99b725a5d98c0cfcc873880fcc6d38c282b36e50f696cfa69409->enter($__internal_5906f5f392fc99b725a5d98c0cfcc873880fcc6d38c282b36e50f696cfa69409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@SRVDVServer/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5906f5f392fc99b725a5d98c0cfcc873880fcc6d38c282b36e50f696cfa69409->leave($__internal_5906f5f392fc99b725a5d98c0cfcc873880fcc6d38c282b36e50f696cfa69409_prof);

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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Resetting/reset.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
