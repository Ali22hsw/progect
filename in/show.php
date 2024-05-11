<?php
require_once "../conn.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title> الشكاوى الجديدة </title>
  <meta name="title" content="موقع شكاوى كربلاءالمقدسة ">
    <meta name="description" content="هذا موقع شكاوى">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script defer src="sc.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <script defer src="sc.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;400&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700&family=Noto+Naskh+Arabic:wght@400;500;600;700&family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800&family=Nunito:wght@200;300;400;500;600;700&family=Rubik+Broken+Fax&family=Tajawal:wght@200;300&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="qs.css">
  <!-- font awsome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="../assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="../assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="../assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">شكاوى</p>
  </div>





  


  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="../assets/images/LOGO.jpg" width="140" height="50" alt="شكاوى" style="border-radius: 50%;">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="../assets/images/LOGO.jpg" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="../index.html" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">الصفحة الرىسية</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#table" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">  جدول الشكاوى</span>
            </a>
          </li>

          

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span"> كيف ابحث عن شكوتي</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">موقع شكاوى</p>

          <address class="body-4">
           Karbala city <br>
           Al Hussain
          </address>


          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">Ali@Hasham.com</a>

          <div class="separator"></div>

          <p class="contact-label">شكاوى</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
         07717678295
          </a>
        </div>

      </nav>

      <a href="../login/login.html" class="btn btn-secondary">
        <span class="text text-1"> المعلومات الشخصية</span>

        <span class="text text-2" aria-hidden="true">اضغط هنا</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

       

       

        <a href="#" class="hero-btn has-after">
          <img src="../assets/images/sign-up-application-svgrepo-com.svg" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">شكاوى</span>
        </a>

      </section>





     

      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">شكوى</p>

            <h2 class="headline-1 section-title"> كربلاءالمقدسة</h2>

            <p class="section-text">
              انتبه عزيزي المواطن الكريم الى الجدول التالي 
              يمكنك من خلاله اجاد شكواك وايضا يمكنك البحث عنها عن طريق 
              ادات البحث او البحث عن طريق معلوماتك الشخصية
            </p>

            <div class="contact-label">موقع شكاوى</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">07717678295</a>

            <a href="#table" class="btn btn-primary">
              <span class="text text-1"> يمكنك الذهاب الان الى الجدول</span>

              <span class="text text-2" aria-hidden="true">اضغط هنا </span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="../assets/images/g3.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            
                
            

            <!-- <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/LOGO.jpg" width="133" height="134" loading="lazy" alt="" style="border-radius: 50%;">
            </div> -->

          </figure>

          <!-- <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape"> -->

        </div>
      </section>




    
      <!-- 
        - #SPECIAL DISH
      -->




      <!-- 
        - #MENU
      -->

    






     
        <!-- - #TESTIMONIALS -->
 
      <section class="section testi text-center has-bg-image" id="table"
        aria-label="testimonials">
        <div class="container">

          

          <p class="headline-2 testi-text">
            اهلا وسهلا عزيزي المواطن يمكنك البحث عن شكواك من خلال هذا الجدول
        </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          

        </div>
     


      
      <!-- 
        - #RESERVATION
      -->
<!--  الجدول -->
			<?php
			$sql="SELECT * FROM `info` WHERE 1" ;
            $result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			
			
			if ($result->num_rows != 0){ 
				
				echo'<div class="container" w-50 pt-5 >
                  <table id="example" class="table table-striped" style="width:100%">
                  
                  <thead>
                      <tr>
                          <th>الجهة المعنية</th>
                          <th>نوع الشكوى</th>
                          <th>موقع الشكوى</th>
                          <th>صورة عن الشكوى المقدمه</th>
                          <th>تاريخ الشكوى</th>
                          <th>تفاصيل عن الشكوى</th>
                      </tr>
                  </thead><tbody>';
				mysqli_data_seek($result, 0);
				while ($row = mysqli_fetch_assoc($result)) {
			echo' 
            
                  
                      <tr>
                          <td>'. $row['Government_department'].'</td>
                          <td>'. $row['type'].'</td>
						  <td>'. $row['path_person'].'</td>
						  <td>'. $row['image_path'].'</td>
						  <td>'. $row['date'].'</td>
						  <td>'. $row['note'].'</td>
			<td>
                      </tr>';}} ?>
                      
                  </tbody>
                  
                 </table>
              </div>
            </section> 

      

   
  




      <!-- 
        - #FEATURES
      -->

      



      <!-- 
        - #EVENT
      -->

      
  <!-- 
    - #FOOTER
  -->

<!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center">
   
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="../assets/images/LOGO.jpg" width="160" height="50" loading="lazy" alt="grilli home" style="border-radius: 50%;">
          </a>

          <address class="body-4">
            موقع شكاوى محافظة كربلاء
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">فريق الدعم</a>

          <a href="tel:+88123123456" class="body-4 contact-link">قدم شكاوى ونحن في الخدمة</a>

          

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">المزيد</p>

          <p class="label-1">
            اشترك وقدم شكواك 
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">الاشتراك</span>

              <span class="text text-2" aria-hidden="true">الاشتراك</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">شكوى جديدة</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">شكوى قديمة</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">من نحن</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">تواصل معنا</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy;  
           <br>تطوير
      علي هاشم 
          <br>
   منتظر حيدر         
           <br>
         احمد صالح <a href="https://github.com/Team 5 stars"
            target="_blank" class="link">علي هاشم</a>
        </p>

      </div>

    </div>
  </footer>


  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>