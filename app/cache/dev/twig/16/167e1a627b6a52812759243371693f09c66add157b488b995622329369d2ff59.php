<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_12c072c16b1d6cebd82d64e5846461631e4794b50e5084f2bddf6be3bb1be7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_62207d545ee781d5f516b6ffb7f80144c40e2850cf465b2ee9b47849fe255a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62207d545ee781d5f516b6ffb7f80144c40e2850cf465b2ee9b47849fe255a29->enter($__internal_62207d545ee781d5f516b6ffb7f80144c40e2850cf465b2ee9b47849fe255a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62207d545ee781d5f516b6ffb7f80144c40e2850cf465b2ee9b47849fe255a29->leave($__internal_62207d545ee781d5f516b6ffb7f80144c40e2850cf465b2ee9b47849fe255a29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f69954505489ce0e54f0d826543881b4bc2bd661aaae05de6c08a8c4f6862f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f69954505489ce0e54f0d826543881b4bc2bd661aaae05de6c08a8c4f6862f->enter($__internal_a8f69954505489ce0e54f0d826543881b4bc2bd661aaae05de6c08a8c4f6862f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8f69954505489ce0e54f0d826543881b4bc2bd661aaae05de6c08a8c4f6862f->leave($__internal_a8f69954505489ce0e54f0d826543881b4bc2bd661aaae05de6c08a8c4f6862f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4439d4ae336ea9a9d457267b64699538882d4ede238f0eee6d0ee9381365b675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4439d4ae336ea9a9d457267b64699538882d4ede238f0eee6d0ee9381365b675->enter($__internal_4439d4ae336ea9a9d457267b64699538882d4ede238f0eee6d0ee9381365b675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4439d4ae336ea9a9d457267b64699538882d4ede238f0eee6d0ee9381365b675->leave($__internal_4439d4ae336ea9a9d457267b64699538882d4ede238f0eee6d0ee9381365b675_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
