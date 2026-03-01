<header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href={{ route ('home')}}>Accueil</a></li>
                    <li><a href={{ route ('category',['slug'=>'informatique'])}}>Informatique</a></li>
                    <li><a href={{ route ('category',['slug'=>'petit_electromenager'])}}>Petit Électroménager</a></li>
                    <li><a href={{route ('category',['slug'=>'grand_electromenager'])}}>Grand Électroménager</a></li>
                    <li><a href={{ route ('cgv')}}>CGV</a></li>
                    <li><a href={{ route ('contact')}}>Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>