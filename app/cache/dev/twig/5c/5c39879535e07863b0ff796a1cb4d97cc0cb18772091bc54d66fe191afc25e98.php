<?php

/* SRVDVServerBundle:Default:accueil.html.twig */
class __TwigTemplate_d644855f0ef8273d6240f624b6362b95e52f0133af66e5c163b6cbaced2f3f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SRVDVServerBundle:Default:accueil.html.twig", 1);
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
        $__internal_263e849f3f7ebada481134d685260b56931f874aa5873f10a99811e465a8800d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263e849f3f7ebada481134d685260b56931f874aa5873f10a99811e465a8800d->enter($__internal_263e849f3f7ebada481134d685260b56931f874aa5873f10a99811e465a8800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263e849f3f7ebada481134d685260b56931f874aa5873f10a99811e465a8800d->leave($__internal_263e849f3f7ebada481134d685260b56931f874aa5873f10a99811e465a8800d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5118e7d783ecdff88db52065ca3e67acce747799bdb1741d76904d853b01507d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5118e7d783ecdff88db52065ca3e67acce747799bdb1741d76904d853b01507d->enter($__internal_5118e7d783ecdff88db52065ca3e67acce747799bdb1741d76904d853b01507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Hello ";
        // line 4
        echo twig_escape_filter($this->env, ($context["somme"] ?? $this->getContext($context, "somme")), "html", null, true);
        echo "!
";
        
        $__internal_5118e7d783ecdff88db52065ca3e67acce747799bdb1741d76904d853b01507d->leave($__internal_5118e7d783ecdff88db52065ca3e67acce747799bdb1741d76904d853b01507d_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Default:accueil.html.twig";
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

", "SRVDVServerBundle:Default:accueil.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Default/accueil.html.twig");
    }
}
