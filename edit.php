<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>  

    <title>Edit Profile</title>
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
        <div class="content">
        <?php
         include 'koneksi.php';
         $id=$_GET['id'];
        $sql = "SELECT * FROM data_diri where idpasien=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "query salah";
        }
        ?>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form class="form-horizontal" method="post" action="update.php">
            <input type="hidden" name="idpasien" value="<?php echo $row['idpasien']?>">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="<?php echo $row['name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="usia">Age :</label>
                    <div class="col-sm-10">
                        <input type="text" name="usia" value="<?php echo $row['usia']?>"> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="complaint">Complaint :</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="complaint" name="complaint" value="<?php echo $row['complaint']?>">
                          <option></option> 
                          <option>Depression</option>
                          <option>Bipolar Disorder </option>
                          <option>Anxiety Disorders</option>
                          <option>Personality Disorders</option>
                          <option>Psychotic Disorders</option>
                          <option>Eating Disorders</option>
                          <option>Trauma-Related Disorders </option>
                          <option>Substance Abuse Disorders</option>
                          <option>Sleeping Disorders</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="konsultasi">Doctor :</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="konsultasi" name="konsultasi" value="<?php echo $row['konsultasi']?>">
                          <option></option> 
                          <option>dr. Kathina Sharma</option>
                          <option>dr. Abraham</option>
                          <option>dr. Habibi</option>
                          <option>dr. Aqila</option>
                          <option>dr. Farrel</option>
                          <option>dr. Edwina</option>
                          <option>dr. Daphne</option>
                          <option>dr. Anthony</option>
                          <option>dr. Colin</option>
                          <option>dr. Grey</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="medicine">Medicine:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="medicine" name="medicine" alue="<?php echo $row['medicine']?>">
                          <option></option> 
                          <option>Celexa</option>
                          <option>Lexapro</option>
                          <option>Zoloft</option>
                          <option>Trentellix </option>
                          <option>Sinequan</option>
                          <option>Wellbutrin</option>
                          <option>Parnate</option>
                          <option>Remeron</option>
                          <option>Deplin</option>
                          <option>Xanax</option>
                          <option>Neurontin</option>
                          <option>Lyrica</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nohp">Phone Number :</label>
                    <div class="col-sm-10">
                        <input type="text" name="nohp" value="<?php echo $row['nohp']?>">
                    </div>
                </div>
            <button class="btn btn-danger" type="submit">Update</button>
        </form>
    <?php }?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>
