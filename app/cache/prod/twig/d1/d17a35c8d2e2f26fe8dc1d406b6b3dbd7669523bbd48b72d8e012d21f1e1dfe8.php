<?php

/* SRVDVServerBundle:responsable:MotDePasse.html.twig */
class __TwigTemplate_4eb6b4e33835097d8ef8452dcfb8b3710dea65668e66456feacfb38c4227c83f extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 33)));
        echo "



  <div >
    </br>



    ";
        // line 11
        if (array_key_exists("motDePasse", $context)) {
            // line 12
            echo "      <P style=\"color:green;\" >Mot de passe modifier avec success !</P>


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
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:responsable:MotDePasse.html.twig", 18)->display($context);
        // line 19
        echo "      ";
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
        return array (  72 => 19,  69 => 18,  66 => 17,  62 => 30,  52 => 22,  48 => 20,  46 => 17,  43 => 16,  37 => 12,  35 => 11,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SRVDVServerBundle:responsable:MotDePasse.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MotDePasse.html.twig");
    }
}
