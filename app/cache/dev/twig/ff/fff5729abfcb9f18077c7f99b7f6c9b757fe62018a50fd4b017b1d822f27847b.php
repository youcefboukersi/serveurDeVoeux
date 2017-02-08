<?php

/* @SRVDVServer/ChangePassword/changePassword.html.twig */
class __TwigTemplate_83f26a377d28d38cad9ec349abab2a1b9ed95a51c5fe03d4851534914c813fee extends Twig_Template
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
        $__internal_f935db02b201745a6690ee4fba5dd733449bee6ddfe10b4777c0d4c17a6073bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f935db02b201745a6690ee4fba5dd733449bee6ddfe10b4777c0d4c17a6073bf->enter($__internal_f935db02b201745a6690ee4fba5dd733449bee6ddfe10b4777c0d4c17a6073bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/ChangePassword/changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f935db02b201745a6690ee4fba5dd733449bee6ddfe10b4777c0d4c17a6073bf->leave($__internal_f935db02b201745a6690ee4fba5dd733449bee6ddfe10b4777c0d4c17a6073bf_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a95b451b51e3bbff6ff95a379e58b966576b0d5e2d9f765b2a72a0abb756cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a95b451b51e3bbff6ff95a379e58b966576b0d5e2d9f765b2a72a0abb756cdf->enter($__internal_8a95b451b51e3bbff6ff95a379e58b966576b0d5e2d9f765b2a72a0abb756cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_8a95b451b51e3bbff6ff95a379e58b966576b0d5e2d9f765b2a72a0abb756cdf->leave($__internal_8a95b451b51e3bbff6ff95a379e58b966576b0d5e2d9f765b2a72a0abb756cdf_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/ChangePassword/changePassword.html.twig";
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
    {% include \"SRVDVServerBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@SRVDVServer/ChangePassword/changePassword.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
