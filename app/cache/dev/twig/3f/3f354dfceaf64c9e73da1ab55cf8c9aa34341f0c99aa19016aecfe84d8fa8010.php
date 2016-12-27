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
        $__internal_92ed454041d063214202b29285dfacf03e48533bfc1fbb9c4365cdd75c056503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ed454041d063214202b29285dfacf03e48533bfc1fbb9c4365cdd75c056503->enter($__internal_92ed454041d063214202b29285dfacf03e48533bfc1fbb9c4365cdd75c056503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ed454041d063214202b29285dfacf03e48533bfc1fbb9c4365cdd75c056503->leave($__internal_92ed454041d063214202b29285dfacf03e48533bfc1fbb9c4365cdd75c056503_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b1f1aebb81dde874548d7d04c554919a009ad2262d13594bd6b81d668164735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1f1aebb81dde874548d7d04c554919a009ad2262d13594bd6b81d668164735->enter($__internal_9b1f1aebb81dde874548d7d04c554919a009ad2262d13594bd6b81d668164735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9b1f1aebb81dde874548d7d04c554919a009ad2262d13594bd6b81d668164735->leave($__internal_9b1f1aebb81dde874548d7d04c554919a009ad2262d13594bd6b81d668164735_prof);

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
