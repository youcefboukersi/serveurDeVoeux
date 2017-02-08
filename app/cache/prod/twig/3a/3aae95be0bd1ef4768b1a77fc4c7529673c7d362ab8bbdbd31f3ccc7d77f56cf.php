<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_789440edd4d59dc544036b7a7bb3a671fbc17ff29a3eab87981ba2c5e0b9d588 extends Twig_Template
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
        $__internal_582362a53181435511f332907bb50b7a74c6c48042dfaae5a3bd72be22bb5899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582362a53181435511f332907bb50b7a74c6c48042dfaae5a3bd72be22bb5899->enter($__internal_582362a53181435511f332907bb50b7a74c6c48042dfaae5a3bd72be22bb5899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "<div class=\"container\">
    <fieldset class=\"well the-fieldset\">
        <legend > Modifier Profile:</legend>
        ";
        // line 5
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":FormTemplate:bootstrap.html.twig"));
        // line 6
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit form-horizontal\" >
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            </br>
            <div>
                <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
            </div>

        </form>
    </fieldset>

</div>
";
        
        $__internal_582362a53181435511f332907bb50b7a74c6c48042dfaae5a3bd72be22bb5899->leave($__internal_582362a53181435511f332907bb50b7a74c6c48042dfaae5a3bd72be22bb5899_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  29 => 6,  27 => 5,  22 => 2,);
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
        <legend > Modifier Profile:</legend>
        {% form_theme form \":FormTemplate:bootstrap.html.twig\" %}
        <form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit form-horizontal\" >
            {{ form_widget(form) }}
            </br>
            <div>
                <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" class=\"btn btn-success\" />
            </div>

        </form>
    </fieldset>

</div>
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
