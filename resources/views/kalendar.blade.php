@extends('layouts.app')

@section('content')

    <h1>Турнірна таблиця</h1>
        <container>
             <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">LOGO</th>
                        <th scope="col">TEAM</th>
                        <th scope="col">GAMES</th>
                        <th scope="col">WIN</th>
                        <th scope="col">LOST</th>
                        <th scope="col">POINTS</th>
                        <th scope="col">+/-</th>
                        <th scope="col">%</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>logo</td>
                        <td>"ЕПІЦЕНТР-ПОДОЛЯНИ"</td>
                        <td>21</td>
                        <td>20</td>
                        <td>1</td>
                        <td>59</td>
                        <td>376</td>
                        <td>95,2</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>logo</td>
                        <td>ВК "Прометей"</td>
                        <td>21</td>
                        <td>18</td>
                        <td>3</td>
                        <td>55</td>
                        <td>315</td>
                        <td>85,7</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>logo</td>
                        <td>"ВК "Житичі-Полісся"</td>
                        <td>21</td>
                        <td>11</td>
                        <td>10</td>
                        <td>32</td>
                        <td>5</td>
                        <td>52,4</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>logo</td>
                        <td>Волейбольний клуб "МХП-Вінниця"-ШВСМ</td>
                        <td>21</td>
                        <td>11</td>
                        <td>10</td>
                        <td>32</td>
                        <td>6</td>
                        <td>52,4</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>logo</td>
                        <td>ВСК "Юридична академія"</td>
                        <td>21</td>
                        <td>9</td>
                        <td>12</td>
                        <td>28</td>
                        <td>-47</td>
                        <td>42,9</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>logo</td>
                        <td>"Збірна Полтавської області ВК "Решетилівка"</td>
                        <td>21</td>
                        <td>7</td>
                        <td>14</td>
                        <td>20</td>
                        <td>-194</td>
                        <td>33,3</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>logo</td>
                        <td>"ПОЛІЦІЯ ОХОРОНИ-ЗУНУ-ДИНАМО"</td>
                        <td>21</td>
                        <td>5</td>
                        <td>16</td>
                        <td>15</td>
                        <td>-222</td>
                        <td>23,8</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>logo</td>
                        <td>"Барком-Збірна України U-18"</td>
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





@endsection
