<header>
  <nav>
    <a href="index.php"><i class="fas fa-book-open titleSite"></i></a>
    <a href="index.php" class="titleSite">Jean Forteroche <i>acteur et écrivain</i></a>
  </nav>
  <div id="adminCo" class="adminCo">
    <i class="fas fa-user"></i>
    <p class="adminButtonCo">Admin</p>
  </div>
    <form id=formCo method="post">
      <input id="idName" type="text" name="ID" value="Identifiant">
      <input id="idPassword" type="password" name="password" value="mdp">
      <input id="idConfirm" type="submit" value="confirmer">
    </form>
<?php print_r($_POST); ?>
<?php print_r($_GET); ?>
</header>
