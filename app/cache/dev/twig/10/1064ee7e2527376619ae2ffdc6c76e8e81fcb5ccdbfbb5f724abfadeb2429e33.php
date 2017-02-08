<?php

/* SRVDVServerBundle:Registration:register_content.html.twig */
class __TwigTemplate_6521dd80533a48c65b18b05146a64f4c6bf59ee6806e558bd74c825e1920fd47 extends Twig_Template
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
        $__internal_8186ff1b5e18c7993b9c36d2b070bbe29fb174bc0f3fe19464113de7e12dfa2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8186ff1b5e18c7993b9c36d2b070bbe29fb174bc0f3fe19464113de7e12dfa2a->enter($__internal_8186ff1b5e18c7993b9c36d2b070bbe29fb174bc0f3fe19464113de7e12dfa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Registration:register_content.html.twig"));

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
        
        $__internal_8186ff1b5e18c7993b9c36d2b070bbe29fb174bc0f3fe19464113de7e12dfa2a->leave($__internal_8186ff1b5e18c7993b9c36d2b070bbe29fb174bc0f3fe19464113de7e12dfa2a_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Registration:register_content.html.twig";
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
", "SRVDVServerBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Registration/register_content.html.twig");
    }
}
