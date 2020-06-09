<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/editList.html.twig */
class __TwigTemplate_aba28efddce53df87f6642237000ada5dfb53ab5a0ae6720f627bce18a321128 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/editList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"../admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"../admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"../admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"../img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                <li><a href=\"/films/favorite\">Favorites</a></li>
                                <li><a href=\"/films/lists\">My list</a></li>

                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>

                                <a> <img id=\"logout\"><a href=\"#\" style=\"color: white;\">logout</a> </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-3 ml-auto\">
                            <form class=\"input-icon my-3 my-lg-0\">
                                <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search&hellip;\"
                                       tabindex=\"1\">
                                <div class=\"input-icon-addon\">
                                    <i class=\"fe fe-search\"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Edit list</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <!--form class=\"card p-3 form-group\" method=\"POST\" action=\"\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">List name</label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\"
                                           value=\"\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Description</label>
                                    <textarea name=\"description\" id=\"\" cols=\"75\" rows=\"5\" value=\"\"></textarea>
                                </div>

                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form-->
                            ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_start', ["attr" => ["class" => "card p-3 form-group"]]);
        echo "
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'errors');
        echo "
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("Succeed"), "html", null, true);
        echo "\"
                            >
                            <div class=\"form-group\">
                                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "name", [], "any", false, false, false, 125), 'errors');
        echo "
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "name", [], "any", false, false, false, 126), 'label', ["attr" => ["class" => "form-label"], "label" => "List name"]);
        echo "
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "name", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "description", [], "any", false, false, false, 131), 'errors');
        echo "
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "description", [], "any", false, false, false, 132), 'label', ["attr" => ["class" => "form-label"], "label" => "Description"]);
        echo "
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "description", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control", "cols" => "75", "rows" => "5"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "shared", [], "any", false, false, false, 136), 'label', ["attr" => ["class" => "form-label"], "label" => "Public"]);
        echo "
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "shared", [], "any", false, false, false, 137), 'widget');
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "save", [], "any", false, false, false, 141), 'row', ["attr" => ["class" => "btn btn-primary form-control"]]);
        echo "
                            </div>

                            <!-- ENd of the form-->
                            ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        echo "
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"../admin/assets/js/require.min.js\"></script>


    <script src=\"../admin/assets/js/dashboard.js\"></script>
    <script src=\"../admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"../admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"../admin/assets/plugins/input-mask/plugin.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/editList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 157,  286 => 156,  266 => 145,  259 => 141,  252 => 137,  248 => 136,  242 => 133,  238 => 132,  234 => 131,  227 => 127,  223 => 126,  219 => 125,  213 => 122,  208 => 120,  204 => 119,  135 => 52,  125 => 51,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"../admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"../admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"../admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">

    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>
{% endblock %}

{% block body %}

    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"d-flex justify-content-between\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"../img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                <li><a href=\"/films/favorite\">Favorites</a></li>
                                <li><a href=\"/films/lists\">My list</a></li>

                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>

                                <a> <img id=\"logout\"><a href=\"#\" style=\"color: white;\">logout</a> </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-3 ml-auto\">
                            <form class=\"input-icon my-3 my-lg-0\">
                                <input type=\"search\" class=\"form-control header-search\" placeholder=\"Search&hellip;\"
                                       tabindex=\"1\">
                                <div class=\"input-icon-addon\">
                                    <i class=\"fe fe-search\"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Edit list</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <!--form class=\"card p-3 form-group\" method=\"POST\" action=\"\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">List name</label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\"
                                           value=\"\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Description</label>
                                    <textarea name=\"description\" id=\"\" cols=\"75\" rows=\"5\" value=\"\"></textarea>
                                </div>

                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form-->
                            {{ form_start(form, {'attr': {'class': 'card p-3 form-group'}}) }}
                            {{ form_errors(form) }}
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('Succeed') }}\"
                            >
                            <div class=\"form-group\">
                                {{ form_errors(form.name) }}
                                {{ form_label(form.name,'List name', {'attr': {'class': 'form-label'}} ) }}
                                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_errors(form.description) }}
                                {{ form_label(form.description,'Description', {'attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.description, {'attr': {'class': 'form-control','cols':'75','rows':'5' }}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(form.shared,'Public', {'attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.shared) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_row(form.save,{'attr': {'class': 'btn btn-primary form-control'}}) }}
                            </div>

                            <!-- ENd of the form-->
                            {{ form_end(form) }}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block javascripts %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"../admin/assets/js/require.min.js\"></script>


    <script src=\"../admin/assets/js/dashboard.js\"></script>
    <script src=\"../admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"../admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"../admin/assets/plugins/input-mask/plugin.js\"></script>

{% endblock %}", "user/editList.html.twig", "/home/coding/Rendu/symfony_project/templates/user/editList.html.twig");
    }
}
