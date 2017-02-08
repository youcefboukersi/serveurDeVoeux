<?php

/* @SRVDVServer/Profile/edit.html.twig */
class __TwigTemplate_813950fe1c3a647da1b6ca87e86dea3d67a49b886a5e032d5807efc4616e83fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baba14e1e746885a123710ce4a6f87e0d0ac721a8cb77349713c13b2bb9f43ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baba14e1e746885a123710ce4a6f87e0d0ac721a8cb77349713c13b2bb9f43ac->enter($__internal_baba14e1e746885a123710ce4a6f87e0d0ac721a8cb77349713c13b2bb9f43ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_baba14e1e746885a123710ce4a6f87e0d0ac721a8cb77349713c13b2bb9f43ac->leave($__internal_baba14e1e746885a123710ce4a6f87e0d0ac721a8cb77349713c13b2bb9f43ac_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d843752a69550ecbe728848335fc996ccb5ed5975a6092b3c4f4f058355e333b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d843752a69550ecbe728848335fc996ccb5ed5975a6092b3c4f4f058355e333b->enter($__internal_d843752a69550ecbe728848335fc996ccb5ed5975a6092b3c4f4f058355e333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SRVDVServerBundle:Profile:edit_content.html.twig", "@SRVDVServer/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d843752a69550ecbe728848335fc996ccb5ed5975a6092b3c4f4f058355e333b->leave($__internal_d843752a69550ecbe728848335fc996ccb5ed5975a6092b3c4f4f058355e333b_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Profile/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
{% include \"SRVDVServerBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Profile/edit.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
