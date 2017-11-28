<div class="container">

    <div class="row">
        <h2>Stylish Search Box</h2>
        <form id="logout-form" action="{{ route('search') }}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    @if(isset($key))
                        <input type="text" id="content" name="content" class="  search-query form-control" placeholder="Search" value="{{$key}}" />
                    @else
                        <input type="text" id="content" name="content" class="  search-query form-control" placeholder="Search" />
                    @endif
                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">
                                            <span class=" glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                </div>
            </div>
        </form>
    </div>
</div>
<br><br>