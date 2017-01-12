<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_cffad0c9b31ebcca10ffe87ef1d4d15c32326e2749254d94b12c5132b1f36bd9 extends Twig_Template
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
        $__internal_4fb774eaac57f78e5b87065983c22763e3e748684c667e45a1795d80c9c00c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb774eaac57f78e5b87065983c22763e3e748684c667e45a1795d80c9c00c32->enter($__internal_4fb774eaac57f78e5b87065983c22763e3e748684c667e45a1795d80c9c00c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
   <fieldset class=\"well the-fieldset\">
     <legend > Modifier Password:</legend>
";
        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
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
        
        $__internal_4fb774eaac57f78e5b87065983c22763e3e748684c667e45a1795d80c9c00c32->leave($__internal_4fb774eaac57f78e5b87065983c22763e3e748684c667e45a1795d80c9c00c32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
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

", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}
