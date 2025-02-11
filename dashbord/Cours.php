<?php
require_once 'connect.php';
 $select = 'SELECT * FROM `cours`';
 $data = mysqli_query($con2, $select);
?>

    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
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

.remove, .button {
    text-decoration: none;
    color: brown;
    font-weight: bold;
}
.button{
  background: #FDF0D5;
  padding: 20px;
  margin-top: 30px;
  border-radius: 10px;
}
@media(max-width: 763px) {
    table {
        width: 100%;
        margin: 20px auto;
        
    }

    th, td {
        font-size: 17px;
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
              <a href="Add_Cours.php" class='button'>إضافة دورة</a>

                <thead>
                  <tr>
                   
                    <th>الصورة</th>
                    <th>العنوان</th>
                    <th>المدة</th>
                    <th >نوع الدورة</th>
                    <th colspan="2" >--</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $cours) {
                    ?>
                    <tr>
                    <td><img src="../image1/<?php  echo $cours ['image']?>" alt="" style='width: 60px;'></td>
                    <td><?php echo $cours ['title']?></td>
                      <td><?php echo $cours ['duration']?></td>
                      <td><?php echo $cours ['badge']?></td>
                      <td ><a class="remove" href='suprimercours.php?id=<?php echo $cours['id']?>'>حذف</a></td>
                      <td ><a class="remove" href='updatecours.php?id=<?php echo $cours['id']?>'>تعديل</a></td>
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
