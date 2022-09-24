<style>
    * {
        margin: 0 ;
        padding: 0 ;
        box-sizing: border-box;
        font-family: 'Merriweather', serif;

        font-family: 'Montserrat', sans-serif;

        font-family: 'Poppins', sans-serif;

        font-family: 'Roboto', sans-serif;

        font-family: 'Sacramento', cursive;

        font-family: 'Ubuntu', sans-serif;


    }

    html {
        scroll-behavior: smooth;
    }

    .hum-btn {
        color: whitesmoke !important;
    }

    
    .navbar {

        background-color: #017e7e;
    }

    .navbar a {
        color: whitesmoke;
    }

    .navbar .nav-item a:hover {
        color: yellow;
    }

    .navbar-toggler {
        color: whitesmoke;
        z-index: 6;
    }

    
    .navbar-toggler-icon {
        color: black !important;
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: whitesmoke !important;
        
        order: 5;
    
    }

    .covid-header:hover{
        color: yellow !important;
    }
    /* ********************** Main header ************************** */

    .main_container {
        width: 100%;
        height: 460px;
        /* background: #edffff; */

    }

    .imagesearth {
        width: 400px;
        height: 200px;
    }

    .left-side h1 {
        color: #017e7e;
        font-size: 3rem;
    }

    h3 {
        color: #017e7e;

    }

    .right-side img {
        animation: earth 5s linear infinite;
    }

    @keyframes earth {
        0% {
            transform: scale(0.75);
        }

        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(0.75);
        }

        60% {
            transform: scale(1);
        }

        80% {
            transform: scale(0.75);
        }

        100% {
            transform: scale(0.75);
        }

    }

    /* <!-- ********************** Latest Update ******************** --> */
    .update {
        margin: 0 0 30px 0;
       
    }
    .update h3{
        color: #BD2000 !important;
    }

    table .tr-head{
        margin: 10px;
    }

    .awareness h2 {
        color: #ff7675 !important;
        font-size: 1rem;
    }

    .awareness h3 {
        text-align: center;
        font-size: 2rem;
    }

    #precaution_id .section_header h1 {
       
        font-weight: 600;
        font-size: 2rem;
        
    }

    .prevention-step{
        color: #017e7e !important;
    }

    /* background-color: #111827; */





























    /* <!-- ************************* precaution section *************** --> */

    .sub-container {
        background: #edffff;
    }

    .container-section {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px 20px;
    }

    .left-container {
        /* background-color: black; */
        margin: 10px;

    }
    .cor-symp{
        color: #017e7e;
    }

    .right-container {
        /* background-color: blue; */
        padding: 0 20px;

    }

    .right-container h1 {
        color: #017e7e;
    }

    /* **************symptoms sections********************* */
    .symptom-img {
        width: 70px;
        height: 70px;
    }

    .banner {
        background: #edffff;
    }

    /* **************** footer************************ */

    .sub-btn {
        background: #017e7e !important;
        border-radius: 6px !important;
    }

    .footer-style {
        background: #017e7e;
        width: 100%;
        height: 40px;

    }

    .footer-style p {

        margin-top: 2px;
        color: whitesmoke;
        margin-bottom: 0 !important;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 40px;
        right: 40px;
        z-index: 99;
        background: #017e7e;
        color: whitesmoke;
        padding: 5px;
        border-radius: 6px;
        cursor: pointer;
        outline: none;

    }

    #myBtn:hover {
        box-shadow: 3px 3px 11px #017e7e;
        cursor: pointer;
    }
























    /* ********************* Responsive **************** */

    @media (max-width:490px) {
        .update {
            margin-top: 115px;
        }

        .awareness h3,
        h2 {
            text-align: center;
            font-size: 1.5rem;
            margin: 0 20px;
            /* justify-content: space-around; */
        }

        .sub-container .row {
            margin-top: 0px;
        }

        .row .precaution-img img {
            width: 20px;
            height: 20px;
        }

        .container-section {
            display: block;
        }

        .left-container img {
            width: 400px;
            height: 400px;
            margin-top: -20px;
            margin-left: 50px;
        }

        .right-container {
            margin-top: -15px;

        }
       

        .right-container h1 {
            margin-bottom: 10px;
        }

        .covid-img-prevention {
            width: 200px;
            height: 200px;
        }

        .covid-contents p figcaption {
            text-align: center;
            width: 50%;
        }
        #myBtn{
            position: fixed;
        }

    }

    @media (max-width:840px) {
        .update {
            margin-top: 30px;
        }

        .awareness h3,
        h2 {
            text-align: center;
            font-size: 1.5rem;
            margin: 0 20px;
        }

        .row .precaution-img img {
            width: 20px;
            height: 20px;
        }

        .left-container img {
            width: 400px;
            height: 400px;
            margin-top: -20px;
        }

        .right-container {
            margin-top: 10px;
            margin-bottom: 40px;
        }

        .right-container h1 {
            margin-bottom: 10px;
        }

        .left-container img {
            width: 300px;
            height: 300px;
            margin-top: -20px;
        }

        .right-container h1 {
            font-size: 2rem;
        }

        .right-container p {
            font-size: 13px;
            width: 100%;
            height: 450px;
        }

        .covid-img-prevention{
            width: 150px;
            height: 150px;
        }
        #myBtn{
            position: fixed;
        }
    }
</style>