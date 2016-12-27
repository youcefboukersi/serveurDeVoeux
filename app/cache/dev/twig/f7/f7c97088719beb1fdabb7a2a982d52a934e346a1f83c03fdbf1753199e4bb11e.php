<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f5933eea5d6a7d25645c37eb1e4f61a3bc3eb798fc50db57bc0a4adebd725442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_ee272665c8d9e419a42fd1d2aac5bba392886210a2b20d0aaa032ca71e2f7dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee272665c8d9e419a42fd1d2aac5bba392886210a2b20d0aaa032ca71e2f7dd1->enter($__internal_ee272665c8d9e419a42fd1d2aac5bba392886210a2b20d0aaa032ca71e2f7dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee272665c8d9e419a42fd1d2aac5bba392886210a2b20d0aaa032ca71e2f7dd1->leave($__internal_ee272665c8d9e419a42fd1d2aac5bba392886210a2b20d0aaa032ca71e2f7dd1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ec62451a49c532f0626a2669e5a386b360ee26b50ce2561c939895b585a21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ec62451a49c532f0626a2669e5a386b360ee26b50ce2561c939895b585a21c->enter($__internal_25ec62451a49c532f0626a2669e5a386b360ee26b50ce2561c939895b585a21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_25ec62451a49c532f0626a2669e5a386b360ee26b50ce2561c939895b585a21c->leave($__internal_25ec62451a49c532f0626a2669e5a386b360ee26b50ce2561c939895b585a21c_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
