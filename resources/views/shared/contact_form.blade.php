<form>
    <div class="row">
        <div class="col-lg-6">
            @include('components.input', ['name' => 'firstname', 'placeholder' => 'Prénom'])
        </div>
        <div class="col-lg-6">
            @include('components.input', ['name' => 'lastname', 'placeholder' => 'Nom'])
        </div>
        <div class="col-lg-6">
            @include('components.input', ['name' => 'email', 'placeholder' => 'Email', 'type' => 'email'])
        </div>
        <div class="col-lg-6">
            @include('components.input', ['name' => 'phone', 'placeholder' => 'Tel'])
        </div>
        <div class="row">
            <div class="form-group ">
                <label class="text-center">Sujet</label>
                <select class="form-control w-100 service_select_js" style="background-color: #fff; border: 1px solid #bbc0c8;">
                    @foreach($cateories as $category)
                        <option value="{{$category->value}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <textarea  name="message" class="form-control core_message_js" placeholder="Message" style="background-color: #fff; border: 1px solid #bbc0c8; color: #aeaeae;"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-btn">
                <button class="btn btn-inline" type="submit" id="submit_contact_form_js">
                    <i class="fas fa-paper-plane"></i>
                    <span>Envoyer</span>
                </button>
            </div>
        </div>
    </div>
</form>
