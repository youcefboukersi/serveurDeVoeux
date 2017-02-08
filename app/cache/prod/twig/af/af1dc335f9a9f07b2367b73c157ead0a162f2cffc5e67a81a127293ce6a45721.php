<?php

/* SRVDVServerBundle:admin:footerAdmin.html.twig */
class __TwigTemplate_bf7679d0cc4a0ba1d3077f26e9c2acd1fddf8598f6b755492974e45d2903db34 extends Twig_Template
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
        $__internal_d153929ebebcc310704af681807ae94355d65ad152b295f9ecefad7d66759fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d153929ebebcc310704af681807ae94355d65ad152b295f9ecefad7d66759fa9->enter($__internal_d153929ebebcc310704af681807ae94355d65ad152b295f9ecefad7d66759fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:footerAdmin.html.twig"));

        // line 1
        echo "<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>";
        
        $__internal_d153929ebebcc310704af681807ae94355d65ad152b295f9ecefad7d66759fa9->leave($__internal_d153929ebebcc310704af681807ae94355d65ad152b295f9ecefad7d66759fa9_prof);

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
</html>", "SRVDVServerBundle:admin:footerAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/footerAdmin.html.twig");
    }
}
