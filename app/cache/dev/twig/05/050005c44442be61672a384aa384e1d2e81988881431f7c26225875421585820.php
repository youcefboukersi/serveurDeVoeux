<?php

/* @SRVDVServer/Resetting/request.html.twig */
class __TwigTemplate_98f30bf29daadf8adfe130db8f6f66ba1cea5d61b3d77ecde2becc628687ab69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3f9229986bd719876cfec2a113419ab744a8dda9558446ce9e53103b2a01edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f9229986bd719876cfec2a113419ab744a8dda9558446ce9e53103b2a01edf->enter($__internal_d3f9229986bd719876cfec2a113419ab744a8dda9558446ce9e53103b2a01edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f9229986bd719876cfec2a113419ab744a8dda9558446ce9e53103b2a01edf->leave($__internal_d3f9229986bd719876cfec2a113419ab744a8dda9558446ce9e53103b2a01edf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf75745e71e06ead7a630fcd8d73daab9c69b61e431e0903defe9037c060a271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf75745e71e06ead7a630fcd8d73daab9c69b61e431e0903defe9037c060a271->enter($__internal_cf75745e71e06ead7a630fcd8d73daab9c69b61e431e0903defe9037c060a271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@SRVDVServer/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cf75745e71e06ead7a630fcd8d73daab9c69b61e431e0903defe9037c060a271->leave($__internal_cf75745e71e06ead7a630fcd8d73daab9c69b61e431e0903defe9037c060a271_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Resetting/request.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Resetting/request.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
