<?php

/* SRVDVServerBundle:Resetting:reset.html.twig */
class __TwigTemplate_a0e6c994831012c8e06412ce7981db946e74ebfb10755a7783c74201bc6e025c extends Twig_Template
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
        $__internal_27db52965829de337f699ec4ce84e6672413b29522a7f996cfa7319002372875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27db52965829de337f699ec4ce84e6672413b29522a7f996cfa7319002372875->enter($__internal_27db52965829de337f699ec4ce84e6672413b29522a7f996cfa7319002372875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27db52965829de337f699ec4ce84e6672413b29522a7f996cfa7319002372875->leave($__internal_27db52965829de337f699ec4ce84e6672413b29522a7f996cfa7319002372875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1bae6ea8a07f15a67ba8e2f02b7ccd63c96e8a86e83254a295b438b92f17220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bae6ea8a07f15a67ba8e2f02b7ccd63c96e8a86e83254a295b438b92f17220->enter($__internal_c1bae6ea8a07f15a67ba8e2f02b7ccd63c96e8a86e83254a295b438b92f17220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "SRVDVServerBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c1bae6ea8a07f15a67ba8e2f02b7ccd63c96e8a86e83254a295b438b92f17220->leave($__internal_c1bae6ea8a07f15a67ba8e2f02b7ccd63c96e8a86e83254a295b438b92f17220_prof);

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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Resetting:reset.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/reset.html.twig");
    }
}
