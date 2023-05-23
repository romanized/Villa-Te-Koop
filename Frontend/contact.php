<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../MEDIA/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/colors.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../JS/contact.js" async defer></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="../MEDIA/logo.jpg" alt="Logo" class="logo">
                Villas4U
            </div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        <iv class="container">
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.353165409691!2d4.475485377227434!3d51.92751147191191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a824865b55%3A0xed9327576594ffe!2sHeer%20Bokelweg%20255%2C%203032%20AD%20Rotterdam!5e0!3m2!1snl!2snl!4v1684832628552!5m2!1snl!2snl" width="900" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit dolorum consequuntur illo officia voluptas, laboriosam vitae quaerat, incidunt doloribus nostrum eius, asperiores amet. Neque, beatae. Laudantium, beatae! Pariatur, laborum praesentium.</p></div>
        <div><div class="form-container">
              <div class="row header">
            <h1>CONTACT ONS &nbsp;</h1>
            <h3>Vul de onderstaande informatie zo duidelijk mogelijk op</h3>
          </div>
          <div class="row body">
            <form action="#">
              <ul>
                
                <li>
                  <p class="left">
                    <label for="name">Uw naam <span class="req">*</span></label>
                    <input type="text" name="first_name" placeholder="Jan Pieter" required/>
                  </p>
                  <p class="pull-right">
                    <label for="last_name">Adres</label>
                    <input type="text" name="last_name" placeholder="Heer Bokelweg 255"/>      
                  </p>
                </li>
                <li>
                  <p class="left">
                    <label for="email">Email <span class="req">*</span></label>
                    <input type="email" name="email" placeholder="jan.pieter@gmail.com" required/>
                  </p>       
                <p class="pull-right">
                    <label for="telefoonnummer">Telefoonnummer <span class="req">*</span></label>
                    <input type="text" name="last_name" placeholder="06 12345679" required/>      
                  </p>
                <li><div class="divider"></div></li>
                <li>
                  <label for="comments">Vraag / Opmerking:</label>
                  <textarea cols="46" rows="3" name="comments" required></textarea>
                </li>
                
                <li>
                    <button>
                        <div class="svg-wrapper-1">
                          <div class="svg-wrapper">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                            </svg>
                          </div>
                        </div>
                        <span>Send</span>
                      </button>
                </li>
                
              </ul>
            </form>  
          </div>
          </div>
            </div>
          
        </div>
      </main>

        <footer class="bg-[#252525] flex justify-center flex-row mt-4 text-white px-6 pb-[8rem] pt-[4rem]">
            <div class="grid grid-cols-4 gap-12 max-[900px]:grid-cols-none max-[900px]:grid-rows-4 max-[820px]:pb-none">
                <div>
                    <h4 class="text-[30px] font-semibold text-[#f0bebb]">Locaties:</h4>
                    <ul class="mt-2">
                        <li class="mt-2 hover:text-[#f0bebb] duration-300">
                            Amsterdam
                            Reguliersdwarsstraat
                            Centraal
                        </li>
                        <li class="mt-2 hover:text-[#f0bebb] duration-300">
                            Rotterdam
                            Hartmanstraat
                            Witte de With
      
                        </li>
                        <li class="mt-2 hover:text-[#f0bebb] duration-300">
                            Rotterdam
                            Weena
                            Centraal Station
      
                        </li>
                        <li class="mt-2 hover:text-[#f0bebb] duration-300">
                            Rotterdam
                            Karaoke & Cafe
                            Weena
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h4 class="text-[#f0bebb] font-semibold text-[30px]">Openingstijden:</h4>
                    <table class=mt-2 table-fixed">
                        <tr>
                            <td>Maandag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                        <tr>
                            <td>Dinsdag</td>
                            <td class="pl-6">Gesloten</td>
                        </tr>
                        <tr>
                            <td>Woensdag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                        <tr>
                            <td>Donderdag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                        <tr>
                            <td>Vrijdag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                        <tr>
                            <td>Zaterdag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td class="pl-6">4:45pm – 110pm</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <h4 class="font-semibold text-[30px] text-[#f0bebb]">Contact:</h4>
                    <h5></h5>
                    <h5></h5>
                    <h5 class="mt-3"><a class="hover:text-[#f0bebb] duration-300" href="telto:"></a>
                    </h5>
                    <h5><a class="hover:text-[#f0bebb] duration-300"
                            href="mailto:"></a></h5>
                    <h5 class="mt-3"></h5>
                    <h5></h5>
                </div>
                <div class="text-white self-center">
                    <h4 class="opacity-75">© 2023 Villas4U</h4>
                    <h4>Site built by Maddox, Nebi, Rayane</h4>
                </div>
            </div>
      
        </footer>
</body>

</html>
