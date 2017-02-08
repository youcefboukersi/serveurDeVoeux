<?php

/* @SRVDVServer/enseignant/MotDePasse.html.twig */
class __TwigTemplate_8c7a75328c0080465c14b88acd648c0e56bd03089d39a04a4b0731483496baaf extends Twig_Template
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
        $__internal_4c2e9f834341ca8fee90eeba8fb5db19c2d5342978f9002a1afb5aa4d5149a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2e9f834341ca8fee90eeba8fb5db19c2d5342978f9002a1afb5aa4d5149a56->enter($__internal_4c2e9f834341ca8fee90eeba8fb5db19c2d5342978f9002a1afb5aa4d5149a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/enseignant/MotDePasse.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 22)));
        echo "


  <div class=\"container\" align=\"center\">
    </br>

    ";
        // line 8
        if (array_key_exists("motDePasse", $context)) {
            // line 9
            echo "      <P style=\"color:green;\" >Mot de passe modifier avec success !</P>


    ";
        } else {
            // line 13
            echo "
      ";
            // line 14
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 17
            echo "
    ";
        }
        // line 19
        echo "  </div>
  ";
        // line 20
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/enseignant/MotDePasse.html.twig", 20)->display($context);
        
        $__internal_4c2e9f834341ca8fee90eeba8fb5db19c2d5342978f9002a1afb5aa4d5149a56->leave($__internal_4c2e9f834341ca8fee90eeba8fb5db19c2d5342978f9002a1afb5aa4d5149a56_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_168ea989c36f881b2378fc3aa5cc1bcb3a7d1128af6b5c0d2826855a6bfa2cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168ea989c36f881b2378fc3aa5cc1bcb3a7d1128af6b5c0d2826855a6bfa2cc0->enter($__internal_168ea989c36f881b2378fc3aa5cc1bcb3a7d1128af6b5c0d2826855a6bfa2cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/enseignant/MotDePasse.html.twig", 15)->display($context);
        // line 16
        echo "      ";
        
        $__internal_168ea989c36f881b2378fc3aa5cc1bcb3a7d1128af6b5c0d2826855a6bfa2cc0->leave($__internal_168ea989c36f881b2378fc3aa5cc1bcb3a7d1128af6b5c0d2826855a6bfa2cc0_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/MotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  62 => 14,  55 => 20,  52 => 19,  48 => 17,  46 => 14,  43 => 13,  37 => 9,  35 => 8,  26 => 2,  23 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 22 })) }}


  <div class=\"container\" align=\"center\">
    </br>

    {% if motDePasse is defined %}
      <P style=\"color:green;\" >Mot de passe modifier avec success !</P>


    {% else %}

      {% block fos_user_content %}
        {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
      {% endblock fos_user_content %}

    {% endif %}
  </div>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/enseignant/MotDePasse.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\MotDePasse.html.twig");
    }
}
