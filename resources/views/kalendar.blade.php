@extends('layouts.app')

@section('content')

<div class="main">
    <div class="container">
        <div class="row">
            <h1 class="text-center m-4">Play-off</h1>
            {{--        //1/4 finals--}}
            <div class="col-4 d-flex flex-column text-center  justify-content-center">
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/epic.jpeg" alt="logo">
                        <h4 class="team_name_play-off">"Епіцентр-Подоляни"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/barcom.jpeg" alt="logo">
                        <h4 class="team_name_play-off">"Барком-Збірна України U-18"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-between m-1">
                        <img style="width: 60px" src="../resources/images/logo/prom.jpeg" alt="logo">
                        <h4 class="team_name_play-off">ВК "Прометей"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/pol.jpeg" alt="logo">
                        <h4 class="team_name_play-off" style="font-size: 25px">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/zutu.jpeg" alt="logo">
                        <h4 class="team_name_play-off">"Житичі-Полісся"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/reset.jpeg" alt="logo">
                        <h4 class="team_name_play-off">"ВК "Решетилівка"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/mxp.jpeg" alt="logo">
                        <h4 class="team_name_play-off">"МХП-Вінниця"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">1</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/law.jpeg" alt="logo">
                        <h4 class="team_name_play-off">ВСК "Юридична академія"</h4>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{--        //1/2 finals--}}
            <div class="col-4 d-flex flex-column justify-content-around">
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/epic.jpeg" alt="logo">
                        <h3 class="team_name_play-off">"Епіцентр-Подоляни"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/law.jpeg" alt="logo">
                        <h3 class="team_name_play-off">ВСК "Юридична академія"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-2 play-off_border">
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/prom.jpeg" alt="logo">
                        <h3 class="team_name_play-off">ВК "Прометей"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">2</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/zutu.jpeg" alt="logo">
                        <h3 class="team_name_play-off">"Житичі-Полісся"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{--        // final--}}
            <div class="col-4 d-flex flex-column justify-content-center">
                <div class="row m-2 play-off_border">
                    <h class="text-center" style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">Final</h>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/prom.jpeg" alt="logo">
                        <h3 class="team_name_play-off">ВК "Прометей"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/epic.jpeg" alt="logo">
                        <h3 class="team_name_play-off">"Епіцентр-Подоляни"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-2 play-off_border">
                    <h3 class="text-center" style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">3 місце</h3>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/law.jpeg" alt="logo">
                        <h3 class="team_name_play-off">ВСК "Юридична академія"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                    <div class="col d-block d-flex flex-row align-items-center text-center justify-content-center m-1">
                        <img style="width: 60px" src="../resources/images/logo/zutu.jpeg" alt="logo">
                        <h3 class="team_name_play-off">""Житичі-Полісся"</h3>
                        <div class="col">
                            <h2 style="font-size: xxx-large; font-style: italic; font-weight: bolder; color: #7d1dd4">0</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <h1 class="text-center m-4">5 - 8 місце</h1>
        <container>
            <table class="table table-striped-columns text-center align-middle border-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">LOGO</th>
                    <th scope="col team_name">КОМАНДА</th>
                    <th scope="col">ІГРИ</th>
                    <th scope="col">ПЕРЕМОГИ</th>
                    <th scope="col">ПОРАЗКИ</th>
                    <th scope="col">ОЧКИ</th>
                    <th scope="col">+/-</th>
                    <th scope="col">%</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <th scope="row">5</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/mxp.jpeg" alt="logo">
                    </td>
                    <td class="team_name">Волейбольний клуб "МХП-Вінниця"-ШВСМ</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/reset.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"Збірна Полтавської області ВК "Решетилівка"</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/pol.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/barcom.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"Барком-Збірна України U-18"</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                </tbody>
            </table>
        </container>
    </div>

    <div class="row">
        <h1 class="text-center m-4">Турнірна таблиця</h1>
        <container>
            <table class="table table-striped-columns text-center align-middle border-danger">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">LOGO</th>
                    <th scope="col team_name">КОМАНДА</th>
                    <th scope="col">ІГРИ</th>
                    <th scope="col">ПЕРЕМОГИ</th>
                    <th scope="col">ПОРАЗКИ</th>
                    <th scope="col">ОЧКИ</th>
                    <th scope="col">+/-</th>
                    <th scope="col">%</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/epic.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"Епіцентр-Подоляни"</td>
                    <td>21</td>
                    <td>20</td>
                    <td>1</td>
                    <td>59</td>
                    <td>376</td>
                    <td>95,2</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/prom.jpeg" alt="logo">
                    </td>
                    <td class="team_name">ВК "Прометей"</td>
                    <td>21</td>
                    <td>18</td>
                    <td>3</td>
                    <td>55</td>
                    <td>315</td>
                    <td>85,7</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/zutu.jpeg" alt="logo">
                    </td>
                    <td class="team_name">ВК "Житичі-Полісся"</td>
                    <td>21</td>
                    <td>11</td>
                    <td>10</td>
                    <td>32</td>
                    <td>5</td>
                    <td>52,4</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/mxp.jpeg" alt="logo">
                    </td>
                    <td class="team_name">Волейбольний клуб "МХП-Вінниця"-ШВСМ</td>
                    <td>21</td>
                    <td>11</td>
                    <td>10</td>
                    <td>32</td>
                    <td>6</td>
                    <td>52,4</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/law.jpeg" alt="logo">
                    </td>
                    <td class="team_name">ВСК "Юридична академія"</td>
                    <td>21</td>
                    <td>9</td>
                    <td>12</td>
                    <td>28</td>
                    <td>-47</td>
                    <td>42,9</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/reset.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"Збірна Полтавської області ВК "Решетилівка"</td>
                    <td>21</td>
                    <td>7</td>
                    <td>14</td>
                    <td>20</td>
                    <td>-194</td>
                    <td>33,3</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/pol.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</td>
                    <td>21</td>
                    <td>5</td>
                    <td>16</td>
                    <td>15</td>
                    <td>-222</td>
                    <td>23,8</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>
                        <img style="width: 60px" src="../resources/images/logo/barcom.jpeg" alt="logo">
                    </td>
                    <td class="team_name">"Барком-Збірна України U-18"</td>
                    <td>21</td>
                    <td>3</td>
                    <td>18</td>
                    <td>11</td>
                    <td>-239</td>
                    <td>14,3</td>
                </tr>
                </tbody>
            </table>
        </container>
    </div>
</div>










@endsection
