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

/* partials/footer.html.twig */
class __TwigTemplate_d48b185348bf01f5d1c3aa09c967c2a73446a301e5e8ae3b9f131369ad28479d extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"section\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
       <p>&copy;2024 VJUSTINPIETERSEN</p>
    </section>
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2\"></script>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section\">
    <section class=\"container {{ grid_size }}\">
       <p>&copy;2024 VJUSTINPIETERSEN</p>
    </section>
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2\"></script>
</section>
", "partials/footer.html.twig", "C:\\laragon\\www\\wec\\user\\themes\\fiawec\\templates\\partials\\footer.html.twig");
    }
}
