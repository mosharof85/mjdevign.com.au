<div class="activeBody">

    <div class="add">
        <p class="slight" style="
    color: #000000;">
            Additional Features
        </p>
        <p>
            Additional features can be added now, during or after development.
        </p>
    </div>
    <div class="container-fluid">
        <div class="sec-space">


            <div class="sell-">

                <div class="names">

                    <table class="table_on-staep_3 add-feature">
                        <tr class="d-flex space-between">
                        @foreach ($features as $feature)
                            <td>
                                <input class="features" type="checkbox" name="additionalFeature[]" value="{{$feature->featurename}}"
                                       data-img="images/{{$feature->image}}" data-desc="{{$feature->description}}"
                                       price = "{{$feature->price == null ? 0.00 : $feature->price}}" id="feature_{{$feature->featurename}}">
                                <label for="feature_{{$feature->featurename}}">{{$feature->featurename}} @if ($feature->price != null) - ${{$feature->price}} @endif</label>
                            </td>
                        @endforeach
                        </tr>
                    </table>

                    <div class="add-feature-container">

                        @foreach ($features as $feature)
                            @if ($feature->description != "")
                                <div class="optionalRow">
                                    <div class="left">
                                    @if ($feature->image != "")
                                        <img src="images/{{$feature->image}}" alt="feature's logo">
                                    @endif
                                        {{$feature->featurename}}
                                    </div>
                                    <div class="right">
                                        <a class="link-remove"><img src={{"/images/trash(2).png"}} alt=""> Remove</a>
                                        <p class="bold">
                                            {{$feature->featurename}}
                                        </p>
                                        <strong>@if ($feature->price != null) $ {{$feature->price}} @endif</strong>
                                        <p class="details">
                                            {{$feature->description}}
                                        </a>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>