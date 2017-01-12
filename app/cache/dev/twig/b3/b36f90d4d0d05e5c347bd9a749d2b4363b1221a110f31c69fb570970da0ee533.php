<?php

/* SRVDVServerBundle:admin:ProfileAdmin.html.twig */
class __TwigTemplate_d6efcd65eaddf74438f38ddd5e712e20d5fcb3e00179c420e2569db3539a991e extends Twig_Template
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
        $__internal_79587c960c0b88c4ad55f25c5a28bf8247ab7319636899eef708d00c4e638444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79587c960c0b88c4ad55f25c5a28bf8247ab7319636899eef708d00c4e638444->enter($__internal_79587c960c0b88c4ad55f25c5a28bf8247ab7319636899eef708d00c4e638444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:ProfileAdmin.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 47)));
        echo "


<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            ";
        // line 14
        if (array_key_exists("profile", $context)) {
            // line 15
            echo "             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            ";
        } else {
            // line 17
            echo "            
            ";
            // line 18
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 21
            echo "
            ";
        }
        // line 23
        echo "    </div>
    
</div>


";
        // line 28
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", 28)->display($context);
        
        $__internal_79587c960c0b88c4ad55f25c5a28bf8247ab7319636899eef708d00c4e638444->leave($__internal_79587c960c0b88c4ad55f25c5a28bf8247ab7319636899eef708d00c4e638444_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93413651df4e82f3d4c6eeabc2338aadb0c560ee77db1cce51dbce0690e4e31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93413651df4e82f3d4c6eeabc2338aadb0c560ee77db1cce51dbce0690e4e31b->enter($__internal_93413651df4e82f3d4c6eeabc2338aadb0c560ee77db1cce51dbce0690e4e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        
        $__internal_93413651df4e82f3d4c6eeabc2338aadb0c560ee77db1cce51dbce0690e4e31b->leave($__internal_93413651df4e82f3d4c6eeabc2338aadb0c560ee77db1cce51dbce0690e4e31b_prof);

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
        return array (  79 => 20,  76 => 19,  70 => 18,  63 => 28,  56 => 23,  52 => 21,  50 => 18,  47 => 17,  43 => 15,  41 => 14,  26 => 2,  23 => 1,);
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


<div id=\"content\">
    </br>
        
    <div class=\"col-xs-4 col-md- col-lg-4\">
     
        
    </div>
          <div class=\"col-xs-3 col-md-3 col-lg-3\">

            {% if profile is defined %}
             <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
            {% else %}
            
            {% block fos_user_content %}
            {% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
            {% endblock fos_user_content %}

            {% endif %}
    </div>
    
</div>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:ProfileAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/ProfileAdmin.html.twig");
    }
}
