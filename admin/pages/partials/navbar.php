<nav>
    <div class="brand">
        <a href="index.php?page=dashboard">
            <h3>UJON V.1.0</h3>
        </a>
    </div>
    <div class="toggle">
        <button class="btn" id="btn-toggle">&#9776;</button>
    </div>
    <ul>
        <?php
            foreach($pg as $v){
                echo "<li><a href=".$v['pages_url'].$v['pages_name'].">".$v['pages_desk']."</a></li>"; 
            }
        ?>
    </ul>
</nav>