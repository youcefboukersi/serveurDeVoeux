<?php

/* SRVDVServerBundle:responsable:MotDePasse.html.twig */
class __TwigTemplate_b7eb9eabaf83990710e637df0a9e4a98c642e33c157c47e539d73efdfeff0802 extends Twig_Template
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
        $__internal_6281df219b173e0d177f83597b83263e170557616b6ad0d3a0db244eda0ca64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6281df219b173e0d177f83597b83263e170557616b6ad0d3a0db244eda0ca64d->enter($__internal_6281df219b173e0d177f83597b83263e170557616b6ad0d3a0db244eda0ca64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:MotDePasse.html.twig"));

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
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:responsable:MotDePasse.html.twig", 14)->display($context);
        
        $__internal_6281df219b173e0d177f83597b83263e170557616b6ad0d3a0db244eda0ca64d->leave($__internal_6281df219b173e0d177f83597b83263e170557616b6ad0d3a0db244eda0ca64d_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d174ccd140d6ab7a8c48ff12ef1a9a3b11ab16fb46c534b439684dca8efb32c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d174ccd140d6ab7a8c48ff12ef1a9a3b11ab16fb46c534b439684dca8efb32c3->enter($__internal_d174ccd140d6ab7a8c48ff12ef1a9a3b11ab16fb46c534b439684dca8efb32c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "        ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "SRVDVServerBundle:responsable:MotDePasse.html.twig", 9)->display($context);
        // line 10
        echo "      ";
        
        $__internal_d174ccd140d6ab7a8c48ff12ef1a9a3b11ab16fb46c534b439684dca8efb32c3->leave($__internal_d174ccd140d6ab7a8c48ff12ef1a9a3b11ab16fb46c534b439684dca8efb32c3_prof);

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
{% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:responsable:MotDePasse.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/MotDePasse.html.twig");
    }
}
