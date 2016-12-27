<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c45d9bea076debcbc2bd55572c711fcbfd714ff5f0670e2c4383b159b2b4cd06 extends Twig_Template
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
        $__internal_43c24f4e3808730ffaac9eed26fd1aebff1159f6794da74dfba7be4bf3c19b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c24f4e3808730ffaac9eed26fd1aebff1159f6794da74dfba7be4bf3c19b19->enter($__internal_43c24f4e3808730ffaac9eed26fd1aebff1159f6794da74dfba7be4bf3c19b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_43c24f4e3808730ffaac9eed26fd1aebff1159f6794da74dfba7be4bf3c19b19->leave($__internal_43c24f4e3808730ffaac9eed26fd1aebff1159f6794da74dfba7be4bf3c19b19_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30e6e54596bba6aed9dcfde5e11fcbc1bb8adf6e6f7dc837a8c90776c207ad3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e6e54596bba6aed9dcfde5e11fcbc1bb8adf6e6f7dc837a8c90776c207ad3f->enter($__internal_30e6e54596bba6aed9dcfde5e11fcbc1bb8adf6e6f7dc837a8c90776c207ad3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_30e6e54596bba6aed9dcfde5e11fcbc1bb8adf6e6f7dc837a8c90776c207ad3f->leave($__internal_30e6e54596bba6aed9dcfde5e11fcbc1bb8adf6e6f7dc837a8c90776c207ad3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Profile/edit.html.twig");
    }
}
