<?php

/* SRVDVServerBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5512f14b45bd758c54472d8859eff9d73db5bb8c1bd0a67350c2a1ece5a2a445 extends Twig_Template
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
        $__internal_97dbf255e81e9ad66f8ce785ffb60beda73f9ece94e1a245240976f5bb0dc7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dbf255e81e9ad66f8ce785ffb60beda73f9ece94e1a245240976f5bb0dc7a3->enter($__internal_97dbf255e81e9ad66f8ce785ffb60beda73f9ece94e1a245240976f5bb0dc7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:ChangePassword:changePassword.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_97dbf255e81e9ad66f8ce785ffb60beda73f9ece94e1a245240976f5bb0dc7a3->leave($__internal_97dbf255e81e9ad66f8ce785ffb60beda73f9ece94e1a245240976f5bb0dc7a3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba90af1af66f0836595553420fa7efa5c711b082412958dcbde7ee68caf1545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba90af1af66f0836595553420fa7efa5c711b082412958dcbde7ee68caf1545->enter($__internal_8ba90af1af66f0836595553420fa7efa5c711b082412958dcbde7ee68caf1545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8ba90af1af66f0836595553420fa7efa5c711b082412958dcbde7ee68caf1545->leave($__internal_8ba90af1af66f0836595553420fa7efa5c711b082412958dcbde7ee68caf1545_prof);

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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "SRVDVServerBundle:ChangePassword:changePassword.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
