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
        $__internal_5e2652712f129cc38d4cae1ddc28241a1f82cd822215a855d37af43ab5a33ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2652712f129cc38d4cae1ddc28241a1f82cd822215a855d37af43ab5a33ecf->enter($__internal_5e2652712f129cc38d4cae1ddc28241a1f82cd822215a855d37af43ab5a33ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5e2652712f129cc38d4cae1ddc28241a1f82cd822215a855d37af43ab5a33ecf->leave($__internal_5e2652712f129cc38d4cae1ddc28241a1f82cd822215a855d37af43ab5a33ecf_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_440a69ad73633da611eddb3ccb9d6a6deea1047fe36ad0fb79056ab77ced538a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440a69ad73633da611eddb3ccb9d6a6deea1047fe36ad0fb79056ab77ced538a->enter($__internal_440a69ad73633da611eddb3ccb9d6a6deea1047fe36ad0fb79056ab77ced538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@SRVDVServer/Registration/register.html.twig", 3)->display($context);
        
        $__internal_440a69ad73633da611eddb3ccb9d6a6deea1047fe36ad0fb79056ab77ced538a->leave($__internal_440a69ad73633da611eddb3ccb9d6a6deea1047fe36ad0fb79056ab77ced538a_prof);

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
