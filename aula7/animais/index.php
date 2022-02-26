<center>
    <?php
        include_once "mamifero.php";
        include_once "aves.php";
        include_once "reptil.php";
        include_once "cachorro.php";
        
        // require_once "mamifero.php";
        echo "<h2>Dog</h2>";
        $dog = new Cachorro();
        $dog->__set("alimento", "Pedigree");
        $dog->__set("nome", "geraldo");
        $dog->__set("corPelo", "cinza");
        $dog->andar(30);
        $dog->comer();

        echo "<h2>Ave</h2>";
        $ave = new Ave();
        $ave->__set("alimento", "minhoca");
        $ave->__set("nome", "falcão");
        $ave->__set("corPena", "marrom");
        $ave->andar(10);
        $ave->comer();
        

        echo "<h2>Reptil</h2>";
        $rep = new Reptil();
        $rep->__set("alimento", "Cobra");
        $rep->__set("nome", "Cobra");
        $rep->__set("corEscama", "Preta");
        $rep->andar(5);
        $rep->comer();
     
        echo "<h2>Mamifero</h2>";
        $rep = new Mamifero();
        $rep->__set("alimento", "cenoura");
        $rep->__set("nome", "coelho");
        $rep->__set("corPelo", "Branquinho");
        $rep->andar(15);
        $rep->comer();
        
        
    ?>
</center>