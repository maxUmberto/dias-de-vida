<?php
include 'diasDeVidaResult.php'
?>
<link rel="stylesheet" type="text/css" href="style.css">
<h1> DIAS DE VIDA </h1>

<div class="container">
    <h4>Insira sua data de nascimento</h4>

    <div class="formulario">
        <form method="post">
            <div class="campo">
                Dia:
                <select name="dia" class="selecao">
                    <?php
                        for($i = 1; $i <= 31; $i++){
                            echo '<option value='.$i.'>'.$i.'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="campo">
                Mês:
                <select name="mes" class="selecao">
                    <?php
                        for($i = 1; $i <= 12; $i++){
                            echo '<option value='.$i.'>'.$i.'</option>';
                        } 
                    ?>
                </select>
            </div>

            <div class="campo">
                Ano:
                <select name="ano" class="selecao">
                    <?php
                        for($i = 2017; $i >= 1900; $i--){
                            echo '<option value='.$i.'>'.$i.'</option>';
                        }
                    ?>
                </select>
            </div>
            <br>
            <br>

            <input type="submit" value="Enviar" name="enviar" class="botao">
        </form>
    </div>
    <!-- div form -->
    <?php
        if(isset($_POST['enviar'])){
            echo '<link rel="stylesheet" type="text/css" href="style.css">';
            echo '<div class="resultado">';
            echo '<p>Você já viveu '.$total.' dias</p>';
            echo '</div>';
        }
    ?>

</div>
<!-- div container -->