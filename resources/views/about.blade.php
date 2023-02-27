@extends('layouts.app')

@section('content')

    <div class="bd-example" >
        <div class="row">
            <div class="col-3">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">setter</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">prokop</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">biliyk</font></font></a>
                        </nav>
                        <a class="nav-link" href="#item-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">libero</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">macatyxa</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mamcyr</font></font></a>
                        </nav>
                        <a class="nav-link active" href="#item-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-3-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3-1</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-3-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3-2</font></font></a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col">
                <div  style="height: 800px; background-color: white; overflow-y: scroll" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                    <div id="item-1">
                        <div id="item-1-1">
                            <div class="row justify-between">
                                <div class="col card shadow-sm">
                                    <img class="team_img bd-placeholder-img card-img-top" src="img/team/8.jpeg" alt="omelchenko">
                                </div>
                                <div class="col items-center">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="team_name my-0">Omelchenko Artem</h4>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>
                                                <li class="card_text">REACH <span class="card_subtext">320</span></li>
                                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>
                                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>
                                            </ul>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-2">
                            <div class="row justify-between">
                                <div class="col card shadow-sm">
                                    <img class="team_img bd-placeholder-img card-img-top" src="img/team/16.jpeg" alt="omelchenko">
                                </div>
                                <div class="col items-center">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="team_name my-0">Omelchenko Artem</h4>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>
                                                <li class="card_text">REACH <span class="card_subtext">320</span></li>
                                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>
                                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>
                                            </ul>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item-2">
                        <div id="item-2-1">
                            <div class="row justify-between">
                                <div class="col card shadow-sm">
                                    <img class="team_img bd-placeholder-img card-img-top" src="img/team/13.jpeg" alt="omelchenko">
                                </div>
                                <div class="col items-center">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="team_name my-0">Omelchenko Artem</h4>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>
                                                <li class="card_text">REACH <span class="card_subtext">320</span></li>
                                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>
                                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>
                                            </ul>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-2">
                            <div class="row justify-between">
                                <div class="col card shadow-sm">
                                    <img class="team_img bd-placeholder-img card-img-top" src="img/team/20.jpeg" alt="omelchenko">
                                </div>
                                <div class="col items-center">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header py-3">
                                            <h4 class="team_name my-0">Omelchenko Artem</h4>
                                        </div>
                                        <div class="card-body">
                                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>
                                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>
                                            <ul class="list-unstyled mt-3 mb-4">
                                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>
                                                <li class="card_text">REACH <span class="card_subtext">320</span></li>
                                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>
                                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>
                                            </ul>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="item-3">
                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3</font></font></h4>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Це деякий вміст заповнювача для сторінки Scrollspy. </font><font style="vertical-align: inherit;">Зауважте, що під час прокручування сторінки вниз відповідне навігаційне посилання буде виділено. </font><font style="vertical-align: inherit;">Це повторюється в прикладі компонента. </font><font style="vertical-align: inherit;">Ми продовжуємо додавати ще кілька зразків, щоб підкреслити прокручування та виділення.</font></font></p>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Майте на увазі, що плагін JavaScript намагається вибрати правильний елемент серед усього, що може бути видимим. </font><font style="vertical-align: inherit;">Кілька видимих ​​цілей Scrollspy одночасно можуть спричинити деякі проблеми.</font></font></p>
                    </div>
                    <div id="item-3-1">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3-1</font></font></h5>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Це деякий вміст заповнювача для сторінки Scrollspy. </font><font style="vertical-align: inherit;">Зауважте, що під час прокручування сторінки вниз відповідне навігаційне посилання буде виділено. </font><font style="vertical-align: inherit;">Це повторюється в прикладі компонента. </font><font style="vertical-align: inherit;">Ми продовжуємо додавати ще кілька зразків, щоб підкреслити прокручування та виділення.</font></font></p>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Майте на увазі, що плагін JavaScript намагається вибрати правильний елемент серед усього, що може бути видимим. </font><font style="vertical-align: inherit;">Кілька видимих ​​цілей Scrollspy одночасно можуть спричинити деякі проблеми.</font></font></p>
                    </div>
                    <div id="item-3-2">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пункт 3-2</font></font></h5>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Це деякий вміст заповнювача для сторінки Scrollspy. </font><font style="vertical-align: inherit;">Зауважте, що під час прокручування сторінки вниз відповідне навігаційне посилання буде виділено. </font><font style="vertical-align: inherit;">Це повторюється в прикладі компонента. </font><font style="vertical-align: inherit;">Ми продовжуємо додавати ще кілька зразків, щоб підкреслити прокручування та виділення.</font></font></p>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Майте на увазі, що плагін JavaScript намагається вибрати правильний елемент серед усього, що може бути видимим. </font><font style="vertical-align: inherit;">Кілька видимих ​​цілей Scrollspy одночасно можуть спричинити деякі проблеми.</font></font></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
