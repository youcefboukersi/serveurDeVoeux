<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_77d251bec84422b29be1a58907e7c574878df01195bf6354179899df5ec59d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fed9e67609dbb537f3fcdddf795e6bac7be8dd00ce2e05a215437036ac7d44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fed9e67609dbb537f3fcdddf795e6bac7be8dd00ce2e05a215437036ac7d44a->enter($__internal_9fed9e67609dbb537f3fcdddf795e6bac7be8dd00ce2e05a215437036ac7d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fed9e67609dbb537f3fcdddf795e6bac7be8dd00ce2e05a215437036ac7d44a->leave($__internal_9fed9e67609dbb537f3fcdddf795e6bac7be8dd00ce2e05a215437036ac7d44a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2c4ee91fd85f0fb85ee3f6f18f2e3aa88228fa2e02df37a76f1557807cfeeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c4ee91fd85f0fb85ee3f6f18f2e3aa88228fa2e02df37a76f1557807cfeeec->enter($__internal_d2c4ee91fd85f0fb85ee3f6f18f2e3aa88228fa2e02df37a76f1557807cfeeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2c4ee91fd85f0fb85ee3f6f18f2e3aa88228fa2e02df37a76f1557807cfeeec->leave($__internal_d2c4ee91fd85f0fb85ee3f6f18f2e3aa88228fa2e02df37a76f1557807cfeeec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ccd2e21ae2b80c2b9b2fd3ceb857ced993d40c2c1e0f301427e9b34dcf267cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccd2e21ae2b80c2b9b2fd3ceb857ced993d40c2c1e0f301427e9b34dcf267cc->enter($__internal_8ccd2e21ae2b80c2b9b2fd3ceb857ced993d40c2c1e0f301427e9b34dcf267cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ccd2e21ae2b80c2b9b2fd3ceb857ced993d40c2c1e0f301427e9b34dcf267cc->leave($__internal_8ccd2e21ae2b80c2b9b2fd3ceb857ced993d40c2c1e0f301427e9b34dcf267cc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4658dbf771fdcc1793ba2ee51f44670117037f2fa19c81e314d639d914fa85d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4658dbf771fdcc1793ba2ee51f44670117037f2fa19c81e314d639d914fa85d0->enter($__internal_4658dbf771fdcc1793ba2ee51f44670117037f2fa19c81e314d639d914fa85d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4658dbf771fdcc1793ba2ee51f44670117037f2fa19c81e314d639d914fa85d0->leave($__internal_4658dbf771fdcc1793ba2ee51f44670117037f2fa19c81e314d639d914fa85d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
