<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/add.css" />
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
                <a  href="profile.php"><b>USER PROFILE</b></a>
                <a  href="add.php"><b><u>ADD PROFILE</u></b></a>
                <a  href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></a>
            </ul>
        </div>
        <div class="content">
        <form class="form-horizontal"  method="post" action="action.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="usia">Age :</label>
                <div class="col-sm-10">
                <select class="form-control" id="usia" name="usia" required>
                  <option>Choose your age</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                  <option>32</option>
                  <option>33</option>
                  <option>34</option>
                  <option>35</option>
                  <option>36</option>
                  <option>37</option>
                  <option>38</option>
                  <option>39</option>
                  <option>40</option>
                  <option>41</option>
                  <option>42</option>
                  <option>43</option>
                  <option>44</option>
                  <option>45</option>
                  <option>46</option>
                  <option>47</option>
                  <option>48</option>
                  <option>49</option>
                  <option>50</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="complaint">Complaint :</label>
                <div class="col-sm-10">
                    <select class="form-control" id="complaint" name="complaint" required>
                  <option>Choose your complaint</option>
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
                <select class="form-control" id="konsultasi" name="konsultasi" required>
                  <option>Choose your doctor</option>
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
                <label class="control-label col-sm-2" for="medicine">Medicine :</label>
                <div class="col-sm-10">
                    <select class="form-control" id="medicine" name="medicine" required>
                  <option>Choose your medicine</option>
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
                    <input type="text" class="form-control" id="nohp" placeholder="Enter your phone number" name="nohp">
                </div>
            </div>
            <button class="btn btn-danger" type="submit">Kirim</button>
        </form>
</div>
</div>
</body>
</html>