<?php $usr2 = "f0ll0wB4ck"; $usr1 = "m0ss"; $noName = "m1r4g3"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat</title>
        <link rel="stylesheet" href="<?php echo $noName ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    </head>
    
    <body class="body">
        <br><h1 class="bienvChat">
            <?php
                $num = random_int(1, 3);
                if ($num === 1) {
                    echo "BIENVENIDO A SU CHAT SECRETO";
                } 
                if($num === 2){
                    echo "=*-´-_&-?-_*¨!#_%:_";
        
                }
                if($num === 3){
                    echo "B13NV3N1D0 4 SU CH4T S3CR3T0";
                    
                }
            ?>
        </h1>
        
        <?php
            require '../definiciones.php';
            echo menuPerfil;
        ?>
        <br><a href='<?php echo "../".$usr1."/".$usr2 ?>' class="volverAtras">Ir al menú principal</a>
        
        <section class="sec">
            <div class="centrarCaja">
                <a class="cajaCentralTexto">
                    <?php
                        $name = random_int(1, 3);
                        if ($name === 1) {
                            echo "This CH4T";
                        }
                        if($name === 2){
                            echo "=*-´-_&-?-_*¨!#_%:_";
                        }
                        if($name === 3){
                            echo "B13NV3N1D0 4 SU CH4T S3CR3T0";
                        }
                    ?>

                    <textarea type="text" class="chatCodificado" maxlength="110" name="texto" oninput="checkLength(this)" onkeydown="submitOnEnter(event)"></textarea>
                    <input type="submit" class="chatCodificadoSubmit" value="Submit">
                    <script>
                        function checkLength(input) {
                            if (input.value.length % 19 >= 0 && input.value.length % 19 === 0) {
                                input.value += '\n';
                            }
                        }
                        function submitOnEnter(event) {
                            if (event.keyCode === 13) {
                                event.preventDefault();
                                event.target.form.submit();
                            }
                        }
                    </script>
                </a>
                
            </div>
            
        </section>

        <script>
            for(let i = 1; i <= 760; i++){
                let box = document.createElement('div');
                box.classList.add('box');
                document.querySelector('.sec').appendChild(box);
            }
            function animateBox() {
                let boxes = document.querySelectorAll('.box');
                let num = Math.floor(Math.random()*boxes.length);
                boxes[num].classList.toggle('animate')
            }
            setInterval(animateBox);
        </script> 
        
        
    </body>
</html>