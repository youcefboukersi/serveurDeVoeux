<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_a172d07209fed0db5b4ee59d512deac50e3eda0735e73a435fa12be43e79c8be extends Twig_Template
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
        $__internal_1fb3a8c715f9d140c30cf5021d27d162b2ee305bf6bc36ba66aaf6b0e3a03593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb3a8c715f9d140c30cf5021d27d162b2ee305bf6bc36ba66aaf6b0e3a03593->enter($__internal_1fb3a8c715f9d140c30cf5021d27d162b2ee305bf6bc36ba66aaf6b0e3a03593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1fb3a8c715f9d140c30cf5021d27d162b2ee305bf6bc36ba66aaf6b0e3a03593->leave($__internal_1fb3a8c715f9d140c30cf5021d27d162b2ee305bf6bc36ba66aaf6b0e3a03593_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44b76541b88272e6c666f5a5130ba10a6191daf69c2dbee6c803260c4010ce62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b76541b88272e6c666f5a5130ba10a6191daf69c2dbee6c803260c4010ce62->enter($__internal_44b76541b88272e6c666f5a5130ba10a6191daf69c2dbee6c803260c4010ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_44b76541b88272e6c666f5a5130ba10a6191daf69c2dbee6c803260c4010ce62->leave($__internal_44b76541b88272e6c666f5a5130ba10a6191daf69c2dbee6c803260c4010ce62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
