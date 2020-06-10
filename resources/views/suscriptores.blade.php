<div>
    <h2>Suscriptores</h2>
    @foreach($suscriptorLista as $suscriptor)
        {{$suscriptor->id}} .- Nombre: {{$suscriptor->nombre}} - email: {{$suscriptor->email}} <br/>
        @endforeach
</div>
