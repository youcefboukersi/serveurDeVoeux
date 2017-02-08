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
        $__internal_200c4b5a927e901ad316df6ee82f02ed4a5399cbc0fe979bbc071abb957a1488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200c4b5a927e901ad316df6ee82f02ed4a5399cbc0fe979bbc071abb957a1488->enter($__internal_200c4b5a927e901ad316df6ee82f02ed4a5399cbc0fe979bbc071abb957a1488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_200c4b5a927e901ad316df6ee82f02ed4a5399cbc0fe979bbc071abb957a1488->leave($__internal_200c4b5a927e901ad316df6ee82f02ed4a5399cbc0fe979bbc071abb957a1488_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0cdc05b39017795924ee77cfcab8d8fef6a8138f3220bc697067866d6bca45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cdc05b39017795924ee77cfcab8d8fef6a8138f3220bc697067866d6bca45f->enter($__internal_b0cdc05b39017795924ee77cfcab8d8fef6a8138f3220bc697067866d6bca45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0cdc05b39017795924ee77cfcab8d8fef6a8138f3220bc697067866d6bca45f->leave($__internal_b0cdc05b39017795924ee77cfcab8d8fef6a8138f3220bc697067866d6bca45f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7613ab3fab6d938c5f01d2620701af6312fbe7cddb10fe588d669ed001aa31ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7613ab3fab6d938c5f01d2620701af6312fbe7cddb10fe588d669ed001aa31ad->enter($__internal_7613ab3fab6d938c5f01d2620701af6312fbe7cddb10fe588d669ed001aa31ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7613ab3fab6d938c5f01d2620701af6312fbe7cddb10fe588d669ed001aa31ad->leave($__internal_7613ab3fab6d938c5f01d2620701af6312fbe7cddb10fe588d669ed001aa31ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ddd3bb132c86cde4cba25cad327a798d77d209c16d6872f692c2dd5bbaa491c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddd3bb132c86cde4cba25cad327a798d77d209c16d6872f692c2dd5bbaa491c->enter($__internal_1ddd3bb132c86cde4cba25cad327a798d77d209c16d6872f692c2dd5bbaa491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ddd3bb132c86cde4cba25cad327a798d77d209c16d6872f692c2dd5bbaa491c->leave($__internal_1ddd3bb132c86cde4cba25cad327a798d77d209c16d6872f692c2dd5bbaa491c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be6cb6c359fc96c13d0c3fb597bab782b575b25809e179aec3e5c8e9a9ef0299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6cb6c359fc96c13d0c3fb597bab782b575b25809e179aec3e5c8e9a9ef0299->enter($__internal_be6cb6c359fc96c13d0c3fb597bab782b575b25809e179aec3e5c8e9a9ef0299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be6cb6c359fc96c13d0c3fb597bab782b575b25809e179aec3e5c8e9a9ef0299->leave($__internal_be6cb6c359fc96c13d0c3fb597bab782b575b25809e179aec3e5c8e9a9ef0299_prof);

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
