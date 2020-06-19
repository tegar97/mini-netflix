

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

    <style>
        #preview {
            border: 2px solid #2121212;
            width: 54rem;
            height: 100%;
        }
    </style>
    <title>MINI NETFLIX</title>

</head>

<body>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
      </div>
        <nav class="main-nav">
        <a href="index.php">
            <img src="./img/neflix.png" alt="Logo Netflix" class="logo">
            </a>
            <ul class="main-menu">
                <li><a href="#">Best Movie</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Series FIlm</a></li>
                <li><a href="#">Upgrage Netflix</a></li>
            </ul>
            
            <ul class="right-menu">
                 <li><i class="fas fa-search text-white"></i></li>
                 <li><i class="fas fa-shopping-cart text-white"></i></li>
                 <li id="dark-mode-toggle"><i class="fas fa-adjust text-white"></i></li>
            </ul>
        </nav>

        <main class="container">
                <section class="add_movie">
                    <h2 class="mt-5">ADD MOVIE</h2>
                    <form action="./post.php" method="POST" class='form mt-5'>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="NAMA MOVIE">
                            <label for="name" class="form-label">NAMA</label>
                
                        </div>
                        <div class="form-group">
                            <input type="number" name="score" id="score" class="form-input" placeholder="SCORE FILM">
                            <label for="score" class="form-label">Score</label>
                
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="NAMA MOVIE">
                            <label for="name" class="form-label">NAMA</label>
                
                        </div>
                        <div class="form-group">
                            <input type="file" id="photo">
                        </div>
                        <div id="preview">
                            <img id="imgPrevie">
                        </div>
                  
                        <button type='submit' class="btn">SUBMIT</button>
                      
                    </form>
            </section>
            
        </main>
 



</table>
<script src="./main.js"></script>

    
</body>
</html>