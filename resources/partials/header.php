<nav class="navbar navbar-expand-md navbar-light sticky-top bg-white border-bottom">
    <a class="navbar-brand" href="/">
        <img class="nav-masza-logo" src="/img/logo.png" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-wrap justify-content-center align-items-center flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Strona Główna</a>
            </li>
            <li class="nav-item dropdown" id="ofertaDropdown">
                <a class="nav-link" id="navbarOfertaDropdown" href="/oferta.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta</a>
                <div class="dropdown-menu" aria-labelledby="navbarOfertaDropdown">
                    <a class="dropdown-item" href="/oferta.php#tłumaczenia">Tłumaczenia</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-azbuka">Dla dzieci</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-ogolny">Ogólne</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-specjalistyczny">Specjalistyczne</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-egzaminacyjny">Egzaminacyjne</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-indywidualny">Indywidualne</a>
                    <a class="dropdown-item" href="/oferta.php#kurs-polski-dla-obcokrajowcow">Polski dla obcokrajowców</a>
                </div>
                <script>
                    // JavaScript to navigate to "/oferta.php" when the "Oferta" link is clicked
                    document.getElementById('navbarOfertaDropdown').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default click behavior
                        window.location.href = "/oferta.php";
                    });
                    // JavaScript to expand the dropdown menu on mouseover
                    document.getElementById('ofertaDropdown').addEventListener('mouseover', function() {
                        $('#navbarOfertaDropdown').dropdown('show');
                    });
                    // JavaScript to collapse the dropdown menu on mouseout
                    document.getElementById('ofertaDropdown').addEventListener('mouseout', function() {
                        $('#navbarOfertaDropdown').dropdown('hide');
                    });
                </script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cennik.php">Cennik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kontakt.php">Kontakt</a>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <a class="nav-item nav-link" href="https://www.facebook.com/CJMasza/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 10h-2v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667h1.442v-2.5h-2.404c-1.798 0-2.596.792-2.596 2.308v1.692z" />
                </svg>
            </a>
            <a class="nav-item nav-link" href="https://www.instagram.com/cjmasza/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.008 14.408c1.299 0 2.354-1.056 2.354-2.354 0-.704-.312-1.337-.803-1.769-.174-.151-.368-.278-.58-.374-.297-.135-.625-.21-.971-.21-.347 0-.675.075-.971.21-.211.096-.406.223-.578.374-.492.432-.805 1.064-.805 1.769.001 1.298 1.057 2.354 2.354 2.354zm.008-4.093c.961 0 1.738.778 1.738 1.739 0 .961-.777 1.74-1.738 1.74s-1.738-.779-1.738-1.74c0-.96.777-1.739 1.738-1.739zm2.611.185h3.389v5.139c0 1.304-1.058 2.361-2.361 2.361h-7.246c-1.305 0-2.393-1.057-2.393-2.361v-5.139h3.373c-.271.457-.436.985-.436 1.554 0 1.688 1.367 3.055 3.055 3.055 1.687 0 3.055-1.368 3.055-3.055 0-.569-.164-1.097-.436-1.554zm1.028-4.5h-6.139v2.5h-.5v-2.5h-.5v2.5h-.5v-2.461c-.174.028-.341.071-.5.134v2.327h-.5v-2.051c-.602.428-1 1.123-1 1.912v1.639h3.736c.584-.642 1.399-1 2.256-1 .86 0 1.675.362 2.255 1h3.753v-1.64c0-1.303-1.058-2.36-2.361-2.36zm1.361 2.632c0 .203-.166.368-.373.368h-1.255c-.205 0-.372-.165-.372-.368v-1.265c0-.202.167-.367.372-.367h1.255c.207 0 .373.165.373.367v1.265z"/>
                </svg>
            </a>
            <a class="navbar-brand" href="tel:+48888849514" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 28 28">
                    <path d="m27.728 20.384-4.242-4.242a1.982 1.982 0 0 0-1.413-.586h-.002c-.534 0-1.036.209-1.413.586L17.83 18.97l-8.485-8.485 2.828-2.828c.78-.78.78-2.05-.001-2.83L7.929.585A1.986 1.986 0 0 0 6.516 0h-.001C5.98 0 5.478.209 5.101.587L.858 4.83C.729 4.958-.389 6.168.142 8.827c.626 3.129 3.246 7.019 7.787 11.56 6.499 6.499 10.598 7.937 12.953 7.937 1.63 0 2.426-.689 2.604-.867l4.242-4.242c.378-.378.587-.881.586-1.416 0-.534-.208-1.037-.586-1.415zm-5.656 5.658c-.028.028-3.409 2.249-12.729-7.07C-.178 9.452 2.276 6.243 2.272 6.244L6.515 2l4.243 4.244-3.535 3.535a.999.999 0 0 0 0 1.414l9.899 9.899a.999.999 0 0 0 1.414 0l3.535-3.536 4.243 4.244-4.242 4.242z"/>
                </svg>
            </a>
        </ul>
    </div>
</nav>