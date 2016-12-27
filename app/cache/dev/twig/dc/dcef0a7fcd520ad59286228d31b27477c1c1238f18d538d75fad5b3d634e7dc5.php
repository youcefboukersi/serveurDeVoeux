<?php

/* SRVDVServerBundle:Connexion:vueFooter.html.twig */
class __TwigTemplate_ee87ca1276c469cff541d1e12dea9564a46b3f7a2c94c797765576b3a0f9bd32 extends Twig_Template
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
        $__internal_52543896c2a516ae32428b4073edb152967e44b175e364576b1bff9c33157dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52543896c2a516ae32428b4073edb152967e44b175e364576b1bff9c33157dbb->enter($__internal_52543896c2a516ae32428b4073edb152967e44b175e364576b1bff9c33157dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Connexion:vueFooter.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>
";
        
        $__internal_52543896c2a516ae32428b4073edb152967e44b175e364576b1bff9c33157dbb->leave($__internal_52543896c2a516ae32428b4073edb152967e44b175e364576b1bff9c33157dbb_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Connexion:vueFooter.html.twig";
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
</html>
", "SRVDVServerBundle:Connexion:vueFooter.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Connexion/vueFooter.html.twig");
    }
}
