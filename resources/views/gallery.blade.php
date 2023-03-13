@extends('layouts.app')

@section('content')

    <div class="bd-example" >
        <div class="row">
            <div class="col-4">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end" >
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ПЛЕЙ-ОФФ</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-5-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей» 1гра</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-5-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей» 2гра</font></font></a>
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 коло</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-4-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «РЕШЕТИЛІВКА»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «ЖИТИЧІ-ПОЛІССЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «МХП-ВІННИЦЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">«ЕПІЦЕНТР-ПОДОЛЯНИ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Барком-Збірна України U-18</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-4-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВСК "Юридична академія"</font></font></a>
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">КУБОК ЛІГИ</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-3-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей»</font></font></a>
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 коло</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «РЕШЕТИЛІВКА»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «ЖИТИЧІ-ПОЛІССЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «МХП-ВІННИЦЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">«ЕПІЦЕНТР-ПОДОЛЯНИ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Барком-Збірна України U-18</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-2-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВСК "Юридична академія"</font></font></a>
                        </nav>
                    </nav>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 коло</font></font></a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-1-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «РЕШЕТИЛІВКА»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «ЖИТИЧІ-ПОЛІССЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «МХП-ВІННИЦЯ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">«ЕПІЦЕНТР-ПОДОЛЯНИ»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Барком-Збірна України U-18</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВК «Прометей»</font></font></a>
                            <a class="nav-link ms-3 my-1" href="#item-1-7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ВСК "Юридична академія"</font></font></a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col">
                <div  style="height: 180vh; overflow-y: scroll" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">

                    <div id="item-5">
                        <div id="item-5-1" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>7.03.2023</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/hc0pQV9Sah8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/7032023-politsiya-okhorony-zunu-dynamo-vk-prometey">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-03/blt02365.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=215&ID=5&CID=13&PID=15&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-5-2" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>9.03.2023</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/0gbzgy6orts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/9032023-vk-prometey-ta-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-03/blt04801.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=219&ID=5&CID=13&PID=15&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="item-4">
                        <div id="item-4-1" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center "> <p>19.01.2023</p> ВК «РЕШЕТИЛІВКА» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/1JWLn0w1UAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/1901-2023-vk-reshetylivka-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-01/BLT04826.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=150&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-2" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>21.01.2023</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «ЖИТИЧІ-ПОЛІССЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/Kbq9MllLS10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/21012023-politsiya-okhorony-dynamo-zunu-vk-zhytychi-polissya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-01/BLT08665.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=154&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-3" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>01.02.2023</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «МХП-ВІННИЦЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pb61LwiFER8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/1022023-politsiya-okhorony-zunu-dynamo-vk-mkhp-vinnytsya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-02/BLT00350.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=158&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-4" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748;  width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>03.02.2023</p> «ЕПІЦЕНТР-ПОДОЛЯНИ» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/Czj-exdVX94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/3022023-epitsentr-podolyany-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-02/BLT04032.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=162&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-5" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748;  width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>05.02.2023</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - Барком-Збірна України U-18</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/naFPQWAsxTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/politsiya-okhorony-zunu-dynamo-barkom-zbirna-ukrayiny-u-18">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-02/BLT08058.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=165&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-6" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748;  width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>16.02.2023</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/TiXi7StWCzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/16022023-politsiya-okhorony-zunu-dynamo-vk-prometey">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-02/BLT04972.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=168&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-4-7" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748;  width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>18.02.2023</p>ВСК "Юридична академія" - "ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/58FHdaxlns0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/18022023-vsk-yurydychna-akademiya-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2023-02/photo_2023-02-18_13-17-13.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=171&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="item-3">
                        <div id="item-3-1" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>20.12.2022</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/rGKWkzPskjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/20122022-kubok-lihy-vk-prometey-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT05769.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=143&ID=6&CID=9&PID=11&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="item-2">
                        <div id="item-2-1" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center "> <p>04.11.2022</p> ВК «РЕШЕТИЛІВКА» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/632UAZA2r9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/4112022-vk-reshetylivka-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT08623.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=97&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-2" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>06.11.2022</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «ЖИТИЧІ-ПОЛІССЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/0ky53Xr2JUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/6112022-politsiya-okhorony-dynamo-zunu-vk-zhytychi-polissya-0">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT06157.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=101&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-3" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>23.11. 2022</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «МХП-ВІННИЦЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/g8nvcWC8sug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/410-2022-politsiya-okhorony-zunu-dynamo-vk-mkhp-vinnytsya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT05276.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=111&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-4" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>25.11.2022</p> «ЕПІЦЕНТР-ПОДОЛЯНИ» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/OqJ2T9s1fOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/25112022-epitsentr-podolyany-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT07784.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=115&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-5" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>27.11.2022</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - Барком-Збірна України U-18</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/YNPqcvvwNdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/27112022-politsiya-okhorony-zunu-dynamo-barkom-zbirna-ukrayiny-u18">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT00092.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=118&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-6" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>09.12.2022</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/dbBKZvWzqAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/9122022-politsiya-okhorony-zunu-dynamo-vk-prometey">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT05769.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=132&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-2-7" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>11.12.2022</p>ВСК "Юридична академія" - "ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/ASFc1jLJVYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/111222-vsk-yurydychna-akademiya-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT07255.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=135&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="item-1">
                        <div id="item-1-1" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center "> <p>23.09.2022</p> ВК «РЕШЕТИЛІВКА» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/1Zl92rkuaQ0" title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/23092022-vk-reshetylivka-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT02323.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=41&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-2" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>25.09.2022</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «ЖИТИЧІ-ПОЛІССЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/90jwgS9PA2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/25092022-politsiya-okhorony-zunu-dynamo-vk-zhytychi-polissya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT06157.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=45&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-3" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>4.10. 2022</p> «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО» - ВК «МХП-ВІННИЦЯ»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/O-aqZv5-rZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/410-2022-politsiya-okhorony-zunu-dynamo-vk-mkhp-vinnytsya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT05276.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=55&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-4" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>6.10. 2022</p> «ЕПІЦЕНТР-ПОДОЛЯНИ» - «ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО»</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/Sx5zt1SKmME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/610-2022-epitsentr-podolyany-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT07784.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu.org/uk/gallery/610-2022-epitsentr-podolyany-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-5" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>08.10.2022</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - Барком-Збірна України U-18</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/akVGsmLbc1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/8102022-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT00092.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=62&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-6" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>20.10.2022</p>ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО - ВК Прометей</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/qeylz693Fps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/25092022-politsiya-okhorony-zunu-dynamo-vk-zhytychi-polissya">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT05769.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu.org/uk/gallery/20102022-politsiya-okhorony-zunu-dynamo-vk-prometey">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="item-1-7" class="mb-4">
                            <div class="row justify-content-center" style="border-bottom:3px solid #2d3748; width: 100%; max-width: 950px; margin: 0 auto">
                                <h3 class="text-center"><p>22.10.2022</p>ВСК "Юридична академія" - "ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</h3>
                                <div class="row mb-3 d-block w-70 card shadow-sm ">
                                    <iframe width="560" height="515" src="https://www.youtube.com/embed/GQNa3NT4IE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="row mb-4 text-center">
                                    <a class="col" href="https://pvlu.org/uk/gallery/22102022-vsk-yurydychna-akademiya-politsiya-okhorony-zunu-dynamo">
                                        <img class="display-block" width="350" src="https://pvlu.org/sites/default/files/gallery/2022-12/BLT07255.jpg" alt="foto">
                                    </a>
                                    <a class="col" href="https://pvlu-web.dataproject.com/MatchStatistics.aspx?mID=81&ID=5&CID=4&PID=6&type=LegList">
                                        <img class="display-block" width="350" src="img/Statictiks/resetul1tur.png" alt="Статитика">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
