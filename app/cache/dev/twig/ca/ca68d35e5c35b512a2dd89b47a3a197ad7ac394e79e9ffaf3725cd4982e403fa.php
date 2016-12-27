<?php

/* base.html.twig */
class __TwigTemplate_55ea3dfc188b990b7c3a5ad1f2f1f9f044f308dbf7525daf8e1d4da69f3efa5e extends Twig_Template
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
        $__internal_669e534efe6bf9a814726e655ab0fcc4027d32707ab4aa7150914f8cabb52598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669e534efe6bf9a814726e655ab0fcc4027d32707ab4aa7150914f8cabb52598->enter($__internal_669e534efe6bf9a814726e655ab0fcc4027d32707ab4aa7150914f8cabb52598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_669e534efe6bf9a814726e655ab0fcc4027d32707ab4aa7150914f8cabb52598->leave($__internal_669e534efe6bf9a814726e655ab0fcc4027d32707ab4aa7150914f8cabb52598_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_908f27df6df5cbbd2cf5d27c271b6f5456e23e3f410dd35e7a16320aff714b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908f27df6df5cbbd2cf5d27c271b6f5456e23e3f410dd35e7a16320aff714b17->enter($__internal_908f27df6df5cbbd2cf5d27c271b6f5456e23e3f410dd35e7a16320aff714b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_908f27df6df5cbbd2cf5d27c271b6f5456e23e3f410dd35e7a16320aff714b17->leave($__internal_908f27df6df5cbbd2cf5d27c271b6f5456e23e3f410dd35e7a16320aff714b17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d851399b50e3dfcc7f264a15a7cdce12709f2887a41a98c31cc64434fe0df0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d851399b50e3dfcc7f264a15a7cdce12709f2887a41a98c31cc64434fe0df0d->enter($__internal_6d851399b50e3dfcc7f264a15a7cdce12709f2887a41a98c31cc64434fe0df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d851399b50e3dfcc7f264a15a7cdce12709f2887a41a98c31cc64434fe0df0d->leave($__internal_6d851399b50e3dfcc7f264a15a7cdce12709f2887a41a98c31cc64434fe0df0d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee71fbf2219d77e68fe2c2b3d9e1ffee8d54b5c38b5bd8e014bacebd94fe6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee71fbf2219d77e68fe2c2b3d9e1ffee8d54b5c38b5bd8e014bacebd94fe6e9->enter($__internal_aee71fbf2219d77e68fe2c2b3d9e1ffee8d54b5c38b5bd8e014bacebd94fe6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aee71fbf2219d77e68fe2c2b3d9e1ffee8d54b5c38b5bd8e014bacebd94fe6e9->leave($__internal_aee71fbf2219d77e68fe2c2b3d9e1ffee8d54b5c38b5bd8e014bacebd94fe6e9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c7c7f30a9c4dcb728c354aac3660d6fd0f6397890c24361bdd0c2e415f3a895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7c7f30a9c4dcb728c354aac3660d6fd0f6397890c24361bdd0c2e415f3a895->enter($__internal_2c7c7f30a9c4dcb728c354aac3660d6fd0f6397890c24361bdd0c2e415f3a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c7c7f30a9c4dcb728c354aac3660d6fd0f6397890c24361bdd0c2e415f3a895->leave($__internal_2c7c7f30a9c4dcb728c354aac3660d6fd0f6397890c24361bdd0c2e415f3a895_prof);

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
