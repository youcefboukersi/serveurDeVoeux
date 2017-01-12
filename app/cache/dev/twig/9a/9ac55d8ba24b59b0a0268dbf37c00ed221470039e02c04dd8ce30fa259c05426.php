<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_5d0d99d1fc971c29559074cf403f35583bfd2c9124e2d9715f86776c2bc1b42e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_4215c881f0c5dc7cfba8fa56e48b3b9fe82a1f9660e15fb88ba880c224501e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4215c881f0c5dc7cfba8fa56e48b3b9fe82a1f9660e15fb88ba880c224501e0f->enter($__internal_4215c881f0c5dc7cfba8fa56e48b3b9fe82a1f9660e15fb88ba880c224501e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4215c881f0c5dc7cfba8fa56e48b3b9fe82a1f9660e15fb88ba880c224501e0f->leave($__internal_4215c881f0c5dc7cfba8fa56e48b3b9fe82a1f9660e15fb88ba880c224501e0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b43aa75433cc7035b4bdac8af424c7cc914bf5b6db066b2d2b46efb4f671ac86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43aa75433cc7035b4bdac8af424c7cc914bf5b6db066b2d2b46efb4f671ac86->enter($__internal_b43aa75433cc7035b4bdac8af424c7cc914bf5b6db066b2d2b46efb4f671ac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_b43aa75433cc7035b4bdac8af424c7cc914bf5b6db066b2d2b46efb4f671ac86->leave($__internal_b43aa75433cc7035b4bdac8af424c7cc914bf5b6db066b2d2b46efb4f671ac86_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
