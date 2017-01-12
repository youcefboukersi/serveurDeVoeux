<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3acf69e8799e8939b3a3199e16a18edfecfc10f3a8d20993d9163c3446062f94 extends Twig_Template
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
        $__internal_dcfe3c5d81e1199475706edb2a64af9cd6291efcdce3a47dd669ccb6fd24243d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfe3c5d81e1199475706edb2a64af9cd6291efcdce3a47dd669ccb6fd24243d->enter($__internal_dcfe3c5d81e1199475706edb2a64af9cd6291efcdce3a47dd669ccb6fd24243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_dcfe3c5d81e1199475706edb2a64af9cd6291efcdce3a47dd669ccb6fd24243d->leave($__internal_dcfe3c5d81e1199475706edb2a64af9cd6291efcdce3a47dd669ccb6fd24243d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd55dc6d63fa1345f289dc0a5df3e0f971ba11878455851068a94f1af37fb545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd55dc6d63fa1345f289dc0a5df3e0f971ba11878455851068a94f1af37fb545->enter($__internal_cd55dc6d63fa1345f289dc0a5df3e0f971ba11878455851068a94f1af37fb545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_cd55dc6d63fa1345f289dc0a5df3e0f971ba11878455851068a94f1af37fb545->leave($__internal_cd55dc6d63fa1345f289dc0a5df3e0f971ba11878455851068a94f1af37fb545_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register.html.twig");
    }
}
