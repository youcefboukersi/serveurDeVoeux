<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_48262541df42f3df916d5df828ee7dbeb3c190872f4d7b15a3706c703d16685e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b034cefc8d61d9e04eb4618e8f08f1ee1cee0b2694ade00751a56025cf9d783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b034cefc8d61d9e04eb4618e8f08f1ee1cee0b2694ade00751a56025cf9d783->enter($__internal_3b034cefc8d61d9e04eb4618e8f08f1ee1cee0b2694ade00751a56025cf9d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/runtime_favico.ico"), "html", null, true);
        echo "\">
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\" />
    <link rel=stylesheet type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/javascript/connexion.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
  
    <div align=\"center\">      
      <div id=\"svedi\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img titre=\"home\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/svediMoyen.png"), "html", null, true);
        echo "\"/></a>
      </div>
      <div id=\"connexion\">
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionTop.png"), "html", null, true);
        echo "\"/>
        <div class=\"sf-reset\">
          ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/connexionBtm.png"), "html", null, true);
        echo "\"/>
      </div>
    </div>
</body>
</html>
";
        
        $__internal_3b034cefc8d61d9e04eb4618e8f08f1ee1cee0b2694ade00751a56025cf9d783->leave($__internal_3b034cefc8d61d9e04eb4618e8f08f1ee1cee0b2694ade00751a56025cf9d783_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a067f01b374fb0ee9d2a1cf60429c440e5dddbece9b47cd8e50843dda101cde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a067f01b374fb0ee9d2a1cf60429c440e5dddbece9b47cd8e50843dda101cde6->enter($__internal_a067f01b374fb0ee9d2a1cf60429c440e5dddbece9b47cd8e50843dda101cde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a067f01b374fb0ee9d2a1cf60429c440e5dddbece9b47cd8e50843dda101cde6->leave($__internal_a067f01b374fb0ee9d2a1cf60429c440e5dddbece9b47cd8e50843dda101cde6_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_803e3c2da571abb27ad70059b3654520285f7373fdde521a9620835d9920c161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803e3c2da571abb27ad70059b3654520285f7373fdde521a9620835d9920c161->enter($__internal_803e3c2da571abb27ad70059b3654520285f7373fdde521a9620835d9920c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_803e3c2da571abb27ad70059b3654520285f7373fdde521a9620835d9920c161->leave($__internal_803e3c2da571abb27ad70059b3654520285f7373fdde521a9620835d9920c161_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  94 => 6,  81 => 24,  78 => 23,  76 => 22,  71 => 20,  63 => 17,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  29 => 4,  24 => 1,);
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
<html>
  <head>
    <meta charset=\"{{ _charset }}\" />
    <meta name=\"robots\" content=\"noindex,nofollow\" />
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/runtime_favico.ico')}}\">
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\" />
    <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
    <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/jquery-2.1.1.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/javascript/connexion.js')}}\"></script>
</head>
<body>
  
    <div align=\"center\">      
      <div id=\"svedi\">
        <a href=\"{{ path('home')}}\"><img titre=\"home\" src=\"{{ asset('assets/images/svediMoyen.png')}}\"/></a>
      </div>
      <div id=\"connexion\">
        <img src=\"{{ asset('assets/images/connexionTop.png')}}\"/>
        <div class=\"sf-reset\">
          {% block body %}{% endblock %}
        </div>
        <img src=\"{{ asset('assets/images/connexionBtm.png')}}\"/>
      </div>
    </div>
</body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\app\\Resources\\TwigBundle\\views\\layout.html.twig");
    }
}
