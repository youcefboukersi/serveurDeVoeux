<?php

/* @SRVDVServer/admin/footerAdmin.html.twig */
class __TwigTemplate_6b109831182faec46255438e7fdcf8612991c5f6788853b7ba2cee4ce93fb433 extends Twig_Template
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
        $__internal_421a968c230f85720a87fa1e1b1280f1adeefa0dd0fc01eebddc0bbae88aaf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421a968c230f85720a87fa1e1b1280f1adeefa0dd0fc01eebddc0bbae88aaf48->enter($__internal_421a968c230f85720a87fa1e1b1280f1adeefa0dd0fc01eebddc0bbae88aaf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/footerAdmin.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>";
        
        $__internal_421a968c230f85720a87fa1e1b1280f1adeefa0dd0fc01eebddc0bbae88aaf48->leave($__internal_421a968c230f85720a87fa1e1b1280f1adeefa0dd0fc01eebddc0bbae88aaf48_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/footerAdmin.html.twig";
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
</html>", "@SRVDVServer/admin/footerAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\footerAdmin.html.twig");
    }
}
