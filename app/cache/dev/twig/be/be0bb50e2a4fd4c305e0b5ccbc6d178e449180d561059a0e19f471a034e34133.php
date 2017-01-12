<?php

/* SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig */
class __TwigTemplate_a75aa604a5dd5f971be21b8517e9405053db2e5f78a9b97ff73a48afe753a7d8 extends Twig_Template
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
        $__internal_9f86bebd67187766c34c727cdf3fbb5e92859bf215dbd0b311421147d28ef03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f86bebd67187766c34c727cdf3fbb5e92859bf215dbd0b311421147d28ef03d->enter($__internal_9f86bebd67187766c34c727cdf3fbb5e92859bf215dbd0b311421147d28ef03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 21)));
        echo "



<div align=\"center\">
    </br>
        
   
   <fieldset class=\"well the-fieldset\">
            <legend > Modifier Profile:</legend>
            ";
        // line 12
        if (array_key_exists("profile", $context)) {
            // line 13
            echo "             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            ";
        } else {
            // line 15
            echo "            
            ";
            // line 16
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 19
            echo "

            ";
        }
        // line 22
        echo "        </fieldset>
    </div>
    


";
        // line 27
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", 27)->display($context);
        
        $__internal_9f86bebd67187766c34c727cdf3fbb5e92859bf215dbd0b311421147d28ef03d->leave($__internal_9f86bebd67187766c34c727cdf3fbb5e92859bf215dbd0b311421147d28ef03d_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37dd954641a35bedb4ffd69684db930bd80c94e5956ab5dfbb54d56662258e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dd954641a35bedb4ffd69684db930bd80c94e5956ab5dfbb54d56662258e52->enter($__internal_37dd954641a35bedb4ffd69684db930bd80c94e5956ab5dfbb54d56662258e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        
        $__internal_37dd954641a35bedb4ffd69684db930bd80c94e5956ab5dfbb54d56662258e52->leave($__internal_37dd954641a35bedb4ffd69684db930bd80c94e5956ab5dfbb54d56662258e52_prof);

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
        return array (  78 => 18,  75 => 17,  69 => 16,  62 => 27,  55 => 22,  50 => 19,  48 => 16,  45 => 15,  41 => 13,  39 => 12,  26 => 2,  23 => 1,);
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



<div align=\"center\">
    </br>
        
   
   <fieldset class=\"well the-fieldset\">
            <legend > Modifier Profile:</legend>
            {% if profile is defined %}
             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            {% else %}
            
            {% block fos_user_content %}
            {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
            {% endblock fos_user_content %}


            {% endif %}
        </fieldset>
    </div>
    


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:enseignant:ProfileEnseignant.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/enseignant/ProfileEnseignant.html.twig");
    }
}
