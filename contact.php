<img src="images/small.jpg" class="img-responsive" style="margin: 0 auto; width: 100%;">
<div class="page">

    <div class="container">

        <div class="row">

            <h2 style="font-family:'Montserrat'; font-size: 25px; ">Contact us</h2>



            <div class="reservo3">



                <p class="resparagraph">PLEASE FILL UP THE FOLLOWING FORM <span class="glyphicon glyphicon-user"></span>
                    :</p> <br>



                <p class="plz_red">

                    <?php 

          if (isset($_GET["sentok"])){

            ?>

                    Thank you for filling the form. We will get back to you shortly!

                    <?php

          }

          elseif (isset($_GET['err']))

          {



          }

          ?>



                </p>











                <form class="form-horizontal" role="form" action="./contact_send" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="inputName" class="col-sm-2">Name</label>

                        <div class="col-sm-10">

                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2">Email</label>

                        <div class="col-sm-10">

                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputsubject" class="col-sm-2">Phone No.</label>

                        <div class="col-sm-10">

                            <input type="tel" class="form-control" name="phone" id="inputsubject"
                                placeholder="Phone no">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputsubject" class="col-sm-2">Subject</label>

                        <div class="col-sm-10">

                            <input type="text" class="form-control" name="subject" id="inputsubject"
                                placeholder="Subject">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputPassword3" class="col-sm-2">Message</label>

                        <div class="col-sm-10">

                            <textarea class="form-control" rows="5" name="message"
                                placeholder="Your Message Here...."></textarea>

                        </div>

                    </div>



                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">

                            <button type="submit" class="btn btn-default">Submit</button>

                        </div>

                    </div>

                </form>











                <div class="clearfix"></div>



            </div>
            <!--row-->









            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689207166!2d85.2911131924467!3d27.7090319335391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1584668768294!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!--welcome-->