<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_dcfde6b799f2a10be79fd238017ec18809838aed7e0462dab008718532925c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6f7f96a003b549558758584e5f46250ba04b3ce4bdf109d35a1ce19f30206cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f96a003b549558758584e5f46250ba04b3ce4bdf109d35a1ce19f30206cdf->enter($__internal_6f7f96a003b549558758584e5f46250ba04b3ce4bdf109d35a1ce19f30206cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7f96a003b549558758584e5f46250ba04b3ce4bdf109d35a1ce19f30206cdf->leave($__internal_6f7f96a003b549558758584e5f46250ba04b3ce4bdf109d35a1ce19f30206cdf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8132a254a503a03605e7585107e74a08011bc57c7ac4615cf8f88e336dc925c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8132a254a503a03605e7585107e74a08011bc57c7ac4615cf8f88e336dc925c->enter($__internal_a8132a254a503a03605e7585107e74a08011bc57c7ac4615cf8f88e336dc925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a8132a254a503a03605e7585107e74a08011bc57c7ac4615cf8f88e336dc925c->leave($__internal_a8132a254a503a03605e7585107e74a08011bc57c7ac4615cf8f88e336dc925c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
