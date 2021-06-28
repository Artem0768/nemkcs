<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5  class="my-0 mr-md-auto font-weight-normal" >Nemk CS:GO </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/admin">Головна</a>
        <a class="p-2 text-dark" href="./turnirs.php">Турніри</a>
        <? if (!isset($_COOKIE['log'])): ?>
            <a class="p-2 text-dark" href="./auth.php">Увійти</a>
            <a class="p-2 text-dark" href="./reg.php">Реєстрація</a>
        <? else: ?>
            <a class="p-2 text-dark" href="./add.php">Додати новину</a>
            <a class="p-2 text-dark" href="./add_turnir.php">Додати турнір</a>
            <a class="p-2 text-dark" href="./code/exit.php">Увійти</a>
        <? endif; ?>
    </nav>
    
</header>