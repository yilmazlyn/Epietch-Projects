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

/* home/index.html.twig */
class __TwigTemplate_8a9488dbf320ac5001768b9e67af8f9c562ec5ec53561821bd987db33f0f70cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"img/fav.png\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"codepixer\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <!-- Site Title -->
    <title>My Movie List</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">


    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/linearicons.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/linearicons.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/magnific-popup.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/nice-select.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/animate.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/navbar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/admin/assets/css/dashboard.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/modif.css"), "html", null, true);
        echo "\" />

    <style>
        * {
            text-decoration: none !important;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "

<div class=\"header\" class=\"text-center\">
    <!-- Page Preloder -->
    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                        <li>
                            <div class=\"navbar\">
                                <div class=\"dropdown\" style=\"top: -7px; right: 12px\">
                                <span class=\"dropbtn\">DATES
                                    <i class=\"fa fa-caret-down\"></i>
                                </span>
                                    <div class=\"dropdown-content\">
                                        ";
        // line 70
        echo "                                        <a href=\"/home/1/year/2000\">2000</a>
                                        <a href=\"/home/1/year/2001\">2001</a>
                                        <a href=\"/home/1/year/2002\">2002</a>
                                        <a href=\"/home/1/year/2003\">2003</a>
                                        <a href=\"/home/1/year/2004\">2004</a>
                                        <a href=\"/home/1/year/2005\">2005</a>
                                        <a href=\"/home/1/year/2006\">2006</a>
                                        <a href=\"/home/1/year/2007\">2007</a>
                                        <a href=\"/home/1/year/2008\">2008</a>
                                        <a href=\"/home/1/year/2009\">2009</a>
                                        <a href=\"/home/1/year/2010\">2010</a>
                                        <a href=\"/home/1/year/2011\">2011</a>

                                    </div>
                                </div>
                                <div class=\"dropdown\" style=\"top: -7px;\">
                                <span class=\"dropbtn\">GENRES
                                    <i class=\"fa fa-caret-down\"></i>
                                </span>
                                    <div class=\"dropdown-content\">
                                        ";
        // line 93
        echo "                                        <a href=\"/home/1/28\">Action</a>
                                        <a href=\"/home/1/12\">Adventure</a>
                                        <a href=\"/home/1/16\">Animation</a>
                                        <a href=\"/home/1/35\">Comedy</a>
                                        <a href=\"/home/1/80\">Crime</a>
                                        <a href=\"/home/1/99\">Documentary</a>
                                        <a href=\"/home/1/18\">Drama</a>
                                        <a href=\"/home/1/10751\">Family</a>
                                        <a href=\"/home/1/14\">Fantasy</a>
                                        <a href=\"/home/1/36\">History</a>
                                        <a href=\"/home/1/27\">Horror</a>
                                        <a href=\"/home/1/10402\">Music</a>
                                        <a href=\"/home/1/9648\">Mystery</a>
                                        <a href=\"/home/1/10749\">Romance</a>
                                        <a href=\"/home/1/878\">Science Fiction</a>
                                        <a href=\"/home/1/10770\">TV Movie</a>
                                        <a href=\"/home/1/53\">Thriller</a>
                                        <a href=\"/home/1/10752\">War</a>
                                        <a href=\"/home/1/37\">Western</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        ";
        // line 116
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 117
            echo "                            <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\">Favorites</a></li>
                            <li><a href=\"/films/lists\">My list</a></li>
                            <li><a href=\"/editProfile/";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\">Profile</a></li>
                            <a> <img id=\"logout\"><a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                            ";
            // line 122
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 123
                echo "                                <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                            ";
            }
            // line 125
            echo "
                        ";
        } else {
            // line 127
            echo "                            <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                            <a> <img id=\"logout\"><a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                                                    style=\"color: white;\">Inscription</a></a>
                        ";
        }
        // line 131
        echo "
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
</div>
<div class=\"content\">

    <!-- start banner Area -->
    <section class=\"banner-area\" id=\"homeClick\" data-id=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row fullscreen d-flex align-items-center justify-content-start\">
                <!--a href=\"/film/";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
        echo "\" -->
                <div class=\"banner-content col-lg-7\">
                    <h5 class=\"text-white text-uppercase\"></h5>
                    <h1 class=\"text-uppercase\">
                        ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 148, $this->source); })()), "title", [], "any", false, false, false, 148), "html", null, true);
        echo "
                    </h1>
                    <p class=\"text-white pt-20 pb-20\">
                        Release Date
                    <h3 class=\"text-white pt-20 pb-20\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 152, $this->source); })()), "release_date", [], "any", false, false, false, 152), "html", null, true);
        echo "</h3>
                    </p>
                </div>
                <div class=\"col-lg-5 banner-right\">
                    <img class=\"img-fluid\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 156, $this->source); })()), "getImage", [0 => twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 156, $this->source); })()), "poster_path", [], "any", false, false, false, 156), 1 => 4], "method", false, false, false, 156)), "html", null, true);
        echo "\"
                         alt=\"Last Film Poster\">
                </div>
                <!--/a-->
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start testomial Area -->
    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Les films les plus populaires</h1>
                        <p>Liste des films prises du site TMDB</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-tstimonial-carusel\">
                    ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 178, $this->source); })()), "results", [], "any", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 179
            echo "                        ";
            $context["src"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 179, $this->source); })()), "getImage", [0 => ((twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 179), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 179, $this->source); })()), "poster_path", [], "any", false, false, false, 179))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 179, $this->source); })()), "poster_path", [], "any", false, false, false, 179))), 1 => 3], "method", false, false, false, 179);
            // line 180
            echo "                        ";
            if ((0 === twig_compare($context["film"], null) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 180), null))) {
                // line 181
                echo "                            ";
                $context["src"] = "../img/not_available.png";
                // line 182
                echo "                        ";
            }
            // line 183
            echo "                        <div class=\"single-testimonial item\">
                            <a href=\"/film/";
            // line 184
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", true, true, false, 184)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 184), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, false, 184))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, false, 184))), "html", null, true);
            echo "\">
                                <img class=\"mx-auto\" src=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 185, $this->source); })())), "html", null, true);
            echo "\" alt=\"Image Poster\">
                                <p class=\"desc\">
                                </p>
                                <h4> ";
            // line 188
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", true, true, false, 188)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 188), "Titre_Film")) : ("Titre_Film")), "html", null, true);
            echo "</h4>
                                    ";
            // line 189
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", false, false, false, 189), "Release Date")) : ("Release Date")), "html", null, true);
            echo "
                                </p>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->
    <!-- Start course Area -->
    <section class=\"course-area section-gap\" id=\"course\">
        <div class=\"container\">
            <div class=\"page-header d-flex justify-content-between\">
                <div class=\"col-lg-3 ml-auto\">
                    <form method=\"POST\" action=\"/searchFilm\" class=\"input-icon my-3 my-lg-0\">
                        <div class=\"d-flex justify-content-between\">
                            <select name=\"type\" id=\"typeSearch\">
                                <option value=\"film\">Film</option>
                                <option value=\"acteur\">Acteur</option>
                            </select>
                            <input name=\"text\" type=\"search\" class=\"form-control header-search\"
                                   placeholder=\"Search&hellip;\"
                                   tabindex=\"1\">
                            <button type=\"submit\"><i class=\"fe fe-search\"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <br><br>
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">All Films</h1>
                        <p>Please enjoy!</p>
                    </div>
                </div>
            </div>
            <!--Debut de l'affichage -->
            <div class=\"row\">
                ";
        // line 229
        $context["ligne"] = 0;
        // line 230
        echo "                ";
        if ( !(null === (isset($context["pageMovies"]) || array_key_exists("pageMovies", $context) ? $context["pageMovies"] : (function () { throw new RuntimeError('Variable "pageMovies" does not exist.', 230, $this->source); })()))) {
            // line 231
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pageMovies"]) || array_key_exists("pageMovies", $context) ? $context["pageMovies"] : (function () { throw new RuntimeError('Variable "pageMovies" does not exist.', 231, $this->source); })()), "results", [], "any", false, false, false, 231));
            foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
                // line 232
                echo "                        ";
                if (0 === twig_compare(((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 232, $this->source); })()) % 3), 0)) {
                    // line 233
                    echo "                            <div class=\"active-course-carusel\">
                        ";
                }
                // line 235
                echo "
                        <div class=\"single-course item\">
                            <a href=\"/film/";
                // line 237
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", true, true, false, 237)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 237), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237))), "html", null, true);
                echo "\">
                                ";
                // line 238
                $context["src"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 238, $this->source); })()), "getImage", [0 => ((twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", true, true, false, 238)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 238), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 238, $this->source); })()), "poster_path", [], "any", false, false, false, 238))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 238, $this->source); })()), "poster_path", [], "any", false, false, false, 238))), 1 => 3], "method", false, false, false, 238);
                // line 239
                echo "                                ";
                if ((0 === twig_compare($context["film"], null) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 239), null))) {
                    // line 240
                    echo "                                    ";
                    $context["src"] = "../img/not_available.png";
                    // line 241
                    echo "                                ";
                }
                // line 242
                echo "                                <img class=\"img-fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 242, $this->source); })())), "html", null, true);
                echo "\" style=\"height=550px;\" alt=\"Film Poster\">
                                <div class=\"details\">
                                    <a href=\"#\"><h4>  ";
                // line 244
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", true, true, false, 244)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 244), "Votre Titre")) : ("Votre Titre")), "html", null, true);
                echo " </h4></a>
                                    <p>
                                        ";
                // line 246
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", true, true, false, 246)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", false, false, false, 246), "Release Date")) : ("Release Date")), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </a>
                        </div>

                        ";
                // line 252
                if (0 === twig_compare(((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 252, $this->source); })()) % 3), 2)) {
                    // line 253
                    echo "                            </div>
                        ";
                }
                // line 255
                echo "                        ";
                $context["ligne"] = ((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 255, $this->source); })()) + 1);
                // line 256
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                ";
        } else {
            // line 258
            echo "                    <h3 style=\"margin: 0px auto 20px auto; color: red\">Nothing found</h3>
                ";
        }
        // line 260
        echo "
            </div>
        </div>
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
                ";
        // line 268
        if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 268, $this->source); })()), "total_pages", [], "any", false, false, false, 268), 6)) {
            // line 269
            echo "                ";
            // line 270
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 270, $this->source); })()), "total_pages", [], "any", false, false, false, 270)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 271
                echo "                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "                ";
        } else {
            // line 274
            echo "                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/1\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/2\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/3\">3</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/4\">4</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"\">...</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 279, $this->source); })()), "total_pages", [], "any", false, false, false, 279), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 279, $this->source); })()), "total_pages", [], "any", false, false, false, 279), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 281
        echo "                    <a class=\"page-link\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <!-- End course Area -->

    <!-- Start testomial Area -->
    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Les films les plus populaires</h1>
                        <p>Liste des films prises du site TMDB</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-tstimonial-carusel\">
                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pop"]) || array_key_exists("pop", $context) ? $context["pop"] : (function () { throw new RuntimeError('Variable "pop" does not exist.', 301, $this->source); })()), "results", [], "any", false, false, false, 301));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 302
            echo "                        ";
            $context["src"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 302, $this->source); })()), "getImage", [0 => ((twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", true, true, false, 302)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 302), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 302, $this->source); })()), "poster_path", [], "any", false, false, false, 302))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 302, $this->source); })()), "poster_path", [], "any", false, false, false, 302))), 1 => 3], "method", false, false, false, 302);
            // line 303
            echo "                        ";
            if ((0 === twig_compare($context["film"], null) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["film"], "poster_path", [], "any", false, false, false, 303), null))) {
                // line 304
                echo "                            ";
                $context["src"] = "../img/not_available.png";
                // line 305
                echo "                        ";
            }
            // line 306
            echo "                        <div class=\"single-testimonial item\">
                            <a href=\"/film/";
            // line 307
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 307), twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307))) : (twig_get_attribute($this->env, $this->source, (isset($context["lastM"]) || array_key_exists("lastM", $context) ? $context["lastM"] : (function () { throw new RuntimeError('Variable "lastM" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307))), "html", null, true);
            echo "\">
                                <img class=\"mx-auto\" src=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 308, $this->source); })())), "html", null, true);
            echo "\" alt=\"Image Poster\">
                                <p class=\"desc\">
                                </p>
                                <h4> ";
            // line 311
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 311), "Titre_Film")) : ("Titre_Film")), "html", null, true);
            echo "</h4>
                                <p>
                                    ";
            // line 313
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", true, true, false, 313)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["film"], "release_date", [], "any", false, false, false, 313), "Release Date")) : ("Release Date")), "html", null, true);
            echo "
                                </p>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

    <!-- start footer Area -->
    <footer class=\"footer-area section-gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>About Us</h6>
                        <p>
                            Top readers here.
                        </p>
                        <p class=\"footer-text\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\"
                                  action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                  method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                       onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                                       required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                                             aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                           type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                    <div class=\"single-footer-widget\">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class=\"footer-social d-flex align-items-center\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 383
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 384
        echo "        <script src=\"/js/vendor/jquery-2.2.4.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
                integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
                crossorigin=\"anonymous\"></script>
        <script src=\"/js/vendor/bootstrap.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        <script src=\"/js/easing.min.js\"></script>
        <script src=\"/js/hoverIntent.js\"></script>
        <script src=\"/js/superfish.min.js\"></script>
        <script src=\"/js/jquery.ajaxchimp.min.js\"></script>
        <script src=\"/js/jquery.magnific-popup.min.js\"></script>
        <script src=\"/js/owl.carousel.min.js\"></script>
        <script src=\"/js/jquery.sticky.js\"></script>
        <script src=\"/js/jquery.nice-select.min.js\"></script>
        <script src=\"/js/parallax.min.js\"></script>
        <script src=\"/js/waypoints.min.js\"></script>
        <script src=\"/js/jquery.counterup.min.js\"></script>
        <script src=\"/js/mail-script.js\"></script>
        <script src=\"/js/main.js\"></script>
        <script src=\"/js/global.js\"></script>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 384,  679 => 383,  606 => 318,  595 => 313,  590 => 311,  584 => 308,  580 => 307,  577 => 306,  574 => 305,  571 => 304,  568 => 303,  565 => 302,  561 => 301,  539 => 281,  532 => 279,  525 => 274,  522 => 273,  515 => 271,  510 => 270,  508 => 269,  506 => 268,  496 => 260,  492 => 258,  489 => 257,  483 => 256,  480 => 255,  476 => 253,  474 => 252,  465 => 246,  460 => 244,  454 => 242,  451 => 241,  448 => 240,  445 => 239,  443 => 238,  439 => 237,  435 => 235,  431 => 233,  428 => 232,  423 => 231,  420 => 230,  418 => 229,  381 => 194,  370 => 189,  366 => 188,  360 => 185,  356 => 184,  353 => 183,  350 => 182,  347 => 181,  344 => 180,  341 => 179,  337 => 178,  312 => 156,  305 => 152,  298 => 148,  291 => 144,  285 => 141,  273 => 131,  267 => 128,  262 => 127,  258 => 125,  254 => 123,  252 => 122,  247 => 120,  243 => 119,  237 => 117,  235 => 116,  210 => 93,  188 => 70,  166 => 47,  156 => 46,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"img/fav.png\">
    <!-- Author Meta -->
    <meta name=\"author\" content=\"codepixer\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <!-- Site Title -->
    <title>My Movie List</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">


    <link rel=\"stylesheet\" href=\"{{ asset('/css/linearicons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/linearicons.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/font-awesome.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/magnific-popup.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/nice-select.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/animate.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/owl.carousel.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/main.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/navbar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/admin/assets/css/dashboard.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('/css/modif.css') }}\" />

    <style>
        * {
            text-decoration: none !important;
        }
    </style>

{% endblock %}

{% block body %}


<div class=\"header\" class=\"text-center\">
    <!-- Page Preloder -->
    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                        <li>
                            <div class=\"navbar\">
                                <div class=\"dropdown\" style=\"top: -7px; right: 12px\">
                                <span class=\"dropbtn\">DATES
                                    <i class=\"fa fa-caret-down\"></i>
                                </span>
                                    <div class=\"dropdown-content\">
                                        {# {% for genre in genres.genres %}
                                         <a href=\"/home/1/{{ genre.id }}\">{{ genre.name }}</a>
                                         {% endfor %}#}
                                        <a href=\"/home/1/year/2000\">2000</a>
                                        <a href=\"/home/1/year/2001\">2001</a>
                                        <a href=\"/home/1/year/2002\">2002</a>
                                        <a href=\"/home/1/year/2003\">2003</a>
                                        <a href=\"/home/1/year/2004\">2004</a>
                                        <a href=\"/home/1/year/2005\">2005</a>
                                        <a href=\"/home/1/year/2006\">2006</a>
                                        <a href=\"/home/1/year/2007\">2007</a>
                                        <a href=\"/home/1/year/2008\">2008</a>
                                        <a href=\"/home/1/year/2009\">2009</a>
                                        <a href=\"/home/1/year/2010\">2010</a>
                                        <a href=\"/home/1/year/2011\">2011</a>

                                    </div>
                                </div>
                                <div class=\"dropdown\" style=\"top: -7px;\">
                                <span class=\"dropbtn\">GENRES
                                    <i class=\"fa fa-caret-down\"></i>
                                </span>
                                    <div class=\"dropdown-content\">
                                        {# {% for genre in genres.genres %}
                                         <a href=\"/home/1/{{ genre.id }}\">{{ genre.name }}</a>
                                         {% endfor %}#}
                                        <a href=\"/home/1/28\">Action</a>
                                        <a href=\"/home/1/12\">Adventure</a>
                                        <a href=\"/home/1/16\">Animation</a>
                                        <a href=\"/home/1/35\">Comedy</a>
                                        <a href=\"/home/1/80\">Crime</a>
                                        <a href=\"/home/1/99\">Documentary</a>
                                        <a href=\"/home/1/18\">Drama</a>
                                        <a href=\"/home/1/10751\">Family</a>
                                        <a href=\"/home/1/14\">Fantasy</a>
                                        <a href=\"/home/1/36\">History</a>
                                        <a href=\"/home/1/27\">Horror</a>
                                        <a href=\"/home/1/10402\">Music</a>
                                        <a href=\"/home/1/9648\">Mystery</a>
                                        <a href=\"/home/1/10749\">Romance</a>
                                        <a href=\"/home/1/878\">Science Fiction</a>
                                        <a href=\"/home/1/10770\">TV Movie</a>
                                        <a href=\"/home/1/53\">Thriller</a>
                                        <a href=\"/home/1/10752\">War</a>
                                        <a href=\"/home/1/37\">Western</a>
                                    </div>
                                </div>
                            </div>
                        </li>
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
    </header><!-- #header -->
</div>
<div class=\"content\">

    <!-- start banner Area -->
    <section class=\"banner-area\" id=\"homeClick\" data-id=\"{{ lastM.id }}\">
        <div class=\"container\">
            <div class=\"row fullscreen d-flex align-items-center justify-content-start\">
                <!--a href=\"/film/{{ lastM.id }}\" -->
                <div class=\"banner-content col-lg-7\">
                    <h5 class=\"text-white text-uppercase\"></h5>
                    <h1 class=\"text-uppercase\">
                        {{ lastM.title }}
                    </h1>
                    <p class=\"text-white pt-20 pb-20\">
                        Release Date
                    <h3 class=\"text-white pt-20 pb-20\">{{ lastM.release_date }}</h3>
                    </p>
                </div>
                <div class=\"col-lg-5 banner-right\">
                    <img class=\"img-fluid\" src=\"{{ asset(client.getImage(lastM.poster_path,4) ) }}\"
                         alt=\"Last Film Poster\">
                </div>
                <!--/a-->
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start testomial Area -->
    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Les films les plus populaires</h1>
                        <p>Liste des films prises du site TMDB</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-tstimonial-carusel\">
                    {% for film in pop.results %}
                        {% set src=client.getImage(film.poster_path|default(lastM.poster_path), 3 ) %}
                        {% if (film==null) or (film.poster_path==null) %}
                            {% set src='../img/not_available.png' %}
                        {% endif %}
                        <div class=\"single-testimonial item\">
                            <a href=\"/film/{{ film.id|default(lastM.id) }}\">
                                <img class=\"mx-auto\" src=\"{{ asset(src ) }}\" alt=\"Image Poster\">
                                <p class=\"desc\">
                                </p>
                                <h4> {{ film.title|default ('Titre_Film') }}</h4>
                                    {{ film.release_date|default ('Release Date') }}
                                </p>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->
    <!-- Start course Area -->
    <section class=\"course-area section-gap\" id=\"course\">
        <div class=\"container\">
            <div class=\"page-header d-flex justify-content-between\">
                <div class=\"col-lg-3 ml-auto\">
                    <form method=\"POST\" action=\"/searchFilm\" class=\"input-icon my-3 my-lg-0\">
                        <div class=\"d-flex justify-content-between\">
                            <select name=\"type\" id=\"typeSearch\">
                                <option value=\"film\">Film</option>
                                <option value=\"acteur\">Acteur</option>
                            </select>
                            <input name=\"text\" type=\"search\" class=\"form-control header-search\"
                                   placeholder=\"Search&hellip;\"
                                   tabindex=\"1\">
                            <button type=\"submit\"><i class=\"fe fe-search\"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <br><br>
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">All Films</h1>
                        <p>Please enjoy!</p>
                    </div>
                </div>
            </div>
            <!--Debut de l'affichage -->
            <div class=\"row\">
                {% set ligne=0 %}
                {% if pageMovies is not null %}
                    {% for film in pageMovies.results %}
                        {% if ligne%3 == 0 %}
                            <div class=\"active-course-carusel\">
                        {% endif %}

                        <div class=\"single-course item\">
                            <a href=\"/film/{{ film.id|default(lastM.id) }}\">
                                {% set src=client.getImage(film.poster_path|default(lastM.poster_path), 3 ) %}
                                {% if (film==null) or (film.poster_path==null) %}
                                    {% set src='../img/not_available.png' %}
                                {% endif %}
                                <img class=\"img-fluid\" src=\"{{ asset(src ) }}\" style=\"height=550px;\" alt=\"Film Poster\">
                                <div class=\"details\">
                                    <a href=\"#\"><h4>  {{ film.title|default ('Votre Titre') }} </h4></a>
                                    <p>
                                        {{ film.release_date|default ('Release Date') }}
                                    </p>
                                </div>
                            </a>
                        </div>

                        {% if ligne%3 == 2 %}
                            </div>
                        {% endif %}
                        {% set ligne=ligne+1 %}
                    {% endfor %}
                {% else %}
                    <h3 style=\"margin: 0px auto 20px auto; color: red\">Nothing found</h3>
                {% endif %}

            </div>
        </div>
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination justify-content-center\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
                {% if pop.total_pages<6 %}
                {#{% set i=0 %}#}
                {% for i in 0..pop.total_pages   %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                {% endfor %}
                {% else %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/1\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/2\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/3\">3</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/4\">4</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"\">...</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"/home/{{ pop.total_pages }}\">{{ pop.total_pages }}</a></li>
                {% endif %}
                    <a class=\"page-link\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <!-- End course Area -->

    <!-- Start testomial Area -->
    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Les films les plus populaires</h1>
                        <p>Liste des films prises du site TMDB</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"active-tstimonial-carusel\">
                    {% for film in pop.results %}
                        {% set src=client.getImage(film.poster_path|default(lastM.poster_path), 3 ) %}
                        {% if (film==null) or (film.poster_path==null) %}
                            {% set src='../img/not_available.png' %}
                        {% endif %}
                        <div class=\"single-testimonial item\">
                            <a href=\"/film/{{ film.id|default(lastM.id) }}\">
                                <img class=\"mx-auto\" src=\"{{ asset(src ) }}\" alt=\"Image Poster\">
                                <p class=\"desc\">
                                </p>
                                <h4> {{ film.title|default ('Titre_Film') }}</h4>
                                <p>
                                    {{ film.release_date|default ('Release Date') }}
                                </p>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

    <!-- start footer Area -->
    <footer class=\"footer-area section-gap\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>About Us</h6>
                        <p>
                            Top readers here.
                        </p>
                        <p class=\"footer-text\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-5  col-md-6 col-sm-6\">
                    <div class=\"single-footer-widget\">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class=\"\" id=\"mc_embed_signup\">
                            <form target=\"_blank\" novalidate=\"true\"
                                  action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                  method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                       onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\"
                                       required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\"
                                                                             aria-hidden=\"true\"></i></button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                           type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                    <div class=\"single-footer-widget\">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class=\"footer-social d-flex align-items-center\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    {% endblock %}

    {% block javascripts %}
        <script src=\"/js/vendor/jquery-2.2.4.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
                integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
                crossorigin=\"anonymous\"></script>
        <script src=\"/js/vendor/bootstrap.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        <script src=\"/js/easing.min.js\"></script>
        <script src=\"/js/hoverIntent.js\"></script>
        <script src=\"/js/superfish.min.js\"></script>
        <script src=\"/js/jquery.ajaxchimp.min.js\"></script>
        <script src=\"/js/jquery.magnific-popup.min.js\"></script>
        <script src=\"/js/owl.carousel.min.js\"></script>
        <script src=\"/js/jquery.sticky.js\"></script>
        <script src=\"/js/jquery.nice-select.min.js\"></script>
        <script src=\"/js/parallax.min.js\"></script>
        <script src=\"/js/waypoints.min.js\"></script>
        <script src=\"/js/jquery.counterup.min.js\"></script>
        <script src=\"/js/mail-script.js\"></script>
        <script src=\"/js/main.js\"></script>
        <script src=\"/js/global.js\"></script>



    {% endblock %}
", "home/index.html.twig", "/home/coding/Rendu/symfony_project/templates/home/index.html.twig");
    }
}
