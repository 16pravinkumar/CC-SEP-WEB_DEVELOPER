<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'css/style.php' ?>
  <?php include 'links/link.php' ?>
  <?php include 'databaseconnection.php' ?>
  <?php include 'database.php' ?>
  <?php include 'api.php' ?>

</head>

<body onload="fetch()">
  <!-- *************** Nav-contents* ************************ -->
  <nav class="navbar navbar-expand-lg p-3">
    <a class="navbar-brand pl-5 covid-header" href="#">COVID-19</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse mr-5 " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-uppercase">
        <li class="nav-item active mx-3">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#precaution_id">Precaution</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#symp_id">Symptoms</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#prevention_id">Prevention</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#contact_id">Conact US</a>
        </li>

      </ul>

    </div>
  </nav>

  <!-- ************ Main Header ********************* -->
  <div class="main_container">
    <div class="row h-100 w-100">
      <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-2">
        <div class="left-side  w-100 h-100 d-flex justify-content-center align-items-center ">
          <h1 class="ml-5"> Press conferences on COVID-19 and other global health issues </h1>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-12 order-lg-2 order-1">
        <div class="right-side w-100 h-100 d-flex justify-content-center align-items-center mt-auto">
          <img src="images/earth.png" class="imagesearth">
        </div>
      </div>
    </div>
  </div>

  <!-- ********************** Latest Update ******************** -->
  <section class="update mb-5 container-fluid">
    <div class="mb-3">
      <h3 class="text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
    </div>

    <div class="table-responsive">

      <table class=" table table-bordered table-striped text-center d-flex justify-content-center align-items-center " id="tablevalue">
        
          <tr  >
            <th >Country</th>
            <th >Total Confirmed</th>
            <th >Total Recovered</th>
            <th >Total Death</th>
            <th >New Confirmed</th>
            
            <th>New Death</th>
            <th>Date</th>
          </tr>
        
      </table>
    </div>



  </section>


  <!-- ************************* precaution section *************** -->

  <div id="precaution_id" class="sub-container">
    <div class="container-section">
      <div class="left-container">
        <img src="images/Precaution.svg " alt="">
      </div>

      <div class="right-container">
        <h1>Precaution Dose</h1>
        <p> All fully vaccinated adult citizens (18+ and have taken 2 doses) are eligible for precaution dose from 10/04/2022. Eligible citizens can avail precaution dose at any Government or Private Vaccination Centre. Citizens should carry their Final Certificate of vaccination (with details of both earlier doses). Citizens should use the same mobile number and ID card used for earlier doses.
          <br> <br>

          HCWs, FLWs and Citizens aged 60 year or more, shall continue to receive precaution dose vaccination at any CVC, including free of charge vaccination at Government Vaccination Centre. <br> <br>

          For international travel, precaution dose can be administered to such beneficiary less than 9 months to at a minimum interval of 3 months (90 days) from the date of administration of the second dose as recorded on Co-WlN as per requirement of the destination country. All Vaccination centre in the State where precaution dose is being administered are eligible to administer precaution dose.
        </p>
      </div>
    </div>
  </div>

  <!-- Symptoms Sections -->
  <div id="symp_id" class="container-fluid  pt-5 pb-5">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase cor-symp">CoronaVirus Symptoms</h1>
    </div>

    <div class="container">
      <div class="row con-symp">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/cough-removebg-preview.png" class="img-fluid symptom-img" alt="loading..">
            <figcaption>Cough</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/fever-removebg-preview.png" class="img-fluid " width="155" height="155" alt="loading..">
            <figcaption>Fever</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/cold-removebg-preview.png" class="img-fluid " width="215" height="215" alt="loading..">
            <figcaption>Cold</figcaption>
          </figure>

        </div>


      </div>

      <div class="row con-symp">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/brea-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>Difficulty In Breathing </figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/runnynose-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>Runny Nose</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/tiredness-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>TiredNess</figcaption>
          </figure>

        </div>


      </div>
    </div>

  </div>

  <!-- ******************** prevention ********************* -->
  <div id="prevention_id" class="container-fluid  pt-5 pb-5 banner">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase prevention-step">6 Steps Prevention Against CoronaVirus</h1>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/mask-removebg-preview.png" class="img-fluid covid-img-prevention " width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Wear a mask in public, especially indoors or when physical distancing is not possible.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/stay-home-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Stay home if you feel unwell and save others as well.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/wash-removebg-preview.png" class="img-fluid covid-img-prevention" width="800" height="800" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Clean your hands for 20 sec and Use soap or other matherial which kills germs. </figcaption>
              </p>
            </div>


          </div>

        </div>
      </div>
    </div>



    <div class="container">
      <div class="row ">
        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/tv-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>stay informed by watching news and follow the recommended practice. </figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/distance-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Maintain a safe distance from others (at least 1 metre), even if they don’t appear to be sick.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/covid-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</figcaption>
              </p>
            </div>


          </div>

        </div>
      </div>
    </div>





  </div>

  <!-- ****************************** Contact US ASAP ************************** -->
  <div id="contact_id" class="container-fluid  pt-5 pb-5">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase">Contact US</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">

          <form action="" method="POST">
            <div class="form-group">
              <label>Username </label>
              <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Email </label>
              <input type="email" class="form-control" name="email" placeholder="emailid@email.com" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Mobile </label>
              <input type="number" class="form-control" name="mobile" placeholder="+91" autocomplete="off" required>
            </div>

            <div class="form-group">
              <label>Select Symptoms</label> <br>
              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="Cold">
                <label class="custom-control-label" for="customcheckbox1">Cold</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
                <label class="custom-control-label" for="customcheckbox2">Fever</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Difficulty in breathing">
                <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
              </div>

              <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Feeling weak">
                <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
              </div>




            </div>



            <div class="form-group">
              <label for="exampleFormControlTextarea1">Describe how you are feeling</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary sub-btn" name="submit">Submit</button>
          </form>

        </div>
      </div>
    </div>


  </div>

  <!-- ******************** top scroll ************ -->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="scrolltop()" id="myBtn"></i>
  </div>

  <!-- ******************************* Footer Section ************************* -->

  <footer class="mt-5">
    <div class="footer-style text-center container-fluid">
      <p>copyright by Pravinkumar Sharma</p>
    </div>
  </footer>




  <!-- Script *************************** -->

  <script>
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
      scrollfun();
    }

    function scrollfun() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function scrolltop() {
      document.body.scrollTop = 0; //for safari
      document.documentElement.scrollTop = 0; //for chrome , firefox
    }

    function fetch(){     
       $.get("https://api.covid19api.com/summary" , 
        
       function (data)
       {
        // console.log(data['Countries'].length);

        var tablevalue = document.getElementById("tablevalue");

        var i ;

        for(i = 1 ; i < data['Countries'].length ; i++)
        {

          var newRow = tablevalue.insertRow();
          
          newRow.insertCell(0);
          tablevalue.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
          tablevalue.rows[i].cells[0].style.background = '#937DC2';
          tablevalue.rows[i].cells[0].style.color = 'white';

          newRow.insertCell(1);
          tablevalue.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
          tablevalue.rows[i].cells[1].style.background = '#FFD32D';
          tablevalue.rows[i].cells[1].style.color = 'white';

          newRow.insertCell(2);
          tablevalue.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
          tablevalue.rows[i].cells[2].style.background = '#7FB77E';
          tablevalue.rows[i].cells[2].style.color = 'white';

          newRow.insertCell(3);
          tablevalue.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
          tablevalue.rows[i].cells[3].style.background = '#FD5D5D';
          tablevalue.rows[i].cells[3].style.color = 'white';

          newRow.insertCell(4);
          tablevalue.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
          tablevalue.rows[i].cells[4].style.background = '#7FB77E';
          tablevalue.rows[i].cells[4].style.color = 'white';

          newRow.insertCell(5);
          tablevalue.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
          tablevalue.rows[i].cells[5].style.background = '#F37878';
          tablevalue.rows[i].cells[5].style.color = 'white';

          newRow.insertCell(6);
          tablevalue.rows[i].cells[6].innerHTML = data['Countries'][i-1]['Date'];
          tablevalue.rows[i].cells[6].style.background = '#219F94';
          tablevalue.rows[i].cells[6].style.color = 'white';
          tablevalue.rows[i].cells[6].style.padding = '10px';

          
        }


       }
       
       
       );
       
      }

  </script>
</body>

</html>