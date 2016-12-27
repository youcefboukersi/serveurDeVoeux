<?php

/* SRVDVServerBundle:Registration:register.html.twig */
class __TwigTemplate_4a397949ba9e1cc131dea2229874613a7f699ace80e25252443565993b54f988 extends Twig_Template
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
        $__internal_57549ffe616d2d9e9a00221051ff7e971871d50924fba043ab6f4a3ce7d84db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57549ffe616d2d9e9a00221051ff7e971871d50924fba043ab6f4a3ce7d84db5->enter($__internal_57549ffe616d2d9e9a00221051ff7e971871d50924fba043ab6f4a3ce7d84db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_57549ffe616d2d9e9a00221051ff7e971871d50924fba043ab6f4a3ce7d84db5->leave($__internal_57549ffe616d2d9e9a00221051ff7e971871d50924fba043ab6f4a3ce7d84db5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_870bcc101d01c2ece9147ca881e79f4ebd11b4b78ff27e9d984af016880eb433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870bcc101d01c2ece9147ca881e79f4ebd11b4b78ff27e9d984af016880eb433->enter($__internal_870bcc101d01c2ece9147ca881e79f4ebd11b4b78ff27e9d984af016880eb433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "SRVDVServerBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_870bcc101d01c2ece9147ca881e79f4ebd11b4b78ff27e9d984af016880eb433->leave($__internal_870bcc101d01c2ece9147ca881e79f4ebd11b4b78ff27e9d984af016880eb433_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:register.html.twig";
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
", "SRVDVServerBundle:Registration:register.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
