<?php

/* @SRVDVServer/enseignant/ProfileEnseignant.html.twig */
class __TwigTemplate_fc37e53b77a7c55c7166a97917dd4e0adf6f00e7782d7c6030d2885e637b1421 extends Twig_Template
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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", 23)->display($context);
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", 13)->display($context);
        // line 14
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@SRVDVServer/enseignant/ProfileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  59 => 12,  55 => 23,  48 => 18,  43 => 15,  41 => 12,  38 => 11,  34 => 9,  32 => 8,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SRVDVServer/enseignant/ProfileEnseignant.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle\\Resources\\views\\enseignant\\ProfileEnseignant.html.twig");
    }
}
