<?php

/* SRVDVServerBundle:responsable:MotDePasse.html.twig */
class __TwigTemplate_420cef10f0420bc541734d499ea2991d658254790c9f8c43b52a72df7c774f3b extends Twig_Template
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
        $__internal_e827abb03858c632bd5662208c7cf56eede16ba55caa1131e8773b8ca48e34b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e827abb03858c632bd5662208c7cf56eede16ba55caa1131e8773b8ca48e34b3->enter($__internal_e827abb03858c632bd5662208c7cf56eede16ba55caa1131e8773b8ca48e34b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MotDePasse.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 33)));
        echo "



<div >
    </br>
        


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
        echo "
    </div>


    
</div>


";
        // line 30
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MotDePasse.html.twig", 30)->display($context);
        
        $__internal_e827abb03858c632bd5662208c7cf56eede16ba55caa1131e8773b8ca48e34b3->leave($__internal_e827abb03858c632bd5662208c7cf56eede16ba55caa1131e8773b8ca48e34b3_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bba7f7b2ada2bca4d2c4d392394027e4d536b770effeadf4771e3948357f1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bba7f7b2ada2bca4d2c4d392394027e4d536b770effeadf4771e3948357f1ed->enter($__internal_6bba7f7b2ada2bca4d2c4d392394027e4d536b770effeadf4771e3948357f1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                 ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:responsable:MotDePasse.html.twig", 18)->display($context);
        // line 19
        echo "                 ";
        
        $__internal_6bba7f7b2ada2bca4d2c4d392394027e4d536b770effeadf4771e3948357f1ed->leave($__internal_6bba7f7b2ada2bca4d2c4d392394027e4d536b770effeadf4771e3948357f1ed_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:MotDePasse.html.twig";
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
{{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 33 })) }}



<div >
    </br>
        


            {% if motDePasse is defined %}
             <P style=\"color:green;\" >Mot de passe modifier avec success !</P>

        
            {% else %}
                
                {% block fos_user_content %}
                 {% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
                 {% endblock fos_user_content %}

              {% endif %}

    </div>


    
</div>


{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:MotDePasse.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MotDePasse.html.twig");
    }
}
