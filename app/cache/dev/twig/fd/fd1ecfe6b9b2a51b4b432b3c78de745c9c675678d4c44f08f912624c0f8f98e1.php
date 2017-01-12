<?php

/* @SRVDVServer/Profile/edit.html.twig */
class __TwigTemplate_d9013539ca28b58ccbdb7f0f0a44757e5693bf4c1e107942716ae3fa814e106d extends Twig_Template
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
        $__internal_b9ff973a08e43f6768db85bdfd85c81b4c37f1e95958514e8b0653fdfa0efe7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ff973a08e43f6768db85bdfd85c81b4c37f1e95958514e8b0653fdfa0efe7e->enter($__internal_b9ff973a08e43f6768db85bdfd85c81b4c37f1e95958514e8b0653fdfa0efe7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Profile/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b9ff973a08e43f6768db85bdfd85c81b4c37f1e95958514e8b0653fdfa0efe7e->leave($__internal_b9ff973a08e43f6768db85bdfd85c81b4c37f1e95958514e8b0653fdfa0efe7e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b14bbf6d3de2dedf565a60fbfe75d3e234e46c98f67bb1f2933997f318212164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14bbf6d3de2dedf565a60fbfe75d3e234e46c98f67bb1f2933997f318212164->enter($__internal_b14bbf6d3de2dedf565a60fbfe75d3e234e46c98f67bb1f2933997f318212164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_b14bbf6d3de2dedf565a60fbfe75d3e234e46c98f67bb1f2933997f318212164->leave($__internal_b14bbf6d3de2dedf565a60fbfe75d3e234e46c98f67bb1f2933997f318212164_prof);

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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/Profile/edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
