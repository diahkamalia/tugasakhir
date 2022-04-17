<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>  

    <title>Add Profile</title>
</head>
<body>
    <style>
    a, a:hover, a:visited, a:active {
    color: inherit;
    text-decoration: none;
    }

    </style>
    <div class="container">
        <div class="header">
            <ul class="nav justify-content-end">
                <a href="index.php"><img src="pict/yanablack.png" width="100px" alt="">
                </a>
                <a  href="profile.php"><b><u>USER PROFILE</u></b></a>
                <a  href="add.php"><b>ADD PROFILE</b></a>
                <a  href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></a>
            </ul>
        </div>
    <div class="content ">
        <h1 class="mb-5"></h1>
            <table class="table table-striped" border="2" >
            <tr>
                <td><b>ID</b></td>
                <td><b>Name</td></td>
                <td><b>Age</b></td>
                <td><b>Complaint</b></td>
                <td><b>Doctor</b></td>
                <td><b>Medicine</b></td>
                <td><b>Phone Number</b></td>
                <td><b>Action</b></td>
                </tr>
                    <?php
                    include 'koneksi.php';
                    $sql="SELECT * FROM data_diri";
                    $hasil = mysqli_query($koneksi, $sql);
                    while($row = mysqli_fetch_array($hasil))
                    {
                    ?>
                <tr>
                <td><?=$row['idpasien'];?></td>
                <td><?=$row['name'];?></td>
                <td><?=$row['usia'];?></td>
                <td><?=$row['complaint'];?></td>
                <td><?=$row['konsultasi'];?></td>
                <td><?=$row['medicine'];?></td>
                <td><?=$row['nohp'];?></td>
                <td><a href="edit.php?id=<?=$row['idpasien']?>" class="btn btn-danger" > &nbsp;&nbsp;Edit&nbsp;&nbsp;</a> <a href="delete.php?id=<?=$row['idpasien']?>" class="btn btn-dark"> Delete</a></td>
                </tr>
                    <?php }
                    ?> 
            </table>
        </div>
    </div>
        <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
</body>
</html>
