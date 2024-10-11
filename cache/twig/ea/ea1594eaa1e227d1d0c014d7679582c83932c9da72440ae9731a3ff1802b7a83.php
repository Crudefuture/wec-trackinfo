<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/circuit.html.twig */
class __TwigTemplate_fdb208f9a10522065b9cac23a3ec838ce1258ad68ac1717294ad131d57adaafa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"circuit-details\" id=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["module"] ?? null), "menu", [])), "html", null, true);
        echo "\">
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuit"] ?? null), "title", []), "html", null, true);
        echo "</h2>
    <div class=\"columns\">
        <div class=\"column col-6 col-sm-12\">
            <p>Location: ";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("location", $context)) ? (_twig_default_filter(($context["location"] ?? null), "Location not set")) : ("Location not set")), "html", null, true);
        echo "</p>
            <p>Length: ";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("length", $context)) ? (_twig_default_filter(($context["length"] ?? null), "Length not set")) : ("Length not set")), "html", null, true);
        echo "</p>
            <p>Turns: ";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["circuit"] ?? null), "turns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["circuit"] ?? null), "turns", []), "Turns not set")) : ("Turns not set")), "html", null, true);
        echo "</p>
            <p>FIA Grade: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["circuit"] ?? null), "fia_grade", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["circuit"] ?? null), "fia_grade", []), "Grade not set")) : ("Grade not set")), "html", null, true);
        echo "</p>
            <h4>Lap Records</h4>
            <ul>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('dict2items')->getCallable(), [$this->getAttribute(($context["circuit"] ?? null), "lap_records", [])]));
        foreach ($context['_seq'] as $context["car_class"] => $context["time"]) {
            // line 12
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["car_class"], "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $context["time"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['car_class'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
        <div class=\"column col-6 col-sm-12\">
            <div class=\"track-layout\">
                <div v-html=\"svgContents[currentTrack]\" class=\"track-map\"></div>
            </div>
        </div>
        <div class=\"column col-12 track-video\">
            <iframe width=\"420\" height=\"240\" src=\"https://www.youtube.com/embed/kbrczDem74A\" title=\"Onboard with Antonio Fuoco Ferrari 499P Hypercar 🇮🇹 I 2024 6 Hours of COTA I FIA WEC\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" autoplay=\"true\" allowfullscreen></iframe>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modular/circuit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  63 => 12,  59 => 11,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"circuit-details\" id=\"{{ module.menu|hyphenize }}\">
    <h2>{{ circuit.title }}</h2>
    <div class=\"columns\">
        <div class=\"column col-6 col-sm-12\">
            <p>Location: {{ location | default('Location not set') }}</p>
            <p>Length: {{ length | default('Length not set') }}</p>
            <p>Turns: {{ circuit.turns | default('Turns not set') }}</p>
            <p>FIA Grade: {{ circuit.fia_grade | default('Grade not set') }}</p>
            <h4>Lap Records</h4>
            <ul>
                {% for car_class, time in circuit.lap_records|dict2items %}
                    <li>{{ car_class }}: {{ time }}</li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"column col-6 col-sm-12\">
            <div class=\"track-layout\">
                <div v-html=\"svgContents[currentTrack]\" class=\"track-map\"></div>
            </div>
        </div>
        <div class=\"column col-12 track-video\">
            <iframe width=\"420\" height=\"240\" src=\"https://www.youtube.com/embed/kbrczDem74A\" title=\"Onboard with Antonio Fuoco Ferrari 499P Hypercar 🇮🇹 I 2024 6 Hours of COTA I FIA WEC\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" autoplay=\"true\" allowfullscreen></iframe>
        </div>
    </div>
</div>

", "modular/circuit.html.twig", "C:\\laragon\\www\\wec\\user\\themes\\fiawec\\templates\\modular\\circuit.html.twig");
    }
}
