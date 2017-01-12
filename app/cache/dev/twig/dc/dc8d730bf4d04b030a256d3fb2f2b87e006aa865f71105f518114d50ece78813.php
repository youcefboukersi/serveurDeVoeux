<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_76b3e3cf508c4af06487266995bef449b12c50557b95b66f51a2ec40de114393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d63a9badc6477c8df3f42fdbd283d3c59f3b8fb543c5aaa8710ba9eb42a30d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63a9badc6477c8df3f42fdbd283d3c59f3b8fb543c5aaa8710ba9eb42a30d89->enter($__internal_d63a9badc6477c8df3f42fdbd283d3c59f3b8fb543c5aaa8710ba9eb42a30d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d63a9badc6477c8df3f42fdbd283d3c59f3b8fb543c5aaa8710ba9eb42a30d89->leave($__internal_d63a9badc6477c8df3f42fdbd283d3c59f3b8fb543c5aaa8710ba9eb42a30d89_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9347739b943d7d9b58ec3e63c5ebb119f13f45f3f70401c062a1a74e23af676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9347739b943d7d9b58ec3e63c5ebb119f13f45f3f70401c062a1a74e23af676->enter($__internal_e9347739b943d7d9b58ec3e63c5ebb119f13f45f3f70401c062a1a74e23af676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e9347739b943d7d9b58ec3e63c5ebb119f13f45f3f70401c062a1a74e23af676->leave($__internal_e9347739b943d7d9b58ec3e63c5ebb119f13f45f3f70401c062a1a74e23af676_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
