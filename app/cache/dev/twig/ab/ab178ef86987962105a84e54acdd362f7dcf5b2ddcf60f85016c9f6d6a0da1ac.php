<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_0370897f49792fcc6f252021c709d546806b14cdde9a455f45a77a80f7f36ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a84706fb4762267b809cbe97e64256f9f45c6ff2ee2495f3d6e41fcc5fb50608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84706fb4762267b809cbe97e64256f9f45c6ff2ee2495f3d6e41fcc5fb50608->enter($__internal_a84706fb4762267b809cbe97e64256f9f45c6ff2ee2495f3d6e41fcc5fb50608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a84706fb4762267b809cbe97e64256f9f45c6ff2ee2495f3d6e41fcc5fb50608->leave($__internal_a84706fb4762267b809cbe97e64256f9f45c6ff2ee2495f3d6e41fcc5fb50608_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb5a5c2722305113e3a2b05b36e835522bc301de581994a46ec6adbb87cef139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5a5c2722305113e3a2b05b36e835522bc301de581994a46ec6adbb87cef139->enter($__internal_fb5a5c2722305113e3a2b05b36e835522bc301de581994a46ec6adbb87cef139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fb5a5c2722305113e3a2b05b36e835522bc301de581994a46ec6adbb87cef139->leave($__internal_fb5a5c2722305113e3a2b05b36e835522bc301de581994a46ec6adbb87cef139_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
