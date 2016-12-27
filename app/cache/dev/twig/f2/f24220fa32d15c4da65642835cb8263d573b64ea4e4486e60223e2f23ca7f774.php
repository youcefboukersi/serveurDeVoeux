<?php

/* @SRVDVServer/Connexion/vueConnexionInactive.php */
class __TwigTemplate_cef4bdbfb01deeb18f85807d9fb5409c2457fe303369a86e5705ea95448f84e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974dbb14ed2eadeb2897f7288ae2eead88817a0332941ced8465b7edfdbfd4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974dbb14ed2eadeb2897f7288ae2eead88817a0332941ced8465b7edfdbfd4af->enter($__internal_974dbb14ed2eadeb2897f7288ae2eead88817a0332941ced8465b7edfdbfd4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Connexion/vueConnexionInactive.php"));

        // line 1
        echo "<body><div id=\"svedi\">
<img src=\"../../assets/images/svediMoyen.png\"/>
</div>
<div id=\"connexion\">
\t<img src=\"../../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p><br/><br/>Votre session n'est plus active.<br/><br/>Veuillez retourner &agrave; la page d'accueil pour vous reconnectez.<br/><br/><a href= \"../ControleurConnexion/\">Retour</a></p>
\t\t\t</div>
\t\t</div>
\t<img src=\"../../assets/images/connexionBtm.png\"/>
</div>";
        
        $__internal_974dbb14ed2eadeb2897f7288ae2eead88817a0332941ced8465b7edfdbfd4af->leave($__internal_974dbb14ed2eadeb2897f7288ae2eead88817a0332941ced8465b7edfdbfd4af_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Connexion/vueConnexionInactive.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body><div id=\"svedi\">
<img src=\"../../assets/images/svediMoyen.png\"/>
</div>
<div id=\"connexion\">
\t<img src=\"../../assets/images/connexionTop.png\"/>
\t\t<div>
\t\t\t<div id=\"connect\">
\t\t\t<p><br/><br/>Votre session n'est plus active.<br/><br/>Veuillez retourner &agrave; la page d'accueil pour vous reconnectez.<br/><br/><a href= \"../ControleurConnexion/\">Retour</a></p>
\t\t\t</div>
\t\t</div>
\t<img src=\"../../assets/images/connexionBtm.png\"/>
</div>", "@SRVDVServer/Connexion/vueConnexionInactive.php", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Connexion\\vueConnexionInactive.php");
    }
}
