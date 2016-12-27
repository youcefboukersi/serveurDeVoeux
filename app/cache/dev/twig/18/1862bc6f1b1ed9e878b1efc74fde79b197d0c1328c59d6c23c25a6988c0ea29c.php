<?php

/* @SRVDVServer/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_3006e15d14e0241c7f5adef7cdb5ebb32a76b51c323c96411f3623f67e699d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_89c336e2d1c1f8a6e3b0508d2c4380aacfa483dbb23ef014754d65c7ef3859eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c336e2d1c1f8a6e3b0508d2c4380aacfa483dbb23ef014754d65c7ef3859eb->enter($__internal_89c336e2d1c1f8a6e3b0508d2c4380aacfa483dbb23ef014754d65c7ef3859eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c336e2d1c1f8a6e3b0508d2c4380aacfa483dbb23ef014754d65c7ef3859eb->leave($__internal_89c336e2d1c1f8a6e3b0508d2c4380aacfa483dbb23ef014754d65c7ef3859eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32a0c350c595c2589490a156e096f9f6c30d5c9518893bbcaa2aa33cb05ae9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a0c350c595c2589490a156e096f9f6c30d5c9518893bbcaa2aa33cb05ae9e3->enter($__internal_32a0c350c595c2589490a156e096f9f6c30d5c9518893bbcaa2aa33cb05ae9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_32a0c350c595c2589490a156e096f9f6c30d5c9518893bbcaa2aa33cb05ae9e3->leave($__internal_32a0c350c595c2589490a156e096f9f6c30d5c9518893bbcaa2aa33cb05ae9e3_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig";
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
", "@SRVDVServer/Resetting/passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
