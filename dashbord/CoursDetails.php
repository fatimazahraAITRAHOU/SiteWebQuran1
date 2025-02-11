<?php
require_once 'connect.php';

// استعلام يجمع بين الدورات والفيديوهات المرتبطة بها
$query = "
    SELECT cours.id AS cours_id, cours.title, videos.video_url 
    FROM cours 
    LEFT JOIN videos ON cours.id = videos.cours_id
";
$result = mysqli_query($con2, $query);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الدورات</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 90%; border-collapse: collapse; margin: 10% auto; background-color: white; }
        th, td { border: 1px solid black; padding: 10px; font-size: 18px; text-align: center; }
        th { background-color: #f4f4f4; }
        .remove, .button { text-decoration: none; color: brown; font-weight: bold; }
        .button { background: #FDF0D5; padding: 10px 20px; margin-top: 30px; border-radius: 10px; display: inline-block; }
        @media (max-width: 763px) { table { width: 100%; margin: 20px auto; } th, td { font-size: 17px; padding: 8px; } }
    </style>
</head>
<body>
    <?php require_once('Header.php'); ?>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="addcoursdetails.php" class='button'>إضافة الدروس</a>
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>الدرس</th>
                            <th>الفيديو</th>
                            <th>--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['title'] ?? 'غير متوفر'); ?></td>
                                <td>
                                    <?php if (!empty($row['video_url'])) { 
                                        // استخراج كود الفيديو من رابط YouTube
                                        preg_match('/[?&]v=([^&]+)/', $row['video_url'], $matches);
                                        $video_id = $matches[1] ?? null;
                                        
                                        if ($video_id) { ?>
                                            <iframe src="https://www.youtube.com/embed/<?php echo htmlspecialchars($video_id); ?>" allowfullscreen></iframe>
                                        <?php } else { ?>
                                            <p>رابط غير صالح</p>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <p>لا يوجد فيديو</p>
                                    <?php } ?>
                                </td>
                                <td><a class="remove" href='suprimercours.php?id=<?php echo $row['cours_id']; ?>'>حذف</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
