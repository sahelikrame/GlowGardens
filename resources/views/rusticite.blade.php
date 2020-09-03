@extends('layouts.app')

@section('content')
<div style="background-color: whitesmoke">
<div style="padding-top:40px">
    <img src="https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2015/09/carte-zones-rusticite.jpg" alt="CarteRusticité" style="height:500px;margin-left:30px">
    <div class="float-right" style="margin-right:50px;width:750px;padding:10px">
        <h3>Carte de rusticité ou zones de rusticité France</h3>
        <hr>
        La culture des plantes et des légumes dépend très largement de la région où ils sont cultivés, donc bien sûr du temps qu’il y fait, du niveau d’ensoleillement, du niveau des précipitation et des températures.
        Selon qu’on habite (de manière caricaturale) dans le sud ou bien dans le nord, évidemment, en façade océanique ou aux frontières de l’est, en plaine ou en montagne, le climat est largement différent. Je vous propose deux cartes, pas d’une précision chirurgicale, mais qui donnent une bonne idée des climats et des zones de rusticité de france métropolitaine.Les climats de france métropolitaine s’échelonnent entre la zone 5, là où les températures sont les plus basses, en hiver, entre -23 et -28 °C jusque la zone 10 où, de manière générale on peut considérer que les températures ne deviennent (sauf exception) jamais négatives, avec des températures hivernales qui situent entre 1 et 2 °C.Vous pouvez donc, en fonction des plantes que vous souhaitez cultiver, consulter cette carte de rusticité. c’est en quelques sorte une « carte des températures les plus froides ». Certes, vous savez bien le temps qu’il fait chez vous, dans votre département, mais parfois, on peut découvrir de vraies petites originalités… Comme par exemple en normandie où dans le département de la manche par exemple, dans le sens est/ouest le département est divisé en 2 zones de rusticité. avec de grands écarts de températures puis que sur la côte ouest (Zone 9b) les températures pourront être légèrement négatives tandis qu’à l’est de la manche (Zone 8b), les températures pourront atteindre quasiment -10 °C ! Marrant non ?</div>
</div>
<br>
<div style="padding:40px">
    <h3>Climat et ructicité</h3>
    <hr>
    <ul>
        <li>Climat montagnard = zone de rusticité 5 : Entre – 28 et -23°C</li>
        <li>Climat océanique dégradé =
            zone de rusticité 6 : Entre -23 et -18°C</li>
        <li>Climat océanique altéré =
            zone de rusticité 7 : Entre -18 et -12°C</li>
        <li>Climat océanique altéré =
            zone de rusticité 8a : -12,2 et -9,4°C <br>
            zone de rusticité 8b : -9,4 et -6,7°C</li>
        <li>Climat méditéranée altéré =
            zone de rusticité 9a : -6,7 et -3,9°C</li>
        <li>Climat méditerranéen  franc =
            zone de rusticité 9b : -3,9 et -1,1°C <br>
            zone de rusticité 10 : Entre 1,1 et 2C</li>
    </ul>

    <br>
    <center>
        <div class="copyright"> Copyright &copy;2020 - 2021 <span><a href="{{url('/')}}" title="GlowGardens.com" ><span>GlowGardens.com</span></a></span>. Glow Gardens.com est édité par Ikrame SAHEL - Tout droit réservé</div>
    </center>

</div>
</div>
@endsection