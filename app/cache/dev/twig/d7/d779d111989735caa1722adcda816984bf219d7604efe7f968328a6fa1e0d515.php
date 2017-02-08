<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_a2c6ca06608eff796a1c9abac436c1c1a95dc33e741de5a86b7f1ced9787fb40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_8b56d092e29bed58eaa8bcbb3932402a4c20c5d4a157755a43929d1c768180bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b56d092e29bed58eaa8bcbb3932402a4c20c5d4a157755a43929d1c768180bc->enter($__internal_8b56d092e29bed58eaa8bcbb3932402a4c20c5d4a157755a43929d1c768180bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b56d092e29bed58eaa8bcbb3932402a4c20c5d4a157755a43929d1c768180bc->leave($__internal_8b56d092e29bed58eaa8bcbb3932402a4c20c5d4a157755a43929d1c768180bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d95b171ca24582f02b229608733699311734d304a77274a2e16ac853070c917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95b171ca24582f02b229608733699311734d304a77274a2e16ac853070c917c->enter($__internal_d95b171ca24582f02b229608733699311734d304a77274a2e16ac853070c917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d95b171ca24582f02b229608733699311734d304a77274a2e16ac853070c917c->leave($__internal_d95b171ca24582f02b229608733699311734d304a77274a2e16ac853070c917c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
