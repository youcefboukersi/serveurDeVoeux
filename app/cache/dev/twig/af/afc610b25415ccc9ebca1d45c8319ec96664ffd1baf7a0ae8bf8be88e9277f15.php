<?php

/* SRVDVServerBundle:Profile:edit.html.twig */
class __TwigTemplate_c5600c5299d897bcd118cdcbe5022b79322c52dab42a477f665d3e8a8ab244a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795d979a6dc2467a885c8fb61e4cf4ddde5943dd78e8e094c130ed886463b473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795d979a6dc2467a885c8fb61e4cf4ddde5943dd78e8e094c130ed886463b473->enter($__internal_795d979a6dc2467a885c8fb61e4cf4ddde5943dd78e8e094c130ed886463b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_795d979a6dc2467a885c8fb61e4cf4ddde5943dd78e8e094c130ed886463b473->leave($__internal_795d979a6dc2467a885c8fb61e4cf4ddde5943dd78e8e094c130ed886463b473_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37a6a45593de6fdba1fb760855a7356641c2088edcf411cb285776dbca1e1221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a6a45593de6fdba1fb760855a7356641c2088edcf411cb285776dbca1e1221->enter($__internal_37a6a45593de6fdba1fb760855a7356641c2088edcf411cb285776dbca1e1221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_37a6a45593de6fdba1fb760855a7356641c2088edcf411cb285776dbca1e1221->leave($__internal_37a6a45593de6fdba1fb760855a7356641c2088edcf411cb285776dbca1e1221_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit.html.twig");
    }
}
