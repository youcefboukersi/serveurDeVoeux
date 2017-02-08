<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_5e982e3b64ffb0852cf880339e79b939bec4d61c6a194fdf6c1c26361de776e1 extends Twig_Template
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
        $__internal_3f2f762ec3673aba960d7a9065a44a720b90f24c2a38645e739154bed1c9a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2f762ec3673aba960d7a9065a44a720b90f24c2a38645e739154bed1c9a1f7->enter($__internal_3f2f762ec3673aba960d7a9065a44a720b90f24c2a38645e739154bed1c9a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3f2f762ec3673aba960d7a9065a44a720b90f24c2a38645e739154bed1c9a1f7->leave($__internal_3f2f762ec3673aba960d7a9065a44a720b90f24c2a38645e739154bed1c9a1f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
