<header class="menu-bar">
    <table>
        <tr>
            <td>blog</td>
            <td>
                <ul>
                    <li>
                        <a href="/BLOG/index.php" class="<?=(!isset($_GET["page"]) ?
                        "menu-active" :""); ?>">Home</a>
                    </li> 

                    <li>
                        <a href="/BLOG/pages/Articles.php?page=Articles" class="<?=(isset($_GET["page"]) &&
                        $_GET["page"] == "Articles" ? "menu-active" :"");?>">Articles</a>
                    </li>

                    <li>
                        <a href="/BLOG/pages/Inscription.php?page=Inscription"class="<?=(isset($_GET["page"]) &&
                        $_GET["page"] == "Inscription" ? "menu-active" :"");?>">Inscription</a>
                    </li>

                    <li>
                        <a href="/BLOG/pages/Connexion.php?page=Connexion"class="<?=(isset($_GET["page"]) &&
                        $_GET["page"] == "Connexion" ? "menu-active" :"");?>">Connexion</a>
                    </li>
                </ul>     
            </td>
        </tr>
    </table>
</header>