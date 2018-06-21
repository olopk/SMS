<nav class="navbar navbar-default">
    <div class="container-fixed">
        <ul class="nav navbar-nav navbar-right">
          <li class=" <?php (!isset($_GET['page'])) ? print('active') : null;?>"><a href="index.php">SMS</a></li>
          <li <?php ($_GET['page'] == 'kontakty') ? print('class="active"') : null;?>><a href="index.php?page=kontakty">KONTAKTY</a></li>
          <li><a href="index.php?page=grupy">GRUPY</a></li>
          <li><a href="?page=szablony">SZABLONY</a></li>
          <li><a href="?page=logout">WYLOGUJ</a></li>
        </ul>
    </div>
</nav>

