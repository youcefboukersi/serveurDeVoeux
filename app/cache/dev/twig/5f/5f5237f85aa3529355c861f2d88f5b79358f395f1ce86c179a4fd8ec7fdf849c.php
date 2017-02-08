<?php

/* SRVDVServerBundle:admin:ProfileAdmin.html.twig */
class __TwigTemplate_c3f0632d3a9221dd9699989919b0957c03749ee186e82fb65e716ea7b2ae9b07 extends Twig_Template
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
        $__internal_3ecec02eafe2e3aeb5f59184bbd4cbf198f7d94004acde63b27a5883c8ca4813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecec02eafe2e3aeb5f59184bbd4cbf198f7d94004acde63b27a5883c8ca4813->enter($__internal_3ecec02eafe2e3aeb5f59184bbd4cbf198f7d94004acde63b27a5883c8ca4813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:ProfileAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 47)));
        echo "



  ";
        // line 6
        if (array_key_exists("profile", $context)) {
            // line 7
            echo "    <P style=\"color:green;\" >Votre profile a été  modifié avec success !</P>
    ";
        } else {
            // line 9
            echo "    ";
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", 13)->display($context);
        
        $__internal_3ecec02eafe2e3aeb5f59184bbd4cbf198f7d94004acde63b27a5883c8ca4813->leave($__internal_3ecec02eafe2e3aeb5f59184bbd4cbf198f7d94004acde63b27a5883c8ca4813_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_985df07baf030a7456f202998b4ae59535cc90775f6ffbf09fef8ea929800be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985df07baf030a7456f202998b4ae59535cc90775f6ffbf09fef8ea929800be4->enter($__internal_985df07baf030a7456f202998b4ae59535cc90775f6ffbf09fef8ea929800be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "      ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        
        $__internal_985df07baf030a7456f202998b4ae59535cc90775f6ffbf09fef8ea929800be4->leave($__internal_985df07baf030a7456f202998b4ae59535cc90775f6ffbf09fef8ea929800be4_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:ProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  53 => 9,  45 => 13,  42 => 12,  39 => 9,  35 => 7,  33 => 6,  26 => 2,  23 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 47 })) }}



  {% if profile is defined %}
    <P style=\"color:green;\" >Votre profile a été  modifié avec success !</P>
    {% else %}
    {% block fos_user_content %}
      {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
    {% endblock fos_user_content %}
  {% endif %}
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/ProfileAdmin.html.twig");
    }
}
