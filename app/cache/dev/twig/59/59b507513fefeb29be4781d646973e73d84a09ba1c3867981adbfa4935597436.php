<?php

/* FormTemplate/bootstrap2.html.twig */
class __TwigTemplate_43ee60d499263edfab68c077b509df2d7d89338765c945aa8071f475100a36d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5650fdcd925041d120ee4f6c7c1147dc71c8dd92dce86c00dc143bd760975d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5650fdcd925041d120ee4f6c7c1147dc71c8dd92dce86c00dc143bd760975d41->enter($__internal_5650fdcd925041d120ee4f6c7c1147dc71c8dd92dce86c00dc143bd760975d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormTemplate/bootstrap2.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('form_label', $context, $blocks);
        // line 266
        $this->displayBlock('button_label', $context, $blocks);
        // line 270
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 278
        $this->displayBlock('form_row', $context, $blocks);
        // line 286
        $this->displayBlock('button_row', $context, $blocks);
        // line 292
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 298
        $this->displayBlock('form', $context, $blocks);
        // line 304
        $this->displayBlock('form_start', $context, $blocks);
        // line 317
        $this->displayBlock('form_end', $context, $blocks);
        // line 324
        $this->displayBlock('form_errors', $context, $blocks);
        // line 334
        $this->displayBlock('form_rest', $context, $blocks);
        // line 341
        echo "
";
        // line 344
        $this->displayBlock('form_rows', $context, $blocks);
        // line 350
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 366
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 380
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_5650fdcd925041d120ee4f6c7c1147dc71c8dd92dce86c00dc143bd760975d41->leave($__internal_5650fdcd925041d120ee4f6c7c1147dc71c8dd92dce86c00dc143bd760975d41_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_9042f64f2f351409b148279fa4ec39b6b6b8c51676bc979b65500909665e329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9042f64f2f351409b148279fa4ec39b6b6b8c51676bc979b65500909665e329d->enter($__internal_9042f64f2f351409b148279fa4ec39b6b6b8c51676bc979b65500909665e329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_9042f64f2f351409b148279fa4ec39b6b6b8c51676bc979b65500909665e329d->leave($__internal_9042f64f2f351409b148279fa4ec39b6b6b8c51676bc979b65500909665e329d_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6f0edbae23c10f105688e544b87bbbf1f641b61008d258055689aa16331260f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0edbae23c10f105688e544b87bbbf1f641b61008d258055689aa16331260f2->enter($__internal_6f0edbae23c10f105688e544b87bbbf1f641b61008d258055689aa16331260f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
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
        echo "/>";
        
        $__internal_6f0edbae23c10f105688e544b87bbbf1f641b61008d258055689aa16331260f2->leave($__internal_6f0edbae23c10f105688e544b87bbbf1f641b61008d258055689aa16331260f2_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fffeac6b4f01df7228acf249c8dbae6297395b346c520505d98ef1036bec4627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffeac6b4f01df7228acf249c8dbae6297395b346c520505d98ef1036bec4627->enter($__internal_fffeac6b4f01df7228acf249c8dbae6297395b346c520505d98ef1036bec4627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_fffeac6b4f01df7228acf249c8dbae6297395b346c520505d98ef1036bec4627->leave($__internal_fffeac6b4f01df7228acf249c8dbae6297395b346c520505d98ef1036bec4627_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_9517f8641612f5c0d84cf56b460b70d5ac188db08a87d21bf3618ac1569e826f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9517f8641612f5c0d84cf56b460b70d5ac188db08a87d21bf3618ac1569e826f->enter($__internal_9517f8641612f5c0d84cf56b460b70d5ac188db08a87d21bf3618ac1569e826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_9517f8641612f5c0d84cf56b460b70d5ac188db08a87d21bf3618ac1569e826f->leave($__internal_9517f8641612f5c0d84cf56b460b70d5ac188db08a87d21bf3618ac1569e826f_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cc00dcae42fcadbbacee445e59a31f94baeb7f441890da852651bfdfd6cf8012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc00dcae42fcadbbacee445e59a31f94baeb7f441890da852651bfdfd6cf8012->enter($__internal_cc00dcae42fcadbbacee445e59a31f94baeb7f441890da852651bfdfd6cf8012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_cc00dcae42fcadbbacee445e59a31f94baeb7f441890da852651bfdfd6cf8012->leave($__internal_cc00dcae42fcadbbacee445e59a31f94baeb7f441890da852651bfdfd6cf8012_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_b452ceaf173624e1323678b69890b49a86e76b423d8929bf1dc259190bceec6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b452ceaf173624e1323678b69890b49a86e76b423d8929bf1dc259190bceec6c->enter($__internal_b452ceaf173624e1323678b69890b49a86e76b423d8929bf1dc259190bceec6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_b452ceaf173624e1323678b69890b49a86e76b423d8929bf1dc259190bceec6c->leave($__internal_b452ceaf173624e1323678b69890b49a86e76b423d8929bf1dc259190bceec6c_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_df8bbf6d05af56efa47cd8cfda5f77de1aaefb863dc678611f8948b9db6626f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8bbf6d05af56efa47cd8cfda5f77de1aaefb863dc678611f8948b9db6626f0->enter($__internal_df8bbf6d05af56efa47cd8cfda5f77de1aaefb863dc678611f8948b9db6626f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_df8bbf6d05af56efa47cd8cfda5f77de1aaefb863dc678611f8948b9db6626f0->leave($__internal_df8bbf6d05af56efa47cd8cfda5f77de1aaefb863dc678611f8948b9db6626f0_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6ceb26cc905cb93729493b330e8de03f694f4dc2cd4a454c3c841a12d7c7462c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ceb26cc905cb93729493b330e8de03f694f4dc2cd4a454c3c841a12d7c7462c->enter($__internal_6ceb26cc905cb93729493b330e8de03f694f4dc2cd4a454c3c841a12d7c7462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_6ceb26cc905cb93729493b330e8de03f694f4dc2cd4a454c3c841a12d7c7462c->leave($__internal_6ceb26cc905cb93729493b330e8de03f694f4dc2cd4a454c3c841a12d7c7462c_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_d952ce70c2a52fb1c22f19a4bbf9538107d7f97de8082e2c20b45743ecd61598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d952ce70c2a52fb1c22f19a4bbf9538107d7f97de8082e2c20b45743ecd61598->enter($__internal_d952ce70c2a52fb1c22f19a4bbf9538107d7f97de8082e2c20b45743ecd61598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d952ce70c2a52fb1c22f19a4bbf9538107d7f97de8082e2c20b45743ecd61598->leave($__internal_d952ce70c2a52fb1c22f19a4bbf9538107d7f97de8082e2c20b45743ecd61598_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c4125642bb366eae6b64f3e2825d602bec414086984b26a6dc2a49b2d7b7049c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4125642bb366eae6b64f3e2825d602bec414086984b26a6dc2a49b2d7b7049c->enter($__internal_c4125642bb366eae6b64f3e2825d602bec414086984b26a6dc2a49b2d7b7049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c4125642bb366eae6b64f3e2825d602bec414086984b26a6dc2a49b2d7b7049c->leave($__internal_c4125642bb366eae6b64f3e2825d602bec414086984b26a6dc2a49b2d7b7049c_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_df2ce8d846c0ee863cd2def921574103af2980af8ecfa1bfd3a8ff9199ca1f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2ce8d846c0ee863cd2def921574103af2980af8ecfa1bfd3a8ff9199ca1f11->enter($__internal_df2ce8d846c0ee863cd2def921574103af2980af8ecfa1bfd3a8ff9199ca1f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_df2ce8d846c0ee863cd2def921574103af2980af8ecfa1bfd3a8ff9199ca1f11->leave($__internal_df2ce8d846c0ee863cd2def921574103af2980af8ecfa1bfd3a8ff9199ca1f11_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c9bc0e05561cde642a5e82cbcb74a7e19349b721f4583e54625ab11778348c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bc0e05561cde642a5e82cbcb74a7e19349b721f4583e54625ab11778348c5e->enter($__internal_c9bc0e05561cde642a5e82cbcb74a7e19349b721f4583e54625ab11778348c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_c9bc0e05561cde642a5e82cbcb74a7e19349b721f4583e54625ab11778348c5e->leave($__internal_c9bc0e05561cde642a5e82cbcb74a7e19349b721f4583e54625ab11778348c5e_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c45eddf702b520675d67a48ef2210c5e5566eda3656d4865b60f3e445b1775cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45eddf702b520675d67a48ef2210c5e5566eda3656d4865b60f3e445b1775cc->enter($__internal_c45eddf702b520675d67a48ef2210c5e5566eda3656d4865b60f3e445b1775cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_c45eddf702b520675d67a48ef2210c5e5566eda3656d4865b60f3e445b1775cc->leave($__internal_c45eddf702b520675d67a48ef2210c5e5566eda3656d4865b60f3e445b1775cc_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a7382599e22bbe19aa126565b22b1e35af005d8f5cfe60632d49a9ec8afcab32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7382599e22bbe19aa126565b22b1e35af005d8f5cfe60632d49a9ec8afcab32->enter($__internal_a7382599e22bbe19aa126565b22b1e35af005d8f5cfe60632d49a9ec8afcab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_a7382599e22bbe19aa126565b22b1e35af005d8f5cfe60632d49a9ec8afcab32->leave($__internal_a7382599e22bbe19aa126565b22b1e35af005d8f5cfe60632d49a9ec8afcab32_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_77b135ab0f5e3985e8e7481488baf141610774c24c84348f7dafa775805f1b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b135ab0f5e3985e8e7481488baf141610774c24c84348f7dafa775805f1b32->enter($__internal_77b135ab0f5e3985e8e7481488baf141610774c24c84348f7dafa775805f1b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_77b135ab0f5e3985e8e7481488baf141610774c24c84348f7dafa775805f1b32->leave($__internal_77b135ab0f5e3985e8e7481488baf141610774c24c84348f7dafa775805f1b32_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_1837d8dede920c1380f2b6772abd40da0cd251b6520d91e2e86203aa56d154c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1837d8dede920c1380f2b6772abd40da0cd251b6520d91e2e86203aa56d154c5->enter($__internal_1837d8dede920c1380f2b6772abd40da0cd251b6520d91e2e86203aa56d154c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1837d8dede920c1380f2b6772abd40da0cd251b6520d91e2e86203aa56d154c5->leave($__internal_1837d8dede920c1380f2b6772abd40da0cd251b6520d91e2e86203aa56d154c5_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_a7da8c593cdfd6942c615293d0870261b493537402cf8dfa342ec46aa6cb65b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7da8c593cdfd6942c615293d0870261b493537402cf8dfa342ec46aa6cb65b4->enter($__internal_a7da8c593cdfd6942c615293d0870261b493537402cf8dfa342ec46aa6cb65b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a7da8c593cdfd6942c615293d0870261b493537402cf8dfa342ec46aa6cb65b4->leave($__internal_a7da8c593cdfd6942c615293d0870261b493537402cf8dfa342ec46aa6cb65b4_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_679f0870ff499e16567354cb9156d4b09ba9bd4b7df953682df00903fd8f88b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679f0870ff499e16567354cb9156d4b09ba9bd4b7df953682df00903fd8f88b3->enter($__internal_679f0870ff499e16567354cb9156d4b09ba9bd4b7df953682df00903fd8f88b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_679f0870ff499e16567354cb9156d4b09ba9bd4b7df953682df00903fd8f88b3->leave($__internal_679f0870ff499e16567354cb9156d4b09ba9bd4b7df953682df00903fd8f88b3_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_1ef1076a6efd47db6bc9f56ac3e5194e2e464a3dac4b2b019242b161d45d3519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef1076a6efd47db6bc9f56ac3e5194e2e464a3dac4b2b019242b161d45d3519->enter($__internal_1ef1076a6efd47db6bc9f56ac3e5194e2e464a3dac4b2b019242b161d45d3519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1ef1076a6efd47db6bc9f56ac3e5194e2e464a3dac4b2b019242b161d45d3519->leave($__internal_1ef1076a6efd47db6bc9f56ac3e5194e2e464a3dac4b2b019242b161d45d3519_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_93ac78c4fe42f43b978417bc101b47518e4fb308fec33d4d591607325a17dd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ac78c4fe42f43b978417bc101b47518e4fb308fec33d4d591607325a17dd94->enter($__internal_93ac78c4fe42f43b978417bc101b47518e4fb308fec33d4d591607325a17dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_93ac78c4fe42f43b978417bc101b47518e4fb308fec33d4d591607325a17dd94->leave($__internal_93ac78c4fe42f43b978417bc101b47518e4fb308fec33d4d591607325a17dd94_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ddbac3199485f891db085ce45fa7c1be240bd2b22859a105ed3153e7032dea67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbac3199485f891db085ce45fa7c1be240bd2b22859a105ed3153e7032dea67->enter($__internal_ddbac3199485f891db085ce45fa7c1be240bd2b22859a105ed3153e7032dea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_ddbac3199485f891db085ce45fa7c1be240bd2b22859a105ed3153e7032dea67->leave($__internal_ddbac3199485f891db085ce45fa7c1be240bd2b22859a105ed3153e7032dea67_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_bcbc3d3cbec4b6ca68051954e45e6e9ec48a3f86f9c5578a20052e178e07375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbc3d3cbec4b6ca68051954e45e6e9ec48a3f86f9c5578a20052e178e07375f->enter($__internal_bcbc3d3cbec4b6ca68051954e45e6e9ec48a3f86f9c5578a20052e178e07375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bcbc3d3cbec4b6ca68051954e45e6e9ec48a3f86f9c5578a20052e178e07375f->leave($__internal_bcbc3d3cbec4b6ca68051954e45e6e9ec48a3f86f9c5578a20052e178e07375f_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_5d77bcbe25ce3779a709a2dea9f0a24e6c7201f10b63ffb20320303358e76312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d77bcbe25ce3779a709a2dea9f0a24e6c7201f10b63ffb20320303358e76312->enter($__internal_5d77bcbe25ce3779a709a2dea9f0a24e6c7201f10b63ffb20320303358e76312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5d77bcbe25ce3779a709a2dea9f0a24e6c7201f10b63ffb20320303358e76312->leave($__internal_5d77bcbe25ce3779a709a2dea9f0a24e6c7201f10b63ffb20320303358e76312_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_4a64d9ea3f428feed4e02fa3a60a08628bd523a4dc707fecf8cdf47cf384911b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a64d9ea3f428feed4e02fa3a60a08628bd523a4dc707fecf8cdf47cf384911b->enter($__internal_4a64d9ea3f428feed4e02fa3a60a08628bd523a4dc707fecf8cdf47cf384911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4a64d9ea3f428feed4e02fa3a60a08628bd523a4dc707fecf8cdf47cf384911b->leave($__internal_4a64d9ea3f428feed4e02fa3a60a08628bd523a4dc707fecf8cdf47cf384911b_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_ed5fa175be34c6b437cb78bbd48c07b2af8acb6c348c879ad3020799706621a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5fa175be34c6b437cb78bbd48c07b2af8acb6c348c879ad3020799706621a0->enter($__internal_ed5fa175be34c6b437cb78bbd48c07b2af8acb6c348c879ad3020799706621a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ed5fa175be34c6b437cb78bbd48c07b2af8acb6c348c879ad3020799706621a0->leave($__internal_ed5fa175be34c6b437cb78bbd48c07b2af8acb6c348c879ad3020799706621a0_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_648fd213bcc9cf25e2bcae0d130beeefea56e6ba5d2945427a9fb8c3ec01f5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648fd213bcc9cf25e2bcae0d130beeefea56e6ba5d2945427a9fb8c3ec01f5e1->enter($__internal_648fd213bcc9cf25e2bcae0d130beeefea56e6ba5d2945427a9fb8c3ec01f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 223
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_648fd213bcc9cf25e2bcae0d130beeefea56e6ba5d2945427a9fb8c3ec01f5e1->leave($__internal_648fd213bcc9cf25e2bcae0d130beeefea56e6ba5d2945427a9fb8c3ec01f5e1_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_c505890f601943638367a15827efbe43a9fa1852feafd06b02a233b29349b7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c505890f601943638367a15827efbe43a9fa1852feafd06b02a233b29349b7e9->enter($__internal_c505890f601943638367a15827efbe43a9fa1852feafd06b02a233b29349b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c505890f601943638367a15827efbe43a9fa1852feafd06b02a233b29349b7e9->leave($__internal_c505890f601943638367a15827efbe43a9fa1852feafd06b02a233b29349b7e9_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_aa0e39a6662ceb3bbfe74dcdb599c27aad40eeb2896d87ecb119385abf1e2c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0e39a6662ceb3bbfe74dcdb599c27aad40eeb2896d87ecb119385abf1e2c80->enter($__internal_aa0e39a6662ceb3bbfe74dcdb599c27aad40eeb2896d87ecb119385abf1e2c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_aa0e39a6662ceb3bbfe74dcdb599c27aad40eeb2896d87ecb119385abf1e2c80->leave($__internal_aa0e39a6662ceb3bbfe74dcdb599c27aad40eeb2896d87ecb119385abf1e2c80_prof);

    }

    // line 244
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f494994682279960c6180adfbc800428b154dbee89325dd66b633663704a0a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f494994682279960c6180adfbc800428b154dbee89325dd66b633663704a0a3c->enter($__internal_f494994682279960c6180adfbc800428b154dbee89325dd66b633663704a0a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 245
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 246
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 247
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 249
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 250
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 252
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 253
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 254
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 255
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 256
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 259
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 262
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_f494994682279960c6180adfbc800428b154dbee89325dd66b633663704a0a3c->leave($__internal_f494994682279960c6180adfbc800428b154dbee89325dd66b633663704a0a3c_prof);

    }

    // line 266
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_8b1ecef05cda87313aa174b1fabc99210d150f07441445041cbc2d15b7e7ff8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1ecef05cda87313aa174b1fabc99210d150f07441445041cbc2d15b7e7ff8b->enter($__internal_8b1ecef05cda87313aa174b1fabc99210d150f07441445041cbc2d15b7e7ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_8b1ecef05cda87313aa174b1fabc99210d150f07441445041cbc2d15b7e7ff8b->leave($__internal_8b1ecef05cda87313aa174b1fabc99210d150f07441445041cbc2d15b7e7ff8b_prof);

    }

    // line 270
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_87c25f701d9e8a6cdd0fe43ec4495d09d5a8c88b0e397687bb761f3f3df7fd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c25f701d9e8a6cdd0fe43ec4495d09d5a8c88b0e397687bb761f3f3df7fd0b->enter($__internal_87c25f701d9e8a6cdd0fe43ec4495d09d5a8c88b0e397687bb761f3f3df7fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 275
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_87c25f701d9e8a6cdd0fe43ec4495d09d5a8c88b0e397687bb761f3f3df7fd0b->leave($__internal_87c25f701d9e8a6cdd0fe43ec4495d09d5a8c88b0e397687bb761f3f3df7fd0b_prof);

    }

    // line 278
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ae8f99c637c333a8b4b5b80b171778e6562343b172525f123675ebe21cadac88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8f99c637c333a8b4b5b80b171778e6562343b172525f123675ebe21cadac88->enter($__internal_ae8f99c637c333a8b4b5b80b171778e6562343b172525f123675ebe21cadac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 279
        echo "<div>";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 283
        echo "</div>";
        
        $__internal_ae8f99c637c333a8b4b5b80b171778e6562343b172525f123675ebe21cadac88->leave($__internal_ae8f99c637c333a8b4b5b80b171778e6562343b172525f123675ebe21cadac88_prof);

    }

    // line 286
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ec7f957de726e450535be1b0accb1612be07ee66d808aa20150268a2a5150a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7f957de726e450535be1b0accb1612be07ee66d808aa20150268a2a5150a2b->enter($__internal_ec7f957de726e450535be1b0accb1612be07ee66d808aa20150268a2a5150a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 287
        echo "<div>";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 289
        echo "</div>";
        
        $__internal_ec7f957de726e450535be1b0accb1612be07ee66d808aa20150268a2a5150a2b->leave($__internal_ec7f957de726e450535be1b0accb1612be07ee66d808aa20150268a2a5150a2b_prof);

    }

    // line 292
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_a208d1af08b3bba49214bc883e88ad3e0bc0312c6ab07e03d07f40183e3dfd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a208d1af08b3bba49214bc883e88ad3e0bc0312c6ab07e03d07f40183e3dfd52->enter($__internal_a208d1af08b3bba49214bc883e88ad3e0bc0312c6ab07e03d07f40183e3dfd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_a208d1af08b3bba49214bc883e88ad3e0bc0312c6ab07e03d07f40183e3dfd52->leave($__internal_a208d1af08b3bba49214bc883e88ad3e0bc0312c6ab07e03d07f40183e3dfd52_prof);

    }

    // line 298
    public function block_form($context, array $blocks = array())
    {
        $__internal_d7dc5055da61d535ec195d56414010560bac01b7741b900956559e983e4f4bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dc5055da61d535ec195d56414010560bac01b7741b900956559e983e4f4bd7->enter($__internal_d7dc5055da61d535ec195d56414010560bac01b7741b900956559e983e4f4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 299
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 301
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_d7dc5055da61d535ec195d56414010560bac01b7741b900956559e983e4f4bd7->leave($__internal_d7dc5055da61d535ec195d56414010560bac01b7741b900956559e983e4f4bd7_prof);

    }

    // line 304
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ae390be43c3c61bcb412f6abf9014d7e6340d4113e9fac9a83355bd8ba91476a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae390be43c3c61bcb412f6abf9014d7e6340d4113e9fac9a83355bd8ba91476a->enter($__internal_ae390be43c3c61bcb412f6abf9014d7e6340d4113e9fac9a83355bd8ba91476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 305
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 306
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 307
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 309
            $context["form_method"] = "POST";
        }
        // line 311
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 312
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 313
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_ae390be43c3c61bcb412f6abf9014d7e6340d4113e9fac9a83355bd8ba91476a->leave($__internal_ae390be43c3c61bcb412f6abf9014d7e6340d4113e9fac9a83355bd8ba91476a_prof);

    }

    // line 317
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_56ab8a508367ea24119fea3d234a6eb64b8b34619fc08c657a38e4d14ac9c37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ab8a508367ea24119fea3d234a6eb64b8b34619fc08c657a38e4d14ac9c37e->enter($__internal_56ab8a508367ea24119fea3d234a6eb64b8b34619fc08c657a38e4d14ac9c37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 318
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 319
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 321
        echo "</form>";
        
        $__internal_56ab8a508367ea24119fea3d234a6eb64b8b34619fc08c657a38e4d14ac9c37e->leave($__internal_56ab8a508367ea24119fea3d234a6eb64b8b34619fc08c657a38e4d14ac9c37e_prof);

    }

    // line 324
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a3a88359179963eaf816851a49d99502fc3f57b397a91a20a0f62eadb8c49b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a88359179963eaf816851a49d99502fc3f57b397a91a20a0f62eadb8c49b79->enter($__internal_a3a88359179963eaf816851a49d99502fc3f57b397a91a20a0f62eadb8c49b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 325
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 326
            echo "<ul>";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 328
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "</ul>";
        }
        
        $__internal_a3a88359179963eaf816851a49d99502fc3f57b397a91a20a0f62eadb8c49b79->leave($__internal_a3a88359179963eaf816851a49d99502fc3f57b397a91a20a0f62eadb8c49b79_prof);

    }

    // line 334
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_6a241e609a3d60407e00e567e6b0889ecb1b8d8e9387e16e01e8736b841e51a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a241e609a3d60407e00e567e6b0889ecb1b8d8e9387e16e01e8736b841e51a2->enter($__internal_6a241e609a3d60407e00e567e6b0889ecb1b8d8e9387e16e01e8736b841e51a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 336
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 337
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6a241e609a3d60407e00e567e6b0889ecb1b8d8e9387e16e01e8736b841e51a2->leave($__internal_6a241e609a3d60407e00e567e6b0889ecb1b8d8e9387e16e01e8736b841e51a2_prof);

    }

    // line 344
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_d1620d078e53b09bcaffa93c51c84fedf8eec1e12b4b82ccb1921f7e63bd3661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1620d078e53b09bcaffa93c51c84fedf8eec1e12b4b82ccb1921f7e63bd3661->enter($__internal_d1620d078e53b09bcaffa93c51c84fedf8eec1e12b4b82ccb1921f7e63bd3661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 345
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 346
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d1620d078e53b09bcaffa93c51c84fedf8eec1e12b4b82ccb1921f7e63bd3661->leave($__internal_d1620d078e53b09bcaffa93c51c84fedf8eec1e12b4b82ccb1921f7e63bd3661_prof);

    }

    // line 350
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_3beaf7e05138e31f8d450bd634b3cb42f13e2a3a55dad70ce3b9bd6614bb0c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beaf7e05138e31f8d450bd634b3cb42f13e2a3a55dad70ce3b9bd6614bb0c4c->enter($__internal_3beaf7e05138e31f8d450bd634b3cb42f13e2a3a55dad70ce3b9bd6614bb0c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 352
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 353
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 355
            echo " ";
            // line 356
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 358
$context["attrvalue"] === true)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 360
$context["attrvalue"] === false)) {
                // line 361
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3beaf7e05138e31f8d450bd634b3cb42f13e2a3a55dad70ce3b9bd6614bb0c4c->leave($__internal_3beaf7e05138e31f8d450bd634b3cb42f13e2a3a55dad70ce3b9bd6614bb0c4c_prof);

    }

    // line 366
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_cc2867f36924cb57e5ea9d16b770a5a99477fa5f8c13d9c9b5b6bdc9c5cc9bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2867f36924cb57e5ea9d16b770a5a99477fa5f8c13d9c9b5b6bdc9c5cc9bb6->enter($__internal_cc2867f36924cb57e5ea9d16b770a5a99477fa5f8c13d9c9b5b6bdc9c5cc9bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 367
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 369
            echo " ";
            // line 370
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 372
$context["attrvalue"] === true)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 374
$context["attrvalue"] === false)) {
                // line 375
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cc2867f36924cb57e5ea9d16b770a5a99477fa5f8c13d9c9b5b6bdc9c5cc9bb6->leave($__internal_cc2867f36924cb57e5ea9d16b770a5a99477fa5f8c13d9c9b5b6bdc9c5cc9bb6_prof);

    }

    // line 380
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_13da0e07c514cffa1994c902a4da613fde84fb0824c66e53ba3dd11549df2432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13da0e07c514cffa1994c902a4da613fde84fb0824c66e53ba3dd11549df2432->enter($__internal_13da0e07c514cffa1994c902a4da613fde84fb0824c66e53ba3dd11549df2432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 381
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 382
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 383
            echo " ";
            // line 384
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 386
$context["attrvalue"] === true)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 388
$context["attrvalue"] === false)) {
                // line 389
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_13da0e07c514cffa1994c902a4da613fde84fb0824c66e53ba3dd11549df2432->leave($__internal_13da0e07c514cffa1994c902a4da613fde84fb0824c66e53ba3dd11549df2432_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_ef51b37d9b9609ea292196a09ae8c7d207ba89f2e5e62832fd051a836f8f8a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef51b37d9b9609ea292196a09ae8c7d207ba89f2e5e62832fd051a836f8f8a40->enter($__internal_ef51b37d9b9609ea292196a09ae8c7d207ba89f2e5e62832fd051a836f8f8a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ef51b37d9b9609ea292196a09ae8c7d207ba89f2e5e62832fd051a836f8f8a40->leave($__internal_ef51b37d9b9609ea292196a09ae8c7d207ba89f2e5e62832fd051a836f8f8a40_prof);

    }

    public function getTemplateName()
    {
        return "FormTemplate/bootstrap2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1399 => 402,  1397 => 401,  1392 => 400,  1390 => 399,  1385 => 398,  1383 => 397,  1381 => 396,  1377 => 395,  1371 => 394,  1356 => 389,  1354 => 388,  1349 => 387,  1347 => 386,  1342 => 385,  1340 => 384,  1338 => 383,  1334 => 382,  1325 => 381,  1319 => 380,  1304 => 375,  1302 => 374,  1297 => 373,  1295 => 372,  1290 => 371,  1288 => 370,  1286 => 369,  1282 => 368,  1276 => 367,  1270 => 366,  1255 => 361,  1253 => 360,  1248 => 359,  1246 => 358,  1241 => 357,  1239 => 356,  1237 => 355,  1233 => 354,  1229 => 353,  1225 => 352,  1219 => 351,  1213 => 350,  1202 => 346,  1198 => 345,  1192 => 344,  1180 => 337,  1178 => 336,  1174 => 335,  1168 => 334,  1160 => 330,  1152 => 328,  1148 => 327,  1146 => 326,  1144 => 325,  1138 => 324,  1131 => 321,  1128 => 319,  1126 => 318,  1120 => 317,  1110 => 313,  1108 => 312,  1081 => 311,  1078 => 309,  1075 => 307,  1073 => 306,  1071 => 305,  1065 => 304,  1058 => 301,  1056 => 300,  1054 => 299,  1048 => 298,  1041 => 293,  1035 => 292,  1028 => 289,  1026 => 288,  1024 => 287,  1018 => 286,  1011 => 283,  1009 => 282,  1007 => 281,  1005 => 280,  1003 => 279,  997 => 278,  990 => 275,  984 => 270,  973 => 266,  950 => 262,  946 => 259,  943 => 256,  942 => 255,  941 => 254,  939 => 253,  937 => 252,  934 => 250,  932 => 249,  929 => 247,  927 => 246,  925 => 245,  919 => 244,  912 => 239,  910 => 238,  904 => 237,  897 => 234,  895 => 233,  889 => 232,  876 => 229,  872 => 226,  869 => 223,  868 => 222,  867 => 221,  865 => 220,  863 => 219,  857 => 218,  850 => 215,  848 => 214,  842 => 213,  835 => 210,  833 => 209,  827 => 208,  820 => 205,  818 => 204,  812 => 203,  805 => 200,  803 => 199,  797 => 198,  789 => 195,  787 => 194,  781 => 193,  774 => 190,  772 => 189,  766 => 188,  759 => 185,  757 => 184,  751 => 183,  744 => 180,  738 => 179,  731 => 176,  729 => 175,  723 => 174,  716 => 171,  714 => 170,  708 => 168,  700 => 164,  696 => 163,  692 => 160,  686 => 159,  680 => 158,  674 => 157,  668 => 156,  662 => 155,  656 => 154,  650 => 153,  645 => 149,  639 => 148,  633 => 147,  627 => 146,  621 => 145,  615 => 144,  609 => 143,  603 => 142,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 394,  153 => 380,  151 => 366,  149 => 350,  147 => 344,  144 => 341,  142 => 334,  140 => 324,  138 => 317,  136 => 304,  134 => 298,  132 => 292,  130 => 286,  128 => 278,  126 => 270,  124 => 266,  122 => 244,  120 => 237,  118 => 232,  116 => 218,  114 => 213,  112 => 208,  110 => 203,  108 => 198,  106 => 193,  104 => 188,  102 => 183,  100 => 179,  98 => 174,  96 => 168,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
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
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}", "FormTemplate/bootstrap2.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\FormTemplate\\bootstrap2.html.twig");
    }
}
