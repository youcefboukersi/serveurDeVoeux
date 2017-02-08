<?php

/* SRVDVServerBundle:Profile:edit.html.twig */
class __TwigTemplate_9532c98a50a3c0fc45873ec6be855a2063963937be56924684239ac7c312dbf2 extends Twig_Template
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
        $__internal_8482fc5bd6c4ea07acd526b7a9d8a9a021fa1feb2200943bd472bd5096e64d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8482fc5bd6c4ea07acd526b7a9d8a9a021fa1feb2200943bd472bd5096e64d7b->enter($__internal_8482fc5bd6c4ea07acd526b7a9d8a9a021fa1feb2200943bd472bd5096e64d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8482fc5bd6c4ea07acd526b7a9d8a9a021fa1feb2200943bd472bd5096e64d7b->leave($__internal_8482fc5bd6c4ea07acd526b7a9d8a9a021fa1feb2200943bd472bd5096e64d7b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b94c10c26227fb27e5183aaa693de9cd226cfbd28583ba660557e7700e078af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94c10c26227fb27e5183aaa693de9cd226cfbd28583ba660557e7700e078af4->enter($__internal_b94c10c26227fb27e5183aaa693de9cd226cfbd28583ba660557e7700e078af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SRVDVServerBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b94c10c26227fb27e5183aaa693de9cd226cfbd28583ba660557e7700e078af4->leave($__internal_b94c10c26227fb27e5183aaa693de9cd226cfbd28583ba660557e7700e078af4_prof);

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
{% include \"SRVDVServerBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit.html.twig");
    }
}
