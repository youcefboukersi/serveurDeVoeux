<?php

/* SRVDVServerBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e5da0f0553fed635f2774271a2ef3982b389e99e651b1a8527dd0c0b6ca90bd7 extends Twig_Template
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
        $__internal_a4beaec5b1bfa439030a9595ecc3387fdc4db0d25ed3e97430dbc57a6e94cdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4beaec5b1bfa439030a9595ecc3387fdc4db0d25ed3e97430dbc57a6e94cdb0->enter($__internal_a4beaec5b1bfa439030a9595ecc3387fdc4db0d25ed3e97430dbc57a6e94cdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:ChangePassword:changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a4beaec5b1bfa439030a9595ecc3387fdc4db0d25ed3e97430dbc57a6e94cdb0->leave($__internal_a4beaec5b1bfa439030a9595ecc3387fdc4db0d25ed3e97430dbc57a6e94cdb0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14b4cbefa0fe0d8931bbf017a14a51d39696b40c03fc27ce3e0ae5032d315218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b4cbefa0fe0d8931bbf017a14a51d39696b40c03fc27ce3e0ae5032d315218->enter($__internal_14b4cbefa0fe0d8931bbf017a14a51d39696b40c03fc27ce3e0ae5032d315218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("SRVDVServerBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_14b4cbefa0fe0d8931bbf017a14a51d39696b40c03fc27ce3e0ae5032d315218->leave($__internal_14b4cbefa0fe0d8931bbf017a14a51d39696b40c03fc27ce3e0ae5032d315218_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:ChangePassword:changePassword.html.twig";
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
", "SRVDVServerBundle:ChangePassword:changePassword.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
