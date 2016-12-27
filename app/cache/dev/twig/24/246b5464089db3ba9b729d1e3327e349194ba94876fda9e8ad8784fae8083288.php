<?php

/* base.html.twig */
class __TwigTemplate_ca892413a733174832c3a657948ee05aef3f092cc7107dd3e84f1e24254a58e1 extends Twig_Template
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
        $__internal_cc8b88fe830cf52982fd32d955469f2bd9c3e8234c27d088501f9b6801ddbd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8b88fe830cf52982fd32d955469f2bd9c3e8234c27d088501f9b6801ddbd3a->enter($__internal_cc8b88fe830cf52982fd32d955469f2bd9c3e8234c27d088501f9b6801ddbd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cc8b88fe830cf52982fd32d955469f2bd9c3e8234c27d088501f9b6801ddbd3a->leave($__internal_cc8b88fe830cf52982fd32d955469f2bd9c3e8234c27d088501f9b6801ddbd3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29bb7054943d6ba02aa1b85c63bb8f7ee8d7251bcb9fe453a58bd6ef898ecf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bb7054943d6ba02aa1b85c63bb8f7ee8d7251bcb9fe453a58bd6ef898ecf76->enter($__internal_29bb7054943d6ba02aa1b85c63bb8f7ee8d7251bcb9fe453a58bd6ef898ecf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29bb7054943d6ba02aa1b85c63bb8f7ee8d7251bcb9fe453a58bd6ef898ecf76->leave($__internal_29bb7054943d6ba02aa1b85c63bb8f7ee8d7251bcb9fe453a58bd6ef898ecf76_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a0c57574712695304798bb8e09c9c36c3330d7d09dc0c0ab3ef7f08b3568f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0c57574712695304798bb8e09c9c36c3330d7d09dc0c0ab3ef7f08b3568f5f->enter($__internal_2a0c57574712695304798bb8e09c9c36c3330d7d09dc0c0ab3ef7f08b3568f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a0c57574712695304798bb8e09c9c36c3330d7d09dc0c0ab3ef7f08b3568f5f->leave($__internal_2a0c57574712695304798bb8e09c9c36c3330d7d09dc0c0ab3ef7f08b3568f5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee077106f2560572a52efead07e388ec4ad41a4bb782b9216c138e0e9f537f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee077106f2560572a52efead07e388ec4ad41a4bb782b9216c138e0e9f537f1f->enter($__internal_ee077106f2560572a52efead07e388ec4ad41a4bb782b9216c138e0e9f537f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee077106f2560572a52efead07e388ec4ad41a4bb782b9216c138e0e9f537f1f->leave($__internal_ee077106f2560572a52efead07e388ec4ad41a4bb782b9216c138e0e9f537f1f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3d7eb757099e53586aa88409716569447136cf1a1b29835b1265c59e2e24c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d7eb757099e53586aa88409716569447136cf1a1b29835b1265c59e2e24c43->enter($__internal_c3d7eb757099e53586aa88409716569447136cf1a1b29835b1265c59e2e24c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3d7eb757099e53586aa88409716569447136cf1a1b29835b1265c59e2e24c43->leave($__internal_c3d7eb757099e53586aa88409716569447136cf1a1b29835b1265c59e2e24c43_prof);

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
", "base.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\base.html.twig");
    }
}
