<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_f36604abef098c84d22b7a5d1b9b3a18014a780a897c93d1ec52eb7fc5333224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5013d6c6bc73517b1b43139d9da8e02716bc68dec04fcea70819edf4e89a19db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5013d6c6bc73517b1b43139d9da8e02716bc68dec04fcea70819edf4e89a19db->enter($__internal_5013d6c6bc73517b1b43139d9da8e02716bc68dec04fcea70819edf4e89a19db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5013d6c6bc73517b1b43139d9da8e02716bc68dec04fcea70819edf4e89a19db->leave($__internal_5013d6c6bc73517b1b43139d9da8e02716bc68dec04fcea70819edf4e89a19db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
