<?php

/* @SRVDVServer/Profile/edit.html.twig */
class __TwigTemplate_d9013539ca28b58ccbdb7f0f0a44757e5693bf4c1e107942716ae3fa814e106d extends Twig_Template
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
        $__internal_6309b44adb5cfc5f7298b0246a3ab5dc0a11a9b87bccfff2669f96c821ee3700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6309b44adb5cfc5f7298b0246a3ab5dc0a11a9b87bccfff2669f96c821ee3700->enter($__internal_6309b44adb5cfc5f7298b0246a3ab5dc0a11a9b87bccfff2669f96c821ee3700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6309b44adb5cfc5f7298b0246a3ab5dc0a11a9b87bccfff2669f96c821ee3700->leave($__internal_6309b44adb5cfc5f7298b0246a3ab5dc0a11a9b87bccfff2669f96c821ee3700_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1368cac7c73a10f907fbac33f1ab043908c9866096fbccc97437d9e60f2dc1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1368cac7c73a10f907fbac33f1ab043908c9866096fbccc97437d9e60f2dc1e2->enter($__internal_1368cac7c73a10f907fbac33f1ab043908c9866096fbccc97437d9e60f2dc1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1368cac7c73a10f907fbac33f1ab043908c9866096fbccc97437d9e60f2dc1e2->leave($__internal_1368cac7c73a10f907fbac33f1ab043908c9866096fbccc97437d9e60f2dc1e2_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Profile/edit.html.twig";
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
", "@SRVDVServer/Profile/edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
