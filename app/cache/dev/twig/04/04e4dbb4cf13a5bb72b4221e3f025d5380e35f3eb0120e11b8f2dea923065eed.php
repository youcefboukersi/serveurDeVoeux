<?php

/* SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig */
class __TwigTemplate_50f032aeebc5ca9749b64d137c9e0158a2e494c7fe73898da8e0726df8cbe5ff extends Twig_Template
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
        $__internal_78ae183fb66f16bf190de58254015014b31d674b5a999dec9258370e2e87ad1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ae183fb66f16bf190de58254015014b31d674b5a999dec9258370e2e87ad1d->enter($__internal_78ae183fb66f16bf190de58254015014b31d674b5a999dec9258370e2e87ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 21)));
        echo "

  </br>

  <div class=\"container\" align=\"center\">

    ";
        // line 8
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "      <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
      ";
        } else {
            // line 11
            echo "
      ";
            // line 12
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 15
            echo "

    ";
        }
        // line 18
        echo "

  </div>


  ";
        // line 23
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", 23)->display($context);
        
        $__internal_78ae183fb66f16bf190de58254015014b31d674b5a999dec9258370e2e87ad1d->leave($__internal_78ae183fb66f16bf190de58254015014b31d674b5a999dec9258370e2e87ad1d_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c00183706394685a780998fe76f53340513c6f3158c231fd6d0dbd0efad2f771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00183706394685a780998fe76f53340513c6f3158c231fd6d0dbd0efad2f771->enter($__internal_c00183706394685a780998fe76f53340513c6f3158c231fd6d0dbd0efad2f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", 13)->display($context);
        // line 14
        echo "      ";
        
        $__internal_c00183706394685a780998fe76f53340513c6f3158c231fd6d0dbd0efad2f771->leave($__internal_c00183706394685a780998fe76f53340513c6f3158c231fd6d0dbd0efad2f771_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  65 => 12,  58 => 23,  51 => 18,  46 => 15,  44 => 12,  41 => 11,  37 => 9,  35 => 8,  26 => 2,  23 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 21 })) }}

  </br>

  <div class=\"container\" align=\"center\">

    {% if profile is defined %}
      <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
      {% else %}

      {% block fos_user_content %}
        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
      {% endblock fos_user_content %}


    {% endif %}


  </div>


  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ProfileEnseignant.html.twig");
    }
}
