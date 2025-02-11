<?php
require_once 'connect.php';
 $select = 'SELECT * FROM `information`';
 $data = mysqli_query($con, $select);
?>

    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
            <style>
               * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    padding: 20px;
}

table {
    width: 90%;
    /* max-width: 800px; */
    border-collapse: collapse;
    margin: 10% auto;
    background-color: white;
    overflow-x: auto;
}

th, td {
    border: 1px solid black;
    padding: 10px;
    font-size: 18px;
    text-align: center;
}

th {
    background-color: #f4f4f4;
}

.remove {
    text-decoration: none;
    color: brown;
    font-weight: bold;
}

@media(max-width: 763px) {
    table {
        width: 100%;
        margin: 20px auto;
        
    }

    th, td {
        font-size: 16px;
        padding: 8px;
    }
} 

            </style>
    </head>
    <body>
    <?php
      require_once('Header.php') 
      ?>
    <section class="section">
          <div class="card">
            
            <div class="card-body">
             
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                   
                    <th>الإسم الكامل</th>
                    <th>العمر</th>
                    <th>رقم الهاتف</th>
                    <th >البلد</th>
                    <th >الوظيفة</th>
                    <th >الرواية التي تقرأ بها الطالبة</th>
                    <th>الختمة التي تريدها الطالبة</th>
                    <th> مستوى الطالبة في التلاوة و قواعد التجويد</th>
                    <th>عدد محفوظ الطالبة إذا كان لديها حفظ سابق</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $user) {
                    ?>
                    <tr>
                      <td><?php echo $user ['name']?></td>
                      <td><?php echo $user ['age']?></td>
                      <td><?php echo $user ['phone']?></td>
                      <td><?php echo $user ['pays']?></td>
                      <td><?php echo $user ['carriere']?></td>
                      <td><?php echo $user ['version']?></td>
                      <td><?php echo $user ['conclution']?></td>
                      <td><?php echo $user ['niveau']?></td>
                      <td><?php echo $user ['number']?></td>
                      <td ><a class="remove" href='suprimer.php?id=<?php echo $user['id']?>'>حذف</a></td>
                    </tr>
                  <?php 
                  }
                    ?>
                    </tbody>
                    
           
               
                </tbody> 
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

    </section>
    </body>
    </html>
