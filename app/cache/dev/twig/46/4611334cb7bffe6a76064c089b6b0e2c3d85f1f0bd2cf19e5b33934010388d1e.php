<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7ad2c4b61b4eb0c83fb09066ca69f804856f0547789042888b22f8af1f2dfd63 extends Twig_Template
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
        $__internal_c5274585a163c213ad92e036a80fad7fb9fe079721a49626b4189f7b6324a959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5274585a163c213ad92e036a80fad7fb9fe079721a49626b4189f7b6324a959->enter($__internal_c5274585a163c213ad92e036a80fad7fb9fe079721a49626b4189f7b6324a959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "

<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 9
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
    </div>
    <div>
        <input type=\"submit\" value=\"Valider\"  class=\"btn btn-danger\"/>
    </div>
</form>
";
        
        $__internal_c5274585a163c213ad92e036a80fad7fb9fe079721a49626b4189f7b6324a959->leave($__internal_c5274585a163c213ad92e036a80fad7fb9fe079721a49626b4189f7b6324a959_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 7,  31 => 6,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
        {% endif %}
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
    </div>
    <div>
        <input type=\"submit\" value=\"Valider\"  class=\"btn btn-danger\"/>
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
