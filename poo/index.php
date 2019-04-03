<?php
    class Heroi
    {
        public $nome;
        private $vida;
        private $dano;
        private $escudo;

        function Heroi($nome, $vida, $dano, $escudo)
        {
            $this->nome = $nome;
            $this->vida = $vida;
            $this->dano = $dano;
            $this->escudo = $escudo;
        }

        function Apresentacao()
        {
            echo "Olar, sou " . $this->nome . "<br>";
        }

        function AddVida($valor)
        {
            $this->vida += $valor;
            echo $this->nome . ": Recebi " . $valor . " de vida. <br>";
        }

        function FalaVida()
        {
            echo $this->nome . ": Minha vida agora é: " . $this->vida . "<br>";
        }

        function LevaDano($dano)
        {
            $this->vida = $this->vida - ($dano - $this->escudo);

            $aux = $dano - $this->escudo;

            echo $this->nome . ": Levei $dano de dano, refleti $aux com meu escudo e fiquei com: " . $this->vida . " de vida<br>";
        }

        function Ataca($heroi)
        {
            echo $this->nome . ": Ataquei: " . $heroi->nome."<br>";
            $heroi->LevaDano($this->dano);
        }
    }

    class Suporte extends Heroi
    {
        private $valorCura;

        function Suporte($nome, $vida, $dano, $escudo, $valorCura)
        {
            parent:: __construct($nome, $vida, $dano, $escudo);
            $this->valorCura = $valorCura;
        }

        function Cura($heroi)
        {
            echo $this->nome . ": Curei: " . $heroi->nome. "<br>";
            $heroi->AddVida($this->valorCura);
        }
    }

    $bonecoMoira = new Heroi("Moira", 100, 100, 30);

    $bonecoMoira->Apresentacao();

    $bonecoMoira->FalaVida();

    $bonecoTracer = new Heroi("Tracer", 150, 50, 30);

    $bonecoTracer->Apresentacao();

    $bonecoMercy = new Suporte("Mercy", 95, 35, 30, 50);

    $bonecoMercy->Apresentacao();
    

    $bonecoTracer->Ataca($bonecoMoira);

    $bonecoMercy->Cura($bonecoMoira);

    $bonecoMercy->Ataca($bonecoTracer);

    $bonecoMoira->FalaVida();
?>