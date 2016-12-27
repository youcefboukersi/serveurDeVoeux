<?php

/* SRVDVServerBundle:responsable:footerResponsable.html.twig */
class __TwigTemplate_ba0ab90c095616c060c5aa67bb8f8ec914aad4fd164e41472a6ba44a8c25719f extends Twig_Template
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
        $__internal_03b13e78aad4be046a4fceb9fbc26765b749ea6516b07f520059478ced0e38fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b13e78aad4be046a4fceb9fbc26765b749ea6516b07f520059478ced0e38fd->enter($__internal_03b13e78aad4be046a4fceb9fbc26765b749ea6516b07f520059478ced0e38fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:responsable:footerResponsable.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>";
        
        $__internal_03b13e78aad4be046a4fceb9fbc26765b749ea6516b07f520059478ced0e38fd->leave($__internal_03b13e78aad4be046a4fceb9fbc26765b749ea6516b07f520059478ced0e38fd_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:responsable:footerResponsable.html.twig";
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
        return new Twig_Source("<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>", "SRVDVServerBundle:responsable:footerResponsable.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/responsable/footerResponsable.html.twig");
    }
}
