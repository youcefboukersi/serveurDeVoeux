<?php

/* @SRVDVServer/Resetting/reset_content.html.twig */
class __TwigTemplate_935bef9c375d146a51ef84786fed769e2ad04573584c99061e8a3084dd13fcc4 extends Twig_Template
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
        $__internal_d303484cb6d0369b8f1ef1d3b7eae7c80d5a2374d74d0260cc70144f51a88fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d303484cb6d0369b8f1ef1d3b7eae7c80d5a2374d74d0260cc70144f51a88fc4->enter($__internal_d303484cb6d0369b8f1ef1d3b7eae7c80d5a2374d74d0260cc70144f51a88fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/reset_content.html.twig"));

        // line 2
        echo "

<div class=\"container\">
    ";
        // line 5
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
</div>";
        
        $__internal_d303484cb6d0369b8f1ef1d3b7eae7c80d5a2374d74d0260cc70144f51a88fc4->leave($__internal_d303484cb6d0369b8f1ef1d3b7eae7c80d5a2374d74d0260cc70144f51a88fc4_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  36 => 7,  29 => 6,  27 => 5,  22 => 2,);
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


<div class=\"container\">
    {% form_theme form \":FormTemplate:bootstrap.html.twig\" %}
    <form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_resetting_reset\">
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
        </div>
    </form>
</div>", "@SRVDVServer/Resetting/reset_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
