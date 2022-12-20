<?php /* Template Name: User Page */

get_header(); 

$current_user_id = get_current_user_id();

$the_user = get_user_by( 'id', $current_user_id );

 

$phone = get_user_meta( $current_user_id, '_phone_number' , true );
/*   print_r( $phone );
  die; */

?>

<section class="profile-card position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md d-flex justify-content-center">
                    <div class="profile-card">
                        <div class="card_ position-relative d-flex mt-4 mt-md-5">
                            <div class="img-card mr-md-5">
                                <img src="../img/student-pic.png" alt="" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column justify-content-center mt-4 mt-md-0 px-3 px-md-0">
                                <h4 class="card-title">Виктория Генадиева</h4>
                                <div class="card-info border-top d-md-flex align-items-start mt-2 pt-3">
                                    <div class="mr-5 d-flex d-md-block">
                                        <p class="card-small-text light mb-1">Училище</p>
                                        <p class="card-small-text dark mb-1">МГ Петър Берон</p>
                                    </div>
                                    <div class="mr-5 d-flex d-md-block">
                                        <p class="card-small-text light mb-1">Клас</p>
                                        <p class="card-small-text dark mb-1">4</p>
                                    </div>
                                    <div class="mr-5 d-flex d-md-none">
                                        <p class="card-small-text light mb-1" style="width: 50%;">Контакти</p>
                                        <p>
                                            <a href="#">
                                                <img src="../img/fb1.svg" alt="" class="img-fluid" style="width:8px">
                                            </a>
                                        </p>
                                    </div>
                                    <div class="border-mobile mr-5 mt-4 mt-md-0 pt-4 pt-md-0">
                                        <p class="card-small-text light mb-1">Направление</p>
                                        <ul class="main-list">
                                            <li class="card-small-text dark mb-1">Трафик на хора</li>
                                            <li class="card-small-text dark mb-1">Наркотици</li>
                                        </ul>
                                    </div>
                                    <div class="border-mobile mr-5 mt-4 mt-md-0 pt-4 pt-md-0">
                                        <p class="card-small-text light mb-1">Ръководител</p>
                                        <p class="card-small-text dark mb-1">Елена Ганчева</p>
                                        <p class="card-small-text mb-1">
                                            <a href="mailto:e-gancheva@gmail.com"
                                                style="color: #564493; text-decoration: underline;">
                                                e-gancheva@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-info border-top d-none d-md-flex align-items-start mt-2 pt-3">
                                    <div class="mr-5">
                                        <p class="card-small-text light mb-1">Контакти</p>
                                    </div>
                                    <div class="mr-5">
                                        <a href="#">
                                            <img src="../img/fb1.svg" alt="" class="img-fluid" style="width:8px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card-options d-block d-md-flex mt-4 ">
                            <div class="profile-links">
                                <a href="#">Промени профилната си снимка →</a>
                                <a href="#">Промени данни →</a>
                            </div>
                            <div class="profile-links">
                                <a href="#">Разкачи Facebook →</a>
                                <a href="#">Изход →</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fllying-objects left-side d-none d-lg-block">
            <img src="../img/dots-right.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side d-none d-lg-block">
            <img src="../img/dots-left.svg" alt="" class="img-fluid">
        </div>
    </section>

    <section class="achievements position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="text-center mb-5 pb-5">
                        <h2 class="heading-main mb-4">
                            Моите постижения
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <div class="badges d-flex">
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/profile-picture.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Профилна<br>снимка
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/email.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Потвърден имейл <br>адрес
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/chelnstvo-gradski-prevantiven-klub.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    За членство с градски превантивен клуб
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/ekipen-igrach.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Екипен играч
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/shkola-za-obuchiteli-na-vrastnici.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Премината школа за обучители на връстници
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/bezopasen-internet.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Безопасен интернет
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/uspeshno-preminat-bazov-test.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Успешно преминат базов тест
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5 pb-5">
                        <h2 class="heading-main mb-4">
                            Неотключени постижения
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <div class="unlocked-achievements">
                            <div class="achievement d-block d-md-flex mt-4">
                                <div class="achievement-img mr-5 mb-4 mb-md-0">
                                    <img src="../img/siva-preminata-shkola-za-organizaciya-na-kampanii.png" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="ach-content text-left">
                                    <h5 class="ach-heading">
                                        За премината школа за организация на кампании
                                    </h5>
                                    <p class="ach-text">
                                        <span>Как да постигна:</span> Aко търсите идея за здравословно хапване в периода
                                        на
                                        пореден локдаун, поставете показалеца си на кулинарната карта на Азия.
                                    </p>
                                </div>
                            </div>
                            <div class="achievement d-block d-md-flex mt-4">
                                <div class="achievement-img mr-5 mb-4 mb-md-0">
                                    <img src="../img/siva-ne-karaj-pil.png" alt="" class="img-fluid">
                                </div>
                                <div class="ach-content text-left">
                                    <h5 class="ach-heading">
                                        За премината школа за организация на кампании
                                    </h5>
                                    <p class="ach-text">
                                        <span>Как да постигна:</span> Aко търсите идея за здравословно хапване в периода
                                        на
                                        пореден локдаун, поставете показалеца си на кулинарната карта на Азия.
                                    </p>
                                </div>
                            </div>
                            <div class="achievement d-block d-md-flex mt-4">
                                <div class="achievement-img mr-5 mb-4 mb-md-0">
                                    <img src="../img/siva-bez-droga.png" alt="" class="img-fluid">
                                </div>
                                <div class="ach-content text-left">
                                    <h5 class="ach-heading">
                                        За премината школа за организация на кампании
                                    </h5>
                                    <p class="ach-text">
                                        <span>Как да постигна:</span> Aко търсите идея за здравословно хапване в периода
                                        на
                                        пореден локдаун, поставете показалеца си на кулинарната карта на Азия.
                                    </p>
                                </div>
                            </div>
                            <div class="achievement d-block d-md-flex mt-4">
                                <div class="achievement-img mr-5 mb-4 mb-md-0">
                                    <img src="../img/siva-antispin-kampaniya.png" alt="" class="img-fluid">
                                </div>
                                <div class="ach-content text-left">
                                    <h5 class="ach-heading">
                                        За премината школа за организация на кампании
                                    </h5>
                                    <p class="ach-text">
                                        <span>Как да постигна:</span> Aко търсите идея за здравословно хапване в периода
                                        на
                                        пореден локдаун, поставете показалеца си на кулинарната карта на Азия.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mb-5 pb-5">
                        <h2 class="heading-main mb-4">
                            Участие в кампании
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <div class="badges d-flex">
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/kampaniya-za-kyde-pytuvash.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Кампания „Закъде пътуваш“
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/kampaniya-sinyo-syrce-30-yuni.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    Кампания „Синьо сърце“ по повод 30 юли
                                </p>
                            </div>
                            <div class="badg mt-3">
                                <div class="badg-img">
                                    <img src="../img/kampaniya-den-na-psihichnoto-zdrave.png" alt="" class="img-fluid">
                                </div>
                                <p class="badg-name mt-3">
                                    10 октомври – Ден на психичното здраве
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pb-5">
                        <h2 class="heading-main mb-4">
                            Други доброволци
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                    </div>

                    <div class="card main-table table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Име на ученик</th>
                                    <th scope="col">Клас</th>
                                    <th scope="col">Направление</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Елена Василева→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            2-ри
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Трафик на хора
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Генко Янакиев→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            4-ри
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Употреба на психоактивни вещества
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Веско Веселинов→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            2-ри
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Употреба на психоактивни вещества и ако е дълго
                                            заглавието
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Петър Горанов→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            4-ри
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Име на направление
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Благо Благоев→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            5-ти
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Име на направление
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Ивета Стаменова→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            5-ти
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Име на направление
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Валери Тодоров→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            5-ти
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Име на направление
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <button class="btn table-text student-name pl-0">Стомна Академикова→</button>
                                    </td>
                                    <td>
                                        <p class="table-text student-class">
                                            5-ти
                                        </p>
                                    </td>
                                    <td>
                                        <p class="table-text student-direction">
                                            Име на направление
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="fllying-objects left-side">
            <img src="../img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side">
            <img src="../img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>



<?php get_footer(); ?>