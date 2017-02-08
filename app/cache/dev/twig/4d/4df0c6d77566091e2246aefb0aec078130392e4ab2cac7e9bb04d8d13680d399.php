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
        $__internal_aba36619a272b8f8387b191a52a123849d3dd41edf64976eac8149c35a3986d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba36619a272b8f8387b191a52a123849d3dd41edf64976eac8149c35a3986d3->enter($__internal_aba36619a272b8f8387b191a52a123849d3dd41edf64976eac8149c35a3986d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/enseignant/MotDePasse.html.twig"));

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
        
        $__internal_aba36619a272b8f8387b191a52a123849d3dd41edf64976eac8149c35a3986d3->leave($__internal_aba36619a272b8f8387b191a52a123849d3dd41edf64976eac8149c35a3986d3_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f874f9263935f54e70c578db0f9d25ebb8b7ee7ac7a11597b8c183c2da58d26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f874f9263935f54e70c578db0f9d25ebb8b7ee7ac7a11597b8c183c2da58d26e->enter($__internal_f874f9263935f54e70c578db0f9d25ebb8b7ee7ac7a11597b8c183c2da58d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/enseignant/MotDePasse.html.twig", 15)->display($context);
        // line 16
        echo "      ";
        
        $__internal_f874f9263935f54e70c578db0f9d25ebb8b7ee7ac7a11597b8c183c2da58d26e->leave($__internal_f874f9263935f54e70c578db0f9d25ebb8b7ee7ac7a11597b8c183c2da58d26e_prof);

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
