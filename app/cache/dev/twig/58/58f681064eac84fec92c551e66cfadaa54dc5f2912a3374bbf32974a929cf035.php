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
        $__internal_545ec2e1216e1e346f690d2d5235d4ec81c888f8ad9441d9baa76e863ad27779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545ec2e1216e1e346f690d2d5235d4ec81c888f8ad9441d9baa76e863ad27779->enter($__internal_545ec2e1216e1e346f690d2d5235d4ec81c888f8ad9441d9baa76e863ad27779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Connexion/vueFooter.html.twig"));

        // line 1
        echo "<footer>
<p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>
";
        
        $__internal_545ec2e1216e1e346f690d2d5235d4ec81c888f8ad9441d9baa76e863ad27779->leave($__internal_545ec2e1216e1e346f690d2d5235d4ec81c888f8ad9441d9baa76e863ad27779_prof);

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
