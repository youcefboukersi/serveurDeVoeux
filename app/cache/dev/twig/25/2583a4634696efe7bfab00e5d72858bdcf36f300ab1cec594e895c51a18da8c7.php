<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_e6d4afa4f4a1e299377d510d1b635ff48a1e279763a667469512b2f20fa4fd65 extends Twig_Template
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
        $__internal_ba3ecc69d41aa10e2a30faf4d2ffc681e52b0ef4828dcea625842d9e0212ac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3ecc69d41aa10e2a30faf4d2ffc681e52b0ef4828dcea625842d9e0212ac15->enter($__internal_ba3ecc69d41aa10e2a30faf4d2ffc681e52b0ef4828dcea625842d9e0212ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </br></br>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-danger\" />
    </div>
</form>
";
        
        $__internal_ba3ecc69d41aa10e2a30faf4d2ffc681e52b0ef4828dcea625842d9e0212ac15->leave($__internal_ba3ecc69d41aa10e2a30faf4d2ffc681e52b0ef4828dcea625842d9e0212ac15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  28 => 5,  26 => 4,  22 => 2,);
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
    </br></br>
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" class=\"btn btn-danger\" />
    </div>
</form>
", "@FOSUser/ChangePassword/changePassword_content.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
