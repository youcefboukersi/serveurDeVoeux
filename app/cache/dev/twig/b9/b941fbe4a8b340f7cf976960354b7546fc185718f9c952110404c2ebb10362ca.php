<?php

/* SRVDVServerBundle:Resetting:reset.html.twig */
class __TwigTemplate_908870486c6b08f07e0350f23035333883d2ab7f0c1a0d2ddbd16063c9ef73b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ec2e0149101d9ecf853c5bd88496f407fa4d5434c89689221155968b78329c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec2e0149101d9ecf853c5bd88496f407fa4d5434c89689221155968b78329c9->enter($__internal_3ec2e0149101d9ecf853c5bd88496f407fa4d5434c89689221155968b78329c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec2e0149101d9ecf853c5bd88496f407fa4d5434c89689221155968b78329c9->leave($__internal_3ec2e0149101d9ecf853c5bd88496f407fa4d5434c89689221155968b78329c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_073ee647c1fb31a2c3216f301ddc00ffdcf7eee26648b633658ad1af0ba02fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073ee647c1fb31a2c3216f301ddc00ffdcf7eee26648b633658ad1af0ba02fd5->enter($__internal_073ee647c1fb31a2c3216f301ddc00ffdcf7eee26648b633658ad1af0ba02fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Resetting:reset_content.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_073ee647c1fb31a2c3216f301ddc00ffdcf7eee26648b633658ad1af0ba02fd5->leave($__internal_073ee647c1fb31a2c3216f301ddc00ffdcf7eee26648b633658ad1af0ba02fd5_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% block fos_user_content %}
    {% include \"SRVDVServerBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/reset.html.twig");
    }
}
