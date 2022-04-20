<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}"/>

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="#">
    <title>Практичне завдання</title>

    <style>
        .footer__link {
            margin: 0 15px;
        }
    </style>
</head>
<body>
<div class="container pt-5 pb-5 bg-gray-100">
    <div class="row justify-content-center">
        <div class="col-6">
            <!-- Content -->
            <div class="card p-3">
                <form action="{{route("history-create")}}" method="post">
                    @csrf
                    <h1 class="h2 mb-4">Обмінник валют</h1>

                    <div class="courses">
                        <div class="course-item card card-body">
                            <div class="course-item-title">Курс USD</div>
                            <div class="course-item-value" data-value="USD">--.--</div>
                        </div>
                        <div class="course-item card card-body">
                            <div class="course-item-title">Курс EUR</div>
                            <div class="course-item-value" data-value="EUR">--.--</div>
                        </div>
                        <div class="course-item card card-body">
                            <div class="course-item-title">Курс GBP</div>
                            <div class="course-item-value" data-value="GBP">--.--</div>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col">
                            <label for="name">Віддаю:</label>
                            <select name="from_currency"
                                class="form-control"
                                id="exampleFormControlSelect1"
                            >
                                <option  value="UAH" selected>UAH — Гривні</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="name">Отримаю:</label>
                            <select name="to_currency"
                                id="select"
                                class="form-control"
                                id="exampleFormControlSelect1"
                            >
                                <option value="USD">USD — Доллар США</option>
                                <option value="EUR">EUR — Євро</option>
                                <option value="GBP">GPB — Фунт стерлингов</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input step="any" name="from_price"
                                   id="input"
                                   type="number"
                                   class="form-control"
                                   id="name"
                                   autofocus
                            />
                        </div>
                        <div class="col">
                            <input step="any" name="to_price"
                                   id="result"
                                   type="number"
                                   class="form-control"
                                   id="name"
                            />
                        </div>
                    </div>
                    <button class="buy" type="submit">Купити</button>

                </form>
            </div>
            <!-- // Content -->
        </div>
        <!-- // col-6 -->
    </div>
    <!-- // row -->
</div>
<!-- // container -->

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
