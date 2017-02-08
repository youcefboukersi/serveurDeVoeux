<?php

/* SRVDVServerBundle:admin:footerAdmin.html.twig */
class __TwigTemplate_4eef4b3d9bd0860abc5b35e1b6a938965237b8f02d4cd895f3d33b4654cf1eef extends Twig_Template
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
        $__internal_f6e1298f0b4eb4be8c65d7b479b2cb19e4059aa692c1e42dc0608775a3268091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e1298f0b4eb4be8c65d7b479b2cb19e4059aa692c1e42dc0608775a3268091->enter($__internal_f6e1298f0b4eb4be8c65d7b479b2cb19e4059aa692c1e42dc0608775a3268091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:footerAdmin.html.twig"));

        // line 1
        echo "</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>";
        
        $__internal_f6e1298f0b4eb4be8c65d7b479b2cb19e4059aa692c1e42dc0608775a3268091->leave($__internal_f6e1298f0b4eb4be8c65d7b479b2cb19e4059aa692c1e42dc0608775a3268091_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:footerAdmin.html.twig";
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
        return new Twig_Source("</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>", "SRVDVServerBundle:admin:footerAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/footerAdmin.html.twig");
    }
}
