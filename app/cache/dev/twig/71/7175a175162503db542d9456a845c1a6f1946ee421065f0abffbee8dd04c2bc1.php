<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_e532a3698ca88397528806632bc0bd914edf87e51212eb6686b74006e3183554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59e05edcac6db55223c0e164f892a11bc0d6a4ddef03d97950e45abc6d15e502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e05edcac6db55223c0e164f892a11bc0d6a4ddef03d97950e45abc6d15e502->enter($__internal_59e05edcac6db55223c0e164f892a11bc0d6a4ddef03d97950e45abc6d15e502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e05edcac6db55223c0e164f892a11bc0d6a4ddef03d97950e45abc6d15e502->leave($__internal_59e05edcac6db55223c0e164f892a11bc0d6a4ddef03d97950e45abc6d15e502_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01862532e64d4439480e8d94c7e9e87267051c66312d7a32ae8ec4c57e3ca9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01862532e64d4439480e8d94c7e9e87267051c66312d7a32ae8ec4c57e3ca9b0->enter($__internal_01862532e64d4439480e8d94c7e9e87267051c66312d7a32ae8ec4c57e3ca9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_01862532e64d4439480e8d94c7e9e87267051c66312d7a32ae8ec4c57e3ca9b0->leave($__internal_01862532e64d4439480e8d94c7e9e87267051c66312d7a32ae8ec4c57e3ca9b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
