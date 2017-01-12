<?php

/* @SRVDVServer/Registration/register.html.twig */
class __TwigTemplate_702bbca1975ad5c37f36445a715cd0f0b7418f87b386204ef1deb50aef3d0dad extends Twig_Template
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
        $__internal_e30527be4c560dc98f3db0c85da9c15c5ab581e02be97e2ae9108d41fbf23e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30527be4c560dc98f3db0c85da9c15c5ab581e02be97e2ae9108d41fbf23e72->enter($__internal_e30527be4c560dc98f3db0c85da9c15c5ab581e02be97e2ae9108d41fbf23e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e30527be4c560dc98f3db0c85da9c15c5ab581e02be97e2ae9108d41fbf23e72->leave($__internal_e30527be4c560dc98f3db0c85da9c15c5ab581e02be97e2ae9108d41fbf23e72_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af499b3ec054354e43c4c20764d1c7984f9cbd8e5ce80fa102e5a450ca5b8c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af499b3ec054354e43c4c20764d1c7984f9cbd8e5ce80fa102e5a450ca5b8c8a->enter($__internal_af499b3ec054354e43c4c20764d1c7984f9cbd8e5ce80fa102e5a450ca5b8c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@SRVDVServer/Registration/register.html.twig", 3)->display($context);
        
        $__internal_af499b3ec054354e43c4c20764d1c7984f9cbd8e5ce80fa102e5a450ca5b8c8a->leave($__internal_af499b3ec054354e43c4c20764d1c7984f9cbd8e5ce80fa102e5a450ca5b8c8a_prof);

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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Registration/register.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
