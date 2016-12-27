<?php

/* @SRVDVServer/Connexion/vueFooter.html.twig */
class __TwigTemplate_fc43e6be99c8328a36d67f58132d183bd82d310248dedd1f6d5748dd32fd1914 extends Twig_Template
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
        $__internal_3a97b01eb25b70bd15b41c8584e9dd777d9418b22a69a57d5605e20b070109e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a97b01eb25b70bd15b41c8584e9dd777d9418b22a69a57d5605e20b070109e4->enter($__internal_3a97b01eb25b70bd15b41c8584e9dd777d9418b22a69a57d5605e20b070109e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Connexion/vueFooter.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>
";
        
        $__internal_3a97b01eb25b70bd15b41c8584e9dd777d9418b22a69a57d5605e20b070109e4->leave($__internal_3a97b01eb25b70bd15b41c8584e9dd777d9418b22a69a57d5605e20b070109e4_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Connexion/vueFooter.html.twig";
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
", "@SRVDVServer/Connexion/vueFooter.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Connexion\\vueFooter.html.twig");
    }
}
