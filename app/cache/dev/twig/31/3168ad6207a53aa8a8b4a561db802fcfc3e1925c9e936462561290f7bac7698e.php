<?php

/* SRVDVServerBundle:enseignant:MotDePasse.html.twig */
class __TwigTemplate_c045362e3c494c6f735330489c7d5fbad4ff67976db1318bdb2315604e8ac085 extends Twig_Template
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
        $__internal_7a66e52f11ba1a1f72c22f77704e155b8d994131900cab57d2ff1a9729fba47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a66e52f11ba1a1f72c22f77704e155b8d994131900cab57d2ff1a9729fba47e->enter($__internal_7a66e52f11ba1a1f72c22f77704e155b8d994131900cab57d2ff1a9729fba47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:MotDePasse.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 22)));
        echo "


<div align=\"centre\">
    </br>
        
   
              <fieldset class=\"well the-fieldset\">
            <legend > Modifier Password:</legend>
            ";
        // line 11
        if (array_key_exists("motDePasse", $context)) {
            // line 12
            echo "             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>

        
            ";
        } else {
            // line 16
            echo "            
                ";
            // line 17
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 20
            echo "
              ";
        }
        // line 22
        echo "          </fieldset>



    
</div>


";
        // line 30
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:MotDePasse.html.twig", 30)->display($context);
        
        $__internal_7a66e52f11ba1a1f72c22f77704e155b8d994131900cab57d2ff1a9729fba47e->leave($__internal_7a66e52f11ba1a1f72c22f77704e155b8d994131900cab57d2ff1a9729fba47e_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e11b2c8896364431f7dfbd45f50bab1775a7b7ff43008703ef4d51df60015f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11b2c8896364431f7dfbd45f50bab1775a7b7ff43008703ef4d51df60015f68->enter($__internal_e11b2c8896364431f7dfbd45f50bab1775a7b7ff43008703ef4d51df60015f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                 ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:enseignant:MotDePasse.html.twig", 18)->display($context);
        // line 19
        echo "                 ";
        
        $__internal_e11b2c8896364431f7dfbd45f50bab1775a7b7ff43008703ef4d51df60015f68->leave($__internal_e11b2c8896364431f7dfbd45f50bab1775a7b7ff43008703ef4d51df60015f68_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:enseignant:MotDePasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  78 => 18,  72 => 17,  65 => 30,  55 => 22,  51 => 20,  49 => 17,  46 => 16,  40 => 12,  38 => 11,  26 => 2,  23 => 1,);
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


<div align=\"centre\">
    </br>
        
   
              <fieldset class=\"well the-fieldset\">
            <legend > Modifier Password:</legend>
            {% if motDePasse is defined %}
             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>

        
            {% else %}
            
                {% block fos_user_content %}
                 {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
                 {% endblock fos_user_content %}

              {% endif %}
          </fieldset>



    
</div>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:enseignant:MotDePasse.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/MotDePasse.html.twig");
    }
}
