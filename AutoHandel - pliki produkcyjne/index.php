<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skup Aut Śląsk, Katowice, Częstochowa, Sosnowiec, Gliwice | Gotówka od ręki</title>
    <meta name="description" content="Skup aut na całym śląsku, gotówka od ręki. Skup samochodów Śląskie. Skupujemy pojazdy wszystkich marek.">
    <meta name="keywords" content="skup aut na części śląsk, skup aut w każdym stanie w niemczech, auto skup śląsk, skup aut gliwice, skup aut katowice, skup aut za gotówkę śląsk, skup samochodów śląskie">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" inte    grity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/faq.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/aos.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vanilla-tilt.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact-form.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/contact.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/valuation-contact.js" defer></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/loader.js" defer></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("");
        })();
    </script>
</head>
<body onload="loader()">
    <div id="loading"></div>
    <header class="header">
        <nav class="nav">
            <div class="nav-logo">
                <h1>
                    <a href="#home" class="logo">AutoHandel</a>
                </h1>
            </div>
            <div class="nav-menu">
                <h1>
                    <a class="nav-link-1" href="#home">Strona główna</a>
                </h1>
                <h1>
                    <a class="nav-link-1" href="#valuation">Wyceń swój samochód</a>
                </h1>
                <h1>
                    <a class="nav-link-1" href="#aboutus">O nas</a>
                </h1>
                <h1>
                    <a class="nav-link-1" href="#faq">Informacje</a>
                </h1>
            </div>
            <div class="nav-button">
                <a href="#contact"><button class="btn-1">Kontakt</button></a>
            </div>
            <div class="nav-hamburger">
                <div class="btns menuToggle">
                    <ion-icon name="menu-outline"></ion-icon>
                    <ion-icon name="close-outline"></ion-icon>
                </div>
               </div>
            <div class="nav-list">
                <li onclick="myFunction()"><a href="#home">Strona główna</a></li>
                <li onclick="myFunction()"><a href="#valuation">Wyceń swój samochód</a></li>
                <li onclick="myFunction()"><a href="#aboutus">O nas</a></li>
                <li onclick="myFunction()"><a href="#contact">Kontakt</a></li>
            </div>
        </nav>
    </header>
    <div class="container">
        <main class="main" id="home">
            <div class="main-column-1" data-aos="fade-right">
                <h1 class="main-text-1">Darmowa wycena twojego samochodu</h1>
                <h2 class="main-text-2">Skupujemy samochody na terenie całego Śląska, <br>każdy samochód wyceniamy indywidualnie</h2>
                <h3 class="main-text-3">Pracujemy 24/7</h3>
                <div class="main-buttons">
                    <a href="#valuation"><button class="btn-2">Wyceń samochód</button></a>
                    <a href="#contact"><button class="btn-3">Skontaktuj się z nami</button></a>
                </div>
            </div>
            <div class="main-column-2" data-aos="fade-left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.webp" alt="" data-tilt>
            </div>
        </main>
        <section class="aboutus" id="aboutus" data-aos="fade-down">
            <div class="aboutus-text" data-aos="fade-left">
                <h2 class="aboutus-text-1">Kupimy twój samochód!</h2>
                <h3 class="aboutus-text-2">Jesteśmy firmą skupującą, samochody w każdym stanie technicznym do 10 tysięcy złotych.</h3>
                <h4 class="aboutus-text-3">Odpowiadamy natychmiastowo</h4>
                <div class="aboutus-button">
                    <a href="#contact"><button class="btn-4">Napisz do nas</button></a>
                </div>
            </div>
        </section>
        <section class="faq-container" id="faq" data-aos="fade-down">
            <div class="faq-text">
                <h2 class="faq-text-1">Znajdź odpowiedzi, których potrzebujesz</h2>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                  <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Jak długo czekam na wycenę?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Wycena samochodu, po rozpatrzeniu danych, które zostały wysłane przez formularz wyceny, przeprowadzana jest natychmiastowo przez naszych wykwalifikowanych mechaników. Analiza danych trwa do 24 godzin. </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Jakie samochody skupujemy?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Skupujemy wszystkie samochody, niezależnie od stanu technicznego do ceny 10 tysięcy złotych.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Jak długo jesteśmy na rynku?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Na rynku jesteśmy od 4 lat i mamy 98% zadowolonych klientów.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Kiedy otrzymam gotówkę?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Gotówkę otrzymasz od nas tego samego dnia, jeśli dojdzie do finalizacji transakcji.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Jak wyglądają wszystkie formalności?</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>Przyjeżdżamy do Państwa pod wskazany adres, wyceniamy pojazd, podpisujemy umowę, wypłacamy gotówkę i robimy przelew.<br>Sprzedaż auta nigdy nie była tak prosta!<br>Działamy szybko, a jednocześnie profesjonalnie - zaufało nam już setki klientów.</p>
                  </div>
                </div>
              </div>
        </section>
        <section class="contact" id="valuation">
            <h1 class="contact-text-1" data-aos="fade-down">Formularz wyceny</h1>
            <div class="container-form" data-aos="fade-down">
                <div class="form">
                  <div class="contact-info">
                    <h3 class="title">Informacje o nas</h3>
                    <p class="text">
                        Jeśli jesteś zainteresowany współpracą z nami to świetnie trafiłeś. <br>
                        Wypełnij formularz kontaktowy, wkrótce się do Ciebie odezwiemy!
                    </p>
                    <div class="info">
                      <div class="information">
                        <p>autohandelslaskie@gmail.com</p>
                      </div>
                      <div class="information">
                        <p>+48 786 671 410</p>
                      </div>
                      <div class="information">
                        <p>NIP: 9691607435</p>
                      </div>
                      <div class="information">
                        <p>Regon: 243218073</p>
                      </div>
                      <div class="information">
                        <p class="rodo">Administratorem danych osobowych jest www.skup-aut-slaskie.pl. Dane wpisane w formularzu kontaktowym będą przetwarzane w celu udzielenia odpowiedzi na przesłane zapytanie zgodnie z regulaminem.</p>
                      </div>
                    </div>
                    <div class="social-media">
                      <p>Social media:</p>
                      <div class="social-icons">
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="contact-form">
                    <form action="index.html" onsubmit="SendMail(event)">
                      <h3 class="title">Skontaktuj się z nami</h3>
                      <div class="input-container">
                        <input type="text" name="name" id="name" class="input" required />
                        <label for="">Imię</label>
                        <span>Imię</span>
                      </div>
                      <div class="input-container">
                        <input type="text" name="surname" id="surname" class="input" required />
                        <label for="">Nazwisko</label>
                        <span>Nazwisko</span>
                      </div>
                      <div class="input-container">
                        <input type="email" name="email" id="email" class="input" required />
                        <label for="">E-mail</label>
                        <span>E-mail</span>
                      </div>
                      <div class="input-container">
                        <input type="number" name="phone" id="phone" class="input" required />
                        <label for="">Numer telefonu</label>
                        <span>Numer telefonu</span>
                      </div>
                      <div class="input-container">
                        <input type="text" name="mark" id="mark" class="input" required />
                        <label for="">Marka pojazdu</label>
                        <span>Marka pojazdu</span>
                      </div>
                      <div class="input-container">
                        <input type="text" name="model" id="model" class="input" required />
                        <label for="">Model i typ pojazdu</label>
                        <span>Model i typ pojazdu</span>
                      </div>
                      <div class="input-container">
                        <input type="number" name="year" id="year" class="input" required/>
                        <label for="">Rok produkcji</label>
                        <span>Rok produkcji</span>
                      </div>
                      <div class="input-container">
                        <input type="number" name="price" id="price" class="input" required/>
                        <label for="">Twoja cena</label>
                        <span>Twoja cena</span>
                      </div>
                      <div class="input-container textarea">
                        <textarea name="message" id="message" class="input" required></textarea>
                        <label for="">Wiadomość i inne ważne informacje</label>
                        <span>Wiadomość i inne ważne informacje</span>
                      </div>
                      <input type="submit" value="Wyślij wiadomość" class="btn" />
                      <input type="reset" value="Zresetuj" class="btn" />
                    </form>
                  </div>
                </div>
              </div>
              <h1 class="contact-text-2" data-aos="fade-down">Kontakt</h1>
            <div class="container-form" id="contact" data-aos="fade-down">
                <div class="form">
                  <div class="contact-info">
                    <h3 class="title">Informacje o nas</h3>
                    <p class="text">
                        Jeśli jesteś zainteresowany współpracą z nami to świetnie trafiłeś. <br>
                        Wypełnij formularz kontaktowy, wkrótce się do Ciebie odezwiemy!
                    </p>
                    <div class="info">
                      <div class="information">
                        <p>autohandelslaskie@gmail.com</p>
                      </div>
                      <div class="information">
                        <p>+48 786 671 410</p>
                      </div>
                      <div class="information">
                        <p>NIP: 9691607435</p>
                      </div>
                      <div class="information">
                        <p>Regon: 243218073</p>
                      </div>
                      <div class="information">
                        <p class="rodo">Administratorem danych osobowych jest www.skup-aut-slaskie.pl. Dane wpisane w formularzu kontaktowym będą przetwarzane w celu udzielenia odpowiedzi na przesłane zapytanie zgodnie z regulaminem.</p>
                      </div>
                    </div>
                    <div class="social-media">
                      <p>Social media:</p>
                      <div class="social-icons">
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="contact-form">
                    <form action="index.html" onsubmit="SendMail(event)">
                      <h3 class="title">Skontaktuj się z nami</h3>
                      <div class="input-container">
                        <input type="text" name="name" id="name" class="input" required/>
                        <label for="">Imię</label>
                        <span>Imię</span>
                      </div>
                      <div class="input-container">
                        <input type="text" name="surname" id="surname" class="input" required />
                        <label for="">Nazwisko</label>
                        <span>Nazwisko</span>
                      </div>
                      <div class="input-container">
                        <input type="email" name="email" class="input" id="email" required/>
                        <label for="">E-mail</label>
                        <span>E-mail</span>
                      </div>
                      <div class="input-container">
                        <input type="number" name="phone" class="input" id="phone" required/>
                        <label for="">Numer telefonu</label>
                        <span>Numer telefonu</span>
                      </div>
                      <div class="input-container textarea">
                        <textarea name="message" class="input" id="message" required></textarea>
                        <label for="">Wiadomość</label>
                        <span>Wiadomość</span>
                      </div>
                      <input type="submit" value="Wyślij wiadomość" class="btn" />
                      <input type="reset" value="Zresetuj" class="btn" />
                    </form>
                  </div>
        </section>
    </div>
    <footer class="footer">
        <div class="copyright">
          <h4 class="copyright-text">Copyright © 2022 <a href="https://websitecoding.pl">WebsiteCoding.</a> Wszelkie prawa zastrzeżone.</h4>
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/policy-privacy/index.html" class="policy-privacy">Polityka Prywatności</a>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>