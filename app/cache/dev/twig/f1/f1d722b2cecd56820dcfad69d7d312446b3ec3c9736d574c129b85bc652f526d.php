<?php

/* SRVDVServerBundle:responsable:ProfileResponsable.html.twig */
class __TwigTemplate_aeb817a5c7a4fc6398aaf9fb029947fb5aa79bd78b5fc8c55287a7bb684e2ff9 extends Twig_Template
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
        $__internal_28d1424f5269d61bdfa9b936d75153a2859ace448d8aee73c50d765664ab9d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d1424f5269d61bdfa9b936d75153a2859ace448d8aee73c50d765664ab9d6a->enter($__internal_28d1424f5269d61bdfa9b936d75153a2859ace448d8aee73c50d765664ab9d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 34)));
        echo "


<div id=\"content\">
    </br>
        
    

            ";
        // line 10
        if (array_key_exists("profile", $context)) {
            // line 11
            echo "             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            ";
        } else {
            // line 13
            echo "            
                 
                        ";
            // line 15
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 18
            echo "                
            ";
        }
        // line 20
        echo "  
    
</div>

";
        // line 24
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", 24)->display($context);
        
        $__internal_28d1424f5269d61bdfa9b936d75153a2859ace448d8aee73c50d765664ab9d6a->leave($__internal_28d1424f5269d61bdfa9b936d75153a2859ace448d8aee73c50d765664ab9d6a_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_479a65b63f9d43fe3d9d4960a6b18188d9d7d4d918022262ec38187507e6bb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479a65b63f9d43fe3d9d4960a6b18188d9d7d4d918022262ec38187507e6bb14->enter($__internal_479a65b63f9d43fe3d9d4960a6b18188d9d7d4d918022262ec38187507e6bb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                        ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", 16)->display($context);
        // line 17
        echo "                        ";
        
        $__internal_479a65b63f9d43fe3d9d4960a6b18188d9d7d4d918022262ec38187507e6bb14->leave($__internal_479a65b63f9d43fe3d9d4960a6b18188d9d7d4d918022262ec38187507e6bb14_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:ProfileResponsable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  72 => 16,  66 => 15,  59 => 24,  53 => 20,  49 => 18,  47 => 15,  43 => 13,  39 => 11,  37 => 10,  26 => 2,  23 => 1,);
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 34 })) }}


<div id=\"content\">
    </br>
        
    

            {% if profile is defined %}
             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            {% else %}
            
                 
                        {% block fos_user_content %}
                        {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
                        {% endblock fos_user_content %}
                
            {% endif %}
  
    
</div>

{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:ProfileResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/ProfileResponsable.html.twig");
    }
}
