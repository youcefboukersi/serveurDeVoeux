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
        $__internal_54af09d098e20460eb3ca1dfdebd1bb550bbe85c63cd5ef3b0eb8ff20eb4920b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54af09d098e20460eb3ca1dfdebd1bb550bbe85c63cd5ef3b0eb8ff20eb4920b->enter($__internal_54af09d098e20460eb3ca1dfdebd1bb550bbe85c63cd5ef3b0eb8ff20eb4920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_54af09d098e20460eb3ca1dfdebd1bb550bbe85c63cd5ef3b0eb8ff20eb4920b->leave($__internal_54af09d098e20460eb3ca1dfdebd1bb550bbe85c63cd5ef3b0eb8ff20eb4920b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5151170a5d2a1480d5c8386aa65e8a7a5c75d639fc11e14162a98677741488b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5151170a5d2a1480d5c8386aa65e8a7a5c75d639fc11e14162a98677741488b->enter($__internal_e5151170a5d2a1480d5c8386aa65e8a7a5c75d639fc11e14162a98677741488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5151170a5d2a1480d5c8386aa65e8a7a5c75d639fc11e14162a98677741488b->leave($__internal_e5151170a5d2a1480d5c8386aa65e8a7a5c75d639fc11e14162a98677741488b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff33865ee4c0d14562d8a97aa9beda64b6e2746bb93b2657b44a1e03d294e376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff33865ee4c0d14562d8a97aa9beda64b6e2746bb93b2657b44a1e03d294e376->enter($__internal_ff33865ee4c0d14562d8a97aa9beda64b6e2746bb93b2657b44a1e03d294e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff33865ee4c0d14562d8a97aa9beda64b6e2746bb93b2657b44a1e03d294e376->leave($__internal_ff33865ee4c0d14562d8a97aa9beda64b6e2746bb93b2657b44a1e03d294e376_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcf3b37cb2164d38ca906f946d627541c53949f0c0014d92fa95575c87d95293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf3b37cb2164d38ca906f946d627541c53949f0c0014d92fa95575c87d95293->enter($__internal_dcf3b37cb2164d38ca906f946d627541c53949f0c0014d92fa95575c87d95293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcf3b37cb2164d38ca906f946d627541c53949f0c0014d92fa95575c87d95293->leave($__internal_dcf3b37cb2164d38ca906f946d627541c53949f0c0014d92fa95575c87d95293_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_530df719383049ae06fac9e2e7fce2852fb07354b87408f3e9b122d937af5382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530df719383049ae06fac9e2e7fce2852fb07354b87408f3e9b122d937af5382->enter($__internal_530df719383049ae06fac9e2e7fce2852fb07354b87408f3e9b122d937af5382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_530df719383049ae06fac9e2e7fce2852fb07354b87408f3e9b122d937af5382->leave($__internal_530df719383049ae06fac9e2e7fce2852fb07354b87408f3e9b122d937af5382_prof);

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
