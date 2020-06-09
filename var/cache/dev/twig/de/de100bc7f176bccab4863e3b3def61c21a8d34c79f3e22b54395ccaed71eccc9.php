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

/* user/favoriteFilms.html.twig */
class __TwigTemplate_f1ebeb3a930625f34bb024c2e8740233a4b26ba3ad49092f614448ce9c7d5292 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/favoriteFilms.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/favoriteFilms.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/favoriteFilms.html.twig", 1);
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
    <title>Book</title>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <!--
    CSS
    ============================================= -->
    <link rel=\"stylesheet\" href=\"/css/linearicons.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" href=\"/css/navbar.css\">
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/modif.css\">

    <style>
        *{
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

<!-- Page Preloder -->

<header id=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between d-flex\">
            <div id=\"logo\">
                <a href=\"index.html\"><img height=\"35px\" src=\"/img/logo.png\" alt=\"\" title=\"\"/></a>
            </div>
            <nav id=\"nav-menu-container\">
                <ul class=\"nav-menu\">
                    <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                    ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 61
            echo "                        <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">Favorites</a></li>
                        <li><a href=\"/films/lists\">My list</a></li>
                        <li><a href=\"/editProfile/";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">Profile</a></li>
                        <a> <img id=\"logout\"><a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                        ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                            <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                        ";
            }
            // line 69
            echo "
                    ";
        } else {
            // line 71
            echo "                        <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                        <a> <img id=\"logout\"><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"
                                                style=\"color: white;\">Inscription</a></a>
                    ";
        }
        // line 75
        echo "
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\" style=\"text-decoration: underline;\" >Favorite films </h1>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 93
        $context["ligne"] = 0;
        // line 94
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 95
            echo "                    ";
            if (0 === twig_compare(((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 95, $this->source); })()) % 3), 0)) {
                // line 96
                echo "                        <div class=\"active-course-carusel\">
                    ";
            }
            // line 98
            echo "                    ";
            $context["film"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 98, $this->source); })()), "getMovie", [0 => twig_get_attribute($this->env, $this->source, $context["l"], "filmId", [], "any", false, false, false, 98)], "method", false, false, false, 98);
            // line 99
            echo "                    <div class=\"single-course item\">
                        <a href=\"/film/";
            // line 100
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 100))) : ("")), "html", null, true);
            echo "\">
                            ";
            // line 101
            $context["src"] = twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 101, $this->source); })()), "getImage", [0 => ((twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "poster_path", [], "any", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "poster_path", [], "any", false, false, false, 101))) : ("")), 1 => 3], "method", false, false, false, 101);
            // line 102
            echo "                            ";
            if ((0 === twig_compare((isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 102, $this->source); })()), null) ||  !twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "poster_path", [], "any", true, true, false, 102))) {
                // line 103
                echo "                                ";
                $context["src"] = "../img/not_available.png";
                // line 104
                echo "                            ";
            }
            // line 105
            echo "                            <img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 105, $this->source); })())), "html", null, true);
            echo "\" style=\"height=550px;\" alt=\"Film Poster\">
                            <div class=\"details\">
                                <a href=\"#\"><h4>  ";
            // line 107
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 107), "Votre Titre")) : ("Votre Titre")), "html", null, true);
            echo " </h4></a>
                                <i class=\"text-warning fas fa-star __favorite\"></i><!--étoile pour favoris-->
                                <p>
                                    ";
            // line 110
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "release_date", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "release_date", [], "any", false, false, false, 110), "Release Date")) : ("Release Date")), "html", null, true);
            echo "
                                </p>
                            </div>
                        </a>
                    </div>

                    ";
            // line 116
            if (0 === twig_compare(((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 116, $this->source); })()) % 3), 2)) {
                // line 117
                echo "                        </div>
                    ";
            }
            // line 119
            echo "                    ";
            $context["ligne"] = ((isset($context["ligne"]) || array_key_exists("ligne", $context) ? $context["ligne"] : (function () { throw new RuntimeError('Variable "ligne" does not exist.', 119, $this->source); })()) + 1);
            // line 120
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
            </div>
        </div>
    </section>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <div class=\"col-lg-5  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class=\"\" id=\"mc_embed_signup\">
                        <form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
                            <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">
                            <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
                            <div style=\"position: absolute; left: -5000px;\">
                                <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
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

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "<script src=\"/js/vendor/jquery-2.2.4.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"/js/vendor/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
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
        return "user/favoriteFilms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 179,  339 => 178,  274 => 121,  268 => 120,  265 => 119,  261 => 117,  259 => 116,  250 => 110,  244 => 107,  238 => 105,  235 => 104,  232 => 103,  229 => 102,  227 => 101,  223 => 100,  220 => 99,  217 => 98,  213 => 96,  210 => 95,  205 => 94,  203 => 93,  183 => 75,  177 => 72,  172 => 71,  168 => 69,  164 => 67,  162 => 66,  157 => 64,  153 => 63,  147 => 61,  145 => 60,  130 => 47,  120 => 46,  70 => 4,  60 => 3,  37 => 1,);
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
    <title>Book</title>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\" integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <!--
    CSS
    ============================================= -->
    <link rel=\"stylesheet\" href=\"/css/linearicons.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"/css/nice-select.css\">
    <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" href=\"/css/navbar.css\">
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/modif.css\">

    <style>
        *{
            text-decoration: none !important;
        }
    </style>

{% endblock %}

{% block body %}


<!-- Page Preloder -->

<header id=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"row align-items-center justify-content-between d-flex\">
            <div id=\"logo\">
                <a href=\"index.html\"><img height=\"35px\" src=\"/img/logo.png\" alt=\"\" title=\"\"/></a>
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
</header><!-- #header -->

    <section class=\"testomial-area section-gap\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-8\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\" style=\"text-decoration: underline;\" >Favorite films </h1>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                {% set ligne=0 %}
                {% for l in favoris %}
                    {% if ligne%3 == 0 %}
                        <div class=\"active-course-carusel\">
                    {% endif %}
                    {% set film=client.getMovie(l.filmId) %}
                    <div class=\"single-course item\">
                        <a href=\"/film/{{ film.id|default() }}\">
                            {% set src=client.getImage(film.poster_path|default(), 3 ) %}
                            {% if (film==null) or (film.poster_path is not defined) %}
                                {% set src='../img/not_available.png' %}
                            {% endif %}
                            <img class=\"img-fluid\" src=\"{{ asset(src ) }}\" style=\"height=550px;\" alt=\"Film Poster\">
                            <div class=\"details\">
                                <a href=\"#\"><h4>  {{ film.title|default ('Votre Titre') }} </h4></a>
                                <i class=\"text-warning fas fa-star __favorite\"></i><!--étoile pour favoris-->
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

            </div>
        </div>
    </section>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <div class=\"col-lg-5  col-md-6 col-sm-6\">
                <div class=\"single-footer-widget\">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class=\"\" id=\"mc_embed_signup\">
                        <form target=\"_blank\" novalidate=\"true\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"form-inline\">
                            <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Enter Email '\" required=\"\" type=\"email\">
                            <button class=\"click-btn btn btn-default\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></button>
                            <div style=\"position: absolute; left: -5000px;\">
                                <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
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
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"/js/vendor/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
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
", "user/favoriteFilms.html.twig", "/home/coding/Rendu/symfony_project/templates/user/favoriteFilms.html.twig");
    }
}
