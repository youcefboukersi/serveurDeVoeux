<?php

/* @SRVDVServer/footer.html.twig */
class __TwigTemplate_9dab0f593b4a2598e0bb8a1478975cc10cefb9e876d0ed30b62b871214201fe3 extends Twig_Template
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
        $__internal_a72e610a370bdbb81444e883f4547cf211586439b4c8a210d1ba0bca607ad8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72e610a370bdbb81444e883f4547cf211586439b4c8a210d1ba0bca607ad8c7->enter($__internal_a72e610a370bdbb81444e883f4547cf211586439b4c8a210d1ba0bca607ad8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/footer.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>


</body>
</html>";
        
        $__internal_a72e610a370bdbb81444e883f4547cf211586439b4c8a210d1ba0bca607ad8c7->leave($__internal_a72e610a370bdbb81444e883f4547cf211586439b4c8a210d1ba0bca607ad8c7_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/footer.html.twig";
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
</html>", "@SRVDVServer/footer.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\footer.html.twig");
    }
}
