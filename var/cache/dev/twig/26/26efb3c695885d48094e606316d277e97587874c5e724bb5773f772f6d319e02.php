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

/* user/createList.html.twig */
class __TwigTemplate_390c0bdc73ffee04e7a0bb8952aad801f3e0c6dc0c05f766de7aae1b6bc86292 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/createList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/createList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/createList.html.twig", 1);
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
        echo "
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
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
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
        .mrg{
            margin-right: 10px;
        }

        .dng{
            text-decoration: none;
            color: white;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                ";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 75
            echo "                                    <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                                    ";
            // line 80
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 81
                echo "                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    ";
            }
            // line 83
            echo "
                                ";
        } else {
            // line 85
            echo "                                    <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                                                            style=\"color: white;\">Inscription</a></a>
                                ";
        }
        // line 89
        echo "
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>


            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Add new list</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start');
        echo "
                            <!--Insert the form-->
                            <!--form class=\"card p-3 form-group\" method=\"POST\" action=\"\"-->
                            <div class=\"my-custom-class-for-errors\">
                                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'errors');
        echo "
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("Succeed"), "html", null, true);
        echo "\"
                            >
                            <div class=\"form-group\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), 'errors');
        echo "
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118), 'label', ["attr" => ["class" => "form-label"], "label" => "List name"]);
        echo "
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "description", [], "any", false, false, false, 123), 'errors');
        echo "
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), 'label', ["attr" => ["class" => "form-label"], "label" => "Description"]);
        echo "
                                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "description", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "cols" => "75", "rows" => "5"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "shared", [], "any", false, false, false, 128), 'label', ["attr" => ["class" => "form-label"], "label" => "Public"]);
        echo "
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "shared", [], "any", false, false, false, 129), 'widget');
        echo "
                            </div>

                            <div class=\"form-group d-flex\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "save", [], "any", false, false, false, 133), 'row', ["attr" => ["class" => "btn btn-success mrg"]]);
        echo "
                                <button class=\"btn btn-danger dng\" type=\"button\"><a href=\"/films/lists\">Cancel</a></button>
                            </div>
                            </form>
                            <!-- ENd of the form-->
                            ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
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

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/createList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 151,  305 => 150,  284 => 138,  276 => 133,  269 => 129,  265 => 128,  259 => 125,  255 => 124,  251 => 123,  244 => 119,  240 => 118,  236 => 117,  230 => 114,  224 => 111,  217 => 107,  197 => 89,  191 => 86,  186 => 85,  182 => 83,  178 => 81,  176 => 80,  171 => 78,  167 => 77,  161 => 75,  159 => 74,  145 => 62,  135 => 61,  70 => 4,  60 => 3,  37 => 1,);
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
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
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
        .mrg{
            margin-right: 10px;
        }

        .dng{
            text-decoration: none;
            color: white;
        }
    </style>

{% endblock %}

{% block body %}

    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\"/></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                {% if is_granted('ROLE_USER') %}
                                    <li><a href=\"/films/favorite/{{ app.user.id }}\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/{{ app.user.id }}\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_logout') }}\" style=\"color: white;\">logout</a></a>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    {% endif %}

                                {% else %}
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_login') }}\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_register') }}\"
                                                            style=\"color: white;\">Inscription</a></a>
                                {% endif %}

                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>


            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Add new list</h1>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            {{ form_start(form) }}
                            <!--Insert the form-->
                            <!--form class=\"card p-3 form-group\" method=\"POST\" action=\"\"-->
                            <div class=\"my-custom-class-for-errors\">
                                {{ form_errors(form) }}
                            </div>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('Succeed') }}\"
                            >
                            <div class=\"form-group\">
                                {{ form_errors(form.name) }}
                                {{ form_label(form.name,'List name', {'attr': {'class': 'form-label'}}) }}
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

                            <div class=\"form-group d-flex\">
                                {{ form_row(form.save,{'attr': {'class': 'btn btn-success mrg'}}) }}
                                <button class=\"btn btn-danger dng\" type=\"button\"><a href=\"/films/lists\">Cancel</a></button>
                            </div>
                            </form>
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

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>

{% endblock %}

", "user/createList.html.twig", "/home/coding/Rendu/symfony_project/templates/user/createList.html.twig");
    }
}
