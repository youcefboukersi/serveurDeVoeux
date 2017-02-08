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
        $__internal_59707505534d56797dc4ff6a1f64ae23957149583cf1583aeb1f30aa2c4ef0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59707505534d56797dc4ff6a1f64ae23957149583cf1583aeb1f30aa2c4ef0c0->enter($__internal_59707505534d56797dc4ff6a1f64ae23957149583cf1583aeb1f30aa2c4ef0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_59707505534d56797dc4ff6a1f64ae23957149583cf1583aeb1f30aa2c4ef0c0->leave($__internal_59707505534d56797dc4ff6a1f64ae23957149583cf1583aeb1f30aa2c4ef0c0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c73b1c9a53f3dc9dc6189b1a180524c79e8fc375fdc9e1b15bcd667356eeb166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73b1c9a53f3dc9dc6189b1a180524c79e8fc375fdc9e1b15bcd667356eeb166->enter($__internal_c73b1c9a53f3dc9dc6189b1a180524c79e8fc375fdc9e1b15bcd667356eeb166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Registration:register_content.html.twig", "@SRVDVServer/Registration/register.html.twig", 3)->display($context);
        
        $__internal_c73b1c9a53f3dc9dc6189b1a180524c79e8fc375fdc9e1b15bcd667356eeb166->leave($__internal_c73b1c9a53f3dc9dc6189b1a180524c79e8fc375fdc9e1b15bcd667356eeb166_prof);

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
