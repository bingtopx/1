<?php
$GLOBALS['_ta_campaign_key'] = '8f68118932e0c129eb44996728c5844a';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=8f68118932e0c129eb44996728c5844a' parameter

require 'bootloader_69cdaf44f8caecdc2ad488fc75e9a4c9.php';

$campaign_id = 'q42c0g';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'custom_js':
        print $response['custom_js'];
        exit;             
    case 'reverse_proxy':
        if(!empty($_GET['rp'])) {
            reverse_proxy($response['url'], "tarp_69cdaf44f8caecdc2ad488fc75e9a4c9/");

            header('location: '.$_GET['rp']);
            exit;
        }

        print reverse_proxy($response['url'], "tarp_69cdaf44f8caecdc2ad488fc75e9a4c9/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <title>Finanzmodellierung</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Finanzmodellierung, Prognose, Planung, Finanzergebnisse, Modellierungstechniken" name="keywords" />
        <meta content="Erfolg durch präzise Finanzmodelle" name="description" />

        <link href="img/favicon.ico" rel="icon" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <h1 class="m-0">Finanzmodellierung</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                    <a href="#" class="nav-item nav-link">Heim</a>
                    <a href="#about" class="nav-item nav-link">Über uns</a>
                    <a href="#service" class="nav-item nav-link">Studiengang</a>
                    <a href="#contact" class="nav-item nav-link">Kontaktiere uns</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-4 animated slideInDown">Erfolg durch präzise Finanzmodelle</h1>
                                        <a href="#about" class="btn btn-primary py-3 px-5 animated slideInDown">Erkunde mehr</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6 mb-5">Über uns und unsere Kurse</h1>

                            <p class="mb-4">
                                Willkommen auf unserer Website für Kurse zur Finanzmodellierung! Wir sind die führenden Experten für Finanzanalysen und -prognosen. Unser Ziel ist es, Ihnen dabei zu helfen, die Fähigkeiten zur Verwendung von
                                Modellen zur Vorhersage und Planung von Finanzergebnissen zu erlernen.
                            </p>
                            <p class="mb-4">
                                Unsere Kurse zur Finanzmodellierung bieten umfassende Schulungen, die Sie mit den wichtigsten Fähigkeiten und Werkzeugen für die Finanzmodellierung und Datenanalyse ausstatten. Wir bieten sowohl
                                Einführungskurse für Einsteiger als auch Fortgeschrittenenprogramme für erfahrene Profis an.
                            </p>
                            <div class="border-top mt-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h5 class="mb-0">03088917788</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                                <i class="fa fa-envelope text-white"></i>
                                            </div>
                                            <h5 class="mb-0">fincourse@gmail.com</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-12 text-end">
                                <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-5">Warum sind wir</h1>
                        <p class="mb-5">
                            Wir haben uns für uns entschieden, weil wir führend in der Finanzmodellierung sind und viele zufriedene Studenten haben, die mit unseren Kursen erfolgreich waren. Hier sind einige Gründe, warum Sie sich für uns
                            entscheiden sollten:
                        </p>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;"></div>
                            <div class="ms-4">
                                <h5 class="mb-3">Expertenteam</h5>
                                <span>Unsere Tutoren sind erfahrene Fachleute, die in der Finanzbranche gearbeitet haben und über fundierte Kenntnisse der Finanzmodellierung verfügen.</span>
                            </div>
                        </div>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;"></div>
                            <div class="ms-4">
                                <h5 class="mb-3">Praxisorientierter Fokus</h5>
                                <span>Wir legen großen Wert auf praktische Fähigkeiten. Unsere Kurse bieten reale Aufgaben, Projekte und die Möglichkeit, mit echten Finanzdaten zu arbeiten.</span>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;"></div>
                            <div class="ms-4">
                                <h5 class="mb-3">Relevanz des Materials</h5>
                                <span>Wir verfolgen stets die neuesten Trends und Best Practices im Bereich der Finanzmodellierung. Sie lernen mit modernen Werkzeugen und Methoden.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="img/feature.jpg" alt="" style="object-fit: cover;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5" id="service">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-5">Unsere Kurse</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid" src="img/service-1.jpg" alt="" />
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon"></div>
                                <a class="h4 mx-4 mb-0" href="">Finanzmodellierung und Datenanalyse</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <img class="img-fluid" src="img/service-2.jpg" alt="" />
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon"></div>
                                <a class="h4 mx-4 mb-0" href="">Finanzprognosen in der Praxis</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <img class="img-fluid" src="img/service-3.jpg" alt="" />
                            <div class="d-flex align-items-center bg-light">
                                <div class="service-icon"></div>
                                <a class="h4 mx-4 mb-0" href="">Fortgeschrittene Finanzmodelle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid overflow-hidden my-5 px-lg-0" id="contact">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 quote-text" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
                        <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                            <h1 class="text-white mb-4">Verbinde dich mit uns</h1>
                            <p class="text-light mb-5">Wenn Sie Fragen haben oder weitere Informationen zu unseren Finanzmodellierungskursen wünschen, kontaktieren Sie uns bitte. Unser Team ist bereit, Ihnen zu helfen.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 quote-form" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
                        <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-white p-4 p-sm-5">
                                <form action="thankyou.php" method="post">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" required />
                                                <label for="gname">Ihren Namen</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email" required />
                                                <label for="gmail">Deine E-Mail</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="cname" placeholder="Child Name" required />
                                                <label for="cname">Dein Handy</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="cage" placeholder="Child Age" />
                                                <label for="cage">Thema</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px;"></textarea>
                                                <label for="message">Nachricht</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary py-3 px-5" type="submit">Schicken</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-5">Was sie über unsere Dienstleistungen sagen</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-left h-100">
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item text-center">
                                <img class="img-fluid mx-auto mb-4" src="img/testimonial-1.jpg" alt="" />
                                <p class="fs-5">
                                    Ich habe gerade den Kurs zur Finanzmodellierung abgeschlossen und bin begeistert! Die Inhalte waren gut strukturiert und verständlich erklärt. Jetzt fühle ich mich viel sicherer bei der Nutzung von
                                    Modellen für finanzielle Prognosen und Planung. Kann den Kurs nur empfehlen!
                                </p>
                                <h5>Sophia Müller</h5>
                            </div>
                            <div class="testimonial-item text-center">
                                <img class="img-fluid mx-auto mb-4" src="img/testimonial-2.jpg" alt="" />
                                <p class="fs-5">
                                    Der Kurs zur Finanzmodellierung war genau das, was ich gesucht habe. Die Dozenten waren äußerst kompetent und konnten komplexe Konzepte leicht verständlich vermitteln. Dank des Kurses habe ich nun die
                                    Fähigkeiten, um genaue Finanzprognosen zu erstellen und meine finanziellen Ergebnisse effektiv zu planen. Ein absolut lohnenswertes Training!
                                </p>
                                <h5>Maximilian Wager</h5>
                            </div>
                            <div class="testimonial-item text-center">
                                <img class="img-fluid mx-auto mb-4" src="img/testimonial-3.jpg" alt="" />
                                <p class="fs-5">
                                    Als Finanzexpertin war ich auf der Suche nach einem Kurs, der meine Kenntnisse in der Finanzmodellierung erweitert. Ich wurde nicht enttäuscht! Der Kurs war anspruchsvoll, aber äußerst lehrreich. Ich habe
                                    wertvolle Einblicke in die Verwendung von Modellen für finanzielle Prognosen gewonnen. Absolut empfehlenswert!
                                </p>
                                <h5>Emma Schmidt</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-right h-100">
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                            <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Finanzmodellierung</h1>
                        <span>Erfolg durch präzise Finanzmodelle</span>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">In Kontakt kommen</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Joachimsthaler Str. 19, 10719 Berlin</p>
                        <p><i class="fa fa-phone-alt me-3"></i>03088917788</p>
                        <p><i class="fa fa-envelope me-3"></i>fincourse@gmail.com</p>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Schnelle Links</h5>
                        <a class="btn btn-link" href="privacy.php">Datenschutzerklärung</a>
                        <a class="btn btn-link" href="terms.php">Nutzungsbedingungen</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a href="#">Finanzmodellierung</a>, Alle Rechte vorbehalten.</div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
