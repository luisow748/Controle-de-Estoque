<div class="col-3 border  rounded m-1">
    <!-- Seção -->
    <label for="section" class="">Seção</label>
    <select  class="form-control" name="section" id="section" >
        <option >Escolha uma Seção</option>
        @foreach($section as $sec)
            <option value="{{$sec->id_section}}">{{$sec->name}}</option>
        @endforeach
    </select>

</div>
