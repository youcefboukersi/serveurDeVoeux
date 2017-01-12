<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d3823445f254205fb85f017898c38b07f1c14704168816ef3fa2d1e3cffa8544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ac8cc6048843683fab94f60ba755c49fac10bc7011db1262b2e6652a2f4c88b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8cc6048843683fab94f60ba755c49fac10bc7011db1262b2e6652a2f4c88b5->enter($__internal_ac8cc6048843683fab94f60ba755c49fac10bc7011db1262b2e6652a2f4c88b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8cc6048843683fab94f60ba755c49fac10bc7011db1262b2e6652a2f4c88b5->leave($__internal_ac8cc6048843683fab94f60ba755c49fac10bc7011db1262b2e6652a2f4c88b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0527d0b809c8966803853d9bcd8d6647c86ce30aaaa5995777dc03fb7d9fd600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0527d0b809c8966803853d9bcd8d6647c86ce30aaaa5995777dc03fb7d9fd600->enter($__internal_0527d0b809c8966803853d9bcd8d6647c86ce30aaaa5995777dc03fb7d9fd600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0527d0b809c8966803853d9bcd8d6647c86ce30aaaa5995777dc03fb7d9fd600->leave($__internal_0527d0b809c8966803853d9bcd8d6647c86ce30aaaa5995777dc03fb7d9fd600_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8dd7bc42da20ef79685c6b4a951a066c9c9cf1bcb7b6202bd1b025c0560dd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dd7bc42da20ef79685c6b4a951a066c9c9cf1bcb7b6202bd1b025c0560dd77->enter($__internal_c8dd7bc42da20ef79685c6b4a951a066c9c9cf1bcb7b6202bd1b025c0560dd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_c8dd7bc42da20ef79685c6b4a951a066c9c9cf1bcb7b6202bd1b025c0560dd77->leave($__internal_c8dd7bc42da20ef79685c6b4a951a066c9c9cf1bcb7b6202bd1b025c0560dd77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
