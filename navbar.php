

<body>
    <!-- <h1 class="text-center text-primary font-weight-bold ">Salapa Bikash Bank</h1> -->
    <header>
      <section>
        <div class="mlrem">
          <!-- <p class="ml-5 float-left display-5">We help to materialize your dream. We maintain your trust.</p> -->
          <div class="row navbar navbar-expand-lg navbar-collapse">
            <div class="col col-md"><img src="images/salapa.jpg" class="logo"></div>
            <!-- <div class="col-lg-5 col-md-5 col-12 mb-4"></div> -->
              <div class=" col-xs nav-item"><a class="nav-link item" href="index.php"><span class="eng"> Home</span> <span class="nep"> गृह</span><span class="sr-only">(current)</span></a></div>
                <div class="col-xs nav-item"><a class="nav-link item" href="about.php"><span class="eng"> About Us</span> <span class="nep">हाम्रो  बारेमा</span></a></div>
                <div class="col-xs nav-item dropdown"><a class="nav-link dropdown-toggle item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="eng">Deposits</span> <span class="nep">निक्षेप </span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="current.php">Current</a>
                <a class="dropdown-item" href="fixed.php">Fixed Deposit</a> -->
                <?php 
                include "admin/db.php";
                $get_news = "SELECT * FROM news order by newsId";
                $run_news = mysqli_query($con, $get_news);
                while ($row_news=mysqli_fetch_array($run_news)) {
                    $newsId= $row_news['newsId'];
                    $news_title= $row_news['news_title']; 
                    $nep_title= $row_news['nep_title']; 
                    ?>
                    <a class="dropdown-item" href="deposits.php?id=<?php echo $newsId ?>"><span class="eng"><?php echo $news_title; ?></span>
                      <span class="nep"><?php echo $nep_title; ?></span>
                    </a>
                <?php } ?>
              </div>
              
              </div>
                <div class="col-xs nav-item dropdown"><a class="nav-link dropdown-toggle item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="eng">Loan & Advances </span> <span class="nep">ऋण र प्रगति </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <?php 
                include "admin/db.php";
                $get_loan = "SELECT * FROM loan order by id";
                $run_loan = mysqli_query($con, $get_loan);
                while ($row_loan=mysqli_fetch_array($run_loan)) {
                    $loanId= $row_loan['id'];
                    $loan_title= $row_loan['title']; 
                    $nep_title= $row_loan['nep_title']; 
                    ?>
                    <a class="dropdown-item" href="loan.php?id=<?php echo $loanId ?>"><span class="eng"><?php echo $loan_title; ?></span>
                      <span class="nep"><?php echo $nep_title; ?></span>
                    </a>
                <?php } ?>
              <!-- <a class="dropdown-item" href="agriculture.php">Agriculture loan</a>
              <a class="dropdown-item" href="#">Consumer loan</a>
              <a class="dropdown-item" href="#">Deprived Sector Loan</a> -->
            </div>
              </div>
                <!-- <div class="col"><a class="nav-link" href="remittance.php"><span class="eng">Remittances</span> <span class="nep"> रेमिट्य।न्स</span></a></div> -->
                <div class="col-xs nav-item"><a class="nav-link item" href="remittance.php"><span class="eng">Remittances</span> <span class="nep">सूचना</span></a></div>
                <!-- <div class="col-xs nav-item"><a class="nav-link item" href="notice.php"><span class="eng">Investor Relations</span> <span class="nep">सूचना</span></a></div> -->
                <div class="col-xs nav-item"><a class="nav-link item" href="notice.php"><span class="eng">Notices</span> <span class="nep">सूचना</span></a></div>
                <div class="col-xs nav-item"><a class="nav-link item" href="gallery.php"><span class="eng">Gallery</span> <span class="nep">ग्यालरी</span></a></div>
                <div class="col-xs nav-item"><a class="nav-link item" href="micro.php"><span class="eng">Micro Finance</span> <span class="nep">ग्यालरी</span></a></div>

            <!-- <div class="col-xs">
            <form class="form-inline">
              <div class="form-group">
              <input class="form-control" size="10" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
              </div>
              </form>
            </div> -->
            <div class="col-xs btn-lang ml-auto mr-2"><button type="button" class="btn btn-success"><i class="fas fa-globe "><span id="english" > English</span><span id="nepali"> नेपाली</span></i></button></div>
          </div>
        </div>
    <!-- </section> -->
    
    <!-- Navbar start -->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-success"> -->
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
    
      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <!-- use mr-auto to switch the navbar content to left-->
    
        <!-- <ul class="navbar-nav mr-auto pl-5">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><span class="eng"> Home</span> <span class="nep"> गृह</span><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><span class="eng"> About Us</span> <span class="nep">हाम्रो  बारेमा</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="eng"> Deposits</span> <span class="nep">निक्षेप </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="current.php">Current</a>
                <a class="dropdown-item" href="fixed.php">Fixed Deposit</a>
                <?php 
                include "admin/db.php";
                $get_news = "SELECT * FROM news order by newsId";
                $run_news = mysqli_query($con, $get_news);
                while ($row_news=mysqli_fetch_array($run_news)) {
                    $newsId= $row_news['newsId'];
                    $news_title= $row_news['news_title']; 
                    $nep_title= $row_news['nep_title']; ?>
                <a class="dropdown-item" href="deposits.php?id=<?php echo $newsId ?>"><span class="eng"><?php echo $news_title; ?></span>
                  <span class="nep"><?php echo $nep_title; ?></span>
                </a>
                <?php } ?>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="eng">Loan & Advances </span> <span class="nep">ऋण र प्रगति </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="agriculture.php">Agriculture loan</a>
              <a class="dropdown-item" href="#">Consumer loan</a>
              <a class="dropdown-item" href="#">Deprived Sector Loan</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="remittance.php"><span class="eng">Remittances</span> <span class="nep"> रेमिट्य।न्स</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="branch.php"><span class="eng">Branches </span> <span class="nep">साखा</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice.php"><span class="eng">Notices</span> <span class="nep">सूचना</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php"><span class="eng">Gallery</span> <span class="nep">ग्यालरी</span></a>
          </li>
        </ul> -->
        
      <!-- </div> -->

    </section>

    <div class="breaker mt-3"></div>

    </header>