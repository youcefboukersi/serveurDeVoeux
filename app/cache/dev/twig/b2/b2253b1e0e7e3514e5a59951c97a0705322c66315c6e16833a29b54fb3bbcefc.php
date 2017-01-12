<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_35709ff032587c2b99c000bfccdd99237be2bcddef0b1825b6e303fc74b7e112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d8b304c90c0f1d9a0fdc36e597767d5751a70cd679e464ee2b033d571d6bdbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b304c90c0f1d9a0fdc36e597767d5751a70cd679e464ee2b033d571d6bdbaf->enter($__internal_d8b304c90c0f1d9a0fdc36e597767d5751a70cd679e464ee2b033d571d6bdbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b304c90c0f1d9a0fdc36e597767d5751a70cd679e464ee2b033d571d6bdbaf->leave($__internal_d8b304c90c0f1d9a0fdc36e597767d5751a70cd679e464ee2b033d571d6bdbaf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f065865c0f3f0b93835e4ba8c3a05a0d963ce8ddac0c2cdfbee9107540094e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f065865c0f3f0b93835e4ba8c3a05a0d963ce8ddac0c2cdfbee9107540094e4->enter($__internal_0f065865c0f3f0b93835e4ba8c3a05a0d963ce8ddac0c2cdfbee9107540094e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0f065865c0f3f0b93835e4ba8c3a05a0d963ce8ddac0c2cdfbee9107540094e4->leave($__internal_0f065865c0f3f0b93835e4ba8c3a05a0d963ce8ddac0c2cdfbee9107540094e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
