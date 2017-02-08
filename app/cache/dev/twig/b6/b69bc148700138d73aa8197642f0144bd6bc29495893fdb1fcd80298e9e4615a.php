<?php

/* @SRVDVServer/admin/MotDePass.html.twig */
class __TwigTemplate_874b283c2a04404d64fd6df8362fa244f2d26dbd19273156805a2b86fe971fff extends Twig_Template
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
        $__internal_fc3be26af299fa34f59683f056df0fb7eddb4d86ba582b0d3b53a5d56a13df82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3be26af299fa34f59683f056df0fb7eddb4d86ba582b0d3b53a5d56a13df82->enter($__internal_fc3be26af299fa34f59683f056df0fb7eddb4d86ba582b0d3b53a5d56a13df82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/MotDePass.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 46)));
        echo "
  ";
        // line 3
        if (array_key_exists("motDePasse", $context)) {
            // line 4
            echo "    <P style=\"color:green;\" >Mot de passe modifié avec success !</P>
    ";
        } else {
            // line 6
            echo "
    ";
            // line 7
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 10
            echo "
  ";
        }
        // line 12
        echo "  ";
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/MotDePass.html.twig", 12)->display($context);
        
        $__internal_fc3be26af299fa34f59683f056df0fb7eddb4d86ba582b0d3b53a5d56a13df82->leave($__internal_fc3be26af299fa34f59683f056df0fb7eddb4d86ba582b0d3b53a5d56a13df82_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ccf52003b61b7bc8c4845d7ab78e6057425d34ae9215268624dfd966c49a198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccf52003b61b7bc8c4845d7ab78e6057425d34ae9215268624dfd966c49a198->enter($__internal_4ccf52003b61b7bc8c4845d7ab78e6057425d34ae9215268624dfd966c49a198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "      ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/admin/MotDePass.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        
        $__internal_4ccf52003b61b7bc8c4845d7ab78e6057425d34ae9215268624dfd966c49a198->leave($__internal_4ccf52003b61b7bc8c4845d7ab78e6057425d34ae9215268624dfd966c49a198_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/MotDePass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  59 => 8,  53 => 7,  45 => 12,  41 => 10,  39 => 7,  36 => 6,  32 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 46 })) }}
  {% if motDePasse is defined %}
    <P style=\"color:green;\" >Mot de passe modifié avec success !</P>
    {% else %}

    {% block fos_user_content %}
      {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
    {% endblock fos_user_content %}

  {% endif %}
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/MotDePass.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\MotDePass.html.twig");
    }
}
