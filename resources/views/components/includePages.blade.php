<div class="activeBody no width">
            <p class="bold mt-2 mt-2s" style="margin-left: 20px;">Include on this page:</p>
            <table class="table_on-staep_3 spaces add-pages">
                <tr class="d-flex space-between">
                    @foreach ($includes as $include)
                        <td>
                            <input class = "includes" type="checkbox" name="includeOnPage[]" value="{{$include->includeonpages}}" 
                                price = "{{$include->price == null ? 0.00 : $include->price}}" id="include_{{$include->includeonpages}}">
                            <label for="include_{{$include->includeonpages}}">{{$include->includeonpages}} @if ($include->price != null) - ${{$include->price}} @endif </label>
                        </td>
                    @endforeach
                </tr>

            </table>

            <div class="add-pages-container" style="padding: 0 20px;">

            @foreach ($includes as $include)
                @if ($include->description != "")
                    <div class="optionalRow">
                        <div class="left">
                            @if ($include->image != "")
                                <img src="images/{{$include->image}}" alt="include's logo">
                            @endif
                                {{$include->includeonpages}}
                        </div>
                        <div class="right">
                            <a class="link-remove"><img src={{"/images/trash(2).png"}} alt=""> Remove</a>
                            <p class="bold">
                            {{$include->includeonpages}}
                            </p>
                            <p class="details">

                            <strong>@if ($include->price != null) $ {{$include->price}} @endif</strong>
                            <br>
                            {{$include->description}}
                            
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        </div>
</div>