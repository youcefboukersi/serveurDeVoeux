<?php

/* @SRVDVServer/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_e38d9cc540edadaa3901db3e57b6f903aba0251ab54682babd3e8c4a5ef2f393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2968e4795194e522b456409a0b32c4062f9a6569e10d756e9036e8dd7283ae18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2968e4795194e522b456409a0b32c4062f9a6569e10d756e9036e8dd7283ae18->enter($__internal_2968e4795194e522b456409a0b32c4062f9a6569e10d756e9036e8dd7283ae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-danger\"  />
    </div>
</form>
";
        
        $__internal_2968e4795194e522b456409a0b32c4062f9a6569e10d756e9036e8dd7283ae18->leave($__internal_2968e4795194e522b456409a0b32c4062f9a6569e10d756e9036e8dd7283ae18_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% form_theme form \":FormTemplate:bootstrap.html.twig\" %}

<form action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_change_password\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" class=\"btn btn-danger\"  />
    </div>
</form>
", "@SRVDVServer/ChangePassword/changePassword_content.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
