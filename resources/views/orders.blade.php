<!--


            $table->id();
            $table->string("name");
        
     
            $table->double("Overall volume");
            $table->double("Overall volume");
            $table->timestamps("orderTime");
 -->

<h1>Orders</h1>
<table>
<tr>
<th>name</th>
<th>Overall volume</th>
<th>waste</th>
<th>orderTime</th>

</tr>
@foreach($data as $item)
<tr>
<td>{{$item['name']}}</td>
<td>{{$item['Overall volume']}}</td>
<td>{{$item['waste']}}</td>
<td>{{$item['created_at']}}</td>
</tr>




@endforeach
</table>

