<?php

/* ::base.html.twig */
class __TwigTemplate_d6fbd1c5645777ebdb56f0091dd9deaf76580cd610d812a9ec40e42b205a6098 extends Twig_Template
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
        $__internal_cbda423448ad8e1f081c100bc7947cccedbbfa6ffc4aba1cd27f13dd5c0d0a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbda423448ad8e1f081c100bc7947cccedbbfa6ffc4aba1cd27f13dd5c0d0a2b->enter($__internal_cbda423448ad8e1f081c100bc7947cccedbbfa6ffc4aba1cd27f13dd5c0d0a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cbda423448ad8e1f081c100bc7947cccedbbfa6ffc4aba1cd27f13dd5c0d0a2b->leave($__internal_cbda423448ad8e1f081c100bc7947cccedbbfa6ffc4aba1cd27f13dd5c0d0a2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_752334c68c214d813ba004058b99a4d62fb1e242ff78c2145c535485634c19d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752334c68c214d813ba004058b99a4d62fb1e242ff78c2145c535485634c19d0->enter($__internal_752334c68c214d813ba004058b99a4d62fb1e242ff78c2145c535485634c19d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_752334c68c214d813ba004058b99a4d62fb1e242ff78c2145c535485634c19d0->leave($__internal_752334c68c214d813ba004058b99a4d62fb1e242ff78c2145c535485634c19d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_925459f8d0adf309bc046aaaec85e6a6842a9e2e642cb7591eb0edd7be3537d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925459f8d0adf309bc046aaaec85e6a6842a9e2e642cb7591eb0edd7be3537d5->enter($__internal_925459f8d0adf309bc046aaaec85e6a6842a9e2e642cb7591eb0edd7be3537d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_925459f8d0adf309bc046aaaec85e6a6842a9e2e642cb7591eb0edd7be3537d5->leave($__internal_925459f8d0adf309bc046aaaec85e6a6842a9e2e642cb7591eb0edd7be3537d5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e22aa447f6c639e479e4194d4717b7c6a1b0da8e24429fd110138054e749393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e22aa447f6c639e479e4194d4717b7c6a1b0da8e24429fd110138054e749393->enter($__internal_8e22aa447f6c639e479e4194d4717b7c6a1b0da8e24429fd110138054e749393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e22aa447f6c639e479e4194d4717b7c6a1b0da8e24429fd110138054e749393->leave($__internal_8e22aa447f6c639e479e4194d4717b7c6a1b0da8e24429fd110138054e749393_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e24c55062dd4ed4f6592a3e98b2f611582cc5fe0170a8ba84adcca723c0506b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24c55062dd4ed4f6592a3e98b2f611582cc5fe0170a8ba84adcca723c0506b9->enter($__internal_e24c55062dd4ed4f6592a3e98b2f611582cc5fe0170a8ba84adcca723c0506b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e24c55062dd4ed4f6592a3e98b2f611582cc5fe0170a8ba84adcca723c0506b9->leave($__internal_e24c55062dd4ed4f6592a3e98b2f611582cc5fe0170a8ba84adcca723c0506b9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/base.html.twig");
    }
}
