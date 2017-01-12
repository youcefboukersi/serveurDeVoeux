<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_380185fb0ff2723084fdca46c2f9838e774fc1e51c13517f3589924cc1a05fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_bb173d3e4effe5d496bcf8608e8ec2ebbf597d3ca81ca4a1f9dfe9c6cb455136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb173d3e4effe5d496bcf8608e8ec2ebbf597d3ca81ca4a1f9dfe9c6cb455136->enter($__internal_bb173d3e4effe5d496bcf8608e8ec2ebbf597d3ca81ca4a1f9dfe9c6cb455136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb173d3e4effe5d496bcf8608e8ec2ebbf597d3ca81ca4a1f9dfe9c6cb455136->leave($__internal_bb173d3e4effe5d496bcf8608e8ec2ebbf597d3ca81ca4a1f9dfe9c6cb455136_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_255ee41093f56b1d097155216690f519de5e26e1ef533e5e475ec8135eafd84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255ee41093f56b1d097155216690f519de5e26e1ef533e5e475ec8135eafd84c->enter($__internal_255ee41093f56b1d097155216690f519de5e26e1ef533e5e475ec8135eafd84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_255ee41093f56b1d097155216690f519de5e26e1ef533e5e475ec8135eafd84c->leave($__internal_255ee41093f56b1d097155216690f519de5e26e1ef533e5e475ec8135eafd84c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request.html.twig");
    }
}
