<?php

/* @SRVDVServer/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_333635521eb2da2e12ea9482915248c65b0b01af94c6da89af2181e6a054f6af extends Twig_Template
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
        $__internal_32aac3c82b80924c454111562305b1f4235cc7a682677d7a6e2237ea1fbc3c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aac3c82b80924c454111562305b1f4235cc7a682677d7a6e2237ea1fbc3c53->enter($__internal_32aac3c82b80924c454111562305b1f4235cc7a682677d7a6e2237ea1fbc3c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <fieldset class=\"well the-fieldset\">
        <legend > Modifier Password:</legend>
        ";
        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 7
        echo "
        <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </br>

            <div>
                <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-danger\"  />
            </div>
        </form>

    </fieldset>

</div>

";
        
        $__internal_32aac3c82b80924c454111562305b1f4235cc7a682677d7a6e2237ea1fbc3c53->leave($__internal_32aac3c82b80924c454111562305b1f4235cc7a682677d7a6e2237ea1fbc3c53_prof);

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
        return array (  46 => 13,  39 => 9,  33 => 8,  30 => 7,  28 => 6,  22 => 2,);
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
    <fieldset class=\"well the-fieldset\">
        <legend > Modifier Password:</legend>
        {% form_theme form \":FormTemplate:bootstrap.html.twig\" %}

        <form action=\"{{ path('fos_user_change_password') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_change_password\">
            {{ form_widget(form) }}
            </br>

            <div>
                <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" class=\"btn btn-danger\"  />
            </div>
        </form>

    </fieldset>

</div>

", "@SRVDVServer/ChangePassword/changePassword_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
