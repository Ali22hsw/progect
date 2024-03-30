<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaints";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the authToken cookie is set
if(isset($_COOKIE["authToken"])) {
    // authToken cookie is set, continue with the restricted page logic
    $authToken = $_COOKIE["authToken"];

    // Retrieve user data based on the authToken
    $sql = "SELECT * FROM users WHERE auth_token='$authToken'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User is authenticated, you can continue with the restricted page logic
    } else {
        // User is not authenticated, redirect to login page
        header("Location: ../login/login.html");
        exit();
    }
} else {
    // authToken cookie is not set, redirect to login page
    // header("Location: ../login/login.html");
    die("something");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBord</title>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;400&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700&family=Noto+Naskh+Arabic:wght@400;500;600;700&family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800&family=Nunito:wght@200;300;400;500;600;700&family=Rubik+Broken+Fax&family=Tajawal:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../assets/images/LOGO.jpg" alt="">
                    <h2 class="text-muted"><span class="danger" style="color: #41f1b6;">  موقع شكاوى</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">
                        close
                        </span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-outlined">
                        grid_view
                        </span>
                        <h3>الواجهة الرئيسية </h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                        <h3>الملف الشخصي</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        receipt_long
                        </span>
                        <h3>الرسائل الوارده</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        analytics
                        </span>
                        <h3>الرسائل الصادره</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined" >
                        mail
                        </span>
                        <h3>كل الرسائل</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        lab_profile
                        </span>
                        <h3>التقرير</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        tv_options_input_settings
                        </span>
                        <h3>الاعدادات</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">
                        logout
                        </span>
                        <h3>تسجيل الخروج</h3>
                </a>
            </div>
        </aside>
        <!-- ---------------End of Astde------------------ -->
        <main>

            <h1 style="text-align: center; color: #7380ec;"> الواجهة الرئيسية</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <!-- -------Beign of Sales------------ -->
                <div class="sales">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="lef">
                            <h3> الرسائل الصادره</h3>
                            <h1>25</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">اخر 24 ساعة</small>
                </div>
                <!-- ---------End of Saled--------- -->
                <!-- ------- Begin of Expnfs------------ -->
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="lef">
                            <h3>كل الرسائل </h3>
                            <h1>40</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>100%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">اخر 24 ساعة</small>
                </div>
                <!-- ---------End of Expnfs--------- -->
                <!-- -------Beign of Endicom------------ -->
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="lef">
                            <h3>الرسائل الوارده </h3>
                            <h1>15</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>40%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">اخر 24 ساعة</small>
                </div>
            </div>
                <!-- ---------End of Endicom--------- -->

                <div class="recent-orders">
                    <h2 style="text-align: center; color:#41f1b6;">جدوال الرسائل</h2>
                    <table>
                        <thead>
                            <tr style="color: #7380ec;">
                                <th>الجهة المعنية </th>
                                <th>نوع الشكوى</th>
                                <th>موقع الشكوى</th>
                                <th>صورة عن الشكوى</th>
                                <th>تاريخ الشكوى</th>
                                <th>تفاصيل الشكوى</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                        </tbody>
                    </table>
                    <a href="#">اظهار كل الجدوال</a>
                </div>
           
        </main>
        <div class="right">
            <div class="top">
                <button  id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                    <div class="profile">
                        <div class="info">
                            <p>اهلا<b> علي </b></p>
                            <small class="text-muted">المالك</small>
                        </div>
                    
                        <div class="profile-photo">
                            <img src="../assets/images/h23.jpg" alt="">
                        </div>
                    </div>
            </div>
                <!-- End of top -->
            <div class="recent-updates">
                <h2 style="color:#7380ec; text-align: center;" >اخر التحديثات</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../assets/images/home3.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b> الموظف </b>قام بلرد على الرسالة.</p>
                                <small class="text-muted">قبل دقيقة  </small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../assets/images/home2.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b> الموظف </b>قام بلرد على الرسالة.</p>
                                <small class="text-muted">قبل دقيقتين</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../assets/images/home1.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b> الموظف </b>قام بلرد على الرسالة.</p>
                                <small class="text-muted">قبل ثلاثة دقائق</small>
                            </div>
                        </div>
                    </div>
                
                </div>

               <!-- ------------------End of recent updates------------------ -->
            <div class="sales-analytics">
               <h2 style="color: #7380ec;text-align: center;">تحليل الرسائل</h2>
                <div class="item offline">
                 <div class="icon">  <span class="material-symbols-outlined" >mail</span> </div>
                  <div class="right">
                    <div class="info">
                      <h3>بدون انترنيت</h3>
                         <small class="text-muted">اخر 24 ساعة </small>
                    </div>
                    <h5 class="danger">40%</h5>
                    <h3>15</h3>
                </div>
                </div>
             <div class="item online">
              <div class="icon">  <span class="material-symbols-outlined" >mail</span> </div>
               <div class="right">
                <div class="info">
                  <h3>متصل بلانترنيت</h3>
                  <small class="text-muted">اخر 24 ساعة  </small>
                 </div>
                <h5 class="success">60%</h5>
                <h3>25</h3>
             </div>
             </div>
             <div class="item add-product">
              <div >  <span class="material-symbols-outlined">
                add
                </span> </div>
               
                  <h3>اظافة رسالة</h3>
                 
             </div>
             </div>
        </div>
             
             
        
    </div>
   
    <script src="orders.js"></script> 
    <script src="index.js"></script> 
</body>

</html>