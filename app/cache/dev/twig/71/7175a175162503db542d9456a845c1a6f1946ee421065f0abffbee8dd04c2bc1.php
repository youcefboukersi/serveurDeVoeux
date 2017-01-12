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
        $__internal_c89a6d4a12f5e2e1814a90ef73f57fda34d5e2cbf61fab5c85eda8b940e68ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89a6d4a12f5e2e1814a90ef73f57fda34d5e2cbf61fab5c85eda8b940e68ea7->enter($__internal_c89a6d4a12f5e2e1814a90ef73f57fda34d5e2cbf61fab5c85eda8b940e68ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89a6d4a12f5e2e1814a90ef73f57fda34d5e2cbf61fab5c85eda8b940e68ea7->leave($__internal_c89a6d4a12f5e2e1814a90ef73f57fda34d5e2cbf61fab5c85eda8b940e68ea7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_548ba18228ecc01da0dcc2b9550b9d57793f06cc820685cffc1793883caaae8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548ba18228ecc01da0dcc2b9550b9d57793f06cc820685cffc1793883caaae8a->enter($__internal_548ba18228ecc01da0dcc2b9550b9d57793f06cc820685cffc1793883caaae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_548ba18228ecc01da0dcc2b9550b9d57793f06cc820685cffc1793883caaae8a->leave($__internal_548ba18228ecc01da0dcc2b9550b9d57793f06cc820685cffc1793883caaae8a_prof);

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
