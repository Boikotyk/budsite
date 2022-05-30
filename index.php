<?php include "simple_html_dom.php";?>
<!doctype html>
<html lang="en">
  <head>
    <title>Розрахунок кількості буд матеріалів</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="/" class="text-black"><span class="text-primary"><img class="logo" src="images/logo.png">БудHome</a>
            </div>
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Головна</a></li>
                <li><a href="#count" class="nav-link">Розрахунок</a></li>
                <li><a href="#press-section" class="nav-link">Новини</a></li>
                <li><a href="#contact-section" class="nav-link">Зворотній зв'іязок</a></li>
              </ul>
              </nav>
            </div>
          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
    <div class="owl-carousel slide-one-item" id="home">
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_3.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Ласкаво просимо до БудHome</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Ми працюємо щоб Ваше будівництво було прозорим і зрозумілим</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#count" class="btn btn-outline-white border-w-2 btn-md">Перейти до розрахунку</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/hero_2.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">Ласкаво просимо до БудHome</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Ми працюємо щоб Ваше будівництво було прозорим і зрозумілим</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#count" class="btn btn-outline-white border-w-2 btn-md">Перейти до розрахунку</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="count">
      <div class="container">
        <div class="row card-grid">
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="" title="На цій сторінці ми розповімо про фундамент. Який він буває, який фундамент підходить Вашому будинку залежно від грунтів і природних умов, як його зробити і багато іншого.">
                <div class="block__35630">
                  <div class="count_img">
                    <img src="images/image1.png">
                  </div>
                  <h3 class="mb-3" >Фундамент</h3>
                </div>
              </div>
          <div class="card-details card-yellow">
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Стрічковий</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="width" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="length" value="3" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="height" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="thickness" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Розрахунок стовпчиків фундаменту</button>
                <div class="panel">
                  <h2 text-align="center">Розрахунок стовпчиків фундаменту</h2>
                    <form method="post" id="ajax_forms" action="" >
                      <table class="tab_wight" align="center">
                        <tr>
                          <td rowspan="3">
                            <table>
                              <tr>
                                <td><img src="images/rozmiry_stovpci1.png" width="200" height="200" /></td>
                              </tr>
                              <tr>
                                <td><img src="images/rozmiry_stovpci2.png" width="200" height="200" /></td>
                              </tr>
                              <tr>
                                <td><img src="images/rozmiry_stovpci3.png" width="200" height="200" /></td>
                              </tr>
                            </table>
                          </td>
                          <td valign="top" style="padding-top:30px;" >
                              <table width="250" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                  <td style="padding-left:60px;"><br><font color="#dd2a1b">Вкажіть тип стовпців</font><br><br>
                                    <input type="radio" name="typ" value="1"  id="tip1">
                                    <label for="tip1">варіант <b>1</b></label><br>
                                    <input type="radio" name="typ" value="2"  id="tip2">
                                    <label for="tip2">варіант <b>2</b></label><br>
                                    <input type="radio" name="typ" value="3"  id="tip3">
                                    <label for="tip3">варіант <b>3</b></label><br>
                                  </td>
                                </tr>
                              </table>
                          </td>
                          <td valign="top" style="padding-top:30px;">
                            <br><font color="#dd2a1b">Вкажіть розміри в метрах</font><br><br>
                            <table width="300">
                              <tr>
                                <td>Висота основи <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота стовпа <b>H</b></td>
                                <td> <input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Розмір <b>B</b></td>
                                <td> <input type="text" name="B" value="0.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Розмір <b>B1</b></td>
                                <td> <input type="text" name="B1" value="0.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Розмір <b>D</b> </td>
                                <td> <input type="text" name="D" value="0.4" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Розмір <b>D1</b> </td>
                                <td><input type="text" name="D1" value="0.4" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Кількість стовпців <b>X</b></td>
                                <td><input type="text" name="PCS" value="20" size="3" class="input"> шт.</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btns">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_forms"></div>
                </div>
                <button class="accordion">Розрахунок плити фундаменту</button>
                <div class="panel">
                  <form method="post" id="ajax_form" action="" >
                    <table class="tab_wight"  align="center">
                      <tr>
                        <td align="center" width="350">
                          <img src="images/123.png" width="260" height="100" />
                        </td>
                        <td valign="top" style="padding-top:30px;">
                            <input type="hidden" name="form3" value="form3" />
                            <center><font color="#dd2a1b">Вкажіть розміри в метрах</font><br><br></center>
                            <table align="center">
                              <tr>
                                <td>Довжина плити <b>X</b></td>
                                <td> <input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Ширина плити <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Висота плити <b>B</b></td>
                                <td> <input type="text" name="B" value="1.6" size="3" class="input"></td>
                              </tr>
                            </table>
                          <div align="center"><input type="submit" value="Розрахувати" class="submit"></div>
                        </td>
                      </tr>
                    </table>
                  </form>
                  <div id="result_form"></div>
                </div>
                <button class="accordion">Розрахунок кільця</button>
                <div class="panel">
                  <form method="post" id="ajax_form" action="" >
                    <table class="tab_wight" align="center">
                      <tr>
                        <td align="center" width="300"><img src="images/kilch.jpg" width="257" height="252" /></td>
                        <td valign="top" style="padding-top:30px;">
                          <form action="" method="get" name="form_calc">
                            <input type="hidden" name="form4" value="form4" />
                            <font color="#dd2a1b">Вкажіть розміри в метрах</font><br><br>
                            <table>
                              <tr>
                                <td>Висота фундаменту (кільця) <b>H</b></td>
                                <td> <input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Зовнішній діаметр фундаменту (кільця) <b>D1</b></td>
                                <td> <input type="text" name="D1" value="1.5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Внутрішній діаметр фундаменту (кільця) <b>D2</b></td>
                                <td> <input type="text" name="D2" value="1.3" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Товщина фундаменту (кільця) <b>A</b></td>
                                <td><input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table>
                            <div align="center"><input type="submit" value="Розрахувати" class="submit"></div>
                        </td>
                      </tr>
                    </table>
                  </form>
                  <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $beton = file_get_html('https://epicentrk.ua/ua/shop/ivano-frankovsk/beton-i-gotovye-stroitelnye-rastvory/fs/naznachenie-dlya-fundamentov/');
                     foreach($beton->find('.listbody') as $articlebeton){
                         echo $articlebeton;
                     } ?>

                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Фундамент</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="100" title="У цій категоріі ми будемо розповідати про підлоги. Які вони бувают, як їх краще зробити. Дамо рекомедаціі по облаштуванню підлоги. Відкриїмо деякі професійні секрети, аби Ваша підлога була найкращою та у вас все гарно вийшло.">
            <div class="block__35630">
              <div class="count_img">
                <img src="images/image2.png">
              </div>
              <h3 class="mb-3" >Підлога</h3>
            </div>
          </div>
          <div class="card-details card-yellow">
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $drevesiny = file_get_html('https://epicentrk.ua/ua/shop/brusy-doski-i-reyki/fs/poroda-drevesiny-sosna/');
                     foreach($drevesiny->find('.listbody') as $articledrevesiny){
                         echo $articledrevesiny;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Підлога</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="На цих сторінках описана технологія влаштування дахів та покрівель,  виготовлення профільних жерстяних виробів, міститься керівництво для майстрів виробничих дільниць, покрівельників, робітників будівельних спеціальностей, індивідуальних забудовників. Розглянуті принципи проектування та будівництва дахів і покрівель своїми руками. Встановлення систем водозливу та вентиляції, наведено огляд ринку матеріалів, готових конструкцій.">
            <div class="block__35630">
              <div class="count_img">
                <img src="images/image3.png">
              </div>
              <h3 class="mb-3">Покрівля</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $krovlya = file_get_html('https://epicentrk.ua/ua/shop/krovlya/');
                     foreach($krovlya->find('.listbody') as $articlekrovlya){
                         echo $articlekrovlya;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Покрівля</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="" title="">
            <div class="block__35630">
              <div class="count_img">
                <img src="images/image4.png">
              </div>
              <h3 class="mb-3">Фасад</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $kirpich = file_get_html('https://epicentrk.ua/ua/shop/kirpich/');
                     foreach($kirpich->find('.listbody') as $articlekirpich){
                         echo $articlekirpich;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Фасад</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="100" title="Тут ми Вам розповімо усе про вікна та двері. Як їх вибрати та встановити, підкажемо як за ними треба долглядати, щоб вони завжди були чисті та красиві.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image5.png">
              </div>
              <h3 class="mb-3">Двері та вікна</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $dveri = file_get_html('https://epicentrk.ua/ua/search/?q=%D0%B4%D0%B2%D0%B5%D1%80%D1%96+%D1%82%D0%B0+%D0%B2%D1%96%D0%BA%D0%BD%D0%B0');
                     foreach($dveri->find('.listbody') as $articledveri){
                         echo $articledveri;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Двері та вікна</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="На цій сторінці ви знайдете матеріали з яких дізнаєтеся про електрику та усе що з нею пов’язано. Багато чого ми будемо робити своїми руками. Багато хто думає, що самостійно ці роботи  виконати буде досить складно, але у вас все вийде, якщо ви будете слідувати основним рекомендаціям і дотримуватися певних правил монтажу.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image6.png">
              </div>
              <h3 class="mb-3">Електрика</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $elektromontazhnoe = file_get_html('https://epicentrk.ua/ua/shop/elektromontazhnoe-oborudovanie/');
                     foreach($elektromontazhnoe->find('.listbody') as $elektro){
                         echo $elektro;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Електрика</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="Зручності в будинку стали невід'ємною частиною життя сучасної людини і є вже чимось першочерговим, навіть якщо цей будинок розташований трохи далеко від міських комунікацій. Проведений водогін у будинок вимагає організації системи видалення відпрацьованої води, а організований санвузол - відводу фекальних мас. І тут багатьох зацікавить каналізація своїми руками: як саме вона створюється? Ось про це ми і буєм розповідати на цій странце.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image7.png">
              </div>
              <h3 class="mb-3">Каналізація</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $kanalizatsiya = file_get_html('https://epicentrk.ua/ua/shop/kanalizatsiya/');
                     foreach($kanalizatsiya->find('.listbody') as $articlekanalizatsiya){
                         echo $articlekanalizatsiya;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Каналізація</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="На сторінках цього розділу Ви знайдете багато корисних порад щодо будування сходів.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image8.png">
              </div>
              <h3 class="mb-3">Сходи</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $lestnichnye = file_get_html('https://epicentrk.ua/ua/shop/lestnichnye-marshi/');
                     foreach($lestnichnye->find('.listbody') as $articlelestnichnye){
                         echo $articlelestnichnye;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Сходи</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="У цій категоріі ми розповімо все що знаємо про водопровід та сантехніку. Яким чином він робиться водопровід приватному будинку та інші тонкощі. Як встановлюваются різні сантехнічні прилади.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image9.png">
              </div>
              <h3 class="mb-3">Водопровід та сантехніка</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $santechnika = file_get_html('https://epicentrk.ua/ua/search/?q=%D0%B2%D0%BE%D0%B4%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D1%96%D0%B4+%D1%82%D0%B0+%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85%D0%BD%D1%96%D0%BA%D0%B0');
                     foreach($santechnika->find('.listbody') as $articlesantechnika){
                         echo $articlesantechnika;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Водопровід та сантехніка</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="На цій сторінці Ви знайдете багато різноманітних порад щодо оздоблення стелі та її освітлення. Розповімо як робити натяжні, підвісні та інші види стель. Розкриємо усі секрети оздоблювання стелі.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image10.png">
              </div>
              <h3 class="mb-3">Стеля та освітлення</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $podvesnoy = file_get_html('https://epicentrk.ua/ua/shop/podvesnoy-potolok/');
                     foreach($podvesnoy->find('.listbody') as $articlepodvesnoy){
                         echo $articlepodvesnoy;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Стеля та освітлення</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="У цій категорії ми будемо розповідати усе що стосується оздоблення та підготоування до оздоблення внутрішніх стін будинку.">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image11.png">
              </div>
              <h3 class="mb-3">Внутрішні стіни</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $bloki = file_get_html('https://epicentrk.ua/ua/shop/bloki-stroitelnye/');
                     foreach($bloki->find('.listbody') as $articlebloki){
                         echo $articlebloki;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Внутрішні стіни</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image12.png">
              </div>
              <h3 class="mb-3">Системи опалення</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $otoplenie = file_get_html('https://epicentrk.ua/ua/shop/otoplenie/');
                     foreach($otoplenie->find('.listbody') as $articleotoplenie){
                         echo $articleotoplenie;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Системи опалення</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
          <div class="cards mb-4" data-aos="fade-up" data-aos-delay="200" title="">
            <div class="block__35630">
              <div class="count_img">
                  <img src="images/image13.png">
              </div>
              <h3 class="mb-3">Сад-Город</h3>
            </div>
          </div>
          <div class="card-details card-yellow"><!-- corresponding details for above card/button -->
            <div class="card-details-body">
              <div class="card-details-description">
                <button class="accordion">Розрахунок</button>
                <div class="panel">
                    <form method="post" id="ajax_form" action="" >
                      <input type="hidden" name="form1" value="form1" />
                      <table class="tab_wight" align="center">
                        <tr>
                          <td valign="top"><img src="images/strichkovi.jpg" width="202" height="222" /></td>
                          <td valign="top"> <font color="#dd2a1b"><strong>Вкажіть розміри в метрах</strong></font><br><br>
                            <table>
                              <tr>
                                <td> Ширина <b>X</b></td>
                                <td><input type="text" name="X" value="5" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td>Довжина <b>Y</b></td>
                                <td> <input type="text" name="Y" value="6" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Висота <b>H</b></td>
                                <td><input type="text" name="H" value="1.2" size="3" class="input"></td>
                              </tr>
                              <tr>
                                <td> Товщина <b>A</b></td>
                                <td> <input type="text" name="A" value="0.2" size="3" class="input"></td>
                              </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td colspan="3" valign="top" >
                            <input value="Розрахувати" type="button" id="btn">
                          </td>
                        </tr>
                      </table>
                    </form>
                    <div id="result_form"></div>
                </div>
                <button class="accordion">Вартість тораву для роботи</button>
                <div class="panel">
                  <?php $dacha = file_get_html('https://epicentrk.ua/ua/shop/dacha-sad-i-ogorod/');
                     foreach($dacha->find('.listbody') as $articledacha){
                         echo $articledacha;
                     } ?>
                </div>
              </div>
              <aside class="card-details-sidebar">
                <h3>Сад-Город</h3>
                <p>
                  
                </p>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-dark" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
       
      </div>
    </div>
    <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
              <h2>Новини теми</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled">
              <li class="mb-5" data-aos="fade-right" data-aos-delay="">
                <span class="d-block text-muted mb-3">Apr 19, 2022</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">Вимощення навколо будинку своїми руками</a></h2>
                <p>Обов’язковим атрибутом заміської нерухомості є вимощення навколо будинку. Тому виготовленню зазначеного будівельного елементу слід
                    приділити особливу увагу. Важливість своєчасного виготовлення
                   </p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="100">
                <span class="d-block text-muted mb-3">Apr 19, 2022</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">Як вибрати лінолеум – нюанси та критерії вибору</a></h2>
                
                <p>Сьогодні лінолеум можна побачити всюди. В кафе і супермаркетах, готелях і дитячих садках, офісних приміщеннях,
                    лікарнях і школах. Це підлогове покриття доречно практично в кожному приміщенні.
                   </p>
              </li>
              <li class="mb-5" data-aos="fade-right" data-aos-delay="200">
                <span class="d-block text-muted mb-3">Apr 19, 2022</span>
                <h2 class="h4"><a href="press-single.html" class="text-black">Пароізоляція мансардного даху своїми руками</a></h2>
                <p>Збільшуючи життєвий простір свого будинку, ми йдемо під дах, тобто створюємо житлове приміщення у вигляді мансарди.
                    Щоб жити комфортно в цьому приміщенні, необхідно створити “пиріг” мансардного
                   </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
              <span></span>
              <h2>Зворотній зв'язок</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black">Ми поважаємо наших читачів</h2>
            <p>Готові приймати ваші пропозиції до уваги, щоб удосконалюватися та працювати на благо України та її мешканців</p>
            <p><a href="#home" class="btn btn-primary text-white">Почати</a></p>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="rowtext-center">
          <div class="col-md-12">
            <div class="pt-5">
            <p class="copyright"><small>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </small></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/ajax.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>