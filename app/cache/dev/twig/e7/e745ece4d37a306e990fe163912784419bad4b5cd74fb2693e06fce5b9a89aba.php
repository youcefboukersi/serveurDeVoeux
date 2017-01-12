<?php

/* base.html.twig */
class __TwigTemplate_16dfca7ecf67c371c61cb225bc3938b0384e373c03bb96be574f575c1c04f3c9 extends Twig_Template
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
        $__internal_3c38cb150fd8c68ed65bc059c8ad3ba77e388b3b7abfdce1204b1193c0f72914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c38cb150fd8c68ed65bc059c8ad3ba77e388b3b7abfdce1204b1193c0f72914->enter($__internal_3c38cb150fd8c68ed65bc059c8ad3ba77e388b3b7abfdce1204b1193c0f72914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3c38cb150fd8c68ed65bc059c8ad3ba77e388b3b7abfdce1204b1193c0f72914->leave($__internal_3c38cb150fd8c68ed65bc059c8ad3ba77e388b3b7abfdce1204b1193c0f72914_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1e73af13579427b52e467920bc034349c7dbfe5e64af244e59cd04d9caefdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e73af13579427b52e467920bc034349c7dbfe5e64af244e59cd04d9caefdf1->enter($__internal_a1e73af13579427b52e467920bc034349c7dbfe5e64af244e59cd04d9caefdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1e73af13579427b52e467920bc034349c7dbfe5e64af244e59cd04d9caefdf1->leave($__internal_a1e73af13579427b52e467920bc034349c7dbfe5e64af244e59cd04d9caefdf1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6d9b7db2274e22c32e75d37f3986e2d8f4d6c830600ae7e1c42063b55908767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d9b7db2274e22c32e75d37f3986e2d8f4d6c830600ae7e1c42063b55908767->enter($__internal_c6d9b7db2274e22c32e75d37f3986e2d8f4d6c830600ae7e1c42063b55908767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c6d9b7db2274e22c32e75d37f3986e2d8f4d6c830600ae7e1c42063b55908767->leave($__internal_c6d9b7db2274e22c32e75d37f3986e2d8f4d6c830600ae7e1c42063b55908767_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd079e2971e06b7b2659d7b0b4d733a391c8b579ab19b13115263906beb43d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd079e2971e06b7b2659d7b0b4d733a391c8b579ab19b13115263906beb43d0->enter($__internal_9fd079e2971e06b7b2659d7b0b4d733a391c8b579ab19b13115263906beb43d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fd079e2971e06b7b2659d7b0b4d733a391c8b579ab19b13115263906beb43d0->leave($__internal_9fd079e2971e06b7b2659d7b0b4d733a391c8b579ab19b13115263906beb43d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a0b7aa199a35c987f756fe86660306ccc723e8c5fb8f1653b54137998fd875a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0b7aa199a35c987f756fe86660306ccc723e8c5fb8f1653b54137998fd875a->enter($__internal_4a0b7aa199a35c987f756fe86660306ccc723e8c5fb8f1653b54137998fd875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a0b7aa199a35c987f756fe86660306ccc723e8c5fb8f1653b54137998fd875a->leave($__internal_4a0b7aa199a35c987f756fe86660306ccc723e8c5fb8f1653b54137998fd875a_prof);

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
", "base.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\base.html.twig");
    }
}
