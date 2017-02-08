<?php

/* SRVDVServerBundle:Resetting:request_content.html.twig */
class __TwigTemplate_11e782b5a88e354deca9ddfded1bf25a65280ea9014439efbbc0ecca4b143bf9 extends Twig_Template
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
        $__internal_d0b4cb295e7a924b0bdb2b8e28cd6578cf72fb10c427be64dced3b66eaa943ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b4cb295e7a924b0bdb2b8e28cd6578cf72fb10c427be64dced3b66eaa943ba->enter($__internal_d0b4cb295e7a924b0bdb2b8e28cd6578cf72fb10c427be64dced3b66eaa943ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            ";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 9
        echo "            <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
        </div>
        </br>
        <div>
            <input type=\"submit\" value=\"Valider\"  class=\"btn btn-danger\"/>
        </div>
    </form>

</div>
";
        
        $__internal_d0b4cb295e7a924b0bdb2b8e28cd6578cf72fb10c427be64dced3b66eaa943ba->leave($__internal_d0b4cb295e7a924b0bdb2b8e28cd6578cf72fb10c427be64dced3b66eaa943ba_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:Resetting:request_content.html.twig";
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

<div class=\"container\">
    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            {% if invalid_username is defined %}
                <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
            {% endif %}
            <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
        </div>
        </br>
        <div>
            <input type=\"submit\" value=\"Valider\"  class=\"btn btn-danger\"/>
        </div>
    </form>

</div>
", "SRVDVServerBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
