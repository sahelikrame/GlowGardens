@extends('layouts.app')

@section('content')
<div style="background-color: whitesmoke">
    <div style="padding:40px 0px">
        <img src="https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2015/09/carte-zones-climats.jpg" alt="CarteRusticité" style="height:500px;margin-left:30px">
        <div class="float-right" style="margin-right:50px;width:750px;padding:10px">
            <h3>Carte du climat de France</h3>
            <hr>
            <p>Vous connaissez la carte du climat de france ? Le climat de france mais plus précisément le climat de votre région, ville ou encore département ? Comment savoir, quand on lit un article de jardinage, quand on consulte la fiche d’une plante, si elle est adaptée au climat et si on pourra la planter au jardin d’ornement ou bien au jardin potager ?

                Ben oui comment ? Ben en jetant un coup d’oeil sur la carte ci-dessous. une carte simplifier pour repérer facilement les climats de votre région !
                
                Retrouvez également la carte de rusticité, qui vous permet de connaitrez les températures les plus basses, en hiver, zone par zone !</p>

                <ul>
                    <li>Climat de type 1 : Montagne</li>
                    <li>Climat de type 2 : Semi-continental et des marges montagnardes</li>
                    <li>Climat de type 3 : Océanique dégradé des plaines du Centre et du Nord</li>
                    <li>Climat de type 4 : Océanique altéré</li>
                    <li>Climat de type 5 : Océanique franc</li>
                    <li>Climat de type 6 : Méditéranéeen altéré</li>
                    <li>Climat de type 7 : Bassin du sud-Ouest</li>
                    <li>Climat de type 8 : Méditéranéen franc</li>
                </ul>
        </div>
        <center>
            <div class="copyright"> Copyright &copy;2020 - 2021 <span><a href="{{url('/')}}" title="GlowGardens.com" ><span>GlowGardens.com</span></a></span>. Glow Gardens.com est édité par Ikrame SAHEL - Tout droit réservé</div>
        </center>
    </div>
</div>
@endsection