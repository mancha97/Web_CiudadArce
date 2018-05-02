<footer>
    <div class="container">
        <p>&copy; Universidad Centroaméricana José Simeón Cañas. </p>
        <ul class="list-inline">
        <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li class="list-inline-item">
                            <a id="navBtn" href="contacto.php?#contentHolder">Contacto</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li class="list-inline-item">
                    <a id="navBtn" href="contacto.php?#contentHolder">Contact</a>
                </li>'; }?>
             <?php 
                if(isset($_SESSION['language']) && $_SESSION['language']==1){
                            echo '<li class="list-inline-item">
                            <a href="session.php?#contentHolder">Modulo de Administración</a>
                        </li>';
                }else if(isset($_SESSION['language']) && $_SESSION['language']==0){
                    echo '<li class="list-inline-item">
                    <a href="session.php?#contentHolder">Administration module</a>
                </li>'; }?>
            
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
                echo "<li class="."list-inline-item".">
                <a href="."logout.php".">Sign Out</a> 
            </li>";
            }  ?>
            
        </ul>
    </div>
</footer>
