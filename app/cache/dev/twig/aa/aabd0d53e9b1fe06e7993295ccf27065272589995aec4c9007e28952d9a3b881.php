<?php

/* @SRVDVServer/Registration/register.html.twig */
class __TwigTemplate_c9ecde507a15c7afc1ef7eec5efa13eb98d492a0689f797985a2a730e9f3472d extends Twig_Template
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
        $__internal_d650f3e23d2b271597dfc1cd11a19bc73b7fe18d8838fb727f8918ed89cb46f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d650f3e23d2b271597dfc1cd11a19bc73b7fe18d8838fb727f8918ed89cb46f5->enter($__internal_d650f3e23d2b271597dfc1cd11a19bc73b7fe18d8838fb727f8918ed89cb46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d650f3e23d2b271597dfc1cd11a19bc73b7fe18d8838fb727f8918ed89cb46f5->leave($__internal_d650f3e23d2b271597dfc1cd11a19bc73b7fe18d8838fb727f8918ed89cb46f5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a8b36cc308b4b309d68aeed4a9e72cfc601bc12b0448f95a790cd3384cfd2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8b36cc308b4b309d68aeed4a9e72cfc601bc12b0448f95a790cd3384cfd2fe->enter($__internal_3a8b36cc308b4b309d68aeed4a9e72cfc601bc12b0448f95a790cd3384cfd2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "@SRVDVServer/Registration/register.html.twig", 3)->display($context);
        
        $__internal_3a8b36cc308b4b309d68aeed4a9e72cfc601bc12b0448f95a790cd3384cfd2fe->leave($__internal_3a8b36cc308b4b309d68aeed4a9e72cfc601bc12b0448f95a790cd3384cfd2fe_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
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
    {% include \"SRVDVServerBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Registration/register.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
