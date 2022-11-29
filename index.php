<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Эксимо</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/variables.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
    <!--=====Form Modal=====-->
    <div id="FormModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Заполните форму</h5>
            <button type="button" class="close" data-bs-dismiss="modal" class="btn btn-default" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-body">
              <div class="row">
                <form action="sendRequest.php" method="post" class="requires-validation" id="SendForm" novalidate>

                    <div class="col-md-12">
                      <input class="form-control mt-3" type="text" name="name" placeholder="Ваше имя" onchange="getName(value)" required>
                      <div class="invalid-feedback">Заполните данное поле!</div>
                    </div>

                    <div class="col-md-12">
                        <input class="form-control mt-3" type="email" name="email" placeholder="Ваша электронная почта" onchange="getEmail(value)" required>
                        <div class="invalid-feedback">Заполните данное поле!</div>
                    </div>

                    <div class="col-md-12">
                        <input class="form-control mt-3" type="number" name="number" placeholder="Ваш номер телефона" onchange="getNumber(value)" required>
                        <div class="invalid-feedback">Заполните данное поле!</div>
                    </div>

                    <div class="form-button mt-3">
                        <button id="submit" type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
  <!--========End of Form Modal========-->

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <h1><span>Эксимо</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="#">Главная страница</a></li>
          <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/main-image.png" class="img-fluid animated">
      <p>Программа автоматизации процессов в образовательных учреждениях: составление расписания, ведение журналов занятий, контроль обучения студентов и выполнения программы</p>
      <div class="d-flex">
        <h4 class="btn-get-started scrollto" onclick='openForm()'>Подать заявку</h4>
        <h4 class="btn-get-started scrollto" onclick='openForm()'>Запросить демку</h4>
        <h4 class="btn-get-started scrollto" onclick='openForm()'>Запросить цену</h4>
        <!-- <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Видео</span></a> -->
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>Электронный журнал</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-alarm color-indigo"></i>
              <h4>Электронное расписание</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-people color-teal"></i>
              <h4>Учет студентов</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-aspect-ratio color-orange"></i>
              <h4>Инфомат</h4>
            </a>
          </li>

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Электронный журнал</h3>
                <p class="fst-italic">
                  Модуль «Электронный журнал успеваемости» позволяет:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>
                    Создавать журналы и вести учёт успеваемости по любому типу занятий – лекциям, практическим, лабораторным, зачётам, экзаменам и так далее.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Использовать как классическую пятибалльную, так и стобалльную систему оценки. Легко вычислять средний балл на основе выставленных оценок.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Оперативно получат ь сводную картину по обучающимся: выявлять неуспевающих, отличников и прогульщиков.</li>
                </ul>
                <p>
                  Модуль «Электронный журнал успеваемости» позволит вам хранить и редактировать данные по текущей успеваемости и посещаемости обучающихся, рассчитывать на их основе фактически выполненную аудиторную нагрузку преподавателей и рейтинги обучающихся, выявлять хронических прогульщиков.
                </p>
              </div>
                        
              <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <ul>
                    <li class="box show" style="transition-delay: 0s;">
                        <div class="inner">
                            <a href="assets/img/screenshots/journal_1.jpg" class="glightbox">
                                <img src="assets/img/screenshots/journal_1_small.jpg" alt="image">
                            </a>
                        </div>
                    </li>
                    <li class="box show" style="transition-delay: 0s;">
                        <div class="inner">
                            <a href="assets/img/screenshots/journal_2.jpg" class="glightbox">
                                <img src="assets/img/screenshots/journal_2_small.jpg" alt="image">
                            </a>
                        </div>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-2">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Электронное расписание</h3>
                <p class="fst-italic">
                  Модуль «Электронное расписание» позволяет:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Cформировать расписание на день, неделю, месяц, полугодие для любых занятий, консультаций, экзаменов.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Создавать занятия, не попадающие в «сетку» расписания, занятия произвольной продолжительности.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Учесть последовательность преподавания дисциплин, тематические планы по дисциплинам, занятость преподавателей и групп.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Создать и сравнить несколько редакций расписания и выбрать наиболее оптимальную редакцию.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Легко справиться с планированием работы со «сложными потоками» групп, подгруппами и индивидуальными консультациями.</li>
                  <li><i class="bi bi-check-circle-fill"></i>Учесть занятость любых помещений другими занятиями и общевузовскими мероприятиями.</li>
                </ul>
                <p>С помощью модуля «Расписание» вы сможете сформировать расписание как в автоматическом, полуавтоматическом, так и в ручном режимах. На основании данных из модулей «Деканат», «Отдел кадров», «Учебно-методическое управление» и «Кафедра» модуль автоматически создаёт расписание с возможностью его последующей ручной доработки. </p>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
                <ul>
                      <li class="box show" style="transition-delay: 0s;">
                          <div class="inner">
                              <a href="assets/img/screenshots/schedule_1.jpg" class="glightbox">
                                  <img src="assets/img/screenshots/schedule_1_small.jpg" alt="image">
                              </a>
                          </div>
                      </li>
                      <li class="box show" style="transition-delay: 0s;">
                          <div class="inner">
                              <a href="assets/img/screenshots/schedule_2.jpg" class="glightbox">
                                  <img src="assets/img/screenshots/schedule_2_small.jpg" alt="image">
                              </a>
                          </div>
                      </li>
                  </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Учет студентов</h3>
                <p class="fst-italic">
                  Модуль «Учет студентов» позволяет:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Хранить и редактировать информацию об обучающихся</li>
                  <li><i class="bi bi-check-circle-fill"></i>Добавлять и отчислять студентов</li>
                  <li><i class="bi bi-check-circle-fill"></i>Получить доступ к сведениям обучающихся</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
              <ul>
                    <li class="box show" style="transition-delay: 0s;">
                        <div class="inner">
                            <a href="assets/img/screenshots/students_1.jpg" class="glightbox">
                                <img src="assets/img/screenshots/students_1_small.jpg" alt="image">
                            </a>
                        </div>
                    </li>
                    <li class="box show" style="transition-delay: 0s;">
                        <div class="inner">
                            <a href="assets/img/screenshots/students_2.jpg" class="glightbox">
                                <img src="assets/img/screenshots/students_2_small.jpg" alt="image">
                            </a>
                        </div>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-4">
            <div class="row gy-4">
              <div class="col-lg-8 order-2 order-lg-1">
                <h3>Инфомат</h3>
                <p class="fst-italic">
                  Модуль «Инфомат» позволяет:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i>Отображение на информационных панелях учебного заведения</li>
                </ul>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 text-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Свяжитесь с нами</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Адрес:</h4>
                  <p>г. Ижевск, ул. Удмуртская, 195</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Электронная почта:</h4>
                  <p>info@copycon.ru</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Номер телефона:</h4>
                  <p>+7 (3412) 918 005</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="sendRequest.php" method="post" role="form" class="requires-validation" id="SendForm" novalidate>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
                  <div class="invalid-feedback">Заполните данное поле!</div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ваша электронная почта" required>
                  <div class="invalid-feedback">Заполните данное поле!</div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="number" id="subject" placeholder="Ваш номер телефона" required>
                <div class="invalid-feedback">Заполните данное поле!</div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Сообщение"></textarea>
              </div>
              <div class="text-center"><button id="bottom_button" type="submit" class="btn btn-primary">Отправить</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; <strong><span>Копикон</span></strong> 2022
          </div>
        </div>
<!-- 
        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> -->

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/modals.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>