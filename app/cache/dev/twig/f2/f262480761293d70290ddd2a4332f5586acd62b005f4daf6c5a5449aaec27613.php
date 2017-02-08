<?php

/* @SRVDVServer/admin/ProfileAdmin.html.twig */
class __TwigTemplate_1deea1c30d2092cdde108401dcf880cad8f977fe9a6d2cf55201beddea093fa2 extends Twig_Template
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
        $__internal_ee851bf0d90e9359fb3640ba2cacc298ba6b7498008f1977995a85bf3d094bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee851bf0d90e9359fb3640ba2cacc298ba6b7498008f1977995a85bf3d094bee->enter($__internal_ee851bf0d90e9359fb3640ba2cacc298ba6b7498008f1977995a85bf3d094bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/ProfileAdmin.html.twig"));

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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 13)->display($context);
        
        $__internal_ee851bf0d90e9359fb3640ba2cacc298ba6b7498008f1977995a85bf3d094bee->leave($__internal_ee851bf0d90e9359fb3640ba2cacc298ba6b7498008f1977995a85bf3d094bee_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9855ab4201aef6428e0702c6975c862469dd2d2fc23b60325adda8a3cc66c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9855ab4201aef6428e0702c6975c862469dd2d2fc23b60325adda8a3cc66c34->enter($__internal_e9855ab4201aef6428e0702c6975c862469dd2d2fc23b60325adda8a3cc66c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "      ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        
        $__internal_e9855ab4201aef6428e0702c6975c862469dd2d2fc23b60325adda8a3cc66c34->leave($__internal_e9855ab4201aef6428e0702c6975c862469dd2d2fc23b60325adda8a3cc66c34_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/ProfileAdmin.html.twig";
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
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/admin/ProfileAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\ProfileAdmin.html.twig");
    }
}
