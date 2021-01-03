<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      a{
        text-decoration: none;
      }
      .my-header{
        width: 100%;
        height: 600px;
        overflow: hidden;
        position: relative;
      }
      .my-header .navbar{
        background: rgba(0,0,0,0.3)!important;
      }
      .gb-depan{
        width: 100%;
        height: 600px;
        object-fit: cover;
        position: absolute;
        top: 0;
        z-index: -1;
        filter: brightness(0.5);
      }
      .navbar img{
        width: 130px;
        margin: 10px 30% 10px 20%;
      }
      .navbar-nav a:hover{
        text-decoration: underline;
      }
      .t-depan{
        top: 50%;
        left: 50%;
        width: 50%;
        position: absolute;
        color: white;
        transform: translate(-50%,-50%);
        text-align: center;
      }
      section{
        padding: 80px 0;
        height: 500px;
      }
      .students{
        background: pink;
      }
      .bawah{
        margin-bottom: 1000px;
      }
      .about img{
        margin: 120px 0 0 100px;
      }
      .contact label{
        padding-right: 5px;
      }
      .contact table{
        width: 80%;
      }
      .footer a{
        color: #333;
      }
      .footer a:hover{
        text-decoration: underline;
      }
      @media(max-width: 576px;) {
        .gb-depan{
          width: 50%;
        }
      }
    </style>
  </head>
  <body>
    <div class="my-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
          <img src="https://axiooclassprogram.org/wp-content/themes/acp/images/axioo-logo-white.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#students">Students</a>
                <a class="nav-link" href="#contact">Contact</a>
              </div>
            </div>
          </div>
        </nav>
        <img class="gb-depan" src="https://i2.wp.com/smkwidyadharma.sch.id/wp-content/uploads/2017/06/Smart-School-SMK-WD.jpg?resize=960%2C636" alt="">
        <div class="t-depan">
          <h1>Lorem Ipsum</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet iure sint aut sed minus quam non quisquam maxime, ipsa magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, culpa?</p>
          <button class="btn btn-light">Register</button>
        </div>
    </div>

    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus impedit nam enim corporis, culpa sit illo tempora totam odit, cupiditate, voluptatum consequuntur. Quas ab, libero perferendis mollitia, illum earum asperiores corporis blanditiis praesentium enim fugiat accusamus amet beatae sequi quae assumenda laboriosam. Cupiditate quibusdam eveniet quos amet dicta esse placeat, aspernatur quia provident. Optio perspiciatis dolores quo alias dignissimos dolorum repudiandae cumque nam, culpa odio facilis totam? Non quis cumque quam adipisci voluptatum, similique magnam reprehenderit obcaecati soluta eveniet quod doloremque deleniti temporibus aliquid a? Magnam ea nesciunt reprehenderit sed quasi reiciendis ex maxime, esse, repellendus accusantium iure veniam explicabo?</p>
          </div>
          <div class="col">
            <img src="https://i1.wp.com/smkwidyadharma.sch.id/wp-content/uploads/2017/06/axioo-class-program-logo.png?ssl=1" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="students" id="students">
      <div class="container">
       <div class="row">
        <div class="col">
        <h1>Students</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque tempora ducimus distinctio alias quidem exercitationem dolorum omnis, tempore ipsam velit. Fuga iste animi nam earum. Nihil, illo debitis? Ut voluptate beatae ex odit nam ratione voluptatibus rem est provident fugit cupiditate veniam repellendus, aut consectetur quis dolore optio vel qui harum ipsa fugiat! Praesentium asperiores consequatur vero voluptas natus aliquid ullam ipsa explicabo iste ipsam impedit itaque facere, nisi molestias amet inventore saepe dolores, unde ut doloribus accusamus minima magnam? Voluptatum vero quasi accusamus, quas tenetur fugit consequatur, nesciunt dolor magni nobis ratione nisi laborum incidunt? Asperiores, odio nobis?</p>
        </div>
       </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <h1>Contact</h1>
          <div class="col-7">
            <form>
              <table cellpadding="5">
                <tr>
                  <td><label for="name" class="form-label">Nama</label></td>
                  <td><input type="text" class="form-control" id="name"></td>
                </tr>
                <tr>
                  <td><label for="email" class="form-label">Email</label></td>
                  <td><input type="email" class="form-control" id="email"></td>
                </tr>
                <tr>
                  <td><label for="website" class="form-label">Website</label></td>
                  <td><input type="text" class="form-control" id="website"></td>
                </tr>
                <tr>
                  <td><label for="message" class="form-label">Message</label></td>
                  <td><textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea></td>
                </tr>
              </table>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          <div class="col-5">
            <img src="https://i1.wp.com/smkwidyadharma.sch.id/wp-content/uploads/2017/06/axioo-class-program-logo.png?ssl=1" alt="">
          </div>
        </div>
      </div>
    </section>


    <section class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>&copy; 2019 Axioo Class Program</p>
          </div>
          <div class="col text-end">
            <a href="#" class="">back to top</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>