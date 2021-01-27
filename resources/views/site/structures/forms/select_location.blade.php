    <!-- Local -->
<laber for='location'>Localização Física do Item:</laber>
    <select  class="form-control" name="location" id="location" >

        <option >Escolha um Local</option>

        @if(isset($items->location))
            <option selected value="{{$items->location}}">
                {{$items->location}}
            </option>
        @endif

        @foreach($location as $l)
            <option value="{{$l->name}}">
                {{$l->name}}
            </option>
        @endforeach
    </select>
