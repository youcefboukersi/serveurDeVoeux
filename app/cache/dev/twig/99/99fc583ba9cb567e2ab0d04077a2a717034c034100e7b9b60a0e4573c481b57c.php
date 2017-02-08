<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_044f652e647774af82d8fcac92d1ca16845b31c40c8b24a6e719fad5da85c9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f6421b9af500d1b6c54bdca9d883205651286d3151d03f1d715219fb7d0363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f6421b9af500d1b6c54bdca9d883205651286d3151d03f1d715219fb7d0363->enter($__internal_55f6421b9af500d1b6c54bdca9d883205651286d3151d03f1d715219fb7d0363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f6421b9af500d1b6c54bdca9d883205651286d3151d03f1d715219fb7d0363->leave($__internal_55f6421b9af500d1b6c54bdca9d883205651286d3151d03f1d715219fb7d0363_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fbd1f186b800d07d78ce246a5db92e77ba12a86ea3ab07892c330c7ec7ce1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbd1f186b800d07d78ce246a5db92e77ba12a86ea3ab07892c330c7ec7ce1c1->enter($__internal_7fbd1f186b800d07d78ce246a5db92e77ba12a86ea3ab07892c330c7ec7ce1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7fbd1f186b800d07d78ce246a5db92e77ba12a86ea3ab07892c330c7ec7ce1c1->leave($__internal_7fbd1f186b800d07d78ce246a5db92e77ba12a86ea3ab07892c330c7ec7ce1c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
