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

/* user/editProfile.html.twig */
class __TwigTemplate_b607e0ddce3467d84c6b691463847f5a92eb06dba0152b9eaecb561dcda62f01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editProfile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/editProfile.html.twig", 1);
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
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
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
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 67
            echo "                                    <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                                    ";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    ";
            }
            // line 75
            echo "
                                ";
        } else {
            // line 77
            echo "                                    <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                                                            style=\"color: white;\">Inscription</a></a>
                                ";
        }
        // line 81
        echo "
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
            <div class=\"my-3 my-md-5\">
                <div class=\"container\">

                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Edit my profile</h1>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 card\">
                            <form class=\" p-3 form-group\" method=\"POST\" action=\"/saveUser/";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95), "html", null, true);
        echo "\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Username</label>
                                    <input type=\"text\" class=\"form-control\" name=\"username\"
                                           value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "username", [], "any", false, false, false, 100), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" readonly
                                           value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), "html", null, true);
        echo "\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">New password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">
                                        ";
        // line 114
        if ((isset($context["passwordError"]) || array_key_exists("passwordError", $context))) {
            // line 115
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["passwordError"]) || array_key_exists("passwordError", $context) ? $context["passwordError"] : (function () { throw new RuntimeError('Variable "passwordError" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "
                                        ";
        }
        // line 117
        echo "                                    </p>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Confirm new password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"passwordConfirm\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">

                                        ";
        // line 126
        if ((isset($context["password_erreur"]) || array_key_exists("password_erreur", $context))) {
            // line 127
            echo "                                            ";
            echo twig_escape_filter($this->env, (isset($context["password_erreur"]) || array_key_exists("password_erreur", $context) ? $context["password_erreur"] : (function () { throw new RuntimeError('Variable "password_erreur" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "
                                        ";
        }
        // line 129
        echo "                                    </p>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form>
                            <div class=\"form-group\">
                                <button type=\"button\" class=\"btn btn-danger del_account_section\">Delete account</button>
                            </div>

                            <div id=\"deleteAccount\" class=\"form-group h-0\" style=\"opacity: 0\">
                                <label class=\"form-label\">Confirm password to delete your account</label>
                                <input type=\"password\" class=\"form-control mb-5 password\" name=\"password\"
                                       value=\"\">
                                <p class=\"help-block text-danger passwordError\">
                                </p>
                                <button data-id=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "html", null, true);
        echo "\" class=\"btn btn-success del_account\">Confirm</button>
                                <button class=\"btn btn-warning\"><a href=\"/home\">Cancel</a></button>
                            </div>
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

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

    <script src=\"/admin/assets/js/require.min.js\"></script>


    <script src=\"/admin/assets/js/dashboard.js\"></script>
    <script src=\"/admin/assets/plugins/charts-c3/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/maps-google/plugin.js\"></script>
    <script src=\"/admin/assets/plugins/input-mask/plugin.js\"></script>
    <script src=\"/js/global.js\"></script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 160,  301 => 159,  278 => 145,  260 => 129,  254 => 127,  252 => 126,  241 => 117,  235 => 115,  233 => 114,  222 => 106,  213 => 100,  205 => 95,  189 => 81,  183 => 78,  178 => 77,  174 => 75,  170 => 73,  168 => 72,  163 => 70,  159 => 69,  153 => 67,  151 => 66,  136 => 53,  126 => 52,  70 => 4,  60 => 3,  37 => 1,);
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
                        <h1 class=\"page-title\">Edit my profile</h1>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 card\">
                            <form class=\" p-3 form-group\" method=\"POST\" action=\"/saveUser/{{ user.id }}\">

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Username</label>
                                    <input type=\"text\" class=\"form-control\" name=\"username\"
                                           value=\"{{ user.username }}\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" readonly
                                           value=\"{{ user.email }}\">
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">New password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">
                                        {% if(passwordError is defined) %}
                                            {{ passwordError }}
                                        {% endif %}
                                    </p>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"form-label\">Confirm new password</label>
                                    <input type=\"password\" class=\"form-control\" name=\"passwordConfirm\"
                                           value=\"\">
                                    <p class=\"help-block text-danger\">

                                        {% if(password_erreur is defined) %}
                                            {{ password_erreur }}
                                        {% endif %}
                                    </p>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Save\">
                                </div>
                            </form>
                            <div class=\"form-group\">
                                <button type=\"button\" class=\"btn btn-danger del_account_section\">Delete account</button>
                            </div>

                            <div id=\"deleteAccount\" class=\"form-group h-0\" style=\"opacity: 0\">
                                <label class=\"form-label\">Confirm password to delete your account</label>
                                <input type=\"password\" class=\"form-control mb-5 password\" name=\"password\"
                                       value=\"\">
                                <p class=\"help-block text-danger passwordError\">
                                </p>
                                <button data-id=\"{{ user.id }}\" class=\"btn btn-success del_account\">Confirm</button>
                                <button class=\"btn btn-warning\"><a href=\"/home\">Cancel</a></button>
                            </div>
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
    <script src=\"/js/global.js\"></script>



{% endblock %}", "user/editProfile.html.twig", "/home/coding/Rendu/symfony_project/templates/user/editProfile.html.twig");
    }
}
