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
class __TwigTemplate_304de937772afeb5f2ac5677798f368f886b7a2b2ab768c8b29248367a59a4c4 extends \Twig\Template
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
        echo "<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"";
        // line 3
        echo ($context["base_url_absolute"] ?? null);
        echo "\"><strong>";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "name", []);
        echo "</strong></a> &copy; All rights reserved.</section>
    </div>
    <div class=\"social-icons\">
        
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "facebook", [])) {
            // line 8
            echo "        <a href=\"https://facebook.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "facebook", []);
            echo "\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "linkedin", [])) {
            // line 16
            echo "        <a href=\"https://linkedin.com/in/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "linkedin", []);
            echo "\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-linkedin fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "twitter", [])) {
            // line 24
            echo "        <a href=\"https://twitter.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "twitter", []);
            echo "\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 31
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "google_plus", [])) {
            // line 32
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "google_plus", []);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 39
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "instagram", [])) {
            // line 40
            echo "        <a href=\"https://instagram.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "instagram", []);
            echo "\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 47
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "github", [])) {
            // line 48
            echo "        <a href=\"https://github.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "github", []);
            echo "\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 55
        echo "    </div>
    
    <div class=\"cf\"></div>
</footer>
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
        return array (  126 => 55,  115 => 48,  112 => 47,  101 => 40,  98 => 39,  87 => 32,  84 => 31,  73 => 24,  70 => 23,  59 => 16,  56 => 15,  45 => 8,  43 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"{{ base_url_absolute }}\"><strong>{{ site.owner.name }}</strong></a> &copy; All rights reserved.</section>
    </div>
    <div class=\"social-icons\">
        
        {% if site.owner.facebook %}
        <a href=\"https://facebook.com/{{ site.owner.facebook }}\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.linkedin %}
        <a href=\"https://linkedin.com/in/{{ site.owner.linkedin }}\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-linkedin fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.twitter %}
        <a href=\"https://twitter.com/{{ site.owner.twitter }}\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.google_plus %}
        <a href=\"{{ site.owner.google_plus }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.instagram %}
        <a href=\"https://instagram.com/{{ site.owner.instagram }}\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.github %}
        <a href=\"https://github.com/{{ site.owner.github }}\" target=\"_blank\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
    </div>
    
    <div class=\"cf\"></div>
</footer>
", "partials/footer.html.twig", "/usr/share/nginx/html/user/themes/notepad/templates/partials/footer.html.twig");
    }
}
