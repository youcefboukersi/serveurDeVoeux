<?php

/* SRVDVServerBundle:admin:footerAdmin.html.twig */
class __TwigTemplate_6e1177df93bfaa0334b3856e52b1ad274bd2c69fe42c8e47e15a16b87f06e801 extends Twig_Template
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
        $__internal_73819dbd90e2eb100ffec0f260d35345d5cb28042b19e138f7d9fa98be116444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73819dbd90e2eb100ffec0f260d35345d5cb28042b19e138f7d9fa98be116444->enter($__internal_73819dbd90e2eb100ffec0f260d35345d5cb28042b19e138f7d9fa98be116444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:footerAdmin.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>";
        
        $__internal_73819dbd90e2eb100ffec0f260d35345d5cb28042b19e138f7d9fa98be116444->leave($__internal_73819dbd90e2eb100ffec0f260d35345d5cb28042b19e138f7d9fa98be116444_prof);

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
        return new Twig_Source("<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>", "SRVDVServerBundle:admin:footerAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/admin/footerAdmin.html.twig");
    }
}
