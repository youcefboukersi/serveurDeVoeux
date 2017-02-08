<?php

/* @SRVDVServer/admin/ProfileAdmin.html.twig */
class __TwigTemplate_e395dd24f958e934265a8266f15567e188a2c39f9e0b3b0154d58a71d149eb8c extends Twig_Template
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
        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 47)));
        echo "



  ";
        // line 6
        if (array_key_exists("profile", $context)) {
            // line 7
            echo "    <P style=\"color:green;\" >Votre Profile a été  modifier avec success !</P>
    ";
        } else {
            // line 9
            echo "
    ";
            // line 10
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 13
            echo "
  ";
        }
        // line 15
        echo "


  ";
        // line 18
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 18)->display($context);
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "      ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/admin/ProfileAdmin.html.twig", 11)->display($context);
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/ProfileAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  57 => 11,  54 => 10,  50 => 18,  45 => 15,  41 => 13,  39 => 10,  36 => 9,  32 => 7,  30 => 6,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/admin/ProfileAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\ProfileAdmin.html.twig");
    }
}
