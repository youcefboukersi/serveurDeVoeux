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
        $__internal_bb1753baa743b3a77ac3c9c315f037bb8931fdfd74bed33589eac359a3211410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1753baa743b3a77ac3c9c315f037bb8931fdfd74bed33589eac359a3211410->enter($__internal_bb1753baa743b3a77ac3c9c315f037bb8931fdfd74bed33589eac359a3211410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1753baa743b3a77ac3c9c315f037bb8931fdfd74bed33589eac359a3211410->leave($__internal_bb1753baa743b3a77ac3c9c315f037bb8931fdfd74bed33589eac359a3211410_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b00b7a5497233e6e16b58c7745352b716a8f8df86b6e0c19003b3cc00d14fa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00b7a5497233e6e16b58c7745352b716a8f8df86b6e0c19003b3cc00d14fa2f->enter($__internal_b00b7a5497233e6e16b58c7745352b716a8f8df86b6e0c19003b3cc00d14fa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b00b7a5497233e6e16b58c7745352b716a8f8df86b6e0c19003b3cc00d14fa2f->leave($__internal_b00b7a5497233e6e16b58c7745352b716a8f8df86b6e0c19003b3cc00d14fa2f_prof);

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
