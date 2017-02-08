<?php

/* SRVDVServerBundle:Profile:show.html.twig */
class __TwigTemplate_d7c40a8e7d25903d40c27f7a28bce13352e6b18206bd95f20084b898c33806f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 1);
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
        $__internal_1b6152c5eb497d77929be268c2ae69de3d8971a0080c17fde92423c7ea9602d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6152c5eb497d77929be268c2ae69de3d8971a0080c17fde92423c7ea9602d4->enter($__internal_1b6152c5eb497d77929be268c2ae69de3d8971a0080c17fde92423c7ea9602d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6152c5eb497d77929be268c2ae69de3d8971a0080c17fde92423c7ea9602d4->leave($__internal_1b6152c5eb497d77929be268c2ae69de3d8971a0080c17fde92423c7ea9602d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1c3319e4be2974f8843961c4b002072ffb9e85854eec1bb5a233b11bf0ebec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c3319e4be2974f8843961c4b002072ffb9e85854eec1bb5a233b11bf0ebec3->enter($__internal_b1c3319e4be2974f8843961c4b002072ffb9e85854eec1bb5a233b11bf0ebec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:Profile:show_content.html.twig", "SRVDVServerBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b1c3319e4be2974f8843961c4b002072ffb9e85854eec1bb5a233b11bf0ebec3->leave($__internal_b1c3319e4be2974f8843961c4b002072ffb9e85854eec1bb5a233b11bf0ebec3_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Profile:show.html.twig";
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
    {% include \"SRVDVServerBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:Profile:show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/show.html.twig");
    }
}
