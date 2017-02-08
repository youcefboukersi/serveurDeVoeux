<?php

/* base.html.twig */
class __TwigTemplate_3df6038876abf8a6fdb07051e471be14fc9895611a8a468f3c1513dd3a238659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a986ee42d24c461d5fd2225465c59403b6382780328f7b71c13fe8b9ec277c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a986ee42d24c461d5fd2225465c59403b6382780328f7b71c13fe8b9ec277c4->enter($__internal_5a986ee42d24c461d5fd2225465c59403b6382780328f7b71c13fe8b9ec277c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a986ee42d24c461d5fd2225465c59403b6382780328f7b71c13fe8b9ec277c4->leave($__internal_5a986ee42d24c461d5fd2225465c59403b6382780328f7b71c13fe8b9ec277c4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b127351f7a95b13bd8efd7918c72d853816ad92115496d33101efa36321a05f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b127351f7a95b13bd8efd7918c72d853816ad92115496d33101efa36321a05f1->enter($__internal_b127351f7a95b13bd8efd7918c72d853816ad92115496d33101efa36321a05f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b127351f7a95b13bd8efd7918c72d853816ad92115496d33101efa36321a05f1->leave($__internal_b127351f7a95b13bd8efd7918c72d853816ad92115496d33101efa36321a05f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1472e3141ab8fb5ee6a414f1caf037e32ffe219476639525ee11b14433b58c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1472e3141ab8fb5ee6a414f1caf037e32ffe219476639525ee11b14433b58c5->enter($__internal_f1472e3141ab8fb5ee6a414f1caf037e32ffe219476639525ee11b14433b58c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f1472e3141ab8fb5ee6a414f1caf037e32ffe219476639525ee11b14433b58c5->leave($__internal_f1472e3141ab8fb5ee6a414f1caf037e32ffe219476639525ee11b14433b58c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffb5e6144ef6ac54bd6c1e6bfb6b225fc8ec4303cca0075a7abb4eced433b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffb5e6144ef6ac54bd6c1e6bfb6b225fc8ec4303cca0075a7abb4eced433b5f->enter($__internal_8ffb5e6144ef6ac54bd6c1e6bfb6b225fc8ec4303cca0075a7abb4eced433b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ffb5e6144ef6ac54bd6c1e6bfb6b225fc8ec4303cca0075a7abb4eced433b5f->leave($__internal_8ffb5e6144ef6ac54bd6c1e6bfb6b225fc8ec4303cca0075a7abb4eced433b5f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4b61bf159d3d8b3c0861132daad2b24fc88b5896a5a5c0036809bee600c3251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b61bf159d3d8b3c0861132daad2b24fc88b5896a5a5c0036809bee600c3251->enter($__internal_b4b61bf159d3d8b3c0861132daad2b24fc88b5896a5a5c0036809bee600c3251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4b61bf159d3d8b3c0861132daad2b24fc88b5896a5a5c0036809bee600c3251->leave($__internal_b4b61bf159d3d8b3c0861132daad2b24fc88b5896a5a5c0036809bee600c3251_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\base.html.twig");
    }
}
