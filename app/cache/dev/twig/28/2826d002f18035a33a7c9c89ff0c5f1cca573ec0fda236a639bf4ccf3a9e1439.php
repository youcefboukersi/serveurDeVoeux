<?php

/* @SRVDVServer/responsable/MotDePasse.html.twig */
class __TwigTemplate_7117f18e1f684d3ae1605cd5678026654cb008de450ccf826bef950a2a501c8d extends Twig_Template
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
        $__internal_477a29e625a63e4e2c8cce1e19bd1e17e4b49ae6b66d4ff0a89e2186b5a8923e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477a29e625a63e4e2c8cce1e19bd1e17e4b49ae6b66d4ff0a89e2186b5a8923e->enter($__internal_477a29e625a63e4e2c8cce1e19bd1e17e4b49ae6b66d4ff0a89e2186b5a8923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/responsable/MotDePasse.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 33)));
        echo "
  <div >
    </br>
    ";
        // line 5
        if (array_key_exists("motDePasse", $context)) {
            // line 6
            echo "      <P style=\"color:green;\" >Mot de passe modifié avec success !</P>
    ";
        } else {
            // line 8
            echo "      ";
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 11
            echo "    ";
        }
        // line 12
        echo "  </div>
</div>
";
        // line 14
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/responsable/MotDePasse.html.twig", 14)->display($context);
        
        $__internal_477a29e625a63e4e2c8cce1e19bd1e17e4b49ae6b66d4ff0a89e2186b5a8923e->leave($__internal_477a29e625a63e4e2c8cce1e19bd1e17e4b49ae6b66d4ff0a89e2186b5a8923e_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_865e55175de184f1cbf71310455fcd3962c14725d7cb7b8d71728cb4af803d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865e55175de184f1cbf71310455fcd3962c14725d7cb7b8d71728cb4af803d5b->enter($__internal_865e55175de184f1cbf71310455fcd3962c14725d7cb7b8d71728cb4af803d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@SRVDVServer/responsable/MotDePasse.html.twig", 9)->display($context);
        // line 10
        echo "      ";
        
        $__internal_865e55175de184f1cbf71310455fcd3962c14725d7cb7b8d71728cb4af803d5b->leave($__internal_865e55175de184f1cbf71310455fcd3962c14725d7cb7b8d71728cb4af803d5b_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/responsable/MotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  61 => 9,  55 => 8,  48 => 14,  44 => 12,  41 => 11,  38 => 8,  34 => 6,  32 => 5,  26 => 2,  23 => 1,);
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
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 33 })) }}
  <div >
    </br>
    {% if motDePasse is defined %}
      <P style=\"color:green;\" >Mot de passe modifié avec success !</P>
    {% else %}
      {% block fos_user_content %}
        {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
      {% endblock fos_user_content %}
    {% endif %}
  </div>
</div>
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "@SRVDVServer/responsable/MotDePasse.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\responsable\\MotDePasse.html.twig");
    }
}
