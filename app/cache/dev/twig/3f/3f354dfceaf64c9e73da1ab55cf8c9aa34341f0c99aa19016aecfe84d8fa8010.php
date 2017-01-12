<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7f086fa711164c2998663d634e5506af70f1b8159cc114cc1bcea641af00c0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_da14e3beef232b8f0a4dd584df20bc1b4c3dd543ccd9352e80af69c393701743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da14e3beef232b8f0a4dd584df20bc1b4c3dd543ccd9352e80af69c393701743->enter($__internal_da14e3beef232b8f0a4dd584df20bc1b4c3dd543ccd9352e80af69c393701743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da14e3beef232b8f0a4dd584df20bc1b4c3dd543ccd9352e80af69c393701743->leave($__internal_da14e3beef232b8f0a4dd584df20bc1b4c3dd543ccd9352e80af69c393701743_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f873065b1a88f39f208839beb8d40cb300091636e5522520543cef3fe9931fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f873065b1a88f39f208839beb8d40cb300091636e5522520543cef3fe9931fae->enter($__internal_f873065b1a88f39f208839beb8d40cb300091636e5522520543cef3fe9931fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f873065b1a88f39f208839beb8d40cb300091636e5522520543cef3fe9931fae->leave($__internal_f873065b1a88f39f208839beb8d40cb300091636e5522520543cef3fe9931fae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
