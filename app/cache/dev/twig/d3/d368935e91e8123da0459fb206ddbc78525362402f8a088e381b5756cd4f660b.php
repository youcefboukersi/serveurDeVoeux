<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_376a47d866eb52866494f00793a491aa213494f963beb4cecafe8f95f5103530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2af7f3ec5e251c49562d1e69d7d115d36da221e57113738da77fa0f72e690393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af7f3ec5e251c49562d1e69d7d115d36da221e57113738da77fa0f72e690393->enter($__internal_2af7f3ec5e251c49562d1e69d7d115d36da221e57113738da77fa0f72e690393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af7f3ec5e251c49562d1e69d7d115d36da221e57113738da77fa0f72e690393->leave($__internal_2af7f3ec5e251c49562d1e69d7d115d36da221e57113738da77fa0f72e690393_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_11b35d753b9278174c7cbd340dbf1d3b6f655ea2972cafe49a168cf377eff008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b35d753b9278174c7cbd340dbf1d3b6f655ea2972cafe49a168cf377eff008->enter($__internal_11b35d753b9278174c7cbd340dbf1d3b6f655ea2972cafe49a168cf377eff008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_11b35d753b9278174c7cbd340dbf1d3b6f655ea2972cafe49a168cf377eff008->leave($__internal_11b35d753b9278174c7cbd340dbf1d3b6f655ea2972cafe49a168cf377eff008_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59ed98cb021e79e83ffb8bdd0e3999136d9807dc0296e425b2e9529d618bf25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ed98cb021e79e83ffb8bdd0e3999136d9807dc0296e425b2e9529d618bf25a->enter($__internal_59ed98cb021e79e83ffb8bdd0e3999136d9807dc0296e425b2e9529d618bf25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_59ed98cb021e79e83ffb8bdd0e3999136d9807dc0296e425b2e9529d618bf25a->leave($__internal_59ed98cb021e79e83ffb8bdd0e3999136d9807dc0296e425b2e9529d618bf25a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
