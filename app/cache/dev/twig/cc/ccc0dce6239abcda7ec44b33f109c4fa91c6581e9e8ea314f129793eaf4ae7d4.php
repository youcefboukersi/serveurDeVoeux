<?php

/* SRVDVServerBundle:admin:MotDePass.html.twig */
class __TwigTemplate_f474abb8e996f5066ae5b2499ab71802e0da0625a0f448dc9b3e1e331d65c51c extends Twig_Template
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
        $__internal_1c1ac7dd129cb2843974ea19f9a2dc2b47c1760b86203759ae47efe9950d9a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1ac7dd129cb2843974ea19f9a2dc2b47c1760b86203759ae47efe9950d9a3a->enter($__internal_1c1ac7dd129cb2843974ea19f9a2dc2b47c1760b86203759ae47efe9950d9a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:MotDePass.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 46)));
        echo "


<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            ";
        // line 14
        if (array_key_exists("motDePasse", $context)) {
            // line 15
            echo "             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>

        
            ";
        } else {
            // line 19
            echo "            
        ";
            // line 20
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 23
            echo "
     ";
        }
        // line 25
        echo "
    </div>


    
</div>


";
        // line 33
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:MotDePass.html.twig", 33)->display($context);
        
        $__internal_1c1ac7dd129cb2843974ea19f9a2dc2b47c1760b86203759ae47efe9950d9a3a->leave($__internal_1c1ac7dd129cb2843974ea19f9a2dc2b47c1760b86203759ae47efe9950d9a3a_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb7fb7371283c16c7045ce453aaab8ccecd890a135255d7de7913e1a87582437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7fb7371283c16c7045ce453aaab8ccecd890a135255d7de7913e1a87582437->enter($__internal_cb7fb7371283c16c7045ce453aaab8ccecd890a135255d7de7913e1a87582437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:admin:MotDePass.html.twig", 21)->display($context);
        
        $__internal_cb7fb7371283c16c7045ce453aaab8ccecd890a135255d7de7913e1a87582437->leave($__internal_cb7fb7371283c16c7045ce453aaab8ccecd890a135255d7de7913e1a87582437_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:MotDePass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 20,  68 => 33,  58 => 25,  54 => 23,  52 => 20,  49 => 19,  43 => 15,  41 => 14,  26 => 2,  23 => 1,);
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


<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            {% if motDePasse is defined %}
             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>

        
            {% else %}
            
        {% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}

     {% endif %}

    </div>


    
</div>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:MotDePass.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/MotDePass.html.twig");
    }
}
