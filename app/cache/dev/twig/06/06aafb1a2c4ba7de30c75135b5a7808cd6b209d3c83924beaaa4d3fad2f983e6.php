<?php

/* @SRVDVServer/Default/accueil.html.twig */
class __TwigTemplate_a554bf75272b320e8391a1278011eb0da357f4cecc9cb4c110c38ad6ed54d630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@SRVDVServer/Default/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e270fd8b5cf93077fa95539d9f8c5035ebe99ad1275b88eaa38065a26b4bd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e270fd8b5cf93077fa95539d9f8c5035ebe99ad1275b88eaa38065a26b4bd4e->enter($__internal_3e270fd8b5cf93077fa95539d9f8c5035ebe99ad1275b88eaa38065a26b4bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e270fd8b5cf93077fa95539d9f8c5035ebe99ad1275b88eaa38065a26b4bd4e->leave($__internal_3e270fd8b5cf93077fa95539d9f8c5035ebe99ad1275b88eaa38065a26b4bd4e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd3652f6a10f9d2649d70a734f922828012edcf87a800e123f7cba717b69445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd3652f6a10f9d2649d70a734f922828012edcf87a800e123f7cba717b69445->enter($__internal_dbd3652f6a10f9d2649d70a734f922828012edcf87a800e123f7cba717b69445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Hello ";
        // line 4
        echo twig_escape_filter($this->env, ($context["somme"] ?? $this->getContext($context, "somme")), "html", null, true);
        echo "!
";
        
        $__internal_dbd3652f6a10f9d2649d70a734f922828012edcf87a800e123f7cba717b69445->leave($__internal_dbd3652f6a10f9d2649d70a734f922828012edcf87a800e123f7cba717b69445_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}
{% block body%}

Hello {{ somme }}!
{% endblock %}

", "@SRVDVServer/Default/accueil.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Default\\accueil.html.twig");
    }
}
