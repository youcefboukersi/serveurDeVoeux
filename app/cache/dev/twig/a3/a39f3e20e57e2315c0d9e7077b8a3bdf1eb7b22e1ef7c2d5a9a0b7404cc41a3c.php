<?php

/* :FormTemplate:bootstrap.html.twig */
class __TwigTemplate_736eae8fff37d043f50f40d6c876fd09f5b1aebcf357a7ac098998e6373cf43b extends Twig_Template
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
        $__internal_1a146c18fe2f841121f779dd1081f1b4a331a7dfa768f38f2ee10f995adbd135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a146c18fe2f841121f779dd1081f1b4a331a7dfa768f38f2ee10f995adbd135->enter($__internal_1a146c18fe2f841121f779dd1081f1b4a331a7dfa768f38f2ee10f995adbd135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FormTemplate:bootstrap.html.twig"));

        // line 1
        echo "<?php";
        // line 3
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 8
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_1a146c18fe2f841121f779dd1081f1b4a331a7dfa768f38f2ee10f995adbd135->leave($__internal_1a146c18fe2f841121f779dd1081f1b4a331a7dfa768f38f2ee10f995adbd135_prof);

    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3d6f1db4118fe69816a645845abd68fdacaef29b33efd43786429faa503d3160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6f1db4118fe69816a645845abd68fdacaef29b33efd43786429faa503d3160->enter($__internal_3d6f1db4118fe69816a645845abd68fdacaef29b33efd43786429faa503d3160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 4
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 5
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
        echo " class=\"form-control\" />";
        
        $__internal_3d6f1db4118fe69816a645845abd68fdacaef29b33efd43786429faa503d3160->leave($__internal_3d6f1db4118fe69816a645845abd68fdacaef29b33efd43786429faa503d3160_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_34cf3c0f7397a32e5001838b50f632f9a51848f43f4895dab2b6d42fc68d4d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cf3c0f7397a32e5001838b50f632f9a51848f43f4895dab2b6d42fc68d4d80->enter($__internal_34cf3c0f7397a32e5001838b50f632f9a51848f43f4895dab2b6d42fc68d4d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">";
        // line 13
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 16
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 17
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 18
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 19
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 20
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 23
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 24
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 25
        echo "</select>";
        
        $__internal_34cf3c0f7397a32e5001838b50f632f9a51848f43f4895dab2b6d42fc68d4d80->leave($__internal_34cf3c0f7397a32e5001838b50f632f9a51848f43f4895dab2b6d42fc68d4d80_prof);

    }

    public function getTemplateName()
    {
        return ":FormTemplate:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  105 => 24,  103 => 23,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  89 => 16,  80 => 14,  78 => 13,  71 => 12,  68 => 10,  66 => 9,  60 => 8,  43 => 5,  41 => 4,  35 => 3,  28 => 8,  26 => 3,  24 => 1,);
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
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} class=\"form-control\" />
{%- endblock form_widget_simple -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
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
{%- endblock choice_widget_collapsed -%}", ":FormTemplate:bootstrap.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/FormTemplate/bootstrap.html.twig");
    }
}
