    <!-- Local -->

    <select  class="form-control" name="location" id="location" >

        <option >Escolha um Local</option>

        @if(isset($items->location))
            <option selected value="{{$items->location}}">
                {{$items->location}}
            </option>
        @endif

        @foreach($loc as $l)
            <option value="{{$l->name}}">
                {{$l->name}}
            </option>
        @endforeach
    </select>
