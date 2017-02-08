<?php

/* @SRVDVServer/Registration/register_content.html.twig */
class __TwigTemplate_7b87488c6525b35eeb913d7c60b925c249f48c5b9f04857bd4673ddfa34e719b extends Twig_Template
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
        $__internal_410d6a1c50a60d752d123be51de9a2ad00ebe0b8119cffade25882ae06bd6a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410d6a1c50a60d752d123be51de9a2ad00ebe0b8119cffade25882ae06bd6a58->enter($__internal_410d6a1c50a60d752d123be51de9a2ad00ebe0b8119cffade25882ae06bd6a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\"   >
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </br>
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\"/>
    </div>
</form>
";
        
        $__internal_410d6a1c50a60d752d123be51de9a2ad00ebe0b8119cffade25882ae06bd6a58->leave($__internal_410d6a1c50a60d752d123be51de9a2ad00ebe0b8119cffade25882ae06bd6a58_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  27 => 4,  25 => 3,  22 => 2,);
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
<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\"   >
    {{ form_widget(form) }}
    </br>
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn btn-success\"/>
    </div>
</form>
", "@SRVDVServer/Registration/register_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
