<?php

/* @SRVDVServer/Connexion/vueHeader.html.twig */
class __TwigTemplate_d96bd3fb628ba9effae8b39e85cde56bb3058d80cf1310df387fd8d11fca3977 extends Twig_Template
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
        $__internal_bb8270bef290f5fc4765c0c9abc64875d47af71029a52383c85517fe4d48ef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8270bef290f5fc4765c0c9abc64875d47af71029a52383c85517fe4d48ef82->enter($__internal_bb8270bef290f5fc4765c0c9abc64875d47af71029a52383c85517fe4d48ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Connexion/vueHeader.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/connexion.js\"></script>
</head>";
        
        $__internal_bb8270bef290f5fc4765c0c9abc64875d47af71029a52383c85517fe4d48ef82->leave($__internal_bb8270bef290f5fc4765c0c9abc64875d47af71029a52383c85517fe4d48ef82_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Connexion/vueHeader.html.twig";
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
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<title>SVEDI</title>
\t<link rel=stylesheet type=\"text/css\" href=\"../../assets/css/home.css\"/>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/jquery-2.1.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"../../assets/javascript/connexion.js\"></script>
</head>", "@SRVDVServer/Connexion/vueHeader.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Connexion\\vueHeader.html.twig");
    }
}
