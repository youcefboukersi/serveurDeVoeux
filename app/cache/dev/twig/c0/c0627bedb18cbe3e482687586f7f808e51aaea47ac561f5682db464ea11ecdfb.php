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
        $__internal_7628e459d739e6b1ac2b9e57ae92d1b60a46b0539883091b8e296e94b393fe23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7628e459d739e6b1ac2b9e57ae92d1b60a46b0539883091b8e296e94b393fe23->enter($__internal_7628e459d739e6b1ac2b9e57ae92d1b60a46b0539883091b8e296e94b393fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7628e459d739e6b1ac2b9e57ae92d1b60a46b0539883091b8e296e94b393fe23->leave($__internal_7628e459d739e6b1ac2b9e57ae92d1b60a46b0539883091b8e296e94b393fe23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffbc02841087bdb014f2bb65e9f1b33550e4a34e7592d41fbae233c02ccc20b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbc02841087bdb014f2bb65e9f1b33550e4a34e7592d41fbae233c02ccc20b8->enter($__internal_ffbc02841087bdb014f2bb65e9f1b33550e4a34e7592d41fbae233c02ccc20b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ffbc02841087bdb014f2bb65e9f1b33550e4a34e7592d41fbae233c02ccc20b8->leave($__internal_ffbc02841087bdb014f2bb65e9f1b33550e4a34e7592d41fbae233c02ccc20b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6aacc561c028b3445e5417eb2f63c488cc7530114ca7283857e1df564164376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6aacc561c028b3445e5417eb2f63c488cc7530114ca7283857e1df564164376->enter($__internal_d6aacc561c028b3445e5417eb2f63c488cc7530114ca7283857e1df564164376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6aacc561c028b3445e5417eb2f63c488cc7530114ca7283857e1df564164376->leave($__internal_d6aacc561c028b3445e5417eb2f63c488cc7530114ca7283857e1df564164376_prof);

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
