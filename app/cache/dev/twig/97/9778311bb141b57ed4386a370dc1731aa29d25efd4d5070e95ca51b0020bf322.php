<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_11eca8884680296c9605e7e4158910694b81a5629c0a8949850d0348766f8ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1b35de7e06cc9a460e41e418f70bc331ff419c8f2125193454242bd5f3cf36d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b35de7e06cc9a460e41e418f70bc331ff419c8f2125193454242bd5f3cf36d0->enter($__internal_1b35de7e06cc9a460e41e418f70bc331ff419c8f2125193454242bd5f3cf36d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b35de7e06cc9a460e41e418f70bc331ff419c8f2125193454242bd5f3cf36d0->leave($__internal_1b35de7e06cc9a460e41e418f70bc331ff419c8f2125193454242bd5f3cf36d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8710c26708c767d2804c53f660b5e82bee59c9bcd62779fc5c64871738c24add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8710c26708c767d2804c53f660b5e82bee59c9bcd62779fc5c64871738c24add->enter($__internal_8710c26708c767d2804c53f660b5e82bee59c9bcd62779fc5c64871738c24add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8710c26708c767d2804c53f660b5e82bee59c9bcd62779fc5c64871738c24add->leave($__internal_8710c26708c767d2804c53f660b5e82bee59c9bcd62779fc5c64871738c24add_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
