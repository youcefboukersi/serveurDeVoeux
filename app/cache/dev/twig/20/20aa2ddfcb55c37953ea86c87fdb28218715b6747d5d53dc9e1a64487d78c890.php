<?php

/* :FormTemplate:bootstrap.html.twig */
class __TwigTemplate_2e84e936b6ede4ada83324339f73aab96e53f8e53eb58745b1571016343a94a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86796ac9dc3a7251d417b8a33dcc27aaae6c34efed26fe228eeb4be0aa4b00de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86796ac9dc3a7251d417b8a33dcc27aaae6c34efed26fe228eeb4be0aa4b00de->enter($__internal_86796ac9dc3a7251d417b8a33dcc27aaae6c34efed26fe228eeb4be0aa4b00de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FormTemplate:bootstrap.html.twig"));

        // line 1
        echo "<?php";
        // line 3
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 10
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_86796ac9dc3a7251d417b8a33dcc27aaae6c34efed26fe228eeb4be0aa4b00de->leave($__internal_86796ac9dc3a7251d417b8a33dcc27aaae6c34efed26fe228eeb4be0aa4b00de_prof);

    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9bf397c306ed534f19c2592ac5745a1e34255352560a8569b868a7161fc805d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf397c306ed534f19c2592ac5745a1e34255352560a8569b868a7161fc805d2->enter($__internal_9bf397c306ed534f19c2592ac5745a1e34255352560a8569b868a7161fc805d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 4
        echo "<div class=\"form-group\">";
        // line 5
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 6
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" />
</div>";
        
        $__internal_9bf397c306ed534f19c2592ac5745a1e34255352560a8569b868a7161fc805d2->leave($__internal_9bf397c306ed534f19c2592ac5745a1e34255352560a8569b868a7161fc805d2_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0d9c16e78c5ec9193e5337fcd63164c98e2fa70c10f927140aed86189f19bfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c16e78c5ec9193e5337fcd63164c98e2fa70c10f927140aed86189f19bfa3->enter($__internal_0d9c16e78c5ec9193e5337fcd63164c98e2fa70c10f927140aed86189f19bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<div class=\"form-group\">
    <select ";
        // line 15
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">";
        // line 16
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 17
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 19
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 20
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 21
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 22
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 23
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 26
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 27
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 28
        echo "</select>
    </div>";
        
        $__internal_0d9c16e78c5ec9193e5337fcd63164c98e2fa70c10f927140aed86189f19bfa3->leave($__internal_0d9c16e78c5ec9193e5337fcd63164c98e2fa70c10f927140aed86189f19bfa3_prof);

    }

    public function getTemplateName()
    {
        return ":FormTemplate:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  110 => 27,  108 => 26,  102 => 23,  100 => 22,  98 => 21,  96 => 20,  94 => 19,  85 => 17,  83 => 16,  77 => 15,  74 => 14,  71 => 12,  69 => 11,  63 => 10,  45 => 6,  43 => 5,  41 => 4,  35 => 3,  28 => 10,  26 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

{%- block form_widget_simple -%}
<div class=\"form-group\">
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} class=\"form-control\" />
</div>    
{%- endblock form_widget_simple -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <div class=\"form-group\">
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} class=\"form-control\">
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
    </div>    
{%- endblock choice_widget_collapsed -%}", ":FormTemplate:bootstrap.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/FormTemplate/bootstrap.html.twig");
    }
}
