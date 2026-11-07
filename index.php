<?php
$firma = 'Szprycha';
$rok = date('Y');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szprycha – Pracownia Rowerowa</title>
    <link rel="stylesheet" href="style.css">
    <!-- 1. Podpięty skrypt z atrybutem defer -->
    <script src="app.js" defer></script>
</head>
<body>

    <header>
        <h1>Szprycha</h1>
        <p>Lokalna pracownia rowerowa – serwis i naprawa</p>
        
        <!-- 2. Przycisk .menu-toggle przed nav -->
        <button class="menu-toggle" aria-expanded="false">Menu</button>

        <!-- 3. Dodana klasa .menu -->
        <nav class="menu">
            <ul>
                <li><a href="#oferta">Oferta</a></li>
                <li><a href="#cennik">Cennik</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="oferta">
            <h2>Nasza oferta</h2>
            <p>Zajmujemy się kompleksową obsługą rowerów miejskich, górskich, szosowych oraz gravelowych.</p>
            <ul>
                <li>Przeglądy sezonowe i gwarancyjne</li>
                <li>Regulacja przerzutek i hamulców</li>
                <li>Centrowanie i zaplatanie kół</li>
                <li>Serwis amortyzatorów i czyszczenie napędu</li>
                <li>Składanie rowerów od podstaw</li>
            </ul>
        </section>

        <section id="cennik">
            <h2>Cennik usług</h2>
            <table>
                <thead>
                    <tr>
                        <th>Usługa</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Przegląd podstawowy (regulacje, smarowanie, sprawdzenie śrub)</td>
                        <td>120 zł</td>
                    </tr>
                    <tr>
                        <td>Przegląd generalny (rozebranie, mycie i smarowanie całego roweru)</td>
                        <td>250 zł</td>
                    </tr>
                    <tr>
                        <td>Regulacja przerzutek (przód + tył)</td>
                        <td>40 zł</td>
                    </tr>
                    <tr>
                        <td>Regulacja hamulców</td>
                        <td>30 zł</td>
                    </tr>
                    <tr>
                        <td>Centrowanie koła</td>
                        <td>od 40 zł</td>
                    </tr>
                    <tr>
                        <td>Wymiana dętki lub opony</td>
                        <td>25 zł</td>
                    </tr>
                </tbody>
            </table>
            <p><small>* Ceny dotyczą samej robocizny i nie obejmują kosztu części zamiennych.</small></p>
        </section>

        <section id="kontakt">
            <h2>Kontakt</h2>
            <address>
                <p><strong>Pracownia Rowerowa „Szprycha”</strong></p>
                <p>ul. Rowerowa 12, 00-000 Miasto</p>
                <p>Telefon: <a href="tel:+48123456789">+48 123 456 789</a></p>
                <p>E-mail: <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
            </address>
            
            <h3>Godziny otwarcia:</h3>
            <ul>
                <li>Poniedziałek – Piątek: 10:00 – 18:00</li>
                <li>Sobota: 10:00 – 14:00</li>
                <li>Niedziela: nieczynne</li>
            </ul>
        </section>
    </main>

    <footer id="kontakt">
        <p>&copy; <?= $rok ?> <?= $firma ?></p>
    </footer>

</body>
</html>