<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Montserrat, poppins;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: top;
            /* height: 100vh; */
            margin: 0;
        }

        .profile-container {
            background-image: url('https://cdn1-production-images-kly.akamaized.net/J_qaSn7xpC5d-kbHx-wCsOiFsuY=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4770934/original/018943800_1710311605-mountains-8451480_1280.jpg');
            background-size: cover; 
            background-position: center;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
            margin-top: 50px;
        }

        .profile-container img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-top: 20px;
            margin-bottom: 20px;
            /* outline: 1px solid #f2f2f2; */
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        table td {
            padding: 5px 0;
            font-size: 20px;
            color: #333;
            background: #f2f2f2;
            border-radius: 2px
        }

        table td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile-container">
    <img src="https://i0.wp.com/headshots-inc.com/wp-content/uploads/2020/11/Professional-Headshot-Poses-Blog-Post.jpg?w=720&ssl=1" alt="profile picture">
        <table>
            <tr> 
                <td><?= $nama ?></td> 
            </tr> 
            <tr> 
                <td><?= $kelas ?></td> 
            </tr> 
            <tr> 
                <td><?= $npm ?></td> 
            </tr> 
        </table>
    </div>
</body>
</html>
